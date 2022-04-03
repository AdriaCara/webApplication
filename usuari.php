<?php 
    class usuari {
        private $nom = "";
        private $email = "";
        private $contrasena = "";

        public function __construct($nom, $email, $contrasena) {
            $this->nom = $nom;
            $this->email = $email;
            $this->contrasena = $contrasena;
        }

        public function setNom($nom) {
            $this->nom = $nom;
        }
        public function getNom($nom) {
            return $this->nom;
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }
        public function getEmail($email) {
            return $this->email;
        }

        public function setContrasena($contrasena) {
            $this->contrasena = $contrasena;
        }
        public function getContrasena($contrasena) {
            return $this->Contrasena;
        }

    }
?>