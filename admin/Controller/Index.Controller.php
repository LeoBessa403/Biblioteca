<?php

class Index
{

    function Index()
    {
        $InscricaoModel = new InscricaoModel();
        $PagamentoModel = new PagamentoModel();
        $inscricoes = $InscricaoModel->PesquisaTodos();
        $dados['TotalInscricoes'] = count($inscricoes);
        $dados['TotalArrecadado'] = 0;
        $dados['TotalNaoMembros'] = 0;
        $dados['TotalMembros'] = 0;
        $dados['TotalServos'] = 0;
        $dados['TotalNaoPago'] = 0;
        $dados['TotalParcial'] = 0;
        $dados['TotalConcluido'] = 0;
        $dados['TotalInscricoesRestantes'] = 0;

        /** @var InscricaoEntidade $inscricao */
        foreach ($inscricoes as $inscricao) {
            if ($inscricao->getDsMembroAtivo() == "N") {
                $dados['TotalNaoMembros'] = $dados['TotalNaoMembros'] + 1;
            } else {
                $dados['TotalMembros'] = $dados['TotalMembros'] + 1;
            }
            if ($inscricao->getStEquipeTrabalho() == "S") {
                $dados['TotalServos'] = $dados['TotalServos'] + 1;
            }

            if (!$inscricao->getCoPagamento()) {
                $pagamentoModel = new PagamentoModel();
                $parcelaModel = new ParcelamentoModel();
                $pagamento[Constantes::NU_TOTAL] = '120.00';
                $pagamento[Constantes::NU_PARCELAS] = 1;
                $pagamento[Constantes::CO_INSCRICAO] = $inscricao->getCoInscricao();

                $parcela[Constantes::CO_PAGAMENTO] = $pagamentoModel->Salva($pagamento);
                $parcela[Constantes::CO_TIPO_PAGAMENTO] = 1;
                $parcela[Constantes::NU_PARCELA] = 1;
                $parcela[Constantes::NU_VALOR_PARCELA] = '120.00';
                $parcela[Constantes::DT_VENCIMENTO] = Valida::DataAtualBanco('Y-m-d');

                $parcelaModel->Salva($parcela);
            }

            /** @var PagamentoEntidade $pagamentoInscricao */
            $pagamentoInscricao = $PagamentoModel->PesquisaUmRegistro($inscricao->getCoPagamento()->getCoPagamento());
            switch ($pagamentoInscricao->getTpSituacao()) {
                case "C":
                    $dados['TotalConcluido'] = $dados['TotalConcluido'] + 1;
                    if ($inscricao->getStEquipeTrabalho() == "N") {
                        $dados['TotalInscricoesRestantes'] = $dados['TotalInscricoesRestantes'] + 1;
                    }
                    break;
                case "N":
                    $dados['TotalNaoPago'] = $dados['TotalNaoPago'] + 1;
                    break;
                case "I":
                    $dados['TotalParcial'] = $dados['TotalParcial'] + 1;
                    if ($inscricao->getStEquipeTrabalho() == "N") {
                        $dados['TotalInscricoesRestantes'] = $dados['TotalInscricoesRestantes'] + 1;
                    }
                    break;
                default:
                    break;
            }
            foreach ($pagamentoInscricao->getCoParcelamento() as $pagamentoInsc) {
                $dados['TotalArrecadado'] = $dados['TotalArrecadado'] + $pagamentoInsc->getNuValorParcelaPago();
            }
        }
        $dados['TotalAArrecadar'] = Valida::FormataMoeda($dados['TotalInscricoes'] * 120.00 - $dados['TotalArrecadado']);
        $dados['TotalArrecadado'] = Valida::FormataMoeda($dados['TotalArrecadado']);

        $this->dados = $dados;
    }

    function Registrar()
    {
        $id = "CadastroUsuario";
        if (!empty($_POST[$id])):
            $usuarioControl = new Usuario();
            $usuarioControl->salvaUsuario($_POST, $_FILES, true);
        endif;

        $this->form = UsuarioForm::Cadastrar(false, true, 12);
    }

    public function Acessar()
    {
        $acesso = UrlAmigavel::PegaParametro('acesso');
        $class = 0;
        $msg = "";
        $visivel = true;

        switch ($acesso) {
            case 'B':
                $msg = "Por Favor, Preencha o Usuário e senha!";
                $class = 2;
                break;
            case 'R':
                $msg = "Acesso Restrito, Você não tem permição para acessar!";
                $class = 4;
                break;
            case 'A':
                $msg = "CPF ou senha Inválido!";
                $class = 3;
                break;
            case 'I':
                $msg = "Usuário Inativo!";
                $class = 3;
                break;
            case 'D':
                $msg = "Usuário deslogado com sucesso!";
                $class = 1;
                break;
            case 'E':
                $msg = "Sua Sessão foi Expirada!";
                $class = 2;
                break;
            default:
                $visivel = false;
                break;

        }
        $this->class = " " . $class;
        $this->visivel = $visivel;
        $this->msg = $msg;
    }

