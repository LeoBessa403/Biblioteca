<?php

/**
 * AuditoriaService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  AuditoriaService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(AuditoriaEntidade::ENTIDADE);
        $this->ObjetoModel = New AuditoriaModel();
    }


}