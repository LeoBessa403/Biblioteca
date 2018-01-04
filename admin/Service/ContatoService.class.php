<?php

/**
 * ContatoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  ContatoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(ContatoEntidade::ENTIDADE);
        $this->ObjetoModel = New ContatoModel();
    }


}