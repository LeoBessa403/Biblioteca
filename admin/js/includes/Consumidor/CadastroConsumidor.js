$(function () {
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

   $("#tipo").change(function(){
      $('#nu_cpf,#nu_cnpj').parent(".form-group").removeClass('has-success has-error');
      $('span#nu_cpf-info').text("").append(
          '<span class="help-block" id="cpf-info"><i class="fa fa-info-circle"></i> Caso seja Pessoa Fíica</span>');
      $('span#nu_cnpj-info').text("").append(
          '<span class="help-block" id="cpf-info"><i class="fa fa-info-circle"></i> Caso seja Pessoa Jurídica</span>');
      disabilitaCamposConsumidor();
   });
});