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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO tb_acesso VALUES("1","ovaebmr8st4khr5r3h9r97lu71","2017-09-26 17:07:14","2017-09-27 10:16:45","1");

INSERT INTO tb_acesso VALUES("2","rgm1lj3isnoaug8dmufilsdjt1","2017-09-27 10:14:40","2017-09-27 11:02:37","1");




DROP TABLE IF EXISTS tb_ajuda;


CREATE TABLE `tb_ajuda` (
  `co_ajuda` int(11) NOT NULL AUTO_INCREMENT,
  `ds_ajuda` text COMMENT 'Texto da ajuda para a funcionalidade',
  `co_funcionalidade` int(11) NOT NULL,
  PRIMARY KEY (`co_ajuda`,`co_funcionalidade`),
  KEY `fk_TB_AJUDA_TB_FUNCIONALIDADE1_idx` (`co_funcionalidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_auditoria;


CREATE TABLE `tb_auditoria` (
  `co_auditoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_tabela` varchar(150) DEFAULT NULL,
  `dt_realizado` datetime DEFAULT NULL,
  `no_operacao` varchar(1) DEFAULT NULL,
  `ds_item_anterior` text,
  `ds_item_atual` text CHARACTER SET big5,
  `co_registro` int(10) DEFAULT NULL,
  `ds_perfil_usuario` text CHARACTER SET big5,
  `co_usuario` int(10) NOT NULL,
  `co_consumidor` int(11) NOT NULL,
  PRIMARY KEY (`co_auditoria`,`co_usuario`,`co_consumidor`),
  KEY `fk_tb_auditoria_tb_usuario1_idx` (`co_usuario`),
  KEY `fk_tb_auditoria_tb_empresa1_idx` (`co_consumidor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_caixa;


CREATE TABLE `tb_caixa` (
  `co_caixa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Abertura de caixa',
  `nu_caixa` int(3) DEFAULT NULL COMMENT 'Número do Caixa',
  `dt_abertura` datetime DEFAULT NULL COMMENT 'Momento da abertura do caixa',
  `dt_fechamento` datetime DEFAULT NULL COMMENT 'Momentodo fechamento do caixa',
  `ds_observacao` text COMMENT 'Observação do caixa',
  `nu_troco` decimal(10,0) DEFAULT NULL COMMENT 'Valor do troco iniciado',
  `co_usuario` int(10) NOT NULL,
  PRIMARY KEY (`co_caixa`,`co_usuario`),
  KEY `fk_TB_CAIXA_TB_USUARIO1_idx` (`co_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_categoria;


CREATE TABLE `tb_categoria` (
  `co_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_categoria` varchar(40) NOT NULL,
  `nu_lucro` decimal(10,0) DEFAULT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_sessao` int(11) NOT NULL COMMENT 'Sessão da categoria do produto',
  `co_consumidor` int(11) NOT NULL,
  PRIMARY KEY (`co_categoria`,`co_sessao`,`co_consumidor`),
  KEY `fk_tb_categoria_tb_tipo_categoria1_idx` (`co_sessao`),
  KEY `fk_tb_categoria_tb_empresa1_idx` (`co_consumidor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS tb_chat;


CREATE TABLE `tb_chat` (
  `co_chat` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Tabela de manter dados dos chats do sistema',
  `ds_mensagem` text COMMENT 'Mensagem',
  `dt_cadastro` datetime NOT NULL COMMENT 'data e hora da mensagem',
  `st_lido` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'Situação se foi lida ou não\n''S'' - Sim / ''N'' - Não',
  `co_usuario_origem` int(10) NOT NULL,
  `co_usuario_destino` int(10) NOT NULL,
  PRIMARY KEY (`co_chat`,`co_usuario_origem`,`co_usuario_destino`),
  KEY `fk_TB_CHAT_TB_USUARIO1_idx` (`co_usuario_origem`),
  KEY `fk_TB_CHAT_TB_USUARIO2_idx` (`co_usuario_destino`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_cliente;


CREATE TABLE `tb_cliente` (
  `co_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `ds_observacao` text,
  `tp_credor` varchar(1) DEFAULT 'N' COMMENT 'Flag se o Cliente é credor\n''S'' - Sim / ''N'' - Não',
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_consumidor` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  `co_empresa` int(11) NOT NULL,
  PRIMARY KEY (`co_cliente`,`co_consumidor`,`co_pessoa`,`co_empresa`),
  KEY `fk_tb_cliente_tb_consumidor1_idx` (`co_consumidor`),
  KEY `fk_TB_CLIENTE_TB_PESSOA1_idx` (`co_pessoa`),
  KEY `fk_TB_CLIENTE_TB_EMPRESA1_idx` (`co_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_comissao;


CREATE TABLE `tb_comissao` (
  `co_comissao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Armazenar a comissão dos usuários',
  `nu_valor` decimal(10,0) DEFAULT NULL,
  `nu_percentual` int(3) DEFAULT NULL COMMENT 'Percentual % pago ',
  `st_status` varchar(1) DEFAULT NULL COMMENT 'P - Pago / N - Não pago',
  `dt_cadastro` datetime DEFAULT NULL,
  `dt_ocorrencia` datetime DEFAULT NULL,
  `co_negociacao` int(11) NOT NULL,
  `co_usuario` int(10) NOT NULL,
  `co_tipo_comissao` int(11) NOT NULL,
  PRIMARY KEY (`co_comissao`,`co_negociacao`,`co_usuario`,`co_tipo_comissao`),
  KEY `fk_TB_COMISSAO_TB_NEGOCIACAO1_idx` (`co_negociacao`),
  KEY `fk_TB_COMISSAO_TB_USUARIO1_idx` (`co_usuario`),
  KEY `fk_TB_COMISSAO_TB_TIPO_COMISSAO1_idx` (`co_tipo_comissao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_consumidor;


CREATE TABLE `tb_consumidor` (
  `co_consumidor` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cliente do Sistema',
  `dt_cadastro` datetime NOT NULL,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_pessoa` int(11) NOT NULL DEFAULT '0',
  `co_empresa` int(11) NOT NULL DEFAULT '0',
  `co_consumidor_matriz` int(11) NOT NULL DEFAULT '0' COMMENT 'Matriz de uma Filial',
  PRIMARY KEY (`co_consumidor`,`co_pessoa`,`co_empresa`,`co_consumidor_matriz`),
  KEY `fk_TB_CLIENTE_SISTEMA_TB_PESSOA1_idx` (`co_pessoa`),
  KEY `fk_TB_CLIENTE_SISTEMA_TB_EMPRESA1_idx` (`co_empresa`),
  KEY `fk_TB_CONSUMIDOR_TB_CONSUMIDOR1_idx` (`co_consumidor_matriz`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO tb_contato VALUES("1","61993274991","6130826060","","","leonardomcbessa@gmail.com","");




DROP TABLE IF EXISTS tb_empresa;


CREATE TABLE `tb_empresa` (
  `co_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `no_empresa` varchar(250) NOT NULL COMMENT 'Razão Social',
  `no_fantasia` varchar(150) DEFAULT NULL,
  `dt_cadastro` datetime NOT NULL,
  `nu_cnpj` varchar(20) DEFAULT NULL,
  `nu_insc_estadual` varchar(20) DEFAULT NULL,
  `ds_observacao` text,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_contato` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL COMMENT 'Responsável pela Empresa',
  `co_endereco` int(11) NOT NULL,
  `co_imagem` int(10) unsigned NOT NULL,
  PRIMARY KEY (`co_empresa`,`co_contato`,`co_pessoa`,`co_endereco`,`co_imagem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_endereco;


CREATE TABLE `tb_endereco` (
  `co_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `ds_endereco` varchar(150) NOT NULL,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `ds_bairro` varchar(80) DEFAULT NULL,
  `nu_cep` varchar(12) DEFAULT NULL,
  `no_cidade` varchar(80) NOT NULL,
  `sg_uf` varchar(2) NOT NULL,
  PRIMARY KEY (`co_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO tb_endereco VALUES("1","QR 403 Conjunto 10 casa 28","","Samambaia Norte","72319111","Brasília","DF");




DROP TABLE IF EXISTS tb_entrega_pedido;


CREATE TABLE `tb_entrega_pedido` (
  `co_entrega_pedido` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Manter as entregas do consumidor',
  `dt_entrega` datetime DEFAULT NULL COMMENT 'data que foi entregue',
  `dt_ser_entregue` datetime DEFAULT NULL COMMENT 'data provável da entrega',
  `ds_observacao` text,
  `co_sit_entreg_ped` int(11) NOT NULL,
  `co_negociacao` int(11) NOT NULL,
  `co_transportadora` int(11) NOT NULL,
  PRIMARY KEY (`co_entrega_pedido`,`co_sit_entreg_ped`,`co_negociacao`,`co_transportadora`),
  KEY `fk_TB_ENTREGA_PEDIDO_TB_SITUACAO_ENTREGA_PEDIDO1_idx` (`co_sit_entreg_ped`),
  KEY `fk_TB_ENTREGA_PEDIDO_TB_NEGOCIACAO1_idx` (`co_negociacao`),
  KEY `fk_TB_ENTREGA_PEDIDO_TB_TRANSPORTADORA1_idx` (`co_transportadora`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_financeiro;


CREATE TABLE `tb_financeiro` (
  `co_financeiro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Manter financeiro dos cosumidores do sistema',
  `nu_parcela` int(11) NOT NULL COMMENT 'Número da parcela ',
  `nu_valor_parcela` decimal(10,0) NOT NULL,
  `nu_valor_parcela_pago` decimal(10,0) DEFAULT NULL,
  `dt_vencimento` date NOT NULL,
  `dt_vencimento_pago` date DEFAULT NULL,
  `ds_observacao` text,
  `co_consumidor` int(11) NOT NULL,
  PRIMARY KEY (`co_financeiro`,`co_consumidor`),
  KEY `fk_tb_financeiro_tb_empresa1_idx` (`co_consumidor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_fornecedor;


CREATE TABLE `tb_fornecedor` (
  `co_fornecedor` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Fornecedor do Consumidor',
  `ds_observacao` text,
  `dt_cadastro` datetime NOT NULL,
  `tp_credor` varchar(1) DEFAULT 'N' COMMENT 'Flag se o Fornecedor é credor\n''S'' - Sim / ''N'' - Não',
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_representante` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  `co_empresa` int(11) NOT NULL,
  `co_consumidor` int(11) NOT NULL,
  PRIMARY KEY (`co_fornecedor`,`co_representante`,`co_pessoa`,`co_empresa`,`co_consumidor`),
  KEY `fk_tb_fornecedor_tb_representante1_idx` (`co_representante`),
  KEY `fk_TB_FORNECEDOR_TB_PESSOA1_idx` (`co_pessoa`),
  KEY `fk_TB_FORNECEDOR_TB_EMPRESA1_idx` (`co_empresa`),
  KEY `fk_TB_FORNECEDOR_TB_CONSUMIDOR1_idx` (`co_consumidor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





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




DROP TABLE IF EXISTS tb_funcionario;


CREATE TABLE `tb_funcionario` (
  `co_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `ds_cargo` varchar(70) DEFAULT NULL,
  `dt_admissao` date NOT NULL,
  `dt_demissao` date DEFAULT NULL,
  `dt_cadastro` datetime NOT NULL,
  `nu_carteira` varchar(45) DEFAULT NULL,
  `nu_salario` decimal(10,0) DEFAULT NULL,
  `nu_horas` int(2) DEFAULT NULL COMMENT 'Quantidade de Horas Trabalhada por semana',
  `st_status` varchar(1) NOT NULL COMMENT 'A - Ativo / I - Inativo',
  `co_imagem` int(10) unsigned NOT NULL DEFAULT '0',
  `co_consumidor` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`co_funcionario`,`co_imagem`,`co_consumidor`,`co_pessoa`),
  KEY `fk_tb_funcionario_tb_foto1_idx` (`co_imagem`),
  KEY `fk_tb_funcionario_tb_empresa1_idx` (`co_consumidor`),
  KEY `fk_TB_FUNCIONARIO_TB_PESSOA1_idx` (`co_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_grade_produto;


CREATE TABLE `tb_grade_produto` (
  `co_grade_produto` int(11) NOT NULL AUTO_INCREMENT,
  `no_grade_produto` varchar(120) NOT NULL,
  `dt_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`co_grade_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_grupo_lembrete;


CREATE TABLE `tb_grupo_lembrete` (
  `co_grupo_lembrete` int(11) NOT NULL AUTO_INCREMENT,
  `no_grupo_lembrete` varchar(150) DEFAULT NULL,
  `dt_cadastro` datetime DEFAULT NULL,
  `co_consumidor` int(11) NOT NULL,
  PRIMARY KEY (`co_grupo_lembrete`,`co_consumidor`),
  KEY `fk_TB_GRUPO_LEMBRETE_TB_CONSUMIDOR1_idx` (`co_consumidor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_grupo_lembrete_usuario;


CREATE TABLE `tb_grupo_lembrete_usuario` (
  `co_grupo_lembrete_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `co_usuario_destino` int(10) NOT NULL,
  `co_grupo_lembrete` int(11) NOT NULL,
  PRIMARY KEY (`co_grupo_lembrete_usuario`,`co_usuario_destino`,`co_grupo_lembrete`),
  KEY `fk_TB_GRUPO_LEMBRETE_TB_USUARIO_TB_USUARIO1_idx` (`co_usuario_destino`),
  KEY `fk_TB_GRUPO_LEMBRETE_TB_USUARIO_TB_GRUPO_LEMBRETE1_idx` (`co_grupo_lembrete`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_imagem;


CREATE TABLE `tb_imagem` (
  `co_imagem` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ds_caminho` varchar(150) NOT NULL,
  PRIMARY KEY (`co_imagem`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO tb_imagem VALUES("1","leo_bessa.jpg");




DROP TABLE IF EXISTS tb_lembrete;


CREATE TABLE `tb_lembrete` (
  `co_lembrete` int(11) NOT NULL AUTO_INCREMENT,
  `dt_inicio` datetime DEFAULT NULL,
  `dt_fim` datetime DEFAULT NULL,
  `st_ativo` varchar(1) DEFAULT 'S' COMMENT 'S- Sim / N - Não',
  `ds_lembrete` text,
  `co_usuario_origem` int(10) NOT NULL,
  `co_usuario_destino` int(10) NOT NULL DEFAULT '0',
  `co_grupo_lembrete` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`co_lembrete`,`co_usuario_origem`,`co_usuario_destino`,`co_grupo_lembrete`),
  KEY `fk_TB_LEMBRETE_TB_USUARIO1_idx` (`co_usuario_origem`),
  KEY `fk_TB_LEMBRETE_TB_USUARIO2_idx` (`co_usuario_destino`),
  KEY `fk_TB_LEMBRETE_TB_GRUPO_LEMBRETE1_idx` (`co_grupo_lembrete`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_localidade;


CREATE TABLE `tb_localidade` (
  `co_localidade` int(11) NOT NULL AUTO_INCREMENT,
  `ds_localidade` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`co_localidade`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;


INSERT INTO tb_localidade VALUES("1","Prateleira");

INSERT INTO tb_localidade VALUES("2","Coluna");

INSERT INTO tb_localidade VALUES("3","Filéira");

INSERT INTO tb_localidade VALUES("4","Rua");

INSERT INTO tb_localidade VALUES("5","Caixa");

INSERT INTO tb_localidade VALUES("6","Conjunto");

INSERT INTO tb_localidade VALUES("7","Quadra");

INSERT INTO tb_localidade VALUES("8","Vitrine");

INSERT INTO tb_localidade VALUES("9","Setor");

INSERT INTO tb_localidade VALUES("10","Corredor");




DROP TABLE IF EXISTS tb_localidade_consumidor;


CREATE TABLE `tb_localidade_consumidor` (
  `co_localidade_consumidor` int(11) NOT NULL AUTO_INCREMENT,
  `st_ativo` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_localidade` int(11) NOT NULL,
  `co_consumidor` int(11) NOT NULL,
  PRIMARY KEY (`co_localidade_consumidor`,`co_localidade`,`co_consumidor`),
  KEY `fk_TB_CONSUMIDOR_TB_LOCALIDADE_TB_LOCALIDADE1_idx` (`co_localidade`),
  KEY `fk_TB_CONSUMIDOR_TB_LOCALIDADE_TB_CONSUMIDOR1_idx` (`co_consumidor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_lote_produto;


CREATE TABLE `tb_lote_produto` (
  `co_lote_produto` int(11) NOT NULL AUTO_INCREMENT,
  `dt_validade` date DEFAULT NULL,
  `dt_cadastro` datetime DEFAULT NULL,
  `ds_observacao` text,
  PRIMARY KEY (`co_lote_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_negociacao;


CREATE TABLE `tb_negociacao` (
  `co_negociacao` int(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` datetime NOT NULL,
  `ds_observacao` text,
  `co_cliente` int(11) NOT NULL DEFAULT '0',
  `co_fornecedor` int(11) NOT NULL DEFAULT '0',
  `co_usuario` int(10) NOT NULL,
  `co_tipo_negociacao` int(11) NOT NULL,
  `co_consumidor` int(11) NOT NULL,
  `co_caixa` int(11) NOT NULL,
  PRIMARY KEY (`co_negociacao`,`co_cliente`,`co_fornecedor`,`co_usuario`,`co_tipo_negociacao`,`co_consumidor`,`co_caixa`),
  KEY `fk_tb_negociacao_tb_cliente1_idx` (`co_cliente`),
  KEY `fk_tb_negociacao_tb_fornecedor1_idx` (`co_fornecedor`),
  KEY `fk_tb_negociacao_tb_usuario1_idx` (`co_usuario`),
  KEY `fk_tb_negociacao_tb_tipo_negociacao1_idx` (`co_tipo_negociacao`),
  KEY `fk_TB_NEGOCIACAO_TB_CLIENTE_SISTEMA1_idx` (`co_consumidor`),
  KEY `fk_TB_NEGOCIACAO_TB_CAIXA1_idx` (`co_caixa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_negociacao_produto;


CREATE TABLE `tb_negociacao_produto` (
  `co_negociacao_produto` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `co_negociacao` int(11) NOT NULL,
  `co_produto` int(11) NOT NULL,
  `nu_valor` decimal(10,0) NOT NULL COMMENT 'Valor desse produto pra esse negociação',
  `nu_quantidade` int(11) NOT NULL COMMENT 'Quantidade desse produto pra esse negociação',
  `ds_observacao` text,
  PRIMARY KEY (`co_negociacao_produto`,`co_negociacao`,`co_produto`),
  KEY `fk_tb_negociacao_tb_produto_tb_produto1_idx` (`co_produto`),
  KEY `fk_tb_negociacao_tb_produto_tb_negociacao1_idx` (`co_negociacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_ordem_servico;


CREATE TABLE `tb_ordem_servico` (
  `co_ordem_servico` int(11) NOT NULL AUTO_INCREMENT,
  `nu_ordem_servico` int(10) DEFAULT NULL COMMENT 'Número da ordem de serviço',
  `dt_cadastro` datetime DEFAULT NULL,
  `ds_descricao` text COMMENT 'Descrição do serviço',
  `no_ordem_servico` varchar(120) DEFAULT NULL COMMENT 'Nome (Título da ordem de serviço)',
  `dt_entrega` date DEFAULT NULL COMMENT 'Data da entrega do serviço',
  `co_usuario` int(10) NOT NULL,
  `co_negociacao` int(11) NOT NULL,
  PRIMARY KEY (`co_ordem_servico`,`co_usuario`,`co_negociacao`),
  KEY `fk_TB_ORDEM_SERVICO_TB_USUARIO1_idx` (`co_usuario`),
  KEY `fk_TB_ORDEM_SERVICO_TB_NEGOCIACAO1_idx` (`co_negociacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_pagamento;


CREATE TABLE `tb_pagamento` (
  `co_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `nu_total` decimal(10,0) NOT NULL,
  `nu_valor_pago` decimal(10,0) DEFAULT NULL,
  `nu_parcelas` int(11) NOT NULL,
  `tp_situacao` varchar(1) NOT NULL DEFAULT 'A' COMMENT 'A  - Aberto / C - Concluido',
  `dt_atualizado` date DEFAULT NULL COMMENT 'Data da ultima atualização do pagamento',
  `ds_observacao` text,
  `co_tipo_pagamento` int(11) NOT NULL,
  `co_negociacao` int(11) NOT NULL,
  PRIMARY KEY (`co_pagamento`,`co_tipo_pagamento`,`co_negociacao`),
  KEY `fk_tb_pagamento_tb_tipo_pagamento1_idx` (`co_tipo_pagamento`),
  KEY `fk_TB_PAGAMENTO_TB_NEGOCIACAO1_idx` (`co_negociacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_perfil;


CREATE TABLE `tb_perfil` (
  `co_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `no_perfil` varchar(45) NOT NULL COMMENT 'Nome do Perfil',
  `st_status` varchar(1) NOT NULL DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_consumidor` int(11) NOT NULL DEFAULT '0' COMMENT 'Código do cliente do sistema',
  PRIMARY KEY (`co_perfil`,`co_consumidor`),
  KEY `fk_tb_perfil_tb_empresa1_idx` (`co_consumidor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO tb_perfil VALUES("1","Master","A","0");




DROP TABLE IF EXISTS tb_perfil_funcionalidade;


CREATE TABLE `tb_perfil_funcionalidade` (
  `co_perfil_funcionalidade` int(11) NOT NULL AUTO_INCREMENT,
  `co_perfil` int(11) NOT NULL,
  `co_funcionalidade` int(11) NOT NULL,
  PRIMARY KEY (`co_perfil_funcionalidade`,`co_perfil`,`co_funcionalidade`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO tb_perfil_funcionalidade VALUES("1","1","1");




DROP TABLE IF EXISTS tb_perfil_produto_detalhe;


CREATE TABLE `tb_perfil_produto_detalhe` (
  `co_perfil_produto_detalhe` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Perfil que poderar aplicar descontos ou não',
  `co_produto_detalhe` int(11) NOT NULL,
  `co_perfil` int(11) NOT NULL,
  `nu_desconto` decimal(10,0) DEFAULT NULL COMMENT 'Valor para o desconto do perfil prara o produto',
  `nu_porc_desconto` int(2) DEFAULT NULL COMMENT 'Porcentagem %  para o desconto do perfil prara o produto',
  PRIMARY KEY (`co_perfil_produto_detalhe`,`co_produto_detalhe`,`co_perfil`),
  KEY `fk_tb_produto_detalhe_tb_perfil_tb_perfil1_idx` (`co_perfil`),
  KEY `fk_tb_produto_detalhe_tb_perfil_tb_produto_detalhe1_idx` (`co_produto_detalhe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





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
  `co_imagem` int(10) unsigned NOT NULL,
  PRIMARY KEY (`co_pessoa`,`co_endereco`,`co_contato`,`co_imagem`),
  KEY `fk_TB_PESSOA_TB_ENDERECO1_idx` (`co_endereco`),
  KEY `fk_TB_PESSOA_TB_CONTATO1_idx` (`co_contato`),
  KEY `fk_TB_PESSOA_TB_IMAGEM1_idx` (`co_imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO tb_pessoa VALUES("1","72681438187","Leonardo Machado Carvalho Bessa","2077811","2016-10-31 00:00:00","1984-07-06","M","S","1","1","1");




DROP TABLE IF EXISTS tb_produto;


CREATE TABLE `tb_produto` (
  `co_produto` int(11) NOT NULL AUTO_INCREMENT,
  `ds_descricao` varchar(250) NOT NULL COMMENT 'Descrição do produto',
  `nu_estoque` int(7) NOT NULL COMMENT 'Estoque Atual',
  `nu_codigo` int(11) NOT NULL COMMENT 'Código de barras do produto',
  `nu_codigo_interno` int(10) DEFAULT NULL COMMENT 'Código do Produto interno para facilitar a busca',
  `ds_marca` varchar(100) DEFAULT NULL COMMENT 'Marca ou fabricante',
  `dt_cadastro` datetime NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_categoria` int(10) unsigned NOT NULL,
  `co_imagem` int(10) unsigned NOT NULL DEFAULT '0',
  `co_consumidor` int(11) NOT NULL DEFAULT '0',
  `co_unidade_venda_consumidor` int(11) NOT NULL,
  `co_lote_produto` int(11) NOT NULL,
  PRIMARY KEY (`co_produto`,`co_categoria`,`co_imagem`,`co_consumidor`,`co_unidade_venda_consumidor`,`co_lote_produto`),
  KEY `fk_tb_produto_tb_categoria1_idx` (`co_categoria`),
  KEY `fk_tb_produto_tb_foto1_idx` (`co_imagem`),
  KEY `fk_tb_produto_tb_empresa1_idx` (`co_consumidor`),
  KEY `fk_TB_PRODUTO_TB_UNIDADE_VENDA_CONSUMIDOR1_idx` (`co_unidade_venda_consumidor`),
  KEY `fk_TB_PRODUTO_TB_LOTE_PRODUTO1_idx` (`co_lote_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_produto_detalhe;


CREATE TABLE `tb_produto_detalhe` (
  `co_produto_detalhe` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Detalhes editáveis no sistema para o produto com histórico ',
  `nu_estoque_baixo` int(11) DEFAULT NULL COMMENT 'Estoque baixo para esse produto',
  `nu_preco_venda` decimal(10,0) NOT NULL COMMENT 'Preço de venda para o produto',
  `nu_valor_lucro` decimal(10,0) DEFAULT NULL COMMENT 'Valor para o lucro que terá no produto',
  `nu_porc_valor_lucro` int(2) DEFAULT NULL COMMENT 'Porcentagem %  para o lucro que terá no produto',
  `nu_valor_desconto_maximo` decimal(10,0) NOT NULL COMMENT 'Valor para o desconto máximo aceito',
  `nu_porc_desc_max` int(2) DEFAULT NULL COMMENT 'Porcentagem %  para o desconto máximo aceito',
  `nu_preco_atacado` decimal(10,0) DEFAULT NULL COMMENT 'Valor do Preço para venda por atacado',
  `nu_quantidade_atacado` int(10) DEFAULT NULL COMMENT 'Nú,ero da quantidade mínima para aceitar a venda por atacado',
  `dt_cadastro` datetime NOT NULL,
  `co_usuario` int(10) NOT NULL,
  `co_produto` int(11) NOT NULL,
  PRIMARY KEY (`co_produto_detalhe`,`co_usuario`,`co_produto`),
  KEY `fk_tb_financeiro_produto_tb_produto1_idx` (`co_produto`),
  KEY `fk_tb_produto_detalhe_tb_usuario1_idx` (`co_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_produto_grade_produto;


CREATE TABLE `tb_produto_grade_produto` (
  `co_produto_grade_produto` int(11) NOT NULL AUTO_INCREMENT,
  `co_grade_produto` int(11) NOT NULL,
  `co_produto` int(11) NOT NULL,
  PRIMARY KEY (`co_produto_grade_produto`,`co_grade_produto`,`co_produto`),
  KEY `fk_TB_PRODUTO_TB_GRADE_PRODUTO_TB_GRADE_PRODUTO1_idx` (`co_grade_produto`),
  KEY `fk_TB_PRODUTO_TB_GRADE_PRODUTO_TB_PRODUTO1_idx` (`co_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_produto_localidade;


CREATE TABLE `tb_produto_localidade` (
  `co_produto_localidade` int(11) NOT NULL AUTO_INCREMENT,
  `co_localidade` int(11) NOT NULL,
  `co_produto` int(11) NOT NULL,
  `ds_localidade` varchar(5) DEFAULT NULL COMMENT 'Letra referente a localidade Ex: A ou 5',
  PRIMARY KEY (`co_produto_localidade`,`co_localidade`,`co_produto`),
  KEY `fk_TB_PRODUTO_TB_LOCALIDADE_TB_LOCALIDADE1_idx` (`co_localidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_produto_promocao;


CREATE TABLE `tb_produto_promocao` (
  `co_produto_promocao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Promoções para o produto',
  `nu_preco_promocional` decimal(10,0) DEFAULT NULL COMMENT 'Preço promocional pro produto',
  `dt_inicio` date DEFAULT NULL COMMENT 'Inicio da promoção',
  `dt_fim` date DEFAULT NULL COMMENT 'fim da promoção',
  `nu_quantidade_minima` int(11) DEFAULT NULL COMMENT 'Quantidade Mínima por compra',
  `nu_limite` int(11) DEFAULT NULL COMMENT 'Quantidade máxima por compra',
  `dt_cadastro` datetime DEFAULT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_produto` int(11) NOT NULL,
  `co_usuario` int(10) NOT NULL,
  PRIMARY KEY (`co_produto_promocao`,`co_produto`,`co_usuario`),
  KEY `fk_tb_promocao_produto_tb_produto1_idx` (`co_produto`),
  KEY `fk_tb_produto_promocao_tb_usuario1_idx` (`co_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_representante;


CREATE TABLE `tb_representante` (
  `co_representante` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Representante do Fornecedor',
  `dt_cadastro` datetime NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_consumidor` int(11) NOT NULL,
  `co_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`co_representante`,`co_consumidor`,`co_pessoa`),
  KEY `fk_tb_representante_tb_empresa1_idx` (`co_consumidor`),
  KEY `fk_TB_REPRESENTANTE_TB_PESSOA1_idx` (`co_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_sessao;


CREATE TABLE `tb_sessao` (
  `co_sessao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Sessão dos produtos',
  `ds_sessao` varchar(100) NOT NULL COMMENT 'Sessão da categoria',
  PRIMARY KEY (`co_sessao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_sit_entreg_ped;


CREATE TABLE `tb_sit_entreg_ped` (
  `co_sit_entreg_ped` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Códig oda situação da entrega ou pedido',
  `no_sit_entreg_ped` varchar(60) DEFAULT NULL,
  `sg_sit_entreg_ped` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`co_sit_entreg_ped`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO tb_sit_entreg_ped VALUES("1","Entregue","ET");

INSERT INTO tb_sit_entreg_ped VALUES("2","Aguardando","AG");

INSERT INTO tb_sit_entreg_ped VALUES("3","Atrasado","AT");




DROP TABLE IF EXISTS tb_sugestao;


CREATE TABLE `tb_sugestao` (
  `co_sugestao` int(11) NOT NULL AUTO_INCREMENT,
  `dt_cadastro` datetime DEFAULT NULL,
  `tp_sugestao` varchar(2) DEFAULT NULL COMMENT 'Tipo de Sugestão\nSG - Sugestão  / RC - Reclamação',
  `ds_titulo_sugestao` varchar(120) DEFAULT NULL COMMENT 'Título da sugestão',
  `ds_sugestao` text COMMENT 'Texto da sugestão',
  `co_usuario` int(10) NOT NULL,
  `co_imagem` int(10) unsigned NOT NULL,
  PRIMARY KEY (`co_sugestao`,`co_usuario`,`co_imagem`),
  KEY `fk_TB_SUGESTAO_TB_USUARIO1_idx` (`co_usuario`),
  KEY `fk_TB_SUGESTAO_TB_IMAGEM1_idx` (`co_imagem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_tipo_comissao;


CREATE TABLE `tb_tipo_comissao` (
  `co_tipo_comissao` int(11) NOT NULL AUTO_INCREMENT,
  `no_tipo_comissao` varchar(100) DEFAULT NULL,
  `sg_tipo_comissao` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`co_tipo_comissao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


INSERT INTO tb_tipo_comissao VALUES("1","Geral","GR");

INSERT INTO tb_tipo_comissao VALUES("2","Por Usuário","US");

INSERT INTO tb_tipo_comissao VALUES("3","Por Sessão","SS");

INSERT INTO tb_tipo_comissao VALUES("4","Por Produto","PD");




DROP TABLE IF EXISTS tb_tipo_negociacao;


CREATE TABLE `tb_tipo_negociacao` (
  `co_tipo_negociacao` int(11) NOT NULL AUTO_INCREMENT,
  `no_tipo_negociacao` varchar(45) DEFAULT NULL,
  `sg_tipo_negociacao` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`co_tipo_negociacao`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


INSERT INTO tb_tipo_negociacao VALUES("1","Compra","CP");

INSERT INTO tb_tipo_negociacao VALUES("2","Venda","VD");

INSERT INTO tb_tipo_negociacao VALUES("3","Cotação","CT");

INSERT INTO tb_tipo_negociacao VALUES("4","Orçamento","OR");

INSERT INTO tb_tipo_negociacao VALUES("5","Pagamento","PG");

INSERT INTO tb_tipo_negociacao VALUES("6","Recebimento","RC");

INSERT INTO tb_tipo_negociacao VALUES("7","Perda","PD");

INSERT INTO tb_tipo_negociacao VALUES("8","Devolução","DV");

INSERT INTO tb_tipo_negociacao VALUES("9","Retirada","RT");

INSERT INTO tb_tipo_negociacao VALUES("10","Trasnferência","TF");

INSERT INTO tb_tipo_negociacao VALUES("11","Pedido","PE");




DROP TABLE IF EXISTS tb_tipo_pagamento;


CREATE TABLE `tb_tipo_pagamento` (
  `co_tipo_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `ds_tipo_pagamento` varchar(45) DEFAULT NULL,
  `sg_tipo_pagamento` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`co_tipo_pagamento`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO tb_tipo_pagamento VALUES("1","Dinheiro","DI");

INSERT INTO tb_tipo_pagamento VALUES("2","Cheque","CH");

INSERT INTO tb_tipo_pagamento VALUES("3","Cartão de Débito","CD");

INSERT INTO tb_tipo_pagamento VALUES("4","Cartão de Crédito","CC");

INSERT INTO tb_tipo_pagamento VALUES("5","Boleto Bancário","BL");

INSERT INTO tb_tipo_pagamento VALUES("6","Promissória","PR");

INSERT INTO tb_tipo_pagamento VALUES("7","Outros","OU");




DROP TABLE IF EXISTS tb_transportadora;


CREATE TABLE `tb_transportadora` (
  `co_transportadora` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Fornecedor do Consumidor',
  `ds_observacao` text,
  `dt_cadastro` datetime NOT NULL,
  `st_status` varchar(1) DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_consumidor` int(11) NOT NULL,
  `co_empresa` int(11) NOT NULL,
  PRIMARY KEY (`co_transportadora`,`co_consumidor`,`co_empresa`),
  KEY `fk_tb_fornecedor_tb_consumidor1_idx` (`co_consumidor`),
  KEY `fk_TB_FORNECEDOR_TB_EMPRESA1_idx` (`co_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_unidade_venda;


CREATE TABLE `tb_unidade_venda` (
  `co_unidade_venda` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Manter unidade de venda',
  `no_unidade_venda` varchar(45) NOT NULL COMMENT 'Nome da unidade de venda',
  `sg_unidade_venda` varchar(3) NOT NULL COMMENT 'sigla da unidade de venda',
  PRIMARY KEY (`co_unidade_venda`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;


INSERT INTO tb_unidade_venda VALUES("1","Unidade","UN");

INSERT INTO tb_unidade_venda VALUES("2","Par","PR");

INSERT INTO tb_unidade_venda VALUES("3","Kilograma","KG");

INSERT INTO tb_unidade_venda VALUES("4","Grama","GR");

INSERT INTO tb_unidade_venda VALUES("5","Mêtro","MT");

INSERT INTO tb_unidade_venda VALUES("6","Centímetro","CM");

INSERT INTO tb_unidade_venda VALUES("7","Polegada","PL");

INSERT INTO tb_unidade_venda VALUES("8","Pacote","PT");

INSERT INTO tb_unidade_venda VALUES("9","Saco","SC");

INSERT INTO tb_unidade_venda VALUES("10","Rolo","RL");




DROP TABLE IF EXISTS tb_unidade_venda_consumidor;


CREATE TABLE `tb_unidade_venda_consumidor` (
  `co_unidade_venda_consumidor` int(11) NOT NULL AUTO_INCREMENT,
  `st_ativo` varchar(1) NOT NULL DEFAULT 'A' COMMENT '''A - Ativo / I - Inativo''',
  `co_unidade_venda` int(11) NOT NULL,
  `co_consumidor` int(11) NOT NULL,
  PRIMARY KEY (`co_unidade_venda_consumidor`,`co_unidade_venda`,`co_consumidor`),
  KEY `fk_TB_UNIDADE_VENDA_CONSUMIDOR_TB_UNIDADE_VENDA1_idx` (`co_unidade_venda`),
  KEY `fk_TB_UNIDADE_VENDA_CONSUMIDOR_TB_CONSUMIDOR1_idx` (`co_consumidor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS tb_usuario;


CREATE TABLE `tb_usuario` (
  `co_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `ds_login` varchar(50) NOT NULL,
  `ds_senha` varchar(100) NOT NULL,
  `ds_code` varchar(50) NOT NULL COMMENT 'Senha criptografada',
  `st_status` varchar(1) NOT NULL DEFAULT 'I' COMMENT '''A - Ativo / I - Inativo''',
  `dt_cadastro` datetime NOT NULL,
  `co_consumidor` int(11) NOT NULL DEFAULT '0',
  `co_imagem` int(10) NOT NULL DEFAULT '0',
  `co_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`co_usuario`,`co_consumidor`,`co_imagem`,`co_pessoa`),
  KEY `fk_tb_usuario_tb_empresa1_idx` (`co_consumidor`),
  KEY `fk_TB_USUARIO_TB_IMAGEM1_idx` (`co_imagem`),
  KEY `fk_TB_USUARIO_TB_PESSOA1_idx` (`co_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO tb_usuario VALUES("1","leobessa","123456**","TVRJek5EVTJLaW89","A","2016-02-18 10:10:10","0","1","1");




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




