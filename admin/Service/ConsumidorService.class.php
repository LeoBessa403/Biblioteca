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
        /** @var ContatoService $contatoService */
        $contatoService = $this->getService(CONTATO_SERVICE);
        /** @var EnderecoService $enderecoService */
        $enderecoService = $this->getService(ENDERECO_SERVICE);
        /** @var PessoaService $pessoaService */
        $pessoaService = $this->getService(PESSOA_SERVICE);
        /** @var EmpresaService $empresaService */
        $empresaService = $this->getService(EMPRESA_SERVICE);

        $consumidor = $this->getDados($dados, ConsumidorEntidade::ENTIDADE);
        $contato = $this->getDados($dados, ContatoEntidade::ENTIDADE);
        $endereco = $this->getDados($dados, EnderecoEntidade::ENTIDADE);
        $endereco[SG_UF] = $endereco[SG_UF][0];
        $endereco[NU_CEP] = Valida::RetiraMascara($endereco[NU_CEP]);
        $consumidor[ST_STATUS] = SimNaoEnum::NAO;

        $idContato = $contatoService->Salva($contato);
        $idEndereco = $enderecoService->Salva($endereco);

        if(!empty($dados['tipo'])){
            $pessoa = $this->getDados($dados, PessoaEntidade::ENTIDADE);
            $pessoa[CO_CONTATO] = $idContato;
            $pessoa[CO_ENDERECO] = $idEndereco;
            $pessoa[NO_PESSOA] = $dados['no_consumidor'];
            $consumidor[CO_PESSOA] = $pessoaService->Salva($pessoa);
        }else{
            $empresa = $this->getDados($dados, EmpresaEntidade::ENTIDADE);
            $empresa[CO_CONTATO] = $idContato;
            $empresa[CO_ENDERECO] = $idEndereco;
            $empresa[NO_EMPRESA] = $dados['no_consumidor'];
            $consumidor[CO_EMPRESA] = $empresaService->Salva($empresa);
        }
        $idConsumidor = $this->Salva($consumidor);
        if ($idConsumidor):
            $session = new Session();
            $session->setSession(CADASTRADO, "OK");
        endif;

    }

}