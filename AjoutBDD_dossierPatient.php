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
/*
$choix1 = (isset($_POST['choix1'])) ? 1 : 0;
$choix2 = (isset($_POST['choix2'])) ? 1 : 0;
$choix3 = (isset($_POST['choix3'])) ? 1 : 0;
$choix4 = (isset($_POST['choix4'])) ? 1 : 0;
$choix5 = (isset($_POST['choix5'])) ? 1 : 0;
$choix6 = (isset($_POST['choix6'])) ? 1 : 0;
*/




// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO patient(ID_patient,nom, prenom,civilite,date_naissance,num_telephone,ville,code_postal,adresse,date_creation_dossier,num_medecin_traitant,num_urgentiste) VALUES(NULL,?, ?,?,? ,?, ?, ?, ?,NOW(),?,?)'
 //ici le ? correspond à la valeur que l'on rentre dans le formulaire
$req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['civilite'],  $_POST['date10_annee'].'-'. $_POST['date10_mois'].'-'. $_POST['date10_jour'],$_POST['num_telephone'] ,$_POST['ville'],$_POST['code_postal'],$_POST['adresse'], $_POST['num_medecin_traitan'], $_POST['num_urgentiste'] /*$choix1, $choix2, $choix3, $choix4, $choix5*/));


$req = $bdd->query("SELECT * FROM patient");
while ($donnees = $req->fetch())
{
    $nom = $donnees['nom'];
    
}
echo $_POST['civilite'];

// Redirection du visiteur vers la page du minichat

header('Location: Dossier_Patient.php');
?>
