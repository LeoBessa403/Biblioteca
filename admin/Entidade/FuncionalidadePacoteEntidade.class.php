<?php

/**
 *  FuncionalidadePacote.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */
class FuncionalidadePacoteEntidade
{
    const TABELA = "tb_funcionalidade_pacote";
    const ENTIDADE = "FuncionalidadePacoteEntidade";
    const CHAVE = Constantes::CO_FUNCIONALIDADE_PACOTE;

    private $co_funcionalidade_pacote;
    private $co_funcionalidade;
    private $co_pacote;

    /**
     * @return mixed
     */
    public static function getCampos()
    {
        $campos = [
            Constantes::CO_FUNCIONALIDADE_PACOTE,
            Constantes::CO_FUNCIONALIDADE,
            Constantes::CO_PACOTE
        ];
        return $campos;
    }

    /**
     * @return mixed
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = [
            Constantes::CO_FUNCIONALIDADE => array(
                'Entidade' => FuncionalidadeEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
            Constantes::CO_PACOTE => array(
                'Entidade' => PacoteEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
        ];
        return $relacionamentos;
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
    public function getCoPacote()
    {
        return $this->co_pacote;
    }

    /**
     * @param mixed $co_pacote
     */
    public function setCoPacote($co_pacote)
    {
        $this->co_pacote = $co_pacote;
    }
    
}
