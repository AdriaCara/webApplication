<!-- Header, navbar and footer -->
<?php

    $nomDePagina = "Pagina1";

    session_start();

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