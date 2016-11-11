CREATE DATABASE IF NOT EXISTS brcommerce;

USE brcommerce;

DROP TABLE IF EXISTS tb_auditoria;


CREATE TABLE `tb_auditoria` (
  `co_auditoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_tabela` varchar(150) DEFAULT NULL,
  `dt_realizado` datetime DEFAULT NULL,
  `no_operacao` varchar(1) DEFAULT NULL,
  `ds_item_anterior` text,
  `ds_item_atual` text,
  `co_registro` int(10) DEFAULT NULL,
  `ds_perfil_usuario` text,
  `co_usuario` int(10) NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_auditoria`,`co_usuario`,`co_cliente_sistema`),
  KEY `fk_tb_auditoria_tb_usuario1_idx` (`co_usuario`),
  KEY `fk_tb_auditoria_tb_empresa1_idx` (`co_cliente_sistema`)
) ENGINE=MyISAM AUTO_INCREMENT=214 DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_categoria;


CREATE TABLE `tb_categoria` (
  `co_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_categoria` varchar(40) NOT NULL,
  `nu_lucro` decimal(10,0) DEFAULT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_tipo_categoria` int(11) NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_categoria`,`co_tipo_categoria`,`co_cliente_sistema`),
  KEY `fk_tb_categoria_tb_tipo_categoria1_idx` (`co_tipo_categoria`),
  KEY `fk_tb_categoria_tb_empresa1_idx` (`co_cliente_sistema`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_cliente;


CREATE TABLE `tb_cliente` (
  `co_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`co_cliente`,`co_cliente_sistema`,`co_pessoa`),
  KEY `fk_tb_cliente_tb_empresa1_idx` (`co_cliente_sistema`),
  KEY `fk_TB_CLIENTE_TB_PESSOA1_idx` (`co_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_cliente_sistema;


CREATE TABLE `tb_cliente_sistema` (
  `co_cliente_sistema` int(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` date NOT NULL,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_pessoa` int(11) NOT NULL,
  `co_empresa` int(11) NOT NULL,
  PRIMARY KEY (`co_cliente_sistema`,`co_pessoa`,`co_empresa`),
  KEY `fk_TB_CLIENTE_SISTEMA_TB_PESSOA1_idx` (`co_pessoa`),
  KEY `fk_TB_CLIENTE_SISTEMA_TB_EMPRESA1_idx` (`co_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_contato;


CREATE TABLE `tb_contato` (
  `co_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nu_tel1` varchar(15) NOT NULL,
  `nu_tel2` varchar(15) DEFAULT NULL,
  `nu_tel3` varchar(15) DEFAULT NULL,
  `nu_tel4` varchar(25) DEFAULT NULL,
  `ds_email` varchar(150) DEFAULT NULL,
  `ds_site` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`co_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


INSERT INTO tb_contato VALUES("1","61993274991","6130826060","","","leonardomcbessa@gmail.com","");




DROP TABLE IF EXISTS tb_empresa;


CREATE TABLE `tb_empresa` (
  `co_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `no_empresa` varchar(250) NOT NULL COMMENT 'Razão Social',
  `no_fantasia` varchar(150) DEFAULT NULL,
  `dt_cadastro` date NOT NULL,
  `nu_cnpj` varchar(20) DEFAULT NULL,
  `nu_insc_estadual` varchar(20) DEFAULT NULL,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_contato` int(11) NOT NULL,
  `co_endereco` int(11) NOT NULL DEFAULT '0',
  `co_pessoa` int(11) NOT NULL COMMENT 'Responsável pela Empresa',
  PRIMARY KEY (`co_empresa`,`co_contato`,`co_endereco`,`co_pessoa`),
  KEY `fk_tb_empresa_tb_contato1_idx` (`co_contato`),
  KEY `fk_tb_empresa_tb_endereco1_idx` (`co_endereco`),
  KEY `fk_TB_EMPRESA_TB_PESSOA1_idx` (`co_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_endereco;


CREATE TABLE `tb_endereco` (
  `co_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `ds_endereco` varchar(150) NOT NULL,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `ds_bairro` varchar(80) DEFAULT NULL,
  `nu_cep` varchar(112) DEFAULT NULL,
  `no_cidade` varchar(80) NOT NULL,
  `sg_uf` varchar(2) NOT NULL,
  PRIMARY KEY (`co_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


INSERT INTO tb_endereco VALUES("1","qr 403 conjunto 10 casa 28","","Samambaia Norte","72319111","Brasília","DF");




DROP TABLE IF EXISTS tb_financeiro;


CREATE TABLE `tb_financeiro` (
  `co_financeiro` int(11) NOT NULL AUTO_INCREMENT,
  `nu_parcela` int(11) NOT NULL,
  `nu_valor_parcela` decimal(10,0) NOT NULL,
  `nu_valor_parcela_pago` decimal(10,0) DEFAULT NULL,
  `dt_vencimento` date NOT NULL,
  `dt_vencimento_pago` date DEFAULT NULL,
  `ds_observacao` text,
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_financeiro`,`co_cliente_sistema`),
  KEY `fk_tb_financeiro_tb_empresa1_idx` (`co_cliente_sistema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_fornecedor;


CREATE TABLE `tb_fornecedor` (
  `co_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `ds_observacao` text,
  `dt_cadastro` date NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_representante` int(11) NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  `co_empresa` int(11) NOT NULL,
  PRIMARY KEY (`co_fornecedor`,`co_representante`,`co_cliente_sistema`,`co_pessoa`,`co_empresa`),
  KEY `fk_tb_fornecedor_tb_representante1_idx` (`co_representante`),
  KEY `fk_tb_fornecedor_tb_empresa1_idx` (`co_cliente_sistema`),
  KEY `fk_TB_FORNECEDOR_TB_PESSOA1_idx` (`co_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_funcionalidade;


CREATE TABLE `tb_funcionalidade` (
  `co_funcionalidade` int(11) NOT NULL AUTO_INCREMENT,
  `no_funcionalidade` varchar(150) NOT NULL,
  `ds_rota` varchar(250) NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  PRIMARY KEY (`co_funcionalidade`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


INSERT INTO tb_funcionalidade VALUES("1","Perfil Master","Admin/Index/SuperPerfil","A");

INSERT INTO tb_funcionalidade VALUES("2","Auditoria Listar","Admin/Auditoria/ListarAuditoria","A");

INSERT INTO tb_funcionalidade VALUES("3","Auditoria Detalhar","Admin/Auditoria/DetalharAuditoria","A");

INSERT INTO tb_funcionalidade VALUES("4","Usuario Cadastrar","Admin/Usuario/CadastroUsuario","A");

INSERT INTO tb_funcionalidade VALUES("5","Usuario Listar","Admin/Usuario/ListarUsuario","A");

INSERT INTO tb_funcionalidade VALUES("6","Meu Usuario","Admin/Usuario/MeuPerfilUsuario","A");

INSERT INTO tb_funcionalidade VALUES("7","Perfil Listar","Admin/Perfil/ListarPerfil","A");

INSERT INTO tb_funcionalidade VALUES("8","Perfil Cadastrar","Admin/Perfil/CadastroPerfil","A");

INSERT INTO tb_funcionalidade VALUES("9","Funcionalidade Listar","Admin/Funcionalidade/ListarFuncionalidade","A");

INSERT INTO tb_funcionalidade VALUES("10","Funcionalidade Cadastrar","Admin/Funcionalidade/CadastroFuncionalidade","A");

INSERT INTO tb_funcionalidade VALUES("11","Funcionalidades Perfil","Admin/Funcionalidade/FuncionalidadesPerfil","A");




DROP TABLE IF EXISTS tb_funcionalidade_pacote;


CREATE TABLE `tb_funcionalidade_pacote` (
  `co_funcionalidade_pacote` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `co_funcionalidade` int(11) NOT NULL,
  `co_pacote` int(11) NOT NULL,
  PRIMARY KEY (`co_funcionalidade_pacote`,`co_funcionalidade`,`co_pacote`),
  KEY `fk_tb_funcionalidade_tb_pacote_tb_pacote1_idx` (`co_pacote`),
  KEY `fk_tb_funcionalidade_tb_pacote_tb_funcionalidade1_idx` (`co_funcionalidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_funcionario;


CREATE TABLE `tb_funcionario` (
  `co_funcionario` int(11) NOT NULL AUTO_INCREMENT,
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
  `co_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`co_funcionario`,`co_imagem`,`co_cliente_sistema`,`co_pessoa`),
  KEY `fk_tb_funcionario_tb_foto1_idx` (`co_imagem`),
  KEY `fk_tb_funcionario_tb_empresa1_idx` (`co_cliente_sistema`),
  KEY `fk_TB_FUNCIONARIO_TB_PESSOA1_idx` (`co_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_imagem;


CREATE TABLE `tb_imagem` (
  `co_imagem` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ds_caminho` varchar(150) NOT NULL,
  PRIMARY KEY (`co_imagem`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_negociacao;


CREATE TABLE `tb_negociacao` (
  `co_negociacao` int(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` datetime NOT NULL,
  `ds_observacao` text,
  `co_cliente` int(11) NOT NULL DEFAULT '0',
  `co_fornecedor` int(11) NOT NULL DEFAULT '0',
  `co_usuario` int(10) NOT NULL,
  `co_tipo_negociacao` int(11) NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_negociacao`,`co_cliente`,`co_fornecedor`,`co_usuario`,`co_tipo_negociacao`,`co_cliente_sistema`),
  KEY `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1_idx` (`co_cliente_sistema`),
  KEY `fk_tb_negociacao_tb_cliente1_idx` (`co_cliente`),
  KEY `fk_tb_negociacao_tb_fornecedor1_idx` (`co_fornecedor`),
  KEY `fk_tb_negociacao_tb_usuario1_idx` (`co_usuario`),
  KEY `fk_tb_negociacao_tb_tipo_negociacao1_idx` (`co_tipo_negociacao`),
  CONSTRAINT `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1` FOREIGN KEY (`co_cliente_sistema`) REFERENCES `tb_cliente_sistema` (`co_cliente_sistema`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_negociacao_produto;


CREATE TABLE `tb_negociacao_produto` (
  `co_negociacao_produto` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `co_negociacao` int(11) NOT NULL,
  `co_produto` int(11) NOT NULL,
  `nu_valor` decimal(10,0) NOT NULL,
  `nu_quantidade` int(11) NOT NULL,
  `ds_observacao` text,
  PRIMARY KEY (`co_negociacao_produto`,`co_negociacao`,`co_produto`),
  KEY `fk_tb_negociacao_tb_produto_tb_produto1_idx` (`co_produto`),
  KEY `fk_tb_negociacao_tb_produto_tb_negociacao1_idx` (`co_negociacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_pacote;


CREATE TABLE `tb_pacote` (
  `co_pacote` int(11) NOT NULL AUTO_INCREMENT,
  `no_pacote` varchar(80) DEFAULT NULL,
  `nu_valor` decimal(10,0) DEFAULT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo /  I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_pacote`,`co_cliente_sistema`),
  KEY `fk_TB_PACOTE_TB_CLIENTE_SISTEMA1_idx` (`co_cliente_sistema`),
  CONSTRAINT `fk_TB_PACOTE_TB_CLIENTE_SISTEMA1` FOREIGN KEY (`co_cliente_sistema`) REFERENCES `tb_cliente_sistema` (`co_cliente_sistema`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_pagamento;


CREATE TABLE `tb_pagamento` (
  `co_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `nu_total` decimal(10,0) NOT NULL,
  `nu_valor_pago` decimal(10,0) DEFAULT NULL,
  `nu_parcelas` int(11) NOT NULL,
  `tp_situacao` varchar(1) NOT NULL COMMENT 'A  - Aberto / C - Concluido',
  `ds_observacao` text,
  `co_negociacao` int(11) NOT NULL DEFAULT '0',
  `co_tipo_pagamento` int(11) NOT NULL,
  PRIMARY KEY (`co_pagamento`,`co_negociacao`,`co_tipo_pagamento`),
  KEY `fk_tb_pagamento_tb_negociacao1_idx` (`co_negociacao`),
  KEY `fk_tb_pagamento_tb_tipo_pagamento1_idx` (`co_tipo_pagamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_parcelamento;


CREATE TABLE `tb_parcelamento` (
  `co_parcelamento` int(11) NOT NULL AUTO_INCREMENT,
  `nu_parcela` int(11) NOT NULL,
  `nu_valor_parcela` decimal(10,0) NOT NULL,
  `nu_valor_parcela_pago` decimal(10,0) DEFAULT NULL,
  `dt_vencimento` date NOT NULL,
  `dt_vencimento_pago` date DEFAULT NULL,
  `ds_observacao` text,
  `co_pagamento` int(11) NOT NULL,
  PRIMARY KEY (`co_parcelamento`,`co_pagamento`),
  KEY `fk_tb_parcelamento_tb_pagamento1_idx` (`co_pagamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_perfil;


CREATE TABLE `tb_perfil` (
  `co_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `no_perfil` varchar(45) NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_perfil`,`co_cliente_sistema`),
  UNIQUE KEY `co_perfil_UNIQUE` (`co_perfil`),
  KEY `fk_tb_perfil_tb_empresa1_idx` (`co_cliente_sistema`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO tb_perfil VALUES("1","Master","A","0");




DROP TABLE IF EXISTS tb_perfil_funcionalidade;


CREATE TABLE `tb_perfil_funcionalidade` (
  `co_perfil_funcionalidade` int(11) NOT NULL AUTO_INCREMENT,
  `co_perfil` int(11) NOT NULL,
  `co_funcionalidade` int(11) NOT NULL,
  PRIMARY KEY (`co_perfil_funcionalidade`,`co_perfil`,`co_funcionalidade`),
  KEY `fk_tb_perfil_tb_funcionalidade_tb_funcionalidade1_idx` (`co_funcionalidade`),
  KEY `fk_tb_perfil_tb_funcionalidade_tb_perfil1_idx` (`co_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO tb_perfil_funcionalidade VALUES("1","1","1");




DROP TABLE IF EXISTS tb_perfil_produto_detalhe;


CREATE TABLE `tb_perfil_produto_detalhe` (
  `co_perfil_produto_detalhe` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `co_produto_detalhe` int(11) NOT NULL,
  `co_perfil` int(11) NOT NULL,
  `nu_desconto` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`co_perfil_produto_detalhe`,`co_produto_detalhe`,`co_perfil`),
  KEY `fk_tb_produto_detalhe_tb_perfil_tb_perfil1_idx` (`co_perfil`),
  KEY `fk_tb_produto_detalhe_tb_perfil_tb_produto_detalhe1_idx` (`co_produto_detalhe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_pessoa;


CREATE TABLE `tb_pessoa` (
  `co_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nu_cpf` varchar(15) NOT NULL,
  `no_pessoa` varchar(100) NOT NULL,
  `nu_rg` varchar(45) DEFAULT NULL,
  `dt_cadastro` datetime NOT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `st_sexo` varchar(1) DEFAULT NULL COMMENT 'M - Masculino ou F - Feminino',
  `st_estado_civil` varchar(1) DEFAULT NULL COMMENT 'S - Solteiro / C - Casado / D - Divorciado / O -  Outros',
  `co_endereco` int(11) NOT NULL,
  `co_contato` int(11) NOT NULL,
  PRIMARY KEY (`co_pessoa`,`co_endereco`,`co_contato`),
  KEY `fk_TB_PESSOA_TB_ENDERECO1_idx` (`co_endereco`),
  KEY `fk_TB_PESSOA_TB_CONTATO1_idx` (`co_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


INSERT INTO tb_pessoa VALUES("1","72681438187","Leonardo Machado Carvalho Bessa","2077811","2016-10-31 00:00:00","1984-07-06","M","S","1","1");




DROP TABLE IF EXISTS tb_produto;


CREATE TABLE `tb_produto` (
  `co_produto` int(11) NOT NULL AUTO_INCREMENT,
  `no_produto` varchar(250) NOT NULL,
  `nu_estoque` int(7) NOT NULL,
  `nu_codigo` int(11) NOT NULL,
  `ds_marca` varchar(100) DEFAULT NULL,
  `dt_cadastro` date NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_categoria` int(10) unsigned NOT NULL,
  `co_unidade_venda` int(11) NOT NULL,
  `co_imagem` int(10) unsigned NOT NULL DEFAULT '0',
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_produto`,`co_categoria`,`co_unidade_venda`,`co_imagem`,`co_cliente_sistema`),
  KEY `fk_tb_produto_tb_categoria1_idx` (`co_categoria`),
  KEY `fk_tb_produto_tb_unidade_venda1_idx` (`co_unidade_venda`),
  KEY `fk_tb_produto_tb_foto1_idx` (`co_imagem`),
  KEY `fk_tb_produto_tb_empresa1_idx` (`co_cliente_sistema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_produto_detalhe;


CREATE TABLE `tb_produto_detalhe` (
  `co_produto_detalhe` int(11) NOT NULL AUTO_INCREMENT,
  `nu_estoque_baixo` int(11) DEFAULT NULL,
  `nu_preco` decimal(10,0) NOT NULL,
  `nu_lucro` decimal(10,0) DEFAULT NULL COMMENT 'Porcentagem % para o lucro que terá no produto',
  `nu_desconto_maximo` decimal(10,0) NOT NULL COMMENT 'Porcentagem %  para o desconto máximo aceito',
  `dt_cadastro` datetime NOT NULL,
  `co_produto` int(11) NOT NULL,
  `co_usuario` int(10) NOT NULL,
  PRIMARY KEY (`co_produto_detalhe`,`co_produto`,`co_usuario`),
  KEY `fk_tb_financeiro_produto_tb_produto1_idx` (`co_produto`),
  KEY `fk_tb_produto_detalhe_tb_usuario1_idx` (`co_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_produto_promocao;


CREATE TABLE `tb_produto_promocao` (
  `co_produto_promocao` int(11) NOT NULL AUTO_INCREMENT,
  `nu_preco_promocional` decimal(10,0) DEFAULT NULL,
  `dt_inicio` date DEFAULT NULL,
  `dt_fim` date DEFAULT NULL,
  `nu_quantidade_minima` int(11) DEFAULT NULL COMMENT 'Quantidade Mínima por compra',
  `nu_limite` int(11) DEFAULT NULL COMMENT 'Quantidade máxima por compra',
  `dt_cadastro` datetime DEFAULT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_produto` int(11) NOT NULL,
  `co_usuario` int(10) NOT NULL,
  PRIMARY KEY (`co_produto_promocao`,`co_produto`,`co_usuario`),
  KEY `fk_tb_promocao_produto_tb_produto1_idx` (`co_produto`),
  KEY `fk_tb_produto_promocao_tb_usuario1_idx` (`co_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_representante;


CREATE TABLE `tb_representante` (
  `co_representante` int(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` date NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`co_representante`,`co_cliente_sistema`,`co_pessoa`),
  KEY `fk_tb_representante_tb_empresa1_idx` (`co_cliente_sistema`),
  KEY `fk_TB_REPRESENTANTE_TB_PESSOA1_idx` (`co_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_tipo_categoria;


CREATE TABLE `tb_tipo_categoria` (
  `co_tipo_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `ds_tipo_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`co_tipo_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_tipo_negociacao;


CREATE TABLE `tb_tipo_negociacao` (
  `co_tipo_negociacao` int(11) NOT NULL AUTO_INCREMENT,
  `no_tipo_negociacao` varchar(45) DEFAULT NULL,
  `sg_tipo_negociacao` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`co_tipo_negociacao`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;


INSERT INTO tb_tipo_negociacao VALUES("1","Compra","CP");

INSERT INTO tb_tipo_negociacao VALUES("2","Venda","VD");

INSERT INTO tb_tipo_negociacao VALUES("3","Cotação","CT");

INSERT INTO tb_tipo_negociacao VALUES("4","Orçamento","OR");

INSERT INTO tb_tipo_negociacao VALUES("5","Pagamento","PG");

INSERT INTO tb_tipo_negociacao VALUES("6","Recebimento","RC");

INSERT INTO tb_tipo_negociacao VALUES("7","Perda","PD");

INSERT INTO tb_tipo_negociacao VALUES("8","Devolução","DV");




DROP TABLE IF EXISTS tb_tipo_pagamento;


CREATE TABLE `tb_tipo_pagamento` (
  `co_tipo_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `ds_tipo_pagamento` varchar(45) DEFAULT NULL,
  `sg_tipo_pagamento` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`co_tipo_pagamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_unidade_venda;


CREATE TABLE `tb_unidade_venda` (
  `co_unidade_venda` int(11) NOT NULL AUTO_INCREMENT,
  `no_unidade_venda` varchar(45) NOT NULL,
  `sg_unidade_venda` varchar(3) NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_unidade_venda`,`co_cliente_sistema`),
  KEY `fk_tb_unidade_venda_tb_empresa1_idx` (`co_cliente_sistema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





DROP TABLE IF EXISTS tb_usuario;


CREATE TABLE `tb_usuario` (
  `co_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `ds_login` varchar(50) NOT NULL,
  `ds_senha` varchar(100) NOT NULL,
  `ds_code` varchar(50) NOT NULL,
  `st_status` varchar(1) NOT NULL DEFAULT 'I' COMMENT '''A - Ativo / I - Inativo''',
  `dt_cadastro` datetime NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL DEFAULT '0',
  `co_imagem` int(10) NOT NULL DEFAULT '0',
  `co_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`co_usuario`,`co_cliente_sistema`,`co_imagem`,`co_pessoa`),
  KEY `fk_TB_USUARIO_TB_PESSOA1_idx` (`co_pessoa`),
  KEY `fk_tb_usuario_tb_empresa1_idx` (`co_cliente_sistema`),
  KEY `fk_TB_USUARIO_TB_IMAGEM1_idx` (`co_imagem`),
  CONSTRAINT `fk_TB_USUARIO_TB_PESSOA1` FOREIGN KEY (`co_pessoa`) REFERENCES `tb_pessoa` (`co_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO tb_usuario VALUES("1","leobessa","123456**","TVRJek5EVTJLaW89","A","2016-10-31 00:00:00","0","0","1");




DROP TABLE IF EXISTS tb_usuario_perfil;


CREATE TABLE `tb_usuario_perfil` (
  `co_usuario_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `co_usuario` int(10) NOT NULL,
  `co_perfil` int(11) NOT NULL,
  PRIMARY KEY (`co_usuario_perfil`,`co_usuario`,`co_perfil`),
  KEY `fk_tb_usuario_tb_perfil_tb_perfil1_idx` (`co_perfil`),
  KEY `fk_tb_usuario_tb_perfil_tb_usuario_idx` (`co_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO tb_usuario_perfil VALUES("1","1","1");




