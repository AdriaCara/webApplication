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
    <div class="text-center">
        <p>Hola <?php echo $_SESSION['nomUsuari'] ?></p>
        <p>El teu correu és: [ <?php echo $_SESSION['email'] ?> ]</p>
        <p>La teva contrasenya és: [ <?php echo $_SESSION['contrasena'] ?> ]</p>
    </div>