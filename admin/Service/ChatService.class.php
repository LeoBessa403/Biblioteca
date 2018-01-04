<?php

/**
 * ChatService.class [ SEVICE ]
 * @copyright (c) 2018, Leo Bessa
 */
class  ChatService extends AbstractService
{

    private $ObjetoModel;


    public function __construct()
    {
        parent::__construct(ChatEntidade::ENTIDADE);
        $this->ObjetoModel = New ChatModel();
    }


}