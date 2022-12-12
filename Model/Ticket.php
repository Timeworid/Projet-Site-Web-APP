<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

	class Ticket
	{
		private $idTicket;
		private $titreTicket;
		private $catTicket;
		private $descTicket;
		private $prioTicket;
		private $dateTicket;
		private $idUilisateur;

		

		/**
		 * @param mixed $idTicket 
		 * @param mixed $titreTicket 
		 * @param mixed $catTicket 
		 * @param mixed $descTicket 
		 * @param mixed $prioTicket 
		 * @param mixed $dateTicket 
		 * @param mixed $idUilisateur 
		 */
		public function __construct($idTicket, $titreTicket, $catTicket, $descTicket, $prioTicket, $dateTicket, $idUilisateur) {
			$this->idTicket = $idTicket;
			$this->titreTicket = $titreTicket;
			$this->catTicket = $catTicket;
			$this->descTicket = $descTicket;
			$this->prioTicket = $prioTicket;
			$this->dateTicket = $dateTicket;
			$this->idUilisateur = $idUilisateur;
		}

		
		/**
		 * @return mixed
		 */
		public function getDateTicket() {
			return $this->dateTicket;
		}
		
		/**
		 * @param mixed $dateTicket 
		 * @return self
		 */
		public function setDateTicket($dateTicket): self {
			$this->dateTicket = $dateTicket;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getIdUilisateur() {
			return $this->idUilisateur;
		}
		
		/**
		 * @param mixed $idUilisateur 
		 * @return self
		 */
		public function setIdUilisateur($idUilisateur): self {
			$this->idUilisateur = $idUilisateur;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getPrioTicket() {
			return $this->prioTicket;
		}
		
		/**
		 * @param mixed $prioTicket 
		 * @return self
		 */
		public function setPrioTicket($prioTicket): self {
			$this->prioTicket = $prioTicket;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getDescTicket() {
			return $this->descTicket;
		}

		/**
		 * @param mixed $descTicket 
		 * @return self
		 */
		public function setDescTicket($descTicket): self {
			$this->descTicket = $descTicket;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getCatTicket() {
			return $this->catTicket;
		}

		/**
		 * @param mixed $catTicket 
		 * @return self
		 */
		public function setCatTicket($catTicket): self {
			$this->catTicket = $catTicket;
			return $this;
		}

		/**
		 * @return mixed
		 */
		public function getTitreTicket() {
			return $this->titreTicket;
		}

		/**
		 * @param mixed $titreTicket 
		 * @return self
		 */
		public function setTitreTicket($titreTicket): self {
			$this->titreTicket = $titreTicket;
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