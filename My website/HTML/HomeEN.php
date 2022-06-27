<?php
include_once("comonCode.php");
?>
<!DOCTYPE html>
<html lang="en">

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
    navbar("HomePT.php", "home", "EN");
    ?>



    <section class="popo">
        <h1 class="galo"> Welcome to my Website</h1>
        <p class="didi">Hello, this is my website and I'm going to explain very briefly of what is it about.
            This website is about games, online games, singleplayer and much more!
        </p>
        <p class="didi">Here you can get and/or learn about any game that you want!</p>

        <h2 class="gala">Lorem Ipsum</h2>
        <p class="didi">Lorem ipsum, in graphical and textual context, refers to filler text that is placed in a document or visual presentation. Lorem ipsum is derived from the Latin "dolorem ipsum" roughly translated as "pain itself."</p>
        <p class="didi">In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout.</p>



    </section>
</body>

</html>