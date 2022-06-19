<?php
include_once("comonCode.php");


if (isset($_POST["firstnameSignup"], $_POST["lastnameSignup"], $_POST["emailSignup"], $_POST["passwordSignup"], $_POST["passwordRepeatSignup"])) {
    $sqlStatement = $connection->prepare("SELECT * FROM Users WHERE Email=?");
    $sqlStatement->bind_param("s", $_POST["emailSignup"]);
    $sqlStatement->execute();
    $result = $sqlStatement->get_result();
    $userExist = $result->num_rows;

    if ($userExist == 0) {

        if ($_POST["passwordSignup"] === $_POST["passwordRepeatSignup"]) {

            $hashedPSW = password_hash($_POST["passwordSignup"], PASSWORD_DEFAULT);
            $sqlInsert = $connection->prepare("INSERT INTO Users (FirstName, LastName, Email, PSW) VALUES(?,?,?,?)");
            $sqlInsert->bind_param("ssss", $_POST["firstnameSignup"], $_POST["lastnameSignup"], $_POST["emailSignup"], $hashedPSW);
            $sqlInsert->execute();


            $_SESSION["Name"] = $_POST["firstnameSignup"] . " " . $_POST["lastnameSignup"];
            $_SESSION["UserLogged"] = true;

            header("Location: HomeEN.php");
            die();
        } else {
            print "<script>alert('A palavra passe nao coincide');</script>";
            header("Refresh:0");
            die();
        }
    } else {
        print "<script>alert('O utilisador ja existe');</script>";
        header("Refresh:0");
        die();
    }
}


if (isset($_POST["emailSignin"], $_POST["passwordSignin"])) {
    $sqlStatement = $connection->prepare("SELECT * FROM Users WHERE Email=?");
    $sqlStatement->bind_param("s", $_POST["emailSignin"]);
    $sqlStatement->execute();
    $result = $sqlStatement->get_result();
    $userExist = $result->num_rows;

    if ($userExist == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($_POST["passwordSignin"], $row["PSW"])) {
            $_SESSION["Name"] = $row["FirstName"] . " " . $row["LastName"];
            $_SESSION["UserLogged"] = true;

            header("Location: HomeEN.php");
            die();
        } else {
            print "<script>alert('A palavra passe nao coincide');</script>";
            header("Refresh:0");
            die();
        }
    } else {
        print "<script>alert('O utilisador nao existe');</script>";
        header("Refresh:0");
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href="../CSS/Style.css?t<?= time(); ?>">
    <link rel="stylesheet" href="../CSS/bootstrap/css/bootstrap.min.css">
    <link href="../CSS/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src='../CSS/bootstrap/js/bootstrap.bundle.min.js'></script>
    <script>
        function switchform(form) {
            if (form == "SignUp") {
                document.getElementById("signin").setAttribute("hidden", "hidden");
                document.getElementById("signup").removeAttribute("hidden");
            } else {
                document.getElementById("signup").setAttribute("hidden", "hidden");
                document.getElementById("signin").removeAttribute("hidden");
            }
        }
    </script>
    <title>Login</title>
    <style>
        /** {
            box-sizing: border-box;
            padding: 1px;
            font-family: Arial, Helvetica, sans-serif;
        }*/

        #heading1 {
            text-align: center;
            padding: 30px;
        }

        .imgLogin {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 14%;
            height: 14%;
        }

        .myForm {
            max-width: 500px;
            margin: auto;
            margin-top: 10px;
        }

        .input-container {

            display: flex;
            width: 100%;
            margin-bottom: 15px;

        }

        .icon {
            padding: 10px;
            background: red;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
            border: none;
            border-bottom: 3px solid grey;
        }

        .input-field:focus {
            border: 2px solid grey;
        }

        .bttn {
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            text-align: center;
        }

        .red {
            background-color: red;
        }

        .grey {
            background-color: grey;
        }

        .bttn:hover {
            opacity: 1;
            background-color: grey;
        }

        /*a:hover {
            color: blueviolet;
        }*/

        .icon:hover {
            background-color: grey;
        }
    </style>
</head>

<body>

    <?php
    include_once("nav.php");
    navbar("LoginEN.php", "login", "PT");
    ?>

    <section class="popo">
        <img class="imgLogin" src="../IMAGES/Logo.jpg" alt="Login Logo">

        <div id="signin">
            <form method="POST" class="myForm" name="myForm">
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" placeholder="Email" name="emailSignin" class="input-field" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input type="password" placeholder="Palavra passe" name="passwordSignin" class="input-field" required>
                </div>
                <div><button type="submit" class="bttn red">Iniciar Sessao</button></div>
                <br>
                <div><a style="color: inherit; text-decoration: none; color: white;" onclick="switchform('SignUp');" type="button" class="bttn grey">Criar Conta</a></div>
            </form>
        </div>




        <div id="signup" hidden>
            <form method="POST" class="myForm" name="myForm">
                <div class="input-container">
                    <i class="fa fa-user-circle icon"></i>
                    <input type="text" placeholder="Primeiro Nome" name="firstnameSignup" class="input-field" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-user-circle icon"></i>
                    <input type="text" placeholder="Ultimo Nome" name="lastnameSignup" class="input-field" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" placeholder="Email" name="emailSignup" class="input-field" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input type="password" placeholder="Palavra Passe" name="passwordSignup" class="input-field" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input type="password" placeholder="Repetir Palavra Passe" name="passwordRepeatSignup" class="input-field" required>
                </div>
                <div><button type="submit" class="bttn red">Criar Conta</button></div>
                <br>
                <div><a style="color: inherit; text-decoration: none; color: white;" onclick="switchform('SignIn');" type="button" class="bttn grey">Iniciar Sessao com uma conta existente</a></div>
            </form>
        </div>

    </section>
</body>

</html>