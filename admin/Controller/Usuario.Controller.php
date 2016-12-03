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

    function Index()
    {
    }

    function MeuPerfilUsuario()
    {
        $us = $_SESSION[SESSION_USER];
        $user = $us->getUser();
        $this->idUsuario = $user[md5('co_usuario')];
        $this->CadastroUsuario();
        UrlAmigavel::$action = "CadastroUsuario";
    }

    function CadastroUsuario()
    {

        $id = "CadastroUsuario";

        $us = $_SESSION[SESSION_USER];
        $user = $us->getUser();
        $perfis = $user[md5(CAMPO_PERFIL)];
        $perfil = explode(",", $perfis);
        $session = new Session();

        if (!empty($_POST[$id])):

            $dados = $_POST;
            $dados['ds_sexo'] = $dados['ds_sexo'][0];
            $dados['no_usuario'] = trim($dados['no_usuario']);
            $dados['ds_code'] = base64_encode(base64_encode($dados['ds_senha']));
            $idCoUsuario = (isset($dados['co_usuario']) ? $dados['co_usuario'] : null);
            if (!empty($dados['st_situacao'])):
                $dados['st_situacao'] = "A";
            else:
                $dados['st_situacao'] = "I";
            endif;
            unset($dados[$id], $dados["ds_senha_confirma"], $dados['co_usuario']);

            $user['no_usuario'] = $dados['no_usuario'];
            $userNome = UsuarioModel::PesquisaUsuarioCadastrado($user);
            $email['ds_email'] = $dados['ds_email'];
            $userEmail = UsuarioModel::PesquisaUsuarioCadastrado($email);
            $login['ds_login'] = $dados['ds_login'];
            $userLogin = UsuarioModel::PesquisaUsuarioCadastrado($login);

            $this->erro = false;
            if ($userNome && $userNome[0]["co_usuario"] != $idCoUsuario):
                $Campo[] = "Nome do Usuário";
                $this->erro = true;
            endif;
            if ($userEmail && $userEmail[0]["co_usuario"] != $idCoUsuario):
                $Campo[] = "E-mail";
                $this->erro = true;
            endif;
            if ($userLogin && $userLogin[0]["co_usuario"] != $idCoUsuario):
                $Campo[] = "Login";
                $this->erro = true;
            endif;

            if ($this->erro):
                $this->mensagem = "Já exite usuário cadastro com o mesmo " . implode(", ", $Campo) . ", Favor Verificar.";
            else:
                if ($_FILES["ds_foto"]["tmp_name"]):
                    $foto = $_FILES["ds_foto"];
                    $nome = Valida::ValNome($dados['no_usuario']);
                    $up = new Upload();
                    $up->UploadImagens($foto, $nome, "usuarios");
                    $dados['ds_foto'] = $up->getNameImage();
                    if ($userNome[0]["ds_foto"]):
                        if (is_file(Upload::$BaseDir . "usuarios/" . $userNome[0]["ds_foto"])):
                            unlink(Upload::$BaseDir . "usuarios/" . $userNome[0]["ds_foto"]);
                        endif;
                    endif;
                endif;
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
                    $email = new Email();

                    // Índice = Nome, e Valor = Email.
                    $emails = array(
                        $dados['no_usuario'] => $dados['ds_email']
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
        endif;

        if (!$this->idUsuario):
            $this->idUsuario = UrlAmigavel::PegaParametro("usu");
        endif;
        $res = array();
        if ($this->idUsuario):
            $usuarioModel = new UsuarioModel();
            /** @var UsuarioEntidade $usuario */
            $usuario = $usuarioModel->PesquisaUmQuando(['co_usuario' => $this->idUsuario]);
            /** @var UsuarioPerfilEntidade $perfil */
            $meusPerfis = array();
            $label_options_perfis = array();
            foreach ($usuario->getCoUsuarioPerfil() as $perfil) :
                $meusPerfis[] = $perfil->getCoPerfil()->getCoPerfil();
                $label_options_perfis[$perfil->getCoPerfil()->getCoPerfil()] = $perfil->getCoPerfil()->getNoPerfil();
            endforeach;
            $res[CAMPO_PERFIL] = $meusPerfis;
        endif;
        $res['ds_senha_confirma'] = $usuario->getDsSenha();
        $res['ds_senha'] = $usuario->getDsSenha();
        if ($usuario->getCoImagem()->getDsCaminho()):
            $res['ds_foto'] = "usuarios/" . $usuario->getCoImagem()->getDsCaminho();
        endif;

        $res["co_usuario"] = $usuario->getCoUsuario();
        $res["no_usuario"] = $usuario->getCoPessoa()->getNoPessoa();
        $res["ds_email"] = $usuario->getCoPessoa()->getCoContato()->getDsEmail();
        $res["st_sexo"] = $usuario->getCoPessoa()->getStSexo();
        $res['st_status'] = $usuario->getStStatus();

        $formulario = new Form($id, "admin/Usuario/CadastroUsuario");
        $formulario->setValor($res);

        $formulario
            ->setId("no_usuario")
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

    function ListarUsuario()
    {
        $dados = array();
        if (!empty($_POST)):
            $dados = array(
                'no_usuario' => $_POST['no_usuario']
            );
        endif;
        $usuarioModel = new UsuarioModel();
        $this->result = $usuarioModel->PesquisaTodos($dados);
        /** @var UsuarioEntidade $value */
        foreach ($this->result as $value):
            /** @var UsuarioPerfilEntidade $perfil */
            foreach ($value->getCoUsuarioPerfil() as $perfil) :
                $this->perfis[$value->getCoUsuario()][] = $perfil->getCoPerfil()->getNoPerfil();
            endforeach;
        endforeach;
    }

    // AÇÃO DE EXPORTAÇÃO
    function ExportarListarUsuario()
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

    function ListarUsuarioPesquisaAvancada()
    {

        $id = "pesquisaUsuario";

        $formulario = new Form($id, "admin/Usuario/ListarUsuario", "Pesquisa", 12);

        $formulario
            ->setId("no_usuario")
            ->setIcon("clip-user-6")
            ->setLabel("Nome do Usuario")
            ->setInfo("Pode ser Parte do nome")
            ->CriaInpunt();

        echo $formulario->finalizaFormPesquisaAvancada();

    }


}

?>
   