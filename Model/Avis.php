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
		$requetePreparee = "SELECT count(*) FROM avis WHERE note =5";
		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		$valeurs = array();
		try {
			$req_prep->execute($valeurs);
			$r = $req_prep->fetch();
		return ($r[0] == 1);
		} catch (PDOException $e) {
			echo "erreur : ".$e->getMessage()."<br>";
		}
		return false;
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