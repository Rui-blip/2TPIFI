<?php
include_once("comonCode.php");
?>



<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="../CSS/Style.css?t<?= time(); ?>">
    <script src='main.js'></script>
</head>

<body>

    <?php
    include_once("nav.php");
    navbar("AboutEN.php", "about", "PT");
    ?>

    <section class="popo">
        <h1 class="title">Bem-vindo à seção ACERCA DE!</h1>
        <p class="dodo">Olá, meu nome é Rui Ferreira e este é o meu site! Eu projetei isso porque é um projeto que eu tenho que fazer para ter uma boa nota no final do assunto e aprender algumas coisas legais!</p>
        <p class="dodo">Sou estudante de Emile Metz, no Luxemburgo, e tive tempo para criar este site, demorei um pouco, mas no final consegui fazê-lo.</p>
        <p class="dodo">Ao fazer este site, aprendo a variar coisas legais e informações úteis para usar no futuro. Este é um assunto muito bom e interessante, mas é difícil se você não prestar atenção no que está fazendo.</p>
        <p class="dodo">Por exemplo, para eu fazer este site, tive aulas com meu professor e pesquisei muito para aprender como fazer isso. É claro que pode não parecer o que eu queria fazer no começo, mas estou feliz com o resultado. </p>
        <p class="dodo">Eu gosto de fazer isso, criar sites é divertido, mas muito cansativo, porque você tem muita informação para prestar atenção. Eu poderia fazer disso um hobby e quem sabe talvez eu possa criar alguns sites no futuro!</p>
        <p class="dodo">O que mais importava para mim quando eu estava criando este site era ter uma idéia do que queria fazer e pesquisar o máximo possível para que isso acontecesse, sou muito perfeccionista e, se algo não é do jeito que eu quero Eu farei tudo para ter do jeito que eu quero.</p>
        <h2 class="title">Espero que tenham gostado do meu site! :)</h2>
    </section>
</body>

</html>