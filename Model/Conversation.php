<?php
use LDAP\Result;
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Conversation{
		private $idConversation;

		/**
		 * @return mixed
		 */
		public function getIdConversation() {
			return $this->idConversation;
		}
		
		/**
		 * @param mixed $idConversation 
		 * @return self
		 */
		public function setIdConversation($idConversation): self {
			$this->idConversation = $idConversation;
			return $this;
		}

		public static function getMaxConversationID() {
			$requetePreparee = "SELECT max(idConversation) FROM Conversation"; 
			$req_prep = Connexion::pdo()->prepare($requetePreparee);	
			try {
				$req_prep->execute();
				$r = $req_prep->fetch();
				return ($r[0] == 1);
			} catch (PDOException $e) {
				echo "erreur : ".$e->getMessage()."<br>";
			}
			return false;
		}

		public static function conversationExiste($utilisateurs){
			$result = Conversation::getAllConversationByUtilisateur($utilisateurs[0]);
			foreach($result as $value){
				$requetePreparee = "SELECT mail FROM  Where :tag_idConversation, = idConversation";
				$req_prep = Connexion::pdo()->prepare($requetePreparee);
				$tags = ["tag_mail" => $value];
				try {
					$req_prep->execute($tags);
					$result2 = $req_prep->fetch();
					if($result2[1] == $utilisateurs[1] || $result2[0] == $utilisateurs[1]){
						return true;
					}
				} catch (PDOException $e) {
					echo "erreur : ".$e->getMessage()."<br>";
				}
			}
			return false;
		}

		public static function nouvelleConversation($utilisateurs){
			$requetePreparee = "INSERT INTO conversation VALUES();";
			$req_prep = Connexion::pdo()->prepare($requetePreparee);
			echo $utilisateurs."SUUUUU";
			try {
				$req_prep->execute();
			} catch (PDOException $e) {
				echo "erreur : ".$e->getMessage()."<br>";
			}
			$idConversation = self::getMaxConversationID();
			foreach ($utilisateurs as $utilisateur) {
				$requetePreparee = "INSERT INTO ParticipeConversation VALUES(:tag_mail, :tag_idConversation);";
				$req_prep = Connexion::pdo()->prepare($requetePreparee);
				$valeurs = array("tag_mail" => $utilisateur, "tag_idConversation" => $idConversation);
				try {
					$req_prep->execute($valeurs);
					return $req_prep->fetch();
				} catch (PDOException $e) {
					echo "erreur : ".$e->getMessage()."<br>";
				}
			}
		}


		public static function getAllConversationByUtilisateur($mail){
			$requetePreparee = "SELECT idConversation FROM participeConversation WHERE mail = :tag_mail"; 
			$req_prep = Connexion::pdo()->prepare($requetePreparee);	
			$valeurs = array("tag_mail" => $mail);
			try {
				$req_prep->execute($valeurs);
				$r = $req_prep->fetchAll();
				return $r;
			} catch (PDOException $e) {
				echo "erreur : ".$e->getMessage()."<br>";
			}
			return false;
		}

		/**
		 * @param mixed $idConversation 
		 */
		public function __construct($idConversation) {
			$this->idConversation = $idConversation;
		}
	}
?>