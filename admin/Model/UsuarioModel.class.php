<?php

/**
 * UsuarioModel.class [ MODEL ]
 * @copyright (c) 2018, Leo Bessa
 */
class  UsuarioModel extends AbstractModel
{

    public function __construct()
    {
        parent::__construct(UsuarioEntidade::ENTIDADE);
    }

    public function PesquisaAvancada($Condicoes)
    {
        $tabela = UsuarioEntidade::TABELA." usu" .
            " inner join ".PessoaEntidade::TABELA." pes" .
            " on usu.".PessoaEntidade::CHAVE." = pes.".PessoaEntidade::CHAVE;

        $campos = "usu.*";
        $pesquisa = new Pesquisa();
        $where = $pesquisa->getClausula($Condicoes);
        $pesquisa->Pesquisar($tabela, $where, null, $campos);
        $usuarios = [];
        /** @var UsuarioEntidade $usuario */
        foreach ($pesquisa->getResult() as $usuario){
            $usu[0] = $usuario;
            $usuarios[] = $this->getUmObjeto(UsuarioEntidade::ENTIDADE, $usu);
        }
        return $usuarios;
    }

}