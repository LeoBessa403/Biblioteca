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
        $check = (isset($check)) ? $check : null;
        if ($check):
            return "S";
        else:
            return "N";
        endif;
    }

    public static function retornoSexo($sexo)
    {
        switch ($sexo) {
            case "M":
                $op = 'Masculino';
                break;
            case "F":
                $op = 'Feminino';
                break;
            default:
                $op = null;
                break;
        }

        return $op;
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

    public static function GeraCodigo()
    {

        $codigo = '';
        for ($p = 0; $p < 2; $p++) {
            for ($m = 0; $m < 3; $m++) {
                $numero = rand(1, 26);
                switch ($numero) {
                    case '1':
                        $letra = 'A';
                        break;
                    case '2':
                        $letra = 'B';
                        break;
                    case '3':
                        $letra = 'C';
                        break;
                    case '4':
                        $letra = 'D';
                        break;
                    case '5':
                        $letra = 'E';
                        break;
                    case '6':
                        $letra = 'F';
                        break;
                    case '7':
                        $letra = 'G';
                        break;
                    case '8':
                        $letra = 'H';
                        break;
                    case '9':
                        $letra = 'K';
                        break;
                    case '10':
                        $letra = 'I';
                        break;
                    case '11':
                        $letra = 'J';
                        break;
                    case '12':
                        $letra = 'L';
                        break;
                    case '13':
                        $letra = 'M';
                        break;
                    case '14':
                        $letra = 'N';
                        break;
                    case '15':
                        $letra = 'O';
                        break;
                    case '16':
                        $letra = 'P';
                        break;
                    case '17':
                        $letra = 'Q';
                        break;
                    case '18':
                        $letra = 'R';
                        break;
                    case '19':
                        $letra = 'S';
                        break;
                    case '20':
                        $letra = 'T';
                        break;
                    case '21':
                        $letra = 'U';
                        break;
                    case '22':
                        $letra = 'V';
                        break;
                    case '23':
                        $letra = 'Y';
                        break;
                    case '24':
                        $letra = 'X';
                        break;
                    case '25':
                        $letra = 'W';
                        break;
                    case '26':
                        $letra = 'Z';
                        break;
                }
                $codigo .= $letra;
            }

            $numero = rand(0, 9);
            $codigo .= $numero;
        }

        return $codigo;
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

    public static function SituacaoUsuarioLabel($st)
    {

        switch ($st) {
            case "A":
                $op = 'ATIVO';
                break;
            case "I":
                $op = 'INATIVO';
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

    public static function Pagamento($st)
    {
        switch ($st) {
            case "C":
                $op = '<span class="label label-success">Concluído</span>';
                break;
            case "N":
                $op = '<span class="label label-danger">Não Pago</span>';
                break;
            case "I":
                $op = '<span class="label label-info">Parcial</span>';
                break;
            default:
                $op = '';
                break;
        }

        return $op;
    }


}