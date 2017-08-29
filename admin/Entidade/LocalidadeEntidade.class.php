<?php

/**
 * Localidade.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class LocalidadeEntidade extends AbstractEntidade
{
    const TABELA = 'tb_localidade';
    const ENTIDADE = 'LocalidadeEntidade';
    const CHAVE = Constantes::CO_LOCALIDADE;

    private $co_localidade;
    private $ds_localidade;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_LOCALIDADE,
            Constantes::DS_LOCALIDADE,
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
     * @return $co_localidade
     */
    public function getCoLocalidade()
    {
        return $this->co_localidade;
    }

    /**
     * @param $co_localidade
     * @return mixed
     */
    public function setCoLocalidade($co_localidade)
    {
        return $this->co_localidade = $co_localidade;
    }

    /**
     * @return $ds_localidade
     */
    public function getDsLocalidade()
    {
        return $this->ds_localidade;
    }

    /**
     * @param $ds_localidade
     * @return mixed
     */
    public function setDsLocalidade($ds_localidade)
    {
        return $this->ds_localidade = $ds_localidade;
    }

}