<?php

/**
 * ProdutoLocalidade.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class ProdutoLocalidadeEntidade extends AbstractEntidade
{
	const TABELA = 'tb_produto_localidade';
	const ENTIDADE = 'ProdutoLocalidadeEntidade';
	const CHAVE = CO_PRODUTO_LOCALIDADE;

	private $co_produto_localidade;
	private $co_localidade;
	private $co_produto;
	private $ds_localidade;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_PRODUTO_LOCALIDADE,
			CO_LOCALIDADE,
			CO_PRODUTO,
			DS_LOCALIDADE,
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
	* @return $co_produto_localidade
     */
	public function getCoProdutoLocalidade()
    {
        return $this->co_produto_localidade;
    }

	/**
	* @param $co_produto_localidade
     * @return mixed
     */
	public function setCoProdutoLocalidade($co_produto_localidade)
    {
        return $this->co_produto_localidade = $co_produto_localidade;
    }

	/**
	* @return LocalidadeEntidade $co_localidade
     */
	public function getCoLocalidade()
    {
        return $this->co_localidade;
    }

	/**
	* @param $co_localidade
     * @return mixed
     */
	public function setCoLocalidade($co_localidade)
    {
        return $this->co_localidade = $co_localidade;
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
	* @return $ds_localidade
     */
	public function getDsLocalidade()
    {
        return $this->ds_localidade;
    }

	/**
	* @param $ds_localidade
     * @return mixed
     */
	public function setDsLocalidade($ds_localidade)
    {
        return $this->ds_localidade = $ds_localidade;
    }

}