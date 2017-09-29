var Funcoes = function () {
    var inicio = function () {
                //VARIÁVEIS GLOBAIS
                var dados       = constantes();
                var urlValida   = dados['HOME'] + 'admin/Controller/Ajax.Controller.php';
                var upload      = dados['PASTAUPLOADS'];


        // CADASTRO DE CONSUMIDOR
        function disabilitaCamposConsumidor(){
            if($("#tipo").prop('checked')){
                $("#nu_cnpj").attr("disabled",true).val("").removeClass('ob');
                $("#nu_cpf").attr("disabled",false).addClass('ob');
            }else{
                $("#nu_cpf").attr("disabled",true).val("").removeClass('ob');
                $("#nu_cnpj").attr("disabled",false).addClass('ob');
            }
        }

        disabilitaCamposConsumidor();

        // CADASTRO DE CONSUMIDOR
        $("#tipo").change(function(){
            $('#nu_cpf,#nu_cnpj').parent(".form-group").removeClass('has-success has-error');
            $('span#nu_cpf-info').text("").append(
                '<span class="help-block" id="cpf-info"><i class="fa fa-info-circle"></i> Caso seja Pessoa Fíica</span>');
            $('span#nu_cnpj-info').text("").append(
                '<span class="help-block" id="cpf-info"><i class="fa fa-info-circle"></i> Caso seja Pessoa Jurídica</span>');
            disabilitaCamposConsumidor();
        });


    };
    return {
        init: function () {
            inicio();
        },
        Modal: function(msg, classe, cor, icone, titulo){
            $(".aviso .modal-header").removeClass().addClass("modal-header btn btn-" + classe);
            $(".aviso #icone").removeClass().addClass("btn btn-" + cor);
            $(".aviso i").removeClass().addClass("fa " + icone);
            $(".aviso .modal-header .modal-title").text(titulo);
            $(".aviso #confirmacao_msg b").html(msg);
            $("#aviso").click();
        },
        Sucesso: function(msg){
            Funcoes.Modal(msg,"success","green","fa-check","SUCESSO");
        },
        Alerta: function(msg){
            Funcoes.Modal(msg,"warning","yellow","fa-exclamation-triangle","ALERTA");
        },
        Informativo: function(msg){
            Funcoes.Modal(msg,"info","primary","fa-info-circle","INFORMATIVO");
        },
        Erro: function(msg){
            Funcoes.Modal(msg,"bricky","bricky","fa-frown-o","Erro");
        },

        MSG_CONFIRMACAO: "CONFIRMAÇÃO"
    };
}();

