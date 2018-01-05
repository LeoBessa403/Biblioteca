<?php

class Acesso extends AbstractController
{
    public $result;

    function ListarAcesso()
    {
        /** @var AcessoService $acessoService */
        $acessoService = $this->getService(ACESSO_SERVICE);

        if (!empty($_POST)) {
            $this->result = $acessoService->PesquisaAvancada($_POST);
        } else {
            $this->result = $acessoService->PesquisaTodos();
        }

    }

    public function ListarAcessoPesquisaAvancada()
    {
        echo AcessoForm::Pesquisar();
    }

}
