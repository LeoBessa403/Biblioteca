<?php

/**
 * PerfilProdutoDetalheService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  PerfilProdutoDetalheService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(PerfilProdutoDetalheEntidade::ENTIDADE);
        $this->ObjetoModel = New PerfilProdutoDetalheModel();
    }


}