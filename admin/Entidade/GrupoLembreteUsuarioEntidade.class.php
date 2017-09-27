<?php

/**
 * GrupoLembreteUsuario.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */

class GrupoLembreteUsuarioEntidade extends AbstractEntidade
{
	const TABELA = 'tb_grupo_lembrete_usuario';
	const ENTIDADE = 'GrupoLembreteUsuarioEntidade';
	const CHAVE = CO_GRUPO_LEMBRETE_USUARIO;

	private $co_grupo_lembrete_usuario;
	private $co_usuario_destino;
	private $co_grupo_lembrete;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_GRUPO_LEMBRETE_USUARIO,
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
	* @return $co_grupo_lembrete_usuario
     */
	public function getCoGrupoLembreteUsuario()
    {
        return $this->co_grupo_lembrete_usuario;
    }

	/**
	* @param $co_grupo_lembrete_usuario
     * @return mixed
     */
	public function setCoGrupoLembreteUsuario($co_grupo_lembrete_usuario)
    {
        return $this->co_grupo_lembrete_usuario = $co_grupo_lembrete_usuario;
    }

	/**
	* @return UsuarioDestinoEntidade $co_usuario_destino
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