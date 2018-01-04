<?php

/**
 * ConsumidorDependenciaService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  ConsumidorDependenciaService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(ConsumidorDependenciaEntidade::ENTIDADE);
        $this->ObjetoModel = New ConsumidorDependenciaModel();
    }


}