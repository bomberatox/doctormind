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
            $pts_d = 0.0;
            $d1 = $_POST["d1"];
            $d2 = $_POST["d2"];
            $d3 = $_POST["d3"];
            $d4 = $_POST["d4"];
            $d5 = $_POST["d5"];
            $d6 = $_POST["d6"];
            $d7 = $_POST["d7"];
            
            $pts_d = ($d1+$d2+$d3+$d4+$d5+$d6+$d7)/7*100;//ok
            $_SESSION['pts_d'] = $pts_d;
            ?>
            <script type="text/javascript">location.href = 'Teste10.html';</script>