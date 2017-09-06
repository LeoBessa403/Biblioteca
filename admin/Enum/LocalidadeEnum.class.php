<?php

/**
 * Class LocalidadeEnum
 */
class LocalidadeEnum extends AbstractEnum
{
    const PRATELEIRA = 1;
    const COLUNA = 2;
    const FILEIRA = 3;
    const RUA = 4;
    const CAIXA = 5;
    const CONJUNTO = 6;
    const QUADRA = 7;
    const VITRINE = 8;
    const SETOR = 9;
    const CORREDOR = 10;

    public static $descricao = [
        LocalidadeEnum::PRATELEIRA => 'Prateleira',
        LocalidadeEnum::COLUNA => 'Coluna',
        LocalidadeEnum::FILEIRA => 'Filéira',
        LocalidadeEnum::RUA => 'Rua',
        LocalidadeEnum::CAIXA => 'Caixa',
        LocalidadeEnum::CONJUNTO => 'Conjunto',
        LocalidadeEnum::QUADRA => 'Quadra',
        LocalidadeEnum::VITRINE => 'Vitrine',
        LocalidadeEnum::SETOR => 'Setor',
        LocalidadeEnum::CORREDOR => 'Corredor',
    ];
}
