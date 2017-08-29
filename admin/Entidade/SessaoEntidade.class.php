<?php

/**
 * Sessao.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class SessaoEntidade extends AbstractEntidade
{
    const TABELA = 'tb_sessao';
    const ENTIDADE = 'SessaoEntidade';
    const CHAVE = Constantes::CO_SESSAO;

    private $co_sessao;
    private $ds_sessao;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_SESSAO,
            Constantes::DS_SESSAO,
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
     * @return $ds_sessao
     */
    public function getDsSessao()
    {
        return $this->ds_sessao;
    }

    /**
     * @param $ds_sessao
     * @return mixed
     */
    public function setDsSessao($ds_sessao)
    {
        return $this->ds_sessao = $ds_sessao;
    }

}