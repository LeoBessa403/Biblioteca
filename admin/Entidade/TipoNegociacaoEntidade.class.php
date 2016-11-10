<?php

/**
 * TipoNegociacao.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class TipoNegociacaoEntidade
{
	const TABELA = 'tb_tipo_negociacao';
	const ENTIDADE = 'TipoNegociacaoEntidade';
	const CHAVE = Constantes::CO_TIPO_NEGOCIACAO;

	private $co_tipo_negociacao;
	private $no_tipo_negociacao;
	private $sg_tipo_negociacao;


	/**
     * @return $co_tipo_negociacao
     */
	public function getCoTipoNegociacao()
    {
        return $this->co_tipo_negociacao;
    }

	/**
     * @param mixed $co_tipo_negociacao
     */
	public function setCoTipoNegociacao($co_tipo_negociacao)
    {
        return $this->co_tipo_negociacao = $co_tipo_negociacao;
    }

	/**
     * @return $no_tipo_negociacao
     */
	public function getNoTipoNegociacao()
    {
        return $this->no_tipo_negociacao;
    }

	/**
     * @param mixed $no_tipo_negociacao
     */
	public function setNoTipoNegociacao($no_tipo_negociacao)
    {
        return $this->no_tipo_negociacao = $no_tipo_negociacao;
    }

	/**
     * @return $sg_tipo_negociacao
     */
	public function getSgTipoNegociacao()
    {
        return $this->sg_tipo_negociacao;
    }

	/**
     * @param mixed $sg_tipo_negociacao
     */
	public function setSgTipoNegociacao($sg_tipo_negociacao)
    {
        return $this->sg_tipo_negociacao = $sg_tipo_negociacao;
    }

}