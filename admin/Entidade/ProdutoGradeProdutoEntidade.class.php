<?php

/**
 * ProdutoGradeProduto.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class ProdutoGradeProdutoEntidade extends AbstractEntidade
{
    const TABELA = 'TB_PRODUTO_GRADE_PRODUTO';
    const ENTIDADE = 'ProdutoGradeProdutoEntidade';
    const CHAVE = CO_PRODUTO_GRADE_PRODUTO;

    private $co_produto_grade_produto;
    private $co_grade_produto;
    private $co_produto;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            CO_PRODUTO_GRADE_PRODUTO,
            CO_GRADE_PRODUTO,
            CO_PRODUTO,
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
     * @return $co_produto_grade_produto
     */
    public function getCoProdutoGradeProduto()
    {
        return $this->co_produto_grade_produto;
    }

    /**
     * @param $co_produto_grade_produto
     * @return mixed
     */
    public function setCoProdutoGradeProduto($co_produto_grade_produto)
    {
        return $this->co_produto_grade_produto = $co_produto_grade_produto;
    }

    /**
     * @return GradeProdutoEntidade $co_grade_produto
     */
    public function getCoGradeProduto()
    {
        return $this->co_grade_produto;
    }

    /**
     * @param $co_grade_produto
     * @return mixed
     */
    public function setCoGradeProduto($co_grade_produto)
    {
        return $this->co_grade_produto = $co_grade_produto;
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