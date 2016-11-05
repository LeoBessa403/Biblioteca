<?php

/**
 * Endereco.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */
class EnderecoEntidade
{
    const TABELA = "tb_endereco";
    const ENTIDADE = "EnderecoEntidade";
    const CHAVE = Constantes::CO_ENDERECO;

    private $co_endereco;
    private $ds_endereco;
    private $ds_complemento;
    private $ds_bairro;
    private $nu_cep;
    private $no_cidade;
    private $sg_uf;

    /**
     * @return mixed
     */
    public static function getCampos()
    {
        $campos = [
            Constantes::CO_ENDERECO,
            Constantes::DS_ENDERECO,
            Constantes::DS_COMPLEMENTO,
            Constantes::DS_BAIRRO,
            Constantes::NU_CEP,
            Constantes::NO_CIDADE,
            Constantes::SG_UF
        ];
        return $campos;
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

    /**
     * @return mixed
     */
    public function getDsEndereco()
    {
        return $this->ds_endereco;
    }

    /**
     * @param mixed $ds_endereco
     */
    public function setDsEndereco($ds_endereco)
    {
        $this->ds_endereco = $ds_endereco;
    }

    /**
     * @return mixed
     */
    public function getDsComplemento()
    {
        return $this->ds_complemento;
    }

    /**
     * @param mixed $ds_complemento
     */
    public function setDsComplemento($ds_complemento)
    {
        $this->ds_complemento = $ds_complemento;
    }

    /**
     * @return mixed
     */
    public function getDsBairro()
    {
        return $this->ds_bairro;
    }

    /**
     * @param mixed $ds_bairro
     */
    public function setDsBairro($ds_bairro)
    {
        $this->ds_bairro = $ds_bairro;
    }

    /**
     * @return mixed
     */
    public function getNuCep()
    {
        return $this->nu_cep;
    }

    /**
     * @param mixed $nu_cep
     */
    public function setNuCep($nu_cep)
    {
        $this->nu_cep = $nu_cep;
    }

    /**
     * @return mixed
     */
    public function getNoCidade()
    {
        return $this->no_cidade;
    }

    /**
     * @param mixed $no_cidade
     */
    public function setNoCidade($no_cidade)
    {
        $this->no_cidade = $no_cidade;
    }

    /**
     * @return mixed
     */
    public function getSgUf()
    {
        return $this->sg_uf;
    }

    /**
     * @param mixed $sg_uf
     */
    public function setSgUf($sg_uf)
    {
        $this->sg_uf = $sg_uf;
    }

    

}
