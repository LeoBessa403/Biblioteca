<?php

/**
 * Fornecedor.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class FornecedorEntidade
{
	const TABELA = 'tb_fornecedor';
	const ENTIDADE = 'FornecedorEntidade';
	const CHAVE = Constantes::CO_FORNECEDOR;

	private $co_fornecedor;
	private $ds_observacao;
	private $dt_cadastro;
	private $st_status;
	private $co_representante;
	private $co_cliente_sistema;
	private $co_pessoa;
	private $co_empresa;
}