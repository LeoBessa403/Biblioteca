<?php

/**
 * Financeiro.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */

class FinanceiroEntidade extends AbstractEntidade
{
	const TABELA = 'tb_financeiro';
	const ENTIDADE = 'FinanceiroEntidade';
	const CHAVE = CO_FINANCEIRO;

	private $co_financeiro;
	private $nu_parcela;
	private $nu_valor_parcela;
	private $nu_valor_parcela_pago;
	private $dt_vencimento;
	private $dt_vencimento_pago;
	private $ds_observacao;
	private $co_consumidor;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_FINANCEIRO,
			NU_PARCELA,
			NU_VALOR_PARCELA,
			NU_VALOR_PARCELA_PAGO,
			DT_VENCIMENTO,
			DT_VENCIMENTO_PAGO,
			DS_OBSERVACAO,
			CO_CONSUMIDOR,
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
	* @return $co_financeiro
     */
	public function getCoFinanceiro()
    {
        return $this->co_financeiro;
    }

	/**
	* @param $co_financeiro
     * @return mixed
     */
	public function setCoFinanceiro($co_financeiro)
    {
        return $this->co_financeiro = $co_financeiro;
    }

	/**
	* @return $nu_parcela
     */
	public function getNuParcela()
    {
        return $this->nu_parcela;
    }

	/**
	* @param $nu_parcela
     * @return mixed
     */
	public function setNuParcela($nu_parcela)
    {
        return $this->nu_parcela = $nu_parcela;
    }

	/**
	* @return $nu_valor_parcela
     */
	public function getNuValorParcela()
    {
        return $this->nu_valor_parcela;
    }

	/**
	* @param $nu_valor_parcela
     * @return mixed
     */
	public function setNuValorParcela($nu_valor_parcela)
    {
        return $this->nu_valor_parcela = $nu_valor_parcela;
    }

	/**
	* @return $nu_valor_parcela_pago
     */
	public function getNuValorParcelaPago()
    {
        return $this->nu_valor_parcela_pago;
    }

	/**
	* @param $nu_valor_parcela_pago
     * @return mixed
     */
	public function setNuValorParcelaPago($nu_valor_parcela_pago)
    {
        return $this->nu_valor_parcela_pago = $nu_valor_parcela_pago;
    }

	/**
	* @return $dt_vencimento
     */
	public function getDtVencimento()
    {
        return $this->dt_vencimento;
    }

	/**
	* @param $dt_vencimento
     * @return mixed
     */
	public function setDtVencimento($dt_vencimento)
    {
        return $this->dt_vencimento = $dt_vencimento;
    }

	/**
	* @return $dt_vencimento_pago
     */
	public function getDtVencimentoPago()
    {
        return $this->dt_vencimento_pago;
    }

	/**
	* @param $dt_vencimento_pago
     * @return mixed
     */
	public function setDtVencimentoPago($dt_vencimento_pago)
    {
        return $this->dt_vencimento_pago = $dt_vencimento_pago;
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
	* @return ConsumidorEntidade $co_consumidor
     */
	public function getCoConsumidor()
    {
        return $this->co_consumidor;
    }

	/**
	* @param $co_consumidor
     * @return mixed
     */
	public function setCoConsumidor($co_consumidor)
    {
        return $this->co_consumidor = $co_consumidor;
    }

}