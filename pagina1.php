      <!-- Header, navbar and footer -->
      <?php

        session_start();

        $nomDePagina = "Pagina1";

        require 'header.php';

        include ('navbar.php');

        require 'footer.php';

        require 'usuari.php';

    ?>

    <!-- Body -->
    <div class="container text-center">
        <h1><?php echo $nomDePagina ?></h1>

        <p>Hola <?php echo $_SESSION['nomUsuari'] ?></p>
        <p>El teu correu és: [ <?php echo $_SESSION['email'] ?> ]</p>
        <p>La teva contrasenya és: [ <?php echo $_SESSION['contrasena'] ?> ]</p>
    </div>