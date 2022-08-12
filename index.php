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
    <title>HOME - Marmitas da Dirce</title>
</head>

<body>
    <?php
        include ('cabecalho.php');
        include ('galery.php');
        include ( 'info.php');
    ?>

<main class="menu-flex">
        <section >
                <div >
                    <header>
                        <h2  style="color: rgb(255, 146, 22)">Marmitas Caseiras:</h2>
                    </header>
                </div>
        
            <?php
                foreach($cardapio as $key =>$value){
            ?>
                <div class="menu-flex">
                <article class="menu-flex">
                    <a href="menu.php?id=<?=$value['id'];?>"><img class="img-menu click" src=<?=$value['foto'];?>></a>
                   <div>
                    <h4 class="h-food"><?=$value['titulo'];?></h4>
                    </div>
                    <div>
                    <p><?=substr($value['descricao'],0,250);?>.</p>       
                    </div>
                </article>
                </div>
            <?php
                }
            ?>
           </div>

           <div >
                    <header>
                        <h2  style="color: rgb(255, 146, 22)">Marmitas Saudáveis:</h2>
                    </header>
                </div>
        
            <?php
                foreach($cardapio1 as $key =>$value){
            ?>
                <div class="menu-flex">
                <article class="menu-flex">
                    <a href="menu-saudavel.php?id=<?=$value['id'];?>"><img class="img-menu click" src=<?=$value['foto'];?>></a>
                   <div>
                    <h4 class="h-food"><?=$value['titulo'];?></h4>
                    </div>
                    <div>
                    <p><?=substr($value['descricao'],0,250);?>.</p>       
                    </div>
                </article>
                </div>
            <?php
                }
            ?>
           </div>

           <div >
                    <header>
                        <h2  style="color: rgb(255, 146, 22)">Sábados, Domingos e Feriados</h2>
                    </header>
                </div>
        
            <?php
                foreach($cardapio2 as $key =>$value){
            ?>
                <div class="menu-flex">
                <article class="menu-flex">
                    <a href="menu-especial.php?id=<?=$value['id'];?>"><img class="img-menu click" src=<?=$value['foto'];?>></a>
                   <div>
                    <h4 class="h-food"><?=$value['titulo'];?></h4>
                    </div>
                    <div>
                    <p><?=substr($value['descricao'],0,250);?>.</p>       
                    </div>
                </article>
                </div>
            <?php
                }
            ?>
           </div>
    
    </section>


</main>

</body>

<?php
    include('contato.php');
    include('rodape.php');
?>

</html>
