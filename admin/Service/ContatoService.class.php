<?php

/**
 * ContatoService.class [ SEVICE ]
 * @copyright (c) 2017, Leo Bessa
 */
class  ContatoService extends AbstractService
{

    public function __construct()
    {
        parent::__construct(ContatoEntidade::ENTIDADE);
    }

    public function limpaMascaraTelefones($contato)
    {
        $contato[NU_TEL1] = Valida::RetiraMascara($contato[NU_TEL1]);
        $contato[NU_TEL2] = Valida::RetiraMascara($contato[NU_TEL2]);
        $contato[NU_TEL3] = Valida::RetiraMascara($contato[NU_TEL3]);
        $contato[NU_TEL4] = Valida::RetiraMascara($contato[NU_TEL4]);
        return $contato;
    }

}