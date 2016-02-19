<?php

class EmpresaModel{
    
    public static function CadastraEmpresa(array $dados){
        $cadastro = new Cadastra();
        $cadastro->Cadastrar(Constantes::EMPRESA_TABELA, $dados);
        return $cadastro->getUltimoIdInserido();
    }
    
    public static function PesquisaEmpresa(array $dados){
        $pesquisa = new Pesquisa();
        $where = $pesquisa->getClausula($dados);
        $pesquisa->Pesquisar(Constantes::EMPRESA_TABELA,$where);
        return $pesquisa->getResult();
    }
    
    public static function AtualizaEmpresa(array $dados,$id){
        $atualiza = new Atualiza();
        $atualiza->Atualizar(Constantes::MEMBRO_TABELA, $dados, "where ".Constantes::MEMBRO_CHAVE_PRIMARIA." = :id", "id={$id}");
        return $atualiza->getResult();
    }
    
    public static function PesquisaUmMembro($idMembro){
        $pesquisa = new Pesquisa();
        $pesquisa->Pesquisar(Constantes::MEMBRO_TABELA,"where ".Constantes::MEMBRO_CHAVE_PRIMARIA." = :id","id={$idMembro}");
        return $pesquisa->getResult();
    }
    
    public static function DeletaEmpresa($co_membro){
        $deleta = new Deleta();
        $deleta->Deletar(Constantes::MEMBRO_TABELA, "where ".Constantes::MEMBRO_CHAVE_PRIMARIA." = :membro", "membro={$co_membro}");
        return $deleta->getResult();
    }
    
}