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
$req = $bdd->prepare('INSERT INTO Patient(id_patient,nom_p, prenom_p,civilite_p,date_naissance,mail_p,telephone_p,ville_p,codePostal_p,adresse_p,date_creation_dossier,medecin_traitant,urgentiste) VALUES(NULL,?, ?,?,? ,\'YES\',?, ?, ?, ?,NOW(),\'YES\',\'NO\')'); // ici le ? correspond à la valeur que l'on rentre dans le formulaire
$req->execute(array($_POST['nom_p'], $_POST['prenom_p'],$_POST['civilite_p'],  $_POST['date10_annee'].'-'. $_POST['date10_mois'].'-'. $_POST['date10_jour'],$_POST['telephone_p'] ,$_POST['ville_p'],$_POST['codePostal_p'],$_POST['adresse_p']));
$req = $bdd->query("SELECT * FROM patient");
while ($donnees = $req->fetch())
{
    $nom = $donnees['nom_p'];
    
}
echo $_POST['civilite_p'];
// Redirection du visiteur vers la page du minichat
header('Location: Dossier_Patient.php');
?>