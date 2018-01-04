<?php

/**
 * ProdutoPromocao.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class ProdutoPromocaoEntidade extends AbstractEntidade
{
	const TABELA = 'tb_produto_promocao';
	const ENTIDADE = 'ProdutoPromocaoEntidade';
	const CHAVE = CO_PRODUTO_PROMOCAO;

	private $co_produto_promocao;
	private $nu_preco_promocional;
	private $dt_inicio;
	private $dt_fim;
	private $nu_quantidade_minima;
	private $nu_limite;
	private $dt_cadastro;
	private $st_status;
	private $co_produto;
	private $co_usuario;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_PRODUTO_PROMOCAO,
			NU_PRECO_PROMOCIONAL,
			DT_INICIO,
			DT_FIM,
			NU_QUANTIDADE_MINIMA,
			NU_LIMITE,
			DT_CADASTRO,
			ST_STATUS,
			CO_PRODUTO,
			CO_USUARIO,
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
	* @return $co_produto_promocao
     */
	public function getCoProdutoPromocao()
    {
        return $this->co_produto_promocao;
    }

	/**
	* @param $co_produto_promocao
     * @return mixed
     */
	public function setCoProdutoPromocao($co_produto_promocao)
    {
        return $this->co_produto_promocao = $co_produto_promocao;
    }

	/**
	* @return NuPrepromocionalEntidade $nu_preco_promocional
     */
	public function getNuPrecoPromocional()
    {
        return $this->nu_preco_promocional;
    }

	/**
	* @param $nu_preco_promocional
     * @return mixed
     */
	public function setNuPrecoPromocional($nu_preco_promocional)
    {
        return $this->nu_preco_promocional = $nu_preco_promocional;
    }

	/**
	* @return $dt_inicio
     */
	public function getDtInicio()
    {
        return $this->dt_inicio;
    }

	/**
	* @param $dt_inicio
     * @return mixed
     */
	public function setDtInicio($dt_inicio)
    {
        return $this->dt_inicio = $dt_inicio;
    }

	/**
	* @return $dt_fim
     */
	public function getDtFim()
    {
        return $this->dt_fim;
    }

	/**
	* @param $dt_fim
     * @return mixed
     */
	public function setDtFim($dt_fim)
    {
        return $this->dt_fim = $dt_fim;
    }

	/**
	* @return $nu_quantidade_minima
     */
	public function getNuQuantidadeMinima()
    {
        return $this->nu_quantidade_minima;
    }

	/**
	* @param $nu_quantidade_minima
     * @return mixed
     */
	public function setNuQuantidadeMinima($nu_quantidade_minima)
    {
        return $this->nu_quantidade_minima = $nu_quantidade_minima;
    }

	/**
	* @return $nu_limite
     */
	public function getNuLimite()
    {
        return $this->nu_limite;
    }

	/**
	* @param $nu_limite
     * @return mixed
     */
	public function setNuLimite($nu_limite)
    {
        return $this->nu_limite = $nu_limite;
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
	* @return UsuarioEntidade $co_usuario
     */
	public function getCoUsuario()
    {
        return $this->co_usuario;
    }

	/**
	* @param $co_usuario
     * @return mixed
     */
	public function setCoUsuario($co_usuario)
    {
        return $this->co_usuario = $co_usuario;
    }

}