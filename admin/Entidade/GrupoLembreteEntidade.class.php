<?php

/**
 * GrupoLembrete.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class GrupoLembreteEntidade extends AbstractEntidade
{
    const TABELA = 'tb_grupo_lembrete';
    const ENTIDADE = 'GrupoLembreteEntidade';
    const CHAVE = Constantes::CO_GRUPO_LEMBRETE;

    private $co_grupo_lembrete;
    private $no_grupo_lembrete;
    private $dt_cadastro;
    private $co_consumidor;
    private $co_grupo_lembrete_usuario;
    private $co_lembrete;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_GRUPO_LEMBRETE,
            Constantes::NO_GRUPO_LEMBRETE,
            Constantes::DT_CADASTRO,
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
     * @return $co_grupo_lembrete
     */
    public function getCoGrupoLembrete()
    {
        return $this->co_grupo_lembrete;
    }

    /**
     * @param $co_grupo_lembrete
     * @return mixed
     */
    public function setCoGrupoLembrete($co_grupo_lembrete)
    {
        return $this->co_grupo_lembrete = $co_grupo_lembrete;
    }

    /**
     * @return $no_grupo_lembrete
     */
    public function getNoGrupoLembrete()
    {
        return $this->no_grupo_lembrete;
    }

    /**
     * @param $no_grupo_lembrete
     * @return mixed
     */
    public function setNoGrupoLembrete($no_grupo_lembrete)
    {
        return $this->no_grupo_lembrete = $no_grupo_lembrete;
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
     * @return $co_grupo_lembrete_usuario
     */
    public function getCoGrupoLembreteUsuario()
    {
        return $this->co_grupo_lembrete_usuario;
    }

    /**
     * @param $co_grupo_lembrete_usuario
     * @return mixed
     */
    public function setCoGrupoLembreteUsuario($co_grupo_lembrete_usuario)
    {
        return $this->co_grupo_lembrete_usuario = $co_grupo_lembrete_usuario;
    }

    /**
     * @return $co_lembrete
     */
    public function getCoLembrete()
    {
        return $this->co_lembrete;
    }

    /**
     * @param $co_lembrete
     * @return mixed
     */
    public function setCoLembrete($co_lembrete)
    {
        return $this->co_lembrete = $co_lembrete;
    }

}