<?php

/**
 * ProdutoLocalidadeService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  ProdutoLocalidadeService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(ProdutoLocalidadeEntidade::ENTIDADE);
        $this->ObjetoModel = New ProdutoLocalidadeModel();
    }


}