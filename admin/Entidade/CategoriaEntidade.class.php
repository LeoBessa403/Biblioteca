<?php

/**
 * Categoria.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class CategoriaEntidade
{
	const TABELA = 'tb_categoria';
	const ENTIDADE = 'CategoriaEntidade';
	const CHAVE = Constantes::CO_CATEGORIA;

	private $co_categoria;
	private $no_categoria;
	private $nu_lucro;
	private $st_status;
	private $co_tipo_categoria;
	private $co_cliente_sistema;


	/**
     * @return $co_categoria
     */
	public function getCoCategoria()
    {
        return $this->co_categoria;
    }

	/**
     * @param mixed $co_categoria
     */
	public function setCoCategoria($co_categoria)
    {
        return $this->co_categoria = $co_categoria;
    }

	/**
     * @return $no_categoria
     */
	public function getNoCategoria()
    {
        return $this->no_categoria;
    }

	/**
     * @param mixed $no_categoria
     */
	public function setNoCategoria($no_categoria)
    {
        return $this->no_categoria = $no_categoria;
    }

	/**
     * @return $nu_lucro
     */
	public function getNuLucro()
    {
        return $this->nu_lucro;
    }

	/**
     * @param mixed $nu_lucro
     */
	public function setNuLucro($nu_lucro)
    {
        return $this->nu_lucro = $nu_lucro;
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

	/**
     * @return $co_tipo_categoria
     */
	public function getCoTipoCategoria()
    {
        return $this->co_tipo_categoria;
    }

	/**
     * @param mixed $co_tipo_categoria
     */
	public function setCoTipoCategoria($co_tipo_categoria)
    {
        return $this->co_tipo_categoria = $co_tipo_categoria;
    }

	/**
     * @return $co_cliente_sistema
     */
	public function getCoClienteSistema()
    {
        return $this->co_cliente_sistema;
    }

	/**
     * @param mixed $co_cliente_sistema
     */
	public function setCoClienteSistema($co_cliente_sistema)
    {
        return $this->co_cliente_sistema = $co_cliente_sistema;
    }

}