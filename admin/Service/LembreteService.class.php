<?php

/**
 * LembreteService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  LembreteService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(LembreteEntidade::ENTIDADE);
        $this->ObjetoModel = New LembreteModel();
    }


}