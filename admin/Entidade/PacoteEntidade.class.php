<?php

/**
 * Pacote.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class PacoteEntidade
{
	const TABELA = 'tb_pacote';
	const ENTIDADE = 'PacoteEntidade';
	const CHAVE = Constantes::CO_PACOTE;

	private $co_pacote;
	private $no_pacote;
	private $nu_valor;
	private $st_status;
	private $co_cliente_sistema;
}