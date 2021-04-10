<?php
    $inputs = new InputsController();
    $input= $inputs->get();

?>
<section class="main__section">

    <article class="main__articles">
        <h3 class="main__title_article"><?=ucfirst( $input[$i]['title'] );?></h3>
        <p class="main_description_article"><?=substr( $input[$i]['description'],0,150 );?>...</p>
        <div class="main__more">
            <cite class="main__info">Autor: <?=ucwords( $input[$i]['autor'] );?>.</cite>
            <cite class="main__info">Fecha: <?=$input[$i]['fecha'];?>.</cite>
            <cite class="main__info">Categoria: <?=$input[$i]['name'];?>.</cite>
            <div class="main__container_butons">
                <?php
                    if(isset($_SESSION['user']) && $_SESSION['user']==$input[$i]['user']):
                ?>
                <input class="btn__buton btn__buton-update" type="button" value="Modificar">
                <input class="btn__buton btn__buton-delete" type="button" value="Eliminar">
                <?php endif; ?>
            </div>
        </div>
    </article>

</section>