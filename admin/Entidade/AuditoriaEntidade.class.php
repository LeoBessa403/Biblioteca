<?php

/**
 * Auditoria.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class AuditoriaEntidade extends AbstractEntidade
{
	const TABELA = 'tb_auditoria';
	const ENTIDADE = 'AuditoriaEntidade';
	const CHAVE = CO_AUDITORIA;

	private $co_auditoria;
	private $no_tabela;
	private $dt_realizado;
	private $no_operacao;
	private $ds_item_anterior;
	private $ds_item_atual;
	private $co_registro;
	private $ds_perfil_usuario;
	private $co_usuario;
	private $co_consumidor;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_AUDITORIA,
			NO_TABELA,
			DT_REALIZADO,
			NO_OPERACAO,
			DS_ITEM_ANTERIOR,
			DS_ITEM_ATUAL,
			CO_REGISTRO,
			DS_PERFIL_USUARIO,
			CO_USUARIO,
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
	* @return $co_auditoria
     */
	public function getCoAuditoria()
    {
        return $this->co_auditoria;
    }

	/**
	* @param $co_auditoria
     * @return mixed
     */
	public function setCoAuditoria($co_auditoria)
    {
        return $this->co_auditoria = $co_auditoria;
    }

	/**
	* @return $no_tabela
     */
	public function getNoTabela()
    {
        return $this->no_tabela;
    }

	/**
	* @param $no_tabela
     * @return mixed
     */
	public function setNoTabela($no_tabela)
    {
        return $this->no_tabela = $no_tabela;
    }

	/**
	* @return $dt_realizado
     */
	public function getDtRealizado()
    {
        return $this->dt_realizado;
    }

	/**
	* @param $dt_realizado
     * @return mixed
     */
	public function setDtRealizado($dt_realizado)
    {
        return $this->dt_realizado = $dt_realizado;
    }

	/**
	* @return $no_operacao
     */
	public function getNoOperacao()
    {
        return $this->no_operacao;
    }

	/**
	* @param $no_operacao
     * @return mixed
     */
	public function setNoOperacao($no_operacao)
    {
        return $this->no_operacao = $no_operacao;
    }

	/**
	* @return $ds_item_anterior
     */
	public function getDsItemAnterior()
    {
        return $this->ds_item_anterior;
    }

	/**
	* @param $ds_item_anterior
     * @return mixed
     */
	public function setDsItemAnterior($ds_item_anterior)
    {
        return $this->ds_item_anterior = $ds_item_anterior;
    }

	/**
	* @return $ds_item_atual
     */
	public function getDsItemAtual()
    {
        return $this->ds_item_atual;
    }

	/**
	* @param $ds_item_atual
     * @return mixed
     */
	public function setDsItemAtual($ds_item_atual)
    {
        return $this->ds_item_atual = $ds_item_atual;
    }

	/**
	* @return RegistroEntidade $co_registro
     */
	public function getCoRegistro()
    {
        return $this->co_registro;
    }

	/**
	* @param $co_registro
     * @return mixed
     */
	public function setCoRegistro($co_registro)
    {
        return $this->co_registro = $co_registro;
    }

	/**
	* @return $ds_perfil_usuario
     */
	public function getDsPerfilUsuario()
    {
        return $this->ds_perfil_usuario;
    }

	/**
	* @param $ds_perfil_usuario
     * @return mixed
     */
	public function setDsPerfilUsuario($ds_perfil_usuario)
    {
        return $this->ds_perfil_usuario = $ds_perfil_usuario;
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