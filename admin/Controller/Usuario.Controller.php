<?php

class Usuario extends AbstractController
{
    public $form;
    public $result;
    public $perfis;

    public function Index()
    {
    }

    public function MeuPerfilUsuario()
    {
        /** @var Session $us */
        $us = $_SESSION[SESSION_USER];
        $user = $us->getUser();
        $idUsuario = $user[md5(CO_USUARIO)];
        Redireciona('admin/Usuario/CadastroUsuario/'.Valida::GeraParametro('usu/'.$idUsuario));
    }

    public function CadastroUsuario()
    {
        /** @var PerfilService $perfilService */
        $perfilService = static::getService(PERFIL_SERVICE);

        $id = "CadastroUsuario";

        if (!empty($_POST[$id])):
            $this->salvaUsuario($_POST, $_FILES);
        endif;

        $idCoUsuario = UrlAmigavel::PegaParametro("usu");
        $res = array();
        if ($idCoUsuario):
            /** @var UsuarioService $usuarioService */
            $usuarioService = $this->getService(USUARIO_SERVICE);
            /** @var UsuarioEntidade $usuario */
            $usuario = $usuarioService->PesquisaUmRegistro($idCoUsuario);

            $res['ds_senha_confirma'] = $usuario->getDsSenha();
            $res[DS_SENHA] = $usuario->getDsSenha();
            if ($usuario->getCoImagem()->getDsCaminho()):
                $res[DS_CAMINHO] = "usuarios/" . $usuario->getCoImagem()->getDsCaminho();
            endif;
            $res[CO_USUARIO] = $usuario->getCoUsuario();
            $res[NO_PESSOA] = $usuario->getCoPessoa()->getNoPessoa();
            $res[DS_EMAIL] = $usuario->getCoPessoa()->getCoContato()->getDsEmail();
            $res[ST_SEXO] = $usuario->getCoPessoa()->getStSexo();
            $res[ST_STATUS] = $usuario->getStStatus();

            $res[NU_CPF] = $usuario->getCoPessoa()->getNuCpf();
            $res[NU_RG] = $usuario->getCoPessoa()->getNuRg();
            $res[DT_NASCIMENTO] = Valida::DataShow($usuario->getCoPessoa()->getDtNascimento());
            $res[NU_TEL1] = $usuario->getCoPessoa()->getCoContato()->getNuTel1();
            $res[NU_TEL2] = $usuario->getCoPessoa()->getCoContato()->getNuTel2();

            $res[DS_ENDERECO] = $usuario->getCoPessoa()->getCoEndereco()->getDsEndereco();
            $res[DS_COMPLEMENTO] = $usuario->getCoPessoa()->getCoEndereco()->getDsComplemento();
            $res[DS_BAIRRO] = $usuario->getCoPessoa()->getCoEndereco()->getDsBairro();
            $res[NO_CIDADE] = $usuario->getCoPessoa()->getCoEndereco()->getNoCidade();
            $res[NU_CEP] = $usuario->getCoPessoa()->getCoEndereco()->getNuCep();
            $res[SG_UF] = $usuario->getCoPessoa()->getCoEndereco()->getSgUf();
        endif;

        $this->form = UsuarioForm::Cadastrar($res, false, 6, $perfilService);
    }

