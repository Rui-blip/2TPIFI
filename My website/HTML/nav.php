<?php
function NavBar($URL, $ActivePage, $lang)
{
?>
    <nav id="nav">
        <a href="Home<?= $lang ?>.php"><img src="../IMAGES/Logo.jpg" alt="Logo" id="logo1"></a>

        <div>
            <a class="alinks <?php if ($ActivePage == "home") print "active" ?>" href="Home<?= $lang ?>.php"><?php if ($lang == "EN") {
                                                                                                                    print "Home";
                                                                                                                } else {
                                                                                                                    print "Inicio";
                                                                                                                } ?></a>

            <div class="dropdown">
                <div class="dropbtn"><?php if ($lang == "EN") {
                                            print "Contact";
                                        } else {
                                            print "Contacto";
                                        } ?></div>
                <div class="dropdown-content">
                    <a href="tel: +351224103675">+351 224 103 675</a>
                    <a href="mailto: lojaarrabida@gamingreplay.com">lojaarrabida@gamingreplay.com</a>
                    <a href="https://goo.gl/maps/DC81qiKGHiPZrcpy7" target="_blank" class="dropAdress"><?php if ($lang == "EN") {
                                                                                                            print "Adress";
                                                                                                        } else {
                                                                                                            print "Endereco";
                                                                                                        } ?></a>
                </div>
            </div>

            <a class="alinks <?php if ($ActivePage == "products") print "active" ?>" href="Products<?= $lang ?>.php"><?php if ($lang == "EN") {
                                                                                                                            print "Products";
                                                                                                                        } else {
                                                                                                                            print "Produtos";
                                                                                                                        } ?></a>




            <a class="alinks <?php if ($ActivePage == "about") print "active" ?>" href="About<?= $lang ?>.php"><?php if ($lang == "EN") {
                                                                                                                    print "About";
                                                                                                                } else {
                                                                                                                    print "Acerca De";
                                                                                                                } ?></a>


            <?php if ($_SESSION["UserLogged"]) {
            ?>
                <a onclick="document.getElementById('mylogout').submit();" class="alinks <?php if ($ActivePage == "login") print "active" ?>" href="#"><?php if ($lang == "EN") {
                                                                                                                                                            print "Logout";
                                                                                                                                                        } else {
                                                                                                                                                            print "Desconectar";
                                                                                                                                                        } ?></a>

                <div style="color:white;"><?php if ($lang == "EN") {
                                                print "Hello,";
                                            } else {
                                                print "Ola, ";
                                            } ?> <?= $_SESSION["Name"] ?></div>
                <form method="POST" id="mylogout" hidden>
                    <input type="hidden" name="logoutA">
                </form>
            <?php
            } else {
            ?>
                <a class="alinks <?php if ($ActivePage == "login") print "active" ?>" href="Login<?= $lang ?>.php"><?php if ($lang == "EN") {
                                                                                                                        print "Login";
                                                                                                                    } else {
                                                                                                                        print "Conectar";
                                                                                                                    } ?></a>
            <?php
            }
            ?>
        </div>

        <a href="<?= $URL ?>">
            <img src="../IMAGES/Languages.jpg" alt="Languages" width="69px" height="37">
        </a>

    </nav>
<?php
}
?>