<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- start: PAGE TITLE & BREADCRUMB -->
                <ol class="breadcrumb">
                    <li>
                        <i class="clip-grid-6"></i>
                        <a href="#">
                            Consumidor
                        </a>
                    </li>
                    <li class="active">
                        Listar
                    </li>

                </ol>
                <div class="page-header">
                    <h1>Consumidor
                        <small>Listar Consumidor</small>
                    </h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i>
                        Consumidor
                    </div>
                    <div class="panel-body">
                        <?php
                        Modal::load();
                        Modal::deletaRegistro("Consumidor");
                        Modal::confirmacao("confirma_Consumidor");

                        $arrColunas = array('Consumidor', 'CNPJ / CPF', 'Responsável', 'Ações');
                        $grid = new Grid();
                        $grid->setColunasIndeces($arrColunas);
                        $grid->criaGrid();

                        foreach ($result as $res):
                            $acao = '<a href="' . PASTAADMIN . 'Consumidor/CadastroConsumidor/' .
                                Valida::GeraParametro("consumidor/" . $res[CO_CONSUMIDOR]) . '" 
                                    class="btn btn-primary tooltips" 
                                    data-original-title="Visualizar Registro" data-placement="top">
                                    <i class="fa fa-clipboard"></i>
                                 </a>
                                 <a data-toggle="modal" role="button" class="btn btn-bricky tooltips deleta" 
                                    id="' . $res[CO_CONSUMIDOR] . '" 
                                    href="#Consumidor" data-original-title="Excluir Registro" data-placement="top">
                                    <i class="fa fa-trash-o"></i>
                                 </a>';
                            $grid->setColunas(strtoupper($res['no_empresa']));
                            $grid->setColunas((!empty($res['nu_cnpj']) ? $res['nu_cnpj'] : $res['nu_cpf']));
                            $grid->setColunas($res['no_responsavel']);
                            $grid->setColunas($acao, 2);
                            $grid->criaLinha($res['co_empresa']);
                        endforeach;

                        $grid->finalizaGrid();
                        ?>
                    </div>
                </div>
                <!-- end: DYNAMIC TABLE PANEL -->
            </div>
        </div>
        <!-- end: PAGE CONTENT-->
    </div>
</div>
<!-- end: PAGE -->