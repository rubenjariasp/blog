<?php
    if( !isset($_SESSION['login'])){
        //$load_view = new ViewController();
        //$load_view->load_wiew('home');
        header('location:../');
    }
    $users= new UsersController();
    $user= $users->get($_SESSION['user']);
    $name= explode(' ',$user[0]['name']);

?>
<section class="main__section">
    <h2 class="main__sub_title">Actualizar datos personales.</h2>
    <div class="sidebar__container_form">
        <h3 class="sidebar__title_form">Formulario de actualización</h3>
        <?php if( isset($_SESSION['error']['user_up']) && !empty($_SESSION['error']['user_up']) ): ?>
        <h5 class="sidebar__title_form sidebar__title_form-error">Contraseña invalida</h5>
        <?php endif; ?>
        <form method="post">
            <input type="hidden" name="form" value="update_user">
            <input type="hidden" name="email" value="<?=$user[0]['user'];?>">

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="name">Nombres:</label>
                <input type="text" class="inputs" name="name_u" id="name" value="<?= ucfirst($name[0]);?>" placeholder="Nombres" required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="lastname_u">Apellidos:</label>
                <input type="text" class="inputs" name="lastname_u" id="lastname_u" value="<?= ucfirst($name[1]);?>" placeholder="Apellidos" required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="password_vf">Contraseña:</label>
                <input type="password" class="inputs" name="password" id="password_vf" placeholder="Contraseña"
                required>
            </div>

            <div class="sidebar__container_inputs">
                <input type="submit" class="inputs" value="Actualizar">
            </div>
        </form>
    </div>
</section>
