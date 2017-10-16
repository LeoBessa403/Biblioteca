<?php

/**
 * Consumidor.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */

class ConsumidorEntidade extends AbstractEntidade
{
	const TABELA = 'tb_consumidor';
	const ENTIDADE = 'ConsumidorEntidade';
	const CHAVE = CO_CONSUMIDOR;

	private $co_consumidor;
	private $dt_cadastro;
	private $ds_observacao;
	private $st_status;
	private $co_pessoa;
	private $co_empresa;
	private $co_consumidor_dependencia;
	private $co_consumidor_matriz;
	private $co_consumidor_filial;
	private $co_auditoria;
	private $co_categoria;
	private $co_cliente;
	private $co_financeiro;
	private $co_fornecedor;
	private $co_funcionario;
	private $co_grupo_lembrete;
	private $co_localidade_consumidor;
	private $co_negociacao;
	private $co_perfil;
	private $co_produto;
	private $co_representante;
	private $co_transportadora;
	private $co_unidade_venda_consumidor;
	private $co_usuario;


	/**
     * @return array
     */
	public static function getCampos() {
    	return [
			CO_CONSUMIDOR,
			DT_CADASTRO,
			DS_OBSERVACAO,
			ST_STATUS,
			CO_PESSOA,
			CO_EMPRESA,
		];
    }

	/**
	* @return $relacionamentos
     */
	public static function getRelacionamentos() {
    	$relacionamentos = Relacionamentos::getRelacionamentos();
		return $relacionamentos[static::TABELA];
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
	* @return $st_status
     */
	public function getStStatus()
    {
        return $this->st_status;
    }

	/**
	* @param $st_status
     * @return mixed
     */
	public function setStStatus($st_status)
    {
        return $this->st_status = $st_status;
    }

	/**
	* @return PessoaEntidade $co_pessoa
     */
	public function getCoPessoa()
    {
        return $this->co_pessoa;
    }

	/**
	* @param $co_pessoa
     * @return mixed
     */
	public function setCoPessoa($co_pessoa)
    {
        return $this->co_pessoa = $co_pessoa;
    }

	/**
	* @return EmpresaEntidade $co_empresa
     */
	public function getCoEmpresa()
    {
        return $this->co_empresa;
    }

	/**
	* @param $co_empresa
     * @return mixed
     */
	public function setCoEmpresa($co_empresa)
    {
        return $this->co_empresa = $co_empresa;
    }

	/**
	* @return ConsumidorDependenciaEntidade $co_consumidor_matriz
     */
	public function getCoConsumidorMatriz()
    {
        return $this->co_consumidor_matriz;
    }

	/**
	* @param $co_consumidor_matriz
     * @return mixed
     */
	public function setCoConsumidorMatriz($co_consumidor_matriz)
    {
        return $this->co_consumidor_matriz = $co_consumidor_matriz;
    }

	/**
	* @return ConsumidorDependenciaEntidade co_consumidor_filial
     */
	public function getCoConsumidorFilial()
    {
        return $this->co_consumidor_filial;
    }

	/**
	* @param $co_consumidor_filial
     * @return mixed
     */
	public function setCoConsumidorFilial($co_consumidor_filial)
    {
        return $this->co_consumidor_filial = $co_consumidor_filial;
    }

    /**
     * @return ConsumidorDependenciaEntidade mixed
     */
    public function getCoConsumidorDependencia()
    {
        return $this->co_consumidor_dependencia;
    }

    /**
     * @param mixed $co_consumidor_dependencia
     */
    public function setCoConsumidorDependencia($co_consumidor_dependencia)
    {
        $this->co_consumidor_dependencia = $co_consumidor_dependencia;
    }

	/**
	* @return AuditoriaEntidade $co_auditoria
     */
	public function getCoAuditoria()
    {
        return $this->co_auditoria;
    }

	/**
     * @param $co_auditoria
     * @return mixed
     */
	public function setCoAuditoria($co_auditoria)
    {
        return $this->co_auditoria = $co_auditoria;
    }

	/**
	* @return CategoriaEntidade $co_categoria
     */
	public function getCoCategoria()
    {
        return $this->co_categoria;
    }

	/**
     * @param $co_categoria
     * @return mixed
     */
	public function setCoCategoria($co_categoria)
    {
        return $this->co_categoria = $co_categoria;
    }

	/**
	* @return ClienteEntidade $co_cliente
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
	* @return FinanceiroEntidade $co_financeiro
     */
	public function getCoFinanceiro()
    {
        return $this->co_financeiro;
    }

	/**
     * @param $co_financeiro
     * @return mixed
     */
	public function setCoFinanceiro($co_financeiro)
    {
        return $this->co_financeiro = $co_financeiro;
    }

	/**
	* @return FornecedorEntidade $co_fornecedor
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
	* @return FuncionarioEntidade $co_funcionario
     */
	public function getCoFuncionario()
    {
        return $this->co_funcionario;
    }

	/**
     * @param $co_funcionario
     * @return mixed
     */
	public function setCoFuncionario($co_funcionario)
    {
        return $this->co_funcionario = $co_funcionario;
    }

	/**
	* @return GrupoLembreteEntidade $co_grupo_lembrete
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
	* @return LocalidadeConsumidorEntidade $co_localidade_consumidor
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
	* @return NegociacaoEntidade $co_negociacao
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
	* @return PerfilEntidade $co_perfil
     */
	public function getCoPerfil()
    {
        return $this->co_perfil;
    }

	/**
     * @param $co_perfil
     * @return mixed
     */
	public function setCoPerfil($co_perfil)
    {
        return $this->co_perfil = $co_perfil;
    }

	/**
	* @return ProdutoEntidade $co_produto
     */
	public function getCoProduto()
    {
        return $this->co_produto;
    }

	/**
     * @param $co_produto
     * @return mixed
     */
	public function setCoProduto($co_produto)
    {
        return $this->co_produto = $co_produto;
    }

	/**
	* @return RepresentanteEntidade $co_representante
     */
	public function getCoRepresentante()
    {
        return $this->co_representante;
    }

	/**
     * @param $co_representante
     * @return mixed
     */
	public function setCoRepresentante($co_representante)
    {
        return $this->co_representante = $co_representante;
    }

	/**
	* @return TransportadoraEntidade $co_transportadora
     */
	public function getCoTransportadora()
    {
        return $this->co_transportadora;
    }

	/**
     * @param $co_transportadora
     * @return mixed
     */
	public function setCoTransportadora($co_transportadora)
    {
        return $this->co_transportadora = $co_transportadora;
    }

	/**
	* @return UnidadeVendaConsumidorEntidade $co_unidade_venda_consumidor
     */
	public function getCoUnidadeVendaConsumidor()
    {
        return $this->co_unidade_venda_consumidor;
    }

	/**
     * @param $co_unidade_venda_consumidor
     * @return mixed
     */
	public function setCoUnidadeVendaConsumidor($co_unidade_venda_consumidor)
    {
        return $this->co_unidade_venda_consumidor = $co_unidade_venda_consumidor;
    }

	/**
	* @return UsuarioEntidade $co_usuario
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

}