<?php

/**
 * UnidadeVendaConsumidorService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  UnidadeVendaConsumidorService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(UnidadeVendaConsumidorEntidade::ENTIDADE);
        $this->ObjetoModel = New UnidadeVendaConsumidorModel();
    }


}