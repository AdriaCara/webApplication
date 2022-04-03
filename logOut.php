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

    <?php

         require 'body.php';

    ?>
    
    <div class="text-center">
        <form action="login.php">
            <button type="submit" class="btn btn-primary">Sortir i eliminar la sessio i les cookies</button>
        </form>
    </div>