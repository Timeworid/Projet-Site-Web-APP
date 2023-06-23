<?php
// require ici tous les models (les différentes tables de la base de données).
require_once("Model\Utilisateur.php");

require_once("Model\Avis.php");

require_once("Model\Statistique.php");

require_once("Model\Message.php");

require_once("Model\Conversation.php");
    class controllerAcceuil{
        public static function accueil(){
            include("View/accueil.php");
        }

        public static function listeUtilisateur(){
            include("View/ListeUtilisateur.php");
        }
        public static function modifprofil(){
            
            if(!empty($_POST["nom_prenom"])&& !empty($_POST["age"])&&!empty($_POST["adresse"])&&!empty($_POST["mail"])){
                Utilisateur::modifprofil($_SESSION["mail"], $_POST["nom_prenom"], $_POST["age"], $_POST["adresse"], $_POST["mail"]);
                include("View/Profil.php");
                }
            else{
                include("View/Profil.php");
            }
        }

        public static function getInfosutilisateur(){
            if(isset($_SESSION["mail"])){
                return Utilisateur::infosUtilisateur($_SESSION["mail"]);
            }else{
                return null;
            }
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

        public static function rechercheUtilisateur(){
            extract($_POST);
            echo json_encode(Utilisateur::rechercheUtilisateur($utilisateur));
        }

        public static function RecupStats(){
            extract($_POST);
            if(isset($_SESSION["mail"])){
                echo json_encode(Statistique::RecupStats($_SESSION["mail"], $type));
            }
            else{
                return;
            }
        }

        

        public static function getTrames(){
            
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G01e");
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            $data = curl_exec($ch);
            curl_close($ch);
            
            $data_tab = str_split($data,33);
            $result = array();

            for ($i = 0; $i < count($data_tab); $i++) {
                $trame = $data_tab[$i];
                $t = substr($trame,0,1);
                $o = substr($trame,1,4);
                list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
                sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
                $result[$i] = json_encode([$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec]);
            }

            echo(json_encode($result));
        }

        public static function EnvoiStats(){
            extract($_POST);
            if(isset($_SESSION["mail"])){
                $tab_Dates = json_decode(html_entity_decode($dateStat), true);
                $tab_Values = json_decode(html_entity_decode($valStat), true);
                for($i = 0; $i < count($tab_Dates); $i++){
                    Statistique::envoiStats($_SESSION["mail"], $tab_Dates[$i], "Température", $tab_Values[$i]);
                }
            }
            else{
                $erreur = "Vous n'êtes plus connecté !";
                $_SESSION["erreur"] = $erreur;
                self::accueil();
            }
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

            include("View/Produit.php");
        }

        public static function apropos(){
            include("View/a-propos.php");
        }


        public static function RecupMsgUser(){
            $avis = Avis::RecupererMessage();
            echo json_encode($avis);
        }

    public static function EnvoyerMsgUser()
    {

        // $captcha = self::captcha();

        // if (!$captcha) {
        //     $erreur = "Captcha invalide";
        //     $_SESSION["erreur"] = $erreur;
        //     self::loginUtilisateur();
        // } else {
            if (isset($_SESSION["mail"])) {
                // Récupération de la valeur de l'input de texte
                $commentaire = $_POST['commentaire'];
                // Récupération de la valeur de la checkbox cochée
                $note = $_POST['notation'];
                Avis::EnvoyerAvisUtilisateur($commentaire, $note);
            } else {
                $erreur = "Veuillez vous connecter et laisser une note";
                $_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            }
        }
    // }
        public static function accueilAdmin(){
            include("View/acceuilAdmin.php");
        }

        public static function deleteUtilisateur(){
            extract($_POST);
            if (isset($_SESSION["mail"])){
                if($_SESSION["admin"] == 1){
                    Utilisateur::supprimerUtilisateur($utilisateur);
                }else{
                    $erreur = "Vous n'avez pas les permissions de supprimer l'utilisateur !";
                    $_SESSION["erreur"] = $erreur;
                    self::accueil();
                }
            }else{
                $erreur = "Veuillez vous connecter !";
                $_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            }
        }

        public static function promouvoirUtilisateur(){
            extract($_POST);
            if (isset($_SESSION["mail"])){
                if($_SESSION["admin"] == 1){
                    if($type == 1){
                        Utilisateur::promouvoirUtilisateur($utilisateur, $type);
                    }else{
                        Utilisateur::promouvoirUtilisateur($utilisateur, 0);
                    }   
                }else{
                    $erreur = "Vous n'avez pas les permissions de promouvoir l'utilisateur !";
                    $_SESSION["erreur"] = $erreur;
                    self::accueil();
                }
            }else{
                $erreur = "Veuillez vous connecter !";
                $_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            }
        }

        public static function getUserStatus(){
            extract($_POST);
            echo Utilisateur::getAdminByMail($utilisateur)[0];
        }

        public static function conversationExiste(){
            extract($_POST);
            echo Conversation::conversationExiste($utilisateurs);
        }

        public static function créerConversation(){
            extract($_POST);
            echo Conversation::nouvelleConversation($utilisateurs);
        }

        public static function messageAdmin(){
            include("View/messageAdmin.php");
        }

        public static function chatAdmin(){
            include("View/chatAdmin.php");
        }

        public static function pageFAQ(){
            include("View/FAQ.php");
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
            $captcha = self::captcha();
            if (!$MsgUser) {
                $erreur = "Aucun compte n'existe avec ce login. Pour vous créer un compte, rentrez vos informations dans Inscription.";
                $_SESSION["erreur"] = $erreur;
            }
            if (!$captcha) {
                $erreur = "Captcha invalide";
                $_SESSION["erreur"] = $erreur;
                self::loginUtilisateur();
            } 
            else {
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
                        unset($_SESSION["admin"]);
                        unset($_SESSION["mail"]);
                        $_SESSION["mail"] = $mail;
                        $admin = Utilisateur::getAdminByMail($mail);  
                        $_SESSION["admin"] = $admin[0];
                        controllerAcceuil::accueil();
                    } else {
                        $erreur = "Votre login ou votre mot de passe est incorrect";
                        $_SESSION["erreur"] = $erreur;
                        self::loginUtilisateur()();
                    }
                }
            }
        }
        public static function Acces_Stats() {
            extract($_POST);
            $captcha = self::captcha();
            if (!$captcha) {
                $erreur = "Captcha invalide";
                $_SESSION["erreur"] = $erreur;
                unset($_SESSION["mail"]);
                self::loginUtilisateur();
            } else {
                self::Statistiques();
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