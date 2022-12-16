<?php
// require ici tous les models (les différentes tables de la base de données).
require_once("Model\Utilsateur.php");
    class controllerAcceuil{

        public static function accueil(){
            include("View/PageProduit.php");
        }

        public static function accueilAdmin(){
            include("View/acceuilAdmin.php");
        }

        public static function ticketAdmin(){
            include("View/messageAdmin.php");
        }

        public static function msgAdmin(){
            include("View/chatAdmin.php");
        }

        public static function loginUtilisateur() {
            include("View/loginUtilisateur.php");
        }

		public static function Deconnexion() {
            unset($_SESSION["mail"]);
            unset($_SESSION["admin"]);
            self::accueil();
        }

        public static function login() {
            extract($_GET);
            $userExist = Utilisateur::UtilisateurExiste($mail);
            if(!$userExist) {
                $erreur = "Aucun compte n'existe avec ce login. Pour vous créer un compte <a href='routeur.php?action=CreerCompte'>cliquez ici</a>";
				$_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            }
            else {
                $canConnect = Utilisateur::canConnect($mail, $motDePasse);
                if($canConnect) {
					unset($_SESSION["erreur"]);
                    $_SESSION["mail"] = $mail;
                     $admin = Utilisateur::getAdminByMail($mail);
                     $_SESSION["admin"] = $admin;
                     controllerAcceuil::accueil();
                } else {
                    $erreur = "Votre login ou votre mot de passe est incorrect";
                    $_SESSION["erreur"] = $erreur;
                    self::loginUtilisateur()();
                }
            }
        }

        public static function register() {
            extract($_GET);
            $userExist = Utilisateur::UtilisateurExiste($mail);
            if($userExist) {
                $erreur = "Ce nom d'utilisateur est déjà utilisé";
                $_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            } else {
                if($motDePasse == $motDePasse2) {
                    unset($_SESSION["erreur"]);
                    Utilisateur::AjouterUtilisateur($mail, $motDePasse, $nom, $prenom, $dateNaissance);
                    $_SESSION["mail"] = $mail;
                    $_SESSION["admin"] = 0;
                    controllerAcceuil::accueil();
                } else {
                    $erreur = "Vous avez fais une erreur lors de la réécriture de votre mot de passe";
                    $_SESSION["erreur"] = $erreur;
                    self::loginUtilisateur();
                }
            }
        }

        
    }


?>