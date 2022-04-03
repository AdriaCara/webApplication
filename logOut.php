      <!-- Header, navbar and footer -->
      <?php

        $nomDePagina = "Log Out";

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
    <div class="container text-center">
        <div>
        <h1><?php echo $nomDePagina ?></h1>

        <p>
            <?php 
                if (count($_COOKIE) > 0) {
                    echo $_COOKIE[$cookie_name];
                }
            ?>
        </p>
        <p>El teu correu és: [ <?php echo $_SESSION['email'] ?> ]</p>
        <p>La teva contrasenya és: [ <?php echo $_SESSION['contrasena'] ?> ]</p>
        <p>Numero d'accions: [
            <?php
                echo $_SESSION['contador'];
            ?>
        ]
        </p>
        </div>
        <div>
            <form action="login.php">
                <button type="submit" class="btn btn-primary">Sortir i eliminar la cookie</button>
            </form>
        </div>
    </div>