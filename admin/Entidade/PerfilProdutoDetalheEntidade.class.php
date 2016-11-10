<?php

/**
 * PerfilProdutoDetalhe.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class PerfilProdutoDetalheEntidade
{
	const TABELA = 'tb_perfil_produto_detalhe';
	const ENTIDADE = 'PerfilProdutoDetalheEntidade';
	const CHAVE = Constantes::CO_PERFIL_PRODUTO_DETALHE;

	private $co_perfil_produto_detalhe;
	private $co_produto_detalhe;
	private $co_perfil;
	private $nu_desconto;


	/**
     * @return $co_perfil_produto_detalhe
     */
	public function getCoPerfilProdutoDetalhe()
    {
        return $this->co_perfil_produto_detalhe;
    }

	/**
     * @param mixed $co_perfil_produto_detalhe
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
     * @param mixed $co_produto_detalhe
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
     * @param mixed $co_perfil
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
     * @param mixed $nu_desconto
     */
	public function setNuDesconto($nu_desconto)
    {
        return $this->nu_desconto = $nu_desconto;
    }

}