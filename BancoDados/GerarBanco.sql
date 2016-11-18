-- MySQL Workbench Synchronization
    -- Generated: 2016-11-11 18:51
    -- Model: New Model
    -- Version: 1.0
    -- Project: Name of the project
    -- Author: Leo

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_AUDITORIA` (
    `co_auditoria` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_tabela` VARCHAR(150) NULL DEFAULT NULL,
  `dt_realizado` DATETIME NULL DEFAULT NULL,
  `no_operacao` VARCHAR(1) NULL DEFAULT NULL,
  `ds_item_anterior` TEXT NULL DEFAULT NULL,
  `ds_item_atual` TEXT NULL DEFAULT NULL,
  `co_registro` INT(10) NULL DEFAULT NULL,
  `ds_perfil_usuario` TEXT NULL DEFAULT NULL,
  `co_usuario` INT(10) NOT NULL,
  `co_cliente_sistema` INT(11) NOT NULL,
  PRIMARY KEY (`co_auditoria`, `co_usuario`, `co_cliente_sistema`),
  INDEX `fk_tb_auditoria_tb_usuario1_idx` (`co_usuario` ASC),
  INDEX `fk_tb_auditoria_tb_empresa1_idx` (`co_cliente_sistema` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CATEGORIA` (
    `co_categoria` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_categoria` VARCHAR(40) NOT NULL,
  `nu_lucro` DECIMAL NULL DEFAULT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_tipo_categoria` INT(11) NOT NULL,
  `co_cliente_sistema` INT(11) NOT NULL,
  PRIMARY KEY (`co_categoria`, `co_tipo_categoria`, `co_cliente_sistema`),
  INDEX `fk_tb_categoria_tb_tipo_categoria1_idx` (`co_tipo_categoria` ASC),
  INDEX `fk_tb_categoria_tb_empresa1_idx` (`co_cliente_sistema` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_IMAGEM` (
    `co_imagem` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ds_caminho` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`co_imagem`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_FUNCIONALIDADE` (
    `co_funcionalidade` INT(11) NOT NULL AUTO_INCREMENT,
  `no_funcionalidade` VARCHAR(150) NOT NULL,
  `ds_rota` VARCHAR(250) NOT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  PRIMARY KEY (`co_funcionalidade`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PERFIL` (
    `co_perfil` INT(11) NOT NULL AUTO_INCREMENT,
  `no_perfil` VARCHAR(45) NOT NULL,
  `st_status` VARCHAR(1) NOT NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_cliente_sistema` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`co_perfil`, `co_cliente_sistema`),
  INDEX `fk_tb_perfil_tb_empresa1_idx` (`co_cliente_sistema` ASC),
  CONSTRAINT `fk_tb_perfil_tb_empresa1`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_USUARIO` (
    `co_usuario` INT(10) NOT NULL AUTO_INCREMENT,
  `ds_login` VARCHAR(50) NOT NULL,
  `ds_senha` VARCHAR(100) NOT NULL,
  `ds_code` VARCHAR(50) NOT NULL,
  `st_status` VARCHAR(1) NOT NULL DEFAULT 'I' COMMENT '\'A - Ativo / I - Inativo\'',
  `dt_cadastro` DATETIME NOT NULL,
  `co_cliente_sistema` INT(11) NULL DEFAULT NULL,
  `co_imagem` INT(10) NULL DEFAULT NULL,
  `co_pessoa` INT(11) NOT NULL,
  PRIMARY KEY (`co_usuario`, `co_cliente_sistema`, `co_imagem`, `co_pessoa`),
  INDEX `fk_tb_usuario_tb_empresa1_idx` (`co_cliente_sistema` ASC),
  INDEX `fk_TB_USUARIO_TB_IMAGEM1_idx` (`co_imagem` ASC),
  INDEX `fk_TB_USUARIO_TB_PESSOA1_idx` (`co_pessoa` ASC),
  CONSTRAINT `fk_tb_usuario_tb_empresa1`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`),
  CONSTRAINT `fk_TB_USUARIO_TB_IMAGEM1`
    FOREIGN KEY (`co_imagem`)
    REFERENCES `brcommerce`.`TB_IMAGEM` (`co_imagem`),
  CONSTRAINT `fk_TB_USUARIO_TB_PESSOA1`
    FOREIGN KEY (`co_pessoa`)
    REFERENCES `brcommerce`.`TB_PESSOA` (`co_pessoa`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_USUARIO_PERFIL` (
    `co_usuario_perfil` INT(11) NOT NULL AUTO_INCREMENT,
  `co_usuario` INT(10) NOT NULL,
  `co_perfil` INT(11) NOT NULL,
  PRIMARY KEY (`co_usuario_perfil`, `co_usuario`, `co_perfil`),
  INDEX `fk_tb_usuario_tb_perfil_tb_perfil1_idx` (`co_perfil` ASC),
  INDEX `fk_tb_usuario_tb_perfil_tb_usuario_idx` (`co_usuario` ASC),
  CONSTRAINT `fk_tb_usuario_tb_perfil_tb_usuario`
    FOREIGN KEY (`co_usuario`)
    REFERENCES `brcommerce`.`TB_USUARIO` (`co_usuario`),
  CONSTRAINT `fk_tb_usuario_tb_perfil_tb_perfil1`
    FOREIGN KEY (`co_perfil`)
    REFERENCES `brcommerce`.`TB_PERFIL` (`co_perfil`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PERFIL_FUNCIONALIDADE` (
    `co_perfil_funcionalidade` INT(11) NOT NULL AUTO_INCREMENT,
  `co_perfil` INT(11) NOT NULL,
  `co_funcionalidade` INT(11) NOT NULL,
  PRIMARY KEY (`co_perfil_funcionalidade`, `co_perfil`, `co_funcionalidade`),
  INDEX `fk_tb_perfil_tb_funcionalidade_tb_funcionalidade1_idx` (`co_funcionalidade` ASC),
  INDEX `fk_tb_perfil_tb_funcionalidade_tb_perfil1_idx` (`co_perfil` ASC),
  CONSTRAINT `fk_tb_perfil_tb_funcionalidade_tb_perfil1`
    FOREIGN KEY (`co_perfil`)
    REFERENCES `brcommerce`.`TB_PERFIL` (`co_perfil`),
  CONSTRAINT `fk_tb_perfil_tb_funcionalidade_tb_funcionalidade1`
    FOREIGN KEY (`co_funcionalidade`)
    REFERENCES `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CLIENTE_SISTEMA` (
    `co_cliente_sistema` INT(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` DATE NOT NULL,
  `ds_observacao` TEXT NULL DEFAULT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_pessoa` INT(11) NULL DEFAULT NULL,
  `co_empresa` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`co_cliente_sistema`, `co_pessoa`, `co_empresa`),
  INDEX `fk_TB_CLIENTE_SISTEMA_TB_PESSOA1_idx` (`co_pessoa` ASC),
  INDEX `fk_TB_CLIENTE_SISTEMA_TB_EMPRESA1_idx` (`co_empresa` ASC),
  CONSTRAINT `fk_TB_CLIENTE_SISTEMA_TB_PESSOA1`
    FOREIGN KEY (`co_pessoa`)
    REFERENCES `brcommerce`.`TB_PESSOA` (`co_pessoa`),
  CONSTRAINT `fk_TB_CLIENTE_SISTEMA_TB_EMPRESA1`
    FOREIGN KEY (`co_empresa`)
    REFERENCES `brcommerce`.`TB_EMPRESA` (`co_empresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PRODUTO` (
    `co_produto` INT(11) NOT NULL AUTO_INCREMENT,
  `no_produto` VARCHAR(250) NOT NULL,
  `nu_estoque` INT(7) NOT NULL,
  `nu_codigo` INT(11) NOT NULL,
  `ds_marca` VARCHAR(100) NULL DEFAULT NULL,
  `dt_cadastro` DATE NOT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_categoria` INT(10) UNSIGNED NOT NULL,
  `co_unidade_venda` INT(11) NOT NULL,
  `co_imagem` INT(10) UNSIGNED NULL DEFAULT NULL,
  `co_cliente_sistema` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`co_produto`, `co_categoria`, `co_unidade_venda`, `co_imagem`, `co_cliente_sistema`),
  INDEX `fk_tb_produto_tb_categoria1_idx` (`co_categoria` ASC),
  INDEX `fk_tb_produto_tb_unidade_venda1_idx` (`co_unidade_venda` ASC),
  INDEX `fk_tb_produto_tb_foto1_idx` (`co_imagem` ASC),
  INDEX `fk_tb_produto_tb_empresa1_idx` (`co_cliente_sistema` ASC),
  CONSTRAINT `fk_tb_produto_tb_categoria1`
    FOREIGN KEY (`co_categoria`)
    REFERENCES `brcommerce`.`TB_CATEGORIA` (`co_categoria`),
  CONSTRAINT `fk_tb_produto_tb_unidade_venda1`
    FOREIGN KEY (`co_unidade_venda`)
    REFERENCES `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`),
  CONSTRAINT `fk_tb_produto_tb_foto1`
    FOREIGN KEY (`co_imagem`)
    REFERENCES `brcommerce`.`TB_IMAGEM` (`co_imagem`),
  CONSTRAINT `fk_tb_produto_tb_empresa1`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_TIPO_CATEGORIA` (
    `co_tipo_categoria` INT(11) NOT NULL AUTO_INCREMENT,
  `ds_tipo_categoria` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`co_tipo_categoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_UNIDADE_VENDA` (
    `co_unidade_venda` INT(11) NOT NULL AUTO_INCREMENT,
  `no_unidade_venda` VARCHAR(45) NOT NULL,
  `sg_unidade_venda` VARCHAR(3) NOT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_cliente_sistema` INT(11) NOT NULL,
  PRIMARY KEY (`co_unidade_venda`, `co_cliente_sistema`),
  INDEX `fk_tb_unidade_venda_tb_empresa1_idx` (`co_cliente_sistema` ASC),
  CONSTRAINT `fk_tb_unidade_venda_tb_empresa1`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_FORNECEDOR` (
    `co_fornecedor` INT(11) NOT NULL AUTO_INCREMENT,
  `ds_observacao` TEXT NULL DEFAULT NULL,
  `dt_cadastro` DATE NOT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_representante` INT(11) NOT NULL,
  `co_cliente_sistema` INT(11) NOT NULL,
  `co_pessoa` INT(11) NOT NULL,
  `co_empresa` INT(11) NOT NULL,
  PRIMARY KEY (`co_fornecedor`, `co_representante`, `co_cliente_sistema`, `co_pessoa`, `co_empresa`),
  INDEX `fk_tb_fornecedor_tb_representante1_idx` (`co_representante` ASC),
  INDEX `fk_tb_fornecedor_tb_empresadwd1_idx` (`co_cliente_sistema` ASC),
  INDEX `fk_TB_FORNECEDOR_TB_PESSOA1_idx` (`co_pessoa` ASC),
  INDEX `fk_TB_FORNECEDOR_TB_EMPRESA1_idx` (`co_empresa` ASC),
  CONSTRAINT `fk_tb_fornecedor_tb_representante1`
    FOREIGN KEY (`co_representante`)
    REFERENCES `brcommerce`.`TB_REPRESENTANTE` (`co_representante`),
  CONSTRAINT `fk_tb_fornecedor_tb_empresadwd1_idx`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`),
  CONSTRAINT `fk_TB_FORNECEDOR_TB_PESSOA1`
    FOREIGN KEY (`co_pessoa`)
    REFERENCES `brcommerce`.`TB_PESSOA` (`co_pessoa`),
  CONSTRAINT `fk_TB_FORNECEDOR_TB_EMPRESA1`
    FOREIGN KEY (`co_empresa`)
    REFERENCES `brcommerce`.`TB_EMPRESA` (`co_empresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_REPRESENTANTE` (
    `co_representante` INT(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` DATE NOT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_cliente_sistema` INT(11) NOT NULL,
  `co_pessoa` INT(11) NOT NULL,
  PRIMARY KEY (`co_representante`, `co_cliente_sistema`, `co_pessoa`),
  INDEX `fk_tb_representante_tb_empresa1_idx` (`co_cliente_sistema` ASC),
  INDEX `fk_TB_REPRESENTANTE_TB_PESSOA1_idx` (`co_pessoa` ASC),
  CONSTRAINT `fk_tb_representante_tb_empresa1`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`),
  CONSTRAINT `fk_TB_REPRESENTANTE_TB_PESSOA1`
    FOREIGN KEY (`co_pessoa`)
    REFERENCES `brcommerce`.`TB_PESSOA` (`co_pessoa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_ENDERECO` (
    `co_endereco` INT(11) NOT NULL AUTO_INCREMENT,
  `ds_endereco` VARCHAR(150) NOT NULL,
  `ds_complemento` VARCHAR(100) NULL DEFAULT NULL,
  `ds_bairro` VARCHAR(80) NULL DEFAULT NULL,
  `nu_cep` VARCHAR(112) NULL DEFAULT NULL,
  `no_cidade` VARCHAR(80) NOT NULL,
  `sg_uf` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`co_endereco`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CONTATO` (
    `co_contato` INT(11) NOT NULL AUTO_INCREMENT,
  `nu_tel1` VARCHAR(15) NOT NULL,
  `nu_tel2` VARCHAR(15) NULL DEFAULT NULL,
  `nu_tel3` VARCHAR(15) NULL DEFAULT NULL,
  `nu_tel4` VARCHAR(25) NULL DEFAULT NULL,
  `ds_email` VARCHAR(150) NULL DEFAULT NULL,
  `ds_site` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`co_contato`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CLIENTE` (
    `co_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `ds_observacao` TEXT NULL DEFAULT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_cliente_sistema` INT(11) NOT NULL,
  `co_pessoa` INT(11) NOT NULL,
  PRIMARY KEY (`co_cliente`, `co_cliente_sistema`, `co_pessoa`),
  INDEX `fk_tb_cliente_tb_empresa1_idx` (`co_cliente_sistema` ASC),
  INDEX `fk_TB_CLIENTE_TB_PESSOA1_idx` (`co_pessoa` ASC),
  CONSTRAINT `fk_tb_cliente_tb_empresa1`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`),
  CONSTRAINT `fk_TB_CLIENTE_TB_PESSOA1`
    FOREIGN KEY (`co_pessoa`)
    REFERENCES `brcommerce`.`TB_PESSOA` (`co_pessoa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_NEGOCIACAO` (
    `co_negociacao` INT(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` DATETIME NOT NULL,
  `ds_observacao` TEXT NULL DEFAULT NULL,
  `co_cliente` INT(11) NULL DEFAULT NULL,
  `co_fornecedor` INT(11) NULL DEFAULT NULL,
  `co_usuario` INT(10) NOT NULL,
  `co_tipo_negociacao` INT(11) NOT NULL,
  `co_cliente_sistema` INT(11) NOT NULL,
  PRIMARY KEY (`co_negociacao`, `co_cliente`, `co_fornecedor`, `co_usuario`, `co_tipo_negociacao`, `co_cliente_sistema`),
  INDEX `fk_tb_negociacao_tb_cliente1_idx` (`co_cliente` ASC),
  INDEX `fk_tb_negociacao_tb_fornecedor1_idx` (`co_fornecedor` ASC),
  INDEX `fk_tb_negociacao_tb_usuario1_idx` (`co_usuario` ASC),
  INDEX `fk_tb_negociacao_tb_tipo_negociacao1_idx` (`co_tipo_negociacao` ASC),
  INDEX `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1_idx` (`co_cliente_sistema` ASC),
  CONSTRAINT `fk_tb_negociacao_tb_cliente1`
    FOREIGN KEY (`co_cliente`)
    REFERENCES `brcommerce`.`TB_CLIENTE` (`co_cliente`),
  CONSTRAINT `fk_tb_negociacao_tb_fornecedor1`
    FOREIGN KEY (`co_fornecedor`)
    REFERENCES `brcommerce`.`TB_FORNECEDOR` (`co_fornecedor`),
  CONSTRAINT `fk_tb_negociacao_tb_usuario1`
    FOREIGN KEY (`co_usuario`)
    REFERENCES `brcommerce`.`TB_USUARIO` (`co_usuario`),
  CONSTRAINT `fk_tb_negociacao_tb_tipo_negociacao1`
    FOREIGN KEY (`co_tipo_negociacao`)
    REFERENCES `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`),
  CONSTRAINT `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_NEGOCIACAO_PRODUTO` (
    `co_negociacao_produto` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_negociacao` INT(11) NOT NULL,
  `co_produto` INT(11) NOT NULL,
  `nu_valor` DECIMAL NOT NULL,
  `nu_quantidade` INT(11) NOT NULL,
  `ds_observacao` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`co_negociacao_produto`, `co_negociacao`, `co_produto`),
  INDEX `fk_tb_negociacao_tb_produto_tb_produto1_idx` (`co_produto` ASC),
  INDEX `fk_tb_negociacao_tb_produto_tb_negociacao1_idx` (`co_negociacao` ASC),
  CONSTRAINT `fk_tb_negociacao_tb_produto_tb_negociacao1`
    FOREIGN KEY (`co_negociacao`)
    REFERENCES `brcommerce`.`TB_NEGOCIACAO` (`co_negociacao`),
  CONSTRAINT `fk_tb_negociacao_tb_produto_tb_produto1`
    FOREIGN KEY (`co_produto`)
    REFERENCES `brcommerce`.`TB_PRODUTO` (`co_produto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PAGAMENTO` (
    `co_pagamento` INT(11) NOT NULL AUTO_INCREMENT,
  `nu_total` DECIMAL NOT NULL,
  `nu_valor_pago` DECIMAL NULL DEFAULT NULL,
  `nu_parcelas` INT(11) NOT NULL,
  `tp_situacao` VARCHAR(1) NOT NULL COMMENT 'A  - Aberto / C - Concluido',
  `ds_observacao` TEXT NULL DEFAULT NULL,
  `co_tipo_pagamento` INT(11) NOT NULL,
  `co_negociacao` INT(11) NOT NULL,
  PRIMARY KEY (`co_pagamento`, `co_tipo_pagamento`, `co_negociacao`),
  INDEX `fk_tb_pagamento_tb_tipo_pagamento1_idx` (`co_tipo_pagamento` ASC),
  INDEX `fk_TB_PAGAMENTO_TB_NEGOCIACAO1_idx` (`co_negociacao` ASC),
  CONSTRAINT `fk_tb_pagamento_tb_tipo_pagamento1`
    FOREIGN KEY (`co_tipo_pagamento`)
    REFERENCES `brcommerce`.`TB_TIPO_PAGAMENTO` (`co_tipo_pagamento`),
  CONSTRAINT `fk_TB_PAGAMENTO_TB_NEGOCIACAO1`
    FOREIGN KEY (`co_negociacao`)
    REFERENCES `brcommerce`.`TB_NEGOCIACAO` (`co_negociacao`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PARCELAMENTO` (
    `co_parcelamento` INT(11) NOT NULL AUTO_INCREMENT,
  `nu_parcela` INT(11) NOT NULL,
  `nu_valor_parcela` DECIMAL NOT NULL,
  `nu_valor_parcela_pago` DECIMAL NULL DEFAULT NULL,
  `dt_vencimento` DATE NOT NULL,
  `dt_vencimento_pago` DATE NULL DEFAULT NULL,
  `ds_observacao` TEXT NULL DEFAULT NULL,
  `co_pagamento` INT(11) NOT NULL,
  PRIMARY KEY (`co_parcelamento`, `co_pagamento`),
  INDEX `fk_tb_parcelamento_tb_pagamento1_idx` (`co_pagamento` ASC),
  CONSTRAINT `fk_tb_parcelamento_tb_pagamento1`
    FOREIGN KEY (`co_pagamento`)
    REFERENCES `brcommerce`.`TB_PAGAMENTO` (`co_pagamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_FUNCIONARIO` (
    `co_funcionario` INT(11) NOT NULL AUTO_INCREMENT,
  `ds_cargo` VARCHAR(70) NULL DEFAULT NULL,
  `dt_admissao` DATE NOT NULL,
  `dt_demissao` DATE NULL DEFAULT NULL,
  `dt_cadastro` DATE NOT NULL,
  `nu_carteira` VARCHAR(45) NULL DEFAULT NULL,
  `nu_salario` DECIMAL NULL DEFAULT NULL,
  `nu_horas` INT(2) NULL DEFAULT NULL COMMENT 'Quantidade de Horas Trabalhada por semana',
  `st_status` VARCHAR(1) NOT NULL COMMENT 'A - Ativo / I - Inativo',
  `co_imagem` INT(10) UNSIGNED NULL DEFAULT NULL,
  `co_cliente_sistema` INT(11) NOT NULL,
  `co_pessoa` INT(11) NOT NULL,
  PRIMARY KEY (`co_funcionario`, `co_imagem`, `co_cliente_sistema`, `co_pessoa`),
  INDEX `fk_tb_funcionario_tb_foto1_idx` (`co_imagem` ASC),
  INDEX `fk_tb_funcionario_tb_cliente_sistema_idx` (`co_cliente_sistema` ASC),
  INDEX `fk_TB_FUNCIONARIO_TB_PESSOA1_idx` (`co_pessoa` ASC),
  CONSTRAINT `fk_tb_funcionario_tb_foto1`
    FOREIGN KEY (`co_imagem`)
    REFERENCES `brcommerce`.`TB_IMAGEM` (`co_imagem`),
  CONSTRAINT `fk_tb_funcionario_tb_cliente_sistema_idx`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`),
  CONSTRAINT `fk_TB_FUNCIONARIO_TB_PESSOA1`
    FOREIGN KEY (`co_pessoa`)
    REFERENCES `brcommerce`.`TB_PESSOA` (`co_pessoa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PRODUTO_DETALHE` (
    `co_produto_detalhe` INT(11) NOT NULL AUTO_INCREMENT,
  `nu_estoque_baixo` INT(11) NULL DEFAULT NULL,
  `nu_preco` DECIMAL NOT NULL,
  `nu_lucro` DECIMAL NULL DEFAULT NULL COMMENT 'Porcentagem % para o lucro que terá no produto',
  `nu_desconto_maximo` DECIMAL NOT NULL COMMENT 'Porcentagem %  para o desconto máximo aceito',
  `dt_cadastro` DATETIME NOT NULL,
  `co_produto` INT(11) NOT NULL,
  `co_usuario` INT(10) NOT NULL,
  PRIMARY KEY (`co_produto_detalhe`, `co_produto`, `co_usuario`),
  INDEX `fk_tb_financeiro_produto_tb_produto1_idx` (`co_produto` ASC),
  INDEX `fk_tb_produto_detalhe_tb_usuario1_idx` (`co_usuario` ASC),
  CONSTRAINT `fk_tb_financeiro_produto_tb_produto1`
    FOREIGN KEY (`co_produto`)
    REFERENCES `brcommerce`.`TB_PRODUTO` (`co_produto`),
  CONSTRAINT `fk_tb_produto_detalhe_tb_usuario1`
    FOREIGN KEY (`co_usuario`)
    REFERENCES `brcommerce`.`TB_USUARIO` (`co_usuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PRODUTO_PROMOCAO` (
    `co_produto_promocao` INT(11) NOT NULL AUTO_INCREMENT,
  `nu_preco_promocional` DECIMAL NULL DEFAULT NULL,
  `dt_inicio` DATE NULL DEFAULT NULL,
  `dt_fim` DATE NULL DEFAULT NULL,
  `nu_quantidade_minima` INT(11) NULL DEFAULT NULL COMMENT 'Quantidade Mínima por compra',
  `nu_limite` INT(11) NULL DEFAULT NULL COMMENT 'Quantidade máxima por compra',
  `dt_cadastro` DATETIME NULL DEFAULT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_produto` INT(11) NOT NULL,
  `co_usuario` INT(10) NOT NULL,
  PRIMARY KEY (`co_produto_promocao`, `co_produto`, `co_usuario`),
  INDEX `fk_tb_promocao_produto_tb_produto1_idx` (`co_produto` ASC),
  INDEX `fk_tb_produto_promocao_tb_usuario1_idx` (`co_usuario` ASC),
  CONSTRAINT `fk_tb_promocao_produto_tb_produto1`
    FOREIGN KEY (`co_produto`)
    REFERENCES `brcommerce`.`TB_PRODUTO` (`co_produto`),
  CONSTRAINT `fk_tb_produto_promocao_tb_usuario1`
    FOREIGN KEY (`co_usuario`)
    REFERENCES `brcommerce`.`TB_USUARIO` (`co_usuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PERFIL_PRODUTO_DETALHE` (
    `co_perfil_produto_detalhe` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_produto_detalhe` INT(11) NOT NULL,
  `co_perfil` INT(11) NOT NULL,
  `nu_desconto` DECIMAL NULL DEFAULT NULL,
  PRIMARY KEY (`co_perfil_produto_detalhe`, `co_produto_detalhe`, `co_perfil`),
  INDEX `fk_tb_produto_detalhe_tb_perfil_tb_perfil1_idx` (`co_perfil` ASC),
  INDEX `fk_tb_produto_detalhe_tb_perfil_tb_produto_detalhe1_idx` (`co_produto_detalhe` ASC),
  CONSTRAINT `fk_tb_produto_detalhe_tb_perfil_tb_produto_detalhe1`
    FOREIGN KEY (`co_produto_detalhe`)
    REFERENCES `brcommerce`.`TB_PRODUTO_DETALHE` (`co_produto_detalhe`),
  CONSTRAINT `fk_tb_produto_detalhe_tb_perfil_tb_perfil1`
    FOREIGN KEY (`co_perfil`)
    REFERENCES `brcommerce`.`TB_PERFIL` (`co_perfil`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_TIPO_NEGOCIACAO` (
    `co_tipo_negociacao` INT(11) NOT NULL AUTO_INCREMENT,
  `no_tipo_negociacao` VARCHAR(45) NULL DEFAULT NULL,
  `sg_tipo_negociacao` VARCHAR(2) NULL DEFAULT NULL,
  PRIMARY KEY (`co_tipo_negociacao`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PACOTE` (
    `co_pacote` INT(11) NOT NULL AUTO_INCREMENT,
  `no_pacote` VARCHAR(80) NULL DEFAULT NULL,
  `nu_valor` DECIMAL NULL DEFAULT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo /  I - Inativo\'',
  `co_cliente_sistema` INT(11) NOT NULL,
  PRIMARY KEY (`co_pacote`, `co_cliente_sistema`),
  INDEX `fk_TB_PACOTE_TB_CLIENTE_SISTEMA1_idx` (`co_cliente_sistema` ASC),
  CONSTRAINT `fk_TB_PACOTE_TB_CLIENTE_SISTEMA1`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_FUNCIONALIDADE_PACOTE` (
    `co_funcionalidade_pacote` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_funcionalidade` INT(11) NOT NULL,
  `co_pacote` INT(11) NOT NULL,
  PRIMARY KEY (`co_funcionalidade_pacote`, `co_funcionalidade`, `co_pacote`),
  INDEX `fk_tb_funcionalidade_tb_pacote_tb_pacote1_idx` (`co_pacote` ASC),
  INDEX `fk_tb_funcionalidade_tb_pacote_tb_funcionalidade1_idx` (`co_funcionalidade` ASC),
  CONSTRAINT `fk_tb_funcionalidade_tb_pacote_tb_funcionalidade1`
    FOREIGN KEY (`co_funcionalidade`)
    REFERENCES `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`),
  CONSTRAINT `fk_tb_funcionalidade_tb_pacote_tb_pacote1`
    FOREIGN KEY (`co_pacote`)
    REFERENCES `brcommerce`.`TB_PACOTE` (`co_pacote`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_FINANCEIRO` (
    `co_financeiro` INT(11) NOT NULL AUTO_INCREMENT,
  `nu_parcela` INT(11) NOT NULL,
  `nu_valor_parcela` DECIMAL NOT NULL,
  `nu_valor_parcela_pago` DECIMAL NULL DEFAULT NULL,
  `dt_vencimento` DATE NOT NULL,
  `dt_vencimento_pago` DATE NULL DEFAULT NULL,
  `ds_observacao` TEXT NULL DEFAULT NULL,
  `co_cliente_sistema` INT(11) NOT NULL,
  PRIMARY KEY (`co_financeiro`, `co_cliente_sistema`),
  INDEX `fk_tb_financeiro_tb_empresa1_idx` (`co_cliente_sistema` ASC),
  CONSTRAINT `fk_tb_financeiro_tb_empresa1`
    FOREIGN KEY (`co_cliente_sistema`)
    REFERENCES `brcommerce`.`TB_CLIENTE_SISTEMA` (`co_cliente_sistema`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_TIPO_PAGAMENTO` (
    `co_tipo_pagamento` INT(11) NOT NULL AUTO_INCREMENT,
  `ds_tipo_pagamento` VARCHAR(45) NULL DEFAULT NULL,
  `sg_tipo_pagamento` VARCHAR(2) NULL DEFAULT NULL,
  PRIMARY KEY (`co_tipo_pagamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PESSOA` (
    `co_pessoa` INT(11) NOT NULL AUTO_INCREMENT,
  `nu_cpf` VARCHAR(15) NOT NULL,
  `no_pessoa` VARCHAR(100) NOT NULL,
  `nu_rg` VARCHAR(45) NULL DEFAULT NULL,
  `dt_cadastro` DATETIME NOT NULL,
  `dt_nascimento` DATE NULL DEFAULT NULL,
  `st_sexo` VARCHAR(1) NULL DEFAULT NULL COMMENT 'M - Masculino ou F - Feminino',
  `st_estado_civil` VARCHAR(1) NULL DEFAULT NULL COMMENT 'S - Solteiro / C - Casado / D - Divorciado / O -  Outros',
  `co_endereco` INT(11) NOT NULL,
  `co_contato` INT(11) NOT NULL,
  PRIMARY KEY (`co_pessoa`, `co_endereco`, `co_contato`),
  INDEX `fk_TB_PESSOA_TB_ENDERECO1_idx` (`co_endereco` ASC),
  INDEX `fk_TB_PESSOA_TB_CONTATO1_idx` (`co_contato` ASC),
  CONSTRAINT `fk_TB_PESSOA_TB_ENDERECO1`
    FOREIGN KEY (`co_endereco`)
    REFERENCES `brcommerce`.`TB_ENDERECO` (`co_endereco`),
  CONSTRAINT `fk_TB_PESSOA_TB_CONTATO1`
    FOREIGN KEY (`co_contato`)
    REFERENCES `brcommerce`.`TB_CONTATO` (`co_contato`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_EMPRESA` (
    `co_empresa` INT(11) NOT NULL AUTO_INCREMENT,
  `no_empresa` VARCHAR(250) NOT NULL COMMENT 'Razão Social',
  `no_fantasia` VARCHAR(150) NULL DEFAULT NULL,
  `dt_cadastro` DATE NOT NULL,
  `nu_cnpj` VARCHAR(20) NULL DEFAULT NULL,
  `nu_insc_estadual` VARCHAR(20) NULL DEFAULT NULL,
  `ds_observacao` TEXT NULL DEFAULT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_contato` INT(11) NOT NULL,
  `co_pessoa` INT(11) NOT NULL COMMENT 'Responsável pela Empresa',
  `co_endereco` INT(11) NOT NULL,
  PRIMARY KEY (`co_empresa`, `co_contato`, `co_pessoa`, `co_endereco`),
  INDEX `fk_tb_empresa_tb_contato1_idx` (`co_contato` ASC),
  INDEX `fk_TB_EMPRESA_TB_PESSOA1_idx` (`co_pessoa` ASC),
  INDEX `fk_TB_EMPRESA_TB_ENDERECO1_idx` (`co_endereco` ASC),
  CONSTRAINT `fk_tb_empresa_tb_contato10`
    FOREIGN KEY (`co_contato`)
    REFERENCES `brcommerce`.`TB_CONTATO` (`co_contato`),
  CONSTRAINT `fk_TB_EMPRESA_TB_PESSOA1`
    FOREIGN KEY (`co_pessoa`)
    REFERENCES `brcommerce`.`TB_PESSOA` (`co_pessoa`),
  CONSTRAINT `fk_TB_EMPRESA_TB_ENDERECO1`
    FOREIGN KEY (`co_endereco`)
    REFERENCES `brcommerce`.`TB_ENDERECO` (`co_endereco`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;