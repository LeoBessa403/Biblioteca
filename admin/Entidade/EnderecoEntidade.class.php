<?php

/**
 * Endereco.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class EnderecoEntidade
{
	const TABELA = 'tb_endereco';
	const ENTIDADE = 'EnderecoEntidade';
	const CHAVE = Constantes::CO_ENDERECO;

	private $co_endereco;
	private $ds_endereco;
	private $ds_complemento;
	private $ds_bairro;
	private $nu_cep;
	private $no_cidade;
	private $sg_uf;
}