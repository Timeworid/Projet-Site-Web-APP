<?php
// require ici tous les models (les différentes tables de la base de données).
    class controllerAcceuil{

        public static function accueil(){
            include("View/PageProduit.php");
        }

        public static function ConnecterCompte() {
            include("View/loginUtilisateur.php");
        }

		public static function Deconnexion() {
            unset($_SESSION["pseudo"]);
            unset($_SESSION["admin"]);
            self::accueil();
        }
    }


?>