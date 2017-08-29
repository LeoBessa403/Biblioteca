<?php

/**
 * Funcionalidade.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class FuncionalidadeEntidade extends AbstractEntidade
{
    const TABELA = 'tb_funcionalidade';
    const ENTIDADE = 'FuncionalidadeEntidade';
    const CHAVE = Constantes::CO_FUNCIONALIDADE;

    private $co_funcionalidade;
    private $no_funcionalidade;
    private $ds_rota;
    private $st_status;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_FUNCIONALIDADE,
            Constantes::NO_FUNCIONALIDADE,
            Constantes::DS_ROTA,
            Constantes::ST_STATUS,
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
     * @return $co_funcionalidade
     */
    public function getCoFuncionalidade()
    {
        return $this->co_funcionalidade;
    }

    /**
     * @param $co_funcionalidade
     * @return mixed
     */
    public function setCoFuncionalidade($co_funcionalidade)
    {
        return $this->co_funcionalidade = $co_funcionalidade;
    }

    /**
     * @return $no_funcionalidade
     */
    public function getNoFuncionalidade()
    {
        return $this->no_funcionalidade;
    }

    /**
     * @param $no_funcionalidade
     * @return mixed
     */
    public function setNoFuncionalidade($no_funcionalidade)
    {
        return $this->no_funcionalidade = $no_funcionalidade;
    }

    /**
     * @return $ds_rota
     */
    public function getDsRota()
    {
        return $this->ds_rota;
    }

    /**
     * @param $ds_rota
     * @return mixed
     */
    public function setDsRota($ds_rota)
    {
        return $this->ds_rota = $ds_rota;
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

}