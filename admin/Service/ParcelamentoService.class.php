<?php

/**
 * ParcelamentoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  ParcelamentoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(ParcelamentoEntidade::ENTIDADE);
        $this->ObjetoModel = New ParcelamentoModel();
    }


}