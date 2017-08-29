<?php

/**
 * Consumidor.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class ConsumidorEntidade extends AbstractEntidade
{
    const TABELA = 'tb_consumidor';
    const ENTIDADE = 'ConsumidorEntidade';
    const CHAVE = Constantes::CO_CONSUMIDOR;

    private $co_consumidor;
    private $dt_cadastro;
    private $ds_observacao;
    private $st_status;
    private $co_pessoa;
    private $co_empresa;
    private $co_consumidor_matriz;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_CONSUMIDOR,
            Constantes::DT_CADASTRO,
            Constantes::DS_OBSERVACAO,
            Constantes::ST_STATUS,
            Constantes::CO_PESSOA,
            Constantes::CO_EMPRESA,
            Constantes::CO_CONSUMIDOR_MATRIZ,
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
     * @return $co_consumidor_matriz
     */
    public function getCoConsumidorMatriz()
    {
        return $this->co_consumidor_matriz;
    }

    /**
     * @param $co_consumidor_matriz
     * @return mixed
     */
    public function setCoConsumidorMatriz($co_consumidor_matriz)
    {
        return $this->co_consumidor_matriz = $co_consumidor_matriz;
    }

}