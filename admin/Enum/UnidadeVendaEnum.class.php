<?php

/**
 * Class UnidadeVendaEnum
 */
class UnidadeVendaEnum extends AbstractEnum
{
    const UNIDADE = 1;
    const PAR = 2;
    const KILOGRAMA = 3;
    const GRAMA = 4;
    const METRO = 5;
    const CENTIMETRO = 6;
    const POLEGADA = 7;
    const PACOTE = 8;
    const SACO = 9;
    const ROLO = 10;

    public static $descricao = [
        UnidadeVendaEnum::UNIDADE => 'Unidade',
        UnidadeVendaEnum::PAR => 'Par',
        UnidadeVendaEnum::KILOGRAMA => 'Kilograma',
        UnidadeVendaEnum::GRAMA => 'Grama',
        UnidadeVendaEnum::METRO => 'Mêtro',
        UnidadeVendaEnum::CENTIMETRO => 'Centímetro',
        UnidadeVendaEnum::POLEGADA => 'Polegada',
        UnidadeVendaEnum::PACOTE => 'Pacote',
        UnidadeVendaEnum::SACO => 'Saco',
        UnidadeVendaEnum::ROLO => 'Rolo',
    ];
}
