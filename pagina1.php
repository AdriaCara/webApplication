      <!-- Header, navbar and footer -->
      <?php
        $nomUsuari = "";
        $email = "";
        $contrasena = "";

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

        $_SESSION['nomUsuari'] = $nomUsuari;
        $_SESSION['email'] = $email;
        $_SESSION['contrasena'] = $contrasena;

        if(isset($nomUsuari)) {
            setcookie("nomUsuari", $nomUsuari);
        }

        $nomDePagina = "Index";

        require 'header.php';

        include ('navbar.php');

        require 'footer.php';

        require 'usuari.php';

        new usuari($nomUsuari, $email, $contrasena);

    ?>

    <!-- Body -->
    <div class="container">
        <h1><?php echo $nomDePagina ?></h1>

        <p>El teu nom d'usuari és: [<?php echo $nomUsuari ?>]</p>
        <p>El teu correu és: [ <?php echo $email ?> ]</p>
        <p>La teva contrasenya és: [ <?php echo $contrasena ?> ]</p>
    </div>