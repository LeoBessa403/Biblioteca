
INSERT INTO `tb_contato` (`co_contato`, `nu_tel1`, `nu_tel2`, `nu_tel3`, `nu_tel4`, `ds_email`, `ds_site`) VALUES
(1, '61993274991', '6130826060', NULL, NULL, 'leonardomcbessa@gmail.com', NULL);


INSERT INTO `tb_endereco` (`co_endereco`, `ds_endereco`, `ds_complemento`, `ds_bairro`, `nu_cep`, `no_cidade`, `sg_uf`) VALUES
(1, 'qr 403 conjunto 10 casa 28', NULL, 'Samambaia Norte', '72319111', 'Brasília', 'DF');



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


INSERT INTO `tb_perfil` (`co_perfil`, `no_perfil`, `st_status`, `co_cliente_sistema`) VALUES
(1, 'Master', 'A', 0);



INSERT INTO `tb_perfil_funcionalidade` (`co_perfil_funcionalidade`, `co_perfil`, `co_funcionalidade`) VALUES
(1, 1, 1);



INSERT INTO `tb_pessoa` (`co_pessoa`, `nu_cpf`, `no_pessoa`, `nu_rg`, `dt_cadastro`, `dt_nascimento`, `st_sexo`, `st_estado_civil`, `co_endereco`, `co_contato`) VALUES
(1, '72681438187', 'Leonardo Machado Carvalho Bessa', '2077811', '2016-10-31 00:00:00', '1984-07-06', 'M', 'S', 1, 1);



INSERT INTO `tb_usuario` (`co_usuario`, `ds_login`, `ds_senha`, `ds_code`, `st_status`, `dt_cadastro`, `co_cliente_sistema`, `co_imagem`, `co_pessoa`) VALUES
(1, 'leobessa', '123456**', 'TVRJek5EVTJLaW89', 'A', '2016-10-31 00:00:00', 0, 0, 1);

INSERT INTO `tb_usuario_perfil` (`co_usuario_perfil`, `co_usuario`, `co_perfil`) VALUES
(1, 1, 1);

INSERT INTO `tb_tipo_negociacao` (`co_tipo_negociacao`, `no_tipo_negociacao`, `sg_tipo_negociacao`) VALUES(1, 'Compra', 'CP'),(2, 'Venda', 'VD'),(3, 'Cotação', 'CT'),
(4, 'Orçamento', 'OR'),(5, 'Pagamento', 'PG'),(6, 'Recebimento', 'RC'),(7, 'Perda', 'PD'),(8, 'Devolução', 'DV');