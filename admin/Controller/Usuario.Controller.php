<?php

class Usuario extends AbstractController
{

    public function Index()
    {
    }

    public function MeuPerfilUsuario()
    {
        /** @var Session $us */
        $us = $_SESSION[SESSION_USER];
        $user = $us->getUser();
        $this->idUsuario = $user[md5(CO_USUARIO)];
        $this->CadastroUsuario(true);
        UrlAmigavel::$action = "CadastroUsuario";
    }

    public function CadastroUsuario($meuPerfil = false)
    {
        $id = "CadastroUsuario";

        if (!empty($_POST[$id])):
            $this->salvaUsuario($_POST, $_FILES);
        endif;

        $idCoUsuario = UrlAmigavel::PegaParametro("usu");
        if ($meuPerfil):
            $idCoUsuario = $this->idUsuario;
        endif;
        $res = array();
        if ($idCoUsuario):
            /** @var UsuarioService $usuariaService */
            $usuariaService = $this->getService(USUARIO_SERVICE);
            /** @var UsuarioEntidade $usuario */
            $usuario = $usuariaService->PesquisaUmQuando([CO_USUARIO => $idCoUsuario]);
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

        $this->form = UsuarioForm::Cadastrar($res);
    }

    public function salvaUsuario($dados, $foto, $resgistrar = false)
    {
        $EnderecoModel = new EnderecoModel();
        $ContatoModel = new ContatoModel();
        $PessoaModel = new PessoaModel();
        $UsuarioModel = new UsuarioModel();
        $ImagemModel = new ImagemModel();
        $UsuarioPerfilModel = new UsuarioPerfilModel();
        $session = new Session();

        if ($session->CheckSession(SESSION_USER)) {
            $us = $_SESSION[SESSION_USER];
            $user = $us->getUser();
            $meusPerfis = $user[md5(CAMPO_PERFIL)];
            $meusPerfis = explode(',', $meusPerfis);
        } else {
            $meusPerfis = array();
        }

        $idCoUsuario = (isset($dados[CO_USUARIO]) ? $dados[CO_USUARIO] : null);

        $endereco[DS_ENDERECO] = $dados[DS_ENDERECO];
        $endereco[DS_COMPLEMENTO] = $dados[DS_COMPLEMENTO];
        $endereco[DS_BAIRRO] = $dados[DS_BAIRRO];
        $endereco[NO_CIDADE] = $dados[NO_CIDADE];
        $endereco[NU_CEP] = Valida::RetiraMascara($dados[NU_CEP]);
        $endereco[SG_UF] = $dados[SG_UF][0];

        $contato[DS_EMAIL] = trim($dados[DS_EMAIL]);
        $contato[NU_TEL1] = Valida::RetiraMascara($dados[NU_TEL1]);
        $contato[NU_TEL2] = Valida::RetiraMascara($dados[NU_TEL2]);

        $pessoa[NO_PESSOA] = strtoupper(trim($dados[NO_PESSOA]));
        $pessoa[NU_CPF] = Valida::RetiraMascara($dados[NU_CPF]);
        $pessoa[NU_RG] = Valida::RetiraMascara($dados[NU_RG]);
        $pessoa[DT_NASCIMENTO] = Valida::DataDBDate($dados[DT_NASCIMENTO]);
        $pessoa[ST_SEXO] = $dados[ST_SEXO][0];

        $usu[DS_SENHA] = $dados[DS_SENHA];
        $usu[DS_CODE] = base64_encode(base64_encode($dados[DS_SENHA]));
        if (!empty($dados[ST_STATUS])):
            $usu[ST_STATUS] = "A";
        else:
            if (in_array(1, $meusPerfis) || in_array(2, $meusPerfis)):
                $usu[ST_STATUS] = "I";
            endif;
        endif;

        $user[NO_PESSOA] = $pessoa[NO_PESSOA];
        /** @var PessoaEntidade $userNome */
        $userNome = $PessoaModel->pesquisaUsuarioCadastrado($user);
        $email[DS_EMAIL] = $contato[DS_EMAIL];
        /** @var ContatoEntidade $userEmail */
        $userEmail = $ContatoModel->pesquisaContatoCadastrado($email);
        $cpf[NU_CPF] = $pessoa[NU_CPF];
        /** @var PessoaEntidade $userCpf */
        $userCpf = $PessoaModel->pesquisaUsuarioCadastrado($cpf);

        $this->erro = false;
        if ($userNome && $userNome->getCoUsuario()->getCoUsuario() != $idCoUsuario):
            $Campo[] = "Nome do Usuário";
            $this->erro = true;
        endif;
        if ($userEmail && $userEmail->getCoPessoa()->getCoUsuario()->getCoUsuario() != $idCoUsuario):
            $Campo[] = "E-mail";
            $this->erro = true;
        endif;
        if ($userCpf && $userCpf->getCoUsuario()->getCoUsuario() != $idCoUsuario):
            $Campo[] = "CPF";
            $this->erro = true;
        endif;

        if ($this->erro):
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

            if ($idCoUsuario):
                /** @var UsuarioEntidade $usuario */
                $usuario = $UsuarioModel->PesquisaUmQuando([CO_USUARIO => $idCoUsuario]);

                if ($usuario->getCoImagem()->getDsCaminho()):
                    if (is_file(Upload::$BaseDir . "usuarios/" . $usuario->getCoImagem()->getDsCaminho())):
                        unlink(Upload::$BaseDir . "usuarios/" . $usuario->getCoImagem()->getDsCaminho());
                    endif;
                endif;

                if ($imagem[DS_CAMINHO]):
                    $ImagemModel->Salva($imagem, $usuario->getCoImagem()->getCoImagem());
                endif;
                $ContatoModel->Salva($contato, $usuario->getCoPessoa()->getCoContato()->getCoContato());
                $EnderecoModel->Salva($endereco, $usuario->getCoPessoa()->getCoEndereco()->getCoEndereco());
                $PessoaModel->Salva($pessoa, $usuario->getCoPessoa()->getCoPessoa());
                $UsuarioModel->Salva($usu, $idCoUsuario);
                $usuarioPerfil[CO_USUARIO] = $idCoUsuario;
                $ok = $UsuarioPerfilModel->DeletaQuando($usuarioPerfil);
                if ($ok):
                    if (!empty($dados['ds_perfil'])) {
                        foreach ($dados['ds_perfil'] as $perfil) {
                            $usuarioPerfil[CO_PERFIL] = $perfil;
                            $UsuarioPerfilModel->Salva($usuarioPerfil);
                        }
                    }
                    $usuarioPerfil[CO_PERFIL] = 3;
                    $UsuarioPerfilModel->Salva($usuarioPerfil);
                endif;

                $session->setSession(ATUALIZADO, "OK");
            else:
                $pessoa[DT_CADASTRO] = Valida::DataAtualBanco();
                $usu[DT_CADASTRO] = Valida::DataAtualBanco();

                $pessoa[CO_ENDERECO] = $EnderecoModel->Salva($endereco);
                $pessoa[CO_CONTATO] = $ContatoModel->Salva($contato);
                $usu[CO_IMAGEM] = $ImagemModel->Salva($imagem);
                $usu[CO_PESSOA] = $PessoaModel->Salva($pessoa);
                $usuarioPerfil[CO_USUARIO] = $UsuarioModel->Salva($usu);

                // REGISTRAR ///
                if ($resgistrar):
                    $usuarioPerfil[CO_PERFIL] = 3;
                    $UsuarioPerfilModel->Salva($usuarioPerfil);
                else:
                    if (!empty($dados['ds_perfil'])) {
                        foreach ($dados['ds_perfil'] as $perfil) {
                            $usuarioPerfil[CO_PERFIL] = $perfil;
                            $UsuarioPerfilModel->Salva($usuarioPerfil);
                        }
                    }
                    $usuarioPerfil[CO_PERFIL] = 3;
                    $UsuarioPerfilModel->Salva($usuarioPerfil);
                endif;

                $session->setSession(CADASTRADO, 'OK');

//                $email = new Email();
//
//                // Índice = Nome, e Valor = Email.
//                $emails = array(
//                    $pessoa[NO_PESSOA] => $contato[DS_EMAIL]
//                );
//                $Mensagem = "<h2>Seu cadastro foi realizado com sucesso</h2><br/>"
//                    . "Aguarde a Ativação do seu Usuário.";
//
//                $email->setEmailDestinatario($emails)
//                    ->setTitulo("Email de  Teste Pra Todos")
//                    ->setMensagem($Mensagem);
//
//                //Variável para validação de Emails Enviados com Sucesso.
//                $EmailEnviado = $email->Enviar();
//
//                $this->result = true;
            endif;


            unset($_POST);
            if (!$resgistrar) {
                if (in_array(1, $meusPerfis) || in_array(2, $meusPerfis)) {
                    $this->ListarUsuario();
                    UrlAmigavel::$action = "ListarUsuario";
                } else {
                    UrlAmigavel::$action = "Index";
                    $IndexControl = new Index();
                    $IndexControl->Index();
                    UrlAmigavel::$controller = "Index";
                }
            }
        endif;
    }


