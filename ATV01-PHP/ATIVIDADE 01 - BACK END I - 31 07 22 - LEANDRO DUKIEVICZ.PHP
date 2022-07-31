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

<style>
    *{
    padding: 0;
    margin:0;
    box-sizing: border-box;
}

body{
    width: 100%;
    height: 100vh;
    background: #d5d5d5;
}

h2{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 1.2rem;
    color:rgb(0, 0, 0);
}

h4{
    margin-top: 50px;
}

#content{
    width: 98%;
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 10px;
    margin:1.2rem;
    margin-top: 50px;
}

#alcool,#gasoline,#container-comb1,#container-comb2{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
    align-items: center;
    position: relative;
}

#container-comb1{
    width:90%;
    height: auto;
    margin-top: 1.2rem;
    background: rgb(120, 167, 255);
    border: none;
    border-radius: 15px;
    padding:1.2rem;
    cursor: pointer;    
}

#container-comb2{
    width:90%;
    height: auto;
    margin-top: 1.5rem;
    background: rgb(255, 142, 249);
    border: none;
    border-radius: 15px;
    padding:1.2rem;
    cursor: pointer;
}

#container-comb1:hover{
    width: 93%;
    height: auto;
    border-bottom: 3px  solid rgb(15, 0, 218);
    transition: 1s;
}

#container-comb2:hover{
    width: 93%;
    height: auto;
    border-bottom: 3px solid rgb(197, 0, 204);
    transition: 1s;
}

footer{
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    justify-content: center;
    margin-top: 5%;
}

h5{
    width: 98%;
    height: auto;
    background: linear-gradient(to right, #8e9eab, #eef2f3);
    border:2px outset rgb(255, 255, 255);
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size:1.2rem;
    border-radius: 0.5rem;
    padding: 1rem;
    margin-top: 2.0rem;
    text-align: center;
}

body::-webkit-scrollbar{
    width: 15px;
}

body::-webkit-scrollbar-track {
    background: linear-gradient(to top, #000000, #969696);
}
  body::-webkit-scrollbar-thumb {
    background: linear-gradient(to top, #2e77ff, #ff62f2);    /* color of the scroll thumb */
    border-radius: 5px;       /* roundness of the scroll thumb */
    border: 2px outset rgb(134, 134, 134);    
  }

</style>


<body>
   
    <?php
        $tanqueCheio =52.00;
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
                                      para encher o tanque ! Considerando o Tanque estar na Reserva.
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

