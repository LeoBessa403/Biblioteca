<?php

/**
 * Representante.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class RepresentanteEntidade
{
	const TABELA = 'tb_representante';
	const ENTIDADE = 'RepresentanteEntidade';
	const CHAVE = Constantes::CO_REPRESENTANTE;

	private $co_representante;
	private $dt_cadastro;
	private $st_status;
	private $co_cliente_sistema;
	private $co_pessoa;
}