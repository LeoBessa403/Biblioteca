<?php

/**
 * Consumidor.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
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
    	return [CO_CONSUMIDOR_DEPENDENCIA];
    }

	/**
	* @return $relacionamentos
     */
	public static function getRelacionamentos() {
    	$relacionamentos = Relacionamentos::getRelacionamentos();
		return $relacionamentos[static::TABELA];
	}

    /**
     * @return mixed
     */
    public function getCoConsumidorDependencia()
    {
        return $this->co_consumidor_dependencia;
    }

    /**
     * @param mixed $co_consumidor_dependencia
     */
    public function setCoConsumidorDependencia($co_consumidor_dependencia)
    {
        $this->co_consumidor_dependencia = $co_consumidor_dependencia;
    }

    /**
     * @return ConsumidorEntidade mixed
     */
    public function getCoConsumidorMatriz()
    {
        return $this->co_consumidor_matriz;
    }

    /**
     * @param mixed $co_consumidor_matriz
     */
    public function setCoConsumidorMatriz($co_consumidor_matriz)
    {
        $this->co_consumidor_matriz = $co_consumidor_matriz;
    }

    /**
     * @return ConsumidorEntidade mixed
     */
    public function getCoConsumidorFilial()
    {
        return $this->co_consumidor_filial;
    }

    /**
     * @param mixed $co_consumidor_filial
     */
    public function setCoConsumidorFilial($co_consumidor_filial)
    {
        $this->co_consumidor_filial = $co_consumidor_filial;
    }
}