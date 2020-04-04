$(document).ready(function() {
    $('#phone').mask('(00) 0000-00009');
    $('#phone').blur(function(event) {
        if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
            $('#phone').mask('(00) 00000-0009');
        } else {
            $('#phone').mask('(00) 0000-00009');
        }
    }); 
}); 

$('#contactForm').submit(function (event) {
    event.preventDefault();
    $.ajax({
        url: 'assets/php/send-email.php',
        type: 'POST',
        data: $('#contactForm').serialize(),                  
        success: function (result) {
                
            $('#contactForm input').val(''); //LIMPA OS INPUTS 
            $('#contactForm textarea').val('');    
            $('#state').prop('readonly', false); //Remove a propriedade 
            $('#city').prop('readonly', false); //Remove a propriedade 
        },
        Error: function () {
            $('#contactForm input').val(''); //LIMPA OS INPUTS
            $('#contactForm textarea').val('');
            $('#state').prop('readonly', false); //Remove a propriedade 
            $('#city').prop('readonly', false); //Remove a propriedade
        },           
    });
});