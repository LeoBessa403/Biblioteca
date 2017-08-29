<?php

/**
 * Imagem.Entidade [ ENTIDADE ]
 * @copyright (c) 2017, Leo Bessa
 */
class ImagemEntidade extends AbstractEntidade
{
    const TABELA = 'tb_imagem';
    const ENTIDADE = 'ImagemEntidade';
    const CHAVE = Constantes::CO_IMAGEM;

    private $co_imagem;
    private $ds_caminho;


    /**
     * @return array
     */
    public static function getCampos()
    {
        return [
            Constantes::CO_IMAGEM,
            Constantes::DS_CAMINHO,
        ];
    }

    /**
     * @return $relacionamentos
     */
    public static function getRelacionamentos()
    {
        $relacionamentos = Relacionamentos::getRelacionamentos();
        return $relacionamentos[static::TABELA];
    }


    /**
     * @return $co_imagem
     */
    public function getCoImagem()
    {
        return $this->co_imagem;
    }

    /**
     * @param $co_imagem
     * @return mixed
     */
    public function setCoImagem($co_imagem)
    {
        return $this->co_imagem = $co_imagem;
    }

    /**
     * @return $ds_caminho
     */
    public function getDsCaminho()
    {
        return $this->ds_caminho;
    }

    /**
     * @param $ds_caminho
     * @return mixed
     */
    public function setDsCaminho($ds_caminho)
    {
        return $this->ds_caminho = $ds_caminho;
    }

}