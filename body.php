<div class="container text-center">
    <div>
        <h1><?php echo $nomDePagina ?></h1>

        <p>
            <?php 
                if (count($_COOKIE) > 0) {
                    echo $_COOKIE[$cookie_name];
                } else {
                    echo "Hola anonim";
                }
            ?>
        </p>
        <p>El teu correu és: [ <?php 
                                    if (isset($_SESSION['email'])) {
                                        echo $_SESSION['email'];
                                    } 
                                ?>
            ]</p>
        <p>La teva contrasenya és: [ <?php 
                                        if (isset($_SESSION['contrasena'])) {
                                            echo $_SESSION['contrasena'];
                                        }
                                    ?> ]</p>
        <p>Numero d'accions: [
            <?php
                echo $_SESSION['contador'];
            ?>
            ]
        </p>
    </div>
</div>