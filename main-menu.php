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
        <h4 style="color: rgb(255, 146, 22)"><?=$value['titulo'];?></h4>
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
        <h4 style="color: rgb(255, 146, 22)"><?=$value['titulo'];?></h4>
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
        <h4 style="color: rgb(255, 146, 22)"><?=$value['titulo'];?></h4>
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
