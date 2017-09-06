<?php

/**
 * Class TipoNegociacao
 */
class TipoNegociacao extends AbstractEnum
{
    const COMPRA = 1;
    const VENDA = 2;
    const COTACAO = 3;
    const ORCAMENTO = 4;
    const PAGAMENTO = 5;
    const RECEBIMENTO = 6;
    const PERDA = 7;
    const DEVOLUCAO = 8;
    const RETIRADA = 9;
    const TRASNFERENCIA = 10;
    const PEDIDO = 11;

    public static $descricao = [
        TipoNegociacao::COMPRA => 'Compra',
        TipoNegociacao::VENDA => 'Venda',
        TipoNegociacao::COTACAO => 'Cotação',
        TipoNegociacao::ORCAMENTO => 'Orçamento',
        TipoNegociacao::PAGAMENTO => 'Pagamento',
        TipoNegociacao::RECEBIMENTO => 'Recebimento',
        TipoNegociacao::PERDA => 'Perda',
        TipoNegociacao::DEVOLUCAO => 'Devolução',
        TipoNegociacao::RETIRADA => 'Retirada',
        TipoNegociacao::TRASNFERENCIA => 'Trasnferência',
        TipoNegociacao::PEDIDO => 'Pedido',
    ];
}
