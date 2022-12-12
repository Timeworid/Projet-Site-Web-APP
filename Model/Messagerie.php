<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    class Messagerie{
		private $idMessagerie;

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

		/**
		 * @param mixed $idMessagerie 
		 */
		public function __construct($idMessagerie) {
			$this->idMessagerie = $idMessagerie;
		}
	}
?>