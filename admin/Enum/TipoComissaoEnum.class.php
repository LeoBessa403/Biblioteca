<?php

/**
 * Class TipoComissaoEnum
 */
class TipoComissaoEnum extends AbstractEnum
{
    const GERAL = 1;
    const USUARIO = 2;
    const SESSAO = 3;
    const PRODUTO = 4;

    public static $descricao = [
        TipoComissaoEnum::GERAL => 'Geral',
        TipoComissaoEnum::USUARIO => 'Por Usuário',
        TipoComissaoEnum::SESSAO => 'Por Sessão',
        TipoComissaoEnum::PRODUTO => 'Por Produto',
    ];
}
