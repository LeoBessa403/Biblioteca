<?php

class Usuario
{

    public $result;
    public $resultAlt;
    public $form;
    public $perfis;
    public $erro;
    public $mensagem;
    public $idUsuario;

    public function Index()
    {
    }

    public function MeuPerfilUsuario()
    {
        $us = $_SESSION[SESSION_USER];
        $user = $us->getUser();
        $this->idUsuario = $user[md5('co_usuario')];
        $this->CadastroUsuario();
        UrlAmigavel::$action = "CadastroUsuario";
    }

    public function CadastroUsuario()
    {
        $id = "CadastroUsuario";

        if (!empty($_POST[$id])):
            $this->salvaUsuario($_POST);
        endif;

        if (!$this->idUsuario):
            $this->idUsuario = UrlAmigavel::PegaParametro("usu");
        endif;
        $res = array();
        if ($this->idUsuario):
            $usuarioModel = new UsuarioModel();
            /** @var UsuarioEntidade $usuario */
            $usuario = $usuarioModel->PesquisaUmQuando(['co_usuario' => $this->idUsuario]);
            $label_options_perfis = $this->montaComboPerfil($usuario);
            $meusPerfis = $this->montaArrayPerfil($usuario);
            $res[CAMPO_PERFIL] = $meusPerfis;
        endif;
        $res['ds_senha_confirma'] = $usuario->getDsSenha();
        $res['ds_senha'] = $usuario->getDsSenha();
        if ($usuario->getCoImagem()->getDsCaminho()):
            $res['ds_foto'] = "usuarios/" . $usuario->getCoImagem()->getDsCaminho();
        endif;

        $res["co_usuario"] = $usuario->getCoUsuario();
        $res["no_pessoa"] = $usuario->getCoPessoa()->getNoPessoa();
        $res["ds_email"] = $usuario->getCoPessoa()->getCoContato()->getDsEmail();
        $res["st_sexo"] = $usuario->getCoPessoa()->getStSexo();
        $res['st_status'] = $usuario->getStStatus();

        $formulario = new Form($id, "admin/Usuario/CadastroUsuario");
        $formulario->setValor($res);

        $formulario
            ->setId("no_pessoa")
            ->setClasses("ob nome")
            ->setInfo("O Nome deve ser Completo Mínimo de 10 Caracteres")
            ->setLabel("Nome Completo")
            ->CriaInpunt();

        $formulario
            ->setId("ds_email")
            ->setIcon("fa-envelope fa")
            ->setClasses("email ob")
            ->setLabel("Email")
            ->CriaInpunt();

        $label_options = array("" => "Selecione um Sexo", "M" => "Masculino", "F" => "Feminino");
        $formulario
            ->setLabel("Sexo")
            ->setId("st_sexo")
            ->setType("select")
            ->setOptions($label_options)
            ->CriaInpunt();

        $formulario
            ->setId("ds_foto")
            ->setType("singlefile")
            ->setTamanhoInput(8)
            ->setInfo("Caso queira troca de foto")
            ->setLabel("Foto de Perfil")
            ->CriaInpunt();

        $formulario
            ->setId("ds_senha")
            ->setClasses("ob senha")
            ->setTamanhoInput(4)
            ->setType("password")
            ->setLabel("Senha")
            ->CriaInpunt();

        $formulario
            ->setId("ds_senha_confirma")
            ->setClasses("ob confirma-senha")
            ->setTamanhoInput(4)
            ->setType("password")
            ->setLabel("Confirmação da Senha")
            ->CriaInpunt();
        if (in_array(1, $meusPerfis) || in_array(2, $meusPerfis)):

            $formulario
                ->setLabel("Perfis")
                ->setId(CAMPO_PERFIL)
                ->setClasses("multipla")
                ->setTamanhoInput(8)
                ->setInfo("Pode selecionar vários perfis.")
                ->setType("select")
                ->setOptions($label_options_perfis)
                ->CriaInpunt();

            $checked = "";
            if (!empty($res)):
                if ($res['st_status'] == "A"):
                    $checked = "checked";
                endif;
            endif;

            $label_options2 = array("Ativo", "Inativo", "verde", "vermelho");
            $formulario
                ->setLabel("Status do Usuário")
                ->setClasses($checked)
                ->setId("st_status")
                ->setInfo("Para Ativar e Desativar Usuários do Sistema.")
                ->setType("checkbox")
                ->setTamanhoInput(4)
                ->setOptions($label_options2)
                ->CriaInpunt();
        else:
            $formulario
                ->setId("st_status")
                ->setClasses("disabilita")
                ->setTamanhoInput(6)
                ->setLabel("Status do Usuário")
                ->CriaInpunt();

            $formulario
                ->setId(CAMPO_PERFIL)
                ->setClasses("disabilita")
                ->setTamanhoInput(6)
                ->setLabel("Perfis")
                ->CriaInpunt();
        endif;

        if ($this->idUsuario):
            $formulario
                ->setType("hidden")
                ->setId("co_usuario")
                ->setValues($this->idUsuario)
                ->CriaInpunt();
        endif;

        $this->form = $formulario->finalizaForm();

    }

