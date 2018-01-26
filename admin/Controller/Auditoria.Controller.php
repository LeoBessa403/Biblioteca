<?php

class Auditoria extends AbstractController
{
    public $result;
    public $perfis;
    public $perfis2;

    function ListarAuditoria()
    {
        /** @var AuditoriaService $auditoriaService */
        $auditoriaService = $this->getService(AUDITORIA_SERVICE);
        $this->result = $auditoriaService->PesquisaTodos();
    }

    function DetalharAuditoria()
    {
        /** @var AuditoriaService $auditoriaService */
        $auditoriaService = $this->getService(AUDITORIA_SERVICE);
        /** @var PerfilService $perfilService */
        $perfilService = $this->getService(PERFIL_SERVICE);

        $id = UrlAmigavel::PegaParametro("aud");
        /** @var AuditoriaEntidade result */
        $this->result = $auditoriaService->PesquisaUmRegistro($id);
        $usuarioModel = new UsuarioModel();
        if($this->result->getCoUsuario()){
            /** @var UsuarioEntidade $usuario */
            $usuario = $usuarioModel->PesquisaUmRegistro($this->result->getCoUsuario()->getCoUsuario());
            $perfis = $perfilService->montaComboPerfil($usuario);
            $this->perfis = implode(', ',$perfis);
        }else{
            $this->perfis = '';
        }
    }
}

?>
   