    public function salvaUsuario($dados, $foto, $resgistrar = false)
    {
        /** @var EnderecoService $enderecoService */
        $enderecoService = $this->getService(ENDERECO_SERVICE);
        /** @var ContatoService $contatoService */
        $contatoService = $this->getService(CONTATO_SERVICE);
        /** @var UsuarioService $usuarioService */
        $usuarioService = $this->getService(USUARIO_SERVICE);
        /** @var PessoaService $pessoaService */
        $pessoaService = $this->getService(PESSOA_SERVICE);
        /** @var ImagemService $imagemService */
        $imagemService = $this->getService(IMAGEM_SERVICE);
        /** @var UsuarioPerfilService $usuarioPerfilService */
        $usuarioPerfilService = $this->getService(USUARIO_PERFIL_SERVICE);
        $session = new Session();
        if ($session->CheckSession(SESSION_USER)) {
            /** @var Session $us */
            $us = $_SESSION[SESSION_USER];
            $user = $us->getUser();
            $meusPerfis = $user[md5(CAMPO_PERFIL)];
            $meusPerfis = explode(',', $meusPerfis);
        } else {
            $meusPerfis = array();
        }
        $idCoUsuario = (isset($dados[CO_USUARIO]) ? $dados[CO_USUARIO] : null);

        $endereco = $enderecoService->getDados($dados, EnderecoEntidade::ENTIDADE);
        $endereco[SG_UF] = $dados[SG_UF][0];

        $contato = $contatoService->getDados($dados, ContatoEntidade::ENTIDADE);

        $pessoa = $pessoaService->getDados($dados, PessoaEntidade::ENTIDADE);
        $pessoa[NO_PESSOA] = strtoupper(trim($dados[NO_PESSOA]));
        $pessoa[DT_NASCIMENTO] = Valida::DataDBDate($dados[DT_NASCIMENTO]);
        $pessoa[ST_SEXO] = $dados[ST_SEXO][0];

        $erro = false;
        $Campo = array();
        /** @var UsuarioEntidade $usuario */
        $usuarios = $usuarioService->PesquisaTodos();

        /** @var UsuarioEntidade $usuario */
        foreach ($usuarios as $usuario) {
            if($usuario->getCoUsuario() != $idCoUsuario){
                if($usuario->getCoPessoa()->getNoPessoa() == strtoupper($pessoa[NO_PESSOA])){
                    $Campo[] = "Nome do Usuário";
                    $erro = true;
                }
                if($usuario->getCoPessoa()->getCoContato()->getDsEmail() == $contato[DS_EMAIL]){
                    $Campo[] = "E-mail";
                    $erro = true;
                }
                if($usuario->getCoPessoa()->getNuCpf() == $pessoa[NU_CPF]){
                    $Campo[] = "CPF";
                    $erro = true;
                }
            }
            if ($erro){
                break;
            }
        }

        if ($erro):
            $session->setSession(MENSAGEM, "Já exite usuário cadastro com o mesmo "
                . implode(", ", $Campo) . ", Favor Verificar.");
        else:
            $imagem[DS_CAMINHO] = "";
            if ($foto[DS_CAMINHO]["tmp_name"]):
                $foto = $_FILES[DS_CAMINHO];
                $nome = Valida::ValNome($dados[NO_PESSOA]);
                $up = new Upload();
                $up->UploadImagens($foto, $nome, "usuarios");
                $imagem[DS_CAMINHO] = $up->getNameImage();
            endif;

            $usu[DS_CODE] = base64_encode(base64_encode($dados[DS_SENHA]));
            $usu[DS_SENHA] = trim($dados[DS_SENHA]);
            if (!empty($dados[ST_STATUS])):
                $usu[ST_STATUS] = "A";
            else:
                if (in_array(1, $meusPerfis) || in_array(2, $meusPerfis)):
                    $usu[ST_STATUS] = "I";
                endif;
            endif;

            if ($idCoUsuario):
                /** @var UsuarioEntidade $usuario */
                $usuario = $usuarioService->PesquisaUmRegistro($idCoUsuario);

                if ($usuario->getCoImagem()->getDsCaminho()):
                    if (is_file(Upload::$BaseDir . "usuarios/" . $usuario->getCoImagem()->getDsCaminho())):
                        unlink(Upload::$BaseDir . "usuarios/" . $usuario->getCoImagem()->getDsCaminho());
                    endif;
                endif;

                if ($imagem[DS_CAMINHO]):
                    $imagemService->Salva($imagem, $usuario->getCoImagem()->getCoImagem());
                endif;
                $contatoService->Salva($contato, $usuario->getCoPessoa()->getCoContato()->getCoContato());
                $enderecoService->Salva($endereco, $usuario->getCoPessoa()->getCoEndereco()->getCoEndereco());
                $pessoaService->Salva($pessoa, $usuario->getCoPessoa()->getCoPessoa());
                $usuarioService->Salva($usu, $idCoUsuario);
                $usuarioPerfil[CO_USUARIO] = $idCoUsuario;
                $ok = $usuarioPerfilService->DeletaQuando($usuarioPerfil);
                if ($ok):
                    if (!empty($dados['ds_perfil'])) {
                        foreach ($dados['ds_perfil'] as $perfil) {
                            $usuarioPerfil[CO_PERFIL] = $perfil;
                            $usuarioPerfilService->Salva($usuarioPerfil);
                        }
                    }
                    $usuarioPerfil[CO_PERFIL] = 3;
                    $usuarioPerfilService->Salva($usuarioPerfil);
                endif;

                $session->setSession(ATUALIZADO, "OK");
            else:
                $pessoa[DT_CADASTRO] = Valida::DataAtualBanco();
                $usu[DT_CADASTRO] = Valida::DataAtualBanco();

                $pessoa[CO_ENDERECO] = $enderecoService->Salva($endereco);
                $pessoa[CO_CONTATO] = $contatoService->Salva($contato);
                $usu[CO_IMAGEM] = $imagemService->Salva($imagem);
                $usu[CO_PESSOA] = $pessoaService->Salva($pessoa);
                $usuarioPerfil[CO_USUARIO] = $usuarioService->Salva($usu);

                // REGISTRAR ///
                if ($resgistrar):
                    $usuarioPerfil[CO_PERFIL] = 3;
                    $usuarioPerfilService->Salva($usuarioPerfil);
                else:
                    if (!empty($dados['ds_perfil'])) {
                        foreach ($dados['ds_perfil'] as $perfil) {
                            $usuarioPerfil[CO_PERFIL] = $perfil;
                            $usuarioPerfilService->Salva($usuarioPerfil);
                        }
                    }
                    $usuarioPerfil[CO_PERFIL] = 3;
                    $usuarioPerfilService->Salva($usuarioPerfil);
                endif;
            endif;

            if (!$resgistrar) {
                if (in_array(1, $meusPerfis) || in_array(2, $meusPerfis)) {
                    Redireciona(UrlAmigavel::$modulo.'/'.UrlAmigavel::$controller.'/ListarUsuario/');
                } else {
                    Redireciona(UrlAmigavel::$modulo.'/Index/Index/');
                }
            }else{
                Redireciona('admin/Index/Acessar/'.Valida::GeraParametro('acesso/C'));
            }
        endif;
    }

