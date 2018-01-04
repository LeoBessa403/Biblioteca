<?php

/**
 * LocalidadeService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  LocalidadeService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(LocalidadeEntidade::ENTIDADE);
        $this->ObjetoModel = New LocalidadeModel();
    }


}