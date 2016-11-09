<?php

/**
 * UsuarioPerfil.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */
class UsuarioPerfilEntidade
{
    const TABELA = "tb_usuario_perfil";
    const ENTIDADE = "UsuarioPerfilEntidade";
    const CHAVE = Constantes::CO_USUARIO_PERFIL;

    private $co_usuario_perfil;
    private $co_usuario;
    private $co_perfil;

    /**
     * @return mixed
     */
    public static function getCampos()
    {
        $campos = [
            Constantes::CO_USUARIO_PERFIL,
            Constantes::CO_USUARIO,
            Constantes::CO_PERFIL
        ];
        return $campos;
    }

    /**
     * @return mixed
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = [
            Constantes::CO_PESSOA => array(
                'Entidade' => PessoaEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
            Constantes::CO_PERFIL => array(
                'Entidade' => PerfilEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
        ];
        return $relacionamentos;
    }

    /**
     * @return mixed
     */
    public function getCoUsuarioPerfil()
    {
        return $this->co_usuario_perfil;
    }

    /**
     * @param mixed $co_usuario_perfil
     */
    public function setCoUsuarioPerfil($co_usuario_perfil)
    {
        $this->co_usuario_perfil = $co_usuario_perfil;
    }

    /**
     * @return mixed
     */
    public function getCoUsuario()
    {
        return $this->co_usuario;
    }

    /**
     * @param mixed $co_usuario
     */
    public function setCoUsuario($co_usuario)
    {
        $this->co_usuario = $co_usuario;
    }

    /**
     * @return mixed
     */
    public function getCoPerfil()
    {
        return $this->co_perfil;
    }

    /**
     * @param mixed $co_perfil
     */
    public function setCoPerfil($co_perfil)
    {
        $this->co_perfil = $co_perfil;
    }



}
