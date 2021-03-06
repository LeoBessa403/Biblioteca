<?php

/**
 * Contato.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class ContatoEntidade extends AbstractEntidade
{
    const TABELA = 'TB_CONTATO';
    const ENTIDADE = 'ContatoEntidade';
    const CHAVE = CO_CONTATO;

    private $co_contato;
    private $nu_tel1;
    private $nu_tel2;
    private $nu_tel3;
    private $nu_tel4;
    private $ds_email;
    private $ds_site;
    private $co_empresa;
    private $co_pessoa;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            CO_CONTATO,
            NU_TEL1,
            NU_TEL2,
            NU_TEL3,
            NU_TEL4,
            DS_EMAIL,
            DS_SITE,
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
     * @return $nu_tel1
     */
    public function getNuTel1()
    {
        return $this->nu_tel1;
    }

    /**
     * @param $nu_tel1
     * @return mixed
     */
    public function setNuTel1($nu_tel1)
    {
        return $this->nu_tel1 = $nu_tel1;
    }

    /**
     * @return $nu_tel2
     */
    public function getNuTel2()
    {
        return $this->nu_tel2;
    }

    /**
     * @param $nu_tel2
     * @return mixed
     */
    public function setNuTel2($nu_tel2)
    {
        return $this->nu_tel2 = $nu_tel2;
    }

    /**
     * @return $nu_tel3
     */
    public function getNuTel3()
    {
        return $this->nu_tel3;
    }

    /**
     * @param $nu_tel3
     * @return mixed
     */
    public function setNuTel3($nu_tel3)
    {
        return $this->nu_tel3 = $nu_tel3;
    }

    /**
     * @return $nu_tel4
     */
    public function getNuTel4()
    {
        return $this->nu_tel4;
    }

    /**
     * @param $nu_tel4
     * @return mixed
     */
    public function setNuTel4($nu_tel4)
    {
        return $this->nu_tel4 = $nu_tel4;
    }

    /**
     * @return $ds_email
     */
    public function getDsEmail()
    {
        return $this->ds_email;
    }

    /**
     * @param $ds_email
     * @return mixed
     */
    public function setDsEmail($ds_email)
    {
        return $this->ds_email = $ds_email;
    }

    /**
     * @return $ds_site
     */
    public function getDsSite()
    {
        return $this->ds_site;
    }

    /**
     * @param $ds_site
     * @return mixed
     */
    public function setDsSite($ds_site)
    {
        return $this->ds_site = $ds_site;
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