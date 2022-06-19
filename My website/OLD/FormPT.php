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
    navbar("FormEN.php", "form", "PT");
    ?>

    <section class="popo">
        <form id="fufa">
            <label class="lula"> Primeiro nome:</label>
            <input>
            <label class="lula"> Ultimo nome:</label>
            <input>
            <label class="lula"> Data de Nascimento:</label>
            <input type="date">
            <label class="lula"> Endereço Eletrônico:</label>
            <input>
            <label class="lula"> Morada:</label>
            <input placeholder="Adress line 1">
            <input placeholder="Post code">
            <input placeholder="City">
            <input placeholder="Country">
            <label class="lula"> Fotografia de Perfil</label>
            <input type="file" accept=".png, .jpg, .gif, .JPEG">
            <input type="submit" value="Submeter" id="submit">
        </form>

    </section>
</body>

</html>