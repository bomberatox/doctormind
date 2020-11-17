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
            $pts_eo = 0.0;
            $eo1 = $_POST["eo1"];
            $eo2 = $_POST["eo2"];
            $eo3 = $_POST["eo3"];
            $eo4 = $_POST["eo4"];
            $eo5 = $_POST["eo5"];
            $eo6 = $_POST["eo6"];
            $eo7 = $_POST["eo7"];            

            $pts_eo = ($eo1+$eo2+$eo3+$eo4+$eo5+$eo6+$eo7)/7*100;//ok
            $_SESSION['pts_eo'] = $pts_eo;


            ?>
            <script type="text/javascript">location.href = 'Teste9.html';</script>