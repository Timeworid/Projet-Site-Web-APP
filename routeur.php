<?php
	// require ici les futurs controlleurs du site
	require("Controller/controllerAccueil.php");
	
	foreach ($_GET as $key => $value)
		$_GET[$key] = htmlspecialchars($value);
	foreach ($_POST as $key => $value)
		$_POST[$key] = htmlspecialchars($value);
	
	
	// Gestion des cookies
	session_start();
	unset($_SESSION["erreur"]); // On reset le cookie qui s'occupera des erreurs
	extract($_GET); // On recupera les actions effectuées
	extract($_POST);

	
	
	if(!isset($action)) { // La variable action enregistra les différentes actions de l'utilisateur via la méthode Get : s'il n'est pas set, on renvoie à l'acceuil.
		controllerAcceuil::accueil();
	}
	else{	
		$actionEffectue = false; 
		$listeController = ["controllerAcceuil"]; // Liste des noms de controller 
		foreach($listeController as $key => $controller) { // On récupère tous les controllers 
			$tabMethods = get_class_methods($controller); // On récupères toutes les fonctions des controller
			if(in_array($action,$tabMethods)) {  // On regarde si l'action effectuée correspond à une des fonctions du controller : Si oui, on appelle la fonction, si non , on renvoie à l'acceuil.
				$controller::$action();
				$actionEffectue = true;
				break;
			}
		}

		
		if(!$actionEffectue){// Si l'action n'a pu être effectuée.
			controllerAcceuil::accueil();
		}
	}




?>

