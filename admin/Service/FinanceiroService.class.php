<?php

/**
 * FinanceiroService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  FinanceiroService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(FinanceiroEntidade::ENTIDADE);
        $this->ObjetoModel = New FinanceiroModel();
    }


}