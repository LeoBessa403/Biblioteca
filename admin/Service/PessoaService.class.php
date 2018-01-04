<?php

/**
 * PessoaService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  PessoaService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(PessoaEntidade::ENTIDADE);
        $this->ObjetoModel = New PessoaModel();
    }


}