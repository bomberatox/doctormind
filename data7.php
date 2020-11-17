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
            
//variaveis
            $pts_n = 0.0;
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];
            $n4 = $_POST["n4"];
            $n5 = $_POST["n5"];
            $n6 = $_POST["n6"];            

            $pts_n = ($n1+$n2+$n3+$n4+$n5+$n6+$_SESSION["a7"])/7*100;//ok
            $_SESSION['pts_n'] = $pts_n;

            ?>
            <script type="text/javascript">location.href = 'Teste8.html';</script>