<!-- Header, navbar and footer -->
<?php

    require 'usuari.php';

    session_start();

    if (isset($_POST['nomUsuari']) && isset($_POST['email']) && isset($_POST['contrasena'])) {
        $usuari = new usuari($_POST['nomUsuari'], $_POST['email'], $_POST['contrasena']);
        $_SESSION['usuari'] = serialize($usuari);
    }

    if(!isset($_COOKIE['usuario'])) {
        setcookie("usuario", $_POST['nomUsuari'], time() + (86400 * 30), "/");
    }

    $nomDePagina = "Index";

    require 'header.php';

    include ('navbar.php');

    require 'footer.php';

?>

<!-- Body -->
<?php

    require 'body.php';

?>