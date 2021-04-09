<aside class="sidebar">
    <?php
        if( isset($_SESSION['name']) ):
    ?>
    <div class="sidebar__options">
        <h3 class="sidebar__title">Bienvenido, <?=ucwords(  $_SESSION['name'] );?>.</h3>
        <ul>
            <li><a href="#">Nueva entrada</a></li>
            <li><a href="#">Nueva categoría</a></li>
            <li><a href="<?=URL;?>user_update_info/">Modificar datos personales</a></li>
            <li><a href="<?=URL;?>logout/">Salir</a></li>
        </ul>
    </div>
    <?php
        else:
    ?>
    <div class="sidebar__container_form">
        <h3 class="sidebar__title_form">Login</h3>
        <?php if( isset($_SESSION['error']['login']) && !empty($_SESSION['error']['login']) ): ?>
        <h5 class="sidebar__title_form sidebar__title_form-error">Usuario o contraseña invalida</h5>
        <?php endif; ?>
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
                <label class="sidebar__label" for="email_new">Usuario:</label>
                <input type="text" class="inputs" name="email" id="email_new" placeholder="Usuario" required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="password_new">Contraseña:</label>
                <input type="password" class="inputs" name="password" id="password_new" placeholder="Contraseña"
                required>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="password_new">Pregunta secreta:</label>
                <select name="question" id="question">
                    <option value="1">Nombre de la madre</option>
                    <option value="2">Nombre de la mascota</option>
                    <option value="3">Color favorito</option>
                </select>
            </div>

            <div class="sidebar__container_inputs">
                <label class="sidebar__label" for="password_new">Respuesta:</label>
                <input type="text" class="inputs" name="answer" id="answer" placeholder="Respuesta"
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

