<?php
ini_set("error_reporting", E_ALL);
// O remetente deve ser um e-mail do seu dom�nio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.

$inome = $_POST["nome"];
$itelefone= $_POST["telefone"];
$iemail = $_POST["email"];

$imensagem = $_POST["mensagem"];


$iassunto="Contato pelo Site";


$imsg = "
<font color=#6c8827 size=4 face=verdana><b>::: Mensagem enviada do site - Contato :::  </b></font><br><br>
<font color=#6c8827 size=4 face=verdana><b>Nome: </b></font><font size=3> <font color=#333333 size=4 face=verdana>$inome</font><br>
<font color=#6c8827 size=4 face=verdana><b>Email: </b></font> <font color=#333333 size=4 face=verdana>$iemail</font><br>
<font color=#6c8827 size=4 face=verdana><b>Telefone:</b></font> <font color=#333333 size=4 face=verdana>$itelefone</font></font><br>
<font color=#6c8827 size=4 face=verdana><b>Mensagem:</b></font> <font color=#333333 size=4 face=verdana>$imensagem</font><br>


<br><br>";





$x = "cloudflaviolages@gmail.com";




$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: cloudflaviolages@gmail.com\r\n"; // remetente
$headers .= "Return-Path: cloudflaviolages@gmail.com\r\n"; // return-path
$headers .= "Reply-To: cloudflaviolages@gmail.com\r\n"; // return-path





$envio = mail($x, $iassunto, $imsg, $headers);



if($envio)
 echo "<font color=#406980 size=4 face=verdana>

 <br><br><img src=https://logo.fretebras.com.br/507387972/transporte-gravatai-rs-ds-muller-transportes-e-logistica_g.jpg width=100 align=left hspace=20 vspace=30><br>
 Agradecemos por entrar em contato com a DS Muller<br><br>

Sua mensagem foi enviada com sucesso, em breve entraremos em contato</font>";
else
 echo "A mensagem não pode ser enviada";





?>
