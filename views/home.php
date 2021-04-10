<?php
    $inputs = new InputsController();
    $input= $inputs->get();
    //echo '<pre>';
    //var_dump($input);
    //echo '</pre>';

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
            <cite class="main__info">Categoria: <?=ucwords($input[$i]['categoria']);?>.</cite>
            <?=$input[$i]['id'];?>
            <div class="main__container_butons">
                <form method='post'>
                    <input type="hidden" name="input_crud" value="select">
                    <input type="hidden" name="id" value="<?=$input[$i]['id'];?>">
                    <input class="btn__buton btn__buton-info" type="submit" value="Ver Mas">
                </form>

                <?php
                    if(isset($_SESSION['user']) && $_SESSION['user']==$input[$i]['user']):
                ?>
                <form method='post'>
                    <input type="hidden" name="input_crud" value="update">
                    <input type="hidden" name="id" value="<?=$input[$i]['id'];?>">
                    <input class="btn__buton btn__buton-update" type="submit" value="Modificar">
                </form>
                <form method='post'>
                    <input type="hidden" name="input_crud" value="delete">
                    <input type="hidden" name="id" value="<?=$input[$i]['id'];?>">
                    <input class="btn__buton btn__buton-delete" type="submit" value="Eliminar">
                </form>
                <?php endif; ?>
            </div>
        </div>
    </article>
    <?php
            endfor;
        endif;
    ?>
</section>
