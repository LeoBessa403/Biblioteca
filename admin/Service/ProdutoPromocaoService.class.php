<?php

/**
 * ProdutoPromocaoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  ProdutoPromocaoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(ProdutoPromocaoEntidade::ENTIDADE);
        $this->ObjetoModel = New ProdutoPromocaoModel();
    }


}