    public function salvaUsuario($dados)
    {
        $id = "CadastroUsuario";
        $us = $_SESSION[SESSION_USER];
        $user = $us->getUser();
        $session = new Session();

        $dados['st_sexo'] = $dados['st_sexo'][0];
        $dados['no_pessoa'] = trim($dados['no_pessoa']);
        $dados['ds_code'] = base64_encode(base64_encode($dados['ds_senha']));
        $idCoUsuario = (isset($dados['co_usuario']) ? $dados['co_usuario'] : null);
        if (!empty($dados['st_status'])):
            $dados['st_status'] = "A";
        else:
            $dados['st_status'] = "I";
        endif;
        unset($dados[$id], $dados["ds_senha_confirma"], $dados['co_usuario']);

        $pessoaModel = new PessoaModel();
        $contatoModel = new ContatoModel();

        $user['no_pessoa'] = $dados['no_pessoa'];
        /** @var PessoaEntidade $userNome */
        $userNome = $pessoaModel->PesquisaUmQuando($user);
        $email['ds_email'] = $dados['ds_email'];
        /** @var ContatoEntidade $userEmail */
        $userEmail = $contatoModel->PesquisaUmQuando($email);

        $this->erro = false;
        if ($userNome && $userNome->getCoUsuario()->getCoUsuario() != $idCoUsuario):
            $Campo[] = "Nome do Usuário";
            $this->erro = true;
        endif;
        if ($userEmail && $userEmail->getCoPessoa()->getCoUsuario()->getCoUsuario() != $idCoUsuario):
            $Campo[] = "E-mail";
            $this->erro = true;
        endif;

        if ($this->erro):
            $this->mensagem = "Já exite usuário cadastro com o mesmo " . implode(", ", $Campo) . ", Favor Verificar.";
        else:
            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->PesquisaUmQuando(['co_usuario', $idCoUsuario]);
            debug($usuario->getCoImagem()->getDsCaminho());
            if (!empty($userNome)):
                $perfis = UsuarioModel::PesquisaPerfilUsuarios($userNome[0]['co_usuario']);
                $cont = false;
                $meuPerfil = "";
                foreach ($perfis as $resUser):
                    if ($cont):
                        $meuPerfil .= ",";
                    endif;
                    $meuPerfil .= $resUser["co_perfil"];
                    $cont = true;
                endforeach;
                $perf[CAMPO_PERFIL] = $meuPerfil;
                if (!empty($dados[CAMPO_PERFIL])):
                    $dados[CAMPO_PERFIL] = implode(",", $dados[CAMPO_PERFIL]);
                    if (in_array(1, explode(",", $perf[CAMPO_PERFIL]))):
                        $dados[CAMPO_PERFIL] = $dados[CAMPO_PERFIL] . ",1";
                    else:
                        $dados[CAMPO_PERFIL] = $dados[CAMPO_PERFIL] . ",3";
                    endif;
                else:
                    if (in_array(1, explode(",", $perf[CAMPO_PERFIL]))):
                        $dados[CAMPO_PERFIL] = 1;
                    else:
                        $dados[CAMPO_PERFIL] = 3;
                    endif;
                endif;
            else:
                $dados[CAMPO_PERFIL] = 3;
            endif;


            if ($idCoUsuario):
                $meusPerfis = explode(",", $dados[CAMPO_PERFIL]);
                unset($dados[CAMPO_PERFIL]);
                $idUsuario = UsuarioModel::AtualizaUsuario($dados, $idCoUsuario);
                UsuarioModel::DeletaPerfisUsuario($idCoUsuario);
                foreach ($meusPerfis as $resPerfis):
                    $userPerfil = array();
                    $userPerfil[Constantes::USUARIO_CHAVE_PRIMARIA] = $idCoUsuario;
                    $userPerfil[Constantes::PERFIL_CHAVE_PRIMARIA] = $resPerfis;
                    UsuarioModel::CadastraUsuarioPerfil($userPerfil);
                    $session->setSession(ATUALIZADO, "OK");
                endforeach;
            else:
                $meusPerfis = explode(",", $dados[CAMPO_PERFIL]);
                unset($dados[CAMPO_PERFIL]);
                $dados['dt_cadastro'] = Valida::DataAtualBanco();

                $idUsuario = UsuarioModel::CadastraUsuario($dados);
                foreach ($meusPerfis as $resPerfis):
                    $userPerfil = array();
                    $userPerfil[Constantes::USUARIO_CHAVE_PRIMARIA] = $idUsuario;
                    $userPerfil[Constantes::PERFIL_CHAVE_PRIMARIA] = $resPerfis;
                    UsuarioModel::CadastraUsuarioPerfil($userPerfil);
                    $session->setSession(CADASTRADO, "OK");
                endforeach;
            endif;
            if ($idUsuario):
                $this->cadastraFotoUsuario($_FILES , $idUsuario);
                $email = new Email();

                // Índice = Nome, e Valor = Email.
                $emails = array(
                    $dados['no_pessoa'] => $dados['ds_email']
                );
                $Mensagem = "<h2>Seu cadastro foi realizado com sucesso</h2><br/>"
                    . "Aguarde a Ativação do seu Usuário " . $dados['ds_login'];

                $email->setEmailDestinatario($emails)
                    ->setTitulo("Email de  Teste Pra Todos")
                    ->setMensagem($Mensagem);

                //Variável para validação de Emails Enviados com Sucesso.
                $EmailEnviado = $email->Enviar();

                $this->result = true;
            endif;
        endif;
    }


