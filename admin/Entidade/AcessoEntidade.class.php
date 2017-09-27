<?php

/**
 * Acesso.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */

class AcessoEntidade extends AbstractEntidade
{
	const TABELA = 'tb_acesso';
	const ENTIDADE = 'AcessoEntidade';
	const CHAVE = CO_ACESSO;

	private $co_acesso;
	private $ds_session_id;
	private $dt_inicio_acesso;
	private $dt_fim_acesso;
	private $co_usuario;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_ACESSO,
			DS_SESSION_ID,
			DT_INICIO_ACESSO,
			DT_FIM_ACESSO,
			CO_USUARIO,
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
	* @return $co_acesso
     */
	public function getCoAcesso()
    {
        return $this->co_acesso;
    }

	/**
	* @param $co_acesso
     * @return mixed
     */
	public function setCoAcesso($co_acesso)
    {
        return $this->co_acesso = $co_acesso;
    }

	/**
	* @return $ds_session_id
     */
	public function getDsSessionId()
    {
        return $this->ds_session_id;
    }

	/**
	* @param $ds_session_id
     * @return mixed
     */
	public function setDsSessionId($ds_session_id)
    {
        return $this->ds_session_id = $ds_session_id;
    }

	/**
	* @return $dt_inicio_acesso
     */
	public function getDtInicioAcesso()
    {
        return $this->dt_inicio_acesso;
    }

	/**
	* @param $dt_inicio_acesso
     * @return mixed
     */
	public function setDtInicioAcesso($dt_inicio_acesso)
    {
        return $this->dt_inicio_acesso = $dt_inicio_acesso;
    }

	/**
	* @return $dt_fim_acesso
     */
	public function getDtFimAcesso()
    {
        return $this->dt_fim_acesso;
    }

	/**
	* @param $dt_fim_acesso
     * @return mixed
     */
	public function setDtFimAcesso($dt_fim_acesso)
    {
        return $this->dt_fim_acesso = $dt_fim_acesso;
    }

	/**
	* @return UsuarioEntidade $co_usuario
     */
	public function getCoUsuario()
    {
        return $this->co_usuario;
    }

	/**
	* @param $co_usuario
     * @return mixed
     */
	public function setCoUsuario($co_usuario)
    {
        return $this->co_usuario = $co_usuario;
    }

}