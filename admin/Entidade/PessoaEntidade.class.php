<?php

/**
 * Pessoa.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class PessoaEntidade extends AbstractEntidade
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
    private $co_imagem;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
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
            Constantes::CO_IMAGEM,
        ];
    }

    /**
     * @return $relacionamentos
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = Relacionamentos::getRelacionamentos();
        return $relacionamentos[static::TABELA];
    }


    /**
     * @return $co_pessoa
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

    /**
     * @return $nu_cpf
     */
    public function getNuCpf()
    {
        return $this->nu_cpf;
    }

    /**
     * @param $nu_cpf
     * @return mixed
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
     * @param $no_pessoa
     * @return mixed
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
     * @param $nu_rg
     * @return mixed
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
     * @param $dt_cadastro
     * @return mixed
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
     * @param $dt_nascimento
     * @return mixed
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
     * @param $st_sexo
     * @return mixed
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
     * @param $st_estado_civil
     * @return mixed
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
     * @param $co_endereco
     * @return mixed
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
     * @param $co_contato
     * @return mixed
     */
    public function setCoContato($co_contato)
    {
        return $this->co_contato = $co_contato;
    }

    /**
     * @return $co_imagem
     */
    public function getCoImagem()
    {
        return $this->co_imagem;
    }

    /**
     * @param $co_imagem
     * @return mixed
     */
    public function setCoImagem($co_imagem)
    {
        return $this->co_imagem = $co_imagem;
    }

}