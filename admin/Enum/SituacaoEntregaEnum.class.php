<?php

/**
 * Class SituacaoEntregaEnum
 */
class SituacaoEntregaEnum extends AbstractEnum
{
    const ENTREGUE = 1;
    const AGUARDANDO = 2;
    const ATRASADO = 3;

    public static $descricao = [
        SituacaoEntregaEnum::ENTREGUE => 'Entregue',
        SituacaoEntregaEnum::AGUARDANDO => 'Aguardando',
        SituacaoEntregaEnum::ATRASADO => 'Atrasado',
    ];
}
