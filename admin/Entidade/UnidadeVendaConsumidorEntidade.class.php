<?php

/**
 * UnidadeVendaConsumidor.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class UnidadeVendaConsumidorEntidade extends AbstractEntidade
{
    const TABELA = 'tb_unidade_venda_consumidor';
    const ENTIDADE = 'UnidadeVendaConsumidorEntidade';
    const CHAVE = Constantes::CO_UNIDADE_VENDA_CONSUMIDOR;

    private $co_unidade_venda_consumidor;
    private $st_ativo;
    private $co_unidade_venda;
    private $co_consumidor;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_UNIDADE_VENDA_CONSUMIDOR,
            Constantes::ST_ATIVO,
            Constantes::CO_UNIDADE_VENDA,
            Constantes::CO_CONSUMIDOR,
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
     * @return $co_unidade_venda_consumidor
     */
    public function getCoUnidadeVendaConsumidor()
    {
        return $this->co_unidade_venda_consumidor;
    }

    /**
     * @param $co_unidade_venda_consumidor
     * @return mixed
     */
    public function setCoUnidadeVendaConsumidor($co_unidade_venda_consumidor)
    {
        return $this->co_unidade_venda_consumidor = $co_unidade_venda_consumidor;
    }

    /**
     * @return $st_ativo
     */
    public function getStAtivo()
    {
        return $this->st_ativo;
    }

    /**
     * @param $st_ativo
     * @return mixed
     */
    public function setStAtivo($st_ativo)
    {
        return $this->st_ativo = $st_ativo;
    }

    /**
     * @return $co_unidade_venda
     */
    public function getCoUnidadeVenda()
    {
        return $this->co_unidade_venda;
    }

    /**
     * @param $co_unidade_venda
     * @return mixed
     */
    public function setCoUnidadeVenda($co_unidade_venda)
    {
        return $this->co_unidade_venda = $co_unidade_venda;
    }

    /**
     * @return $co_consumidor
     */
    public function getCoConsumidor()
    {
        return $this->co_consumidor;
    }

    /**
     * @param $co_consumidor
     * @return mixed
     */
    public function setCoConsumidor($co_consumidor)
    {
        return $this->co_consumidor = $co_consumidor;
    }

}