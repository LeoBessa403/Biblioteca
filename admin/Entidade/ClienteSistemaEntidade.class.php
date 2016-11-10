<?php

/**
 * ClienteSistema.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class ClienteSistemaEntidade
{
	const TABELA = 'tb_cliente_sistema';
	const ENTIDADE = 'ClienteSistemaEntidade';
	const CHAVE = Constantes::CO_CLIENTE_SISTEMA;

	private $co_cliente_sistema;
	private $dt_cadastro;
	private $ds_observacao;
	private $st_status;
	private $co_pessoa;
	private $co_empresa;
}