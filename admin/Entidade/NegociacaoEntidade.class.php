<?php

/**
 * Negociacao.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class NegociacaoEntidade extends AbstractEntidade
{
    const TABELA = 'tb_negociacao';
    const ENTIDADE = 'NegociacaoEntidade';
    const CHAVE = Constantes::CO_NEGOCIACAO;

    private $co_negociacao;
    private $dt_cadastro;
    private $ds_observacao;
    private $co_cliente;
    private $co_fornecedor;
    private $co_usuario;
    private $co_tipo_negociacao;
    private $co_consumidor;
    private $co_caixa;
    private $co_comissao;
    private $co_entrega_pedido;
    private $co_negociacao_produto;
    private $co_ordem_servico;
    private $co_pagamento;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_NEGOCIACAO,
            Constantes::DT_CADASTRO,
            Constantes::DS_OBSERVACAO,
            Constantes::CO_CLIENTE,
            Constantes::CO_FORNECEDOR,
            Constantes::CO_USUARIO,
            Constantes::CO_TIPO_NEGOCIACAO,
            Constantes::CO_CONSUMIDOR,
            Constantes::CO_CAIXA,
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
     * @return $co_negociacao
     */
    public function getCoNegociacao()
    {
        return $this->co_negociacao;
    }

    /**
     * @param $co_negociacao
     * @return mixed
     */
    public function setCoNegociacao($co_negociacao)
    {
        return $this->co_negociacao = $co_negociacao;
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
     * @return $ds_observacao
     */
    public function getDsObservacao()
    {
        return $this->ds_observacao;
    }

    /**
     * @param $ds_observacao
     * @return mixed
     */
    public function setDsObservacao($ds_observacao)
    {
        return $this->ds_observacao = $ds_observacao;
    }

    /**
     * @return $co_cliente
     */
    public function getCoCliente()
    {
        return $this->co_cliente;
    }

    /**
     * @param $co_cliente
     * @return mixed
     */
    public function setCoCliente($co_cliente)
    {
        return $this->co_cliente = $co_cliente;
    }

    /**
     * @return $co_fornecedor
     */
    public function getCoFornecedor()
    {
        return $this->co_fornecedor;
    }

    /**
     * @param $co_fornecedor
     * @return mixed
     */
    public function setCoFornecedor($co_fornecedor)
    {
        return $this->co_fornecedor = $co_fornecedor;
    }

    /**
     * @return $co_usuario
     */
    public function getCoUsuario()
    {
        return $this->co_usuario;
    }

    /**
     * @param $co_usuario
     * @return mixed
     */
    public function setCoUsuario($co_usuario)
    {
        return $this->co_usuario = $co_usuario;
    }

    /**
     * @return $co_tipo_negociacao
     */
    public function getCoTipoNegociacao()
    {
        return $this->co_tipo_negociacao;
    }

    /**
     * @param $co_tipo_negociacao
     * @return mixed
     */
    public function setCoTipoNegociacao($co_tipo_negociacao)
    {
        return $this->co_tipo_negociacao = $co_tipo_negociacao;
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
     * @return $co_caixa
     */
    public function getCoCaixa()
    {
        return $this->co_caixa;
    }

    /**
     * @param $co_caixa
     * @return mixed
     */
    public function setCoCaixa($co_caixa)
    {
        return $this->co_caixa = $co_caixa;
    }

    /**
     * @return $co_comissao
     */
    public function getCoComissao()
    {
        return $this->co_comissao;
    }

    /**
     * @param $co_comissao
     * @return mixed
     */
    public function setCoComissao($co_comissao)
    {
        return $this->co_comissao = $co_comissao;
    }

    /**
     * @return $co_entrega_pedido
     */
    public function getCoEntregaPedido()
    {
        return $this->co_entrega_pedido;
    }

    /**
     * @param $co_entrega_pedido
     * @return mixed
     */
    public function setCoEntregaPedido($co_entrega_pedido)
    {
        return $this->co_entrega_pedido = $co_entrega_pedido;
    }

    /**
     * @return $co_negociacao_produto
     */
    public function getCoNegociacaoProduto()
    {
        return $this->co_negociacao_produto;
    }

    /**
     * @param $co_negociacao_produto
     * @return mixed
     */
    public function setCoNegociacaoProduto($co_negociacao_produto)
    {
        return $this->co_negociacao_produto = $co_negociacao_produto;
    }

    /**
     * @return $co_ordem_servico
     */
    public function getCoOrdemServico()
    {
        return $this->co_ordem_servico;
    }

    /**
     * @param $co_ordem_servico
     * @return mixed
     */
    public function setCoOrdemServico($co_ordem_servico)
    {
        return $this->co_ordem_servico = $co_ordem_servico;
    }

    /**
     * @return $co_pagamento
     */
    public function getCoPagamento()
    {
        return $this->co_pagamento;
    }

    /**
     * @param $co_pagamento
     * @return mixed
     */
    public function setCoPagamento($co_pagamento)
    {
        return $this->co_pagamento = $co_pagamento;
    }

}