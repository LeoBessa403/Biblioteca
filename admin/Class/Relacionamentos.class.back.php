<?php

/**
 * Relacionamentos.class [ RELACIONAMENTOS DO BANCO ]
 * @copyright (c) 2017, Leo Bessa
 */
class Relacionamentos2
{

    public static function getRelacionamentos()
    {
        return array(
            (AcessoEntidade::TABELA) => Array(
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (UsuarioEntidade::TABELA) => Array(
                (CO_ACESSO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'AcessoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_AUDITORIA) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'AuditoriaEntidade',
                    ('Tipo') => '2',
                ),
                (CO_CAIXA) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'CaixaEntidade',
                    ('Tipo') => '2',
                ),
                (CO_COMISSAO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'ComissaoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_ORDEM_SERVICO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'OrdemServicoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_PRODUTO_DETALHE) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'ProdutoDetalheEntidade',
                    ('Tipo') => '2',
                ),
                (CO_PRODUTO_PROMOCAO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'ProdutoPromocaoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_SUGESTAO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'SugestaoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_IMAGEM) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_USUARIO_PERFIL) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioPerfilEntidade',
                    ('Tipo') => '2',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_DESTINO,
                    ('Entidade') => 'ChatEntidade',
                    ('Tipo') => '2',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_DESTINO,
                    ('Entidade') => 'GrupoLembreteUsuarioEntidade',
                    ('Tipo') => '2',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_DESTINO,
                    ('Entidade') => 'LembreteEntidade',
                    ('Tipo') => '2',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_ORIGEM,
                    ('Entidade') => 'ChatEntidade',
                    ('Tipo') => '2',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_ORIGEM,
                    ('Entidade') => 'LembreteEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (AjudaEntidade::TABELA) => Array(
                (CO_FUNCIONALIDADE) => Array(
                    ('Campo') => CO_FUNCIONALIDADE,
                    ('Entidade') => 'FuncionalidadeEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (FuncionalidadeEntidade::TABELA) => Array(
                (CO_AJUDA) => Array(
                    ('Campo') => CO_FUNCIONALIDADE,
                    ('Entidade') => 'AjudaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PERFIL_FUNCIONALIDADE) => Array(
                    ('Campo') => CO_FUNCIONALIDADE,
                    ('Entidade') => 'PerfilFuncionalidadeEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (AuditoriaEntidade::TABELA) => Array(
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ConsumidorEntidade::TABELA) => Array(
                (CO_AUDITORIA) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'AuditoriaEntidade',
                    ('Tipo') => '2',
                ),
                (CO_CATEGORIA) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'CategoriaEntidade',
                    ('Tipo') => '2',
                ),
                (CO_CLIENTE) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ClienteEntidade',
                    ('Tipo') => '2',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '2',
                ),
                (CO_EMPRESA) => Array(
                    ('Campo') => CO_EMPRESA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '2',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR_MATRIZ,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '2',
                ),
                (CO_FINANCEIRO) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'FinanceiroEntidade',
                    ('Tipo') => '2',
                ),
                (CO_FORNECEDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '2',
                ),
                (CO_FUNCIONARIO) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'FuncionarioEntidade',
                    ('Tipo') => '2',
                ),
                (CO_GRUPO_LEMBRETE) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'GrupoLembreteEntidade',
                    ('Tipo') => '2',
                ),
                (CO_LOCALIDADE_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'LocalidadeConsumidorEntidade',
                    ('Tipo') => '2',
                ),
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_PERFIL) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'PerfilEntidade',
                    ('Tipo') => '2',
                ),
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_REPRESENTANTE) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'RepresentanteEntidade',
                    ('Tipo') => '2',
                ),
                (CO_TRANSPORTADORA) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'TransportadoraEntidade',
                    ('Tipo') => '2',
                ),
                (CO_UNIDADE_VENDA_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'UnidadeVendaConsumidorEntidade',
                    ('Tipo') => '2',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (CaixaEntidade::TABELA) => Array(
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_CAIXA,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (CategoriaEntidade::TABELA) => Array(
                (CO_SESSAO) => Array(
                    ('Campo') => CO_SESSAO,
                    ('Entidade') => 'SessaoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_CATEGORIA,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (SessaoEntidade::TABELA) => Array(
                (CO_CATEGORIA) => Array(
                    ('Campo') => CO_SESSAO,
                    ('Entidade') => 'CategoriaEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (ChatEntidade::TABELA) => Array(
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_ORIGEM,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_DESTINO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ClienteEntidade::TABELA) => Array(
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_EMPRESA) => Array(
                    ('Campo') => CO_EMPRESA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_CLIENTE,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (PessoaEntidade::TABELA) => Array(
                (CO_CLIENTE) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'ClienteEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_EMPRESA) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_FORNECEDOR) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_FUNCIONARIO) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'FuncionarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_ENDERECO) => Array(
                    ('Campo') => CO_ENDERECO,
                    ('Entidade') => 'EnderecoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONTATO) => Array(
                    ('Campo') => CO_CONTATO,
                    ('Entidade') => 'ContatoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_IMAGEM) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (CO_REPRESENTANTE) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'RepresentanteEntidade',
                    ('Tipo') => '1',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (EmpresaEntidade::TABELA) => Array(
                (CO_CLIENTE) => Array(
                    ('Campo') => CO_EMPRESA,
                    ('Entidade') => 'ClienteEntidade',
                    ('Tipo') => '2',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_EMPRESA,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONTATO) => Array(
                    ('Campo') => CO_CONTATO,
                    ('Entidade') => 'ContatoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_ENDERECO) => Array(
                    ('Campo') => CO_ENDERECO,
                    ('Entidade') => 'EnderecoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_IMAGEM) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (CO_FORNECEDOR) => Array(
                    ('Campo') => CO_EMPRESA,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '2',
                ),
                (CO_TRANSPORTADORA) => Array(
                    ('Campo') => CO_EMPRESA,
                    ('Entidade') => 'TransportadoraEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (ComissaoEntidade::TABELA) => Array(
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_TIPO_COMISSAO) => Array(
                    ('Campo') => CO_TIPO_COMISSAO,
                    ('Entidade') => 'TipoComissaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (NegociacaoEntidade::TABELA) => Array(
                (CO_COMISSAO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'ComissaoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_ENTREGA_PEDIDO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'EntregaPedidoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CLIENTE) => Array(
                    ('Campo') => CO_CLIENTE,
                    ('Entidade') => 'ClienteEntidade',
                    ('Tipo') => '1',
                ),
                (CO_FORNECEDOR) => Array(
                    ('Campo') => CO_FORNECEDOR,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_TIPO_NEGOCIACAO) => Array(
                    ('Campo') => CO_TIPO_NEGOCIACAO,
                    ('Entidade') => 'TipoNegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CAIXA) => Array(
                    ('Campo') => CO_CAIXA,
                    ('Entidade') => 'CaixaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_NEGOCIACAO_PRODUTO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoProdutoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_ORDEM_SERVICO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'OrdemServicoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PAGAMENTO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'PagamentoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (TipoComissaoEntidade::TABELA) => Array(
                (CO_COMISSAO) => Array(
                    ('Campo') => CO_TIPO_COMISSAO,
                    ('Entidade') => 'ComissaoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (ContatoEntidade::TABELA) => Array(
                (CO_EMPRESA) => Array(
                    ('Campo') => CO_CONTATO,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_CONTATO,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (EnderecoEntidade::TABELA) => Array(
                (CO_EMPRESA) => Array(
                    ('Campo') => CO_ENDERECO,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_ENDERECO,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ImagemEntidade::TABELA) => Array(
                (CO_EMPRESA) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_FUNCIONARIO) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'FuncionarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_SUGESTAO) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'SugestaoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (EntregaPedidoEntidade::TABELA) => Array(
                (CO_SIT_ENTREG_PED) => Array(
                    ('Campo') => CO_SIT_ENTREG_PED,
                    ('Entidade') => 'SitEntregPedEntidade',
                    ('Tipo') => '1',
                ),
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_TRANSPORTADORA) => Array(
                    ('Campo') => CO_TRANSPORTADORA,
                    ('Entidade') => 'TransportadoraEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (SitEntregPedEntidade::TABELA) => Array(
                (CO_ENTREGA_PEDIDO) => Array(
                    ('Campo') => CO_SIT_ENTREG_PED,
                    ('Entidade') => 'EntregaPedidoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (TransportadoraEntidade::TABELA) => Array(
                (CO_ENTREGA_PEDIDO) => Array(
                    ('Campo') => CO_TRANSPORTADORA,
                    ('Entidade') => 'EntregaPedidoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_EMPRESA) => Array(
                    ('Campo') => CO_EMPRESA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (FinanceiroEntidade::TABELA) => Array(
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (FornecedorEntidade::TABELA) => Array(
                (CO_REPRESENTANTE) => Array(
                    ('Campo') => CO_REPRESENTANTE,
                    ('Entidade') => 'RepresentanteEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_EMPRESA) => Array(
                    ('Campo') => CO_EMPRESA,
                    ('Entidade') => 'EmpresaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_FORNECEDOR,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (RepresentanteEntidade::TABELA) => Array(
                (CO_FORNECEDOR) => Array(
                    ('Campo') => CO_REPRESENTANTE,
                    ('Entidade') => 'FornecedorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (FuncionarioEntidade::TABELA) => Array(
                (CO_IMAGEM) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PESSOA) => Array(
                    ('Campo') => CO_PESSOA,
                    ('Entidade') => 'PessoaEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (GrupoLembreteEntidade::TABELA) => Array(
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_GRUPO_LEMBRETE_USUARIO) => Array(
                    ('Campo') => CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'GrupoLembreteUsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_LEMBRETE) => Array(
                    ('Campo') => CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'LembreteEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (GrupoLembreteUsuarioEntidade::TABELA) => Array(
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_DESTINO,
                    ('Entidade') => 'UsuarioDestinoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_GRUPO_LEMBRETE) => Array(
                    ('Campo') => CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'GrupoLembreteEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (LembreteEntidade::TABELA) => Array(
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_ORIGEM,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO_DESTINO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_GRUPO_LEMBRETE) => Array(
                    ('Campo') => CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'GrupoLembreteEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (LocalidadeConsumidorEntidade::TABELA) => Array(
                (CO_LOCALIDADE) => Array(
                    ('Campo') => CO_LOCALIDADE,
                    ('Entidade') => 'LocalidadeEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (LocalidadeEntidade::TABELA) => Array(
                (CO_LOCALIDADE_CONSUMIDOR) => Array(
                    ('Campo') => CO_LOCALIDADE,
                    ('Entidade') => 'LocalidadeConsumidorEntidade',
                    ('Tipo') => '2',
                ),
                (CO_PRODUTO_LOCALIDADE) => Array(
                    ('Campo') => CO_LOCALIDADE,
                    ('Entidade') => 'ProdutoLocalidadeEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (TipoNegociacaoEntidade::TABELA) => Array(
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_TIPO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (NegociacaoProdutoEntidade::TABELA) => Array(
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoEntidade::TABELA) => Array(
                (CO_NEGOCIACAO_PRODUTO) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'NegociacaoProdutoEntidade',
                    ('Tipo') => '2',
                ),
                (CO_CATEGORIA) => Array(
                    ('Campo') => CO_CATEGORIA,
                    ('Entidade') => 'CategoriaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_IMAGEM) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_UNIDADE_VENDA_CONSUMIDOR) => Array(
                    ('Campo') => CO_UNIDADE_VENDA_CONSUMIDOR,
                    ('Entidade') => 'UnidadeVendaConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_LOTE_PRODUTO) => Array(
                    ('Campo') => CO_LOTE_PRODUTO,
                    ('Entidade') => 'LoteProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PRODUTO_DETALHE) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'ProdutoDetalheEntidade',
                    ('Tipo') => '2',
                ),
                (CO_PRODUTO_GRADE_PRODUTO) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'ProdutoGradeProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PRODUTO_LOCALIDADE) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'ProdutoLocalidadeEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PRODUTO_PROMOCAO) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'ProdutoPromocaoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (OrdemServicoEntidade::TABELA) => Array(
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (PagamentoEntidade::TABELA) => Array(
                (CO_TIPO_PAGAMENTO) => Array(
                    ('Campo') => CO_TIPO_PAGAMENTO,
                    ('Entidade') => 'TipoPagamentoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_NEGOCIACAO) => Array(
                    ('Campo') => CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PARCELAMENTO) => Array(
                    ('Campo') => CO_PAGAMENTO,
                    ('Entidade') => 'ParcelamentoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (TipoPagamentoEntidade::TABELA) => Array(
                (CO_PAGAMENTO) => Array(
                    ('Campo') => CO_TIPO_PAGAMENTO,
                    ('Entidade') => 'PagamentoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (ParcelamentoEntidade::TABELA) => Array(
                (CO_PAGAMENTO) => Array(
                    ('Campo') => CO_PAGAMENTO,
                    ('Entidade') => 'PagamentoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (PerfilEntidade::TABELA) => Array(
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PERFIL_FUNCIONALIDADE) => Array(
                    ('Campo') => CO_PERFIL,
                    ('Entidade') => 'PerfilFuncionalidadeEntidade',
                    ('Tipo') => '2',
                ),
                (CO_PERFIL_PRODUTO_DETALHE) => Array(
                    ('Campo') => CO_PERFIL,
                    ('Entidade') => 'PerfilProdutoDetalheEntidade',
                    ('Tipo') => '2',
                ),
                (CO_USUARIO_PERFIL) => Array(
                    ('Campo') => CO_PERFIL,
                    ('Entidade') => 'UsuarioPerfilEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (PerfilFuncionalidadeEntidade::TABELA) => Array(
                (CO_PERFIL) => Array(
                    ('Campo') => CO_PERFIL,
                    ('Entidade') => 'PerfilEntidade',
                    ('Tipo') => '1',
                ),
                (CO_FUNCIONALIDADE) => Array(
                    ('Campo') => CO_FUNCIONALIDADE,
                    ('Entidade') => 'FuncionalidadeEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (PerfilProdutoDetalheEntidade::TABELA) => Array(
                (CO_PRODUTO_DETALHE) => Array(
                    ('Campo') => CO_PRODUTO_DETALHE,
                    ('Entidade') => 'ProdutoDetalheEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PERFIL) => Array(
                    ('Campo') => CO_PERFIL,
                    ('Entidade') => 'PerfilEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoDetalheEntidade::TABELA) => Array(
                (CO_PERFIL_PRODUTO_DETALHE) => Array(
                    ('Campo') => CO_PRODUTO_DETALHE,
                    ('Entidade') => 'PerfilProdutoDetalheEntidade',
                    ('Tipo') => '1',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (UnidadeVendaConsumidorEntidade::TABELA) => Array(
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_UNIDADE_VENDA_CONSUMIDOR,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_UNIDADE_VENDA) => Array(
                    ('Campo') => CO_UNIDADE_VENDA,
                    ('Entidade') => 'UnidadeVendaEntidade',
                    ('Tipo') => '1',
                ),
                (CO_CONSUMIDOR) => Array(
                    ('Campo') => CO_CONSUMIDOR,
                    ('Entidade') => 'ConsumidorEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (LoteProdutoEntidade::TABELA) => Array(
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_LOTE_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (ProdutoGradeProdutoEntidade::TABELA) => Array(
                (CO_GRADE_PRODUTO) => Array(
                    ('Campo') => CO_GRADE_PRODUTO,
                    ('Entidade') => 'GradeProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (GradeProdutoEntidade::TABELA) => Array(
                (CO_PRODUTO_GRADE_PRODUTO) => Array(
                    ('Campo') => CO_GRADE_PRODUTO,
                    ('Entidade') => 'ProdutoGradeProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoLocalidadeEntidade::TABELA) => Array(
                (CO_LOCALIDADE) => Array(
                    ('Campo') => CO_LOCALIDADE,
                    ('Entidade') => 'LocalidadeEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoPromocaoEntidade::TABELA) => Array(
                (CO_PRODUTO) => Array(
                    ('Campo') => CO_PRODUTO,
                    ('Entidade') => 'ProdutoEntidade',
                    ('Tipo') => '1',
                ),
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (SugestaoEntidade::TABELA) => Array(
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_IMAGEM) => Array(
                    ('Campo') => CO_IMAGEM,
                    ('Entidade') => 'ImagemEntidade',
                    ('Tipo') => '1',
                ),
            ),
            (UnidadeVendaEntidade::TABELA) => Array(
                (CO_UNIDADE_VENDA_CONSUMIDOR) => Array(
                    ('Campo') => CO_UNIDADE_VENDA,
                    ('Entidade') => 'UnidadeVendaConsumidorEntidade',
                    ('Tipo') => '2',
                ),
            ),
            (UsuarioPerfilEntidade::TABELA) => Array(
                (CO_USUARIO) => Array(
                    ('Campo') => CO_USUARIO,
                    ('Entidade') => 'UsuarioEntidade',
                    ('Tipo') => '1',
                ),
                (CO_PERFIL) => Array(
                    ('Campo') => CO_PERFIL,
                    ('Entidade') => 'PerfilEntidade',
                    ('Tipo') => '1',
                ),
            ),
        );
    }
}