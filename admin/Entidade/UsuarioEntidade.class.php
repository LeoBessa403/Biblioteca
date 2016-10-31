<?php

/**
 * Usuario.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */
class UsuarioEntidade
{

    private $co_usuario;
    private $ds_login;
    private $ds_senha;
    private $ds_code;
    private $st_status;
    private $dt_cadastro;
    private $co_cliente_sistema;
    private $co_imagem;

    public function __construct(array $Usuarios)
    {
        $obj = array();
        if (!empty($Usuarios)) {
            foreach ($Usuarios as $usuario) {
                if($usuario['co_usuario']){
                    $this->setCoUsuario($usuario['co_usuario']);
                }
                if($usuario['ds_login']){
                    $this->setDsLogin($usuario['ds_login']);
                }
                if($usuario['ds_senha']){
                    $this->setDsSenha($usuario['ds_senha']);
                }
                if($usuario['ds_code']){
                    $this->setDsCode($usuario['ds_code']);
                }
                if($usuario['st_status']){
                    $this->setStStatus($usuario['st_status']);
                }
                if($usuario['dt_cadastro']){
                    $this->setDtCadastro($usuario['dt_cadastro']);
                }
                $obj[$this->getCoUsuario()] = $this;
                debug($obj);
            }
            return $obj;
        }
        return $obj;
    }

    /**
     * @return mixed
     */
    public function getCoUsuario()
    {
        return $this->co_usuario;
    }

    /**
     * @param mixed $co_usuario
     */
    public function setCoUsuario($co_usuario)
    {
        $this->co_usuario = $co_usuario;
    }

    /**
     * @return mixed
     */
    public function getDsLogin()
    {
        return $this->ds_login;
    }

    /**
     * @param mixed $ds_login
     */
    public function setDsLogin($ds_login)
    {
        $this->ds_login = $ds_login;
    }

    /**
     * @return mixed
     */
    public function getDsSenha()
    {
        return $this->ds_senha;
    }

    /**
     * @param mixed $ds_senha
     */
    public function setDsSenha($ds_senha)
    {
        $this->ds_senha = $ds_senha;
    }

    /**
     * @return mixed
     */
    public function getDsCode()
    {
        return $this->ds_code;
    }

    /**
     * @param mixed $ds_code
     */
    public function setDsCode($ds_code)
    {
        $this->ds_code = $ds_code;
    }

    /**
     * @return mixed
     */
    public function getStStatus()
    {
        return $this->st_status;
    }

    /**
     * @param mixed $st_status
     */
    public function setStStatus($st_status)
    {
        $this->st_status = $st_status;
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
    public function getCoClienteSistema()
    {
        return $this->co_cliente_sistema;
    }

    /**
     * @param mixed $co_cliente_sistema
     */
    public function setCoClienteSistema($co_cliente_sistema)
    {
        $this->co_cliente_sistema = $co_cliente_sistema;
    }

    /**
     * @return mixed
     */
    public function getCoImagem()
    {
        return $this->co_imagem;
    }

    /**
     * @param mixed $co_imagem
     */
    public function setCoImagem($co_imagem)
    {
        $this->co_imagem = $co_imagem;
    }


}
