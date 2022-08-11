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
    <title>Vídeos de Receitas</title>
</head>

<?php
    include ('cabecalho.php');
?>

<Section >
    <h2 style="color: rgb(255, 146, 22)">Confira aqui as novidades no canal da Dirce</h2>    
    <div class="dicas">
        <div>
            <figure class="mp4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OJJtdm-OQ4M" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; 
                    encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                
                <iframe width="560" height="315" src="https://www.youtube.com/embed/E8RhIjnQRO4" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture" allowfullscreen>
                </iframe>       
            </figure>
        </div>
    </div>
</Section>

<Section >
     
    <div class="dicas">
        <div>
            <figure class="mp4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ykdve13-Vao" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                     clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
                
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-PQfWtmuhGg" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                    clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>  
            </figure>
            <h2 style="color: rgb(255, 146, 22)">Em Breve Teremos mais novidades por aqui!</h2>   
        </div>
    </div>
</Section>

<?php
        include( 'contato.php');
    ?>

<h5 > Esta Seção do Site ainda está Recebendo atualições ! Assine Nossa Newsletter para ficar sempre atualizado! <br>
            Fonte de Receitas desta Página 
            <a href="https://www.tudogostoso.com.br/">Tudo Gostoso</a>
        </h5>

        <form action="" method="post"> 
            <p style="color: #FFF"><b>Está chegando muitas novidades no cardápio da Dona Dirce,
                                      Informe o seu melhor E-mail que te avisaremos !</b>
            </p>&nbsp;&nbsp;
            <input type="text"  placeholder="Insira o seu nome ">&nbsp;
            <input type="email" placeholder="Insira seu melhor Email !">&nbsp;
            <button  id="btn-form"class="click" type="submit"><strong>Enviar</strong> </button>
        </form>


<?php
    include ( 'rodape.php');
?>





