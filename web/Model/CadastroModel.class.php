<?php

class CadastroModel{
    
    public static function CadastraDados(array $dados){
        $cadastro = new Cadastra();
        $cadastro->Cadastrar(MEMBRO_TABELA, $dados);
        return $cadastro->getUltimoIdInserido();
    }
    
    public static function PesquisaMembroJaCadastrado($dados){
        $pesquisa = new Pesquisa();
        $pesquisa->Pesquisar(MEMBRO_TABELA,"where no_membro = :nome and dt_nascimento = :nascimento","nome={$dados['no_membro']}&nascimento={$dados['dt_nascimento']}");
        return $pesquisa->getResult();
    }
    
//    public static function AtualizaDados(array $dados,$id){
//        $atualiza = new Atualiza();
//        $atualiza->Atualizar(DADOS_TABELA, $dados, "where ".DADOS_CHAVE_PRIMARIA." = :id", "id={$id}");
//        return $atualiza->getResult();
//    }
    
    
}