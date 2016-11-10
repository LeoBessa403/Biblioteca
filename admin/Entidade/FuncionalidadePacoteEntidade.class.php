<?php

/**
 * FuncionalidadePacote.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class FuncionalidadePacoteEntidade
{
	const TABELA = 'tb_funcionalidade_pacote';
	const ENTIDADE = 'FuncionalidadePacoteEntidade';
	const CHAVE = Constantes::CO_FUNCIONALIDADE_PACOTE;

	private $co_funcionalidade_pacote;
	private $co_funcionalidade;
	private $co_pacote;


	/**
     * @return $co_funcionalidade_pacote
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
        return $this->co_funcionalidade_pacote = $co_funcionalidade_pacote;
    }

	/**
     * @return $co_funcionalidade
     */
	public function getCoFuncionalidade()
    {
        return $this->co_funcionalidade;
    }

	/**
     * @param mixed $co_funcionalidade
     */
	public function setCoFuncionalidade($co_funcionalidade)
    {
        return $this->co_funcionalidade = $co_funcionalidade;
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

}