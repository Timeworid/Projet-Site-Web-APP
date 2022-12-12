<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Reponse{
        private $idTopic;
        private $idUilisateur;
        private $idReponse;
        private $contenuReponse;
	

	public function __construct($idTopic, $idUilisateur, $idReponse, $contenuReponse) {
		$this->idTopic = $idTopic;
		$this->idUilisateur = $idUilisateur;
		$this->idReponse = $idReponse;
		$this->contenuReponse = $contenuReponse;
	}

	/**
	 * @return mixed
	 */
	public function getIdReponse() {
		return $this->idReponse;
	}
	
	/**
	 * @param mixed $idReponse 
	 * @return self
	 */
	public function setIdReponse($idReponse): self {
		$this->idReponse = $idReponse;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getContenuReponse() {
		return $this->contenuReponse;
	}
	
	/**
	 * @param mixed $contenuReponse 
	 * @return self
	 */
	public function setContenuReponse($contenuReponse): self {
		$this->contenuReponse = $contenuReponse;
		return $this;
	}

	/**
	 * @param mixed $idTopic 
	 * @param mixed $idUilisateur 
	 * @param mixed $idReponse 
	 * @param mixed $contenuReponse 
	 */
	
}
?>