<?php

/**
 * Pessoa.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class PessoaEntidade
{
	const TABELA = 'tb_pessoa';
	const ENTIDADE = 'PessoaEntidade';
	const CHAVE = Constantes::CO_PESSOA;

	private $co_pessoa;
	private $nu_cpf;
	private $no_pessoa;
	private $nu_rg;
	private $dt_cadastro;
	private $dt_nascimento;
	private $st_sexo;
	private $st_estado_civil;
	private $co_endereco;
	private $co_contato;
}