<?php

/**
 * UsuarioPerfil.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class UsuarioPerfilEntidade extends AbstractEntidade
{
    const TABELA = 'tb_usuario_perfil';
    const ENTIDADE = 'UsuarioPerfilEntidade';
    const CHAVE = Constantes::CO_USUARIO_PERFIL;

    private $co_usuario_perfil;
    private $co_usuario;
    private $co_perfil;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_USUARIO_PERFIL,
            Constantes::CO_USUARIO,
            Constantes::CO_PERFIL,
        ];
    }

    /**
     * @return $relacionamentos
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = Relacionamentos::getRelacionamentos();
        return $relacionamentos[static::TABELA];
    }


    /**
     * @return $co_usuario_perfil
     */
    public function getCoUsuarioPerfil()
    {
        return $this->co_usuario_perfil;
    }

    /**
     * @param $co_usuario_perfil
     * @return mixed
     */
    public function setCoUsuarioPerfil($co_usuario_perfil)
    {
        return $this->co_usuario_perfil = $co_usuario_perfil;
    }

    /**
     * @return $co_usuario
     */
    public function getCoUsuario()
    {
        return $this->co_usuario;
    }

    /**
     * @param $co_usuario
     * @return mixed
     */
    public function setCoUsuario($co_usuario)
    {
        return $this->co_usuario = $co_usuario;
    }

    /**
     * @return $co_perfil
     */
    public function getCoPerfil()
    {
        return $this->co_perfil;
    }

    /**
     * @param $co_perfil
     * @return mixed
     */
    public function setCoPerfil($co_perfil)
    {
        return $this->co_perfil = $co_perfil;
    }

}