<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Repond{
		private $idUtilisateur;
		private $idTicket;

	
	/**
	 * @param mixed $idUtilisateur 
	 * @param mixed $idTicket 
	 */
	public function __construct($idUtilisateur, $idTicket) {
		$this->idUtilisateur = $idUtilisateur;
		$this->idTicket = $idTicket;
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
	public function getIdTicket() {
		return $this->idTicket;
	}
	
	/**
	 * @param mixed $idTicket 
	 * @return self
	 */
	public function setIdTicket($idTicket): self {
		$this->idTicket = $idTicket;
		return $this;
	}
}
?>