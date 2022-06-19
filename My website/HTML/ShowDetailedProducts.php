<?php
include_once("comonCode.php");

$otherlang = "PT";
$langNum = 1;
if (isset($_GET["lang"])) {
    if (in_array($_GET["lang"], array("EN", "PT"))) {
        if ($_GET["lang"] == "EN") {
            $otherlang = "PT";
        } else {
            $otherlang = "EN";
            $langNum = 2;
        }
    } else {
        $_GET["lang"] = "EN";
        $otherlang = "PT";
    }
} else {
    $_GET["lang"] = "EN";
}



/*if (!isset($_GET["lang"])) {
    $_GET["lang"] = "EN";
}*/

if (isset($_GET["ProductID"])) {


    $sqlStatement = $connection->prepare("SELECT * FROM Products NATURAL JOIN Description WHERE LanguageID=" . $langNum . " AND ProductsID=?");
    $sqlStatement->bind_param("s", $_GET["ProductID"]);
    $sqlStatement->execute();
    $result = $sqlStatement->get_result();

    $numberofproducts = $result->num_rows;

    $row = $result->fetch_assoc();
} else {
    die("Product not found");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href="../CSS/Style.css?t<?= time(); ?>">
    <title>Document</title>
</head>

<body>

    <?php
    include_once("nav.php");
    navbar("ShowDetailedProducts.php?ProductID=" . $_GET["ProductID"] . "&lang=" . $otherlang, "products", $_GET["lang"]);


    ?>

    <section class="popo">
        <div class="didi">
            <?php
            if ($numberofproducts > 0) {
            ?>


                <h1><?= $row["ProductsName"] ?></h1>

                <h2><?php if ($_GET["lang"] == "EN") {
                        print "About this game";
                    } else {
                        print "Sobre Este Jogo";
                    } ?></h2>

                <div class="videos">

                    <p class="Text"><?= $row["DescriptionText2"] ?></p>
                    <video width="640px" height="360px" controls>
                        <source src="../VIDEOS/<?= $row["ProductsID"] ?>.webm" type="video/mp4">
                    </video>
                </div>



            <?php
            } else {
                if ($_GET["lang"] == "EN") {
                    print("No products found");
                } else {
                    print("Nenhum produto foi encontrado");
                }
            }
            ?>
    </section>
</body>

</html>