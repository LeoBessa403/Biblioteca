<?php

/**
 * Cliente.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class ClienteEntidade extends AbstractEntidade
{
    const TABELA = 'tb_cliente';
    const ENTIDADE = 'ClienteEntidade';
    const CHAVE = Constantes::CO_CLIENTE;

    private $co_cliente;
    private $ds_observacao;
    private $tp_credor;
    private $st_status;
    private $co_consumidor;
    private $co_pessoa;
    private $co_empresa;
    private $co_negociacao;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_CLIENTE,
            Constantes::DS_OBSERVACAO,
            Constantes::TP_CREDOR,
            Constantes::ST_STATUS,
            Constantes::CO_CONSUMIDOR,
            Constantes::CO_PESSOA,
            Constantes::CO_EMPRESA,
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
     * @return $co_cliente
     */
    public function getCoCliente()
    {
        return $this->co_cliente;
    }

    /**
     * @param $co_cliente
     * @return mixed
     */
    public function setCoCliente($co_cliente)
    {
        return $this->co_cliente = $co_cliente;
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
     * @return $tp_credor
     */
    public function getTpCredor()
    {
        return $this->tp_credor;
    }

    /**
     * @param $tp_credor
     * @return mixed
     */
    public function setTpCredor($tp_credor)
    {
        return $this->tp_credor = $tp_credor;
    }

    /**
     * @return $st_status
     */
    public function getStStatus()
    {
        return $this->st_status;
    }

    /**
     * @param $st_status
     * @return mixed
     */
    public function setStStatus($st_status)
    {
        return $this->st_status = $st_status;
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

    /**
     * @return $co_pessoa
     */
    public function getCoPessoa()
    {
        return $this->co_pessoa;
    }

    /**
     * @param $co_pessoa
     * @return mixed
     */
    public function setCoPessoa($co_pessoa)
    {
        return $this->co_pessoa = $co_pessoa;
    }

    /**
     * @return $co_empresa
     */
    public function getCoEmpresa()
    {
        return $this->co_empresa;
    }

    /**
     * @param $co_empresa
     * @return mixed
     */
    public function setCoEmpresa($co_empresa)
    {
        return $this->co_empresa = $co_empresa;
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

}