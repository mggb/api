<?php 
header('Content-Type: application/json');

try {
	//On test la connexion à la base de donnée
    $pdo = new PDO('mysql:host=localhost;port=8889;dbname=hetics2', 'root', 'root');
    $retour["succes"] = true;
    $retour["message"] = "Connexion a la base de donnée reussie";
} catch(Exception $e) {
	$retour["succes"] = false;
    $retour["message"] = "Connexion a la base de donnée imposible";
	
}

echo json_decode($retour);