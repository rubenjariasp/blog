<?php
    if( !isset($_SESSION['login'])){
            header('location:../');
    }

    if( !isset($_GET['route']) || empty($_GET['route']) ){
        header('location:../');
    }

    $url = explode('/', $_GET['route']);
    //var_dump($url);
    $inputs = new InputsController();
    $input= $inputs->check_input($url[1]);

?>
<section class="main__section">

    <?php
        if( count($input)>0 ):
            for ($i=0; $i < count($input); $i++):
    ?>

<div class="sidebar__container_form">
        <h3 class="sidebar__title_form">Modificar entrada</h3>

        <form method="post">
            <input type="hidden" name="form" value="update_input">
            <input type="hidden" name="id" value="<?=$input[$i]['id'];?>">
            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="title">Titulo:</label>
                <input type="text" class="inputs" name="title" id="title" value="<?=$input[$i]['title'];?>" placeholder="Titulo" required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="description">Descripcion:</label>
                <textarea name="description" id="description" class="inputs inputs__text" placeholder="Descripcion"><?=$input[$i]['description'];?></textarea>
            </div>

            <div>
                <input type="submit" class="inputs" value="Modificar">
            </div>
        </form>
    </div>
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

