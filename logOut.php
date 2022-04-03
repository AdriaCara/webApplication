      <!-- Header, navbar and footer -->
      <?php
        $nomUsuari = "Adrià";
        $email = "adria2002c@gmail.com";
        $contrasena = "wee32332f";

        $nomDePagina = "Log Out";

        require 'header.php';

        include ('navbar.php');

        require 'footer.php';

        require 'usuari.php';

    ?>

    <!-- Body -->
    <div class="container">
        <div>
            <h1><?php echo $nomDePagina ?></h1>

            <p>El teu nom d'usuari és: [<?php echo $nomUsuari ?>]</p>
            <p>El teu correu és: [ <?php echo $email ?> ]</p>
            <p>La teva contrasenya és: [ <?php echo $contrasena ?> ]</p>
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Sortir i eliminar la cookie</button>
        </div>
    </div>