    public static function Logar()
    {
        // CLASSE DE LOGAR
        $cpf = Valida::RetiraMascara(Valida::LimpaVariavel($_POST[Constantes::NU_CPF]));
        $senha = Valida::LimpaVariavel($_POST[Constantes::DS_SENHA]);

        if (($cpf != "") && ($senha != "")):

            $Model = new UsuarioModel();
            $usuarios = $Model->PesquisaTodos();

            $user = "";
            // Codifica a senha
            $senha = base64_encode(base64_encode($senha));
            /** @var UsuarioEntidade $usuario */
            foreach ($usuarios as $usuario):
//                debug($usuario->getCoPessoa()->getNuCpf(). " - " . $cpf . " / " .
//                    strtoupper($usuario->getDsCode()) . " - " . strtoupper($senha));
                if (($usuario->getCoPessoa()->getNuCpf() == $cpf)
                    && (strtoupper($usuario->getDsCode()) == strtoupper($senha))
                ) {
                    if ($usuario->getStStatus() == "I"):
                        Redireciona(ADMIN . LOGIN . Valida::GeraParametro("acesso/I"));
                        exit();
                    endif;
                    /** @var UsuarioEntidade $user */
                    $user = $usuario;
                    break;
                }
            endforeach;
            if ($user != ""):
                $acesso[Constantes::DS_SESSION_ID] = session_id();
                $acesso[Constantes::CO_USUARIO] = $user->getCoUsuario();
                $acessoObj = new AcessoModel();
                $meuAcesso = $acessoObj->PesquisaUmQuando($acesso);
                if ($meuAcesso) {
                    $novoAcesso[Constantes::DT_FIM_ACESSO] = Valida::DataAtualBanco();
                    $acessoObj->Salva($novoAcesso, $user->getCoUsuario());
                } else {
                    $acesso[Constantes::DT_INICIO_ACESSO] = Valida::DataAtualBanco();
                    $acesso[Constantes::DT_FIM_ACESSO] = Valida::DataAtualBanco();
                    $acesso[Constantes::CO_USUARIO] = $user->getCoUsuario();
                    $acessoObj->Salva($acesso);
                }

                $perfis = array();
                $no_perfis = array();
                /** @var UsuarioPerfilEntidade $perfil */
                foreach ($user->getCoUsuarioPerfil() as $perfil) {
                    $perfis[] = $perfil->getCoPerfil()->getCoPerfil();
                    $no_perfis[] = $perfil->getCoPerfil()->getNoPerfil();
                }
                $usuarioAcesso[Constantes::CO_USUARIO] = $user->getCoUsuario();
                $usuarioAcesso[Constantes::DS_CAMINHO] = $user->getCoImagem()->getDsCaminho();
                $usuarioAcesso[Constantes::NU_CPF] = $user->getCoPessoa()->getNuCpf();
                $usuarioAcesso[Constantes::NO_PESSOA] = $user->getCoPessoa()->getNoPessoa();
                $usuarioAcesso[Constantes::ST_SEXO] = $user->getCoPessoa()->getStSexo();
                $usuarioAcesso[Constantes::DT_FIM_ACESSO] = Valida::DataAtualBanco();
                $usuarioAcesso[CAMPO_PERFIL] = implode(',', $perfis);
                $usuarioAcesso['no_perfis'] = implode(', ', $no_perfis);


                $session = new Session();
                $session->setUser($usuarioAcesso);
                Redireciona(ADMIN . LOGADO);
            else:
                Redireciona(ADMIN . LOGIN . Valida::GeraParametro("acesso/A"));
            endif;
        else:
            Redireciona(ADMIN . LOGIN . Valida::GeraParametro("acesso/B"));
        endif;
    }


    //*************************************************************//
    //************ EXEMPLOS DE ACTION ****************************//
    //*************************************************************//

