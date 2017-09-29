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
        /** @var ConsumidorService $consumidorService */
        $consumidorService = $this->getService(CONSUMIDOR_SERVICE);
        $id = "cadastroConsumidor";
        if (!empty($_POST[$id])):
            $consumidorService->salvarConsumidor($_POST);
            $this->ListarConsumidor();
            UrlAmigavel::$action = "ListarConsumidor";
        endif;
        $this->form = ConsumidorForm::Cadastrar();
    }

    function ListarConsumidor()
    {
//        $dados = array();
//        if (!empty($_POST)):
//            $dados = array(
////                'st_status' => $_POST['st_status'][0],
////                'no_membro' => $_POST['no_membro']
//            );
//        endif;
//        $this->result = ConsumidorModel::PesquisaConsumidor($dados);
    }


}

?>
   