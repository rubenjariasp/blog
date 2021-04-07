<?php
    $inputs = new InputsController();
    $input= $inputs->get();

?>
<section class="main__section">
    <h2 class="main__sub_title">Entradas de.</h2>
    <?php
        if( count($input)>0 ):
            for ($i=0; $i < count($input); $i++):
    ?>
    <article class="main__articles">
                
    </article>
    <?php
            endfor;
        endif;
    ?>
</section>

