<?php

/**
 * Perfil.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class PerfilEntidade
{
	const TABELA = 'tb_perfil';
	const ENTIDADE = 'PerfilEntidade';
	const CHAVE = Constantes::CO_PERFIL;

	private $co_perfil;
	private $no_perfil;
	private $st_status;
	private $co_cliente_sistema;


	/**
     * @return $campos
     */
	public static function getCampos() {
    	$campos = [
			Constantes::CO_PERFIL,
			Constantes::NO_PERFIL,
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
		];
    	return $relacionamentos;
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
     * @return $no_perfil
     */
	public function getNoPerfil()
    {
        return $this->no_perfil;
    }

	/**
     * @param mixed $no_perfil
     */
	public function setNoPerfil($no_perfil)
    {
        return $this->no_perfil = $no_perfil;
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

}