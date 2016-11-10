<?php

/**
 * Funcionalidade.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class FuncionalidadeEntidade
{
	const TABELA = 'tb_funcionalidade';
	const ENTIDADE = 'FuncionalidadeEntidade';
	const CHAVE = Constantes::CO_FUNCIONALIDADE;

	private $co_funcionalidade;
	private $no_funcionalidade;
	private $ds_rota;
	private $st_status;


	/**
     * @return $co_funcionalidade
     */
	public function getCoFuncionalidade()
    {
        return $this->co_funcionalidade;
    }

	/**
     * @param mixed $co_funcionalidade
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
     * @param mixed $no_funcionalidade
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
     * @param mixed $ds_rota
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
     * @param mixed $st_status
     */
	public function setStStatus($st_status)
    {
        return $this->st_status = $st_status;
    }

}