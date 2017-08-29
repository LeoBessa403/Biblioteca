<?php

/**
 * Ajuda.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class AjudaEntidade extends AbstractEntidade
{
    const TABELA = 'tb_ajuda';
    const ENTIDADE = 'AjudaEntidade';
    const CHAVE = Constantes::CO_AJUDA;

    private $co_ajuda;
    private $ds_ajuda;
    private $co_funcionalidade;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_AJUDA,
            Constantes::DS_AJUDA,
            Constantes::CO_FUNCIONALIDADE,
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
     * @return $co_ajuda
     */
    public function getCoAjuda()
    {
        return $this->co_ajuda;
    }

    /**
     * @param $co_ajuda
     * @return mixed
     */
    public function setCoAjuda($co_ajuda)
    {
        return $this->co_ajuda = $co_ajuda;
    }

    /**
     * @return $ds_ajuda
     */
    public function getDsAjuda()
    {
        return $this->ds_ajuda;
    }

    /**
     * @param $ds_ajuda
     * @return mixed
     */
    public function setDsAjuda($ds_ajuda)
    {
        return $this->ds_ajuda = $ds_ajuda;
    }

    /**
     * @return $co_funcionalidade
     */
    public function getCoFuncionalidade()
    {
        return $this->co_funcionalidade;
    }

    /**
     * @param $co_funcionalidade
     * @return mixed
     */
    public function setCoFuncionalidade($co_funcionalidade)
    {
        return $this->co_funcionalidade = $co_funcionalidade;
    }

}