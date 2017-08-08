<?php
ini_set("error_reporting", E_ALL);
// O remetente deve ser um e-mail do seu dom�nio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.

$nome = $_POST["nome"];
$telefone= $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
$assunto="Contato pelo Site";


$msg = "
<font color=#6c8827 size=4 face=verdana><b>::: Mensagem enviada do site - Contato :::  </b></font><br><br>
<font color=#6c8827 size=4 face=verdana><b>Nome: </b></font><font size=3> <font color=#333333 size=4 face=verdana>$nome</font><br>
<font color=#6c8827 size=4 face=verdana><b>Email: </b></font> <font color=#333333 size=4 face=verdana>$email</font><br>
<font color=#6c8827 size=4 face=verdana><b>Telefone:</b></font> <font color=#333333 size=4 face=verdana>$telefone</font></font><br>
<font color=#6c8827 size=4 face=verdana><b>Mensagem:</b></font> <font color=#333333 size=4 face=verdana>$mensagem</font><br>


<br><br>";





$x = "cloudflaviolages@gmail.com";




$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: cloudflaviolages@gmail.com\r\n"; // remetente
$headers .= "Return-Path: cloudflaviolages@gmail.com\r\n"; // return-path
$headers .= "Reply-To: cloudflaviolages@gmail.com\r\n"; // return-path





$envio = mail($x, $assunto, $msg, $headers);



if($envio)
 echo "<font color=#406980 size=4 face=verdana>

 <br><br><img src=https://logo.fretebras.com.br/507387972/transporte-gravatai-rs-ds-muller-transportes-e-logistica_g.jpg width=100 align=left hspace=20 vspace=30><br>
 Agradecemos por entrar em contato com a DS Muller<br><br>

Sua mensagem foi enviada com sucesso, em breve entraremos em contato</font>";
else
 echo "A mensagem não pode ser enviada";





?>
