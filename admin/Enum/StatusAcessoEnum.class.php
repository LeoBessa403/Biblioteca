<?php

/**
 * Class TipoPagamento
 */
class StatusAcessoEnum extends AbstractEnum
{
    const ATIVO = 'A';
    const FINALIZADO = 'F';

    public static $descricao = [
        StatusAcessoEnum::ATIVO => 'Ativo',
        StatusAcessoEnum::FINALIZADO => 'Finalizado',
    ];
}
