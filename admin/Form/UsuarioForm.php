<?php

class UsuarioForm extends AbstractController
{

    public static function Cadastrar($res = false, $resgistrar = false, $tamanho = 6, $perfilService)
    {
        $id = "CadastroUsuario";
        $meusPerfis = array();
        $link = UrlAmigavel::$controller . '/Listar' . UrlAmigavel::$controller;

        /** @var Form $formulario */
        $formulario = new Form($id, ADMIN . "/" . UrlAmigavel::$controller
            . "/" . UrlAmigavel::$action, 'Cadastrar', $tamanho);
        if ($res):
            $us = $_SESSION[SESSION_USER];
            $user = $us->getUser();
            $meusPerfis = $user[md5(CAMPO_PERFIL)];
            $meusPerfis = explode(',', $meusPerfis);

            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->PesquisaUmQuando([CO_USUARIO => $res['co_usuario']]);

            if (in_array(1, $meusPerfis) || in_array(2, $meusPerfis)) {
                $res[CAMPO_PERFIL] = $perfilService->montaArrayPerfil($usuario);
            } else {
                $res[ST_STATUS] = FuncoesSistema::SituacaoUsuarioLabel($res[ST_STATUS]);
                $res[CAMPO_PERFIL] = implode(', ', $perfilService->montaComboPerfil($usuario));
            }
            $formulario->setValor($res);
        endif;

        $formulario
            ->setId(NO_PESSOA)
            ->setClasses("ob nome")
            ->setInfo("O Nome deve ser Completo Mínimo de 10 Caracteres")
            ->setLabel("Nome Completo")
            ->CriaInpunt();

        $formulario
            ->setId(NU_CPF)
            ->setClasses("cpf ob")
            ->setTamanhoInput(6)
            ->setLabel("CPF")
            ->CriaInpunt();

        $formulario
            ->setId(NU_RG)
            ->setTamanhoInput(6)
            ->setClasses("numero")
            ->setLabel("RG")
            ->CriaInpunt();

        $formulario
            ->setId(DT_NASCIMENTO)
            ->setTamanhoInput(6)
            ->setClasses("data ob")
            ->setLabel("Nascimento")
            ->setInfo("Data de Nascimento")
            ->CriaInpunt();

        $label_options = array("" => "Selecione um", "M" => "Masculino", "F" => "Feminino");
        $formulario
            ->setLabel("Sexo")
            ->setId(ST_SEXO)
            ->setClasses("ob")
            ->setType("select")
            ->setTamanhoInput(6)
            ->setOptions($label_options)
            ->CriaInpunt();

        $formulario
            ->setId(DS_EMAIL)
            ->setIcon("fa-envelope fa")
            ->setClasses("email ob")
            ->setLabel("Email")
            ->CriaInpunt();

        $formulario
            ->setId(NU_TEL1)
            ->setTamanhoInput(6)
            ->setIcon("fa fa-mobile-phone")
            ->setLabel("Telefone Celular")
            ->setInfo("Com o Whatsapp")
            ->setClasses("tel ob")
            ->CriaInpunt();

        $formulario
            ->setId(NU_TEL2)
            ->setTamanhoInput(6)
            ->setIcon("fa fa-mobile-phone")
            ->setLabel("Telefone Celular 2")
            ->setClasses("tel")
            ->CriaInpunt();

        $formulario
            ->setId(DS_ENDERECO)
            ->setIcon("clip-home-2")
            ->setClasses("ob")
            ->setLabel("Endereço")
            ->CriaInpunt();

        $formulario
            ->setId(DS_COMPLEMENTO)
            ->setLabel("Complemento")
            ->CriaInpunt();

        $formulario
            ->setId(DS_BAIRRO)
            ->setLabel("Bairro")
            ->CriaInpunt();

        $formulario
            ->setId(NO_CIDADE)
            ->setLabel("Cidade")
            ->CriaInpunt();

        $formulario
            ->setId(NU_CEP)
            ->setLabel("CEP")
            ->setTamanhoInput(4)
            ->setClasses("cep")
            ->CriaInpunt();

        $options = Endereco::montaComboEstadosDescricao();
        $formulario
            ->setTamanhoInput(8)
            ->setId(SG_UF)
            ->setType("select")
            ->setClasses("ob")
            ->setLabel("Estado")
            ->setOptions($options)
            ->CriaInpunt();

        $formulario
            ->setId(DS_SENHA)
            ->setClasses("ob senha")
            ->setTamanhoInput(6)
            ->setType("password")
            ->setLabel("Senha")
            ->CriaInpunt();

        $formulario
            ->setId("ds_senha_confirma")
            ->setClasses("ob confirma-senha")
            ->setTamanhoInput(6)
            ->setType("password")
            ->setLabel("Confirmação da Senha")
            ->CriaInpunt();

        if (!$resgistrar) {
            if (in_array(1, $meusPerfis) || in_array(2, $meusPerfis)):
                $label_options_perfis = $perfilService->montaComboTodosPerfis();
                unset($label_options_perfis[1]);
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
                if ($res):
                    if ($res[ST_STATUS] == "A"):
                        $checked = "checked";
                    endif;
                endif;

                $label_options2 = array("Ativo", "Inativo", "verde", "vermelho");
                $formulario
                    ->setLabel("Status do Usuário")
                    ->setClasses($checked)
                    ->setId(ST_STATUS)
                    ->setInfo("Para Ativar e Desativar Usuários do Sistema.")
                    ->setType("checkbox")
                    ->setTamanhoInput(4)
                    ->setOptions($label_options2)
                    ->CriaInpunt();
            else:

                $formulario
                    ->setId(CAMPO_PERFIL)
                    ->setClasses("disabilita")
                    ->setTamanhoInput(9)
                    ->setLabel("Perfis")
                    ->CriaInpunt();

                $formulario
                    ->setId(ST_STATUS)
                    ->setClasses("disabilita")
                    ->setTamanhoInput(3)
                    ->setLabel("Status do Usuário")
                    ->CriaInpunt();
            endif;
        } else {
            $link = 'Index/Acessar';
        }

        $formulario
            ->setId(DS_CAMINHO)
            ->setType("singlefile")
            ->setInfo("Caso queira troca de foto")
            ->setLabel("Foto de Perfil")
            ->CriaInpunt();

        if ($res):
            $formulario
                ->setType("hidden")
                ->setId(CO_USUARIO)
                ->setValues($res['co_usuario'])
                ->CriaInpunt();
        endif;

        return $formulario->finalizaForm($link);
    }

    public static function Pesquisar()
    {
        $id = "pesquisaUsuario";

        $formulario = new Form($id, "admin/Usuario/ListarUsuario", "Pesquisa", 12);

        $formulario
            ->setId("no_pessoa")
            ->setIcon("clip-user-6")
            ->setLabel("Nome do Usuario")
            ->setInfo("Pode ser Parte do nome")
            ->CriaInpunt();

        $formulario
            ->setId(NU_CPF)
            ->setClasses("cpf")
            ->setTamanhoInput(6)
            ->setLabel("CPF")
            ->CriaInpunt();

        return $formulario->finalizaFormPesquisaAvancada();
    }
}

?>
   