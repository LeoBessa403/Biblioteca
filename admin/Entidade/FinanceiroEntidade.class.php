<?php

/**
 * Financeiro.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class FinanceiroEntidade
{
	const TABELA = 'tb_financeiro';
	const ENTIDADE = 'FinanceiroEntidade';
	const CHAVE = Constantes::CO_FINANCEIRO;

	private $co_financeiro;
	private $nu_parcela;
	private $nu_valor_parcela;
	private $nu_valor_parcela_pago;
	private $dt_vencimento;
	private $dt_vencimento_pago;
	private $ds_observacao;
	private $co_cliente_sistema;
}