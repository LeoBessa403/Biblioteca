<?php

/**
 * ProdutoDetalhe.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class ProdutoDetalheEntidade extends AbstractEntidade
{
    const TABELA = 'tb_produto_detalhe';
    const ENTIDADE = 'ProdutoDetalheEntidade';
    const CHAVE = Constantes::CO_PRODUTO_DETALHE;

    private $co_produto_detalhe;
    private $nu_estoque_baixo;
    private $nu_preco_venda;
    private $nu_valor_lucro;
    private $nu_porc_valor_lucro;
    private $nu_valor_desconto_maximo;
    private $nu_porc_desc_max;
    private $nu_preco_atacado;
    private $nu_quantidade_atacado;
    private $dt_cadastro;
    private $co_usuario;
    private $co_produto;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_PRODUTO_DETALHE,
            Constantes::NU_ESTOQUE_BAIXO,
            Constantes::NU_PRECO_VENDA,
            Constantes::NU_VALOR_LUCRO,
            Constantes::NU_PORC_VALOR_LUCRO,
            Constantes::NU_VALOR_DESCONTO_MAXIMO,
            Constantes::NU_PORC_DESC_MAX,
            Constantes::NU_PRECO_ATACADO,
            Constantes::NU_QUANTIDADE_ATACADO,
            Constantes::DT_CADASTRO,
            Constantes::CO_USUARIO,
            Constantes::CO_PRODUTO,
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
     * @return $co_produto_detalhe
     */
    public function getCoProdutoDetalhe()
    {
        return $this->co_produto_detalhe;
    }

    /**
     * @param $co_produto_detalhe
     * @return mixed
     */
    public function setCoProdutoDetalhe($co_produto_detalhe)
    {
        return $this->co_produto_detalhe = $co_produto_detalhe;
    }

    /**
     * @return $nu_estoque_baixo
     */
    public function getNuEstoqueBaixo()
    {
        return $this->nu_estoque_baixo;
    }

    /**
     * @param $nu_estoque_baixo
     * @return mixed
     */
    public function setNuEstoqueBaixo($nu_estoque_baixo)
    {
        return $this->nu_estoque_baixo = $nu_estoque_baixo;
    }

    /**
     * @return $nu_preco_venda
     */
    public function getNuPrecoVenda()
    {
        return $this->nu_preco_venda;
    }

    /**
     * @param $nu_preco_venda
     * @return mixed
     */
    public function setNuPrecoVenda($nu_preco_venda)
    {
        return $this->nu_preco_venda = $nu_preco_venda;
    }

    /**
     * @return $nu_valor_lucro
     */
    public function getNuValorLucro()
    {
        return $this->nu_valor_lucro;
    }

    /**
     * @param $nu_valor_lucro
     * @return mixed
     */
    public function setNuValorLucro($nu_valor_lucro)
    {
        return $this->nu_valor_lucro = $nu_valor_lucro;
    }

    /**
     * @return $nu_porc_valor_lucro
     */
    public function getNuPorcValorLucro()
    {
        return $this->nu_porc_valor_lucro;
    }

    /**
     * @param $nu_porc_valor_lucro
     * @return mixed
     */
    public function setNuPorcValorLucro($nu_porc_valor_lucro)
    {
        return $this->nu_porc_valor_lucro = $nu_porc_valor_lucro;
    }

    /**
     * @return $nu_valor_desconto_maximo
     */
    public function getNuValorDescontoMaximo()
    {
        return $this->nu_valor_desconto_maximo;
    }

    /**
     * @param $nu_valor_desconto_maximo
     * @return mixed
     */
    public function setNuValorDescontoMaximo($nu_valor_desconto_maximo)
    {
        return $this->nu_valor_desconto_maximo = $nu_valor_desconto_maximo;
    }

    /**
     * @return $nu_porc_desc_max
     */
    public function getNuPorcDescMax()
    {
        return $this->nu_porc_desc_max;
    }

    /**
     * @param $nu_porc_desc_max
     * @return mixed
     */
    public function setNuPorcDescMax($nu_porc_desc_max)
    {
        return $this->nu_porc_desc_max = $nu_porc_desc_max;
    }

    /**
     * @return $nu_preco_atacado
     */
    public function getNuPrecoAtacado()
    {
        return $this->nu_preco_atacado;
    }

    /**
     * @param $nu_preco_atacado
     * @return mixed
     */
    public function setNuPrecoAtacado($nu_preco_atacado)
    {
        return $this->nu_preco_atacado = $nu_preco_atacado;
    }

    /**
     * @return $nu_quantidade_atacado
     */
    public function getNuQuantidadeAtacado()
    {
        return $this->nu_quantidade_atacado;
    }

    /**
     * @param $nu_quantidade_atacado
     * @return mixed
     */
    public function setNuQuantidadeAtacado($nu_quantidade_atacado)
    {
        return $this->nu_quantidade_atacado = $nu_quantidade_atacado;
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
     * @return $co_produto
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