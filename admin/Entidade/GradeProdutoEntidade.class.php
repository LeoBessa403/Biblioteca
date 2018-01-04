<?php

/**
 * GradeProduto.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class GradeProdutoEntidade extends AbstractEntidade
{
	const TABELA = 'tb_grade_produto';
	const ENTIDADE = 'GradeProdutoEntidade';
	const CHAVE = CO_GRADE_PRODUTO;

	private $co_grade_produto;
	private $no_grade_produto;
	private $dt_cadastro;
	private $co_produto_grade_produto;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_GRADE_PRODUTO,
			NO_GRADE_PRODUTO,
			DT_CADASTRO,
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
	* @return $co_grade_produto
     */
	public function getCoGradeProduto()
    {
        return $this->co_grade_produto;
    }

	/**
	* @param $co_grade_produto
     * @return mixed
     */
	public function setCoGradeProduto($co_grade_produto)
    {
        return $this->co_grade_produto = $co_grade_produto;
    }

	/**
	* @return $no_grade_produto
     */
	public function getNoGradeProduto()
    {
        return $this->no_grade_produto;
    }

	/**
	* @param $no_grade_produto
     * @return mixed
     */
	public function setNoGradeProduto($no_grade_produto)
    {
        return $this->no_grade_produto = $no_grade_produto;
    }

	/**
	* @return $dt_cadastro
     */
	public function getDtCadastro()
    {
        return $this->dt_cadastro;
    }

	/**
	* @param $dt_cadastro
     * @return mixed
     */
	public function setDtCadastro($dt_cadastro)
    {
        return $this->dt_cadastro = $dt_cadastro;
    }

	/**
	* @return ProdutoGradeProdutoEntidade $co_produto_grade_produto
     */
	public function getCoProdutoGradeProduto()
    {
        return $this->co_produto_grade_produto;
    }

	/**
     * @param $co_produto_grade_produto
     * @return mixed
     */
	public function setCoProdutoGradeProduto($co_produto_grade_produto)
    {
        return $this->co_produto_grade_produto = $co_produto_grade_produto;
    }

}