<?php

/**
 * Usuario.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class UsuarioEntidade extends AbstractEntidade
{
    const TABELA = 'tb_usuario';
    const ENTIDADE = 'UsuarioEntidade';
    const CHAVE = Constantes::CO_USUARIO;

    private $co_usuario;
    private $ds_login;
    private $ds_senha;
    private $ds_code;
    private $st_status;
    private $dt_cadastro;
    private $co_consumidor;
    private $co_imagem;
    private $co_pessoa;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_USUARIO,
            Constantes::DS_LOGIN,
            Constantes::DS_SENHA,
            Constantes::DS_CODE,
            Constantes::ST_STATUS,
            Constantes::DT_CADASTRO,
            Constantes::CO_CONSUMIDOR,
            Constantes::CO_IMAGEM,
            Constantes::CO_PESSOA,
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
     * @return $co_usuario
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
     * @return $ds_login
     */
    public function getDsLogin()
    {
        return $this->ds_login;
    }

    /**
     * @param $ds_login
     * @return mixed
     */
    public function setDsLogin($ds_login)
    {
        return $this->ds_login = $ds_login;
    }

    /**
     * @return $ds_senha
     */
    public function getDsSenha()
    {
        return $this->ds_senha;
    }

    /**
     * @param $ds_senha
     * @return mixed
     */
    public function setDsSenha($ds_senha)
    {
        return $this->ds_senha = $ds_senha;
    }

    /**
     * @return $ds_code
     */
    public function getDsCode()
    {
        return $this->ds_code;
    }

    /**
     * @param $ds_code
     * @return mixed
     */
    public function setDsCode($ds_code)
    {
        return $this->ds_code = $ds_code;
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
     * @return $co_consumidor
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

}