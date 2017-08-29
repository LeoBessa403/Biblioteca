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
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
            ),
            (UsuarioEntidade::TABELA) => Array(
                (Constantes::CO_ACESSO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Acesso',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_AUDITORIA) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Auditoria',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CAIXA) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Caixa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_COMISSAO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Comissao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ORDEM_SERVICO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'OrdemServico',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'ProdutoDetalhe',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_PROMOCAO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'ProdutoPromocao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_SUGESTAO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Sugestao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Imagem',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'UsuarioPerfil',
                    ('Tipo') => '1',
                ),
            ),
            (AjudaEntidade::TABELA) => Array(
                (Constantes::CO_FUNCIONALIDADE) => Array(
                    ('Campo') => Constantes::CO_FUNCIONALIDADE,
                    ('Entidade') => 'Funcionalidade',
                    ('Tipo') => '1',
                ),
            ),
            (FuncionalidadeEntidade::TABELA) => Array(
                (Constantes::CO_AJUDA) => Array(
                    ('Campo') => Constantes::CO_FUNCIONALIDADE,
                    ('Entidade') => 'Ajuda',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL_FUNCIONALIDADE) => Array(
                    ('Campo') => Constantes::CO_FUNCIONALIDADE,
                    ('Entidade') => 'PerfilFuncionalidade',
                    ('Tipo') => '1',
                ),
            ),
            (AuditoriaEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
            ),
            (ConsumidorEntidade::TABELA) => Array(
                (Constantes::CO_AUDITORIA) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Auditoria',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CATEGORIA) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Categoria',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CLIENTE) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Cliente',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'Empresa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR_MATRIZ) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR_MATRIZ,
                    ('Entidade') => 'ConsumidorMatriz',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FINANCEIRO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Financeiro',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Fornecedor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FUNCIONARIO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Funcionario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_GRUPO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'GrupoLembrete',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_LOCALIDADE_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'LocalidadeConsumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Perfil',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_REPRESENTANTE) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Representante',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TRANSPORTADORA) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Transportadora',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_UNIDADE_VENDA_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'UnidadeVendaConsumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
            ),
            (CaixaEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_CAIXA,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
            ),
            (CategoriaEntidade::TABELA) => Array(
                (Constantes::CO_SESSAO) => Array(
                    ('Campo') => Constantes::CO_SESSAO,
                    ('Entidade') => 'Sessao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_CATEGORIA,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
            ),
            (SessaoEntidade::TABELA) => Array(
                (Constantes::CO_CATEGORIA) => Array(
                    ('Campo') => Constantes::CO_SESSAO,
                    ('Entidade') => 'Categoria',
                    ('Tipo') => '1',
                ),
            ),
            (ChatEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO_ORIGEM) => Array(
                    ('Campo') => Constantes::CO_USUARIO_ORIGEM,
                    ('Entidade') => 'UsuarioOrigem',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO_DESTINO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'UsuarioDestino',
                    ('Tipo') => '1',
                ),
            ),
            (UsuarioEntidade::TABELA) => Array(
                (Constantes::CO_CHAT) => Array(
                    ('Campo') => Constantes::CO_USUARIO_ORIGEM,
                    ('Entidade') => 'Chat',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_USUARIO_ORIGEM,
                    ('Entidade') => 'Lembrete',
                    ('Tipo') => '1',
                ),
            ),
            (UsuarioEntidade::TABELA) => Array(
                (Constantes::CO_CHAT) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'Chat',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_GRUPO_LEMBRETE_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'GrupoLembreteUsuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'Lembrete',
                    ('Tipo') => '1',
                ),
            ),
            (ClienteEntidade::TABELA) => Array(
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'Empresa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_CLIENTE,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
            ),
            (PessoaEntidade::TABELA) => Array(
                (Constantes::CO_CLIENTE) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Cliente',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Empresa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Fornecedor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FUNCIONARIO) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Funcionario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ENDERECO) => Array(
                    ('Campo') => Constantes::CO_ENDERECO,
                    ('Entidade') => 'Endereco',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONTATO) => Array(
                    ('Campo') => Constantes::CO_CONTATO,
                    ('Entidade') => 'Contato',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Imagem',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_REPRESENTANTE) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Representante',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
            ),
            (EmpresaEntidade::TABELA) => Array(
                (Constantes::CO_CLIENTE) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'Cliente',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONTATO) => Array(
                    ('Campo') => Constantes::CO_CONTATO,
                    ('Entidade') => 'Contato',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ENDERECO) => Array(
                    ('Campo') => Constantes::CO_ENDERECO,
                    ('Entidade') => 'Endereco',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Imagem',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'Fornecedor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TRANSPORTADORA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'Transportadora',
                    ('Tipo') => '1',
                ),
            ),
            (ComissaoEntidade::TABELA) => Array(
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TIPO_COMISSAO) => Array(
                    ('Campo') => Constantes::CO_TIPO_COMISSAO,
                    ('Entidade') => 'TipoComissao',
                    ('Tipo') => '1',
                ),
            ),
            (NegociacaoEntidade::TABELA) => Array(
                (Constantes::CO_COMISSAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'Comissao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ENTREGA_PEDIDO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'EntregaPedido',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CLIENTE) => Array(
                    ('Campo') => Constantes::CO_CLIENTE,
                    ('Entidade') => 'Cliente',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_FORNECEDOR,
                    ('Entidade') => 'Fornecedor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TIPO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_TIPO_NEGOCIACAO,
                    ('Entidade') => 'TipoNegociacao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CAIXA) => Array(
                    ('Campo') => Constantes::CO_CAIXA,
                    ('Entidade') => 'Caixa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'NegociacaoProduto',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_ORDEM_SERVICO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'OrdemServico',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PAGAMENTO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'Pagamento',
                    ('Tipo') => '1',
                ),
            ),
            (TipoComissaoEntidade::TABELA) => Array(
                (Constantes::CO_COMISSAO) => Array(
                    ('Campo') => Constantes::CO_TIPO_COMISSAO,
                    ('Entidade') => 'Comissao',
                    ('Tipo') => '1',
                ),
            ),
            (ConsumidorEntidade::TABELA) => Array(
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR_MATRIZ,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
            ),
            (ContatoEntidade::TABELA) => Array(
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_CONTATO,
                    ('Entidade') => 'Empresa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_CONTATO,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
            ),
            (EnderecoEntidade::TABELA) => Array(
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_ENDERECO,
                    ('Entidade') => 'Empresa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_ENDERECO,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
            ),
            (ImagemEntidade::TABELA) => Array(
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Empresa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FUNCIONARIO) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Funcionario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_SUGESTAO) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Sugestao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
            ),
            (EntregaPedidoEntidade::TABELA) => Array(
                (Constantes::CO_SIT_ENTREG_PED) => Array(
                    ('Campo') => Constantes::CO_SIT_ENTREG_PED,
                    ('Entidade') => 'SitEntregPed',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_TRANSPORTADORA) => Array(
                    ('Campo') => Constantes::CO_TRANSPORTADORA,
                    ('Entidade') => 'Transportadora',
                    ('Tipo') => '1',
                ),
            ),
            (SitEntregPedEntidade::TABELA) => Array(
                (Constantes::CO_ENTREGA_PEDIDO) => Array(
                    ('Campo') => Constantes::CO_SIT_ENTREG_PED,
                    ('Entidade') => 'EntregaPedido',
                    ('Tipo') => '1',
                ),
            ),
            (TransportadoraEntidade::TABELA) => Array(
                (Constantes::CO_ENTREGA_PEDIDO) => Array(
                    ('Campo') => Constantes::CO_TRANSPORTADORA,
                    ('Entidade') => 'EntregaPedido',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'Empresa',
                    ('Tipo') => '1',
                ),
            ),
            (FinanceiroEntidade::TABELA) => Array(
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
            ),
            (FornecedorEntidade::TABELA) => Array(
                (Constantes::CO_REPRESENTANTE) => Array(
                    ('Campo') => Constantes::CO_REPRESENTANTE,
                    ('Entidade') => 'Representante',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_EMPRESA) => Array(
                    ('Campo') => Constantes::CO_EMPRESA,
                    ('Entidade') => 'Empresa',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_FORNECEDOR,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
            ),
            (RepresentanteEntidade::TABELA) => Array(
                (Constantes::CO_FORNECEDOR) => Array(
                    ('Campo') => Constantes::CO_REPRESENTANTE,
                    ('Entidade') => 'Fornecedor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
            ),
            (FuncionarioEntidade::TABELA) => Array(
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Imagem',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PESSOA) => Array(
                    ('Campo') => Constantes::CO_PESSOA,
                    ('Entidade') => 'Pessoa',
                    ('Tipo') => '1',
                ),
            ),
            (GrupoLembreteEntidade::TABELA) => Array(
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_GRUPO_LEMBRETE_USUARIO) => Array(
                    ('Campo') => Constantes::CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'GrupoLembreteUsuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'Lembrete',
                    ('Tipo') => '1',
                ),
            ),
            (GrupoLembreteUsuarioEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO_DESTINO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'UsuarioDestino',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_GRUPO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'GrupoLembrete',
                    ('Tipo') => '1',
                ),
            ),
            (LembreteEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO_ORIGEM) => Array(
                    ('Campo') => Constantes::CO_USUARIO_ORIGEM,
                    ('Entidade') => 'UsuarioOrigem',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO_DESTINO) => Array(
                    ('Campo') => Constantes::CO_USUARIO_DESTINO,
                    ('Entidade') => 'UsuarioDestino',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_GRUPO_LEMBRETE) => Array(
                    ('Campo') => Constantes::CO_GRUPO_LEMBRETE,
                    ('Entidade') => 'GrupoLembrete',
                    ('Tipo') => '1',
                ),
            ),
            (LocalidadeConsumidorEntidade::TABELA) => Array(
                (Constantes::CO_LOCALIDADE) => Array(
                    ('Campo') => Constantes::CO_LOCALIDADE,
                    ('Entidade') => 'Localidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
            ),
            (LocalidadeEntidade::TABELA) => Array(
                (Constantes::CO_LOCALIDADE_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_LOCALIDADE,
                    ('Entidade') => 'LocalidadeConsumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_LOCALIDADE) => Array(
                    ('Campo') => Constantes::CO_LOCALIDADE,
                    ('Entidade') => 'ProdutoLocalidade',
                    ('Tipo') => '1',
                ),
            ),
            (TipoNegociacaoEntidade::TABELA) => Array(
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_TIPO_NEGOCIACAO,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
            ),
            (NegociacaoProdutoEntidade::TABELA) => Array(
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoEntidade::TABELA) => Array(
                (Constantes::CO_NEGOCIACAO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'NegociacaoProduto',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CATEGORIA) => Array(
                    ('Campo') => Constantes::CO_CATEGORIA,
                    ('Entidade') => 'Categoria',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Imagem',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_UNIDADE_VENDA_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_UNIDADE_VENDA_CONSUMIDOR,
                    ('Entidade') => 'UnidadeVendaConsumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_LOTE_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_LOTE_PRODUTO,
                    ('Entidade') => 'LoteProduto',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoDetalhe',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_GRADE_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoGradeProduto',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_LOCALIDADE) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoLocalidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO_PROMOCAO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'ProdutoPromocao',
                    ('Tipo') => '1',
                ),
            ),
            (OrdemServicoEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
            ),
            (PagamentoEntidade::TABELA) => Array(
                (Constantes::CO_TIPO_PAGAMENTO) => Array(
                    ('Campo') => Constantes::CO_TIPO_PAGAMENTO,
                    ('Entidade') => 'TipoPagamento',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_NEGOCIACAO) => Array(
                    ('Campo') => Constantes::CO_NEGOCIACAO,
                    ('Entidade') => 'Negociacao',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PARCELAMENTO) => Array(
                    ('Campo') => Constantes::CO_PAGAMENTO,
                    ('Entidade') => 'Parcelamento',
                    ('Tipo') => '1',
                ),
            ),
            (TipoPagamentoEntidade::TABELA) => Array(
                (Constantes::CO_PAGAMENTO) => Array(
                    ('Campo') => Constantes::CO_TIPO_PAGAMENTO,
                    ('Entidade') => 'Pagamento',
                    ('Tipo') => '1',
                ),
            ),
            (ParcelamentoEntidade::TABELA) => Array(
                (Constantes::CO_PAGAMENTO) => Array(
                    ('Campo') => Constantes::CO_PAGAMENTO,
                    ('Entidade') => 'Pagamento',
                    ('Tipo') => '1',
                ),
            ),
            (PerfilEntidade::TABELA) => Array(
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL_FUNCIONALIDADE) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'PerfilFuncionalidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'PerfilProdutoDetalhe',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'UsuarioPerfil',
                    ('Tipo') => '1',
                ),
            ),
            (PerfilFuncionalidadeEntidade::TABELA) => Array(
                (Constantes::CO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'Perfil',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_FUNCIONALIDADE) => Array(
                    ('Campo') => Constantes::CO_FUNCIONALIDADE,
                    ('Entidade') => 'Funcionalidade',
                    ('Tipo') => '1',
                ),
            ),
            (PerfilProdutoDetalheEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_PRODUTO_DETALHE,
                    ('Entidade') => 'ProdutoDetalhe',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'Perfil',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoDetalheEntidade::TABELA) => Array(
                (Constantes::CO_PERFIL_PRODUTO_DETALHE) => Array(
                    ('Campo') => Constantes::CO_PRODUTO_DETALHE,
                    ('Entidade') => 'PerfilProdutoDetalhe',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
            ),
            (UnidadeVendaConsumidorEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_UNIDADE_VENDA_CONSUMIDOR,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_UNIDADE_VENDA) => Array(
                    ('Campo') => Constantes::CO_UNIDADE_VENDA,
                    ('Entidade') => 'UnidadeVenda',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_CONSUMIDOR,
                    ('Entidade') => 'Consumidor',
                    ('Tipo') => '1',
                ),
            ),
            (LoteProdutoEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_LOTE_PRODUTO,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoGradeProdutoEntidade::TABELA) => Array(
                (Constantes::CO_GRADE_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_GRADE_PRODUTO,
                    ('Entidade') => 'GradeProduto',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
            ),
            (GradeProdutoEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO_GRADE_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_GRADE_PRODUTO,
                    ('Entidade') => 'ProdutoGradeProduto',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoLocalidadeEntidade::TABELA) => Array(
                (Constantes::CO_LOCALIDADE) => Array(
                    ('Campo') => Constantes::CO_LOCALIDADE,
                    ('Entidade') => 'Localidade',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
            ),
            (ProdutoPromocaoEntidade::TABELA) => Array(
                (Constantes::CO_PRODUTO) => Array(
                    ('Campo') => Constantes::CO_PRODUTO,
                    ('Entidade') => 'Produto',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
            ),
            (SugestaoEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_IMAGEM) => Array(
                    ('Campo') => Constantes::CO_IMAGEM,
                    ('Entidade') => 'Imagem',
                    ('Tipo') => '1',
                ),
            ),
            (UnidadeVendaEntidade::TABELA) => Array(
                (Constantes::CO_UNIDADE_VENDA_CONSUMIDOR) => Array(
                    ('Campo') => Constantes::CO_UNIDADE_VENDA,
                    ('Entidade') => 'UnidadeVendaConsumidor',
                    ('Tipo') => '1',
                ),
            ),
            (UsuarioPerfilEntidade::TABELA) => Array(
                (Constantes::CO_USUARIO) => Array(
                    ('Campo') => Constantes::CO_USUARIO,
                    ('Entidade') => 'Usuario',
                    ('Tipo') => '1',
                ),
                (Constantes::CO_PERFIL) => Array(
                    ('Campo') => Constantes::CO_PERFIL,
                    ('Entidade') => 'Perfil',
                    ('Tipo') => '1',
                ),
            ),
        );
    }
}