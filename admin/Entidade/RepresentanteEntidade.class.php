<?php

/**
 * Representante.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */

class RepresentanteEntidade extends AbstractEntidade
{
	const TABELA = 'tb_representante';
	const ENTIDADE = 'RepresentanteEntidade';
	const CHAVE = CO_REPRESENTANTE;

	private $co_representante;
	private $dt_cadastro;
	private $st_status;
	private $co_consumidor;
	private $co_pessoa;
	private $co_fornecedor;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_REPRESENTANTE,
			DT_CADASTRO,
			ST_STATUS,
			CO_CONSUMIDOR,
			CO_PESSOA,
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
	* @return $co_representante
     */
	public function getCoRepresentante()
    {
        return $this->co_representante;
    }

	/**
	* @param $co_representante
     * @return mixed
     */
	public function setCoRepresentante($co_representante)
    {
        return $this->co_representante = $co_representante;
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
	* @return $st_status
     */
	public function getStStatus()
    {
        return $this->st_status;
    }

	/**
	* @param $st_status
     * @return mixed
     */
	public function setStStatus($st_status)
    {
        return $this->st_status = $st_status;
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

	/**
	* @return PessoaEntidade $co_pessoa
     */
	public function getCoPessoa()
    {
        return $this->co_pessoa;
    }

	/**
	* @param $co_pessoa
     * @return mixed
     */
	public function setCoPessoa($co_pessoa)
    {
        return $this->co_pessoa = $co_pessoa;
    }

	/**
	* @return FornecedorEntidade $co_fornecedor
     */
	public function getCoFornecedor()
    {
        return $this->co_fornecedor;
    }

	/**
     * @param $co_fornecedor
     * @return mixed
     */
	public function setCoFornecedor($co_fornecedor)
    {
        return $this->co_fornecedor = $co_fornecedor;
    }

}