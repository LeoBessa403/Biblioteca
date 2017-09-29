<?php

/**
 * ConsumidorService.class [ SEVICE ]
 * @copyright (c) 2017, Leo Bessa
 */
class  ConsumidorService extends AbstractService
{

    public function __construct()
    {
        parent::__construct(ConsumidorEntidade::ENTIDADE);
    }

    /**
     * @param $dados
     */
    public function salvarConsumidor($dados)
    {
        $consumidor = $this->getDados($dados, ConsumidorEntidade::ENTIDADE);
        debug($consumidor);

        $contato = FuncoesSistema::GetDadosContato($dados);
        $endereco = FuncoesSistema::GetDadosEndereco($dados);

        $idContato = ContatoModel::CadastraContato($contato);
        $idEndereco = EnderecoModel::CadastraEndereco($endereco);

        $Consumidor['no_Consumidor'] = $dados['no_Consumidor'];
        $Consumidor['no_fantasia'] = $dados['no_fantasia'];
        $Consumidor['nu_cpf'] = (!empty($dados['nu_cpf']) ? $dados['nu_cpf'] : '');
        $Consumidor['nu_cnpj'] = (!empty($dados['nu_cnpj']) ? $dados['nu_cnpj'] : '');
        $Consumidor['ds_observacao'] = $dados['ds_observacao'];
        $Consumidor['no_responsavel'] = $dados['no_responsavel'];
        $Consumidor['dt_cadastro'] = Valida::DataAtualBanco('Y-m-d');
        $Consumidor[CONTATO_CHAVE_PRIMARIA] = $idContato;
        $Consumidor[ENDERECO_CHAVE_PRIMARIA] = $idEndereco;

        $idConsumidor = ConsumidorModel::CadastraConsumidor($Consumidor);
        if ($idConsumidor):
            $session = new Session();
            $session->setSession(CADASTRADO, "OK");
        endif;

    }

}