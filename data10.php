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
            $pts_o = 0.0;
            $o1 = $_POST["o1"];
            $o2 = $_POST["o2"];
            $o3 = $_POST["o3"];
            $o4 = $_POST["o4"];
            $o5 = $_POST["o5"];
            $o6 = $_POST["o6"];
            $o7 = $_POST["o7"];
            $o8 = $_POST["o8"];
            

            $pts_o = ($o1+$o2+$o3+$o4+$o5+$o6+$o7+$o8)/8*100;//ok
            $_SESSION['pts_o'] = $pts_o;

            ?>
            <script type="text/javascript">location.href = 'Resultado.php';</script>