<?php

$name = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$mensagem = $_POST['message'];
$company = isset($_POST['company']) ? $_POST['company'] : NULL;
$zipcode = $_POST['zipcode'];
$neighborhood = $_POST['neighborhood'];
$city = $_POST['city'];
$state = $_POST['state'];
$address = $_POST['address'];
$complement = isset($_POST['complement']) ? $_POST['complement'] : NULL;
$message = $_POST['message'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// Compo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
<html>
    <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
      <td>
        <tr>
            <td width='500'>Nome: $name</td>
        </tr>
        <tr>
          <td width='320'>E-mail: <b>$email</b></td>
        </tr>
        <tr>
          <td width='320'>Telefone: <b>$telefone</b></td>
        </tr>            
        <tr>
          <td width='320'>Mensagem: $mensagem</td>
        </tr>";
        if(!empty($company)){        
          $arquivo .= "<tr>
            <td width='320'>Empresa: $company </td>
          </tr>";
        }
        $arquivo .= "<tr>
          <td width='320'>CEP: $zipcode </td>
        </tr>
        <tr>
          <td width='320'>Bairro: $neighborhood </td>
        </tr>
        <tr>
          <td width='320'>Cidade: $city </td>
        </tr>
        <tr>
          <td width='320'>Estado: $state </td>
        </tr>
        <tr>
          <td width='320'>Endereço: $address </td>
        </tr>";
        if(!empty($company)){      
          $arquivo .= "<tr>
            <td width='320'>Complemento: $complement  </td>
          </tr>";  
        }       
        $arquivo .= "</td>
    <tr>
      <td>Este e-mail foi enviado dia <b>$data_envio</b></td>
    </tr>
    </table>
</html>
";

// É NECESSÁRIO UM EMAIL DO SERVER SMTP, QUE É FORNECIDO PELA HOSPEDAGEM, E O EMAIL DO USUÁRIO
// PARA RECEBER OS CONTATOS EM SEU EMAIL PESSOAL  

$emailenviar = "email@yeshuarepresentacoes.com.br"; // E-MAIL DO SERVIDOR DE HOSPEDAGEM
$destino = $emailenviar; // E-MAIL DO CLIENTE
$assunto = "Contato pelo Site -". $name;

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/HTML; charset=UTF-8' . "\r\n";
$headers .= 'From: '.$email.'<$email>';
//$headers .= "Bcc: $EmailPadrao\r\n";
 
$enviaremail = mail($destino, $assunto, $arquivo, $headers);

// if($enviaremail){
// $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
// echo $mgm;
// // echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
// } else {
// $mgm = "ERRO AO ENVIAR E-MAIL!";
// echo $mgm;
// }
?>