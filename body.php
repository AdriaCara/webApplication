<div class="container text-center">
    <div>
        <h1><?php echo $nomDePagina ?></h1>

        <?php 
            if (isset($_COOKIE['usuario'])) {
                echo "<p>Hola ".$_COOKIE["usuario"]."</p>";
            } else {
                echo " anonim";
            }
        ?>
        <?php 
            if (isset($_SESSION['email'])) {
                echo "<p>El teu correu és: [ ".$_SESSION['email']." ]</p>";
            } 
        ?>
        <?php 
            if (isset($_SESSION['contrasena'])) {
                echo "<p>La teva contrasenya és: [ ".$_SESSION['contrasena']." ]</p>";
            }
        ?>
        <?php
            echo "<p>Numero d'accions: [ ".$_SESSION['contador']." ]</p>";
        ?>
    </div>
</div>