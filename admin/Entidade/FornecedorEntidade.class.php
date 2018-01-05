<?php

/**
 * Fornecedor.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class FornecedorEntidade extends AbstractEntidade
{
    const TABELA = 'TB_FORNECEDOR';
    const ENTIDADE = 'FornecedorEntidade';
    const CHAVE = CO_FORNECEDOR;

    private $co_fornecedor;
    private $ds_observacao;
    private $dt_cadastro;
    private $tp_credor;
    private $st_status;
    private $co_representante;
    private $co_pessoa;
    private $co_empresa;
    private $co_consumidor;
    private $co_negociacao;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            CO_FORNECEDOR,
            DS_OBSERVACAO,
            DT_CADASTRO,
            TP_CREDOR,
            ST_STATUS,
            CO_REPRESENTANTE,
            CO_PESSOA,
            CO_EMPRESA,
            CO_CONSUMIDOR,
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
     * @return $co_fornecedor
     */
    public function getCoFornecedor()
    {
        return $this->co_fornecedor;
    }

    /**
     * @param $co_fornecedor
     * @return mixed
     */
    public function setCoFornecedor($co_fornecedor)
    {
        return $this->co_fornecedor = $co_fornecedor;
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
     * @return $dt_cadastro
     */
    public function getDtCadastro()
    {
        return $this->dt_cadastro;
    }

    /**
     * @param $dt_cadastro
     * @return mixed
     */
    public function setDtCadastro($dt_cadastro)
    {
        return $this->dt_cadastro = $dt_cadastro;
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
     * @return RepresentanteEntidade $co_representante
     */
    public function getCoRepresentante()
    {
        return $this->co_representante;
    }

    /**
     * @param $co_representante
     * @return mixed
     */
    public function setCoRepresentante($co_representante)
    {
        return $this->co_representante = $co_representante;
    }

    /**
     * @return PessoaEntidade $co_pessoa
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
     * @return EmpresaEntidade $co_empresa
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
     * @return ConsumidorEntidade $co_consumidor
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
     * @return NegociacaoEntidade $co_negociacao
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