<?php

/**
 * Produto.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */

class ProdutoEntidade extends AbstractEntidade
{
	const TABELA = 'tb_produto';
	const ENTIDADE = 'ProdutoEntidade';
	const CHAVE = CO_PRODUTO;

	private $co_produto;
	private $ds_descricao;
	private $nu_estoque;
	private $nu_codigo;
	private $nu_codigo_interno;
	private $ds_marca;
	private $dt_cadastro;
	private $st_status;
	private $co_categoria;
	private $co_imagem;
	private $co_consumidor;
	private $co_unidade_venda_consumidor;
	private $co_lote_produto;
	private $co_negociacao_produto;
	private $co_produto_detalhe;
	private $co_produto_grade_produto;
	private $co_produto_localidade;
	private $co_produto_promocao;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_PRODUTO,
			DS_DESCRICAO,
			NU_ESTOQUE,
			NU_CODIGO,
			NU_CODIGO_INTERNO,
			DS_MARCA,
			DT_CADASTRO,
			ST_STATUS,
			CO_CATEGORIA,
			CO_IMAGEM,
			CO_CONSUMIDOR,
			CO_UNIDADE_VENDA_CONSUMIDOR,
			CO_LOTE_PRODUTO,
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
	* @return $co_produto
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
	* @return $ds_descricao
     */
	public function getDsDescricao()
    {
        return $this->ds_descricao;
    }

	/**
	* @param $ds_descricao
     * @return mixed
     */
	public function setDsDescricao($ds_descricao)
    {
        return $this->ds_descricao = $ds_descricao;
    }

	/**
	* @return $nu_estoque
     */
	public function getNuEstoque()
    {
        return $this->nu_estoque;
    }

	/**
	* @param $nu_estoque
     * @return mixed
     */
	public function setNuEstoque($nu_estoque)
    {
        return $this->nu_estoque = $nu_estoque;
    }

	/**
	* @return $nu_codigo
     */
	public function getNuCodigo()
    {
        return $this->nu_codigo;
    }

	/**
	* @param $nu_codigo
     * @return mixed
     */
	public function setNuCodigo($nu_codigo)
    {
        return $this->nu_codigo = $nu_codigo;
    }

	/**
	* @return $nu_codigo_interno
     */
	public function getNuCodigoInterno()
    {
        return $this->nu_codigo_interno;
    }

	/**
	* @param $nu_codigo_interno
     * @return mixed
     */
	public function setNuCodigoInterno($nu_codigo_interno)
    {
        return $this->nu_codigo_interno = $nu_codigo_interno;
    }

	/**
	* @return $ds_marca
     */
	public function getDsMarca()
    {
        return $this->ds_marca;
    }

	/**
	* @param $ds_marca
     * @return mixed
     */
	public function setDsMarca($ds_marca)
    {
        return $this->ds_marca = $ds_marca;
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
	* @return CategoriaEntidade $co_categoria
     */
	public function getCoCategoria()
    {
        return $this->co_categoria;
    }

	/**
	* @param $co_categoria
     * @return mixed
     */
	public function setCoCategoria($co_categoria)
    {
        return $this->co_categoria = $co_categoria;
    }

	/**
	* @return ImagemEntidade $co_imagem
     */
	public function getCoImagem()
    {
        return $this->co_imagem;
    }

	/**
	* @param $co_imagem
     * @return mixed
     */
	public function setCoImagem($co_imagem)
    {
        return $this->co_imagem = $co_imagem;
    }

	/**
	* @return ConsumidorEntidade $co_consumidor
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

	/**
	* @return UnidadeVendaConsumidorEntidade $co_unidade_venda_consumidor
     */
	public function getCoUnidadeVendaConsumidor()
    {
        return $this->co_unidade_venda_consumidor;
    }

	/**
	* @param $co_unidade_venda_consumidor
     * @return mixed
     */
	public function setCoUnidadeVendaConsumidor($co_unidade_venda_consumidor)
    {
        return $this->co_unidade_venda_consumidor = $co_unidade_venda_consumidor;
    }

	/**
	* @return LoteProdutoEntidade $co_lote_produto
     */
	public function getCoLoteProduto()
    {
        return $this->co_lote_produto;
    }

	/**
	* @param $co_lote_produto
     * @return mixed
     */
	public function setCoLoteProduto($co_lote_produto)
    {
        return $this->co_lote_produto = $co_lote_produto;
    }

	/**
	* @return NegociacaoProdutoEntidade $co_negociacao_produto
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
	* @return ProdutoDetalheEntidade $co_produto_detalhe
     */
	public function getCoProdutoDetalhe()
    {
        return $this->co_produto_detalhe;
    }

	/**
     * @param $co_produto_detalhe
     * @return mixed
     */
	public function setCoProdutoDetalhe($co_produto_detalhe)
    {
        return $this->co_produto_detalhe = $co_produto_detalhe;
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

	/**
	* @return ProdutoLocalidadeEntidade $co_produto_localidade
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
	* @return ProdutoPromocaoEntidade $co_produto_promocao
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

}