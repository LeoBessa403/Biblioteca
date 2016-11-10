<?php

/**
Funcionalidade.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */
class FuncionalidadeEntidade
{
    const TABELA = "tb_funcionalidade";
    const ENTIDADE = "FuncionalidadeEntidade";
    const CHAVE = Constantes::CO_FUNCIONALIDADE;

    private $co_funcionalidade;
    private $no_funcionalidade;
    private $ds_rota;
    private $st_status;
    private $co_funcionalidade_pacote;
    private $co_perfil_funcionalidade;

    /**
     * @return mixed
     */
    public static function getCampos()
    {
        $campos = [
            Constantes::CO_FUNCIONALIDADE,
            Constantes::NO_FUNCIONALIDADE,
            Constantes::DS_ROTA,
            Constantes::ST_STATUS
        ];
        return $campos;
    }

    /**
     * @return mixed
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = [
            Constantes::CO_FUNCIONALIDADE_PACOTE => array(
                'Entidade' => FuncionalidadePacoteEntidade::ENTIDADE,
                'Tipo' => 'N',
            ),
            Constantes::CO_PERFIL_FUNCIONALIDADE => array(
                'Entidade' => PerfilFuncionalidadeEntidade::ENTIDADE,
                'Tipo' => 'N',
            ),
        ];
        return $relacionamentos;
    }

    /**
     * @return mixed
     */
    public function getCoFuncionalidade()
    {
        return $this->co_funcionalidade;
    }

    /**
     * @param mixed $co_funcionalidade
     */
    public function setCoFuncionalidade($co_funcionalidade)
    {
        $this->co_funcionalidade = $co_funcionalidade;
    }

    /**
     * @return mixed
     */
    public function getNoFuncionalidade()
    {
        return $this->no_funcionalidade;
    }

    /**
     * @param mixed $no_funcionalidade
     */
    public function setNoFuncionalidade($no_funcionalidade)
    {
        $this->no_funcionalidade = $no_funcionalidade;
    }

    /**
     * @return mixed
     */
    public function getDsRota()
    {
        return $this->ds_rota;
    }

    /**
     * @param mixed $ds_rota
     */
    public function setDsRota($ds_rota)
    {
        $this->ds_rota = $ds_rota;
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
    public function getCoFuncionalidadePacote()
    {
        return $this->co_funcionalidade_pacote;
    }

    /**
     * @param mixed $co_funcionalidade_pacote
     */
    public function setCoFuncionalidadePacote($co_funcionalidade_pacote)
    {
        $this->co_funcionalidade_pacote = $co_funcionalidade_pacote;
    }

    /**
     * @return mixed
     */
    public function getCoPerfilFuncionalidade()
    {
        return $this->co_perfil_funcionalidade;
    }

    /**
     * @param mixed $co_perfil_funcionalidade
     */
    public function setCoPerfilFuncionalidade($co_perfil_funcionalidade)
    {
        $this->co_perfil_funcionalidade = $co_perfil_funcionalidade;
    }

    
}