    public function ListarUsuario()
    {
        $dados = array();
        if (!empty($_POST)):
            $dados = array(
                'no_pessoa' => $_POST['no_pessoa']
            );
        endif;
        $usuarioModel = new UsuarioModel();
        $this->result = $usuarioModel->PesquisaTodos($dados);
        /** @var UsuarioEntidade $value */
        foreach ($this->result as $value):
            $this->perfis = $this->montaComboPerfil($value);
        endforeach;
    }

    // AÇÃO DE EXPORTAÇÃO
    public function ExportarListarUsuario()
    {

        $formato = UrlAmigavel::PegaParametro("formato");
        $result = CategoriaModel::PesquisaCategoria();
        $i = 0;
        foreach ($result as $value) {
            $res[$i]['id_categoria'] = $value['id_categoria'];
            $res[$i]['nome'] = $value['nome'];
            $i++;
        }
        $Colunas = array('Código', 'Categoria');
        $exporta = new Exportacao($formato, "Relatório de Categorias");
        // $exporta->setPapelOrientacao("paisagem");
        $exporta->setColunas($Colunas);
        $exporta->setConteudo($res);
        $exporta->GeraArquivo();

    }

    public function ListarUsuarioPesquisaAvancada()
    {

        $id = "pesquisaUsuario";

        $formulario = new Form($id, "admin/Usuario/ListarUsuario", "Pesquisa", 12);

        $formulario
            ->setId("no_pessoa")
            ->setIcon("clip-user-6")
            ->setLabel("Nome do Usuario")
            ->setInfo("Pode ser Parte do nome")
            ->CriaInpunt();

        echo $formulario->finalizaFormPesquisaAvancada();

    }

    public function montaComboPerfil(UsuarioEntidade $usuario)
    {
        $meusPerfis = array();
        foreach ($usuario->getCoUsuarioPerfil() as $perfil) :
            $meusPerfis[$perfil->getCoPerfil()->getCoPerfil()] = $perfil->getCoPerfil()->getNoPerfil();
        endforeach;
        return $meusPerfis;
    }

    public function montaArrayPerfil(UsuarioEntidade $usuario)
    {
        $meusPerfis = array();
        foreach ($usuario->getCoUsuarioPerfil() as $perfil) :
            $meusPerfis[] = $perfil->getCoPerfil()->getCoPerfil();
        endforeach;
        return $meusPerfis;
    }

    public function cadastraFotoUsuario($files, $idCoUsuario)
    {
        $imagem = array();
        if ($files["ds_foto"]["tmp_name"]):
            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->PesquisaUmQuando(['co_usuario', $idCoUsuario]);
            $nome = Valida::ValNome($usuario->getCoPessoa()->getNoPessoa());
            $up = new Upload();
            $up->UploadImagens($files["ds_foto"], $nome, "usuarios");
            $imagem['ds_caminho'] = $up->getNameImage();
            if ($usuario->getCoImagem()->getDsCaminho()):
                if (is_file(Upload::$BaseDir . "usuarios/" . $usuario->getCoImagem()->getDsCaminho())):
                    unlink(Upload::$BaseDir . "usuarios/" . $usuario->getCoImagem()->getDsCaminho());
                endif;
            endif;
        endif;
        return $imagem;
    }

}

?>
   