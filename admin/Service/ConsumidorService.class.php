<?php

/**
 * ConsumidorService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  ConsumidorService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(ConsumidorEntidade::ENTIDADE);
        $this->ObjetoModel = New ConsumidorModel();
    }


}