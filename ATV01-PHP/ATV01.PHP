<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/php-original.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>ATIVIDADE 01 - PHP</title>
</head>

<body>
   
    <?php
        $tanqueCheio =50.00;
        $alcool = 4.35;
        $gasolina = 5.74;
        $media;
        $tanqueAlcool;
        $tanqueGasolina ;
        $total_alcool;
        $total_gasolina;
        $total_alcool = $tanqueCheio*$alcool;
        $total_gasolina = $tanqueCheio*$gasolina; 
    ?>

</body>

<main>
    <section id="content">
        <section id="alcool">    
            <div id="container-comb1">
                <h2>Álcool:  </h2> 
                    <div> 
                        <h4><strong>Olá Juliana Tudo bem? Seja bem vinda !!!</strong></h4> <br>
                        <?php
                            if ($alcool / $gasolina > 0.7){
                                echo "<p>Hoje não compensa abastecer seu carro 
                                       no Álcool, devido a porcentagem estar acima de 0.7 . 
                                       E você gastaria R$ $total_alcool para encher o tanque. </p>";
                            }else{
                                       echo " <p>  É viável abastecer no alcool, devido a 
                                                   porcentagem estar abaixo de 0.7 . O total será de R$ $total_alcool
                                                   para completar o tanque !
                                               </p>";
                                               }
                         ?>
                    </div>
                </div>
                
        </section>

    <section id="gasoline">
        <div id="container-comb2">
            <h2>Gasolina :</h2> 
        
           <div>  
               <h4><strong>Olá Juliana Tudo bem? Seja bem vinda !!!</strong></h4>
                   <?php
                       if ($alcool / $gasolina > 0.7){
                          echo " <br> <p>  É viável abastecer na Gasolina devido a 
                                      porcentagem estar acima de 0.7 . O total será de R$ $total_gasolina
                                      para Encher o tanque ! Considerando o Tanque estar na Reserva.
                                </p>";
                     }else{
                        echo   "<p>Hoje não compensa abastecer seu carro 
                                   na Gasolina, devido a porcentagem estar abaixo de 0.7 . 
                                   E você gastaria R$ $total_gasolina para encher o tanque. </p>";
                            } 
                    ?>
            </div>
        </div>
    </section>
</section>


</main>


<footer>
    <h5>Leandro Dukiévicz R.A 21144207-5 </h5>
</footer>

</html>

