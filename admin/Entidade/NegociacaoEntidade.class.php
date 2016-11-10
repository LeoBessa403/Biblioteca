<?php

/**
 * Negociacao.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class NegociacaoEntidade
{
	const TABELA = 'tb_negociacao';
	const ENTIDADE = 'NegociacaoEntidade';
	const CHAVE = Constantes::CO_NEGOCIACAO;

	private $co_negociacao;
	private $dt_cadastro;
	private $ds_observacao;
	private $co_cliente;
	private $co_fornecedor;
	private $co_usuario;
	private $co_tipo_negociacao;
	private $co_cliente_sistema;
}