<?php

/**
 * Cliente.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class ClienteEntidade
{
	const TABELA = 'tb_cliente';
	const ENTIDADE = 'ClienteEntidade';
	const CHAVE = Constantes::CO_CLIENTE;

	private $co_cliente;
	private $ds_observacao;
	private $st_status;
	private $co_cliente_sistema;
	private $co_pessoa;
}