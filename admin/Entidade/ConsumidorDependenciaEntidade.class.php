<?php

/**
 * ConsumidorDependencia.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class ConsumidorDependenciaEntidade extends AbstractEntidade
{
	const TABELA = 'tb_consumidor_dependencia';
	const ENTIDADE = 'ConsumidorDependenciaEntidade';
	const CHAVE = CO_CONSUMIDOR_DEPENDENCIA;

	private $co_consumidor_dependencia;
	private $co_consumidor_matriz;
	private $co_consumidor_filial;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_CONSUMIDOR_DEPENDENCIA,
			CO_CONSUMIDOR_MATRIZ,
			CO_CONSUMIDOR_FILIAL,
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
	* @return $co_consumidor_dependencia
     */
	public function getCoConsumidorDependencia()
    {
        return $this->co_consumidor_dependencia;
    }

	/**
	* @param $co_consumidor_dependencia
     * @return mixed
     */
	public function setCoConsumidorDependencia($co_consumidor_dependencia)
    {
        return $this->co_consumidor_dependencia = $co_consumidor_dependencia;
    }

	/**
	* @return ConsumidorMatrizEntidade $co_consumidor_matriz
     */
	public function getCoConsumidorMatriz()
    {
        return $this->co_consumidor_matriz;
    }

	/**
	* @param $co_consumidor_matriz
     * @return mixed
     */
	public function setCoConsumidorMatriz($co_consumidor_matriz)
    {
        return $this->co_consumidor_matriz = $co_consumidor_matriz;
    }

	/**
	* @return ConsumidorFilialEntidade $co_consumidor_filial
     */
	public function getCoConsumidorFilial()
    {
        return $this->co_consumidor_filial;
    }

	/**
	* @param $co_consumidor_filial
     * @return mixed
     */
	public function setCoConsumidorFilial($co_consumidor_filial)
    {
        return $this->co_consumidor_filial = $co_consumidor_filial;
    }

}