<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Avis {
        private $idAvis;
        private $titreAvis;
        private $commentaire;
        private $note;
        private $idUtilisateur;
    
    /**
     * @param mixed $idAvis 
     * @param mixed $titreAvis 
     * @param mixed $commentaire 
     * @param mixed $note 
     * @param mixed $idUtilisateur 
     */
    public function __construct($idAvis, $titreAvis, $commentaire, $note, $idUtilisateur) {
    	$this->idAvis = $idAvis;
    	$this->titreAvis = $titreAvis;
    	$this->commentaire = $commentaire;
    	$this->note = $note;
    	$this->idUtilisateur = $idUtilisateur;
    }

	public static function RecupererMessage(){
		$requete = "SELECT * FROM avis WHERE note=5 ORDER BY dateAvis DESC";
		$req_prep = Connexion::pdo()->prepare($requete);
		try{
			$req_prep->execute();
			return $req_prep->fetch();
		}catch(PDOException $e){
			echo "erreur : ".$e->getMessage()."<br>";
		}
	}

	public static function EnvoyerAvisUtilisateur($commentaire, $note){
		$requete = "INSERT INTO avis VALUES (:tag_idAvis, :tag_titreAvis, :tag_commentaire, :tag_note, :tag_mail, :tag_dateAvis)";
		$req_prep = Connexion::pdo()->prepare($requete);
		$tags = ["tag_idAvis"=> "", "tag_titreAvis"=> "random", "tag_commentaire"=> $commentaire, "tag_note" => $note, "tag_mail" => $_SESSION["mail"], "tag_dateAvis" => date('y/m/d H:i:s')];
		try{
			$req_prep->execute($tags);
		}catch(PDOException $e){
			echo "erreur : ".$e->getMessage()."<br>";
		}
	}

	public static function PopupCaptcha(){

	}
	

    public function getIdAvis(){
		return $this->idAvis;
	}

	public function setIdAvis($idAvis){
		$this->idAvis = $idAvis;
	}
	

	public function getTitreAvis(){
		return $this->titreAvis;
	}

	public function setTitreAvis($titreAvis){
		$this->titreAvis = $titreAvis;
	}

	public function getCommentaire(){
		return $this->commentaire;
	}

	public function setCommentaire($commentaire){
		$this->commentaire = $commentaire;
	}

	public function getNote(){
		return $this->note;
	}

	public function setNote($note){
		$this->note = $note;
	}

	public function getIdUtilisateur(){
		return $this->idUtilisateur;
	}

	public function setIdUtilisateur($idUtilisateur){
		$this->idUtilisateur = $idUtilisateur;
	}
}
?>