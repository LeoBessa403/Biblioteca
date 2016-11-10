<?php

/**
 * Parcelamento.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class ParcelamentoEntidade
{
	const TABELA = 'tb_parcelamento';
	const ENTIDADE = 'ParcelamentoEntidade';
	const CHAVE = Constantes::CO_PARCELAMENTO;

	private $co_parcelamento;
	private $nu_parcela;
	private $nu_valor_parcela;
	private $nu_valor_parcela_pago;
	private $dt_vencimento;
	private $dt_vencimento_pago;
	private $ds_observacao;
	private $co_pagamento;
}