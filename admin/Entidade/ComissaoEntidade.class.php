<?php

/**
 * Comissao.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */

class ComissaoEntidade extends AbstractEntidade
{
	const TABELA = 'tb_comissao';
	const ENTIDADE = 'ComissaoEntidade';
	const CHAVE = CO_COMISSAO;

	private $co_comissao;
	private $nu_valor;
	private $nu_percentual;
	private $st_status;
	private $dt_cadastro;
	private $dt_ocorrencia;
	private $co_negociacao;
	private $co_usuario;
	private $co_tipo_comissao;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_COMISSAO,
			NU_VALOR,
			NU_PERCENTUAL,
			ST_STATUS,
			DT_CADASTRO,
			DT_OCORRENCIA,
			CO_NEGOCIACAO,
			CO_USUARIO,
			CO_TIPO_COMISSAO,
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
	* @return $co_comissao
     */
	public function getCoComissao()
    {
        return $this->co_comissao;
    }

	/**
	* @param $co_comissao
     * @return mixed
     */
	public function setCoComissao($co_comissao)
    {
        return $this->co_comissao = $co_comissao;
    }

	/**
	* @return $nu_valor
     */
	public function getNuValor()
    {
        return $this->nu_valor;
    }

	/**
	* @param $nu_valor
     * @return mixed
     */
	public function setNuValor($nu_valor)
    {
        return $this->nu_valor = $nu_valor;
    }

	/**
	* @return $nu_percentual
     */
	public function getNuPercentual()
    {
        return $this->nu_percentual;
    }

	/**
	* @param $nu_percentual
     * @return mixed
     */
	public function setNuPercentual($nu_percentual)
    {
        return $this->nu_percentual = $nu_percentual;
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
	* @return $dt_ocorrencia
     */
	public function getDtOcorrencia()
    {
        return $this->dt_ocorrencia;
    }

	/**
	* @param $dt_ocorrencia
     * @return mixed
     */
	public function setDtOcorrencia($dt_ocorrencia)
    {
        return $this->dt_ocorrencia = $dt_ocorrencia;
    }

	/**
	* @return NegociacaoEntidade $co_negociacao
     */
	public function getCoNegociacao()
    {
        return $this->co_negociacao;
    }

	/**
	* @param $co_negociacao
     * @return mixed
     */
	public function setCoNegociacao($co_negociacao)
    {
        return $this->co_negociacao = $co_negociacao;
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
	* @return TipoComissaoEntidade $co_tipo_comissao
     */
	public function getCoTipoComissao()
    {
        return $this->co_tipo_comissao;
    }

	/**
	* @param $co_tipo_comissao
     * @return mixed
     */
	public function setCoTipoComissao($co_tipo_comissao)
    {
        return $this->co_tipo_comissao = $co_tipo_comissao;
    }

}