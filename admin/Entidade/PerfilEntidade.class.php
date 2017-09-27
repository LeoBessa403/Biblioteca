<?php

/**
 * Perfil.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */

class PerfilEntidade extends AbstractEntidade
{
	const TABELA = 'tb_perfil';
	const ENTIDADE = 'PerfilEntidade';
	const CHAVE = CO_PERFIL;

	private $co_perfil;
	private $no_perfil;
	private $st_status;
	private $co_consumidor;
	private $co_perfil_funcionalidade;
	private $co_perfil_produto_detalhe;
	private $co_usuario_perfil;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_PERFIL,
			NO_PERFIL,
			ST_STATUS,
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
	* @return $co_perfil
     */
	public function getCoPerfil()
    {
        return $this->co_perfil;
    }

	/**
	* @param $co_perfil
     * @return mixed
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
	* @param $no_perfil
     * @return mixed
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
	* @return PerfilFuncionalidadeEntidade $co_perfil_funcionalidade
     */
	public function getCoPerfilFuncionalidade()
    {
        return $this->co_perfil_funcionalidade;
    }

	/**
     * @param $co_perfil_funcionalidade
     * @return mixed
     */
	public function setCoPerfilFuncionalidade($co_perfil_funcionalidade)
    {
        return $this->co_perfil_funcionalidade = $co_perfil_funcionalidade;
    }

	/**
	* @return PerfilProdutoDetalheEntidade $co_perfil_produto_detalhe
     */
	public function getCoPerfilProdutoDetalhe()
    {
        return $this->co_perfil_produto_detalhe;
    }

	/**
     * @param $co_perfil_produto_detalhe
     * @return mixed
     */
	public function setCoPerfilProdutoDetalhe($co_perfil_produto_detalhe)
    {
        return $this->co_perfil_produto_detalhe = $co_perfil_produto_detalhe;
    }

	/**
	* @return UsuarioPerfilEntidade $co_usuario_perfil
     */
	public function getCoUsuarioPerfil()
    {
        return $this->co_usuario_perfil;
    }

	/**
     * @param $co_usuario_perfil
     * @return mixed
     */
	public function setCoUsuarioPerfil($co_usuario_perfil)
    {
        return $this->co_usuario_perfil = $co_usuario_perfil;
    }

}