<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Proof of back end unit one in php">
    <meta name="description" content="marmitas,comida,caseira,dona dirce">
    <meta name="keywords" content="css,html,php,back-end">
    <meta name="author" content="Leandro Dukiévicz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/cutlery.PNG" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/button.css">
    <title>HOME - Marmitas da Dirce</title>
</head>

<body>
    <?php
        include ('cabecalho.php');
        include ('galery.php');
    ?>

    <section id="information">
        <div id="info">

           <div id="info1">
                <img class="icons-info" src="assets/talher.png" alt=""><br>
                
                <p><strong><i>Almoços</i></strong></p><br><br>
                <p class="p-info">A melhor refeição do seu dia é aqui na Marmitas da Dirce. 
                   Atualizamos o cardápio, Confira e peça Já a sua Marmita !!!</p><br>
                   <p class="p-info"><strong><i>Segunda à Sexta: 11:00 às 14:30</i></strong></p>
                   <p class="p-info"><strong><i>Sáb,Dom e feriados 11:00 às 15:30</i></strong></p>
                   
           </div>

           <div id="info2">
                <img class="icons-info" src="assets/cardapio.png" alt=""><br>

                <p><strong><i>Cardápio</i></strong></p><br>
                <p class="p-info">Agora temos além da tradicional comida caseira da dona Dirce, 
                                  marmitas fit saudáveis e um cardápio especial para os fins de semana,
                                  clique no <strong>botão</strong> 
                                  e faça o download do Menu ou peça agora pelo Site !</p><br>
               
                <Button id="btn-cardapio" class="click">
                    <a id="btn-c" href="https://github.com/LeandroDukievicz/back-end-1/raw/main/MAPA%20BACK%20END%20I%20-%20SITE/assets/menugeral.pdf"><strong>Download Menu</strong></a>
                    <img src="assets/down.svg" alt="">
                </Button> <br>                 
           </div>

           <div id="info3">
                <img class="icons-info" src="assets/delivery.png" alt=""><br>
                <p><strong><i>Delivery</i></strong></p><br><br>
                <p class="p-info">Escolha a Comida mais saborosa da Região, que nós entregamos pra Você ! </p><br>
                   <p class="p-info"><strong>Entrega Gratuita Para Maringá e Sarandi.</strong></p><br><br><br>
           </div>
        </div>
    </section>

    <section>
        
    </section>



<main>


<?php
    include('rodape.php');
?>



</main>



</body>

</html>
