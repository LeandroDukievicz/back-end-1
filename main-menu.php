<section >
    <div >
        <header>
            <h2  style="color: rgb(255, 146, 22)">Marmitas Caseiras:</h2>
        </header>
    </div>
        
            <?php
                if(is_array($cardapio) && !empty($cardapio)){
                    foreach($cardapio as $key =>$value){
            ?>

    <div class="menu-flex">
        <article class="menu-flex">
            <a href="menu.php?id=<?=$value['id'];?>"><img class="img-menu click" src=<?=$value['foto'];?>></a>
    
        <div>
            <h4 style="color: rgb(255, 146, 22)"><?=$value['titulo'];?></h4>
        </div>

        <div>
            <p><?=substr($value['descricao'],0,250);?>.</p> 
                  
        </div>
        </article>
    </div>
    
            <?php
                }
            }else{
                require('Error.php');
            }
            ?>
    </div>

    <div >
        <header>
            <h2  style="color: rgb(255, 146, 22)">Marmitas Saudáveis:</h2>
        </header>
    </div>
        
            <?php
                if(is_array($cardapio1) && !empty($cardapio1)){
                    foreach($cardapio1 as $key =>$value){
            ?>

    <div class="menu-flex">
        <article class="menu-flex">
            <a href="menu-saudavel.php?id=<?=$value['id'];?>"><img class="img-menu click" src=<?=$value['foto'];?>></a>
        <div>
            <h4 style="color: rgb(255, 146, 22)"><?=$value['titulo'];?></h4>
        </div>

        <div>
            <p><?=substr($value['descricao'],0,250);?>.</p>       
        </div>
        </article>
        </div>

            <?php
                }
            }else{
                require('Error.php');
            }
            ?>
    </div>

    <div >
        <header>
            <h2  style="color: rgb(255, 146, 22)">Sábados, Domingos e Feriados</h2>
        </header>
    </div>
        
            <?php
                if(is_array($cardapio2) && !empty($cardapio2)){
                    foreach($cardapio2 as $key =>$value){
            ?>

    <div class="menu-flex">
        <article class="menu-flex">
            <a href="menu-especial.php?id=<?=$value['id'];?>"><img class="img-menu click" src=<?=$value['foto'];?>></a>
        <div>
            <h4 style="color: rgb(255, 146, 22)"><?=$value['titulo'];?></h4>
        </div>

        <div>
            <p><?=substr($value['descricao'],0,250);?>.</p>       
        </div>
        </article>
    </div>
            <?php
                }
            }else{
                require('Error.php');
            }
            ?>
    </div>
</section>
