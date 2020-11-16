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
            $nome=$_POST["nome"];
            $_SESSION["nome"] = $nome;
            $email=$_POST["email"];
            $_SESSION["email"] = $email;
            $pts_p = 0.0;
            $pts_ee = 0.0;
            $pts_ee1 = 0.0;
            $pts_ea = 0.0;
            $pts_a = 0.0;
            $pts_b = 0.0;
            $pts_h = 0.0;
            $pts_n = 0.0;
            $pts_eo = 0.0;
            $pts_d = 0.0;
            $pts_o = 0.0;
            $p1 = $_POST["p1"];
            $p2 = $_POST["p2"];
            $p3 = $_POST["p3"];
            $p4 = $_POST["p4"];
            $p5 = $_POST["p5"];
            $p6 = $_POST["p6"];
            $p7 = $_POST["p7"];
            $ee1 = $_POST["ee1"];
            $ee2 = $_POST["ee2"];
            $ee3 = $_POST["ee3"];
            $ee4 = $_POST["ee4"];
            $ee5 = $_POST["ee5"];
            $ee6 = $_POST["ee6"];
            $ee7 = $_POST["ee7"];
            $ee8 = $_POST["ee8"];
            $ea1 = $_POST["ea1"];
            $ea2 = $_POST["ea2"];
            $ea3 = $_POST["ea3"];
            $ea4 = $_POST["ea4"];
            $ea5 = $_POST["ea5"];
            $ea6 = $_POST["ea6"];
            $ea7 = $_POST["ea7"];
            $a1 = $_POST["a1"];
            $a2 = $_POST["a2"];
            $a3 = $_POST["a3"];
            $a4 = $_POST["a4"];
            $a5 = $_POST["a5"];
            $a6 = $_POST["a6"];
            $a7 = $_POST["a7"];
            $b1 = $_POST["b1"];
            $b2 = $_POST["b2"];
            $b3 = $_POST["b3"];
            $b4 = $_POST["b4"];
            $b5 = $_POST["b5"];
            $b6 = $_POST["b6"];
            $b7 = $_POST["b7"];
            $b8 = $_POST["b8"];
            $h1 = $_POST["h1"];
            $h2 = $_POST["h2"];
            $h3 = $_POST["h3"];
            $h4 = $_POST["h4"];
            $h5 = $_POST["h5"];
            $h6 = $_POST["h6"];
            $h7 = $_POST["h7"];
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];
            $n4 = $_POST["n4"];
            $n5 = $_POST["n5"];
            $n6 = $_POST["n6"];
            $eo1 = $_POST["eo1"];
            $eo2 = $_POST["eo2"];
            $eo3 = $_POST["eo3"];
            $eo4 = $_POST["eo4"];
            $eo5 = $_POST["eo5"];
            $eo6 = $_POST["eo6"];
            $eo7 = $_POST["eo7"];
            $d1 = $_POST["d1"];
            $d2 = $_POST["d2"];
            $d3 = $_POST["d3"];
            $d4 = $_POST["d4"];
            $d5 = $_POST["d5"];
            $d6 = $_POST["d6"];
            $d7 = $_POST["d7"];
            $o1 = $_POST["o1"];
            $o2 = $_POST["o2"];
            $o3 = $_POST["o3"];
            $o4 = $_POST["o4"];
            $o5 = $_POST["o5"];
            $o6 = $_POST["o6"];
            $o7 = $_POST["o7"];
            $o8 = $_POST["o8"];
            

            $pts_p = ($p1+$p2+$p3+$p4+$p5+$p6+$p7)/7*100;//ok
            $pts_ee = ($ee1+$ee2+$ee3+$ee4+$ee5+$ee6+$ee7+$ee8)/8*100;//ok
            $pts_ee1 = ($ee1+$ee2+$ee3+$ee4+$ee5+$ee6+$ee7+$ee8);
            $pts_ea = ($ea1+$ea2+$ea3+$ea4+$ea5+$ea6+$ea7+$ee6+$pts_ee1/8)/9*100;//ok
            $pts_a = ($a1+$a2+$a3+$a4+$a5+$a6+$a7)/7*100;//ok
            $pts_b = ($b1+$b2+$b3+$b4+$b5+$b6+$b7+$b8+$pts_ee1/8)/9*100;//ok
            $pts_h = ($h1+$h2+$h3+$h4+$h5+$h6+$h7+$b6)/8*100;//ok
            $pts_n = ($n1+$n2+$n3+$n4+$n5+$n6+$a7)/7*100;//ok
            $pts_eo = ($eo1+$eo2+$eo3+$eo4+$eo5+$eo6+$eo7)/7*100;//ok
            $pts_d = ($d1+$d2+$d3+$d4+$d5+$d6+$d7)/7*100;//ok
            $pts_o = ($o1+$o2+$o3+$o4+$o5+$o6+$o7+$o8)/8*100;//ok
            $_SESSION['pts_p'] = $pts_p;
            $_SESSION['pts_ee'] = $pts_ee;
            $_SESSION['pts_ea'] = $pts_ea;
            $_SESSION['pts_a'] = $pts_a;
            $_SESSION['pts_b'] = $pts_b;
            $_SESSION['pts_h'] = $pts_h;
            $_SESSION['pts_n'] = $pts_n;
            $_SESSION['pts_eo'] = $pts_eo;
            $_SESSION['pts_d'] = $pts_d;
            $_SESSION['pts_o'] = $pts_o;

            ?>
            <script type="text/javascript">location.href = 'Resultado.php';</script>