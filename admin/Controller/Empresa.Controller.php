<?php
          
class Empresa{
    
    public $result;
    public $resultAlt;
    public $form;
            
    function Index(){
    }
    
    function CadastroEmpresa(){
       
        $id = "cadastroMembro";
        
        if(!empty($_POST[$id])):
             if(Valida::ValPerfil("EditarMembros")):
                $dados = $_POST; 
                $dados['dt_cadastro']   = Valida::DataAtualBanco();
                $dados['dt_nascimento'] = explode(' ', Valida::DataDB($dados['dt_nascimento'])); 
                $dados['dt_nascimento'] = $dados['dt_nascimento'][0]; 
                $dados['st_trabalha']   = FuncoesSistema::retornoCheckbox((isset($dados['st_trabalha'])) ? $dados['st_trabalha'] : null); 
                $dados['st_estuda']     = FuncoesSistema::retornoCheckbox((isset($dados['st_estuda'])) ? $dados['st_estuda'] : null); 
                $dados['st_batizado']   = FuncoesSistema::retornoCheckbox((isset($dados['st_batizado'])) ? $dados['st_batizado'] : null); 
                $dados['st_eucaristia'] = FuncoesSistema::retornoCheckbox((isset($dados['st_eucaristia'])) ? $dados['st_eucaristia'] : null); 
                $dados['st_crisma']     = FuncoesSistema::retornoCheckbox((isset($dados['st_crisma'])) ? $dados['st_crisma'] : null); 
                $dados['st_status']     = "N"; 
                $dados['no_membro']     = trim($dados['no_membro']);

//                debug($dados,1);
                
                $pesquisa['dt_nascimento'] = $dados['dt_nascimento'];
                $pesquisa['no_membro']     = $dados['no_membro'];

                $membro = CadastroModel::PesquisaMembroJaCadastrado($pesquisa);

                if($membro):
                    $this->resultAlt = true;
                else:
                    $session = new Session();
                    $idMembro = $dados["co_membro"];
                    unset($dados[$id],$dados["co_membro"]);                     
                    $ok = MembrosModel::AtualizaMembros($dados,$idMembro);
                    if($ok):
                         $session->setSession(ATUALIZADO, "OK");
                    endif;
                endif;
                $this->ListarMembros();
                UrlAmigavel::$action = "ListarMembros";
            endif;          
        endif;  
        
        $idMembro = UrlAmigavel::PegaParametro("memb");
        $res = array();
        if($idMembro && Valida::ValPerfil("EditarMembros")):
            $res = MembrosModel::PesquisaUmMembro($idMembro);
            $res = $res[0];
            $res["dt_nascimento"] = Valida::DataShow($res["dt_nascimento"],"d/m/Y"); 
        endif;   
        
        $formulario = new Form($id, "admin/Membros/CadastroMembros");
        $formulario->setValor($res);
        
        $formulario
            ->setId("no_membro")
            ->setIcon("clip-user-6") 
            ->setClasses("ob nome")
            ->setInfo("O Nome deve ser Completo Mínimo de 10 Caracteres")
            ->setLabel("Nome Completo")
            ->CriaInpunt();
      
        $formulario
            ->setId("ds_endereco")
            ->setClasses("ob")
            ->setLabel("Endereço")
            ->CriaInpunt();
      
        $formulario
            ->setId("ds_bairro")
            ->setLabel("Bairro")
            ->CriaInpunt();
      
        $formulario
            ->setId("nu_tel1")
            ->setTamanhoInput(6)
            ->setClasses("tel ob")
            ->setIcon("fa-mobile fa")    
            ->setLabel("Telefone Celular 1")
            ->CriaInpunt();
      
        $formulario
            ->setId("nu_tel2")
            ->setTamanhoInput(6)
            ->setIcon("clip-phone-2")
            ->setClasses("tel")
            ->setLabel("Telefone Celular 2")
            ->CriaInpunt();
      
        $formulario
            ->setId("nu_tel3")
            ->setTamanhoInput(6)
            ->setIcon("clip-phone-hang-up")
            ->setClasses("tel")
            ->setLabel("Telefone Residencial")
            ->CriaInpunt();
        
        $formulario
            ->setId("dt_nascimento")
            ->setIcon("clip-calendar-3")
            ->setTamanhoInput(6)
            ->setClasses("data ob")
            ->setLabel("Nascimento")
            ->CriaInpunt();
      
      
        $formulario
            ->setId("no_responsavel") 
            ->setClasses("nome")
            ->setLabel("Nome do Respónsavel")
            ->CriaInpunt();
      
        $formulario
            ->setId("ds_email")
            ->setIcon("fa-envelope fa")
            ->setClasses("email")
            ->setLabel("Email")
            ->CriaInpunt();
        
        $checked = "";
        if(!empty($res)):
            if($res['st_trabalha'] == "S"):
                $checked = "checked";
            endif;
        endif;
        
        $label_options = array("Sim","Não","azul","verde");
        $formulario
            ->setLabel("Trabalha?")
            ->setClasses($checked)
            ->setTamanhoInput(6)
            ->setId("st_trabalha")
            ->setType("checkbox")
            ->setOptions($label_options)
            ->CriaInpunt();  
        
        $checked = "";
        if(!empty($res)):
            if($res['st_estuda'] == "S"):
                $checked = "checked";
            endif;
        endif;
        
        $label_options = array("Sim","Não","azul","verde");
        $formulario
            ->setLabel("Estuda?")
            ->setClasses($checked)
            ->setTamanhoInput(6)
            ->setId("st_estuda")
            ->setType("checkbox")
            ->setOptions($label_options)
            ->CriaInpunt();
        
        $checked = "";
        if(!empty($res)):
            if($res['st_batizado'] == "S"):
                $checked = "checked";
            endif;
        endif;
        
        $label_options = array("Sim","Não","azul","verde");
        $formulario
            ->setLabel("Batizado?")
            ->setClasses($checked)
            ->setTamanhoInput(4)
            ->setId("st_batizado")
            ->setType("checkbox")
            ->setOptions($label_options)
            ->CriaInpunt();
        
        $checked = "";
        if(!empty($res)):
            if($res['st_eucaristia'] == "S"):
                $checked = "checked";
            endif;
        endif;
        
        $label_options = array("Sim","Não","azul","verde");
        $formulario
            ->setLabel("Já fiz 1° Comunhão?")
            ->setTamanhoInput(4)
            ->setClasses($checked)
            ->setId("st_eucaristia")
            ->setType("checkbox")
            ->setOptions($label_options)
            ->CriaInpunt(); 
        
        $checked = "";
        if(!empty($res)):
            if($res['st_crisma'] == "S"):
                $checked = "checked";
            endif;
        endif;
        
        $label_options = array("Sim","Não","azul","verde");
        $formulario
            ->setLabel("Crismado?")
            ->setClasses($checked)
            ->setTamanhoInput(4)
            ->setId("st_crisma")
            ->setType("checkbox")
            ->setOptions($label_options)
            ->CriaInpunt(); 

      
        $formulario
            ->setType("textarea")
            ->setId("ds_conhecimento")
            ->setLabel("Como Conheceu o GEJ")
            ->CriaInpunt();
      
              
        if($idMembro):
            $formulario
                ->setType("hidden")
                ->setId("co_membro")
                ->setValues($idMembro)
                ->CriaInpunt();
          endif;
        
        $this->form = $formulario->finalizaForm(); 

    }
    
    
}
?>
   