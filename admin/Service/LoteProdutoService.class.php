<?php

/**
 * LoteProdutoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  LoteProdutoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(LoteProdutoEntidade::ENTIDADE);
        $this->ObjetoModel = New LoteProdutoModel();
    }


}