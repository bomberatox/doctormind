<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doctor Mind</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="icon" href="_images/doctor_mind_loguinho.png">
  </head>

  <?php

$mails;
// Multiple recipients
$to = $_SESSION["email"]; // note the comma

// Subject
$subject = 'Resultado Teste Doctor Mind';

// Message
$message = '
<html>
<head>
  <title>Resultado Teste Doctor Mind</title>
</head>
<body>
<div class="container">
<div class="page-header pb-3 pt-4">
<h1>Resultado</h1>
</div>
<div class="row">
    <form>'.
    "<br><b><h4>Nome: ".$_SESSION["nome"]."</b></h4><br><br>"
    ."<b><h5>Paranóide: ".number_format($_SESSION["pts_p"],2)
    ."%<br>\nEsquisóide: ".number_format($_SESSION["pts_ee"],2)
    ."%<br>\nEsquizotipico: ".number_format($_SESSION["pts_ea"],2)
    ."%<br>\nAntissocial: ".number_format($_SESSION["pts_a"],2)
    ."%<br>\nBorderline: ".number_format($_SESSION["pts_b"],2)
    ."%<br>\nHistrionico: ".number_format($_SESSION["pts_h"],2)
    ."%<br>\nNarcisista: ".number_format($_SESSION["pts_n"],2)
    ."%<br>\nEsquivo: ".number_format($_SESSION["pts_eo"],2)
    ."%<br>\nDependente: ".number_format($_SESSION["pts_d"],2)
    ."%<br>\nObsessivo-Compulsivo: ".number_format($_SESSION["pts_o"],2)."%</b></h5><br><br><br>"

        .'
     </form>
     </div>
 </div>
 Copyright 2020 - projeto por <a href="https://projetoatc.000webhostapp.com/Easter-egg.html" style="color: #000000; text-decoration: none;"><strong>Grupo ATC</strong></a>
</body>
</html>'
;

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To:'.$_SESSION["email"];

if ($_SESSION["email"] == "" OR $mails == 1){}
else{mail($to, $subject, $message, implode("\r\n", $headers));
  $mails=1;
  $_SESSION['mails'] = $mails;
}
?>
            <script type="text/javascript">location.href = 'Resultado.php';</script>