-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2016 às 16:27
-- Versão do servidor: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brcommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_auditoria`
--

CREATE TABLE IF NOT EXISTS `tb_auditoria` (
  `co_auditoria` int(10) unsigned NOT NULL,
  `no_tabela` varchar(150) DEFAULT NULL,
  `dt_realizado` datetime DEFAULT NULL,
  `no_operacao` varchar(1) DEFAULT NULL,
  `ds_item_anterior` text,
  `ds_item_atual` text,
  `co_registro` int(10) DEFAULT NULL,
  `ds_perfil_usuario` text,
  `co_usuario` int(10) NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=214 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `co_categoria` int(10) unsigned NOT NULL,
  `no_categoria` varchar(40) NOT NULL,
  `nu_lucro` decimal(10,0) DEFAULT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_tipo_categoria` int(11) NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `co_cliente` int(11) NOT NULL,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente_sistema`
--

CREATE TABLE IF NOT EXISTS `tb_cliente_sistema` (
  `co_cliente_sistema` int(11) NOT NULL,
  `dt_cadastro` date NOT NULL,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_pessoa` int(11) NOT NULL,
  `co_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

CREATE TABLE IF NOT EXISTS `tb_contato` (
  `co_contato` int(11) NOT NULL,
  `nu_tel1` varchar(15) NOT NULL,
  `nu_tel2` varchar(15) DEFAULT NULL,
  `nu_tel3` varchar(15) DEFAULT NULL,
  `nu_tel_0800` varchar(25) DEFAULT NULL,
  `ds_email` varchar(150) DEFAULT NULL,
  `ds_site` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresa`
--

