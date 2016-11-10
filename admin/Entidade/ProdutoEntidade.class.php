<?php

/**
 * Produto.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class ProdutoEntidade
{
	const TABELA = 'tb_produto';
	const ENTIDADE = 'ProdutoEntidade';
	const CHAVE = Constantes::CO_PRODUTO;

	private $co_produto;
	private $no_produto;
	private $nu_estoque;
	private $nu_codigo;
	private $ds_marca;
	private $dt_cadastro;
	private $st_status;
	private $co_categoria;
	private $co_unidade_venda;
	private $co_imagem;
	private $co_cliente_sistema;
}