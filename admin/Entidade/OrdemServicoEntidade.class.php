<?php

/**
 * OrdemServico.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class OrdemServicoEntidade extends AbstractEntidade
{
    const TABELA = 'TB_ORDEM_SERVICO';
    const ENTIDADE = 'OrdemServicoEntidade';
    const CHAVE = CO_ORDEM_SERVICO;

    private $co_ordem_servico;
    private $nu_ordem_servico;
    private $dt_cadastro;
    private $ds_descricao;
    private $no_ordem_servico;
    private $dt_entrega;
    private $co_usuario;
    private $co_negociacao;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            CO_ORDEM_SERVICO,
            NU_ORDEM_SERVICO,
            DT_CADASTRO,
            DS_DESCRICAO,
            NO_ORDEM_SERVICO,
            DT_ENTREGA,
            CO_USUARIO,
            CO_NEGOCIACAO,
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
     * @return $co_ordem_servico
     */
    public function getCoOrdemServico()
    {
        return $this->co_ordem_servico;
    }

    /**
     * @param $co_ordem_servico
     * @return mixed
     */
    public function setCoOrdemServico($co_ordem_servico)
    {
        return $this->co_ordem_servico = $co_ordem_servico;
    }

    /**
     * @return $nu_ordem_servico
     */
    public function getNuOrdemServico()
    {
        return $this->nu_ordem_servico;
    }

    /**
     * @param $nu_ordem_servico
     * @return mixed
     */
    public function setNuOrdemServico($nu_ordem_servico)
    {
        return $this->nu_ordem_servico = $nu_ordem_servico;
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
     * @return $ds_descricao
     */
    public function getDsDescricao()
    {
        return $this->ds_descricao;
    }

    /**
     * @param $ds_descricao
     * @return mixed
     */
    public function setDsDescricao($ds_descricao)
    {
        return $this->ds_descricao = $ds_descricao;
    }

    /**
     * @return $no_ordem_servico
     */
    public function getNoOrdemServico()
    {
        return $this->no_ordem_servico;
    }

    /**
     * @param $no_ordem_servico
     * @return mixed
     */
    public function setNoOrdemServico($no_ordem_servico)
    {
        return $this->no_ordem_servico = $no_ordem_servico;
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
     * @return UsuarioEntidade $co_usuario
     */
    public function getCoUsuario()
    {
        return $this->co_usuario;
    }

    /**
     * @param $co_usuario
     * @return mixed
     */
    public function setCoUsuario($co_usuario)
    {
        return $this->co_usuario = $co_usuario;
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