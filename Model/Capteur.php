<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Capteur {
        private $idUtilisateur;
        private $idStat;
        private $nomStat;
        private $idutilisateur_1;
        private $idParametre;

	/**
	 * @param mixed $idUtilisateur 
	 * @param mixed $idStat 
	 * @param mixed $nomStat 
	 * @param mixed $idutilisateur_1 
	 * @param mixed $idParametre 
	 */
	public function __construct($idUtilisateur, $idStat, $nomStat, $idutilisateur_1, $idParametre) {
		$this->idUtilisateur = $idUtilisateur;
		$this->idStat = $idStat;
		$this->nomStat = $nomStat;
		$this->idutilisateur_1 = $idutilisateur_1;
		$this->idParametre = $idParametre;
	}

	public function getIdUtilisateur(){
		return $this->idUtilisateur;
	}

	public function setIdUtilisateur($idUtilisateur){
		$this->idUtilisateur = $idUtilisateur;
	}

	public function getIdStat(){
		return $this->idStat;
	}

	public function setIdStat($idStat){
		$this->idStat = $idStat;
	}

	public function getNomStat(){
		return $this->nomStat;
	}

	public function setNomStat($nomStat){
		$this->nomStat = $nomStat;
	}

	public function getIdutilisateur_1(){
		return $this->idutilisateur_1;
	}

	public function setIdutilisateur_1($idutilisateur_1){
		$this->idutilisateur_1 = $idutilisateur_1;
	}

	public function getIdParametre(){
		return $this->idParametre;
	}

	public function setIdParametre($idParametre){
		$this->idParametre = $idParametre;
	}

}
?>