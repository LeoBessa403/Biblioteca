<?php

/**
 * ProdutoPromocao.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class ProdutoPromocaoEntidade
{
	const TABELA = 'tb_produto_promocao';
	const ENTIDADE = 'ProdutoPromocaoEntidade';
	const CHAVE = Constantes::CO_PRODUTO_PROMOCAO;

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
}