<?php

/**
 *  Pacote.Entidade [ ENTIDADE ]
 *
 * @copyright (c) 2016, Leo Bessa
 */
class PacoteEntidade
{
    const TABELA = "tb_pacote";
    const ENTIDADE = "PacoteEntidade";
    const CHAVE = Constantes::CO_PACOTE;

    private $co_pacote;
    private $no_pacote;
    private $nu_valor;
    private $st_status;
    private $co_cliente_sistema;

    /**
     * @return mixed
     */
    public static function getCampos()
    {
        $campos = [
            Constantes::CO_PACOTE,
            Constantes::NO_PACOTE,
            Constantes::NU_VALOR,
            Constantes::ST_STATUS,
            Constantes::CO_CLIENTE_SISTEMA
        ];
        return $campos;
    }

    /**
     * @return mixed
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = [
            Constantes::CO_CLIENTE_SISTEMA => array(
                'Entidade' => ClienteSistemaEntidade::ENTIDADE,
                'Tipo' => 1,
            ),
            Constantes::CO_FUNCIONALIDADE_PACOTE => array(
                'Entidade' => FuncionalidadePacoteEntidade::ENTIDADE,
                'Tipo' => 'N',
            ),
        ];
        return $relacionamentos;
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

    /**
     * @return mixed
     */
    public function getNoPacote()
    {
        return $this->no_pacote;
    }

    /**
     * @param mixed $no_pacote
     */
    public function setNoPacote($no_pacote)
    {
        $this->no_pacote = $no_pacote;
    }

    /**
     * @return mixed
     */
    public function getNuValor()
    {
        return $this->nu_valor;
    }

    /**
     * @param mixed $nu_valor
     */
    public function setNuValor($nu_valor)
    {
        $this->nu_valor = $nu_valor;
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
    public function getCoClienteSistema()
    {
        return $this->co_cliente_sistema;
    }

    /**
     * @param mixed $co_cliente_sistema
     */
    public function setCoClienteSistema($co_cliente_sistema)
    {
        $this->co_cliente_sistema = $co_cliente_sistema;
    }

}
