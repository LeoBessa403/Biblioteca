<?php

/**
 * Auditoria.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class AuditoriaEntidade
{
	const TABELA = 'tb_auditoria';
	const ENTIDADE = 'AuditoriaEntidade';
	const CHAVE = Constantes::CO_AUDITORIA;

	private $co_auditoria;
	private $no_tabela;
	private $dt_realizado;
	private $no_operacao;
	private $ds_item_anterior;
	private $ds_item_atual;
	private $co_registro;
	private $ds_perfil_usuario;
	private $co_usuario;
	private $co_cliente_sistema;
}