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

		public static function RecupStats($mail) {
			$requetePreparee = "SELECT valStat, dateStat FROM Statistiques WHERE DATEPART(ss,dateStat) = 00 AND DATEPART(n,dateStat) = 00 AND idUtilisateur=:tag_mail"; 
			$req_prep = Connexion::pdo()->prepare($requetePreparee);
			$valeurs = array("tag_mail" => $mail);
			try {
				$req_prep->execute($valeurs);
				$r = $req_prep->fetch();
			return ($r[0] == 1);
			} catch (PDOException $e) {
				echo "erreur : ".$e->getMessage()."<br>";
			}
			return false;
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