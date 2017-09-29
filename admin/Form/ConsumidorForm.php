<?php

class ConsumidorForm extends AbstractController
{

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

    public static function Cadastrar($res = false)
    {
        /** @var EnderecoService $enderecoService */
        $enderecoService = static::getService(ENDERECO_SERVICE);
        /** @var ConsumidorService $consumidorService */
        $consumidorService = static::getService(CONSUMIDOR_SERVICE);
        
        $id = "cadastroConsumidor";
        $link = UrlAmigavel::$controller . '/Listar' . UrlAmigavel::$controller;
        $idConsumidor = null;

        /** @var Form $formulario */
        $formulario = new Form($id, ADMIN . "/" . UrlAmigavel::$controller . "/" .
            UrlAmigavel::$action);
        if ($res):
            $idConsumidor = UrlAmigavel::PegaParametro(ConsumidorEntidade::CHAVE);
            $res = $consumidorService->PesquisaUmRegistro($idConsumidor);
            $formulario->setValor($res);
        endif;


        $checked = "";
        if (!empty($res)):
            $res["id_regiao"] = $res["estado"];
            if ($res['tipo_pessoa'] == "F"):
                $checked = "checked";
                $res['cpf'] = $res['cpf_cnpj'];
                $res['cnpj'] = "";
            else:
                $checked = "";
                $res['cnpj'] = $res['cpf_cnpj'];
                $res['cpf'] = "";
            endif;
        endif;

        $label_options = array("Física", "Jurídica", "azul", "verde");
        $formulario
            ->setClasses($checked)
            ->setId("tipo")
            ->setType("checkbox")
            ->setLabel("Tipo de Consumidor")
            ->setOptions($label_options)
            ->CriaInpunt();

        $formulario
            ->setId("no_consumidor")
            ->setLabel("Nome ou Razão Social")
            ->setIcon("clip-user-3")
            ->setClasses("ob")
            ->setInfo("Nome da pessoa ou Razão social da Consumidor")
            ->CriaInpunt();

        $formulario
            ->setId("no_fantasia")
            ->setLabel("Nome Fantasia")
            ->setClasses("ob")
            ->setInfo("Nome do Estabelecimento")
            ->CriaInpunt();

        $formulario
            ->setId("no_responsavel")
            ->setLabel("Nome do Responsável")
            ->setClasses("ob")
            ->setInfo("Responsável do Estabelecimento")
            ->CriaInpunt();

        $formulario
            ->setId("nu_cpf")
            ->setLabel("CPF")
            ->setTamanhoInput(6)
            ->setClasses("cpf ob")
            ->setInfo("Caso seja Pessoa Física")
            ->CriaInpunt();

        $formulario
            ->setId("nu_cnpj")
            ->setLabel("CNPJ")
            ->setTamanhoInput(6)
            ->setClasses("cnpj ob")
            ->setInfo("Caso seja Pessoa Jurídica")
            ->CriaInpunt();

        $formulario
            ->setId("ds_endereco")
            ->setIcon("clip-home-2")
            ->setClasses("ob")
            ->setLabel("Endereço")
            ->CriaInpunt();

        $formulario
            ->setId("ds_complemento")
            ->setLabel("Complemento")
            ->CriaInpunt();

        $formulario
            ->setId("ds_bairro")
            ->setLabel("Bairro")
            ->CriaInpunt();

        $formulario
            ->setId("no_cidade")
            ->setLabel("Cidade")
            ->CriaInpunt();

        $formulario
            ->setId("nu_cep")
            ->setLabel("CEP")
            ->setTamanhoInput(4)
            ->setClasses("cep")
            ->CriaInpunt();

        $options = $enderecoService->montaComboEstadosDescricao();
        $formulario
            ->setTamanhoInput(8)
            ->setId("sg_uf")
            ->setType("select")
            ->setClasses("ob")
            ->setLabel("Estado")
            ->setOptions($options)
            ->CriaInpunt();

        $formulario
            ->setId("nu_tel1")
            ->setTamanhoInput(4)
            ->setIcon("fa fa-phone")
            ->setLabel("Telefone Comercial")
            ->setClasses("tel ob")
            ->CriaInpunt();

        $formulario
            ->setId("nu_tel2")
            ->setTamanhoInput(4)
            ->setIcon("fa fa-mobile-phone")
            ->setLabel("Telefone Celular")
            ->setClasses("tel")
            ->CriaInpunt();

        $formulario
            ->setId("nu_tel3")
            ->setTamanhoInput(4)
            ->setIcon("fa fa-phone")
            ->setLabel("Telefone Residencial")
            ->setClasses("tel")
            ->CriaInpunt();

        $formulario
            ->setId("nu_tel_0800")
            ->setTamanhoInput(4)
            ->setIcon("fa fa-phone")
            ->setLabel("0800 da Consumidor")
            ->setClasses("tel0800")
            ->CriaInpunt();

        $formulario
            ->setId("ds_site")
            ->setTamanhoInput(8)
            ->setIcon("clip-earth-2")
            ->setLabel("Site")
            ->CriaInpunt();

        $formulario
            ->setId("ds_email")
            ->setIcon("clip-archive")
            ->setLabel("E-mail")
            ->setClasses("email")
            ->CriaInpunt();

        $formulario
            ->setId("ds_observacao")
            ->setLabel("Observação")
            ->setType("textarea")
            ->setClasses("ckeditor")
            ->CriaInpunt();


        if ($idConsumidor):
            $formulario
                ->setType("hidden")
                ->setId("co_Consumidor")
                ->setValues($idConsumidor)
                ->CriaInpunt();
        endif;

        return $formulario->finalizaForm($link);
    }
}

?>
   