<?php

/**
 * Empresa.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class EmpresaEntidade
{
	const TABELA = 'tb_empresa';
	const ENTIDADE = 'EmpresaEntidade';
	const CHAVE = Constantes::CO_EMPRESA;

	private $co_empresa;
	private $no_empresa;
	private $no_fantasia;
	private $dt_cadastro;
	private $nu_cnpj;
	private $nu_insc_estadual;
	private $ds_observacao;
	private $st_status;
	private $co_contato;
	private $co_endereco;
	private $co_pessoa;
}