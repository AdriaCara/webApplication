      <!-- Header, navbar and footer -->
    <?php
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
                <label for="exampleInputEmail1" class="form-label">Nom d'usuari</label>
                <input type="text" class="form-control" id="UserName" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correu electronic</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">Mai compartirem el teu correu amb ningú.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrat</button>
        </form>
    </div>