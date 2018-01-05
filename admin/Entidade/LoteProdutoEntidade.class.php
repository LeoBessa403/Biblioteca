<?php

/**
 * LoteProduto.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class LoteProdutoEntidade extends AbstractEntidade
{
    const TABELA = 'TB_LOTE_PRODUTO';
    const ENTIDADE = 'LoteProdutoEntidade';
    const CHAVE = CO_LOTE_PRODUTO;

    private $co_lote_produto;
    private $dt_validade;
    private $dt_cadastro;
    private $ds_observacao;
    private $co_produto;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            CO_LOTE_PRODUTO,
            DT_VALIDADE,
            DT_CADASTRO,
            DS_OBSERVACAO,
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
     * @return $co_lote_produto
     */
    public function getCoLoteProduto()
    {
        return $this->co_lote_produto;
    }

    /**
     * @param $co_lote_produto
     * @return mixed
     */
    public function setCoLoteProduto($co_lote_produto)
    {
        return $this->co_lote_produto = $co_lote_produto;
    }

    /**
     * @return $dt_validade
     */
    public function getDtValidade()
    {
        return $this->dt_validade;
    }

    /**
     * @param $dt_validade
     * @return mixed
     */
    public function setDtValidade($dt_validade)
    {
        return $this->dt_validade = $dt_validade;
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
     * @return ProdutoEntidade $co_produto
     */
    public function getCoProduto()
    {
        return $this->co_produto;
    }

    /**
     * @param $co_produto
     * @return mixed
     */
    public function setCoProduto($co_produto)
    {
        return $this->co_produto = $co_produto;
    }

}