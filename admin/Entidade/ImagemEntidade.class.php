<?php

/**
 * Imagem.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class ImagemEntidade extends AbstractEntidade
{
    const TABELA = 'tb_imagem';
    const ENTIDADE = 'ImagemEntidade';
    const CHAVE = CO_IMAGEM;

    private $co_imagem;
    private $ds_caminho;
    private $co_empresa;
    private $co_funcionario;
    private $co_pessoa;
    private $co_produto;
    private $co_sugestao;
    private $co_usuario;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            CO_IMAGEM,
            DS_CAMINHO,
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
     * @return $ds_caminho
     */
    public function getDsCaminho()
    {
        return $this->ds_caminho;
    }

    /**
     * @param $ds_caminho
     * @return mixed
     */
    public function setDsCaminho($ds_caminho)
    {
        return $this->ds_caminho = $ds_caminho;
    }

    /**
     * @return $co_empresa
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
     * @return $co_funcionario
     */
    public function getCoFuncionario()
    {
        return $this->co_funcionario;
    }

    /**
     * @param $co_funcionario
     * @return mixed
     */
    public function setCoFuncionario($co_funcionario)
    {
        return $this->co_funcionario = $co_funcionario;
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
     * @return $co_produto
     */
    public function getCoProduto()
    {
        return $this->co_produto;
    }

    /**
     * @param $co_produto
     * @return mixed
     */
    public function setCoProduto($co_produto)
    {
        return $this->co_produto = $co_produto;
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

}