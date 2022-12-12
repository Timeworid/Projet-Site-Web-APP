<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

	class Topic
	{
		private $idTopic;
		private $nomTopic;
		private $idUtilisateur;
	/**
	 * @return mixed
	 */
	public function getNomTopic() {
		return $this->nomTopic;
	}
	
	/**
	 * @param mixed $nomTopic 
	 * @return self
	 */
	public function setNomTopic($nomTopic): self {
		$this->nomTopic = $nomTopic;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdUtilisateur() {
		return $this->idUtilisateur;
	}
	
	/**
	 * @param mixed $idUtilisateur 
	 * @return self
	 */
	public function setIdUtilisateur($idUtilisateur): self {
		$this->idUtilisateur = $idUtilisateur;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdTopic() {
		return $this->idTopic;
	}

	/**
	 * @param mixed $idTopic 
	 * @return self
	 */
	public function setIdTopic($idTopic): self {
		$this->idTopic = $idTopic;
		return $this;
	}

	/**
	 * @param mixed $idTopic 
	 * @param mixed $nomTopic 
	 * @param mixed $idUtilisateur 
	 */
	public function __construct($idTopic, $nomTopic, $idUtilisateur) {
		$this->idTopic = $idTopic;
		$this->nomTopic = $nomTopic;
		$this->idUtilisateur = $idUtilisateur;
	}
}
?>