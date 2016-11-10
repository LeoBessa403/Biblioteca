<?php

/**
 * UnidadeVenda.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class UnidadeVendaEntidade
{
	const TABELA = 'tb_unidade_venda';
	const ENTIDADE = 'UnidadeVendaEntidade';
	const CHAVE = Constantes::CO_UNIDADE_VENDA;

	private $co_unidade_venda;
	private $no_unidade_venda;
	private $sg_unidade_venda;
	private $st_status;
	private $co_cliente_sistema;
}