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

		public static function RecupStats($mail, $type) {
			//$requetePreparee = "SELECT valStat, dateStat FROM statistiques WHERE DATE_FORMAT(dateStat, '%i') = 00 AND DATE_FORMAT(dateStat, '%s') = 00 AND mail = :tag_mail AND typeStat = :tag_typeStat"; 
			
			$requetePreparee = "SELECT valStat, dateStat FROM statistiques WHERE mail = :tag_mail AND typeStat = :tag_typeStat"; 
			$req_prep = Connexion::pdo()->prepare($requetePreparee);
			$valeurs = array("tag_mail" => $mail, "tag_typeStat" => $type);
			try {
				$req_prep->execute($valeurs);
				$r = $req_prep->fetchAll();
				return $r;
			} catch (PDOException $e) {
				echo "erreur : ".$e->getMessage()."<br>";
			}
			return false;
		}

		public static function envoiStats($mail, $dateStat, $typeStat,$valStat){
			if($valStat != null){
				$requetePreparee = "CALL update_Stats(:tag_mail, :tag_dateStat, :tag_typeStat, :tag_valStat);";
				$req_prep = Connexion::pdo()->prepare($requetePreparee);
				$tags = ["tag_mail" => $mail,"tag_dateStat" => date('y/m/d H:i:s', (int)$dateStat),"tag_typeStat"=>$typeStat, "tag_valStat" =>$valStat];
				try{
					$req_prep->execute($tags);
				} catch (PDOException $e) {
					echo "erreur : ".$e->getMessage()."<br>";
				}
			}
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