<?php
    require_once("Conf/Connexion.php");
    Connexion::connect();

    public function getFaq() {
		$requetePreparee = "SELECT * FROM faq"; 
		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		$valeurs = array("id" => $idFaq, "réponse"=> $reponse, "question"=> $question);
        try {
			$req_prep->execute($valeurs);
			$r = $req_prep->fetch();
			if (!$r[0]) 
				return false;
			return $r[0];
		} catch (PDOException $e) {
			echo "erreur : ".$e->getMessage()."<br>";
		}
		return false;
	}
    