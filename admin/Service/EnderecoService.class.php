<?php

/**
 * EnderecoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  EnderecoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(EnderecoEntidade::ENTIDADE);
        $this->ObjetoModel = New EnderecoModel();
    }


}