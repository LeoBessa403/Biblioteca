<?php

/**
 * Contato.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */

class ContatoEntidade
{
	const TABELA = 'tb_contato';
	const ENTIDADE = 'ContatoEntidade';
	const CHAVE = Constantes::CO_CONTATO;

	private $co_contato;
	private $nu_tel1;
	private $nu_tel2;
	private $nu_tel3;
	private $nu_tel4;
	private $ds_email;
	private $ds_site;


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
     * @return $nu_tel1
     */
	public function getNuTel1()
    {
        return $this->nu_tel1;
    }

	/**
     * @param mixed $nu_tel1
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
     * @param mixed $nu_tel2
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
     * @param mixed $nu_tel3
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
     * @param mixed $nu_tel4
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
     * @param mixed $ds_email
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
     * @param mixed $ds_site
     */
	public function setDsSite($ds_site)
    {
        return $this->ds_site = $ds_site;
    }

}