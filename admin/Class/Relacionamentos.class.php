<?php

/**
 * Relacionamentos.class [ RELACIONAMENTOS DO BANCO ]
 * @copyright (c) 2017, Leo Bessa
 */
class Relacionamentos
{

    public static function getRelacionamentos()
    {
        return array(
            (AcessoEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (UsuarioEntidade::TABELA) => Array(
                (Constantes::CO_ACESSO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'AcessoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_AUDITORIA) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'AuditoriaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CAIXA) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'CaixaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_COMISSAO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'ComissaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ORDEM_SERVICO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'OrdemServicoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'ProdutoDetalheEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_PROMOCAO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'ProdutoPromocaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_SUGESTAO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'SugestaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioPerfilEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'ChatEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'GrupoLembreteUsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'LembreteEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_ORIGEM,
                    ('Entidade') => 'ChatEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_ORIGEM,
                    ('Entidade') => 'LembreteEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (AjudaEntidade::TABELA) => Array(
                (Constantes::CO_FUNCIONALIDADE) => Array(
                    ('Campo') => Constantes::CO_FUNCIONALIDADE,
                    ('Entidade') => 'FuncionalidadeEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (FuncionalidadeEntidade::TABELA) => Array(
                (Constantes::CO_AJUDA) => Array(
                    ('Campo') => Constantes::CO_FUNCIONALIDADE,
                    ('Entidade') => 'AjudaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL_FUNCIONALIDADE) => Array(
                    ('Campo') => Constantes::CO_FUNCIONALIDADE,
                    ('Entidade') => 'PerfilFuncionalidadeEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (AuditoriaEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ConsumidorEntidade::TABELA) => Array(
                (Constantes::CO_AUDITORIA) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'AuditoriaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CATEGORIA) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'CategoriaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CLIENTE) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ClienteEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR_MATRIZ,
                    ('Entidade') => 'ConsumidorMatrizEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FINANCEIRO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'FinanceiroEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FUNCIONARIO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'FuncionarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_GRUPO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'GrupoLembreteEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_LOCALIDADE_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'LocalidadeConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'PerfilEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_REPRESENTANTE) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'RepresentanteEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TRANSPORTADORA) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'TransportadoraEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_UNIDADE_VENDA_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'UnidadeVendaConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR_MATRIZ,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (CaixaEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_CAIXA,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (CategoriaEntidade::TABELA) => Array(
                (Constantes::CO_SESSAO) => Array(
                    ('Campo') => Constantes::CO_SESSAO,
                    ('Entidade') => 'SessaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_CATEGORIA,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (SessaoEntidade::TABELA) => Array(
                (Constantes::CO_CATEGORIA) => Array(
                    ('Campo') => Constantes::CO_SESSAO,
                    ('Entidade') => 'CategoriaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ChatEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO_ORIGEM) => Array(
                    ('Campo') => Constantes::CO_USUARIO_ORIGEM,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO_DESTINO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ClienteEntidade::TABELA) => Array(
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_CLIENTE,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (PessoaEntidade::TABELA) => Array(
                (Constantes::CO_CLIENTE) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'ClienteEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FUNCIONARIO) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'FuncionarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ENDERECO) => Array(
                    ('Campo') => Constantes::CO_ENDERECO,
                    ('Entidade') => 'EnderecoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONTATO) => Array(
                    ('Campo') => Constantes::CO_CONTATO,
                    ('Entidade') => 'ContatoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_REPRESENTANTE) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'RepresentanteEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (EmpresaEntidade::TABELA) => Array(
                (Constantes::CO_CLIENTE) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'ClienteEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONTATO) => Array(
                    ('Campo') => Constantes::CO_CONTATO,
                    ('Entidade') => 'ContatoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ENDERECO) => Array(
                    ('Campo') => Constantes::CO_ENDERECO,
                    ('Entidade') => 'EnderecoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TRANSPORTADORA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'TransportadoraEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ComissaoEntidade::TABELA) => Array(
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TIPO_COMISSAO) => Array(
                    ('Campo') => Constantes::CO_TIPO_COMISSAO,
                    ('Entidade') => 'TipoComissaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (NegociacaoEntidade::TABELA) => Array(
                (Constantes::CO_COMISSAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'ComissaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ENTREGA_PEDIDO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'EntregaPedidoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CLIENTE) => Array(
                    ('Campo') => Constantes::CO_CLIENTE,
                    ('Entidade') => 'ClienteEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_FORNECEDOR,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TIPO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_TIPO_NEGOCIACAO,
                    ('Entidade') => 'TipoNegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CAIXA) => Array(
                    ('Campo') => Constantes::CO_CAIXA,
                    ('Entidade') => 'CaixaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ORDEM_SERVICO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'OrdemServicoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PAGAMENTO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'PagamentoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (TipoComissaoEntidade::TABELA) => Array(
                (Constantes::CO_COMISSAO) => Array(
                    ('Campo') => Constantes::CO_TIPO_COMISSAO,
                    ('Entidade') => 'ComissaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ContatoEntidade::TABELA) => Array(
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_CONTATO,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_CONTATO,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (EnderecoEntidade::TABELA) => Array(
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_ENDERECO,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_ENDERECO,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ImagemEntidade::TABELA) => Array(
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FUNCIONARIO) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'FuncionarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_SUGESTAO) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'SugestaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (EntregaPedidoEntidade::TABELA) => Array(
                (Constantes::CO_SIT_ENTREG_PED) => Array(
                    ('Campo') => Constantes::CO_SIT_ENTREG_PED,
                    ('Entidade') => 'SitEntregPedEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TRANSPORTADORA) => Array(
                    ('Campo') => Constantes::CO_TRANSPORTADORA,
                    ('Entidade') => 'TransportadoraEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (SitEntregPedEntidade::TABELA) => Array(
                (Constantes::CO_ENTREGA_PEDIDO) => Array(
                    ('Campo') => Constantes::CO_SIT_ENTREG_PED,
                    ('Entidade') => 'EntregaPedidoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (TransportadoraEntidade::TABELA) => Array(
                (Constantes::CO_ENTREGA_PEDIDO) => Array(
                    ('Campo') => Constantes::CO_TRANSPORTADORA,
                    ('Entidade') => 'EntregaPedidoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (FinanceiroEntidade::TABELA) => Array(
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (FornecedorEntidade::TABELA) => Array(
                (Constantes::CO_REPRESENTANTE) => Array(
                    ('Campo') => Constantes::CO_REPRESENTANTE,
                    ('Entidade') => 'RepresentanteEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_FORNECEDOR,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (RepresentanteEntidade::TABELA) => Array(
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_REPRESENTANTE,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (FuncionarioEntidade::TABELA) => Array(
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (GrupoLembreteEntidade::TABELA) => Array(
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_GRUPO_LEMBRETE_USUARIO) => Array(
                    ('Campo') => Constantes::CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'GrupoLembreteUsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'LembreteEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (GrupoLembreteUsuarioEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO_DESTINO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'UsuarioDestinoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_GRUPO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'GrupoLembreteEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (LembreteEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO_ORIGEM) => Array(
                    ('Campo') => Constantes::CO_USUARIO_ORIGEM,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO_DESTINO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_GRUPO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'GrupoLembreteEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (LocalidadeConsumidorEntidade::TABELA) => Array(
                (Constantes::CO_LOCALIDADE) => Array(
                    ('Campo') => Constantes::CO_LOCALIDADE,
                    ('Entidade') => 'LocalidadeEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (LocalidadeEntidade::TABELA) => Array(
                (Constantes::CO_LOCALIDADE_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_LOCALIDADE,
                    ('Entidade') => 'LocalidadeConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_LOCALIDADE) => Array(
                    ('Campo') => Constantes::CO_LOCALIDADE,
                    ('Entidade') => 'ProdutoLocalidadeEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (TipoNegociacaoEntidade::TABELA) => Array(
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_TIPO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (NegociacaoProdutoEntidade::TABELA) => Array(
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoEntidade::TABELA) => Array(
                (Constantes::CO_NEGOCIACAO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'NegociacaoProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CATEGORIA) => Array(
                    ('Campo') => Constantes::CO_CATEGORIA,
                    ('Entidade') => 'CategoriaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_UNIDADE_VENDA_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_UNIDADE_VENDA_CONSUMIDOR,
                    ('Entidade') => 'UnidadeVendaConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_LOTE_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_LOTE_PRODUTO,
                    ('Entidade') => 'LoteProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoDetalheEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_GRADE_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoGradeProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_LOCALIDADE) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoLocalidadeEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_PROMOCAO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoPromocaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (OrdemServicoEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (PagamentoEntidade::TABELA) => Array(
                (Constantes::CO_TIPO_PAGAMENTO) => Array(
                    ('Campo') => Constantes::CO_TIPO_PAGAMENTO,
                    ('Entidade') => 'TipoPagamentoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PARCELAMENTO) => Array(
                    ('Campo') => Constantes::CO_PAGAMENTO,
                    ('Entidade') => 'ParcelamentoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (TipoPagamentoEntidade::TABELA) => Array(
                (Constantes::CO_PAGAMENTO) => Array(
                    ('Campo') => Constantes::CO_TIPO_PAGAMENTO,
                    ('Entidade') => 'PagamentoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ParcelamentoEntidade::TABELA) => Array(
                (Constantes::CO_PAGAMENTO) => Array(
                    ('Campo') => Constantes::CO_PAGAMENTO,
                    ('Entidade') => 'PagamentoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (PerfilEntidade::TABELA) => Array(
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL_FUNCIONALIDADE) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'PerfilFuncionalidadeEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'PerfilProdutoDetalheEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'UsuarioPerfilEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (PerfilFuncionalidadeEntidade::TABELA) => Array(
                (Constantes::CO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'PerfilEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FUNCIONALIDADE) => Array(
                    ('Campo') => Constantes::CO_FUNCIONALIDADE,
                    ('Entidade') => 'FuncionalidadeEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (PerfilProdutoDetalheEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_PRODUTO_DETALHE,
                    ('Entidade') => 'ProdutoDetalheEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'PerfilEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoDetalheEntidade::TABELA) => Array(
                (Constantes::CO_PERFIL_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_PRODUTO_DETALHE,
                    ('Entidade') => 'PerfilProdutoDetalheEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (UnidadeVendaConsumidorEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_UNIDADE_VENDA_CONSUMIDOR,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_UNIDADE_VENDA) => Array(
                    ('Campo') => Constantes::CO_UNIDADE_VENDA,
                    ('Entidade') => 'UnidadeVendaEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (LoteProdutoEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_LOTE_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoGradeProdutoEntidade::TABELA) => Array(
                (Constantes::CO_GRADE_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_GRADE_PRODUTO,
                    ('Entidade') => 'GradeProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (GradeProdutoEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO_GRADE_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_GRADE_PRODUTO,
                    ('Entidade') => 'ProdutoGradeProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoLocalidadeEntidade::TABELA) => Array(
                (Constantes::CO_LOCALIDADE) => Array(
                    ('Campo') => Constantes::CO_LOCALIDADE,
                    ('Entidade') => 'LocalidadeEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoPromocaoEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (SugestaoEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (UnidadeVendaEntidade::TABELA) => Array(
                (Constantes::CO_UNIDADE_VENDA_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_UNIDADE_VENDA,
                    ('Entidade') => 'UnidadeVendaConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (UsuarioPerfilEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'PerfilEntidade',
                    ('Tipo') => '1',
                ),
            ),
        );
    }
}