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

}
?>