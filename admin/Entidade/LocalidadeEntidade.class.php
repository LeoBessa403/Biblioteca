<?php

/**
 * Localidade.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class LocalidadeEntidade extends AbstractEntidade
{
	const TABELA = 'tb_localidade';
	const ENTIDADE = 'LocalidadeEntidade';
	const CHAVE = CO_LOCALIDADE;

	private $co_localidade;
	private $ds_localidade;
	private $co_localidade_consumidor;
	private $co_produto_localidade;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_LOCALIDADE,
			DS_LOCALIDADE,
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
	* @return $co_localidade
     */
	public function getCoLocalidade()
    {
        return $this->co_localidade;
    }

	/**
	* @param $co_localidade
     * @return mixed
     */
	public function setCoLocalidade($co_localidade)
    {
        return $this->co_localidade = $co_localidade;
    }

	/**
	* @return $ds_localidade
     */
	public function getDsLocalidade()
    {
        return $this->ds_localidade;
    }

	/**
	* @param $ds_localidade
     * @return mixed
     */
	public function setDsLocalidade($ds_localidade)
    {
        return $this->ds_localidade = $ds_localidade;
    }

	/**
	* @return LocalidadeConsumidorEntidade $co_localidade_consumidor
     */
	public function getCoLocalidadeConsumidor()
    {
        return $this->co_localidade_consumidor;
    }

	/**
     * @param $co_localidade_consumidor
     * @return mixed
     */
	public function setCoLocalidadeConsumidor($co_localidade_consumidor)
    {
        return $this->co_localidade_consumidor = $co_localidade_consumidor;
    }

	/**
	* @return ProdutoLocalidadeEntidade $co_produto_localidade
     */
	public function getCoProdutoLocalidade()
    {
        return $this->co_produto_localidade;
    }

	/**
     * @param $co_produto_localidade
     * @return mixed
     */
	public function setCoProdutoLocalidade($co_produto_localidade)
    {
        return $this->co_produto_localidade = $co_produto_localidade;
    }

}