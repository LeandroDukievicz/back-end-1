<?php
	 require("cardapio.php");
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
    <title>HOME - Marmitas da Dirce</title>
</head>

<body>
    <?php
        include ('cabecalho.php');
        include ('galery.php');
        include ( 'info.php');
    ?>

<main class="menu-flex">
       <?php
            include('main-menu.php');
        ?>
</main>

<?php
    include('topo.php');
?>

</body>

<?php
    include('contato.php');
    include('form.php');
    include('rodape.php');
?>

</html>
