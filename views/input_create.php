<?php
    if( !isset($_SESSION['login'])){
            header('location:../');
    }

    if( !isset($_GET['route']) || empty($_GET['route']) ){
        header('location:../');
    }

    $categories= new CategoriesController();
    $category = $categories->get();
    $user = $_SESSION['user'];

?>
<section class="main__section">


<div class="sidebar__container_form">
        <h3 class="sidebar__title_form">Crear entrada</h3>

        <form method="post">
            <input type="hidden" name="input_crud" value="create_input">
            <input type="hidden" name="user" value="<?=$user?>">
            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="title">Titulo:</label>
                <input type="text" class="inputs" name="title" id="title" placeholder="Titulo" required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="description">Descripcion:</label>
                <textarea name="description" id="description" class="inputs inputs__text" placeholder="Descripcion"></textarea>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="description">Categoria:</label>
                <select name="categoria">
                    <?php for ($i=0; $i < count($category); $i++):?>
                    <option value="<?=$category[$i]['id'];?>"><?=$category[$i]['name'];?></option>
                    <?php endfor; ?>
                </select>
            </div>

            <div>
                <input type="submit" class="inputs" value="Registrar">
            </div>
        </form>
    </div>
</section>

