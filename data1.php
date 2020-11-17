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

            $pts_p = 0.0;

            $p1 = $_POST["p1"];
            $p2 = $_POST["p2"];
            $p3 = $_POST["p3"];
            $p4 = $_POST["p4"];
            $p5 = $_POST["p5"];
            $p6 = $_POST["p6"];
            $p7 = $_POST["p7"];

            

            $pts_p = ($p1+$p2+$p3+$p4+$p5+$p6+$p7)/7*100;//ok
            $_SESSION['pts_p'] = $pts_p;

            ?>
            <script type="text/javascript">location.href = 'Teste2.html';</script>