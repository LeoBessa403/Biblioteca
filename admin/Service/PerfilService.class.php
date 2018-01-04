<?php

/**
 * PerfilService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  PerfilService extends AbstractService
{
    private $ObjetoModel;

    public function __construct()
    {
        parent::__construct(PerfilEntidade::ENTIDADE);
        $this->ObjetoModel = New PerfilModel();
    }

    public function montaComboTodosPerfis()
    {
        $Perfis = $this->PesquisaTodos();
        $todosPerfis = array();
        /** @var PerfilEntidade $perfil */
        foreach ($Perfis as $perfil) :
            $todosPerfis[$perfil->getCoPerfil()] = $perfil->getNoPerfil();
        endforeach;
        return $todosPerfis;
    }

    public function montaComboPerfil(UsuarioEntidade $usuario)
    {
        $meusPerfis = array();
        /** @var UsuarioPerfilEntidade $perfil */
        foreach ($usuario->getCoUsuarioPerfil() as $perfil) :
            $meusPerfis[$perfil->getCoPerfil()->getCoPerfil()] = $perfil->getCoPerfil()->getNoPerfil();
        endforeach;
        return $meusPerfis;
    }

    public function montaArrayPerfil(UsuarioEntidade $usuario)
    {
        $meusPerfis = array();
        /** @var UsuarioPerfilEntidade $perfil */
        foreach ($usuario->getCoUsuarioPerfil() as $perfil) :
            $meusPerfis[] = $perfil->getCoPerfil()->getCoPerfil();
        endforeach;
        return $meusPerfis;
    }

}