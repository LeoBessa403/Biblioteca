<?php

/**
 * Perfil.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class PerfilEntidade extends AbstractEntidade
{
    const TABELA = 'tb_perfil';
    const ENTIDADE = 'PerfilEntidade';
    const CHAVE = Constantes::CO_PERFIL;

    private $co_perfil;
    private $no_perfil;
    private $st_status;
    private $co_consumidor;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_PERFIL,
            Constantes::NO_PERFIL,
            Constantes::ST_STATUS,
            Constantes::CO_CONSUMIDOR,
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

    /**
     * @return $no_perfil
     */
    public function getNoPerfil()
    {
        return $this->no_perfil;
    }

    /**
     * @param $no_perfil
     * @return mixed
     */
    public function setNoPerfil($no_perfil)
    {
        return $this->no_perfil = $no_perfil;
    }

    /**
     * @return $st_status
     */
    public function getStStatus()
    {
        return $this->st_status;
    }

    /**
     * @param $st_status
     * @return mixed
     */
    public function setStStatus($st_status)
    {
        return $this->st_status = $st_status;
    }

    /**
     * @return $co_consumidor
     */
    public function getCoConsumidor()
    {
        return $this->co_consumidor;
    }

    /**
     * @param $co_consumidor
     * @return mixed
     */
    public function setCoConsumidor($co_consumidor)
    {
        return $this->co_consumidor = $co_consumidor;
    }

}