CREATE TABLE IF NOT EXISTS `tb_empresa` (
  `co_empresa` int(11) NOT NULL,
  `no_empresa` varchar(250) NOT NULL COMMENT 'Razão Social',
  `no_fantasia` varchar(150) DEFAULT NULL,
  `dt_cadastro` date NOT NULL,
  `nu_cnpj` varchar(20) DEFAULT NULL,
  `nu_insc_estadual` varchar(20) DEFAULT NULL,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_contato` int(11) NOT NULL,
  `co_endereco` int(11) NOT NULL DEFAULT '0',
  `co_pessoa` int(11) NOT NULL COMMENT 'Responsável pela Empresa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

CREATE TABLE IF NOT EXISTS `tb_endereco` (
  `co_endereco` int(11) NOT NULL,
  `ds_endereco` varchar(150) NOT NULL,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `ds_bairro` varchar(80) DEFAULT NULL,
  `nu_cep` varchar(112) DEFAULT NULL,
  `no_cidade` varchar(80) NOT NULL,
  `sg_uf` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_financeiro`
--

CREATE TABLE IF NOT EXISTS `tb_financeiro` (
  `co_financeiro` int(11) NOT NULL,
  `nu_parcela` int(11) NOT NULL,
  `nu_valor_parcela` decimal(10,0) NOT NULL,
  `nu_valor_parcela_pago` decimal(10,0) DEFAULT NULL,
  `dt_vencimento` date NOT NULL,
  `dt_vencimento_pago` date DEFAULT NULL,
  `ds_observacao` text,
  `co_cliente_sistema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fornecedor`
--

CREATE TABLE IF NOT EXISTS `tb_fornecedor` (
  `co_fornecedor` int(11) NOT NULL,
  `ds_observacao` text,
  `dt_cadastro` date NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_representante` int(11) NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  `co_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionalidade`
--

CREATE TABLE IF NOT EXISTS `tb_funcionalidade` (
  `co_funcionalidade` int(11) NOT NULL,
  `no_funcionalidade` varchar(150) NOT NULL,
  `ds_rota` varchar(250) NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo'''
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_funcionalidade`
--

INSERT INTO `tb_funcionalidade` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES
(1, 'Perfil Master', 'Admin/Index/SuperPerfil', 'A'),
(2, 'Auditoria Listar', 'Admin/Auditoria/ListarAuditoria', 'A'),
(3, 'Auditoria Detalhar', 'Admin/Auditoria/DetalharAuditoria', 'A'),
(4, 'Usuario Cadastrar', 'Admin/Usuario/CadastroUsuario', 'A'),
(5, 'Usuario Listar', 'Admin/Usuario/ListarUsuario', 'A'),
(6, 'Meu Usuario', 'Admin/Usuario/MeuPerfilUsuario', 'A'),
(7, 'Perfil Listar', 'Admin/Perfil/ListarPerfil', 'A'),
(8, 'Perfil Cadastrar', 'Admin/Perfil/CadastroPerfil', 'A'),
(9, 'Funcionalidade Listar', 'Admin/Funcionalidade/ListarFuncionalidade', 'A'),
(10, 'Funcionalidade Cadastrar', 'Admin/Funcionalidade/CadastroFuncionalidade', 'A'),
(11, 'Funcionalidades Perfil', 'Admin/Funcionalidade/FuncionalidadesPerfil', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionalidade_pacote`
--

CREATE TABLE IF NOT EXISTS `tb_funcionalidade_pacote` (
  `co_funcionalidade` int(11) NOT NULL,
  `co_pacote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `co_funcionario` int(11) NOT NULL,
  `ds_cargo` varchar(70) DEFAULT NULL,
  `dt_admissao` date NOT NULL,
  `dt_demissao` date DEFAULT NULL,
  `dt_cadastro` date NOT NULL,
  `nu_carteira` varchar(45) DEFAULT NULL,
  `nu_salario` decimal(10,0) DEFAULT NULL,
  `nu_horas` int(2) DEFAULT NULL COMMENT 'Quantidade de Horas Trabalhada por semana',
  `st_status` varchar(1) NOT NULL COMMENT 'A - Ativo / I - Inativo',
  `co_imagem` int(10) unsigned NOT NULL DEFAULT '0',
  `co_cliente_sistema` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagem`
--

CREATE TABLE IF NOT EXISTS `tb_imagem` (
  `co_imagem` int(10) unsigned NOT NULL,
  `ds_caminho` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_negociacao`
--

CREATE TABLE IF NOT EXISTS `tb_negociacao` (
  `co_negociacao` int(11) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  `ds_observacao` text,
  `co_cliente` int(11) NOT NULL DEFAULT '0',
  `co_fornecedor` int(11) NOT NULL DEFAULT '0',
  `co_usuario` int(10) NOT NULL,
  `co_tipo_negociacao` int(11) NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_negociacao_produto`
--

CREATE TABLE IF NOT EXISTS `tb_negociacao_produto` (
  `co_negociacao` int(11) NOT NULL,
  `co_produto` int(11) NOT NULL,
  `nu_valor` decimal(10,0) NOT NULL,
  `nu_quantidade` int(11) NOT NULL,
  `ds_observacao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pacote`
--

CREATE TABLE IF NOT EXISTS `tb_pacote` (
  `co_pacote` int(11) NOT NULL,
  `no_pacote` varchar(80) DEFAULT NULL,
  `nu_valor` decimal(10,0) DEFAULT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo /  I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pagamento`
--

CREATE TABLE IF NOT EXISTS `tb_pagamento` (
  `co_pagamento` int(11) NOT NULL,
  `nu_total` decimal(10,0) NOT NULL,
  `nu_valor_pago` decimal(10,0) DEFAULT NULL,
  `nu_parcelas` int(11) NOT NULL,
  `tp_situacao` varchar(1) NOT NULL COMMENT 'A  - Aberto / C - Concluido',
  `ds_observacao` text,
  `co_negociacao` int(11) NOT NULL DEFAULT '0',
  `co_tipo_pagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_parcelamento`
--

CREATE TABLE IF NOT EXISTS `tb_parcelamento` (
  `co_parcelamento` int(11) NOT NULL,
  `nu_parcela` int(11) NOT NULL,
  `nu_valor_parcela` decimal(10,0) NOT NULL,
  `nu_valor_parcela_pago` decimal(10,0) DEFAULT NULL,
  `dt_vencimento` date NOT NULL,
  `dt_vencimento_pago` date DEFAULT NULL,
  `ds_observacao` text,
  `co_pagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_perfil`
--

CREATE TABLE IF NOT EXISTS `tb_perfil` (
  `co_perfil` int(11) NOT NULL,
  `no_perfil` varchar(45) NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_perfil`
--

INSERT INTO `tb_perfil` (`co_perfil`, `no_perfil`, `st_status`, `co_cliente_sistema`) VALUES
(1, 'Master', 'A', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_perfil_funcionalidade`
--

CREATE TABLE IF NOT EXISTS `tb_perfil_funcionalidade` (
  `co_perfil` int(11) NOT NULL,
  `co_funcionalidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_perfil_funcionalidade`
--

INSERT INTO `tb_perfil_funcionalidade` (`co_perfil`, `co_funcionalidade`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_perfil_produto_detalhe`
--

CREATE TABLE IF NOT EXISTS `tb_perfil_produto_detalhe` (
  `co_produto_detalhe` int(11) NOT NULL,
  `co_perfil` int(11) NOT NULL,
  `nu_desconto` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE IF NOT EXISTS `tb_pessoa` (
  `co_pessoa` int(11) NOT NULL,
  `nu_cpf` varchar(15) NOT NULL,
  `no_pessoa` varchar(100) NOT NULL,
  `nu_rg` varchar(45) DEFAULT NULL,
  `dt_cadastro` datetime NOT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `st_sexo` varchar(1) DEFAULT NULL COMMENT 'M - Masculino ou F - Feminino',
  `st_estado_civil` varchar(1) DEFAULT NULL COMMENT 'S - Solteiro / C - Casado / D - Divorciado / O -  Outros',
  `co_endereco` int(11) NOT NULL,
  `co_contato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE IF NOT EXISTS `tb_produto` (
  `co_produto` int(11) NOT NULL,
  `no_produto` varchar(250) NOT NULL,
  `nu_estoque` int(7) NOT NULL,
  `nu_codigo` int(11) NOT NULL,
  `ds_marca` varchar(100) DEFAULT NULL,
  `dt_cadastro` date NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_categoria` int(10) unsigned NOT NULL,
  `co_unidade_venda` int(11) NOT NULL,
  `co_imagem` int(10) unsigned NOT NULL DEFAULT '0',
  `co_cliente_sistema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto_detalhe`
--

CREATE TABLE IF NOT EXISTS `tb_produto_detalhe` (
  `co_produto_detalhe` int(11) NOT NULL,
  `nu_estoque_baixo` int(11) DEFAULT NULL,
  `nu_preco` decimal(10,0) NOT NULL,
  `nu_lucro` decimal(10,0) DEFAULT NULL COMMENT 'Porcentagem % para o lucro que terá no produto',
  `nu_desconto_maximo` decimal(10,0) NOT NULL COMMENT 'Porcentagem %  para o desconto máximo aceito',
  `dt_cadastro` datetime NOT NULL,
  `co_produto` int(11) NOT NULL,
  `co_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto_promocao`
--

CREATE TABLE IF NOT EXISTS `tb_produto_promocao` (
  `co_produto_promocao` int(11) NOT NULL,
  `nu_preco_promocional` decimal(10,0) DEFAULT NULL,
  `dt_inicio` date DEFAULT NULL,
  `dt_fim` date DEFAULT NULL,
  `nu_quantidade_minima` int(11) DEFAULT NULL COMMENT 'Quantidade Mínima por compra',
  `nu_limite` int(11) DEFAULT NULL COMMENT 'Quantidade máxima por compra',
  `dt_cadastro` datetime DEFAULT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_produto` int(11) NOT NULL,
  `co_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_representante`
--

CREATE TABLE IF NOT EXISTS `tb_representante` (
  `co_representante` int(11) NOT NULL,
  `dt_cadastro` date NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_categoria`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_categoria` (
  `co_tipo_categoria` int(11) NOT NULL,
  `ds_tipo_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_negociacao`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_negociacao` (
  `co_tipo_negociacao` int(11) NOT NULL,
  `no_tipo_negociacao` varchar(45) DEFAULT NULL,
  `sg_tipo_negociacao` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_pagamento`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_pagamento` (
  `co_tipo_pagamento` int(11) NOT NULL,
  `ds_tipo_pagamento` varchar(45) DEFAULT NULL,
  `sg_tipo_pagamento` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_unidade_venda`
--

CREATE TABLE IF NOT EXISTS `tb_unidade_venda` (
  `co_unidade_venda` int(11) NOT NULL,
  `no_unidade_venda` varchar(45) NOT NULL,
  `sg_unidade_venda` varchar(3) NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `co_usuario` int(10) NOT NULL,
  `ds_login` varchar(50) NOT NULL,
  `ds_senha` varchar(100) NOT NULL,
  `ds_code` varchar(50) NOT NULL,
  `st_status` varchar(1) NOT NULL DEFAULT 'I' COMMENT '''A - Ativo / I - Inativo''',
  `dt_cadastro` datetime NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL,
  `co_imagem` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`co_usuario`, `ds_login`, `ds_senha`, `ds_code`, `st_status`, `dt_cadastro`, `co_cliente_sistema`, `co_imagem`) VALUES
(1, 'leobessa', '123456**', 'TVRJek5EVTJLaW89', 'A', '2016-10-31 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_perfil`
--

CREATE TABLE IF NOT EXISTS `tb_usuario_perfil` (
  `co_usuario` int(10) NOT NULL,
  `co_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario_perfil`
--

INSERT INTO `tb_usuario_perfil` (`co_usuario`, `co_perfil`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_auditoria`
--
ALTER TABLE `tb_auditoria`
  ADD PRIMARY KEY (`co_auditoria`,`co_usuario`,`co_cliente_sistema`),
  ADD KEY `fk_tb_auditoria_tb_usuario1_idx` (`co_usuario`),
  ADD KEY `fk_tb_auditoria_tb_empresa1_idx` (`co_cliente_sistema`);

--
-- Indexes for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`co_categoria`,`co_tipo_categoria`,`co_cliente_sistema`),
  ADD KEY `fk_tb_categoria_tb_tipo_categoria1_idx` (`co_tipo_categoria`),
  ADD KEY `fk_tb_categoria_tb_empresa1_idx` (`co_cliente_sistema`);

--
-- Indexes for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`co_cliente`,`co_cliente_sistema`,`co_pessoa`);

--
-- Indexes for table `tb_cliente_sistema`
--
ALTER TABLE `tb_cliente_sistema`
  ADD PRIMARY KEY (`co_cliente_sistema`,`co_pessoa`,`co_empresa`);

--
-- Indexes for table `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`co_contato`);

--
-- Indexes for table `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`co_empresa`,`co_contato`,`co_endereco`,`co_pessoa`);

--
-- Indexes for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD PRIMARY KEY (`co_endereco`);

--
-- Indexes for table `tb_financeiro`
--
ALTER TABLE `tb_financeiro`
  ADD PRIMARY KEY (`co_financeiro`,`co_cliente_sistema`);

--
-- Indexes for table `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  ADD PRIMARY KEY (`co_fornecedor`,`co_representante`,`co_cliente_sistema`,`co_pessoa`,`co_empresa`);

--
-- Indexes for table `tb_funcionalidade`
--
ALTER TABLE `tb_funcionalidade`
  ADD PRIMARY KEY (`co_funcionalidade`);

--
-- Indexes for table `tb_funcionalidade_pacote`
--
ALTER TABLE `tb_funcionalidade_pacote`
  ADD PRIMARY KEY (`co_funcionalidade`,`co_pacote`);

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`co_funcionario`,`co_imagem`,`co_cliente_sistema`,`co_pessoa`);

--
-- Indexes for table `tb_imagem`
--
ALTER TABLE `tb_imagem`
  ADD PRIMARY KEY (`co_imagem`);

--
-- Indexes for table `tb_negociacao`
--
ALTER TABLE `tb_negociacao`
  ADD PRIMARY KEY (`co_negociacao`,`co_cliente`,`co_fornecedor`,`co_usuario`,`co_tipo_negociacao`,`co_cliente_sistema`),
  ADD KEY `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1_idx` (`co_cliente_sistema`);

--
-- Indexes for table `tb_negociacao_produto`
--
ALTER TABLE `tb_negociacao_produto`
  ADD PRIMARY KEY (`co_negociacao`,`co_produto`);

--
-- Indexes for table `tb_pacote`
--
ALTER TABLE `tb_pacote`
  ADD PRIMARY KEY (`co_pacote`,`co_cliente_sistema`),
  ADD KEY `fk_TB_PACOTE_TB_CLIENTE_SISTEMA1_idx` (`co_cliente_sistema`);

--
-- Indexes for table `tb_pagamento`
--
ALTER TABLE `tb_pagamento`
  ADD PRIMARY KEY (`co_pagamento`,`co_negociacao`,`co_tipo_pagamento`);

--
-- Indexes for table `tb_parcelamento`
--
ALTER TABLE `tb_parcelamento`
  ADD PRIMARY KEY (`co_parcelamento`,`co_pagamento`);

--
-- Indexes for table `tb_perfil`
--
ALTER TABLE `tb_perfil`
  ADD PRIMARY KEY (`co_perfil`,`co_cliente_sistema`),
  ADD UNIQUE KEY `co_perfil_UNIQUE` (`co_perfil`);

--
-- Indexes for table `tb_perfil_funcionalidade`
--
ALTER TABLE `tb_perfil_funcionalidade`
  ADD PRIMARY KEY (`co_perfil`,`co_funcionalidade`);

--
-- Indexes for table `tb_perfil_produto_detalhe`
--
ALTER TABLE `tb_perfil_produto_detalhe`
  ADD PRIMARY KEY (`co_produto_detalhe`,`co_perfil`);

--
-- Indexes for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`co_pessoa`,`co_endereco`,`co_contato`);

--
-- Indexes for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`co_produto`,`co_categoria`,`co_unidade_venda`,`co_imagem`,`co_cliente_sistema`);

--
-- Indexes for table `tb_produto_detalhe`
--
ALTER TABLE `tb_produto_detalhe`
  ADD PRIMARY KEY (`co_produto_detalhe`,`co_produto`,`co_usuario`);

--
-- Indexes for table `tb_produto_promocao`
--
ALTER TABLE `tb_produto_promocao`
  ADD PRIMARY KEY (`co_produto_promocao`,`co_produto`,`co_usuario`);

--
-- Indexes for table `tb_representante`
--
ALTER TABLE `tb_representante`
  ADD PRIMARY KEY (`co_representante`,`co_cliente_sistema`,`co_pessoa`);

--
-- Indexes for table `tb_tipo_categoria`
--
ALTER TABLE `tb_tipo_categoria`
  ADD PRIMARY KEY (`co_tipo_categoria`);

--
-- Indexes for table `tb_tipo_negociacao`
--
ALTER TABLE `tb_tipo_negociacao`
  ADD PRIMARY KEY (`co_tipo_negociacao`);

--
-- Indexes for table `tb_tipo_pagamento`
--
ALTER TABLE `tb_tipo_pagamento`
  ADD PRIMARY KEY (`co_tipo_pagamento`);

--
-- Indexes for table `tb_unidade_venda`
--
ALTER TABLE `tb_unidade_venda`
  ADD PRIMARY KEY (`co_unidade_venda`,`co_cliente_sistema`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`co_usuario`,`co_cliente_sistema`,`co_imagem`);

--
-- Indexes for table `tb_usuario_perfil`
--
ALTER TABLE `tb_usuario_perfil`
  ADD PRIMARY KEY (`co_usuario`,`co_perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_auditoria`
--
ALTER TABLE `tb_auditoria`
  MODIFY `co_auditoria` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=214;
--
-- AUTO_INCREMENT for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `co_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `co_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_cliente_sistema`
--
ALTER TABLE `tb_cliente_sistema`
  MODIFY `co_cliente_sistema` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_contato`
--
ALTER TABLE `tb_contato`
  MODIFY `co_contato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `co_empresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
  MODIFY `co_endereco` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_financeiro`
--
ALTER TABLE `tb_financeiro`
  MODIFY `co_financeiro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  MODIFY `co_fornecedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_funcionalidade`
--
ALTER TABLE `tb_funcionalidade`
  MODIFY `co_funcionalidade` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `co_funcionario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_imagem`
--
ALTER TABLE `tb_imagem`
AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_negociacao`
--
ALTER TABLE `tb_negociacao`
  MODIFY `co_negociacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pacote`
--
ALTER TABLE `tb_pacote`
  MODIFY `co_pacote` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pagamento`
--
ALTER TABLE `tb_pagamento`
  MODIFY `co_pagamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_parcelamento`
--
ALTER TABLE `tb_parcelamento`
  MODIFY `co_parcelamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_perfil`
--
ALTER TABLE `tb_perfil`
  MODIFY `co_perfil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `co_pessoa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `co_produto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_produto_detalhe`
--
ALTER TABLE `tb_produto_detalhe`
  MODIFY `co_produto_detalhe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_produto_promocao`
--
ALTER TABLE `tb_produto_promocao`
  MODIFY `co_produto_promocao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_representante`
--
ALTER TABLE `tb_representante`
  MODIFY `co_representante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tipo_categoria`
--
ALTER TABLE `tb_tipo_categoria`
  MODIFY `co_tipo_categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_unidade_venda`
--
ALTER TABLE `tb_unidade_venda`
  MODIFY `co_unidade_venda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `co_usuario` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_negociacao`
--
ALTER TABLE `tb_negociacao`
  ADD CONSTRAINT `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1` FOREIGN KEY (`co_cliente_sistema`) REFERENCES `tb_cliente_sistema` (`co_cliente_sistema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_pacote`
--
ALTER TABLE `tb_pacote`
  ADD CONSTRAINT `fk_TB_PACOTE_TB_CLIENTE_SISTEMA1` FOREIGN KEY (`co_cliente_sistema`) REFERENCES `tb_cliente_sistema` (`co_cliente_sistema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
