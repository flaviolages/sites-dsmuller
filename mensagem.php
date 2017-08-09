<!DOCTYPE html>
<html lang="pt-br" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>DS Müller Logistica.</title>
      </head>
      <body>
<?php
ini_set("error_reporting", E_ALL);

<<<<<<< HEAD
$inome = $_POST["nome"];
$itelefone= $_POST["telefone"];
$iemail = $_POST["email"];
$imensagem = $_POST["mensagem"];
=======
$n = $_POST["nome"];
$t = $_POST["telefone"];
$e = $_POST["email"];
$me = $_POST["mensagem"];
>>>>>>> 38d9d829685ebaed9eed4c2325b7d916dd8a8be2
$assunto="Contato pelo Site";


$msg = "
<<<<<<< HEAD
<font color=#0383CE size=4 face=arial><b>Contato via site</b></font><br><br>
<font color=#0383CE size=2 face=arial><b>Nome: </b></font><font size=3> <font color=#333333 size=4 face=verdana>$inome</font><br>
<font color=#0383CE size=2 face=arial><b>Email: </b></font> <font color=#333333 size=4 face=verdana>$iemail</font><br>
<font color=#0383CE size=2 face=arial><b>Telefone:</b></font> <font color=#333333 size=4 face=verdana>$itelefone</font></font><br>
<font color=#0383CE size=2 face=arial><b>Mensagem:</b></font> <font color=#333333 size=4 face=verdana>$imensagem</font><br>
=======
<font color=#6c8827 size=4 face=verdana><b>::: Mensagem enviada do site - Contato :::  </b></font><br><br>
<font color=#6c8827 size=4 face=verdana><b>Nome: </b></font><font size=3> <font color=#333333 size=4 face=verdana>$n</font><br>
<font color=#6c8827 size=4 face=verdana><b>Email: </b></font> <font color=#333333 size=4 face=verdana>$e</font><br>
<font color=#6c8827 size=4 face=verdana><b>Telefone:</b></font> <font color=#333333 size=4 face=verdana>$t</font></font><br>
<font color=#6c8827 size=4 face=verdana><b>Mensagem:</b></font> <font color=#333333 size=4 face=verdana>$m</font><br>


>>>>>>> 38d9d829685ebaed9eed4c2325b7d916dd8a8be2
<br><br>";





$x = "cloudflaviolages@gmail.com";




$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: cloudflaviolages@gmail.com\r\n"; // remetente
$headers .= "Return-Path: cloudflaviolages@gmail.com\r\n"; // return-path
$headers .= "Reply-To: cloudflaviolages@gmail.com\r\n"; // return-path





$envio = mail($x, $assunto, $msg, $headers);



<<<<<<< HEAD
if($envio){


echo '<meta http-equiv="refresh" content="10;URL=index.php" />';


echo "
<br>
<br>
<br>
<div align=center>
<font color=#0383CE size=4 face=arial>$inome</font><br><br>
</div>
<div align=center>
<font color=#0383CE size=4 face=arial>Sua mensagem foi enviada com sucesso! Logo entraremos em contato.</font><br><br>
</div>
<BODY onload=startCountdown()>
<SCRIPT language=JavaScript>

var g_iCount = new Number();

// de 30 a 0 //
var g_iCount = 10;

function startCountdown(){
       if((g_iCount - 1) >= 0){
               g_iCount = g_iCount - 1;
               numberCountdown.innerText = '00:00.0' + g_iCount;
               setTimeout('startCountdown()',1000);
       }
}
</SCRIPT>
<FONT face=verdana color=#1e90ff size=2><B>
=======
if($envio)
 echo $n;
 echo $t;
 echo $e;
 echo "<font color=#406980 size=4 face=verdana>
>>>>>>> 38d9d829685ebaed9eed4c2325b7d916dd8a8be2

<DIV id=numberCountdown align=center></DIV></FONT>

";

}else {


  echo "
  <br>
  <br>
  <br>
  <div align=center>
  <font color=#0383CE size=4 face=arial>$inome</font><br><br>
  </div>
  <div align=center>
  <font color=#0383CE size=4 face=arial>A mensagem não pode ser enviada.</font><br><br>
  <font color=#0383CE size=4 face=arial>Entre em contato pelos telefones.</font><br><br>
  </div>
  <BODY onload=startCountdown()>
  <SCRIPT language=JavaScript>

  var g_iCount = new Number();

  // de 30 a 0 //
  var g_iCount = 15;

  function startCountdown(){
         if((g_iCount - 1) >= 0){
                 g_iCount = g_iCount - 1;
                 numberCountdown.innerText = '00:00.0' + g_iCount;
                 setTimeout('startCountdown()',1000);
         }
  }
  </SCRIPT>
  <FONT face=verdana color=#1e90ff size=2><B>

  <DIV id=numberCountdown align=center></DIV></FONT>

  ";
  echo '<meta http-equiv="refresh" content="15;URL=contato.php" />';

}




?>

</body>
</html>
