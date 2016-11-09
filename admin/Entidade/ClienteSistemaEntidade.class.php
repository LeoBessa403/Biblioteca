<?php

/**
 *  ClienteSistema.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */
class ClienteSistemaEntidade
{
    const TABELA = "tb_cliente_sistema";
    const ENTIDADE = "ClienteSistemaEntidade";
    const CHAVE = Constantes::CO_CLIENTE_SISTEMA;

    private $co_cliente_sistema;
    private $dt_cadastro;
    private $ds_observacao;
    private $st_status;
    private $co_pessoa;
    private $co_empresa;

    /**
     * @return mixed
     */
    public static function getCampos()
    {
        $campos = [
            Constantes::CO_CLIENTE_SISTEMA,
            Constantes::DT_CADASTRO,
            Constantes::DS_OBSERVACAO,
            Constantes::ST_STATUS,
            Constantes::CO_PESSOA,
            Constantes::CO_EMPRESA
        ];
        return $campos;
    }

    /**
     * @return mixed
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = [
            Constantes::CO_PESSOA => array(
                'Entidade' => PessoaEntidade::ENTIDADE,
                'Tipo' => 1,
            )
        ];
        return $relacionamentos;
    }

    /**
     * @return mixed
     */
    public function getCoClienteSistema()
    {
        return $this->co_cliente_sistema;
    }

    /**
     * @param mixed $co_cliente_sistema
     */
    public function setCoClienteSistema($co_cliente_sistema)
    {
        $this->co_cliente_sistema = $co_cliente_sistema;
    }

    /**
     * @return mixed
     */
    public function getDtCadastro()
    {
        return $this->dt_cadastro;
    }

    /**
     * @param mixed $dt_cadastro
     */
    public function setDtCadastro($dt_cadastro)
    {
        $this->dt_cadastro = $dt_cadastro;
    }

    /**
     * @return mixed
     */
    public function getDsObservacao()
    {
        return $this->ds_observacao;
    }

    /**
     * @param mixed $ds_observacao
     */
    public function setDsObservacao($ds_observacao)
    {
        $this->ds_observacao = $ds_observacao;
    }

    /**
     * @return mixed
     */
    public function getStStatus()
    {
        return $this->st_status;
    }

    /**
     * @param mixed $st_status
     */
    public function setStStatus($st_status)
    {
        $this->st_status = $st_status;
    }

    /**
     * @return mixed
     */
    public function getCoPessoa()
    {
        return $this->co_pessoa;
    }

    /**
     * @param mixed $co_pessoa
     */
    public function setCoPessoa($co_pessoa)
    {
        $this->co_pessoa = $co_pessoa;
    }

    /**
     * @return mixed
     */
    public function getCoEmpresa()
    {
        return $this->co_empresa;
    }

    /**
     * @param mixed $co_empresa
     */
    public function setCoEmpresa($co_empresa)
    {
        $this->co_empresa = $co_empresa;
    }

    
}
