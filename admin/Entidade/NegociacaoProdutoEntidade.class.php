<?php

/**
 * NegociacaoProduto.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class NegociacaoProdutoEntidade extends AbstractEntidade
{
	const TABELA = 'tb_negociacao_produto';
	const ENTIDADE = 'NegociacaoProdutoEntidade';
	const CHAVE = CO_NEGOCIACAO_PRODUTO;

	private $co_negociacao_produto;
	private $co_negociacao;
	private $co_produto;
	private $nu_valor;
	private $nu_quantidade;
	private $ds_observacao;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_NEGOCIACAO_PRODUTO,
			CO_NEGOCIACAO,
			CO_PRODUTO,
			NU_VALOR,
			NU_QUANTIDADE,
			DS_OBSERVACAO,
		];
    }

	/**
	* @return $relacionamentos
     */
	public static function getRelacionamentos() {
    	$relacionamentos = Relacionamentos::getRelacionamentos();
		return $relacionamentos[static::TABELA];
	}


	/**
	* @return $co_negociacao_produto
     */
	public function getCoNegociacaoProduto()
    {
        return $this->co_negociacao_produto;
    }

	/**
	* @param $co_negociacao_produto
     * @return mixed
     */
	public function setCoNegociacaoProduto($co_negociacao_produto)
    {
        return $this->co_negociacao_produto = $co_negociacao_produto;
    }

	/**
	* @return NegociacaoEntidade $co_negociacao
     */
	public function getCoNegociacao()
    {
        return $this->co_negociacao;
    }

	/**
	* @param $co_negociacao
     * @return mixed
     */
	public function setCoNegociacao($co_negociacao)
    {
        return $this->co_negociacao = $co_negociacao;
    }

	/**
	* @return ProdutoEntidade $co_produto
     */
	public function getCoProduto()
    {
        return $this->co_produto;
    }

	/**
	* @param $co_produto
     * @return mixed
     */
	public function setCoProduto($co_produto)
    {
        return $this->co_produto = $co_produto;
    }

	/**
	* @return $nu_valor
     */
	public function getNuValor()
    {
        return $this->nu_valor;
    }

	/**
	* @param $nu_valor
     * @return mixed
     */
	public function setNuValor($nu_valor)
    {
        return $this->nu_valor = $nu_valor;
    }

	/**
	* @return $nu_quantidade
     */
	public function getNuQuantidade()
    {
        return $this->nu_quantidade;
    }

	/**
	* @param $nu_quantidade
     * @return mixed
     */
	public function setNuQuantidade($nu_quantidade)
    {
        return $this->nu_quantidade = $nu_quantidade;
    }

	/**
	* @return $ds_observacao
     */
	public function getDsObservacao()
    {
        return $this->ds_observacao;
    }

	/**
	* @param $ds_observacao
     * @return mixed
     */
	public function setDsObservacao($ds_observacao)
    {
        return $this->ds_observacao = $ds_observacao;
    }

}