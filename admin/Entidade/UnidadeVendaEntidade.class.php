<?php

/**
 * UnidadeVenda.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class UnidadeVendaEntidade
{
	const TABELA = 'tb_unidade_venda';
	const ENTIDADE = 'UnidadeVendaEntidade';
	const CHAVE = Constantes::CO_UNIDADE_VENDA;

	private $co_unidade_venda;
	private $no_unidade_venda;
	private $sg_unidade_venda;
	private $st_status;
	private $co_cliente_sistema;


	/**
     * @return $co_unidade_venda
     */
	public function getCoUnidadeVenda()
    {
        return $this->co_unidade_venda;
    }

	/**
     * @param mixed $co_unidade_venda
     */
	public function setCoUnidadeVenda($co_unidade_venda)
    {
        return $this->co_unidade_venda = $co_unidade_venda;
    }

	/**
     * @return $no_unidade_venda
     */
	public function getNoUnidadeVenda()
    {
        return $this->no_unidade_venda;
    }

	/**
     * @param mixed $no_unidade_venda
     */
	public function setNoUnidadeVenda($no_unidade_venda)
    {
        return $this->no_unidade_venda = $no_unidade_venda;
    }

	/**
     * @return $sg_unidade_venda
     */
	public function getSgUnidadeVenda()
    {
        return $this->sg_unidade_venda;
    }

	/**
     * @param mixed $sg_unidade_venda
     */
	public function setSgUnidadeVenda($sg_unidade_venda)
    {
        return $this->sg_unidade_venda = $sg_unidade_venda;
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

}