-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema brcommerce
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema brcommerce
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `brcommerce` DEFAULT CHARACTER SET utf8mb4 ;
USE `brcommerce` ;

-- -----------------------------------------------------
-- Table `brcommerce`.`TB_ENDERECO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_ENDERECO` (
  `co_endereco` INT NOT NULL AUTO_INCREMENT,
  `ds_endereco` VARCHAR(150) NOT NULL,
  `ds_complemento` VARCHAR(100) NULL,
  `ds_bairro` VARCHAR(80) NULL,
  `nu_cep` VARCHAR(12) NULL,
  `no_cidade` VARCHAR(80) NOT NULL,
  `sg_uf` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`co_endereco`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_CONTATO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CONTATO` (
  `co_contato` INT NOT NULL AUTO_INCREMENT,
  `nu_tel1` VARCHAR(15) NOT NULL,
  `nu_tel2` VARCHAR(15) NULL,
  `nu_tel3` VARCHAR(15) NULL,
  `nu_tel4` VARCHAR(25) NULL,
  `ds_email` VARCHAR(150) NULL,
  `ds_site` VARCHAR(150) NULL,
  PRIMARY KEY (`co_contato`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_IMAGEM`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_IMAGEM` (
  `co_imagem` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ds_caminho` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`co_imagem`))
  ENGINE = MyISAM
  DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PESSOA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PESSOA` (
  `co_pessoa` INT NOT NULL AUTO_INCREMENT,
  `nu_cpf` VARCHAR(15) NOT NULL,
  `no_pessoa` VARCHAR(100) NOT NULL,
  `nu_rg` VARCHAR(45) NULL,
  `dt_cadastro` DATETIME NOT NULL,
  `dt_nascimento` DATE NULL,
  `st_sexo` VARCHAR(1) NULL COMMENT 'M - Masculino ou F - Feminino',
  `st_estado_civil` VARCHAR(1) NULL COMMENT 'S - Solteiro / C - Casado / D - Divorciado / O -  Outros',
  `co_endereco` INT NOT NULL,
  `co_contato` INT NOT NULL,
  `co_imagem` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`co_pessoa`, `co_endereco`, `co_contato`, `co_imagem`),
  INDEX `fk_TB_PESSOA_TB_ENDERECO1_idx` (`co_endereco` ASC),
  INDEX `fk_TB_PESSOA_TB_CONTATO1_idx` (`co_contato` ASC),
  INDEX `fk_TB_PESSOA_TB_IMAGEM1_idx` (`co_imagem` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_EMPRESA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_EMPRESA` (
  `co_empresa` INT NOT NULL AUTO_INCREMENT,
  `no_empresa` VARCHAR(250) NOT NULL COMMENT 'Razão Social',
  `no_fantasia` VARCHAR(150) NULL,
  `dt_cadastro` DATETIME NOT NULL,
  `nu_cnpj` VARCHAR(20) NULL,
  `nu_insc_estadual` VARCHAR(20) NULL,
  `ds_observacao` TEXT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_contato` INT NOT NULL,
  `co_pessoa` INT NOT NULL COMMENT 'Responsável pela Empresa',
  `co_endereco` INT NOT NULL,
  `co_imagem` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`co_empresa`, `co_contato`, `co_pessoa`, `co_endereco`, `co_imagem`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_CONSUMIDOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CONSUMIDOR` (
  `co_consumidor` INT NOT NULL AUTO_INCREMENT COMMENT 'Cliente do Sistema',
  `dt_cadastro` DATETIME NOT NULL,
  `ds_observacao` TEXT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_pessoa` INT NULL,
  `co_empresa` INT NULL,
  PRIMARY KEY (`co_consumidor`, `co_pessoa`, `co_empresa`),
  INDEX `fk_TB_CLIENTE_SISTEMA_TB_PESSOA1_idx` (`co_pessoa` ASC),
  INDEX `fk_TB_CLIENTE_SISTEMA_TB_EMPRESA1_idx` (`co_empresa` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_USUARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_USUARIO` (
  `co_usuario` INT(10) NOT NULL AUTO_INCREMENT,
  `ds_login` VARCHAR(50) NOT NULL,
  `ds_senha` VARCHAR(100) NOT NULL,
  `ds_code` VARCHAR(50) NOT NULL COMMENT 'Senha criptografada',
  `st_status` VARCHAR(1) NOT NULL DEFAULT 'I' COMMENT '\'A - Ativo / I - Inativo\'',
  `dt_cadastro` DATETIME NOT NULL,
  `co_consumidor` INT NULL,
  `co_imagem` INT(10) NULL,
  `co_pessoa` INT NOT NULL,
  PRIMARY KEY (`co_usuario`, `co_consumidor`, `co_imagem`, `co_pessoa`),
  INDEX `fk_tb_usuario_tb_empresa1_idx` (`co_consumidor` ASC),
  INDEX `fk_TB_USUARIO_TB_IMAGEM1_idx` (`co_imagem` ASC),
  INDEX `fk_TB_USUARIO_TB_PESSOA1_idx` (`co_pessoa` ASC))
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_AUDITORIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_AUDITORIA` (
  `co_auditoria` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_tabela` VARCHAR(150) NULL,
  `dt_realizado` DATETIME NULL,
  `no_operacao` VARCHAR(1) NULL,
  `ds_item_anterior` TEXT NULL,
  `ds_item_atual` TEXT CHARACTER SET 'big5' COLLATE 'big5_chinese_ci' NULL,
  `co_registro` INT(10) NULL,
  `ds_perfil_usuario` TEXT CHARACTER SET 'big5' COLLATE 'big5_chinese_ci' NULL,
  `co_usuario` INT(10) NOT NULL,
  `co_consumidor` INT NOT NULL,
  PRIMARY KEY (`co_auditoria`, `co_usuario`, `co_consumidor`),
  INDEX `fk_tb_auditoria_tb_usuario1_idx` (`co_usuario` ASC),
  INDEX `fk_tb_auditoria_tb_empresa1_idx` (`co_consumidor` ASC))
  ENGINE = MyISAM
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_SESSAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_SESSAO` (
  `co_sessao` INT NOT NULL AUTO_INCREMENT COMMENT 'Sessão dos produtos',
  `ds_sessao` VARCHAR(100) NOT NULL COMMENT 'Sessão da categoria',
  PRIMARY KEY (`co_sessao`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_CATEGORIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CATEGORIA` (
  `co_categoria` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_categoria` VARCHAR(40) NOT NULL,
  `nu_lucro` DECIMAL NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_sessao` INT NOT NULL COMMENT 'Sessão da categoria do produto',
  `co_consumidor` INT NOT NULL,
  PRIMARY KEY (`co_categoria`, `co_sessao`, `co_consumidor`),
  INDEX `fk_tb_categoria_tb_tipo_categoria1_idx` (`co_sessao` ASC),
  INDEX `fk_tb_categoria_tb_empresa1_idx` (`co_consumidor` ASC))
  ENGINE = MyISAM
  DEFAULT CHARACTER SET = utf8
  PACK_KEYS = DEFAULT;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_FUNCIONALIDADE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_FUNCIONALIDADE` (
  `co_funcionalidade` INT(11) NOT NULL AUTO_INCREMENT,
  `no_funcionalidade` VARCHAR(150) NOT NULL,
  `ds_rota` VARCHAR(250) NOT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  PRIMARY KEY (`co_funcionalidade`))
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PERFIL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PERFIL` (
  `co_perfil` INT(11) NOT NULL AUTO_INCREMENT,
  `no_perfil` VARCHAR(45) NOT NULL COMMENT 'Nome do Perfil',
  `st_status` VARCHAR(1) NOT NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_consumidor` INT NULL COMMENT 'Código do cliente do sistema',
  PRIMARY KEY (`co_perfil`, `co_consumidor`),
  INDEX `fk_tb_perfil_tb_empresa1_idx` (`co_consumidor` ASC))
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_USUARIO_PERFIL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_USUARIO_PERFIL` (
  `co_usuario_perfil` INT(11) NOT NULL AUTO_INCREMENT,
  `co_usuario` INT(10) NOT NULL,
  `co_perfil` INT(11) NOT NULL,
  PRIMARY KEY (`co_usuario_perfil`, `co_usuario`, `co_perfil`),
  INDEX `fk_tb_usuario_tb_perfil_tb_perfil1_idx` (`co_perfil` ASC),
  INDEX `fk_tb_usuario_tb_perfil_tb_usuario_idx` (`co_usuario` ASC))
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PERFIL_FUNCIONALIDADE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PERFIL_FUNCIONALIDADE` (
  `co_perfil_funcionalidade` INT(11) NOT NULL AUTO_INCREMENT,
  `co_perfil` INT(11) NOT NULL,
  `co_funcionalidade` INT(11) NOT NULL,
  PRIMARY KEY (`co_perfil_funcionalidade`, `co_perfil`, `co_funcionalidade`))
  ENGINE = InnoDB
  DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_UNIDADE_VENDA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_UNIDADE_VENDA` (
  `co_unidade_venda` INT NOT NULL AUTO_INCREMENT COMMENT 'Manter unidade de venda',
  `no_unidade_venda` VARCHAR(45) NOT NULL COMMENT 'Nome da unidade de venda',
  `sg_unidade_venda` VARCHAR(3) NOT NULL COMMENT 'sigla da unidade de venda',
  PRIMARY KEY (`co_unidade_venda`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_UNIDADE_VENDA_CONSUMIDOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_UNIDADE_VENDA_CONSUMIDOR` (
  `co_unidade_venda_consumidor` INT NOT NULL AUTO_INCREMENT,
  `st_ativo` VARCHAR(1) NOT NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_unidade_venda` INT NOT NULL,
  `co_consumidor` INT NOT NULL,
  PRIMARY KEY (`co_unidade_venda_consumidor`, `co_unidade_venda`, `co_consumidor`),
  INDEX `fk_TB_UNIDADE_VENDA_CONSUMIDOR_TB_UNIDADE_VENDA1_idx` (`co_unidade_venda` ASC),
  INDEX `fk_TB_UNIDADE_VENDA_CONSUMIDOR_TB_CONSUMIDOR1_idx` (`co_consumidor` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_LOTE_PRODUTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_LOTE_PRODUTO` (
  `co_lote_produto` INT NOT NULL AUTO_INCREMENT,
  `dt_validade` DATE NULL,
  `dt_cadastro` DATETIME NULL,
  `ds_observacao` TEXT NULL,
  PRIMARY KEY (`co_lote_produto`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PRODUTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PRODUTO` (
  `co_produto` INT NOT NULL AUTO_INCREMENT,
  `ds_descricao` VARCHAR(250) NOT NULL COMMENT 'Descrição do produto',
  `nu_estoque` INT(7) NOT NULL COMMENT 'Estoque Atual',
  `nu_codigo` INT NOT NULL COMMENT 'Código de barras do produto',
  `nu_codigo_interno` INT(10) NULL COMMENT 'Código do Produto interno para facilitar a busca',
  `ds_marca` VARCHAR(100) NULL COMMENT 'Marca ou fabricante',
  `dt_cadastro` DATETIME NOT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_categoria` INT(10) UNSIGNED NOT NULL,
  `co_imagem` INT(10) UNSIGNED NULL,
  `co_consumidor` INT NULL,
  `co_unidade_venda_consumidor` INT NOT NULL,
  `co_lote_produto` INT NOT NULL,
  PRIMARY KEY (`co_produto`, `co_categoria`, `co_imagem`, `co_consumidor`, `co_unidade_venda_consumidor`, `co_lote_produto`),
  INDEX `fk_tb_produto_tb_categoria1_idx` (`co_categoria` ASC),
  INDEX `fk_tb_produto_tb_foto1_idx` (`co_imagem` ASC),
  INDEX `fk_tb_produto_tb_empresa1_idx` (`co_consumidor` ASC),
  INDEX `fk_TB_PRODUTO_TB_UNIDADE_VENDA_CONSUMIDOR1_idx` (`co_unidade_venda_consumidor` ASC),
  INDEX `fk_TB_PRODUTO_TB_LOTE_PRODUTO1_idx` (`co_lote_produto` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_REPRESENTANTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_REPRESENTANTE` (
  `co_representante` INT NOT NULL AUTO_INCREMENT COMMENT 'Representante do Fornecedor',
  `dt_cadastro` DATETIME NOT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_consumidor` INT NOT NULL,
  `co_pessoa` INT NOT NULL,
  PRIMARY KEY (`co_representante`, `co_consumidor`, `co_pessoa`),
  INDEX `fk_tb_representante_tb_empresa1_idx` (`co_consumidor` ASC),
  INDEX `fk_TB_REPRESENTANTE_TB_PESSOA1_idx` (`co_pessoa` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_FORNECEDOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_FORNECEDOR` (
  `co_fornecedor` INT NOT NULL AUTO_INCREMENT COMMENT 'Fornecedor do Consumidor',
  `ds_observacao` TEXT NULL,
  `dt_cadastro` DATETIME NOT NULL,
  `tp_credor` VARCHAR(1) NULL DEFAULT 'N' COMMENT 'Flag se o Fornecedor é credor\n\'S\' - Sim / \'N\' - Não',
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_representante` INT NOT NULL,
  `co_pessoa` INT NOT NULL,
  `co_empresa` INT NOT NULL,
  `co_consumidor` INT NOT NULL,
  PRIMARY KEY (`co_fornecedor`, `co_representante`, `co_pessoa`, `co_empresa`, `co_consumidor`),
  INDEX `fk_tb_fornecedor_tb_representante1_idx` (`co_representante` ASC),
  INDEX `fk_TB_FORNECEDOR_TB_PESSOA1_idx` (`co_pessoa` ASC),
  INDEX `fk_TB_FORNECEDOR_TB_EMPRESA1_idx` (`co_empresa` ASC),
  INDEX `fk_TB_FORNECEDOR_TB_CONSUMIDOR1_idx` (`co_consumidor` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_CLIENTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CLIENTE` (
  `co_cliente` INT NOT NULL AUTO_INCREMENT,
  `ds_observacao` TEXT NULL,
  `tp_credor` VARCHAR(1) NULL DEFAULT 'N' COMMENT 'Flag se o Cliente é credor\n\'S\' - Sim / \'N\' - Não',
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_consumidor` INT NOT NULL,
  `co_pessoa` INT NOT NULL,
  `co_empresa` INT NOT NULL,
  PRIMARY KEY (`co_cliente`, `co_consumidor`, `co_pessoa`, `co_empresa`),
  INDEX `fk_tb_cliente_tb_consumidor1_idx` (`co_consumidor` ASC),
  INDEX `fk_TB_CLIENTE_TB_PESSOA1_idx` (`co_pessoa` ASC),
  INDEX `fk_TB_CLIENTE_TB_EMPRESA1_idx` (`co_empresa` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_TIPO_NEGOCIACAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_TIPO_NEGOCIACAO` (
  `co_tipo_negociacao` INT NOT NULL AUTO_INCREMENT,
  `no_tipo_negociacao` VARCHAR(45) NULL,
  `sg_tipo_negociacao` VARCHAR(2) NULL,
  PRIMARY KEY (`co_tipo_negociacao`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_CAIXA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CAIXA` (
  `co_caixa` INT NOT NULL AUTO_INCREMENT COMMENT 'Abertura de caixa',
  `nu_caixa` INT(3) NULL COMMENT 'Número do Caixa',
  `dt_abertura` DATETIME NULL COMMENT 'Momento da abertura do caixa',
  `dt_fechamento` DATETIME NULL COMMENT 'Momentodo fechamento do caixa',
  `ds_observacao` TEXT NULL COMMENT 'Observação do caixa',
  `nu_troco` DECIMAL NULL COMMENT 'Valor do troco iniciado',
  `co_usuario` INT(10) NOT NULL,
  PRIMARY KEY (`co_caixa`, `co_usuario`),
  INDEX `fk_TB_CAIXA_TB_USUARIO1_idx` (`co_usuario` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_NEGOCIACAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_NEGOCIACAO` (
  `co_negociacao` INT NOT NULL AUTO_INCREMENT,
  `dt_cadastro` DATETIME NOT NULL,
  `ds_observacao` TEXT NULL,
  `co_cliente` INT NULL,
  `co_fornecedor` INT NULL,
  `co_usuario` INT(10) NOT NULL,
  `co_tipo_negociacao` INT NOT NULL,
  `co_consumidor` INT NOT NULL,
  `co_caixa` INT NOT NULL,
  PRIMARY KEY (`co_negociacao`, `co_cliente`, `co_fornecedor`, `co_usuario`, `co_tipo_negociacao`, `co_consumidor`, `co_caixa`),
  INDEX `fk_tb_negociacao_tb_cliente1_idx` (`co_cliente` ASC),
  INDEX `fk_tb_negociacao_tb_fornecedor1_idx` (`co_fornecedor` ASC),
  INDEX `fk_tb_negociacao_tb_usuario1_idx` (`co_usuario` ASC),
  INDEX `fk_tb_negociacao_tb_tipo_negociacao1_idx` (`co_tipo_negociacao` ASC),
  INDEX `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1_idx` (`co_consumidor` ASC),
  INDEX `fk_TB_NEGOCIACAO_TB_CAIXA1_idx` (`co_caixa` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_NEGOCIACAO_PRODUTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_NEGOCIACAO_PRODUTO` (
  `co_negociacao_produto` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `co_negociacao` INT NOT NULL,
  `co_produto` INT NOT NULL,
  `nu_valor` DECIMAL NOT NULL COMMENT 'Valor desse produto pra esse negociação',
  `nu_quantidade` INT NOT NULL COMMENT 'Quantidade desse produto pra esse negociação',
  `ds_observacao` TEXT NULL,
  PRIMARY KEY (`co_negociacao_produto`, `co_negociacao`, `co_produto`),
  INDEX `fk_tb_negociacao_tb_produto_tb_produto1_idx` (`co_produto` ASC),
  INDEX `fk_tb_negociacao_tb_produto_tb_negociacao1_idx` (`co_negociacao` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_TIPO_PAGAMENTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_TIPO_PAGAMENTO` (
  `co_tipo_pagamento` INT NOT NULL AUTO_INCREMENT,
  `ds_tipo_pagamento` VARCHAR(45) NULL,
  `sg_tipo_pagamento` VARCHAR(2) NULL,
  PRIMARY KEY (`co_tipo_pagamento`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PAGAMENTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PAGAMENTO` (
  `co_pagamento` INT NOT NULL AUTO_INCREMENT,
  `nu_total` DECIMAL NOT NULL,
  `nu_valor_pago` DECIMAL NULL,
  `nu_parcelas` INT NOT NULL,
  `tp_situacao` VARCHAR(1) NOT NULL DEFAULT 'A' COMMENT 'A  - Aberto / C - Concluido',
  `dt_atualizado` DATE NULL COMMENT 'Data da ultima atualização do pagamento',
  `ds_observacao` TEXT NULL,
  `co_tipo_pagamento` INT NOT NULL,
  `co_negociacao` INT NOT NULL,
  PRIMARY KEY (`co_pagamento`, `co_tipo_pagamento`, `co_negociacao`),
  INDEX `fk_tb_pagamento_tb_tipo_pagamento1_idx` (`co_tipo_pagamento` ASC),
  INDEX `fk_TB_PAGAMENTO_TB_NEGOCIACAO1_idx` (`co_negociacao` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PARCELAMENTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PARCELAMENTO` (
  `co_parcelamento` INT NOT NULL AUTO_INCREMENT,
  `nu_parcela` INT NOT NULL,
  `nu_valor_parcela` DECIMAL NOT NULL,
  `nu_valor_parcela_pago` DECIMAL NULL,
  `dt_vencimento` DATE NOT NULL,
  `dt_vencimento_pago` DATE NULL,
  `ds_observacao` TEXT NULL,
  `co_pagamento` INT NOT NULL,
  PRIMARY KEY (`co_parcelamento`, `co_pagamento`),
  INDEX `fk_tb_parcelamento_tb_pagamento1_idx` (`co_pagamento` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_FUNCIONARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_FUNCIONARIO` (
  `co_funcionario` INT NOT NULL AUTO_INCREMENT,
  `ds_cargo` VARCHAR(70) NULL,
  `dt_admissao` DATE NOT NULL,
  `dt_demissao` DATE NULL,
  `dt_cadastro` DATETIME NOT NULL,
  `nu_carteira` VARCHAR(45) NULL,
  `nu_salario` DECIMAL NULL,
  `nu_horas` INT(2) NULL COMMENT 'Quantidade de Horas Trabalhada por semana',
  `st_status` VARCHAR(1) NOT NULL COMMENT 'A - Ativo / I - Inativo',
  `co_imagem` INT(10) UNSIGNED NULL,
  `co_consumidor` INT NOT NULL,
  `co_pessoa` INT NOT NULL,
  PRIMARY KEY (`co_funcionario`, `co_imagem`, `co_consumidor`, `co_pessoa`),
  INDEX `fk_tb_funcionario_tb_foto1_idx` (`co_imagem` ASC),
  INDEX `fk_tb_funcionario_tb_empresa1_idx` (`co_consumidor` ASC),
  INDEX `fk_TB_FUNCIONARIO_TB_PESSOA1_idx` (`co_pessoa` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PRODUTO_DETALHE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PRODUTO_DETALHE` (
  `co_produto_detalhe` INT NOT NULL AUTO_INCREMENT COMMENT 'Detalhes editáveis no sistema para o produto com histórico ',
  `nu_estoque_baixo` INT NULL COMMENT 'Estoque baixo para esse produto',
  `nu_preco_venda` DECIMAL NOT NULL COMMENT 'Preço de venda para o produto',
  `nu_valor_lucro` DECIMAL NULL COMMENT 'Valor para o lucro que terá no produto',
  `nu_porc_valor_lucro` INT(2) NULL COMMENT 'Porcentagem %  para o lucro que terá no produto',
  `nu_valor_desconto_maximo` DECIMAL NOT NULL COMMENT 'Valor para o desconto máximo aceito',
  `nu_porc_desc_max` INT(2) NULL COMMENT 'Porcentagem %  para o desconto máximo aceito',
  `nu_preco_atacado` DECIMAL NULL COMMENT 'Valor do Preço para venda por atacado',
  `nu_quantidade_atacado` INT(10) NULL COMMENT 'Nú,ero da quantidade mínima para aceitar a venda por atacado',
  `dt_cadastro` DATETIME NOT NULL,
  `co_usuario` INT(10) NOT NULL,
  `co_produto` INT NOT NULL,
  PRIMARY KEY (`co_produto_detalhe`, `co_usuario`, `co_produto`),
  INDEX `fk_tb_financeiro_produto_tb_produto1_idx` (`co_produto` ASC),
  INDEX `fk_tb_produto_detalhe_tb_usuario1_idx` (`co_usuario` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PRODUTO_PROMOCAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PRODUTO_PROMOCAO` (
  `co_produto_promocao` INT NOT NULL AUTO_INCREMENT COMMENT 'Promoções para o produto',
  `nu_preco_promocional` DECIMAL NULL COMMENT 'Preço promocional pro produto',
  `dt_inicio` DATE NULL COMMENT 'Inicio da promoção',
  `dt_fim` DATE NULL COMMENT 'fim da promoção',
  `nu_quantidade_minima` INT NULL COMMENT 'Quantidade Mínima por compra',
  `nu_limite` INT NULL COMMENT 'Quantidade máxima por compra',
  `dt_cadastro` DATETIME NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_produto` INT NOT NULL,
  `co_usuario` INT(10) NOT NULL,
  PRIMARY KEY (`co_produto_promocao`, `co_produto`, `co_usuario`),
  INDEX `fk_tb_promocao_produto_tb_produto1_idx` (`co_produto` ASC),
  INDEX `fk_tb_produto_promocao_tb_usuario1_idx` (`co_usuario` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PERFIL_PRODUTO_DETALHE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PERFIL_PRODUTO_DETALHE` (
  `co_perfil_produto_detalhe` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Perfil que poderar aplicar descontos ou não',
  `co_produto_detalhe` INT NOT NULL,
  `co_perfil` INT(11) NOT NULL,
  `nu_desconto` DECIMAL NULL COMMENT 'Valor para o desconto do perfil prara o produto',
  `nu_porc_desconto` INT(2) NULL COMMENT 'Porcentagem %  para o desconto do perfil prara o produto',
  PRIMARY KEY (`co_perfil_produto_detalhe`, `co_produto_detalhe`, `co_perfil`),
  INDEX `fk_tb_produto_detalhe_tb_perfil_tb_perfil1_idx` (`co_perfil` ASC),
  INDEX `fk_tb_produto_detalhe_tb_perfil_tb_produto_detalhe1_idx` (`co_produto_detalhe` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_FINANCEIRO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_FINANCEIRO` (
  `co_financeiro` INT NOT NULL AUTO_INCREMENT COMMENT 'Manter financeiro dos cosumidores do sistema',
  `nu_parcela` INT NOT NULL COMMENT 'Número da parcela ',
  `nu_valor_parcela` DECIMAL NOT NULL,
  `nu_valor_parcela_pago` DECIMAL NULL,
  `dt_vencimento` DATE NOT NULL,
  `dt_vencimento_pago` DATE NULL,
  `ds_observacao` TEXT NULL,
  `co_consumidor` INT NOT NULL,
  PRIMARY KEY (`co_financeiro`, `co_consumidor`),
  INDEX `fk_tb_financeiro_tb_empresa1_idx` (`co_consumidor` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_ACESSO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_ACESSO` (
  `co_acesso` INT NOT NULL AUTO_INCREMENT,
  `ds_session_id` VARCHAR(255) NULL,
  `dt_inicio_acesso` DATETIME NULL,
  `dt_fim_acesso` DATETIME NULL,
  `tp_situacao` VARCHAR(1) NULL COMMENT 'A - Ativo / F - Finalizado',
  `ds_navegador` VARCHAR(45) NULL,
  `ds_sistema_operacional` VARCHAR(45) NULL,
  `ds_dispositivo` VARCHAR(45) NULL,
  `co_usuario` INT(10) NOT NULL,
  PRIMARY KEY (`co_acesso`, `co_usuario`),
  INDEX `fk_TB_ACESSO_TB_USUARIO1_idx` (`co_usuario` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_AJUDA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_AJUDA` (
  `co_ajuda` INT NOT NULL AUTO_INCREMENT,
  `ds_ajuda` TEXT NULL COMMENT 'Texto da ajuda para a funcionalidade',
  `co_funcionalidade` INT(11) NOT NULL,
  PRIMARY KEY (`co_ajuda`, `co_funcionalidade`),
  INDEX `fk_TB_AJUDA_TB_FUNCIONALIDADE1_idx` (`co_funcionalidade` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_SUGESTAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_SUGESTAO` (
  `co_sugestao` INT NOT NULL AUTO_INCREMENT,
  `dt_cadastro` DATETIME NULL,
  `tp_sugestao` VARCHAR(2) NULL COMMENT 'Tipo de Sugestão\nSG - Sugestão  / RC - Reclamação',
  `ds_titulo_sugestao` VARCHAR(120) NULL COMMENT 'Título da sugestão',
  `ds_sugestao` TEXT NULL COMMENT 'Texto da sugestão',
  `co_usuario` INT(10) NOT NULL,
  `co_imagem` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`co_sugestao`, `co_usuario`, `co_imagem`),
  INDEX `fk_TB_SUGESTAO_TB_USUARIO1_idx` (`co_usuario` ASC),
  INDEX `fk_TB_SUGESTAO_TB_IMAGEM1_idx` (`co_imagem` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_LOCALIDADE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_LOCALIDADE` (
  `co_localidade` INT NOT NULL AUTO_INCREMENT,
  `ds_localidade` VARCHAR(40) NULL,
  PRIMARY KEY (`co_localidade`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PRODUTO_LOCALIDADE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PRODUTO_LOCALIDADE` (
  `co_produto_localidade` INT NOT NULL AUTO_INCREMENT,
  `co_localidade` INT NOT NULL,
  `co_produto` INT NOT NULL,
  `ds_localidade` VARCHAR(5) NULL COMMENT 'Letra referente a localidade Ex: A ou 5',
  PRIMARY KEY (`co_produto_localidade`, `co_localidade`, `co_produto`),
  INDEX `fk_TB_PRODUTO_TB_LOCALIDADE_TB_LOCALIDADE1_idx` (`co_localidade` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_LOCALIDADE_CONSUMIDOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_LOCALIDADE_CONSUMIDOR` (
  `co_localidade_consumidor` INT NOT NULL AUTO_INCREMENT,
  `st_ativo` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_localidade` INT NOT NULL,
  `co_consumidor` INT NOT NULL,
  PRIMARY KEY (`co_localidade_consumidor`, `co_localidade`, `co_consumidor`),
  INDEX `fk_TB_CONSUMIDOR_TB_LOCALIDADE_TB_LOCALIDADE1_idx` (`co_localidade` ASC),
  INDEX `fk_TB_CONSUMIDOR_TB_LOCALIDADE_TB_CONSUMIDOR1_idx` (`co_consumidor` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_ORDEM_SERVICO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_ORDEM_SERVICO` (
  `co_ordem_servico` INT NOT NULL AUTO_INCREMENT,
  `nu_ordem_servico` INT(10) NULL COMMENT 'Número da ordem de serviço',
  `dt_cadastro` DATETIME NULL,
  `ds_descricao` TEXT NULL COMMENT 'Descrição do serviço',
  `no_ordem_servico` VARCHAR(120) NULL COMMENT 'Nome (Título da ordem de serviço)',
  `dt_entrega` DATE NULL COMMENT 'Data da entrega do serviço',
  `co_usuario` INT(10) NOT NULL,
  `co_negociacao` INT NOT NULL,
  PRIMARY KEY (`co_ordem_servico`, `co_usuario`, `co_negociacao`),
  INDEX `fk_TB_ORDEM_SERVICO_TB_USUARIO1_idx` (`co_usuario` ASC),
  INDEX `fk_TB_ORDEM_SERVICO_TB_NEGOCIACAO1_idx` (`co_negociacao` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_CHAT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CHAT` (
  `co_chat` INT NOT NULL AUTO_INCREMENT COMMENT 'Tabela de manter dados dos chats do sistema',
  `ds_mensagem` TEXT NULL COMMENT 'Mensagem',
  `dt_cadastro` DATETIME NOT NULL COMMENT 'data e hora da mensagem',
  `st_lido` VARCHAR(1) NOT NULL DEFAULT 'N' COMMENT 'Situação se foi lida ou não\n\'S\' - Sim / \'N\' - Não',
  `co_usuario_origem` INT(10) NOT NULL,
  `co_usuario_destino` INT(10) NOT NULL,
  PRIMARY KEY (`co_chat`, `co_usuario_origem`, `co_usuario_destino`),
  INDEX `fk_TB_CHAT_TB_USUARIO1_idx` (`co_usuario_origem` ASC),
  INDEX `fk_TB_CHAT_TB_USUARIO2_idx` (`co_usuario_destino` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_GRADE_PRODUTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_GRADE_PRODUTO` (
  `co_grade_produto` INT NOT NULL AUTO_INCREMENT,
  `no_grade_produto` VARCHAR(120) NOT NULL,
  `dt_cadastro` DATETIME NULL,
  PRIMARY KEY (`co_grade_produto`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_PRODUTO_GRADE_PRODUTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_PRODUTO_GRADE_PRODUTO` (
  `co_produto_grade_produto` INT NOT NULL AUTO_INCREMENT,
  `co_grade_produto` INT NOT NULL,
  `co_produto` INT NOT NULL,
  PRIMARY KEY (`co_produto_grade_produto`, `co_grade_produto`, `co_produto`),
  INDEX `fk_TB_PRODUTO_TB_GRADE_PRODUTO_TB_GRADE_PRODUTO1_idx` (`co_grade_produto` ASC),
  INDEX `fk_TB_PRODUTO_TB_GRADE_PRODUTO_TB_PRODUTO1_idx` (`co_produto` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_SIT_ENTREG_PED`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_SIT_ENTREG_PED` (
  `co_sit_entreg_ped` INT NOT NULL AUTO_INCREMENT COMMENT 'Códig oda situação da entrega ou pedido',
  `no_sit_entreg_ped` VARCHAR(60) NULL,
  `sg_sit_entreg_ped` VARCHAR(2) NULL,
  PRIMARY KEY (`co_sit_entreg_ped`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_TRANSPORTADORA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_TRANSPORTADORA` (
  `co_transportadora` INT NOT NULL AUTO_INCREMENT COMMENT 'Fornecedor do Consumidor',
  `ds_observacao` TEXT NULL,
  `dt_cadastro` DATETIME NOT NULL,
  `st_status` VARCHAR(1) NULL DEFAULT 'A' COMMENT '\'A - Ativo / I - Inativo\'',
  `co_consumidor` INT NOT NULL,
  `co_empresa` INT NOT NULL,
  PRIMARY KEY (`co_transportadora`, `co_consumidor`, `co_empresa`),
  INDEX `fk_tb_fornecedor_tb_consumidor1_idx` (`co_consumidor` ASC),
  INDEX `fk_TB_FORNECEDOR_TB_EMPRESA1_idx` (`co_empresa` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_ENTREGA_PEDIDO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_ENTREGA_PEDIDO` (
  `co_entrega_pedido` INT NOT NULL AUTO_INCREMENT COMMENT 'Manter as entregas do consumidor',
  `dt_entrega` DATETIME NULL COMMENT 'data que foi entregue',
  `dt_ser_entregue` DATETIME NULL COMMENT 'data provável da entrega',
  `ds_observacao` TEXT NULL,
  `co_sit_entreg_ped` INT NOT NULL,
  `co_negociacao` INT NOT NULL,
  `co_transportadora` INT NOT NULL,
  PRIMARY KEY (`co_entrega_pedido`, `co_sit_entreg_ped`, `co_negociacao`, `co_transportadora`),
  INDEX `fk_TB_ENTREGA_PEDIDO_TB_SITUACAO_ENTREGA_PEDIDO1_idx` (`co_sit_entreg_ped` ASC),
  INDEX `fk_TB_ENTREGA_PEDIDO_TB_NEGOCIACAO1_idx` (`co_negociacao` ASC),
  INDEX `fk_TB_ENTREGA_PEDIDO_TB_TRANSPORTADORA1_idx` (`co_transportadora` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_LEMBRETE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_LEMBRETE` (
  `co_lembrete` INT NOT NULL AUTO_INCREMENT,
  `dt_inicio` DATETIME NULL,
  `dt_fim` DATETIME NULL,
  `st_ativo` VARCHAR(1) NULL DEFAULT 'S' COMMENT 'S- Sim / N - Não',
  `ds_lembrete` TEXT NULL,
  `co_usuario_origem` INT(10) NOT NULL,
  `co_usuario_destino` INT(10) NULL,
  `co_grupo_lembrete` INT NULL,
  PRIMARY KEY (`co_lembrete`, `co_usuario_origem`, `co_usuario_destino`, `co_grupo_lembrete`),
  INDEX `fk_TB_LEMBRETE_TB_USUARIO1_idx` (`co_usuario_origem` ASC),
  INDEX `fk_TB_LEMBRETE_TB_USUARIO2_idx` (`co_usuario_destino` ASC),
  INDEX `fk_TB_LEMBRETE_TB_GRUPO_LEMBRETE1_idx` (`co_grupo_lembrete` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_TIPO_COMISSAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_TIPO_COMISSAO` (
  `co_tipo_comissao` INT NOT NULL AUTO_INCREMENT,
  `no_tipo_comissao` VARCHAR(100) NULL,
  `sg_tipo_comissao` VARCHAR(2) NULL,
  PRIMARY KEY (`co_tipo_comissao`))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_COMISSAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_COMISSAO` (
  `co_comissao` INT NOT NULL AUTO_INCREMENT COMMENT 'Armazenar a comissão dos usuários',
  `nu_valor` DECIMAL NULL,
  `nu_percentual` INT(3) NULL COMMENT 'Percentual % pago ',
  `st_status` VARCHAR(1) NULL COMMENT 'P - Pago / N - Não pago',
  `dt_cadastro` DATETIME NULL,
  `dt_ocorrencia` DATETIME NULL,
  `co_negociacao` INT NOT NULL,
  `co_usuario` INT(10) NOT NULL,
  `co_tipo_comissao` INT NOT NULL,
  PRIMARY KEY (`co_comissao`, `co_negociacao`, `co_usuario`, `co_tipo_comissao`),
  INDEX `fk_TB_COMISSAO_TB_NEGOCIACAO1_idx` (`co_negociacao` ASC),
  INDEX `fk_TB_COMISSAO_TB_USUARIO1_idx` (`co_usuario` ASC),
  INDEX `fk_TB_COMISSAO_TB_TIPO_COMISSAO1_idx` (`co_tipo_comissao` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_GRUPO_LEMBRETE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_GRUPO_LEMBRETE` (
  `co_grupo_lembrete` INT NOT NULL AUTO_INCREMENT,
  `no_grupo_lembrete` VARCHAR(150) NULL,
  `dt_cadastro` DATETIME NULL,
  `co_consumidor` INT NOT NULL,
  PRIMARY KEY (`co_grupo_lembrete`, `co_consumidor`),
  INDEX `fk_TB_GRUPO_LEMBRETE_TB_CONSUMIDOR1_idx` (`co_consumidor` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_LEMBRETE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_LEMBRETE` (
  `co_lembrete` INT NOT NULL AUTO_INCREMENT,
  `dt_inicio` DATETIME NULL,
  `dt_fim` DATETIME NULL,
  `st_ativo` VARCHAR(1) NULL DEFAULT 'S' COMMENT 'S- Sim / N - Não',
  `ds_lembrete` TEXT NULL,
  `co_usuario_origem` INT(10) NOT NULL,
  `co_usuario_destino` INT(10) NULL,
  `co_grupo_lembrete` INT NULL,
  PRIMARY KEY (`co_lembrete`, `co_usuario_origem`, `co_usuario_destino`, `co_grupo_lembrete`),
  INDEX `fk_TB_LEMBRETE_TB_USUARIO1_idx` (`co_usuario_origem` ASC),
  INDEX `fk_TB_LEMBRETE_TB_USUARIO2_idx` (`co_usuario_destino` ASC),
  INDEX `fk_TB_LEMBRETE_TB_GRUPO_LEMBRETE1_idx` (`co_grupo_lembrete` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_GRUPO_LEMBRETE_USUARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_GRUPO_LEMBRETE_USUARIO` (
  `co_grupo_lembrete_usuario` INT NOT NULL AUTO_INCREMENT,
  `co_usuario_destino` INT(10) NOT NULL,
  `co_grupo_lembrete` INT NOT NULL,
  PRIMARY KEY (`co_grupo_lembrete_usuario`, `co_usuario_destino`, `co_grupo_lembrete`),
  INDEX `fk_TB_GRUPO_LEMBRETE_TB_USUARIO_TB_USUARIO1_idx` (`co_usuario_destino` ASC),
  INDEX `fk_TB_GRUPO_LEMBRETE_TB_USUARIO_TB_GRUPO_LEMBRETE1_idx` (`co_grupo_lembrete` ASC))
  ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brcommerce`.`TB_CONSUMIDOR_DEPENDENCIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brcommerce`.`TB_CONSUMIDOR_DEPENDENCIA` (
  `co_consumidor_dependencia` INT NOT NULL AUTO_INCREMENT,
  `co_consumidor_matriz` INT NOT NULL,
  `co_consumidor_filial` INT NOT NULL,
  PRIMARY KEY (`co_consumidor_dependencia`, `co_consumidor_matriz`, `co_consumidor_filial`),
  INDEX `fk_TB_CONSUMIDOR_DEPEDENCIA_TB_CONSUMIDOR1_idx` (`co_consumidor_matriz` ASC),
  INDEX `fk_TB_CONSUMIDOR_DEPEDENCIA_TB_CONSUMIDOR2_idx` (`co_consumidor_filial` ASC))
  ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_ENDERECO`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_ENDERECO` (`co_endereco`, `ds_endereco`, `ds_complemento`, `ds_bairro`, `nu_cep`, `no_cidade`, `sg_uf`) VALUES (1, 'QR 403 Conjunto 10 casa 28', NULL, 'Samambaia Norte', '72319111', 'Brasília', 'DF');

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_CONTATO`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_CONTATO` (`co_contato`, `nu_tel1`, `nu_tel2`, `nu_tel3`, `nu_tel4`, `ds_email`, `ds_site`) VALUES (1, '61993274991', '6130826060', NULL, NULL, 'leonardomcbessa@gmail.com', NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_IMAGEM`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_IMAGEM` (`co_imagem`, `ds_caminho`) VALUES (1, 'leo_bessa.jpg');

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_PESSOA`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_PESSOA` (`co_pessoa`, `nu_cpf`, `no_pessoa`, `nu_rg`, `dt_cadastro`, `dt_nascimento`, `st_sexo`, `st_estado_civil`, `co_endereco`, `co_contato`, `co_imagem`) VALUES (1, '72681438187', 'Leonardo Machado Carvalho Bessa', '2077811', '2016-10-31 00:00:00', '1984-07-06', 'M', 'S', 1, 1, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_USUARIO`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_USUARIO` (`co_usuario`, `ds_login`, `ds_senha`, `ds_code`, `st_status`, `dt_cadastro`, `co_consumidor`, `co_imagem`, `co_pessoa`) VALUES (1, 'leobessa', '123456**', 'TVRJek5EVTJLaW89', 'A', '2016-02-18 10:10:10', 0, 1, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_FUNCIONALIDADE`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (1, 'Perfil Master', 'Admin/Index/SuperPerfil', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (2, 'Auditoria Listar', 'Admin/Auditoria/ListarAuditoria', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (3, 'Auditoria Detalhar', 'Admin/Auditoria/DetalharAuditoria', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (4, 'Usuario Cadastrar', 'Admin/Usuario/CadastroUsuario', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (5, 'Usuario Listar', 'Admin/Usuario/ListarUsuario', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (6, 'Meu Usuario', 'Admin/Usuario/MeuPerfilUsuario', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (7, 'Perfil Listar', 'Admin/Perfil/ListarPerfil', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (8, 'Perfil Cadastrar', 'Admin/Perfil/CadastroPerfil', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (9, 'Funcionalidade Listar', 'Admin/Funcionalidade/ListarFuncionalidade', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (10, 'Funcionalidade Cadastrar', 'Admin/Funcionalidade/CadastroFuncionalidade', 'A');
INSERT INTO `brcommerce`.`TB_FUNCIONALIDADE` (`co_funcionalidade`, `no_funcionalidade`, `ds_rota`, `st_status`) VALUES (11, 'Funcionalidades Perfil', 'Admin/Funcionalidade/FuncionalidadesPerfil', 'A');

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_PERFIL`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_PERFIL` (`co_perfil`, `no_perfil`, `st_status`, `co_consumidor`) VALUES (1, 'Master', 'A', 0);

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_USUARIO_PERFIL`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_USUARIO_PERFIL` (`co_usuario_perfil`, `co_usuario`, `co_perfil`) VALUES (1, 1, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_PERFIL_FUNCIONALIDADE`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_PERFIL_FUNCIONALIDADE` (`co_perfil_funcionalidade`, `co_perfil`, `co_funcionalidade`) VALUES (1, 1, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_UNIDADE_VENDA`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (1, 'Unidade', 'UN');
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (2, 'Par', 'PR');
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (3, 'Kilograma', 'KG');
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (4, 'Grama', 'GR');
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (5, 'Mêtro', 'MT');
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (6, 'Centímetro', 'CM');
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (7, 'Polegada', 'PL');
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (8, 'Pacote', 'PT');
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (9, 'Saco', 'SC');
INSERT INTO `brcommerce`.`TB_UNIDADE_VENDA` (`co_unidade_venda`, `no_unidade_venda`, `sg_unidade_venda`) VALUES (10, 'Rolo', 'RL');

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_TIPO_NEGOCIACAO`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (1, 'Compra', 'CP');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (2, 'Venda', 'VD');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (3, 'Cotação', 'CT');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (4, 'Orçamento', 'OR');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (5, 'Pagamento', 'PG');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (6, 'Recebimento', 'RC');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (7, 'Perda', 'PD');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (8, 'Devolução', 'DV');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (9, 'Retirada', 'RT');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (10, 'Trasnferência', 'TF');
INSERT INTO `brcommerce`.`TB_TIPO_NEGOCIACAO` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES (11, 'Pedido', 'PE');

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_TIPO_PAGAMENTO`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_TIPO_PAGAMENTO` (`co_tipo_pagamento`, `ds_tipo_pagamento`, `sg_tipo_pagamento`) VALUES (1, 'Dinheiro', 'DI');
INSERT INTO `brcommerce`.`TB_TIPO_PAGAMENTO` (`co_tipo_pagamento`, `ds_tipo_pagamento`, `sg_tipo_pagamento`) VALUES (2, 'Cheque', 'CH');
INSERT INTO `brcommerce`.`TB_TIPO_PAGAMENTO` (`co_tipo_pagamento`, `ds_tipo_pagamento`, `sg_tipo_pagamento`) VALUES (3, 'Cartão de Débito', 'CD');
INSERT INTO `brcommerce`.`TB_TIPO_PAGAMENTO` (`co_tipo_pagamento`, `ds_tipo_pagamento`, `sg_tipo_pagamento`) VALUES (4, 'Cartão de Crédito', 'CC');
INSERT INTO `brcommerce`.`TB_TIPO_PAGAMENTO` (`co_tipo_pagamento`, `ds_tipo_pagamento`, `sg_tipo_pagamento`) VALUES (5, 'Boleto Bancário', 'BL');
INSERT INTO `brcommerce`.`TB_TIPO_PAGAMENTO` (`co_tipo_pagamento`, `ds_tipo_pagamento`, `sg_tipo_pagamento`) VALUES (6, 'Promissória', 'PR');
INSERT INTO `brcommerce`.`TB_TIPO_PAGAMENTO` (`co_tipo_pagamento`, `ds_tipo_pagamento`, `sg_tipo_pagamento`) VALUES (7, 'Outros', 'OU');

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_LOCALIDADE`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (1, 'Prateleira');
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (2, 'Coluna');
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (3, 'Filéira');
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (4, 'Rua');
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (5, 'Caixa');
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (6, 'Conjunto');
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (7, 'Quadra');
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (8, 'Vitrine');
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (9, 'Setor');
INSERT INTO `brcommerce`.`TB_LOCALIDADE` (`co_localidade`, `ds_localidade`) VALUES (10, 'Corredor');

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_SIT_ENTREG_PED`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_SIT_ENTREG_PED` (`co_sit_entreg_ped`, `no_sit_entreg_ped`, `sg_sit_entreg_ped`) VALUES (1, 'Entregue', 'ET');
INSERT INTO `brcommerce`.`TB_SIT_ENTREG_PED` (`co_sit_entreg_ped`, `no_sit_entreg_ped`, `sg_sit_entreg_ped`) VALUES (2, 'Aguardando', 'AG');
INSERT INTO `brcommerce`.`TB_SIT_ENTREG_PED` (`co_sit_entreg_ped`, `no_sit_entreg_ped`, `sg_sit_entreg_ped`) VALUES (3, 'Atrasado', 'AT');

COMMIT;


-- -----------------------------------------------------
-- Data for table `brcommerce`.`TB_TIPO_COMISSAO`
-- -----------------------------------------------------
START TRANSACTION;
USE `brcommerce`;
INSERT INTO `brcommerce`.`TB_TIPO_COMISSAO` (`co_tipo_comissao`, `no_tipo_comissao`, `sg_tipo_comissao`) VALUES (1, 'Geral', 'GR');
INSERT INTO `brcommerce`.`TB_TIPO_COMISSAO` (`co_tipo_comissao`, `no_tipo_comissao`, `sg_tipo_comissao`) VALUES (2, 'Por Usuário', 'US');
INSERT INTO `brcommerce`.`TB_TIPO_COMISSAO` (`co_tipo_comissao`, `no_tipo_comissao`, `sg_tipo_comissao`) VALUES (3, 'Por Sessão', 'SS');
INSERT INTO `brcommerce`.`TB_TIPO_COMISSAO` (`co_tipo_comissao`, `no_tipo_comissao`, `sg_tipo_comissao`) VALUES (4, 'Por Produto', 'PD');

COMMIT;