    public function ListarUsuario()
    {
        $perfilControl = new Perfil();
        $usuarioModel = new UsuarioModel();
        $dados = array();
        $session = new Session();

        if ($session->CheckSession(PESQUISA_AVANCADA)) {
            $session->FinalizaSession(PESQUISA_AVANCADA);
        }
        if (!empty($_POST)) {
            $dados = array(
                NO_PESSOA => trim($_POST[NO_PESSOA]),
                NU_CPF => Valida::RetiraMascara($_POST[NU_CPF]),
            );
            $session->setSession(PESQUISA_AVANCADA, $dados);
            $pessoaModel = new PessoaModel();
            $pessoas = $pessoaModel->PesquisaTodos($dados);
            $todos = array();
            foreach ($pessoas as $pessoa) {
                $todos[] = $pessoa->getCoUsuario()->getCoUsuario();
            }
            if ($todos) {
                $usuarios[CO_USUARIO] = implode(', ', $todos);
                $this->result = $usuarioModel->PesquisaTodos($usuarios);
            } else {
                $this->result = array();
            }
        } else {
            $this->result = $usuarioModel->PesquisaTodos($dados);
        }

        /** @var UsuarioEntidade $value */
        foreach ($this->result as $value):
            $this->perfis[$value->getCoUsuario()] = implode(', ', $perfilControl->montaComboPerfil($value));
        endforeach;
    }

    // AÇÃO DE EXPORTAÇÃO
    public function ExportarListarUsuario()
    {
        $usuarioModel = new UsuarioModel();
        $session = new Session();
        if ($session->CheckSession(PESQUISA_AVANCADA)) {
            $dados = $session->getSession(PESQUISA_AVANCADA);
            $pessoaModel = new PessoaModel();
            $pessoas = $pessoaModel->PesquisaTodos($dados);
            foreach ($pessoas as $pessoa) {
                $todos[] = $pessoa->getCoUsuario()->getCoUsuario();
            }
            $usuarios[CO_USUARIO] = implode(', ', $todos);
            $result = $usuarioModel->PesquisaTodos($usuarios);
        } else {
            $result = $usuarioModel->PesquisaTodos();
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
   