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
  <script type="text/javascript">
    function limpar(){
     window.open("Teste.html", "_self");
    }
</script>

  <body>
    
    <nav class="navbar navbar-toggleable-sm navbar-inverse" style="background: rgb(35, 138, 145);">
        <div class="container">
          <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="mainNav">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="index.html"><img src="_images/home.png" style="width: 16px; height: 13px; padding-right: 4px;"><strong>Início</strong></a>
              <a class="nav-item nav-link" href="Teste0.html"><img src="_images/test (1).png" style="width: 16px; height: 13px; padding-right: 4px;"><strong>Teste</strong></a>
              <a class="nav-item nav-link" href="Transtornos.html"><img src="_images/brain (1).png" style="width: 16px; height: 13px; padding-right: 4px;"><strong>Transtornos</strong></a>
              <a class="nav-item nav-link" href="about.html"><img src="_images/about.png" style="width: 16px; height: 13px; padding-right: 4px;"><strong>Sobre</strong></a>
            </div>
          </div>
        </div>
      </nav>
    <body>
    <br></br>
    
    <div class="page-header pb-3 pt-4 text-center" style="color: rgb(85, 85, 85);">
      <h1>Resultado</h1>
  </div>
</br></br>
<div class="container">
    <div class="row text-muted">

        <form>
        <?php
            
            


            //Calculos
            

            //status
            echo"<br><b><h4>Nome: ".$_SESSION["nome"]."</b></h4>";
            if ($_SESSION["pts_p"] > 70) {
              echo"<br><b><h5>Paranóide: ".number_format($_SESSION["pts_p"],2)."%</b></h5>
              <br>Pacientes com transtorno de personalidade paranoide possuem grande desconfiança e suspeita dos outros por suporem que podem ser maltratados, hostilizados ou enganados mesmo sem nenhuma justificativa racional para isso, por esse motivo estão sempre alertas. <br>Gostam de sempre estar no controle da situação e apresentam uma enorme dificuldade em confiar nos outros, geralmente são muito ciumentos em seus relacionamentos. <br>Esses pacientes interpretam até mesmo as boas intenções das outras pessoas como uma ameaça velada e podem contra-atacar se acreditarem ter sido enganados ou hostilizados.<br>";
            }
            if ($_SESSION["pts_ee"] > 70) {
              echo"<br><b><h5>Esquisóide: ".number_format($_SESSION["pts_ee"],2)."%</b></h5>
              <br>Pacientes com transtorno de personalidade esquizoide são pessoas isoladas que não fazem qualquer questão de manter relações sociais ou sexuais. <br>Não costumam ter amigos, exceto por parentes de 1º grau, preferem atividades solitárias e são pouco sensíveis a atividades sensoriais. <br>São frios, distantes e não apresentam reação emocional a críticas e elogios. <br>Geralmente fazem de seus quartos refúgios e podem passar horas ou dias confinados sem qualquer contato social.<br>";
            }
            if ($_SESSION["pts_ea"] > 70) {
              echo"<br><b><h5>Esquizotipico: ".number_format($_SESSION["pts_ea"],2)."%</b></h5>
              <br>Pacientes com transtorno de personalidade esquizotípica apresentam um certo distanciamento da realidade. <br>Acreditam ser seres com um propósito místico e possuir poderes especiais como telepatia e poder ver seres de outros mundos, também acreditam em superstições e que o universo influencia diretamente sua vida e suas emoções. <br>Não costumam ter amigos, exceto por parentes de 1º grau e sentem ansiedade ao se relacionar com outras pessoas por se sentirem diferentes. <br>Eles podem se vestir de maneira excêntrica e usar um vocabulário único apresentando uma fala estranha e rígida.<br>";
            }
            if ($_SESSION["pts_a"] > 70) {
              echo"<br><b><h5>Antissocial: ".number_format($_SESSION["pts_a"],2)."%</b></h5>
              <br>Pacientes com transtorno de personalidade antissocial desconsideram e violam os direitos das outras pessoas. <br>Eles frequentemente enganam, roubam, fraudam e manipulam os outros para conseguirem o que querem, geralmente possuem uma busca desenfreada por prazer. <br>São impulsivos e irresponsáveis, não ligam para a segurança deles mesmos ou dos outros. <br>Na mídia e na cultura são conhecidos como psicopatas, matam e sacrificam os outros em nome da conquista, não se importando com as consequências de tais atos. <br>São facilmente irritados e podem partir para agressão física. <br>Não possuem remorso ou empatia e muitas vezes culpam aqueles que eles prejudicam, os chamando de merecedores ou perdedores. <br>Geralmente possuem uma ótima imagem de si e podem ser sedutores e charmosos para conseguirem seus objetivos. <br>";
            }
            if ($_SESSION["pts_b"] > 70) {
              echo"<br><b><h5>Borderline: ".number_format($_SESSION["pts_b"],2)."%</b></h5>
              <br>Pacientes com transtorno de personalidade borderline apresentam instabilidade nas relações pessoais, na autoimagem e impulsividade. <br>Não toleram ficar sozinhos e fazem esforços significativos para evitar o abandono, como ameaças de suicídio. <br>Esses pacientes flutuam entre amor e ódio muito rapidamente, e quando estão estáveis sentem uma intensa necessidade de agitar as coisas para se sentirem vivos. <br>Podem apresentar comportamento de automutilação por causa da impulsividade. <br>Podem apresentar explosões de raiva e intensidade, após a explosão se sentem tristes e culpados por acreditarem que são más pessoas. <br>Apresentam comportamentos autodestrutivos como sexo sem segurança e abuso de álcool e drogas.<br>";
            }
            if ($_SESSION["pts_h"] > 70) {
              echo"<br><b><h5>Histrionico: ".number_format($_SESSION["pts_h"],2)."%</b></h5>
              <br>Pacientes com transtorno de personalidade histriônica são intensos, extrovertidos e teatrais. <br>Possuem uma necessidade de serem o centro das atenções e vão utilizar de sua sensualidade, aparência e humor para conseguir a atenção desejada. <br>Em sua busca, não se importam se recebem atenção positiva ou negativa, o importante é ter todos olhando para eles e quando não conseguem ficam tristes e deprimidos. <br>Possuem a tendência de dramatizar eventos do cotidiano colocando emoção e teatralidade em suas falas, mas com poucos fatos ou detalhes para apoiar. <br>Eles tendem a confiar muito nos outros e por isso são facilmente influenciáveis por pessoas e tendências momentâneas.<br>";
            }
            if ($_SESSION["pts_n"] > 70) {
              echo"<br><b><h5>Narcisista: ".number_format($_SESSION["pts_n"],2)."%</b></h5>
              <br>Pacientes com transtorno de personalidade narcisista superestimam suas qualidades e exageram suas conquistas. <br>Sua vaidade os leva a serem arrogantes e se sentirem superiores a qualquer moral. <br>Possuem autoestima frágil porque necessitam do reconhecimento dos outros, se acham os mais competentes, mais inteligentes, mais bonitos e fazem tudo em busca de poder. <br>Só se relacionam com pessoas que ele considera de alto nível, mas também não gostam daqueles que oferecem ameaça a sua imagem. <br>São sensíveis ao fracasso e a críticas, podendo responder com raiva e contra-atacar violentamente. <br>No trabalho eles buscam receber todo o mérito dos sucessos de sua equipe, mas colocam imediatamente a culpa nos companheiros quando as coisas dão errado. <br>";
            }
            if ($_SESSION["pts_eo"] > 70) {
              echo"<br><b><h5>Esquivo: ".number_format($_SESSION["pts_eo"],2)."%</b></h5>
              <br>Pacientes com transtorno de personalidade esquiva possuem inibição social, se sentem inadequados e são sensíveis a avaliações negativas. <br>São tímidos, inseguros, possuem baixa autoestima e se sentem socialmente incapazes. <br>Eles acreditam que serão frequentemente criticados e rejeitados pelos outros e por isso evitam situações de interação interpessoal no trabalho e na vida pessoal. <br>Eles acreditam ser inferiores aos outros e tendem a ser quietos e isolados, evitando qualquer exposição na vida e nas redes sociais. <br>Por essas razões os pacientes evitam participar de situações de risco e novas atividades.<br>";
            }
            if ($_SESSION["pts_d"] > 70) {
              echo"<br><b><h5>Dependente: ".number_format($_SESSION["pts_d"],2)."%</b></h5>
              <br>O paciente com transtorno de personalidade dependente tem uma necessidade excessiva de serem cuidados, por não acreditarem serem capazes de cuidar de si mesmos, o que leva a um comportamento de submissão. <br>Eles colocam as responsabilidades de suas vidas nas mãos dos outros, necessitando de aconselhamento para tomar até decisões comuns do cotidiano. <br>Se sentem inferiores e são extremamente sensíveis a críticas ou desaprovação. <br>Eles acreditam não ser capazes de fazer nada por conta própria, o que os leva a não iniciar projetos e tarefas pela própria vontade. <br>Possuem um enorme e frequente medo de abandono daqueles que dependem e podem passar por diversas situações (até desagradáveis e humilhantes) para obter cuidado e suporte. <br>";
            }
            if ($_SESSION["pts_o"] > 70) {
              echo"<br><b><h5>Obsessivo-Compulsivo: ".number_format($_SESSION["pts_o"],2)."%</b></h5>
              <br>Pacientes com transtorno de personalidade obsessivo-compulsivo sentem a necessidade de estar no controle o tempo todo e ficam muito irritados quando as coisas não saem como o esperado. <br>São rígidos, perfeccionistas, preocupados com a ordem, teimosos e acreditam tudo deve ser feito de uma maneira específica. <br>Apresentam extrema dificuldade em trabalhar em equipe, podem criar listas detalhadas de como as atividades devem ser feitas e se chateiam se alguém apresenta outra maneira de fazer. <br>São extremamente dedicados ao trabalho, deixando o prazer de lado. <br>Podem ser fanáticos e exigentes em relação à moral, ética e valores, praticando o exato cumprimento das regras em que acredita.<br>";
            }
            if ($_SESSION["pts_p"] > 70 OR $_SESSION["pts_ee"] > 70 OR $_SESSION["pts_ea"] > 70 OR $_SESSION["pts_a"] > 70 OR $_SESSION["pts_b"] > 70 OR $_SESSION["pts_h"] > 70 OR $_SESSION["pts_n"] > 70 OR $_SESSION["pts_eo"] > 70 OR $_SESSION["pts_d"] > 70 OR $_SESSION["pts_o"]> 70) {
              echo"<br>Para mais informações sobre os transtornos de personalidade, clique <a href='Transtornos.html'>aqui</a>.<br>
              Se você recebeu este resultado e está preocupado, procure por orientações de um profissional de confiança para auxiliá-lo<br>";
            }
            if ($_SESSION["pts_p"] < 70 AND $_SESSION["pts_ee"] < 70 AND $_SESSION["pts_ea"] < 70 AND $_SESSION["pts_a"] < 70 AND $_SESSION["pts_b"] < 70 AND $_SESSION["pts_h"] < 70 AND $_SESSION["pts_n"] < 70 AND $_SESSION["pts_eo"] < 70 AND $_SESSION["pts_d"] < 70 AND $_SESSION["pts_o"]< 70) {
              echo"<br>Seu teste não possui nenhum transtorno de personalidade com valor significativo.<br>";
            }
            ?>
            <br>
            <br>
            <p class="text-justify"> <br><br>Fique a vontade para conferir os valores completos do seu teste clicando no botão "Resultado completo".<br>
            Caso deseje receber os resultados do seu teste por e-mail, basta clicar <a href='mail.php'>aqui</a>.<br>
            <b>ATENÇÃO!</b> O teste não substitui a avaliação de um profissional, caso seja relevante procure auxílio especializado, saúde mental é uma questão muito importante!.<br><br></p>
            <div style="display: flex; justify-content: center;">
        <button type="button" class="btn btn-secondary" style="background: rgb(35, 138, 145); color: #ffffff;" onclick="history.back()">Retornar</button>
        <a href="ResultadoTot.php">&nbsp;&nbsp;
        <button type="button" class="btn btn-secondary" style="background: rgb(35, 138, 145); color: #ffffff;">Resultado completo</button>
        </a></div>
         
         


