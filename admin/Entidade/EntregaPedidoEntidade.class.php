<?php

/**
 * EntregaPedido.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class EntregaPedidoEntidade extends AbstractEntidade
{
    const TABELA = 'tb_entrega_pedido';
    const ENTIDADE = 'EntregaPedidoEntidade';
    const CHAVE = Constantes::CO_ENTREGA_PEDIDO;

    private $co_entrega_pedido;
    private $dt_entrega;
    private $dt_ser_entregue;
    private $ds_observacao;
    private $co_sit_entreg_ped;
    private $co_negociacao;
    private $co_transportadora;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_ENTREGA_PEDIDO,
            Constantes::DT_ENTREGA,
            Constantes::DT_SER_ENTREGUE,
            Constantes::DS_OBSERVACAO,
            Constantes::CO_SIT_ENTREG_PED,
            Constantes::CO_NEGOCIACAO,
            Constantes::CO_TRANSPORTADORA,
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
     * @return $co_entrega_pedido
     */
    public function getCoEntregaPedido()
    {
        return $this->co_entrega_pedido;
    }

    /**
     * @param $co_entrega_pedido
     * @return mixed
     */
    public function setCoEntregaPedido($co_entrega_pedido)
    {
        return $this->co_entrega_pedido = $co_entrega_pedido;
    }

    /**
     * @return $dt_entrega
     */
    public function getDtEntrega()
    {
        return $this->dt_entrega;
    }

    /**
     * @param $dt_entrega
     * @return mixed
     */
    public function setDtEntrega($dt_entrega)
    {
        return $this->dt_entrega = $dt_entrega;
    }

    /**
     * @return $dt_ser_entregue
     */
    public function getDtSerEntregue()
    {
        return $this->dt_ser_entregue;
    }

    /**
     * @param $dt_ser_entregue
     * @return mixed
     */
    public function setDtSerEntregue($dt_ser_entregue)
    {
        return $this->dt_ser_entregue = $dt_ser_entregue;
    }

    /**
     * @return $ds_observacao
     */
    public function getDsObservacao()
    {
        return $this->ds_observacao;
    }

    /**
     * @param $ds_observacao
     * @return mixed
     */
    public function setDsObservacao($ds_observacao)
    {
        return $this->ds_observacao = $ds_observacao;
    }

    /**
     * @return $co_sit_entreg_ped
     */
    public function getCoSitEntregPed()
    {
        return $this->co_sit_entreg_ped;
    }

    /**
     * @param $co_sit_entreg_ped
     * @return mixed
     */
    public function setCoSitEntregPed($co_sit_entreg_ped)
    {
        return $this->co_sit_entreg_ped = $co_sit_entreg_ped;
    }

    /**
     * @return $co_negociacao
     */
    public function getCoNegociacao()
    {
        return $this->co_negociacao;
    }

    /**
     * @param $co_negociacao
     * @return mixed
     */
    public function setCoNegociacao($co_negociacao)
    {
        return $this->co_negociacao = $co_negociacao;
    }

    /**
     * @return $co_transportadora
     */
    public function getCoTransportadora()
    {
        return $this->co_transportadora;
    }

    /**
     * @param $co_transportadora
     * @return mixed
     */
    public function setCoTransportadora($co_transportadora)
    {
        return $this->co_transportadora = $co_transportadora;
    }

}