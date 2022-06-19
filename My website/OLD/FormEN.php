<!DOCTYPE html>
<html lang="en">

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
    navbar("FormPT.php", "form", "EN");
    ?>

    <section class="popo">
        <form id="fufa">
            <label class="lula">First name:</label>
            <input>
            <label class="lula">Last name:</label>
            <input>
            <label class="lula"> Birthday:</label>
            <input type="date">
            <label class="lula">Email:</label>
            <input>
            <label class="lula">Adress:</label>
            <input placeholder="Adress line 1">
            <input placeholder="Post code">
            <input placeholder="City">
            <input placeholder="Country">
            <label class="lula">Profile Picture</label>
            <input type="file" accept=".png, .jpg, .gif, .JPEG">
            <input type="submit" value="Submit" id="submit">
        </form>

    </section>
</body>

</html>