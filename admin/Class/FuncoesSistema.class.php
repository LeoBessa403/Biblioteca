<?php

/**
 * Check.class [ HELPER ]
 * Classe responável por manipular e validade dados do sistema!
 *
 * @copyright (c) 2014, Leo Bessa
 */
class FuncoesSistema
{

    public static function retornoCheckbox($check)
    {
        if ($check):
            return "S";
        else:
            return "N";
        endif;
    }

    public static function OperacaoAuditoria($operacao)
    {

        switch ($operacao) {
            case "I":
                $op = '<span class="label label-success">INSERIU</span>';
                break;
            case "D":
                $op = '<span class="label label-danger">DELETOU</span>';
                break;
            case "U":
                $op = '<span class="label label-warning">ATUALIZOU</span>';
                break;
        }

        return $op;
    }


    public static function SituacaoUsuario($st)
    {

        switch ($st) {
            case "A":
                $op = '<span class="label label-success">ATIVO</span>';
                break;
            case "I":
                $op = '<span class="label label-danger">INATIVO</span>';
                break;
        }

        return $op;
    }

    public static function SituacaoSimNao($st)
    {
        if (!$st):
            $st = "N";
        endif;
        switch ($st) {
            case "S":
                $op = '<span class="label label-success">SIM</span>';
                break;
            case "N":
                $op = '<span class="label label-danger">NÃO</span>';
                break;
        }

        return $op;
    }

    public static function GetDadosContato($dados)
    {
        $contato['nu_tel1'] = (!empty($dados['nu_tel1']) ? $dados['nu_tel1'] : '');
        $contato['nu_tel2'] = (!empty($dados['nu_tel2']) ? $dados['nu_tel2'] : '');
        $contato['nu_tel3'] = (!empty($dados['nu_tel3']) ? $dados['nu_tel3'] : '');
        $contato['nu_tel_0800'] = (!empty($dados['nu_tel_0800']) ? $dados['nu_tel_0800'] : '');
        $contato['ds_site'] = (!empty($dados['ds_site']) ? $dados['ds_site'] : '');
        $contato['ds_email'] = (!empty($dados['nu_tel2']) ? $dados['ds_email'] : '');

        return $contato;
    }

    public static function GetDadosEndereco($dados)
    {
        $endereco['ds_endereco'] = (!empty($dados['ds_endereco']) ? $dados['ds_endereco'] : '');
        $endereco['ds_complemento'] = (!empty($dados['ds_complemento']) ? $dados['ds_complemento'] : '');
        $endereco['ds_bairro'] = (!empty($dados['ds_bairro']) ? $dados['ds_bairro'] : '');
        $endereco['no_cidade'] = (!empty($dados['no_cidade']) ? $dados['no_cidade'] : '');
        $endereco['nu_cep'] = (!empty($dados['nu_cep']) ? $dados['nu_cep'] : '');
        $endereco['sg_uf'] = (!empty($dados['sg_uf']) ? $dados['sg_uf'][0] : '');

        return $endereco;
    }


}