      <!-- Header, navbar and footer -->
    <?php
        if(isset($_POST.['nomUsuari'])) {
            $nomUsuari = $_POST.['nomUsuari'];
        }
        if (isset($_POST.['email'])) {
            $email = $_POST.['email'];
        }

        if (isset($_POST.['contrasena'])) {
            $contrasena = $_POST.['contrasena'];
        }

        session_start();
        if(isset($_SESSION['counter'])) {
            $_SESSION['counter'] += 1;
        } else {
            $_SESSION['counter'] = 1;
        }

        if (isset($nomUsuari)) {
            $_SESSION['nomUsuari'] = $nomUsuari;
            $_SESSION['email'] = $email;
            $_SESSION['contrasena'] = $contrasena;
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