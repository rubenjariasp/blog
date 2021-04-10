<?php
    $url = explode('/', $_GET['route']);

    $inputs = new InputsController();
    $input= $inputs->get($url[1]);


?>
<section class="main__section">
    <?php
        if( count($input)>0 ):
    ?>
    <h2 class="main__sub_title">Entradas de <?=$input[0]['categoria']?>.</h2>

    <?php for ($i=0; $i < count($input); $i++): ?>

    <article class="main__articles">
        <h3 class="main__title_article"><?=ucfirst( $input[$i]['title'] );?></h3>
        <p class="main_description_article"><?=substr( $input[$i]['description'],0,150 );?>...</p>
        <div class="main__more">
            <cite class="main__info">Autor: <?=ucwords( $input[$i]['autor'] );?>.</cite>
            <cite class="main__info">Fecha: <?=$input[$i]['fecha'];?>.</cite>
            <cite class="main__info">Categoria: <?=ucwords($input[$i]['categoria']);?>.</cite>
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
    else:
    ?>
        <article class="main__articles">
        <h3 class="main__title_article">No hay entradas para esta categoria</h3>
    </article>
    <?php
        endif;
    ?>
</section>