    // EXEMPLO DE ENVIO DE EMAIL
    function VerGraficos()
    {
//        $grafico = new Grafico(Grafico::PORCENTAGEM, "Teste Porcentagem", "div_porcentagem");
//        $grafico->SetDados(array("Teórica" => 80, "Prática e Teórica" => 12));
//        $grafico->GeraGrafico();

//        $grafico = new Grafico(Grafico::MAPA, "Teste Mapa", "div_mapa");
//        $grafico->SetDados(array(
//                "['Cidade','Acessos','Visitas']",
//                "['Natal',2761477,1285.31]",
//                "['Brasília',1324110,181.76]",
//                "['São Paulo',959574,117.27]",
//                "['Rio de Janeiro',67370,213.44]",
//                "['Belo Horizonte',52192,43.43]",
//                "['Maceio',38262,11]"
//            )
//        );
//        $grafico->GeraGrafico();

//        $grafico = new Grafico(Grafico::COLUNA, "Teste coluna", "div_coluna");
//        $grafico->SetDados(array(
//            "['Ano','Gordos','Obesos','Magros']",
//            "['Jan',1080,1780,180]",
//            "['Fev',1170,670,180]",
//            "['Mar',660,960,180]",
//            "['Abr',1030,130,540]"
//        ));
//        $grafico->GeraGrafico();
//
//        $grafico = new Grafico(Grafico::LINHA, "Teste Linha", "div_linha");
//        $grafico->SetDados(array(
//            "['Ano','Gordos','Obesos','Magros']",
//            "['2004',1080,1780,180]",
//            "['2005',1170,670,10]",
//            "['2006',660,960,10]",
//            "['2007',1030,130,540]"
//        ));
//        $grafico->GeraGrafico();
//
        $grafico = new Grafico(Grafico::PIZZA, "Total do programa (Teórica)", "div_pizza");
        $grafico->SetDados(array(
            "['Categorias','Procedimentos/Mês']",
            "['Meta Atingida',800]",
            "['Meta Restante',356]",
        ));
        $grafico->GeraGrafico();

        $grafico = new Grafico(Grafico::COLUNA, "1º Semestre", "div_coluna");
//        $grafico->SetDados(array(
//            "['Horas','Teórica','Teórico-Prática','Prática']",
//            "['Horas',256, 128 , 96]"
//        ));
        $grafico->SetDados(array(
            "['Horas','Horas',{ role: 'annotation' }, { role: 'style' }]",
            "['Teórica',256, 256, 'blue']",
            "['Teórico-Prática',128, 128, 'red']",
            "['Prática',96, 96, 'green']",
        ));
        $grafico->GeraGrafico();

    }

    // EXEMPLO DE ENVIO DE EMAIL
    function EmailCliente()
    {
        $email = new Email();

        // Índice = Nome, e Valor = Email.
        $emails = array(
            "Leo Bessa Hot" => "leodjx@hotmail.com",
            "Lili Gmail" => "lililasp@gmail.com",
            "Lele Hot" => "lele.403@hotmail.com",
            "Leo Bessa Gmail" => "leonardomcbessa@gmail.com"
        );
        $Mensagem = "<h2>Olá vc ganhou um Bônus de 5 Milhões.... que piada</h2>";

        $email->setEmailDestinatario($emails)
            ->setTitulo("Email de  Teste Pra Todos")
            ->setMensagem($Mensagem);

        // Variável para validação de Emails Enviados com Sucesso.
        $this->Email = $email->Enviar();
    }

    // LISTAGEM COM PESQUISA AVANÇADA
    function ListarMembros()
    {
        $dados = array();
        if (!empty($_POST)):
            $dados['st_status'] = $_POST['st_status'][0];
            $dados['no_membro'] = $_POST['no_membro'];
        endif;
        $this->result = MembrosModel::PesquisaMembros($dados);
    }

    // AÇÃO DA TELA DE PESQUISA AVANÇADA
    function ListarMembrosPesquisaAvancada()
    {

        $id = "pesquisaMembros";

        $formulario = new Form($id, "admin/Membros/ListarMembros", "Pesquisa", 12);


        $label_options = array("" => "Todos", "S" => "Ativo", "N" => "Inativo");
        $formulario
            ->setLabel("Status do Membro")
            ->setId("st_status")
            ->setType("select")
            ->setOptions($label_options)
            ->CriaInpunt();

        $formulario
            ->setId("no_membro")
            ->setIcon("clip-user-6")
            ->setLabel("Nome do Membro")
            ->setInfo("Pode ser Parte do nome")
            ->CriaInpunt();

        echo $formulario->finalizaFormPesquisaAvancada();

    }

    // AÇÃO DE EXPORTAÇÃO
    function ExportarCategoria()
    {

        $formato = UrlAmigavel::PegaParametro("formato");
        $result = CategoriaModel::PesquisaCategoria();
        $i = 0;
        foreach ($result as $value) {
            $res[$i]['id_categoria'] = $value['id_categoria'];
            $res[$i]['nome'] = $value['nome'];
            $i++;
        }
        $Colunas = array('Código', 'Categoria');
        $exporta = new Exportacao($formato, "Relatório de Categorias");
        // $exporta->setPapelOrientacao("paisagem");
        $exporta->setColunas($Colunas);
        $exporta->setConteudo($res);
        $exporta->GeraArquivo();

    }
}

?>