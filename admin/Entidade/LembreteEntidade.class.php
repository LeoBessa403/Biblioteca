<?php

/**
 * Lembrete.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class LembreteEntidade extends AbstractEntidade
{
	const TABELA = 'tb_lembrete';
	const ENTIDADE = 'LembreteEntidade';
	const CHAVE = CO_LEMBRETE;

	private $co_lembrete;
	private $dt_inicio;
	private $dt_fim;
	private $st_ativo;
	private $ds_lembrete;
	private $co_usuario_origem;
	private $co_usuario_destino;
	private $co_grupo_lembrete;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_LEMBRETE,
			DT_INICIO,
			DT_FIM,
			ST_ATIVO,
			DS_LEMBRETE,
			CO_USUARIO_ORIGEM,
			CO_USUARIO_DESTINO,
			CO_GRUPO_LEMBRETE,
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
	* @return $co_lembrete
     */
	public function getCoLembrete()
    {
        return $this->co_lembrete;
    }

	/**
	* @param $co_lembrete
     * @return mixed
     */
	public function setCoLembrete($co_lembrete)
    {
        return $this->co_lembrete = $co_lembrete;
    }

	/**
	* @return $dt_inicio
     */
	public function getDtInicio()
    {
        return $this->dt_inicio;
    }

	/**
	* @param $dt_inicio
     * @return mixed
     */
	public function setDtInicio($dt_inicio)
    {
        return $this->dt_inicio = $dt_inicio;
    }

	/**
	* @return $dt_fim
     */
	public function getDtFim()
    {
        return $this->dt_fim;
    }

	/**
	* @param $dt_fim
     * @return mixed
     */
	public function setDtFim($dt_fim)
    {
        return $this->dt_fim = $dt_fim;
    }

	/**
	* @return $st_ativo
     */
	public function getStAtivo()
    {
        return $this->st_ativo;
    }

	/**
	* @param $st_ativo
     * @return mixed
     */
	public function setStAtivo($st_ativo)
    {
        return $this->st_ativo = $st_ativo;
    }

	/**
	* @return $ds_lembrete
     */
	public function getDsLembrete()
    {
        return $this->ds_lembrete;
    }

	/**
	* @param $ds_lembrete
     * @return mixed
     */
	public function setDsLembrete($ds_lembrete)
    {
        return $this->ds_lembrete = $ds_lembrete;
    }

	/**
	* @return UsuarioEntidade $co_usuario_origem
     */
	public function getCoUsuarioOrigem()
    {
        return $this->co_usuario_origem;
    }

	/**
	* @param $co_usuario_origem
     * @return mixed
     */
	public function setCoUsuarioOrigem($co_usuario_origem)
    {
        return $this->co_usuario_origem = $co_usuario_origem;
    }

	/**
	* @return UsuarioEntidade $co_usuario_destino
     */
	public function getCoUsuarioDestino()
    {
        return $this->co_usuario_destino;
    }

	/**
	* @param $co_usuario_destino
     * @return mixed
     */
	public function setCoUsuarioDestino($co_usuario_destino)
    {
        return $this->co_usuario_destino = $co_usuario_destino;
    }

	/**
	* @return GrupoLembreteEntidade $co_grupo_lembrete
     */
	public function getCoGrupoLembrete()
    {
        return $this->co_grupo_lembrete;
    }

	/**
	* @param $co_grupo_lembrete
     * @return mixed
     */
	public function setCoGrupoLembrete($co_grupo_lembrete)
    {
        return $this->co_grupo_lembrete = $co_grupo_lembrete;
    }

}