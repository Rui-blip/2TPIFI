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
    <link href="../CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src='../CSS/bootstrap/js/bootstrap.bundle.min.js'></script>
    <script src='main.js'></script>
</head>

<body>

    <?php
    include_once("nav.php");
    navbar("HomeEN.php", "home", "PT");
    ?>

    <section class="popo">
        <h1 class="galo"> Bem-vindo ao meu site</h1>
        <p class="didi">Olá, este é o meu site e vou explicar muito brevemente do que se trata.
            Este site é sobre jogos, jogos online, singleplayer e muito mais!
        </p>
        <p class="didi">Aqui você pode obter e / ou aprender sobre qualquer jogo que desejar!</p>

        <h2 class="gala">Lorem Ipsum</h2>
        <p class="didi">Lorem ipsum, no contexto gráfico e textual, refere-se ao texto de preenchimento que é colocado em um documento ou apresentação visual. Lorem ipsum é derivado do latim "dolorem ipsum", traduzido aproximadamente como "dor em si".</p>
        <p class="didi">Na publicação e no design gráfico, lorem ipsum é um texto de preenchimento comumente usado para demonstrar os elementos gráficos de um documento ou apresentação visual. A substituição de conteúdo significativo que possa distrair o texto do espaço reservado pode permitir que os espectadores se concentrem em aspectos gráficos, como fonte, tipografia e layout da página.</p>



    </section>
</body>

</html>