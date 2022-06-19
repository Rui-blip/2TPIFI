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
    navbar("ProductsEN.php", "products", "PT");
    ?>

    <section class="popo">

        <?php

        $host = "localhost";
        $user = "root";
        $psw = "";
        $database = "ProductsData";
        $portNo = 3306;
        $connection = new mysqli($host, $user, $psw, $database, $portNo);



        $sqlStatement = $connection->prepare("SELECT * FROM Products NATURAL JOIN Description WHERE LanguageID=2");
        $sqlStatement->execute();
        $result = $sqlStatement->get_result();
        $numberofproducts = $result->num_rows;

        $lineNumber = 0;

        if ($numberofproducts == 0) {
            print("<h1>No products were found </h1>");
        } else {
            while ($row = $result->fetch_assoc()) {
                if ($lineNumber == 0)
                    print("<div class='mainlineproducts'>");
        ?>
                <div class="product">
                    <a href="ShowDetailedProducts.php?ProductID=<?= $row["ProductsID"] ?>&lang=PT"> <img class="imageproduct" src="<?= $row["ProductsImage"] ?>" alt="img"></a>
                    <div><?= $row["DescriptionText"] ?></div>
                    <div><a href="<?= $row["ProductLink"] ?>" target="_blank"><span class="blackprice"><?= $row["ProductsPrice"] ?></span></a></div>

                </div>

        <?php
                $lineNumber++;
                if ($lineNumber == 3) {
                    print("</div>");
                    $lineNumber = 0;
                }
            }
        }

        ?>


    </section>
</body>

</html>