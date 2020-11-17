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
            $pts_b = 0.0;
            $b1 = $_POST["b1"];
            $b2 = $_POST["b2"];
            $b3 = $_POST["b3"];
            $b4 = $_POST["b4"];
            $b5 = $_POST["b5"];
            $b6 = $_POST["b6"];
            $b7 = $_POST["b7"];
            $b8 = $_POST["b8"];
            

            $pts_b = ($b1+$b2+$b3+$b4+$b5+$b6+$b7+$b8+$_SESSION["pts_ee1"]/8)/9*100;//ok
            $_SESSION['pts_b'] = $pts_b;
            $_SESSION['b6'] = $b6;


            ?>
            <script type="text/javascript">location.href = 'Teste6.html';</script>