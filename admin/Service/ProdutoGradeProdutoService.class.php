<?php

/**
 * ProdutoGradeProdutoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  ProdutoGradeProdutoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(ProdutoGradeProdutoEntidade::ENTIDADE);
        $this->ObjetoModel = New ProdutoGradeProdutoModel();
    }


}