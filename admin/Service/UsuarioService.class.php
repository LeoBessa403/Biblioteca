<?php

/**
 * UsuarioService.class [ SEVICE ]
 * @copyright (c) 2017, Leo Bessa
 */
class  UsuarioService extends AbstractService
{
    private $ObjetoModel;

    public function __construct()
    {
        parent::__construct(UsuarioEntidade::ENTIDADE);
        $this->ObjetoModel = New UsuarioModel();
    }

    public function PesquisaAvancada($Condicoes)
    {
        return $this->ObjetoModel->PesquisaAvancada($Condicoes);
    }

}