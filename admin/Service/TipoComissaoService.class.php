<?php

/**
 * TipoComissaoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  TipoComissaoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(TipoComissaoEntidade::ENTIDADE);
        $this->ObjetoModel = New TipoComissaoModel();
    }


}