<?php
include_once("comonCode.php");

if (isset($_POST["IDProduct"])) {
    if ($_SESSION["UserLogged"] == false) {
        print "<script>alert('Nao estas connectado');</script>";
        header("Refresh:0");
        die();
    }
}
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
                    <i class="fa-regular fa-cart-shopping"></i>
                    <button onclick="document.getElementById('formAddID<?= $row['ProductsID'] ?>').submit();" class="btn btn-dark" type="submit">Adicionar ao carrinho</button>
                    <form method="POST" hidden id="formAddID<?= $row["ProductsID"] ?>">
                        <input type="text" value="<?= $row["ProductsID"] ?>" name="IDProduct">
                    </form>

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