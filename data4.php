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
            $pts_a = 0.0;
            $a1 = $_POST["a1"];
            $a2 = $_POST["a2"];
            $a3 = $_POST["a3"];
            $a4 = $_POST["a4"];
            $a5 = $_POST["a5"];
            $a6 = $_POST["a6"];
            $a7 = $_POST["a7"];
            

            $pts_a = ($a1+$a2+$a3+$a4+$a5+$a6+$a7)/7*100;//ok
            $_SESSION['pts_a'] = $pts_a;
            $_SESSION['a7'] = $a7;


            ?>
            <script type="text/javascript">location.href = 'Teste5.html';</script>