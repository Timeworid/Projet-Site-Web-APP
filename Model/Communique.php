<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Communique{
        private $idUtilisateur;
		private $idMessagerie;
	
	/**
	 * @param mixed $idUtilisateur 
	 * @param mixed $idMessagerie 
	 */
	public function __construct($idUtilisateur, $idMessagerie) {
		$this->idUtilisateur = $idUtilisateur;
		$this->idMessagerie = $idMessagerie;
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
	public function getIdMessagerie() {
		return $this->idMessagerie;
	}
	
	/**
	 * @param mixed $idMessagerie 
	 * @return self
	 */
	public function setIdMessagerie($idMessagerie): self {
		$this->idMessagerie = $idMessagerie;
		return $this;
	}
}
?>