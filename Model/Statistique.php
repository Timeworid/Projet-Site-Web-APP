<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

	class Statistique
	{
		private $idStat;
		private $idUilisateur;
		private $dateStat;
		private $valStat;

		public function __construct($idStat, $idUilisateur, $dateStat, $valStat)
		{
			$this->idStat = $idStat;
			$this->idUilisateur = $idUilisateur;
			$this->dateStat = $dateStat;
			$this->valStat = $valStat;
		}




		/**
		 * @return mixed
		 */
		public function getValStat()
		{
			return $this->valStat;
		}

		/**
		 * @param mixed $valStat 
		 * @return self
		 */
		public function setValStat($valStat): self
		{
			$this->valStat = $valStat;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getDateStat()
		{
			return $this->dateStat;
		}

		/**
		 * @param mixed $dateStat 
		 * @return self
		 */
		public function setDateStat($dateStat): self
		{
			$this->dateStat = $dateStat;
			return $this;
		}
	}
?>