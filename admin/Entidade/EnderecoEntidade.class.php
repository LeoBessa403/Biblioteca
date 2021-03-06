<?php

/**
 * Endereco.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class EnderecoEntidade extends AbstractEntidade
{
	const TABELA = 'TB_ENDERECO';
	const ENTIDADE = 'EnderecoEntidade';
	const CHAVE = CO_ENDERECO;

	private $co_endereco;
	private $ds_endereco;
	private $ds_complemento;
	private $ds_bairro;
	private $nu_cep;
	private $no_cidade;
	private $sg_uf;
	private $co_empresa;
	private $co_pessoa;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_ENDERECO,
			DS_ENDERECO,
			DS_COMPLEMENTO,
			DS_BAIRRO,
			NU_CEP,
			NO_CIDADE,
			SG_UF,
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
	* @return $co_endereco
     */
	public function getCoEndereco()
    {
        return $this->co_endereco;
    }

	/**
	* @param $co_endereco
     * @return mixed
     */
	public function setCoEndereco($co_endereco)
    {
        return $this->co_endereco = $co_endereco;
    }

	/**
	* @return $ds_endereco
     */
	public function getDsEndereco()
    {
        return $this->ds_endereco;
    }

	/**
	* @param $ds_endereco
     * @return mixed
     */
	public function setDsEndereco($ds_endereco)
    {
        return $this->ds_endereco = $ds_endereco;
    }

	/**
	* @return $ds_complemento
     */
	public function getDsComplemento()
    {
        return $this->ds_complemento;
    }

	/**
	* @param $ds_complemento
     * @return mixed
     */
	public function setDsComplemento($ds_complemento)
    {
        return $this->ds_complemento = $ds_complemento;
    }

	/**
	* @return $ds_bairro
     */
	public function getDsBairro()
    {
        return $this->ds_bairro;
    }

	/**
	* @param $ds_bairro
     * @return mixed
     */
	public function setDsBairro($ds_bairro)
    {
        return $this->ds_bairro = $ds_bairro;
    }

	/**
	* @return $nu_cep
     */
	public function getNuCep()
    {
        return $this->nu_cep;
    }

	/**
	* @param $nu_cep
     * @return mixed
     */
	public function setNuCep($nu_cep)
    {
        return $this->nu_cep = $nu_cep;
    }

	/**
	* @return $no_cidade
     */
	public function getNoCidade()
    {
        return $this->no_cidade;
    }

	/**
	* @param $no_cidade
     * @return mixed
     */
	public function setNoCidade($no_cidade)
    {
        return $this->no_cidade = $no_cidade;
    }

	/**
	* @return $sg_uf
     */
	public function getSgUf()
    {
        return $this->sg_uf;
    }

	/**
	* @param $sg_uf
     * @return mixed
     */
	public function setSgUf($sg_uf)
    {
        return $this->sg_uf = $sg_uf;
    }

	/**
	* @return EmpresaEntidade $co_empresa
     */
	public function getCoEmpresa()
    {
        return $this->co_empresa;
    }

	/**
     * @param $co_empresa
     * @return mixed
     */
	public function setCoEmpresa($co_empresa)
    {
        return $this->co_empresa = $co_empresa;
    }

	/**
	* @return PessoaEntidade $co_pessoa
     */
	public function getCoPessoa()
    {
        return $this->co_pessoa;
    }

	/**
     * @param $co_pessoa
     * @return mixed
     */
	public function setCoPessoa($co_pessoa)
    {
        return $this->co_pessoa = $co_pessoa;
    }

}