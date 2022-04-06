<!-- Header, navbar and footer -->
<?php

    if(isset($_POST['nomUsuari'])) {
            $nomUsuari = $_POST['nomUsuari'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }

    if (isset($_POST['contrasena'])) {
        $contrasena = $_POST['contrasena'];
    }

    session_start();

    if (isset($nomUsuari)) {
        $_SESSION['nomUsuari'] = $nomUsuari;
    }
    if (isset($email)) {
        $_SESSION['email'] = $email;
    }
    if (isset($contrasena)) {
        $_SESSION['contrasena'] = $contrasena;
    }
    if( isset( $_SESSION['contador'] ) ) {
        $_SESSION['contador'] += 1;
    }else {
        $_SESSION['contador'] = 1;
        }

    $cookie_name = "usuario";
    if(isset($nomUsuari)) {
        setcookie($cookie_name, $_POST['nomUsuari'], time() + (86400 * 30), "/");
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