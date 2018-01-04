<?php

class AcessoForm
{

    public static function Pesquisar()
    {
        $id = "pesquisaAcesso";

        $formulario = new Form($id, ADMIN . "/" . UrlAmigavel::$controller . "/" . UrlAmigavel::$action, "Pesquisa", 12);

        $formulario
            ->setId("no_pessoa")
            ->setIcon("clip-user-6")
            ->setLabel("Nome do Usuario")
            ->setInfo("Pode ser Parte do nome")
            ->CriaInpunt();

        $formulario
            ->setId(NU_CPF)
            ->setClasses("cpf")
            ->setTamanhoInput(7)
            ->setLabel("CPF")
            ->CriaInpunt();

        $formulario
            ->setId(DT_INICIO_ACESSO)
            ->setIcon("clip-calendar-3")
            ->setTamanhoInput(6)
            ->setClasses("data dt1")
            ->setLabel("Ínicio")
            ->CriaInpunt();

        $formulario
            ->setId(DT_FIM_ACESSO)
            ->setIcon("clip-calendar-3")
            ->setTamanhoInput(6)
            ->setClasses("data dt2")
            ->setLabel("Fim")
            ->CriaInpunt();

        return $formulario->finalizaFormPesquisaAvancada();
    }
}
?>
   