<?php

/**
 * LocalidadeConsumidorService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  LocalidadeConsumidorService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(LocalidadeConsumidorEntidade::ENTIDADE);
        $this->ObjetoModel = New LocalidadeConsumidorModel();
    }


}