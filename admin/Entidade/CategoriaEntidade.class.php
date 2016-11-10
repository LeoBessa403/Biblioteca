<?php

/**
 * Categoria.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class CategoriaEntidade
{
	const TABELA = 'tb_categoria';
	const ENTIDADE = 'CategoriaEntidade';
	const CHAVE = Constantes::CO_CATEGORIA;

	private $co_categoria;
	private $no_categoria;
	private $nu_lucro;
	private $st_status;
	private $co_tipo_categoria;
	private $co_cliente_sistema;
}