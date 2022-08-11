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
    <link rel="stylesheet" href="css/dicasevideos.css">
    <title>Dicas de Receitas</title>
</head>

<?php
    include ('cabecalho.php');
?>

<Section >
    <h2>Confira aqui algumas Receitas que Dona Dirce Indica</h2>    
    <div class="dicas">
        <div>
            <figure id="img-head">
                <a href="https://www.tudogostoso.com.br/receita/173520-crepioca-pao-de-queijo-de-frigideira.html" target="_blank">
                    <img class="img-dicas click" src="img/capa/1.jpg" 
                    
                    alt="foto de uma receita do site - 
                    crepioca de pao de queijo de frigideira, imagem também é um link ao clicar vai ser redirecionado
                    para a página do site contendo a receita " ><br><br><br>
                    
                    <button class="btn-dicas img-dicas click"> 
                    <strong>Clique para Ver a receita</strong></button>
                </a>
                
                <a href="https://www.tudogostoso.com.br/receita/136814-escondidinho-de-carne-moida.html" target="_blank">
                    <img class="img-dicas click" src="img/capa/2.jpg" 
                    
                    alt="Foto de Receita - Escondidinho de carne moída - a foto é um link e ao clicar em cima
                    vai ser redirecionado para a página contendo a receita e o vídeo">

                    <br><br><br>
                    <button class=" btn-dicas img-dicas click">  
                    <strong>Clique para Ver a receita</strong>
                    </button>
                </a>

                <a href="https://www.tudogostoso.com.br/receita/125788-salpicao-de-frango-simples.html" target="_blank">
                    <img class="img-dicas click"src="img/capa/3.jpg" 
                    
                    alt="Foto da receita de Salpicão de frango simples - imagem é um link 
                    e ao clicar será redirecionado para a página contendo a receita ">
                    
                    <br><br><br>
                    <button  class="btn-dicas img-dicas click">
                    <strong>Clique para Ver a receita</strong>
                    </button>
                </a>
            </figure>
        </div>
       
    </div>

    <?php
        include( 'contato.php');
    ?>
    
        <h5> Esta Seção do Site ainda está Recebendo atualições ! Assine Nossa Newsletter para ficar sempre atualizado! <br>
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
</Section>

<?php
    include ( 'rodape.php');
?>





