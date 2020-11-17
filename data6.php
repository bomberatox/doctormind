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
            $pts_h = 0.0;
            $h1 = $_POST["h1"];
            $h2 = $_POST["h2"];
            $h3 = $_POST["h3"];
            $h4 = $_POST["h4"];
            $h5 = $_POST["h5"];
            $h6 = $_POST["h6"];
            $h7 = $_POST["h7"];          


            $pts_h = ($h1+$h2+$h3+$h4+$h5+$h6+$h7+$_SESSION["b6"])/8*100;//ok
            $_SESSION['pts_h'] = $pts_h;


            ?>
            <script type="text/javascript">location.href = 'Teste7.html';</script>