$(document).ready(function () {
    //Quando o campo de cep perde o foco.
    $("#zipcode").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');        

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                    $("#address").val("...");
                    $("#city").val("...");
                    $("#neighborhood").val("...");
                    $("#state").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                        if (!("erro" in dados)) {
                            setTimeout(function () {
                                //Atualiza os campos com os valores da consulta.
                                $("#address").val(dados.logradouro);
                                $("#neighborhood").val(dados.bairro);
                                $("#city").val(dados.localidade);
                                $("#state").val(dados.uf);                            
                                $('#state').prop('readonly', true); //Remove a propriedade 
                                $('#city').prop('readonly', true); //Remove a propriedade
                                $('#address').prop('readonly', false); //Remove a propriedade
                                $('#neighborhood').prop('readonly', false); //Remove a propriedade     
                            }, 3000); // O valor é representado em milisegundos.

                         
                            
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        alert("CEP não encontrado.");
                        $("#address").val("");
                        $("#city").val("");
                        $("#neighborhood").val("");
                        $("#state").val("");
                        $("#zipcode").val("");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                alert("Formato de CEP inválido.");
                $("#address").val("");
                $("#city").val("");
                $("#neighborhood").val("");
                $("#state").val("");
                $("#zipcode").val("");

            }
        } //end if.
        else {
            $("#address").val("");
            $("#city").val("");
            $("#neighborhood").val("");
            $("#state").val("");
            $("#zipcode").val("");
            $('#state').prop('readonly', false); //Remove a propriedade 
            $('#city').prop('readonly', false); //Remove a propriedade
        }
    });
});