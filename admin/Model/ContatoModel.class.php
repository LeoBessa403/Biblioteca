<?php

class ContatoModel{
    
    public static function CadastraContato(array $dados){
        $cadastro = new Cadastra();
        $cadastro->Cadastrar(Constantes::CONTATO_TABELA, $dados);
        return $cadastro->getUltimoIdInserido();
    }
    
    public static function AtualizaContato(array $dados,$id){
        $atualiza = new Atualiza();
        $atualiza->Atualizar(Constantes::CONTATO_TABELA, $dados, "where ".Constantes::CONTATO_CHAVE_PRIMARIA." = :id", "id={$id}");
        return $atualiza->getResult();
    }
    
    
}