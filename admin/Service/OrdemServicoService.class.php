<?php

/**
 * OrdemServicoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  OrdemServicoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(OrdemServicoEntidade::ENTIDADE);
        $this->ObjetoModel = New OrdemServicoModel();
    }


}