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
    <link rel="stylesheet" href="css/dicas.css">
    <title>Dicas de Receitas</title>
</head>



<?php
    include ('cabecalho.php');
?>

<Section >
<h2>Confira aqui algumas Receitas que Dona Dirce Indica</h2>
    <div id="dicas">
        <div>
            
            <figure id="img-head">
           
                <a href="https://www.tudogostoso.com.br/receita/173520-crepioca-pao-de-queijo-de-frigideira.html" target="_blank">
                
                    <img class="img-dicas click" src="img/capa/1.jpg" alt="" ><br><br><br>
                    <button class="btn-dicas img-dicas click"> <strong>Clique para Ver a receita</strong></button>
                </a>
                
                <a href="https://www.tudogostoso.com.br/receita/136814-escondidinho-de-carne-moida.html" target="_blank">
                    <img class="img-dicas click" src="img/capa/2.jpg" alt=""> <br><br><br>
                    <button class=" btn-dicas img-dicas click">  <strong>Clique para Ver a receita</strong></button>
                </a>

                <a href="https://www.tudogostoso.com.br/receita/125788-salpicao-de-frango-simples.html" target="_blank">
                    <img class="img-dicas click"src="img/capa/3.jpg" alt=""><br><br><br>
                    <button  class="btn-dicas img-dicas click"> <strong>Clique para Ver a receita</strong> </button>
                </a>


            </figure>
           
        </div>
       
    </div>
</Section>
















<?php
    include('contato.php');
    include ( 'rodape.php');

?>





