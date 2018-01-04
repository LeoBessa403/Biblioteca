<?php

/**
 * FuncionalidadeService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  FuncionalidadeService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(FuncionalidadeEntidade::ENTIDADE);
        $this->ObjetoModel = New FuncionalidadeModel();
    }


}