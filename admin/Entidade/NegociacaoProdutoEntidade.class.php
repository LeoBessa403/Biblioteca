<?php

/**
 * NegociacaoProduto.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class NegociacaoProdutoEntidade
{
	const TABELA = 'tb_negociacao_produto';
	const ENTIDADE = 'NegociacaoProdutoEntidade';
	const CHAVE = Constantes::CO_NEGOCIACAO_PRODUTO;

	private $co_negociacao_produto;
	private $co_negociacao;
	private $co_produto;
	private $nu_valor;
	private $nu_quantidade;
	private $ds_observacao;
}