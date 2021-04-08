<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Rubén</title>
    <link rel="stylesheet" href="<?=URL;?>public/css/styles.css">
</head>
<body>
<div class="container">
    <header class="header">
        <h1 class="header__title">Blog de Rubén</h1>
        <nav class="header__navbar">
        <a class="header__links" href="<?=URL;?>home/">Inicio</a>
        <?php
            $categories= new CategoriesController();
            $category= $categories->get();

            if(count($category)>0):
                for($i=0; $i<count($category); $i++):
        ?>

            <a class="header__links" href="<?=URL;?>inputs/"><?= ucfirst( $category[$i]['name'] );?></a>
        <?php
                endfor;
            else:
        ?>
                <p>No hay Categorías Registradas</p>
        <?php
            endif;
        ?>

        </nav>
    </header>

    <main class="main">