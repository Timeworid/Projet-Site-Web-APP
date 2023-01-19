<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Utilisateur{
        private $idUtilisateur;
        private $nom;
        private $prenom;
        private $mail;
        private $dateNaissance;
		private $adresse;
		private $aboutMe;
		private $langage;
		private $photo;
		private $mdp;
		private $type;

	public function __construct($idUtilisateur, $nom, $prenom, $mail, $dateNaissance, $adresse, $aboutMe, $langage, $photo, $mdp, $type) {
		$this->idUtilisateur = $idUtilisateur;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->mail = $mail;
		$this->dateNaissance = $dateNaissance;
		$this->adresse = $adresse;
		$this->aboutMe = $aboutMe;
		$this->langage = $langage;
		$this->photo = $photo;
		$this->mdp = $mdp;
		$this->type = $type;
	}
	public function getIdUtilisateur(){
		return $this->idUtilisateur;
	}

	public function setIdUtilisateur($idUtilisateur){
		$this->idUtilisateur = $idUtilisateur;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}

	public function getMail(){
		return $this->mail;
	}

	public function setMail($mail){
		$this->mail = $mail;
	}

	public function getDateNaissance(){
		return $this->dateNaissance;
	}

	public function setDateNaissance($dateNaissance){
		$this->dateNaissance = $dateNaissance;
	}

	public function getAdresse(){
		return $this->adresse;
	}

	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}

	public function getAboutMe(){
		return $this->aboutMe;
	}

	public function setAboutMe($aboutMe){
		$this->aboutMe = $aboutMe;
	}

	public function getLangage(){
		return $this->langage;
	}

	public function setLangage($langage){
		$this->langage = $langage;
	}

	public function getPhoto(){
		return $this->photo;
	}

	public function setPhoto($photo){
		$this->photo = $photo;
	}

	public function getMdp(){
		return $this->mdp;
	}

	public function setMdp($mdp){
		$this->mdp = $mdp;
	}

	public function getType(){
		return $this->type;
	}

	public function setType($type){
		$this->type = $type;
	}


	public static function UtilisateurExiste($mail) {
		$requetePreparee = "SELECT count(*) FROM Utilisateur WHERE mail = :tag_mail"; 
		$req_prep = Connexion::pdo()->prepare($requetePreparee);	
		$valeurs = array("tag_mail" => $mail);
		try {
			$req_prep->execute($valeurs);
			$r = $req_prep->fetch();
		return ($r[0] == 1);
		} catch (PDOException $e) {
			echo "erreur : ".$e->getMessage()."<br>";
		}
		return false;
	}


	public static function canConnect($mail, $mdp) {
		$motDePasse = self::getMDPByMail($mail);
		return password_verify($mdp, $motDePasse);
	}

	public static function AjouterUtilisateur($mail, $motDePasse, $nom, $prenom, $dateNaissance) {
		$requetePreparee = "INSERT INTO utilisateur VALUES(:tag_mail, :tag_nom, :tag_prenom, :tag_dateNaissance, NULL, NULL, NULL, NULL, :tag_motDePasse,:tag_admin);";
		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		$tags = ["tag_mail" => $mail,  "tag_nom" => $nom, "tag_prenom" => $prenom, "tag_dateNaissance" => $dateNaissance, "tag_motDePasse" => $motDePasse, "tag_admin" => 0];
		try {
			$req_prep->execute($tags);
		} catch (PDOException $e) {
			echo "erreur : ".$e->getMessage()."<br>";
		}
	}

	public static function getMDPByMail($mail) {
		$requetePreparee = "SELECT motDePasse FROM Utilisateur WHERE mail = :tag_mail"; 
		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		$valeurs = array("tag_mail" => $mail);
		try {
			$req_prep->execute($valeurs);
			$r = $req_prep->fetch();
			if (!$r[0]) 
				return false;
			return $r[0];
		} catch (PDOException $e) {
			echo "erreur : ".$e->getMessage()."<br>";
		}
		return false;
	}

	public static function getAdminByMail($mail) {
		$requetePreparee = "SELECT Utilisateur.type FROM Utilisateur WHERE mail = :tag_mail"; 
		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		$valeurs = array("tag_mail" => $mail);
		try {
			$req_prep->execute($valeurs);
			$r = $req_prep->fetch();
			if (!$r[0]) 
				return false;
			return $r[0];
		} catch (PDOException $e) {
			echo "erreur : ".$e->getMessage()."<br>";
		}
		return false;
	}



}
?>