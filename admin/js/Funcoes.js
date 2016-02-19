var Funcoes = function () {
    var inicio = function () {

              // CADASTRO DE EMPRESA
                function disabilitaCamposEmpresa(){
                     if($("#tipo").prop('checked')){
                         $("#nu_cnpj").attr("disabled",true).val("");
                         $("#nu_cpf").attr("disabled",false);
                     }else{
                         $("#nu_cpf").attr("disabled",true).val("");
                         $("#nu_cnpj").attr("disabled",false);
                     }
                }

                disabilitaCamposEmpresa();

                // CADASTRO DE EMPRESA
                $("#tipo").change(function(){
                    $('#nu_cpf,#nu_cnpj').parent(".form-group").removeClass('has-success has-error');
                    $('span#nu_cpf-info').text("").append('<span class="help-block" id="cpf-info"><i class="fa fa-info-circle"></i> Caso seja Pessoa Física</span>');
                    $('span#nu_cnpj-info').text("").append('<span class="help-block" id="cpf-info"><i class="fa fa-info-circle"></i> Caso seja Pessoa Jurídica</span>');
                    disabilitaCamposEmpresa();
                });
                
                
                
    };
    return {
        init: function () {
            inicio();
        },
        Alerta: function(msg){
            $(".aviso .modal-header").removeClass().addClass("modal-header btn btn-warning");
            $(".aviso #icone").removeClass().addClass("btn btn-yellow");
            $(".aviso i").removeClass().addClass("fa fa-exclamation-triangle");
            $(".aviso .modal-header .modal-title").text("ALERTA");
            $(".aviso #confirmacao_msg b").html(msg);
            $("#aviso").click();
        },
        Sucesso: function(msg){
            $(".aviso .modal-header").removeClass().addClass("modal-header btn btn-success");
            $(".aviso #icone").removeClass().addClass("btn btn-green");
            $(".aviso i").removeClass().addClass("fa fa-check")
            $(".aviso .modal-header .modal-title").text("SUCESSO");
            $(".aviso #confirmacao_msg b").html(msg);
            $("#aviso").click();
        },
        Informativo: function(msg){
            $(".aviso .modal-header").removeClass().addClass("modal-header btn btn-info");
            $(".aviso #icone").removeClass().addClass("btn btn-primary");
            $(".aviso i").removeClass().addClass("fa fa-info-circle");
            $(".aviso .modal-header .modal-title").text("INFORMATIVO");
            $(".aviso #confirmacao_msg b").html(msg);
            $("#aviso").click();
        },
        Erro: function(msg){
            $(".aviso .modal-header").removeClass().addClass("modal-header btn btn-bricky");
            $(".aviso #icone").removeClass().addClass("btn btn-bricky");
            $(".aviso i").removeClass().addClass("fa fa-frown-o");
            $(".aviso .modal-header .modal-title").text("Erro");
            $(".aviso #confirmacao_msg b").html(msg);
            $("#aviso").click();
        },
        
        MSG_CONFIRMACAO: "CONFIRMAÇÃO",
        
        MSG01: "Sua Idade Não é Permitida.",
        
    };
}();

