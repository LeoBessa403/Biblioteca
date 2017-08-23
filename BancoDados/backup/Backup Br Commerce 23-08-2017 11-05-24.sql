CREATE DATABASE IF NOT EXISTS brcommerce;

USE brcommerce;

DROP TABLE IF EXISTS tb_acesso;


CREATE TABLE `tb_acesso` (
  `co_acesso` int(11) NOT NULL AUTO_INCREMENT,
  `ds_session_id` varchar(255) DEFAULT NULL,
  `dt_inicio_acesso` datetime DEFAULT NULL,
  `dt_fim_acesso` datetime DEFAULT NULL,
  `co_usuario` int(10) NOT NULL,
  PRIMARY KEY (`co_acesso`,`co_usuario`),
  KEY `fk_TB_ACESSO_TB_USUARIO1_idx` (`co_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


INSERT INTO tb_acesso VALUES("1","5kfhncetb74sfln8a0r2n17je4","2016-11-30 14:29:11","2016-12-06 14:46:26","1");

INSERT INTO tb_acesso VALUES("2","9ti2cplrl59qvojqr6f0l902k4","2016-12-01 15:06:48","2016-12-01 15:06:48","1");




DROP TABLE IF EXISTS tb_auditoria;


CREATE TABLE `tb_auditoria` (
  `co_auditoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_tabela` varchar(150) DEFAULT NULL,
  `dt_realizado` datetime DEFAULT NULL,
  `no_operacao` varchar(1) DEFAULT NULL,
  `ds_item_anterior` text,
  `ds_item_atual` text,
  `co_registro` int(10) DEFAULT NULL,
  `ds_perfil_usuario` text CHARACTER SET big5,
  `co_usuario` int(10) NOT NULL,
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_auditoria`,`co_usuario`,`co_cliente_sistema`),
  KEY `fk_tb_auditoria_tb_usuario1_idx` (`co_usuario`),
  KEY `fk_tb_auditoria_tb_empresa1_idx` (`co_cliente_sistema`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;


INSERT INTO tb_auditoria VALUES("1","tb_endereco","2016-12-06 14:08:59","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","54","Master","1","0");

INSERT INTO tb_auditoria VALUES("2","tb_endereco","2016-12-06 14:08:59","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","55","Master","1","0");

INSERT INTO tb_auditoria VALUES("3","tb_endereco","2016-12-06 14:08:59","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","56","Master","1","0");

INSERT INTO tb_auditoria VALUES("4","tb_endereco","2016-12-06 14:08:59","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","57","Master","1","0");

INSERT INTO tb_auditoria VALUES("5","tb_endereco","2016-12-06 14:08:59","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","58","Master","1","0");

INSERT INTO tb_auditoria VALUES("6","tb_endereco","2016-12-06 14:08:59","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","59","Master","1","0");

INSERT INTO tb_auditoria VALUES("7","tb_endereco","2016-12-06 14:08:59","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","60","Master","1","0");

INSERT INTO tb_auditoria VALUES("8","tb_endereco","2016-12-06 14:08:59","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","61","Master","1","0");

INSERT INTO tb_auditoria VALUES("9","tb_endereco","2016-12-06 14:09:00","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","62","Master","1","0");

INSERT INTO tb_auditoria VALUES("10","tb_endereco","2016-12-06 14:09:00","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","63","Master","1","0");

INSERT INTO tb_auditoria VALUES("11","tb_endereco","2016-12-06 14:09:01","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","64","Master","1","0");

INSERT INTO tb_auditoria VALUES("12","tb_endereco","2016-12-06 14:09:01","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","65","Master","1","0");

INSERT INTO tb_auditoria VALUES("13","tb_endereco","2016-12-06 14:09:01","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","66","Master","1","0");

INSERT INTO tb_auditoria VALUES("14","tb_endereco","2016-12-06 14:09:01","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","67","Master","1","0");

INSERT INTO tb_auditoria VALUES("15","tb_endereco","2016-12-06 14:09:01","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","68","Master","1","0");

INSERT INTO tb_auditoria VALUES("16","tb_endereco","2016-12-06 14:09:01","I","","ds_endereco==NOVO ENDEREÇO 2;/ds_complemento==NOVO COMPLEMENTO 2;/ds_bairro==NOVO BAIRRO 2;/nu_cep==0000002;/no_cidade==NOVA CIDADE 2;/sg_uf==FF","69","Master","1","0");

INSERT INTO tb_auditoria VALUES("17","tb_acesso","2016-12-06 14:09:23","U","co_acesso==1;/ds_session_id==5kfhncetb74sfln8a0r2n17je4;/dt_inicio_acesso==2016-11-30 14:29:11;/dt_fim_acesso==2016-12-06 14:07:17;/co_usuario==1","dt_fim_acesso==2016-12-06 14:09:23","1","","0","0");

INSERT INTO tb_auditoria VALUES("18","tb_acesso","2016-12-06 14:09:23","U","co_acesso==1;/ds_session_id==5kfhncetb74sfln8a0r2n17je4;/dt_inicio_acesso==2016-11-30 14:29:11;/dt_fim_acesso==2016-12-06 14:09:23;/co_usuario==1","dt_fim_acesso==2016-12-06 14:09:23","1","Master","1","0");

INSERT INTO tb_auditoria VALUES("19","tb_acesso","2016-12-06 14:25:21","U","co_acesso==1;/ds_session_id==5kfhncetb74sfln8a0r2n17je4;/dt_inicio_acesso==2016-11-30 14:29:11;/dt_fim_acesso==2016-12-06 14:09:23;/co_usuario==1","dt_fim_acesso==2016-12-06 14:25:21","1","","0","0");

INSERT INTO tb_auditoria VALUES("20","tb_acesso","2016-12-06 14:25:21","U","co_acesso==1;/ds_session_id==5kfhncetb74sfln8a0r2n17je4;/dt_inicio_acesso==2016-11-30 14:29:11;/dt_fim_acesso==2016-12-06 14:25:21;/co_usuario==1","dt_fim_acesso==2016-12-06 14:25:21","1","Master","1","0");

INSERT INTO tb_auditoria VALUES("21","tb_acesso","2016-12-06 14:46:26","U","co_acesso==1;/ds_session_id==5kfhncetb74sfln8a0r2n17je4;/dt_inicio_acesso==2016-11-30 14:29:11;/dt_fim_acesso==2016-12-06 14:25:21;/co_usuario==1","dt_fim_acesso==2016-12-06 14:46:26","1","","0","0");

INSERT INTO tb_auditoria VALUES("22","tb_acesso","2016-12-06 14:46:26","U","co_acesso==1;/ds_session_id==5kfhncetb74sfln8a0r2n17je4;/dt_inicio_acesso==2016-11-30 14:29:11;/dt_fim_acesso==2016-12-06 14:46:26;/co_usuario==1","dt_fim_acesso==2016-12-06 14:46:26","1","Master","1","0");




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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_cliente;


CREATE TABLE `tb_cliente` (
  `co_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`co_cliente`,`co_cliente_sistema`,`co_pessoa`),
  KEY `fk_tb_cliente_tb_empresa1_idx` (`co_cliente_sistema`),
  KEY `fk_TB_CLIENTE_TB_PESSOA1_idx` (`co_pessoa`),
  CONSTRAINT `fk_tb_cliente_tb_empresa1` FOREIGN KEY (`co_cliente_sistema`) REFERENCES `tb_cliente_sistema` (`co_cliente_sistema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_cliente_sistema;


CREATE TABLE `tb_cliente_sistema` (
  `co_cliente_sistema` int(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` date NOT NULL,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_pessoa` int(11) NOT NULL DEFAULT '0',
  `co_empresa` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`co_cliente_sistema`,`co_pessoa`,`co_empresa`),
  KEY `fk_TB_CLIENTE_SISTEMA_TB_PESSOA1_idx` (`co_pessoa`),
  KEY `fk_TB_CLIENTE_SISTEMA_TB_EMPRESA1_idx` (`co_empresa`),
  CONSTRAINT `fk_TB_CLIENTE_SISTEMA_TB_PESSOA1` FOREIGN KEY (`co_pessoa`) REFERENCES `tb_pessoa` (`co_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO tb_cliente_sistema VALUES("1","2016-11-18","","I","1","1");




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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


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
  `co_pessoa` int(11) NOT NULL COMMENT 'Responsável pela Empresa',
  `co_endereco` int(11) NOT NULL,
  PRIMARY KEY (`co_empresa`,`co_contato`,`co_pessoa`,`co_endereco`),
  KEY `fk_tb_empresa_tb_contato1_idx` (`co_contato`),
  KEY `fk_TB_EMPRESA_TB_PESSOA1_idx` (`co_pessoa`),
  KEY `fk_TB_EMPRESA_TB_ENDERECO1_idx` (`co_endereco`),
  CONSTRAINT `fk_TB_EMPRESA_TB_PESSOA1` FOREIGN KEY (`co_pessoa`) REFERENCES `tb_pessoa` (`co_pessoa`),
  CONSTRAINT `fk_tb_empresa_tb_contato10` FOREIGN KEY (`co_contato`) REFERENCES `tb_contato` (`co_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO tb_empresa VALUES("1","Nome da Empresa","Nome de fantasia","2016-11-18","","","","I","1","1","1");




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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;


INSERT INTO tb_endereco VALUES("1","qr 403 conjunto 10 casa 28","","Samambaia Norte","72319111","Brasília","DF");

INSERT INTO tb_endereco VALUES("2","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("3","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("4","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("5","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("6","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("7","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("8","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("9","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("10","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("11","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("12","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("13","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("14","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("15","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("16","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("17","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("18","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("19","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("20","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("21","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("22","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("23","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("24","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("25","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("26","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("27","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("28","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("29","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("30","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("31","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("32","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("33","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("34","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("35","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("36","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("37","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("38","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("39","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("40","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("41","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("42","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("43","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("44","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("45","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("46","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("47","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("48","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("49","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("50","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("51","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("52","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("53","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("54","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("55","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("56","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("57","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("58","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("59","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("60","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("61","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("62","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("63","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("64","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("65","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("66","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("67","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("68","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");

INSERT INTO tb_endereco VALUES("69","NOVO ENDEREÇO 2","NOVO COMPLEMENTO 2","NOVO BAIRRO 2","0000002","NOVA CIDADE 2","FF");




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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





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
  KEY `fk_tb_fornecedor_tb_empresadwd1_idx` (`co_cliente_sistema`),
  KEY `fk_TB_FORNECEDOR_TB_PESSOA1_idx` (`co_pessoa`),
  KEY `fk_TB_FORNECEDOR_TB_EMPRESA1_idx` (`co_empresa`),
  CONSTRAINT `fk_tb_fornecedor_tb_representante1` FOREIGN KEY (`co_representante`) REFERENCES `tb_representante` (`co_representante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_funcionalidade;


CREATE TABLE `tb_funcionalidade` (
  `co_funcionalidade` int(11) NOT NULL AUTO_INCREMENT,
  `no_funcionalidade` varchar(150) NOT NULL,
  `ds_rota` varchar(250) NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  PRIMARY KEY (`co_funcionalidade`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;


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
  KEY `fk_tb_funcionario_tb_cliente_sistema_idx` (`co_cliente_sistema`),
  KEY `fk_TB_FUNCIONARIO_TB_PESSOA1_idx` (`co_pessoa`),
  CONSTRAINT `fk_tb_funcionario_tb_foto1` FOREIGN KEY (`co_imagem`) REFERENCES `tb_imagem` (`co_imagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_imagem;


CREATE TABLE `tb_imagem` (
  `co_imagem` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ds_caminho` varchar(150) NOT NULL,
  PRIMARY KEY (`co_imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO tb_imagem VALUES("1","");




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
  KEY `fk_tb_negociacao_tb_cliente1_idx` (`co_cliente`),
  KEY `fk_tb_negociacao_tb_fornecedor1_idx` (`co_fornecedor`),
  KEY `fk_tb_negociacao_tb_usuario1_idx` (`co_usuario`),
  KEY `fk_tb_negociacao_tb_tipo_negociacao1_idx` (`co_tipo_negociacao`),
  KEY `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1_idx` (`co_cliente_sistema`),
  CONSTRAINT `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1` FOREIGN KEY (`co_cliente_sistema`) REFERENCES `tb_cliente_sistema` (`co_cliente_sistema`),
  CONSTRAINT `fk_tb_negociacao_tb_usuario1` FOREIGN KEY (`co_usuario`) REFERENCES `tb_usuario` (`co_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_pagamento;


CREATE TABLE `tb_pagamento` (
  `co_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `nu_total` decimal(10,0) NOT NULL,
  `nu_valor_pago` decimal(10,0) DEFAULT NULL,
  `nu_parcelas` int(11) NOT NULL,
  `tp_situacao` varchar(1) NOT NULL COMMENT 'A  - Aberto / C - Concluido',
  `ds_observacao` text,
  `co_tipo_pagamento` int(11) NOT NULL,
  `co_negociacao` int(11) NOT NULL,
  PRIMARY KEY (`co_pagamento`,`co_tipo_pagamento`,`co_negociacao`),
  KEY `fk_tb_pagamento_tb_tipo_pagamento1_idx` (`co_tipo_pagamento`),
  KEY `fk_TB_PAGAMENTO_TB_NEGOCIACAO1_idx` (`co_negociacao`),
  CONSTRAINT `fk_tb_pagamento_tb_tipo_pagamento1` FOREIGN KEY (`co_tipo_pagamento`) REFERENCES `tb_tipo_pagamento` (`co_tipo_pagamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_perfil;


CREATE TABLE `tb_perfil` (
  `co_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `no_perfil` varchar(45) NOT NULL,
  `st_status` varchar(1) NOT NULL DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`co_perfil`,`co_cliente_sistema`),
  KEY `fk_tb_perfil_tb_empresa1_idx` (`co_cliente_sistema`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


INSERT INTO tb_perfil VALUES("1","Master","A","1");

INSERT INTO tb_perfil VALUES("2","Teste","A","1");




DROP TABLE IF EXISTS tb_perfil_funcionalidade;


CREATE TABLE `tb_perfil_funcionalidade` (
  `co_perfil_funcionalidade` int(11) NOT NULL AUTO_INCREMENT,
  `co_perfil` int(11) NOT NULL,
  `co_funcionalidade` int(11) NOT NULL,
  PRIMARY KEY (`co_perfil_funcionalidade`,`co_perfil`,`co_funcionalidade`),
  KEY `fk_tb_perfil_tb_funcionalidade_tb_funcionalidade1_idx` (`co_funcionalidade`),
  KEY `fk_tb_perfil_tb_funcionalidade_tb_perfil1_idx` (`co_perfil`),
  CONSTRAINT `fk_tb_perfil_tb_funcionalidade_tb_perfil1` FOREIGN KEY (`co_perfil`) REFERENCES `tb_perfil` (`co_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


INSERT INTO tb_perfil_funcionalidade VALUES("1","1","1");

INSERT INTO tb_perfil_funcionalidade VALUES("2","1","2");

INSERT INTO tb_perfil_funcionalidade VALUES("3","1","4");

INSERT INTO tb_perfil_funcionalidade VALUES("4","2","5");




DROP TABLE IF EXISTS tb_perfil_produto_detalhe;


CREATE TABLE `tb_perfil_produto_detalhe` (
  `co_perfil_produto_detalhe` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `co_produto_detalhe` int(11) NOT NULL,
  `co_perfil` int(11) NOT NULL,
  `nu_desconto` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`co_perfil_produto_detalhe`,`co_produto_detalhe`,`co_perfil`),
  KEY `fk_tb_produto_detalhe_tb_perfil_tb_perfil1_idx` (`co_perfil`),
  KEY `fk_tb_produto_detalhe_tb_perfil_tb_produto_detalhe1_idx` (`co_produto_detalhe`),
  CONSTRAINT `fk_tb_produto_detalhe_tb_perfil_tb_produto_detalhe1` FOREIGN KEY (`co_produto_detalhe`) REFERENCES `tb_produto_detalhe` (`co_produto_detalhe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





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
  KEY `fk_TB_PESSOA_TB_CONTATO1_idx` (`co_contato`),
  CONSTRAINT `fk_TB_PESSOA_TB_ENDERECO1` FOREIGN KEY (`co_endereco`) REFERENCES `tb_endereco` (`co_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


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
  `co_cliente_sistema` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`co_produto`,`co_categoria`,`co_unidade_venda`,`co_imagem`,`co_cliente_sistema`),
  KEY `fk_tb_produto_tb_categoria1_idx` (`co_categoria`),
  KEY `fk_tb_produto_tb_unidade_venda1_idx` (`co_unidade_venda`),
  KEY `fk_tb_produto_tb_foto1_idx` (`co_imagem`),
  KEY `fk_tb_produto_tb_empresa1_idx` (`co_cliente_sistema`),
  CONSTRAINT `fk_tb_produto_tb_foto1` FOREIGN KEY (`co_imagem`) REFERENCES `tb_imagem` (`co_imagem`),
  CONSTRAINT `fk_tb_produto_tb_unidade_venda1` FOREIGN KEY (`co_unidade_venda`) REFERENCES `tb_unidade_venda` (`co_unidade_venda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





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
  KEY `fk_tb_produto_promocao_tb_usuario1_idx` (`co_usuario`),
  CONSTRAINT `fk_tb_promocao_produto_tb_produto1` FOREIGN KEY (`co_produto`) REFERENCES `tb_produto` (`co_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_representante;


CREATE TABLE `tb_representante` (
  `co_representante` int(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` date NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`co_representante`,`co_cliente_sistema`,`co_pessoa`),
  KEY `fk_tb_representante_tb_empresa1_idx` (`co_cliente_sistema`),
  KEY `fk_TB_REPRESENTANTE_TB_PESSOA1_idx` (`co_pessoa`),
  CONSTRAINT `fk_tb_representante_tb_empresa1` FOREIGN KEY (`co_cliente_sistema`) REFERENCES `tb_cliente_sistema` (`co_cliente_sistema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_tipo_categoria;


CREATE TABLE `tb_tipo_categoria` (
  `co_tipo_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `ds_tipo_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`co_tipo_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_tipo_negociacao;


CREATE TABLE `tb_tipo_negociacao` (
  `co_tipo_negociacao` int(11) NOT NULL AUTO_INCREMENT,
  `no_tipo_negociacao` varchar(45) DEFAULT NULL,
  `sg_tipo_negociacao` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`co_tipo_negociacao`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_unidade_venda;


CREATE TABLE `tb_unidade_venda` (
  `co_unidade_venda` int(11) NOT NULL AUTO_INCREMENT,
  `no_unidade_venda` varchar(45) NOT NULL,
  `sg_unidade_venda` varchar(3) NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_cliente_sistema` int(11) NOT NULL,
  PRIMARY KEY (`co_unidade_venda`,`co_cliente_sistema`),
  KEY `fk_tb_unidade_venda_tb_empresa1_idx` (`co_cliente_sistema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





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
  KEY `fk_tb_usuario_tb_empresa1_idx` (`co_cliente_sistema`),
  KEY `fk_TB_USUARIO_TB_IMAGEM1_idx` (`co_imagem`),
  KEY `fk_TB_USUARIO_TB_PESSOA1_idx` (`co_pessoa`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO tb_usuario VALUES("1","leobessa","123456**","TVRJek5EVTJLaW89","A","2016-10-31 00:00:00","1","1","1");




DROP TABLE IF EXISTS tb_usuario_perfil;


CREATE TABLE `tb_usuario_perfil` (
  `co_usuario_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `co_usuario` int(11) NOT NULL,
  `co_perfil` int(11) NOT NULL,
  PRIMARY KEY (`co_usuario_perfil`,`co_usuario`,`co_perfil`),
  KEY `fk_tb_usuario_tb_perfil_tb_perfil1_idx` (`co_perfil`),
  KEY `fk_tb_usuario_tb_perfil_tb_usuario_idx` (`co_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO tb_usuario_perfil VALUES("1","1","1");




