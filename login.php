<!-- Header, navbar and footer -->
<?php

    session_start();

    if (count($_COOKIE) < 0) {
    setcookie("usuario", $_SESSION['nomUsuari'], time() - 3600);
    }


    if (isset( $_SESSION['contador'])) {
    session_unset();
    session_destroy();
    }

    if(isset($nomUsuari)) {
    setcookie("nomUsuari", $nomUsuari);
    }

    $nomDePagina = "Login";

    require 'header.php';

    include ('navbar.php');

    require 'footer.php';

    require 'usuari.php';

?>

<!-- Body -->
<div class="container">
    <form action="Index.php" method="POST">
        <div class="mb-3">
            <label for="nomUsuari" class="form-label">Nom d'usuari</label>
            <input type="text" class="form-control" id="UserName" name="nomUsuari" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correu electronic</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
            <div id="emailHelp" class="form-text">Mai compartirem el teu correu amb ningú.</div>
        </div>
        <div class="mb-3">
            <label for="contrasena" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="contrasena" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrat</button>
    </form>
</div>