<?php

/**
 * GrupoLembreteUsuarioService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  GrupoLembreteUsuarioService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(GrupoLembreteUsuarioEntidade::ENTIDADE);
        $this->ObjetoModel = New GrupoLembreteUsuarioModel();
    }


}