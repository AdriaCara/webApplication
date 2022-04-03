      <!-- Header, navbar and footer -->
    <?php
        $nomUsuari = "Adrià";
        $email = "adria2002c@gmail.com";
        $contrasena = "wee32332f";

        $nomDePagina = "Index";

        require 'header.php';

        include ('navbar.php');

        require 'footer.php';

    ?>

    <!-- Body -->
    <div class="text-center">
        <p>Hola <?php echo $nomUsuari ?></p>
        <p>El teu correu és: [ <?php echo $email ?> ]</p>
        <p>La teva contrasenya és: [ <?php echo $contrasena ?> ]</p>
    </div>