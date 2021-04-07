<?php
    $inputs = new InputsController();
    $input= $inputs->get();

?>
<section class="main__section">
    <h2 class="main__sub_title">Últimas entradas.</h2>
    <?php
        if( count($input)>0 ):
            for ($i=0; $i < count($input); $i++):
    ?>
    <article class="main__articles">
        <h3 class="main__title_article"><?=ucfirst( $input[$i]['title'] );?></h3>
        <p class="main_description_article"><?=substr( $input[$i]['description'],0,150 );?>...</p>
        <div class="main__more">
            <cite class="main__info">Autor: <?=ucwords( $input[$i]['autor'] );?>.</cite>
            <cite class="main__info">Fecha: <?=$input[$i]['fecha'];?>.</cite>
            <cite class="main__info">Categoria: <?=$input[$i]['name'];?>.</cite>
            <div class="main__container_butons">
                <input class="btn__buton btn__buton-info" type="button" value="Ver Mas">
            </div>
        </div>
    </article>
    <?php
            endfor;
        endif;
    ?>
</section>
