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

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO patient(id_patient,nom, prenom,civilite,num_telephone,ville,code_postal,adresse,date_creation_dossier,scan_cerebral,angioscan,bilan_biologique,bilan_cardiaque,traitement_termine) VALUES(NULL,?, ?, \'Mr\',?, ?, \'77176\',\'24 rue de ormeteau\',\'2016-12-08\', \'YES\',\'NO\',\'YES\',\'YES\',\'NO\')'); // ici le ? correspond à la valeur que l'on rentre dans le formulaire
$req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['num_telephone'] ,$_POST['ville']));

// Redirection du visiteur vers la page du minichat
header('Location: Dossier_Patient.php');
?>