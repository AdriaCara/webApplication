<div class="container text-center">
    <div>
        <h1><?php echo $nomDePagina ?></h1>

        <p> 
            <?php 
                if (count($_COOKIE) > 0) {
                    echo "<p>Hola ".$_COOKIE[$cookie_name]."</p>";
                } else {
                    echo " anonim";
                }
            ?>
        </p>
        <p><?php 
                if (isset($_SESSION['email'])) {
                    echo "<p>El teu correu és: [ ".$_SESSION['email']." ]</p>";
                } 
            ?>
        <p><?php 
                if (isset($_SESSION['contrasena'])) {
                    echo "<p>La teva contrasenya és: [ ".$_SESSION['contrasena']." ]</p>";
                }
            ?>
            <?php
                echo "<p>Numero d'accions: [ ".$_SESSION['contador']." ]</p>";
            ?>
    </div>
</div>