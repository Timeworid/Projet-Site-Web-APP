
<?php
// Appellez cette classe en début de fichier : require(Connexion.php)
		class Connexion{
			static private $hostname ='localhost';
			static private $database ='site web app'; // Mettez ici le nom de votre base de donnée de test
			static private $login = 'root'; // Identifiant PHPmyAdmin Wamp / Xampp
			static private $password = ''; // Mdp PHPmyAdmin Wamp / Xampp
			
			static private $tabUTF8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
			static private $pdo;
			static public function pdo(){return self::$pdo;}
			
			static function connect(){
				$h = self::$hostname;
				$d = self::$database;
				$l = self::$login;
				$p = self::$password;
				$t = self::$tabUTF8;
				try{
					self::$pdo = new PDO("mysql:host=$h;dbname=$d",$l,$p,$t);
					self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e){
					echo "Erreur de connexion !";
				}
			}
		}
?> 