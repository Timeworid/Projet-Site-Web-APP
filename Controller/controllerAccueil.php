<?php
// require ici tous les models (les différentes tables de la base de données).
require_once("Model\Utilisateur.php");

require_once("Model\Avis.php");

require_once("Model\Statistique.php");

require_once("Model\Message.php");
    class controllerAcceuil{

        public static function accueil(){
            include("View/pageaccueil.php");
        }

        public static function accueilAssistance(){
            include("View/accueilAssistance.php");
        }

        public static function chatAssistance(){
        include("View/chatAssistance.php");
        }

        public static function Statistiques(){
            if (isset($_SESSION['mail'])) {
                include("View/Statistiques.php");
            }else{
                include("View/Statistiques.php");
                //self::accueil();
            }
        }

        public static function RecupStats(){
            if(isset($_SESSION["mail"])){
                echo Statistique::RecupStats($_SESSION["mail"]);
                return;
            }
            return;
        }

        public static function EnvoiMsg(){
            extract($_POST);
            if(isset($_SESSION["mail"])){
                Message::envoiMessage($msg,$_SESSION["mail"], 1);
            }else{
                $erreur = "Vous n'êtes plus connecté !";
                $_SESSION["erreur"] = $erreur;
                self::accueil();
            }


        }

        public static function Profil(){
            if (isset($_SESSION['mail'])) {
                include("View/Profil.php");
            }else{
                include("View/Profil.php");
                //self::accueil();
            }
        }
        public static function presentationProduit(){

            include("View/PageProduit.php");
        }

        public static function apropos(){
            include("View/a-propos.php");
        }


        public static function RecupMsgUser(){
            $avis = Avis::RecupererMessage();
            echo json_encode($avis);
        }

        public static function EnvoyerMsgUser(){
        if (isset($_SESSION["mail"])) {
            // Récupération de la valeur de l'input de texte
            $commentaire = $_POST['commentaire'];
            // Récupération de la valeur de la checkbox cochée
            $note = $_POST['notation'];
            Avis::EnvoyerAvisUtilisateur($commentaire, $note);
        }
        else{
            $erreur = "Veuillez vous connecter et laisser une note";
            $_SESSION["erreur"] = $erreur;
            self::loginUtilisateur();
        }
        }

        
        public static function accueilAdmin(){
            include("View/acceuilAdmin.php");
        }

        public static function messageAdmin(){
            include("View/messageAdmin.php");
        }

        public static function chatAdmin(){
            include("View/chatAdmin.php");
        }

        public static function pageFAQ(){
            include("View/pageFAQ.php");
        }

        public static function loginUtilisateur() {
            include("View/loginUtilisateur.php");
        }

		public static function Deconnexion() {
            unset($_SESSION["mail"]);
            unset($_SESSION["admin"]);
            self::accueil();
        }
        public static function captcha(){
            $response = $_POST["g-recaptcha-response"];
            extract($_POST);
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $data = array(
                'secret' => '6LfY9wQkAAAAAGifiKQIpauV5WLg2hC1bha8kYRJ',
                'response' => $response
            );
            $options = array(
                'http' => array (
                    'method' => 'POST',
                    'header' => 'Content-Type: application/x-www-form-urlencoded\r\n',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);
            $verify = file_get_contents($url, false, $context);
            $captcha_success=json_decode($verify);
            if ($captcha_success->success==false) {
                // C'est un bot
                return false;
            } else if ($captcha_success->success==true) {
                // C'est un utilisateur réel, vous pouvez continuer avec le traitement de connexion
                return true;
            }
        }
        public static function login() {
            extract($_POST);
            $MsgUser = Utilisateur::UtilisateurExiste($mail);
            if (!$MsgUser) {
                $erreur = "Aucun compte n'existe avec ce login. Pour vous créer un compte, rentrez vos informations dans Inscription.";
                $_SESSION["erreur"] = $erreur;
                $captcha = self::captcha();
            }
            if (!$captcha) {
                $erreur = "Captcha invalide";
                $_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            } else {
                $userExist = Utilisateur::UtilisateurExiste($mail);
                if(!$userExist) {
                    $erreur = "Aucun compte n'existe avec ce login. Pour vous créer un compte, rentrez vos informations dans Inscription.";
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
        }

        public static function register() {
            extract($_POST);
            $MsgUser = Utilisateur::UtilisateurExiste($mail);
            if($MsgUser) {
                $erreur = "Ce nom d'utilisateur est déjà utilisé";
                $_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            } else {
                if($motDePasse == $motDePasse2) {
                    unset($_SESSION["erreur"]);
                    $motDePasse2=password_hash($motDePasse, PASSWORD_DEFAULT);
                    Utilisateur::AjouterUtilisateur($mail, $motDePasse2, $nom, $prenom, $dateNaissance);
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