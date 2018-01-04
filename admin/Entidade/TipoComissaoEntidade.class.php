<?php

/**
 * TipoComissao.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class TipoComissaoEntidade extends AbstractEntidade
{
	const TABELA = 'tb_tipo_comissao';
	const ENTIDADE = 'TipoComissaoEntidade';
	const CHAVE = CO_TIPO_COMISSAO;

	private $co_tipo_comissao;
	private $no_tipo_comissao;
	private $sg_tipo_comissao;
	private $co_comissao;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_TIPO_COMISSAO,
			NO_TIPO_COMISSAO,
			SG_TIPO_COMISSAO,
		];
    }

	/**
	* @return $relacionamentos
     */
	public static function getRelacionamentos() {
    	$relacionamentos = Relacionamentos::getRelacionamentos();
		return $relacionamentos[static::TABELA];
	}


	/**
	* @return $co_tipo_comissao
     */
	public function getCoTipoComissao()
    {
        return $this->co_tipo_comissao;
    }

	/**
	* @param $co_tipo_comissao
     * @return mixed
     */
	public function setCoTipoComissao($co_tipo_comissao)
    {
        return $this->co_tipo_comissao = $co_tipo_comissao;
    }

	/**
	* @return $no_tipo_comissao
     */
	public function getNoTipoComissao()
    {
        return $this->no_tipo_comissao;
    }

	/**
	* @param $no_tipo_comissao
     * @return mixed
     */
	public function setNoTipoComissao($no_tipo_comissao)
    {
        return $this->no_tipo_comissao = $no_tipo_comissao;
    }

	/**
	* @return $sg_tipo_comissao
     */
	public function getSgTipoComissao()
    {
        return $this->sg_tipo_comissao;
    }

	/**
	* @param $sg_tipo_comissao
     * @return mixed
     */
	public function setSgTipoComissao($sg_tipo_comissao)
    {
        return $this->sg_tipo_comissao = $sg_tipo_comissao;
    }

	/**
	* @return ComissaoEntidade $co_comissao
     */
	public function getCoComissao()
    {
        return $this->co_comissao;
    }

	/**
     * @param $co_comissao
     * @return mixed
     */
	public function setCoComissao($co_comissao)
    {
        return $this->co_comissao = $co_comissao;
    }

}