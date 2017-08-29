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
    private $co_acesso;
    private $co_auditoria;
    private $co_caixa;
    private $co_comissao;
    private $co_negociacao;
    private $co_ordem_servico;
    private $co_produto_detalhe;
    private $co_produto_promocao;
    private $co_sugestao;
    private $co_usuario_perfil;


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

    /**
     * @return $co_acesso
     */
    public function getCoAcesso()
    {
        return $this->co_acesso;
    }

    /**
     * @param $co_acesso
     * @return mixed
     */
    public function setCoAcesso($co_acesso)
    {
        return $this->co_acesso = $co_acesso;
    }

    /**
     * @return $co_auditoria
     */
    public function getCoAuditoria()
    {
        return $this->co_auditoria;
    }

    /**
     * @param $co_auditoria
     * @return mixed
     */
    public function setCoAuditoria($co_auditoria)
    {
        return $this->co_auditoria = $co_auditoria;
    }

    /**
     * @return $co_caixa
     */
    public function getCoCaixa()
    {
        return $this->co_caixa;
    }

    /**
     * @param $co_caixa
     * @return mixed
     */
    public function setCoCaixa($co_caixa)
    {
        return $this->co_caixa = $co_caixa;
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
     * @return $co_negociacao
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
     * @return $co_ordem_servico
     */
    public function getCoOrdemServico()
    {
        return $this->co_ordem_servico;
    }

    /**
     * @param $co_ordem_servico
     * @return mixed
     */
    public function setCoOrdemServico($co_ordem_servico)
    {
        return $this->co_ordem_servico = $co_ordem_servico;
    }

    /**
     * @return $co_produto_detalhe
     */
    public function getCoProdutoDetalhe()
    {
        return $this->co_produto_detalhe;
    }

    /**
     * @param $co_produto_detalhe
     * @return mixed
     */
    public function setCoProdutoDetalhe($co_produto_detalhe)
    {
        return $this->co_produto_detalhe = $co_produto_detalhe;
    }

    /**
     * @return $co_produto_promocao
     */
    public function getCoProdutoPromocao()
    {
        return $this->co_produto_promocao;
    }

    /**
     * @param $co_produto_promocao
     * @return mixed
     */
    public function setCoProdutoPromocao($co_produto_promocao)
    {
        return $this->co_produto_promocao = $co_produto_promocao;
    }

    /**
     * @return $co_sugestao
     */
    public function getCoSugestao()
    {
        return $this->co_sugestao;
    }

    /**
     * @param $co_sugestao
     * @return mixed
     */
    public function setCoSugestao($co_sugestao)
    {
        return $this->co_sugestao = $co_sugestao;
    }

    /**
     * @return $co_usuario_perfil
     */
    public function getCoUsuarioPerfil()
    {
        return $this->co_usuario_perfil;
    }

    /**
     * @param $co_usuario_perfil
     * @return mixed
     */
    public function setCoUsuarioPerfil($co_usuario_perfil)
    {
        return $this->co_usuario_perfil = $co_usuario_perfil;
    }

}