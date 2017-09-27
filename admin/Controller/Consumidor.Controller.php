<?php

class Consumidor extends AbstractController
{

    public $result;
    public $resultAlt;
    public $form;

    function Index()
    {
    }

    function ListarEmpresaPesquisaAvancada()
    {

        $id = "pesquisaEmpresa";

        $formulario = new Form($id, "admin/Empresa/ListarEmpresa", "Pesquisa", 12);


        $label_options = array("" => "Todos", "S" => "Ativo", "N" => "Inativo");
        $formulario
            ->setLabel("Status do Membro")
            ->setId("st_status")
            ->setType("select")
            ->setOptions($label_options)
            ->CriaInpunt();

        $formulario
            ->setId("no_membro")
            ->setIcon("clip-user-6")
            ->setLabel("Nome do Membro")
            ->setInfo("Pode ser Parte do nome")
            ->CriaInpunt();

        echo $formulario->finalizaFormPesquisaAvancada();

    }

    function CadastroConsumidor()
    {

        $id = "cadastroConsumidor";

        if (!empty($_POST[$id])):
            $dados = $_POST;

            $contato = FuncoesSistema::GetDadosContato($dados);
            $endereco = FuncoesSistema::GetDadosEndereco($dados);

            $idContato = ContatoModel::CadastraContato($contato);
            $idEndereco = EnderecoModel::CadastraEndereco($endereco);

            $Consumidor['no_Consumidor'] = $dados['no_Consumidor'];
            $Consumidor['no_fantasia'] = $dados['no_fantasia'];
            $Consumidor['nu_cpf'] = (!empty($dados['nu_cpf']) ? $dados['nu_cpf'] : '');
            $Consumidor['nu_cnpj'] = (!empty($dados['nu_cnpj']) ? $dados['nu_cnpj'] : '');
            $Consumidor['ds_observacao'] = $dados['ds_observacao'];
            $Consumidor['no_responsavel'] = $dados['no_responsavel'];
            $Consumidor['dt_cadastro'] = Valida::DataAtualBanco('Y-m-d');
            $Consumidor[CONTATO_CHAVE_PRIMARIA] = $idContato;
            $Consumidor[ENDERECO_CHAVE_PRIMARIA] = $idEndereco;

            $idConsumidor = ConsumidorModel::CadastraConsumidor($Consumidor);
            if ($idConsumidor):
                $session = new Session();
                $session->setSession(CADASTRADO, "OK");
            endif;


            $this->ListarConsumidor();
            UrlAmigavel::$action = "ListarConsumidor";
        endif;

        $idConsumidor = UrlAmigavel::PegaParametro("emp");
        $res = array();
        if ($idConsumidor):
            $res = ConsumidorModel::PesquisaUmMembro($idConsumidor);
            $res = $res[0];
        endif;

        $formulario = new Form($id, "admin/Consumidor/CadastroConsumidor");
        $formulario->setValor($res);


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
            ->setLabel("Tipo de Pessoa")
            ->setOptions($label_options)
            ->CriaInpunt();

        $formulario
            ->setId("no_Consumidor")
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
            ->setClasses("cpf")
            ->setInfo("Caso seja Pessoa Física")
            ->CriaInpunt();

        $formulario
            ->setId("nu_cnpj")
            ->setLabel("CNPJ")
            ->setTamanhoInput(6)
            ->setClasses("cnpj")
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

        $options = array("DF" => "Distrito Federal", "AC" => "Acre", "AL" => "Alagoas", "AM" => "Amazonas", "AP" => "Amapá", "BA" => "Bahia", "CE" => "Ceará", "ES" => "Espírito Santo", "GO" => "Goiás", "MA" => "Maranhão", "MT" => "Mato Grosso", "MS" => "Mato Grosso do Sul", "MG" => "Minas Gerais", "PA" => "Pará", "PB" => "Paraíba", "PR" => "Paraná", "PE" => "Pernambuco", "PI" => "Piauí", "RJ" => "Rio de Janeiro", "RN" => "Rio Grande do Norte", "RO" => "Rondônia", "RS" => "Rio Grande do Sul", "RR" => "Roraima", "SC" => "Santa Catarina", "SE" => "Sergipe", "SP" => "São Paulo", "TO" => "Tocantins");
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
            ->setLabel("Conteúdo")
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

        $this->form = $formulario->finalizaForm();

    }

    function ListarConsumidor()
    {
        $dados = array();
        if (!empty($_POST)):
            $dados = array(
                'st_status' => $_POST['st_status'][0],
                'no_membro' => $_POST['no_membro']
            );
        endif;
        $this->result = ConsumidorModel::PesquisaConsumidor($dados);
    }


}

?>
   