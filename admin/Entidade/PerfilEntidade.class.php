<?php

/**
 * Perfil.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class PerfilEntidade
{
	const TABELA = 'tb_perfil';
	const ENTIDADE = 'PerfilEntidade';
	const CHAVE = Constantes::CO_PERFIL;

	private $co_perfil;
	private $no_perfil;
	private $st_status;
	private $co_cliente_sistema;
}