<?php
	 include("cardapio.php");
?>

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
    <title>Menu - Peça Já a Sua Comida!</title>
</head>

<?php
	 include("cabecalho.php");
?>

  
<main>
    <h2>Faça o Pedido da Sua Marmita <a style="color: rgb(255, 146, 22)"href="https://api.whatsapp.com/send/?phone=5544991293234&text&type=phone_number&app_absent=0" target="_blank">Aqui !</a></h2> <br>
    
    <section > 
        <div class="menu-flex">
        <?php
           $id = $_GET['id'];
            foreach($cardapio1 as $key => $value){
                if($value['id'] ==$id){
            ?>
           <div >
            <article  >
                <a href="#"><img class="img-menu click" src=<?=$value['foto'];?>></a>
                <h3 style="color: rgb(255, 146, 22)"><?=$value['titulo'];?></h3> <br>
                <p><i><strong><?=$value['descricao'];?></p></strong></i><br>
                <p style="color: rgb(255, 146, 22)"><strong><?=$value['preco'];?></p></strong>
                                
            </article>
            </div>
            <?php
                }
            }
            ?>
            </div>
    </section>
    
</main>  

<?php
    include('contato.php');
    include('form.php');
    include('rodape.php');
?>
