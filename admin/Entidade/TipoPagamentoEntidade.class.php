<?php

/**
 * TipoPagamento.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class TipoPagamentoEntidade extends AbstractEntidade
{
    const TABELA = 'tb_tipo_pagamento';
    const ENTIDADE = 'TipoPagamentoEntidade';
    const CHAVE = Constantes::CO_TIPO_PAGAMENTO;

    private $co_tipo_pagamento;
    private $ds_tipo_pagamento;
    private $sg_tipo_pagamento;
    private $co_pagamento;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_TIPO_PAGAMENTO,
            Constantes::DS_TIPO_PAGAMENTO,
            Constantes::SG_TIPO_PAGAMENTO,
        ];
    }

    /**
     * @return $relacionamentos
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = Relacionamentos::getRelacionamentos();
        return $relacionamentos[static::TABELA];
    }


    /**
     * @return $co_tipo_pagamento
     */
    public function getCoTipoPagamento()
    {
        return $this->co_tipo_pagamento;
    }

    /**
     * @param $co_tipo_pagamento
     * @return mixed
     */
    public function setCoTipoPagamento($co_tipo_pagamento)
    {
        return $this->co_tipo_pagamento = $co_tipo_pagamento;
    }

    /**
     * @return $ds_tipo_pagamento
     */
    public function getDsTipoPagamento()
    {
        return $this->ds_tipo_pagamento;
    }

    /**
     * @param $ds_tipo_pagamento
     * @return mixed
     */
    public function setDsTipoPagamento($ds_tipo_pagamento)
    {
        return $this->ds_tipo_pagamento = $ds_tipo_pagamento;
    }

    /**
     * @return $sg_tipo_pagamento
     */
    public function getSgTipoPagamento()
    {
        return $this->sg_tipo_pagamento;
    }

    /**
     * @param $sg_tipo_pagamento
     * @return mixed
     */
    public function setSgTipoPagamento($sg_tipo_pagamento)
    {
        return $this->sg_tipo_pagamento = $sg_tipo_pagamento;
    }

    /**
     * @return $co_pagamento
     */
    public function getCoPagamento()
    {
        return $this->co_pagamento;
    }

    /**
     * @param $co_pagamento
     * @return mixed
     */
    public function setCoPagamento($co_pagamento)
    {
        return $this->co_pagamento = $co_pagamento;
    }

}