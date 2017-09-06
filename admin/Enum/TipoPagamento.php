<?php

/**
 * Class TipoPagamento
 */
class TipoPagamento extends AbstractEnum
{
    const DINHEIRO = 1;
    const CHEQUE = 2;
    const CARTAO_DEBITO = 3;
    const CARTAO_CREDITO = 4;
    const BOLETO_BANCARIO = 5;
    const PROMISSORIA = 6;
    const OUTROS = 7;

    public static $descricao = [
        TipoPagamento::DINHEIRO => 'Dinheiro',
        TipoPagamento::CHEQUE => 'Cheque',
        TipoPagamento::CARTAO_DEBITO => 'Cartão de Débito',
        TipoPagamento::CARTAO_CREDITO => 'Cartão de Crédito',
        TipoPagamento::BOLETO_BANCARIO => 'Boleto Bancário',
        TipoPagamento::PROMISSORIA => 'Promissória',
        TipoPagamento::OUTROS => 'Outros',
    ];
}
