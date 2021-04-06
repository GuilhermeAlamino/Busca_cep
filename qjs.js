$('#cep').blur(function(e){
    e.preventDefault();
    var cep = $('#cep').val();
    var url = "http://viacep.com.br/ws/" + cep + "/json/";
    var validarcep = /^[0-9]{5}-?[0-9]{3}$/;

        if(validarcep.test(cep)){
            $('.alert-success').show();
            $('.alert-success').html("CEP Encontrado");
            pesquisarCEP(url);
        }else{
            $('.alert-danger').show();
            $('.alert-danger').html("CEP Invalido");
        }
    var retorno = pesquisarCEP(url); 

});

    function pesquisarCEP(endereco){
        $.ajax({
            type:"GET",
            url:endereco,
            async:false,
        }).done(function(data){
            // A titulo de teste? console.log(data);
            $('#logradouro').val(data.logradouro);
            $('#complemento').val(data.complemento);
            $('#bairro').val(data.bairro);
            $('#localidade').val(data.localidade);
            $('#uf').val(data.uf);
            $('#ibge').val(data.ibge);
            $('#ddd').val(data.ddd);
        }).fail(function(){
            console.log("Erro ao Buscar Dados");
        });
    }