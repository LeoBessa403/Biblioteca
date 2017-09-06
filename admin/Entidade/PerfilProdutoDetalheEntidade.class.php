<?php

/**
 * PerfilProdutoDetalhe.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class PerfilProdutoDetalheEntidade extends AbstractEntidade
{
    const TABELA = 'tb_perfil_produto_detalhe';
    const ENTIDADE = 'PerfilProdutoDetalheEntidade';
    const CHAVE = CO_PERFIL_PRODUTO_DETALHE;

    private $co_perfil_produto_detalhe;
    private $co_produto_detalhe;
    private $co_perfil;
    private $nu_desconto;
    private $nu_porc_desconto;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            CO_PERFIL_PRODUTO_DETALHE,
            CO_PRODUTO_DETALHE,
            CO_PERFIL,
            NU_DESCONTO,
            NU_PORC_DESCONTO,
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
     * @return $co_perfil_produto_detalhe
     */
    public function getCoPerfilProdutoDetalhe()
    {
        return $this->co_perfil_produto_detalhe;
    }

    /**
     * @param $co_perfil_produto_detalhe
     * @return mixed
     */
    public function setCoPerfilProdutoDetalhe($co_perfil_produto_detalhe)
    {
        return $this->co_perfil_produto_detalhe = $co_perfil_produto_detalhe;
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
     * @return $co_perfil
     */
    public function getCoPerfil()
    {
        return $this->co_perfil;
    }

    /**
     * @param $co_perfil
     * @return mixed
     */
    public function setCoPerfil($co_perfil)
    {
        return $this->co_perfil = $co_perfil;
    }

    /**
     * @return $nu_desconto
     */
    public function getNuDesconto()
    {
        return $this->nu_desconto;
    }

    /**
     * @param $nu_desconto
     * @return mixed
     */
    public function setNuDesconto($nu_desconto)
    {
        return $this->nu_desconto = $nu_desconto;
    }

    /**
     * @return $nu_porc_desconto
     */
    public function getNuPorcDesconto()
    {
        return $this->nu_porc_desconto;
    }

    /**
     * @param $nu_porc_desconto
     * @return mixed
     */
    public function setNuPorcDesconto($nu_porc_desconto)
    {
        return $this->nu_porc_desconto = $nu_porc_desconto;
    }

}