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
            debug($dados);

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

        $this->form = ConsumidorForm::Cadastrar();

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
   