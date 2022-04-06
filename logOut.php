<!-- Header, navbar and footer -->
<?php

    $nomDePagina = "Log Out";

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

<div class="text-center">
    <form action="login.php">
        <button type="submit" class="btn btn-primary">Sortir i eliminar la sessio i les cookies</button>
    </form>
</div>