</br></br></br></br>
<p class="text-justify">O CVV (Centro de Valorização da Vida) realiza apoio emocional e prevenção do suicídio, atendendo voluntária e gratuitamente todas as pessoas que querem e precisam conversar, sob total sigilo por telefone, email e chat 24 horas todos os dias, atendendo pelo número "188". Saiba mais clicando <a href="https://www.cvv.org.br/">aqui</a>.</p>
  </div>
     
     </div>
</br>
 <div class="container-fluid pt-2" style="background: rgb(35, 138, 145)";>
     <div class="row justify-content-center">
         <div class="col-md-3 text-center lead"><a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><img src="_images/twitter-logo.png" style="width: 16px; height: 13px; padding-right: 4px;">Twitter</a></div>
         <div class="col-md-3 text-center lead"><a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><img src="_images/facebook-logo.png" style="width: 16px; height: 13px; padding-right: 4px;">Facebook</a></div>
         <div class="col-md-3 text-center lead"><a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><img src="_images/instagram-logo.png" style="width: 16px; height: 13px; padding-right: 4px;">Instagram</a></div>
         <div class="col-md-3 text-center lead"><a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><img src="_images/email.png" style="width: 16px; height: 13px; padding-right: 4px;">E-mail</a></div>
         <div class="col-md-3 pt-4 text-center" style="color: #ffffff;">Copyright 2020 - site por <a href="Easter-egg.html" style="color: #ffffff; text-decoration: none;"><strong>Grupo ATC</strong></a></div>
     </div>
 </div>
 
 
 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
 <script>
 $(function(){ $('[data-toggle="tooltip"]').tooltip();})
 </script>
 </body>
 </html>