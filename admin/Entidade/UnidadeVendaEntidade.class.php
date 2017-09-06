<?php

/**
 * UnidadeVenda.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class UnidadeVendaEntidade extends AbstractEntidade
{
    const TABELA = 'tb_unidade_venda';
    const ENTIDADE = 'UnidadeVendaEntidade';
    const CHAVE = CO_UNIDADE_VENDA;

    private $co_unidade_venda;
    private $no_unidade_venda;
    private $sg_unidade_venda;
    private $co_unidade_venda_consumidor;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            CO_UNIDADE_VENDA,
            NO_UNIDADE_VENDA,
            SG_UNIDADE_VENDA,
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
     * @return $no_unidade_venda
     */
    public function getNoUnidadeVenda()
    {
        return $this->no_unidade_venda;
    }

    /**
     * @param $no_unidade_venda
     * @return mixed
     */
    public function setNoUnidadeVenda($no_unidade_venda)
    {
        return $this->no_unidade_venda = $no_unidade_venda;
    }

    /**
     * @return $sg_unidade_venda
     */
    public function getSgUnidadeVenda()
    {
        return $this->sg_unidade_venda;
    }

    /**
     * @param $sg_unidade_venda
     * @return mixed
     */
    public function setSgUnidadeVenda($sg_unidade_venda)
    {
        return $this->sg_unidade_venda = $sg_unidade_venda;
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

}