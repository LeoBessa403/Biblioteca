<?php

/**
 * Funcionario.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class FuncionarioEntidade
{
	const TABELA = 'tb_funcionario';
	const ENTIDADE = 'FuncionarioEntidade';
	const CHAVE = Constantes::CO_FUNCIONARIO;

	private $co_funcionario;
	private $ds_cargo;
	private $dt_admissao;
	private $dt_demissao;
	private $dt_cadastro;
	private $nu_carteira;
	private $nu_salario;
	private $nu_horas;
	private $st_status;
	private $co_imagem;
	private $co_cliente_sistema;
	private $co_pessoa;
}