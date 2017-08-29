<?php

/**
 * SitEntregPed.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class SitEntregPedEntidade extends AbstractEntidade
{
    const TABELA = 'tb_sit_entreg_ped';
    const ENTIDADE = 'SitEntregPedEntidade';
    const CHAVE = Constantes::CO_SIT_ENTREG_PED;

    private $co_sit_entreg_ped;
    private $no_sit_entreg_ped;
    private $sg_sit_entreg_ped;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_SIT_ENTREG_PED,
            Constantes::NO_SIT_ENTREG_PED,
            Constantes::SG_SIT_ENTREG_PED,
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
     * @return $co_sit_entreg_ped
     */
    public function getCoSitEntregPed()
    {
        return $this->co_sit_entreg_ped;
    }

    /**
     * @param $co_sit_entreg_ped
     * @return mixed
     */
    public function setCoSitEntregPed($co_sit_entreg_ped)
    {
        return $this->co_sit_entreg_ped = $co_sit_entreg_ped;
    }

    /**
     * @return $no_sit_entreg_ped
     */
    public function getNoSitEntregPed()
    {
        return $this->no_sit_entreg_ped;
    }

    /**
     * @param $no_sit_entreg_ped
     * @return mixed
     */
    public function setNoSitEntregPed($no_sit_entreg_ped)
    {
        return $this->no_sit_entreg_ped = $no_sit_entreg_ped;
    }

    /**
     * @return $sg_sit_entreg_ped
     */
    public function getSgSitEntregPed()
    {
        return $this->sg_sit_entreg_ped;
    }

    /**
     * @param $sg_sit_entreg_ped
     * @return mixed
     */
    public function setSgSitEntregPed($sg_sit_entreg_ped)
    {
        return $this->sg_sit_entreg_ped = $sg_sit_entreg_ped;
    }

}