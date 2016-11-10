<?php

/**
 * Pagamento.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class PagamentoEntidade
{
	const TABELA = 'tb_pagamento';
	const ENTIDADE = 'PagamentoEntidade';
	const CHAVE = Constantes::CO_PAGAMENTO;

	private $co_pagamento;
	private $nu_total;
	private $nu_valor_pago;
	private $nu_parcelas;
	private $tp_situacao;
	private $ds_observacao;
	private $co_negociacao;
	private $co_tipo_pagamento;
}