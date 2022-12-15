<?php
// require ici tous les models (les différentes tables de la base de données).
require_once("Model\Utilsateur.php");
    class controllerAcceuil{

        public static function accueil(){
            include("View/PageProduit.php");
        }

        public static function loginUtilisateur() {
            include("View/loginUtilisateur.php");
        }

		public static function Deconnexion() {
            unset($_SESSION["pseudo"]);
            unset($_SESSION["admin"]);
            self::accueil();
        }

        public static function login() {
            extract($_GET);
            $userExist = Utilisateur::UtilisateurExiste($login);
            if(!$userExist) {
                $erreur = "Aucun compte n'existe avec ce login. Pour vous créer un compte <a href='routeur.php?action=CreerCompte'>cliquez ici</a>";
				$_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            }
            else {
                $canConnect = Utilisateur::canConnect($login, $motDePasse);
                if($canConnect) {
					unset($_SESSION["erreur"]);
                    $_SESSION["pseudo"] = $login;
                     $admin = Utilisateur::getAdminByPseudo($login);
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
            $userExist = Utilisateur::UtilisateurExiste($login);
            if($userExist) {
                $erreur = "Ce nom d'utilisateur est déjà utilisé";
                $_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            } else {
                if($motDePasse == $motDePasse2) {
                    unset($_SESSION["erreur"]);
                    Utilisateur::AjouterUtilisateur($login, $motDePasse);
                    $_SESSION["pseudo"] = $login;
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