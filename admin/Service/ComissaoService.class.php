<?php

/**
 * ComissaoService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  ComissaoService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(ComissaoEntidade::ENTIDADE);
        $this->ObjetoModel = New ComissaoModel();
    }


}