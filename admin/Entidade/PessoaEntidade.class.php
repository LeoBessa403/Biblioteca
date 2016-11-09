<?php

/**
 * Pessoa.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */
class PessoaEntidade
{
    const TABELA = "tb_pessoa";
    const ENTIDADE = "PessoaEntidade";
    const CHAVE = Constantes::CO_PESSOA;

    private $co_pessoa;
    private $nu_cpf;
    private $no_pessoa;
    private $nu_rg;
    private $dt_nascimento;
    private $dt_cadastro;
    private $st_sexo;
    private $st_estado_civil;
    private $co_contato;
    private $co_endereco;

    /**
     * @return mixed
     */
    public static function getCampos()
    {
        $campos = [
            Constantes::CO_PESSOA,
            Constantes::NO_PESSOA,
            Constantes::NU_CPF,
            Constantes::NU_RG,
            Constantes::DT_NASCIMENTO,
            Constantes::ST_SEXO,
            Constantes::DT_CADASTRO,
            Constantes::ST_ESTADO_CIVIL,
            Constantes::CO_CONTATO,
            Constantes::CO_ENDERECO
        ];
        return $campos;
    }

    /**
     * @return mixed
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = [
            Constantes::CO_CONTATO => array(
                'Entidade' => ContatoEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
            Constantes::CO_ENDERECO => array(
                'Entidade' => EnderecoEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
            Constantes::CO_USUARIO => array(
                'Entidade' => UsuarioEntidade::ENTIDADE,
                'Tipo' => 1,
            )
        ];
        return $relacionamentos;
    }

    /**
     * @return mixed
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
        $this->co_pessoa = $co_pessoa;
    }

    /**
     * @return mixed
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
        $this->nu_cpf = $nu_cpf;
    }

    /**
     * @return mixed
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
        $this->no_pessoa = $no_pessoa;
    }

    /**
     * @return mixed
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
        $this->nu_rg = $nu_rg;
    }

    /**
     * @return mixed
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
        $this->dt_nascimento = $dt_nascimento;
    }

    /**
     * @return mixed
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
        $this->dt_cadastro = $dt_cadastro;
    }

    /**
     * @return mixed
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
        $this->st_sexo = $st_sexo;
    }

    /**
     * @return mixed
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
        $this->st_estado_civil = $st_estado_civil;
    }

    /**
     * @return mixed
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
        $this->co_contato = $co_contato;
    }

    /**
     * @return mixed
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
        $this->co_endereco = $co_endereco;
    }
}
