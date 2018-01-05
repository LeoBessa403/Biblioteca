<?php

/**
 * LocalidadeConsumidor.Entidade [ ENTIDADE ]
 * @copyright (c) 2018, Leo Bessa
 */

class LocalidadeConsumidorEntidade extends AbstractEntidade
{
    const TABELA = 'TB_LOCALIDADE_CONSUMIDOR';
    const ENTIDADE = 'LocalidadeConsumidorEntidade';
    const CHAVE = CO_LOCALIDADE_CONSUMIDOR;

    private $co_localidade_consumidor;
    private $st_ativo;
    private $co_localidade;
    private $co_consumidor;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            CO_LOCALIDADE_CONSUMIDOR,
            ST_ATIVO,
            CO_LOCALIDADE,
            CO_CONSUMIDOR,
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
     * @return $co_localidade_consumidor
     */
    public function getCoLocalidadeConsumidor()
    {
        return $this->co_localidade_consumidor;
    }

    /**
     * @param $co_localidade_consumidor
     * @return mixed
     */
    public function setCoLocalidadeConsumidor($co_localidade_consumidor)
    {
        return $this->co_localidade_consumidor = $co_localidade_consumidor;
    }

    /**
     * @return $st_ativo
     */
    public function getStAtivo()
    {
        return $this->st_ativo;
    }

    /**
     * @param $st_ativo
     * @return mixed
     */
    public function setStAtivo($st_ativo)
    {
        return $this->st_ativo = $st_ativo;
    }

    /**
     * @return LocalidadeEntidade $co_localidade
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
     * @return ConsumidorEntidade $co_consumidor
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