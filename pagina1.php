<!-- Header, navbar and footer -->
<?php

    $nomDePagina = "Pagina1";

    session_start();

    if( isset( $_SESSION['contador'] ) ) {
        $_SESSION['contador'] += 1;
    }else {
        $_SESSION['contador'] = 1;
    }

    $cookie_name = "usuario";

    require 'header.php';

    include ('navbar.php');

    require 'footer.php';

    require 'usuari.php';

?>

<!-- Body -->
<?php

    require 'body.php';

?>