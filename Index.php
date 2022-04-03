      <!-- Header, navbar and footer -->
    <?php
        $nomUsuari = "Adrià";
        $email = "adria2002c@gmail.com";
        $contrasena = "wee32332f";

        session_start();

        if(isset($nomUsuarir)) {
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