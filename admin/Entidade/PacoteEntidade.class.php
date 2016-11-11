<?php

/**
 * Pacote.Entidade [ ENTIDADE ]
 * @copyright (c) 2016, Leo Bessa
 */

class PacoteEntidade
{
	const TABELA = 'tb_pacote';
	const ENTIDADE = 'PacoteEntidade';
	const CHAVE = Constantes::CO_PACOTE;

	private $co_pacote;
	private $no_pacote;
	private $nu_valor;
	private $st_status;
	private $co_cliente_sistema;
	private $co_funcionalidade_pacote;


	/**
     * @return $campos
     */
	public static function getCampos() {
    	$campos = [
			Constantes::CO_PACOTE,
			Constantes::NO_PACOTE,
			Constantes::NU_VALOR,
			Constantes::ST_STATUS,
			Constantes::CO_CLIENTE_SISTEMA,
		];
    	return $campos;
    }

	/**
     * @return $relacionamentos
     */
	public static function getRelacionamentos() {
    	$relacionamentos = [
			Constantes::CO_CLIENTE_SISTEMA => array(
                'Entidade' => ClienteSistemaEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
            Constantes::CO_FUNCIONALIDADE_PACOTE => array(
                'Entidade' => FuncionalidadePacoteEntidade::ENTIDADE,
                'Tipo' => 'N',
            ),
		];
    	return $relacionamentos;
    }


	/**
     * @return $co_pacote
     */
	public function getCoPacote()
    {
        return $this->co_pacote;
    }

	/**
     * @param mixed $co_pacote
     */
	public function setCoPacote($co_pacote)
    {
        return $this->co_pacote = $co_pacote;
    }

	/**
     * @return $no_pacote
     */
	public function getNoPacote()
    {
        return $this->no_pacote;
    }

	/**
     * @param mixed $no_pacote
     */
	public function setNoPacote($no_pacote)
    {
        return $this->no_pacote = $no_pacote;
    }

	/**
     * @return $nu_valor
     */
	public function getNuValor()
    {
        return $this->nu_valor;
    }

	/**
     * @param mixed $nu_valor
     */
	public function setNuValor($nu_valor)
    {
        return $this->nu_valor = $nu_valor;
    }

	/**
     * @return $st_status
     */
	public function getStStatus()
    {
        return $this->st_status;
    }

	/**
     * @param mixed $st_status
     */
	public function setStStatus($st_status)
    {
        return $this->st_status = $st_status;
    }

	/**
     * @return $co_cliente_sistema
     */
	public function getCoClienteSistema()
    {
        return $this->co_cliente_sistema;
    }

	/**
     * @param mixed $co_cliente_sistema
     */
	public function setCoClienteSistema($co_cliente_sistema)
    {
        return $this->co_cliente_sistema = $co_cliente_sistema;
    }

    /**
     * @return mixed
     */
    public function getCoFuncionalidadePacote()
    {
        return $this->co_funcionalidade_pacote;
    }

    /**
     * @param mixed $co_funcionalidade_pacote
     */
    public function setCoFuncionalidadePacote($co_funcionalidade_pacote)
    {
        $this->co_funcionalidade_pacote = $co_funcionalidade_pacote;
    }

}