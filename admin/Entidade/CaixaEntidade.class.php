<?php

/**
 * Caixa.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class CaixaEntidade extends AbstractEntidade
{
    const TABELA = 'tb_caixa';
    const ENTIDADE = 'CaixaEntidade';
    const CHAVE = Constantes::CO_CAIXA;

    private $co_caixa;
    private $nu_caixa;
    private $dt_abertura;
    private $dt_fechamento;
    private $ds_observacao;
    private $nu_troco;
    private $co_usuario;
    private $co_negociacao;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_CAIXA,
            Constantes::NU_CAIXA,
            Constantes::DT_ABERTURA,
            Constantes::DT_FECHAMENTO,
            Constantes::DS_OBSERVACAO,
            Constantes::NU_TROCO,
            Constantes::CO_USUARIO,
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
     * @return $co_caixa
     */
    public function getCoCaixa()
    {
        return $this->co_caixa;
    }

    /**
     * @param $co_caixa
     * @return mixed
     */
    public function setCoCaixa($co_caixa)
    {
        return $this->co_caixa = $co_caixa;
    }

    /**
     * @return $nu_caixa
     */
    public function getNuCaixa()
    {
        return $this->nu_caixa;
    }

    /**
     * @param $nu_caixa
     * @return mixed
     */
    public function setNuCaixa($nu_caixa)
    {
        return $this->nu_caixa = $nu_caixa;
    }

    /**
     * @return $dt_abertura
     */
    public function getDtAbertura()
    {
        return $this->dt_abertura;
    }

    /**
     * @param $dt_abertura
     * @return mixed
     */
    public function setDtAbertura($dt_abertura)
    {
        return $this->dt_abertura = $dt_abertura;
    }

    /**
     * @return $dt_fechamento
     */
    public function getDtFechamento()
    {
        return $this->dt_fechamento;
    }

    /**
     * @param $dt_fechamento
     * @return mixed
     */
    public function setDtFechamento($dt_fechamento)
    {
        return $this->dt_fechamento = $dt_fechamento;
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
     * @return $nu_troco
     */
    public function getNuTroco()
    {
        return $this->nu_troco;
    }

    /**
     * @param $nu_troco
     * @return mixed
     */
    public function setNuTroco($nu_troco)
    {
        return $this->nu_troco = $nu_troco;
    }

    /**
     * @return $co_usuario
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