    public function ListarUsuario()
    {
        /** @var PerfilService $perfilService */
        $perfilService = $this->getService(PERFIL_SERVICE);
        /** @var UsuarioService $usuarioService */
        $usuarioService = $this->getService(USUARIO_SERVICE);

        $dados = array();
        $session = new Session();

        if ($session->CheckSession(PESQUISA_AVANCADA)) {
            $session->FinalizaSession(PESQUISA_AVANCADA);
        }
        if (!empty($_POST)) {
            $Condicoes = array(
                "pes." . NO_PESSOA => trim($_POST[NO_PESSOA]),
                "pes." . NU_CPF => Valida::RetiraMascara($_POST[NU_CPF]),
            );
            $session->setSession(PESQUISA_AVANCADA, $Condicoes);
            $this->result = $usuarioService->PesquisaAvancada($Condicoes);
        } else {
            $this->result = $usuarioService->PesquisaTodos($dados);
        }

        /** @var UsuarioEntidade $value */
        foreach ($this->result as $value):
            $this->perfis[$value->getCoUsuario()] = implode(', ', $perfilService->montaComboPerfil($value));
        endforeach;
    }

    // AÇÃO DE EXPORTAÇÃO
    public function ExportarListarUsuario()
    {
        /** @var UsuarioService $usuarioService */
        $usuarioService = $this->getService(USUARIO_SERVICE);

        $session = new Session();
        if ($session->CheckSession(PESQUISA_AVANCADA)) {
            $Condicoes = $session->getSession(PESQUISA_AVANCADA);
            $result =  $usuarioService->PesquisaAvancada($Condicoes);
        } else {
            $result = $usuarioService->PesquisaTodos();
        }
        $formato = UrlAmigavel::PegaParametro("formato");
        $i = 0;
        /** @var UsuarioEntidade $value */
        foreach ($result as $value) {
            $res[$i][NO_PESSOA] = $value->getCoPessoa()->getNoPessoa();
            $res[$i][NU_CPF] = Valida::MascaraCpf($value->getCoPessoa()->getNuCpf());
            $res[$i][ST_STATUS] = FuncoesSistema::SituacaoUsuario($value->getStStatus());
            $i++;
        }
        $Colunas = array('Nome', 'CPF', 'Status');
        $exporta = new Exportacao($formato);
        // $exporta->setPapelOrientacao("paisagem");
        $exporta->setColunas($Colunas);
        $exporta->setConteudo($res);
        $exporta->GeraArquivo();
    }

    public function ListarUsuarioPesquisaAvancada()
    {
        echo UsuarioForm::Pesquisar();
    }

}

?>
   