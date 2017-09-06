<?php

/**
 * Class TipoPagamento
 */
class TipoPagamentoEnum extends AbstractEnum
{
    const DINHEIRO = 1;
    const CHEQUE = 2;
    const CARTAO_DEBITO = 3;
    const CARTAO_CREDITO = 4;
    const BOLETO_BANCARIO = 5;
    const PROMISSORIA = 6;
    const OUTROS = 7;

    public static $descricao = [
        TipoPagamentoEnum::DINHEIRO => 'Dinheiro',
        TipoPagamentoEnum::CHEQUE => 'Cheque',
        TipoPagamentoEnum::CARTAO_DEBITO => 'Cartão de Débito',
        TipoPagamentoEnum::CARTAO_CREDITO => 'Cartão de Crédito',
        TipoPagamentoEnum::BOLETO_BANCARIO => 'Boleto Bancário',
        TipoPagamentoEnum::PROMISSORIA => 'Promissória',
        TipoPagamentoEnum::OUTROS => 'Outros',
    ];
}
