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

            $pts_ea = 0.0;

            $ea1 = $_POST["ea1"];
            $ea2 = $_POST["ea2"];
            $ea3 = $_POST["ea3"];
            $ea4 = $_POST["ea4"];
            $ea5 = $_POST["ea5"];
            $ea6 = $_POST["ea6"];
            $ea7 = $_POST["ea7"];
            


            $pts_ea = ($ea1+$ea2+$ea3+$ea4+$ea5+$ea6+$ea7+$_SESSION["ee6"]+$_SESSION["pts_ee1"]/8)/9*100;//ok

            $_SESSION['pts_ea'] = $pts_ea;

            ?>
            <script type="text/javascript">location.href = 'Teste4.html';</script>