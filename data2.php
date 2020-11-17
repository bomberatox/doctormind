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
            $pts_ee = 0.0;
            $pts_ee1 = 0.0;
            $ee1 = $_POST["ee1"];
            $ee2 = $_POST["ee2"];
            $ee3 = $_POST["ee3"];
            $ee4 = $_POST["ee4"];
            $ee5 = $_POST["ee5"];
            $ee6 = $_POST["ee6"];
            $ee7 = $_POST["ee7"];
            $ee8 = $_POST["ee8"];

            $pts_ee = ($ee1+$ee2+$ee3+$ee4+$ee5+$ee6+$ee7+$ee8)/8*100;//ok
            $pts_ee1 = ($ee1+$ee2+$ee3+$ee4+$ee5+$ee6+$ee7+$ee8);


            $_SESSION['pts_ee'] = $pts_ee;
            $_SESSION['pts_ee1'] = $pts_ee1;
            $_SESSION['ee6'] = $ee6;


            ?>
            <script type="text/javascript">location.href = 'Teste3.html';</script>