<?php

/**
 * Categoria.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class CategoriaEntidade extends AbstractEntidade
{
    const TABELA = 'tb_categoria';
    const ENTIDADE = 'CategoriaEntidade';
    const CHAVE = Constantes::CO_CATEGORIA;

    private $co_categoria;
    private $no_categoria;
    private $nu_lucro;
    private $st_status;
    private $co_sessao;
    private $co_consumidor;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_CATEGORIA,
            Constantes::NO_CATEGORIA,
            Constantes::NU_LUCRO,
            Constantes::ST_STATUS,
            Constantes::CO_SESSAO,
            Constantes::CO_CONSUMIDOR,
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
     * @return $co_categoria
     */
    public function getCoCategoria()
    {
        return $this->co_categoria;
    }

    /**
     * @param $co_categoria
     * @return mixed
     */
    public function setCoCategoria($co_categoria)
    {
        return $this->co_categoria = $co_categoria;
    }

    /**
     * @return $no_categoria
     */
    public function getNoCategoria()
    {
        return $this->no_categoria;
    }

    /**
     * @param $no_categoria
     * @return mixed
     */
    public function setNoCategoria($no_categoria)
    {
        return $this->no_categoria = $no_categoria;
    }

    /**
     * @return $nu_lucro
     */
    public function getNuLucro()
    {
        return $this->nu_lucro;
    }

    /**
     * @param $nu_lucro
     * @return mixed
     */
    public function setNuLucro($nu_lucro)
    {
        return $this->nu_lucro = $nu_lucro;
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
     * @return $co_sessao
     */
    public function getCoSessao()
    {
        return $this->co_sessao;
    }

    /**
     * @param $co_sessao
     * @return mixed
     */
    public function setCoSessao($co_sessao)
    {
        return $this->co_sessao = $co_sessao;
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

}