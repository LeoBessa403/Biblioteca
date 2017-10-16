<?php

/**
 * Chat.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */

class ChatEntidade extends AbstractEntidade
{
	const TABELA = 'tb_chat';
	const ENTIDADE = 'ChatEntidade';
	const CHAVE = CO_CHAT;

	private $co_chat;
	private $ds_mensagem;
	private $dt_cadastro;
	private $st_lido;
	private $co_usuario_origem;
	private $co_usuario_destino;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_CHAT,
			DS_MENSAGEM,
			DT_CADASTRO,
			ST_LIDO,
			CO_USUARIO_ORIGEM,
			CO_USUARIO_DESTINO,
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
	* @return $co_chat
     */
	public function getCoChat()
    {
        return $this->co_chat;
    }

	/**
	* @param $co_chat
     * @return mixed
     */
	public function setCoChat($co_chat)
    {
        return $this->co_chat = $co_chat;
    }

	/**
	* @return $ds_mensagem
     */
	public function getDsMensagem()
    {
        return $this->ds_mensagem;
    }

	/**
	* @param $ds_mensagem
     * @return mixed
     */
	public function setDsMensagem($ds_mensagem)
    {
        return $this->ds_mensagem = $ds_mensagem;
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
	* @return $st_lido
     */
	public function getStLido()
    {
        return $this->st_lido;
    }

	/**
	* @param $st_lido
     * @return mixed
     */
	public function setStLido($st_lido)
    {
        return $this->st_lido = $st_lido;
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

}