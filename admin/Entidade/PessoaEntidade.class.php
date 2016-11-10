<?php

/**
 * Pessoa.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class PessoaEntidade
{
	const TABELA = 'tb_pessoa';
	const ENTIDADE = 'PessoaEntidade';
	const CHAVE = Constantes::CO_PESSOA;

	private $co_pessoa;
	private $nu_cpf;
	private $no_pessoa;
	private $nu_rg;
	private $dt_cadastro;
	private $dt_nascimento;
	private $st_sexo;
	private $st_estado_civil;
	private $co_endereco;
	private $co_contato;
    private $co_funcionario;


	/**
     * @return $campos
     */
	public static function getCampos() {
    	$campos = [
			Constantes::CO_PESSOA,
			Constantes::NU_CPF,
			Constantes::NO_PESSOA,
			Constantes::NU_RG,
			Constantes::DT_CADASTRO,
			Constantes::DT_NASCIMENTO,
			Constantes::ST_SEXO,
			Constantes::ST_ESTADO_CIVIL,
			Constantes::CO_ENDERECO,
			Constantes::CO_CONTATO,
		];
    	return $campos;
    }

	/**
     * @return $relacionamentos
     */
	public static function getRelacionamentos() {
    	$relacionamentos = [
			Constantes::CO_ENDERECO => array(
                'Entidade' => EnderecoEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
			Constantes::CO_CONTATO => array(
                'Entidade' => ContatoEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
            Constantes::CO_FUNCIONARIO => array(
                'Entidade' => FuncionarioEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
		];
    	return $relacionamentos;
    }


	/**
     * @return $co_pessoa
     */
	public function getCoPessoa()
    {
        return $this->co_pessoa;
    }

	/**
     * @param mixed $co_pessoa
     */
	public function setCoPessoa($co_pessoa)
    {
        return $this->co_pessoa = $co_pessoa;
    }

	/**
     * @return $nu_cpf
     */
	public function getNuCpf()
    {
        return $this->nu_cpf;
    }

	/**
     * @param mixed $nu_cpf
     */
	public function setNuCpf($nu_cpf)
    {
        return $this->nu_cpf = $nu_cpf;
    }

	/**
     * @return $no_pessoa
     */
	public function getNoPessoa()
    {
        return $this->no_pessoa;
    }

	/**
     * @param mixed $no_pessoa
     */
	public function setNoPessoa($no_pessoa)
    {
        return $this->no_pessoa = $no_pessoa;
    }

	/**
     * @return $nu_rg
     */
	public function getNuRg()
    {
        return $this->nu_rg;
    }

	/**
     * @param mixed $nu_rg
     */
	public function setNuRg($nu_rg)
    {
        return $this->nu_rg = $nu_rg;
    }

	/**
     * @return $dt_cadastro
     */
	public function getDtCadastro()
    {
        return $this->dt_cadastro;
    }

	/**
     * @param mixed $dt_cadastro
     */
	public function setDtCadastro($dt_cadastro)
    {
        return $this->dt_cadastro = $dt_cadastro;
    }

	/**
     * @return $dt_nascimento
     */
	public function getDtNascimento()
    {
        return $this->dt_nascimento;
    }

	/**
     * @param mixed $dt_nascimento
     */
	public function setDtNascimento($dt_nascimento)
    {
        return $this->dt_nascimento = $dt_nascimento;
    }

	/**
     * @return $st_sexo
     */
	public function getStSexo()
    {
        return $this->st_sexo;
    }

	/**
     * @param mixed $st_sexo
     */
	public function setStSexo($st_sexo)
    {
        return $this->st_sexo = $st_sexo;
    }

	/**
     * @return $st_estado_civil
     */
	public function getStEstadoCivil()
    {
        return $this->st_estado_civil;
    }

	/**
     * @param mixed $st_estado_civil
     */
	public function setStEstadoCivil($st_estado_civil)
    {
        return $this->st_estado_civil = $st_estado_civil;
    }

	/**
     * @return $co_endereco
     */
	public function getCoEndereco()
    {
        return $this->co_endereco;
    }

	/**
     * @param mixed $co_endereco
     */
	public function setCoEndereco($co_endereco)
    {
        return $this->co_endereco = $co_endereco;
    }

	/**
     * @return $co_contato
     */
	public function getCoContato()
    {
        return $this->co_contato;
    }

	/**
     * @param mixed $co_contato
     */
	public function setCoContato($co_contato)
    {
        return $this->co_contato = $co_contato;
    }

    /**
     * @return mixed
     */
    public function getCoFuncionario()
    {
        return $this->co_funcionario;
    }

    /**
     * @param mixed $co_funcionario
     */
    public function setCoFuncionario($co_funcionario)
    {
        $this->co_funcionario = $co_funcionario;
    }

}