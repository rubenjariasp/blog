<aside class="sidebar">
    <?php
        if( isset($_SESSION['name']) ):
    ?>
    <div class="sidebar__options">
        <h3 class="sidebar__title">Bienvenido <?=ucwords(  $_SESSION['name'] );?>.</h3>
        <ul>
            <li><a href="#">Nueva entrada</a></li>
            <li><a href="#">Nueva categoría</a></li>
            <li><a href="./views/logout.php">Salir</a></li>
        </ul>
    </div>
    <?php
        else:
    ?>
    <div class="sidebar__container_form">
        <h3 class="sidebar__title_form">Login</h3>
        <form method="post">
            <input type="hidden" name="form" value="login">
            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="email">Usuario:</label>
                <input type="text" class="inputs" name="email" id="email" placeholder="Usuario" required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="password">Contraseña:</label>
                <input type="password" class="inputs" name="password" id="password" placeholder="Contraseña" required>
            </div>

            <div>
                <input type="submit" class="inputs" value="Ingresar">
            </div>
        </form>
    </div>

    <div class="sidebar__container_form">
        <h3 class="sidebar__title_form">Signup</h3>
        <form method="post">
            <input type="hidden" name="form" value="signin">
            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="name">Nombres:</label>
                <input type="text" class="inputs" name="name" id="name" placeholder="Nombres" required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="lastname">Apellidos:</label>
                <input type="text" class="inputs" name="lastname" id="lastname" placeholder="Apellidos" required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="email_new">Correo:</label>
                <input type="email" class="inputs" name="email" id="email_new" placeholder="Correo" required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="password_new">Contraseña:</label>
                <input type="password" class="inputs" name="password" id="password_new" placeholder="Contraseña"
                required>
            </div>

            <div class="sidebar__container_inputs">
                <input type="submit" class="inputs" value="Registrar">
            </div>
        </form>
    </div>
    <?php
        endif;
    ?>
</aside>
