<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Parametre{
        private $idUtilisateur;
        private $idParametre;
        private $nomParametre;
        private $valParametre;
		
	/**
	 * @param mixed $idUtilisateur 
	 * @param mixed $idParametre 
	 * @param mixed $nomParametre 
	 * @param mixed $valParametre 
	 */
	public function __construct($idUtilisateur, $idParametre, $nomParametre, $valParametre) {
		$this->idUtilisateur = $idUtilisateur;
		$this->idParametre = $idParametre;
		$this->nomParametre = $nomParametre;
		$this->valParametre = $valParametre;
	}

	/**
	 * @return mixed
	 */
	public function getIdParametre() {
		return $this->idParametre;
	}
	
	/**
	 * @param mixed $idParametre 
	 * @return self
	 */
	public function setIdParametre($idParametre): self {
		$this->idParametre = $idParametre;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNomParametre() {
		return $this->nomParametre;
	}
	
	/**
	 * @param mixed $nomParametre 
	 * @return self
	 */
	public function setNomParametre($nomParametre): self {
		$this->nomParametre = $nomParametre;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValParametre() {
		return $this->valParametre;
	}
	
	/**
	 * @param mixed $valParametre 
	 * @return self
	 */
	public function setValParametre($valParametre): self {
		$this->valParametre = $valParametre;
		return $this;
	}
}
?>