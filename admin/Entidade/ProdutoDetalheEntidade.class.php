<?php

/**
 * ProdutoDetalhe.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class ProdutoDetalheEntidade
{
	const TABELA = 'tb_produto_detalhe';
	const ENTIDADE = 'ProdutoDetalheEntidade';
	const CHAVE = Constantes::CO_PRODUTO_DETALHE;

	private $co_produto_detalhe;
	private $nu_estoque_baixo;
	private $nu_preco;
	private $nu_lucro;
	private $nu_desconto_maximo;
	private $dt_cadastro;
	private $co_produto;
	private $co_usuario;
}