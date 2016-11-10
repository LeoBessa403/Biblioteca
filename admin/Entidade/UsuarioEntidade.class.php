<?php

/**
 * Usuario.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class UsuarioEntidade
{
	const TABELA = 'tb_usuario';
	const ENTIDADE = 'UsuarioEntidade';
	const CHAVE = Constantes::CO_USUARIO;

	private $co_usuario;
	private $ds_login;
	private $ds_senha;
	private $ds_code;
	private $st_status;
	private $dt_cadastro;
	private $co_cliente_sistema;
	private $co_imagem;
	private $co_pessoa;
}