<?php

/**
 * Contato.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class ContatoEntidade
{
	const TABELA = 'tb_contato';
	const ENTIDADE = 'ContatoEntidade';
	const CHAVE = Constantes::CO_CONTATO;

	private $co_contato;
	private $nu_tel1;
	private $nu_tel2;
	private $nu_tel3;
	private $nu_tel4;
	private $ds_email;
	private $ds_site;
}