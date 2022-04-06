<!-- Header, navbar and footer -->
<?php

    session_start();

    if (isset($_POST['nomUsuari'])) {
        $_SESSION['nomUsuari'] = $_POST['nomUsuari'];
    }
    if (isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
    }
    if (isset($_POST['contrasena'])) {
        $_SESSION['contrasena'] = $_POST['contrasena'];
    }
    if( isset( $_SESSION['contador'] ) ) {
        $_SESSION['contador'] += 1;
    }else {
        $_SESSION['contador'] = 1;
    }

    if(!isset($_COOKIE['usuario'])) {
        setcookie("usuario", $_POST['nomUsuari'], time() + (86400 * 30), "/");
    }

    $nomDePagina = "Index";

    require 'header.php';

    include ('navbar.php');

    require 'footer.php';

    require 'usuari.php';

?>

<!-- Body -->
<?php

    require 'body.php';

?>