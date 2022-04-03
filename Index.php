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

        if (isset($nomUsuari)) {
            $_SESSION['nomUsuari'] = $nomUsuari;
        }
        if (isset($email)) {
            $_SESSION['email'] = $email;
        }
        if (isset($contrasena)) {
            $_SESSION['contrasena'] = $contrasena;
        }
        if( isset( $_SESSION['contador'] ) ) {
            $_SESSION['contador'] += 1;
         }else {
            $_SESSION['contador'] = 1;
         }

        $cookie_name = "usuario";
        if(isset($nomUsuari)) {
            $cookie_value = $nomUsuari;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        }

        $nomDePagina = "Index";

        require 'header.php';

        include ('navbar.php');

        require 'footer.php';

        require 'usuari.php';

        if (count($_COOKIE) < 0) {
            new usuari($nomUsuari, $email, $contrasena);
        }

    ?>

    <!-- Body -->
    <div class="text-center">
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