<?php

/**
 * CaixaService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  CaixaService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(CaixaEntidade::ENTIDADE);
        $this->ObjetoModel = New CaixaModel();
    }


}