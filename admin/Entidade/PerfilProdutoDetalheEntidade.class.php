<?php

/**
 * PerfilProdutoDetalhe.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class PerfilProdutoDetalheEntidade
{
	const TABELA = 'tb_perfil_produto_detalhe';
	const ENTIDADE = 'PerfilProdutoDetalheEntidade';
	const CHAVE = Constantes::CO_PERFIL_PRODUTO_DETALHE;

	private $co_perfil_produto_detalhe;
	private $co_produto_detalhe;
	private $co_perfil;
	private $nu_desconto;
}