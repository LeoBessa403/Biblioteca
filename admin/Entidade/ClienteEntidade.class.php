<?php

/**
 * Cliente.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class ClienteEntidade
{
	const TABELA = 'tb_cliente';
	const ENTIDADE = 'ClienteEntidade';
	const CHAVE = Constantes::CO_CLIENTE;

	private $co_cliente;
	private $ds_observacao;
	private $st_status;
	private $co_cliente_sistema;
	private $co_pessoa;


	/**
     * @return $co_cliente
     */
	public function getCoCliente()
    {
        return $this->co_cliente;
    }

	/**
     * @param mixed $co_cliente
     */
	public function setCoCliente($co_cliente)
    {
        return $this->co_cliente = $co_cliente;
    }

	/**
     * @return $ds_observacao
     */
	public function getDsObservacao()
    {
        return $this->ds_observacao;
    }

	/**
     * @param mixed $ds_observacao
     */
	public function setDsObservacao($ds_observacao)
    {
        return $this->ds_observacao = $ds_observacao;
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

	/**
     * @return $co_pessoa
     */
	public function getCoPessoa()
    {
        return $this->co_pessoa;
    }

	/**
     * @param mixed $co_pessoa
     */
	public function setCoPessoa($co_pessoa)
    {
        return $this->co_pessoa = $co_pessoa;
    }

}