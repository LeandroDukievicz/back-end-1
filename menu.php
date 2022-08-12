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
    <section>
        <header>  
            <h2>Faça o Pedido da Sua Marmita <a href="https://api.whatsapp.com/send/?phone=5544991293234&text&type=phone_number&app_absent=0" target="_blank">Aqui !</a></h2>
        </header>

        <?php
           $id = $_GET['id'];
        

            foreach($cardapio as $key => $value){
                if($value['id'] ==$id){
            ?>

            <article>
                <a href="#"><img src=<?=$value['foto'];?>></a>
                <h2><?=$value['titulo'];?></h2> <br>
                <p><?=$value['descricao'];?></p><br>
                <p><?=$value['preco'];?></p>
            </article>
            <?php
                }
            }
            ?>



    </section>



</main>  
		




<?php
     include("contato.php");
     include("rodape.php");
?>