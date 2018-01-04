<?php

/**
 * GradeProdutoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  GradeProdutoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(GradeProdutoEntidade::ENTIDADE);
        $this->ObjetoModel = New GradeProdutoModel();
    }


}