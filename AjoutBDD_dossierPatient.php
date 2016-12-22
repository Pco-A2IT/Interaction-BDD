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
$req = $bdd->prepare('INSERT INTO patient(id_patient,nom, prenom,civilite,date_naissance,num_telephone,ville,code_postal,adresse,date_creation_dossier,scan_cerebral,angioscan,bilan_biologique,bilan_cardiaque,traitement_termine) VALUES(NULL,?, ?,?,? ,?, ?, ?, ?,NOW(), \'YES\',\'NO\',\'YES\',\'YES\',\'NO\')'); // ici le ? correspond à la valeur que l'on rentre dans le formulaire
$req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['civilite'],  $_POST['date10_annee'].'-'. $_POST['date10_mois'].'-'. $_POST['date10_jour'],$_POST['num_telephone'] ,$_POST['ville'],$_POST['code_postal'],$_POST['adresse']));


$req = $bdd->query("SELECT * FROM patient");
while ($donnees = $req->fetch())
{
    $nom = $donnees['nom'];
    
}
echo $_POST['civilite'];

// Redirection du visiteur vers la page du minichat

header('Location: Dossier_Patient.php');
?>
