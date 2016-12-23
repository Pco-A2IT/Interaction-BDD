<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_plateforme;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO centre(num_siret,num_telephone,adresse) VALUES(NULL,\'aa\', \'aa\' )'); 

// ici le ? correspond à la valeur que l'on rentre dans le formulaire





// Redirection du visiteur vers la page du minichat
header('Location: Dossier_Centre.php');


?>
