<!DOCTYPE html>
<html>
    <head>
                <title>Dossier Patient</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="CSS.css" />
        <title>Dossier patient</title>
    </head>
    
    <body>
    <form action="AjoutBDD_dossierPatient.php" method="post">    
    <div class="gris">
            <div  class="gris2">
            <div  class="carreGris" id="menu1";>
                <h4>Menu</h4>
                <img class="icone_menu" src="Menu.PNG"/>
            </div>
                            
             <div id="menu5" class="carreGris";>
                <img class="icone_calendrier" src="recapitulatif.png"/>
                </div>
            
            <div id="menu3" class="carreGris";>
                <h4>Liste Centres</h4>
                <img class="icone_hopital" src="hopital.PNG"/>
            </div>
                
            <div id="menu2" class="carreGris";>
                <h4>Liste patients</h4>    
                <img class="icone_patient" src="icone_bonhomme.png"/>
            </div>
                           
                
            <div id="menu4" class="carreGris" style="background-color:#1270B3";>
                <h4>Nouveau Patient</h4>
                <img class="icone_dossier" src="ajouter.png"/>
            </div>
    <div class="titre";   style="border-radius: 5px;">
        <h1 class="titreGauche">Dossier Patient</h1>
        <div class="myButton">
            <input type="submit" value="Valider"/>
            <a href="#" class="myButton2">Modifier</a>
        </div>
    </div>
    <div class="blanc";   style="border-radius: 5px;">
            <div class="section4">
            <div class="div1">
             <img src='patient.png' align='left' alt='sorry' width="50px" heigh="50px"><h1 style="color:black";>Prénom NOM</h1><br>
            </div>
            <p class="date" style="color:black">Date création dossier : 05/01/2017
                <script language="JavaScript">writeSource("js10");</script>
            </p>
            
            
         <div id="container">

            <div id="titles"> 
                <span class="title active"  target="onglet1"> Patient</span> 
                <span class="title" target="onglet2"> Médecins</span> 
                <span class="title" target="onglet3"> Examens</span> 
            </div>

            <div class="onglet" id="onglet1">
                <div class="infos1_patient">
                    <table>
                        <tr>
                            <th>Civilité</th>
                            <td>
                                 <form>
                                    <select name="civilite_p" id="civilite_p" size="1">
                                        <option>Mr</option>
                                        <option>Mme</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <tr>
                          <tr>
                            <th>Nom</th>
                            <td><input type="text" name="nom_p" id="nom_p"/></td>
                        </tr>
                        <tr>
                            <th>Prénom</th>
                            <td><input type="text" name="prenom_p" id="prenom_p"/></td>
                        </tr>
                        <tr>
                            <th>Date de naissance</th>
                            <td>
                                <script language="JavaScript">writeSource("js10");</script>
                                <input class="inputDate" name="date10_jour" id="date10_jour" value="" size="2" type="text"  placeholder="jj" maxlength="2"> /
                                <input class="inputDate" name="date10_mois" id="date10_mois"value="" size="2" type="text"  placeholder="mm" maxlength="2"> /
                                <input class="inputDate" name="date10_annee" id="date10_annee" value="" size="5" type="text"  placeholder="aaaa" maxlength="4">
                            </td>
                        </tr>
                    </table>
                    <FORM class=Zone_Texte>
                        <TEXTAREA name="nom" rows=4 cols=40>Valeur par défaut</TEXTAREA>
                    </FORM>
                </div>
                <div class="infos2_patient">
                    <table>
                      <tr>
                            <th>Téléphone</th>
                            <td><input type="text" name="telephone_p" id="telephone_p"/></td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td><input type="text" name="adresse_p" id="adresse_p"/></td>
                        </tr>
                        <tr>
                            <th>Ville</th>
                            <td><input type="text" name="ville_p" id="ville_p"/></td>
                        </tr>
                        <tr>
                            <th>Code postal</th>
                            <td><input type="text" name="codePostal_p" id="codePostal_p"/></td>
                        </tr>
                </table>
                </div>
            </div>
            
            <div class="onglet" id="onglet2">
                     <div class="traitant">
                        <h3 style="text-align:center">Médecin traitant</h3>
                        <table>
                            <tr>
                                <th>Nom</th>
                                <td><input type="text" name="nom_mt" id="nom_mt"/></td>
                            </tr>
                            <tr>
                                <th>Prénom</th>
                                <td><input type="text" name="prenom_mt" id="prenom_mt"/></td>
                            </tr>
                            <tr>
                                <th>Service</th>
                                <td><input type="text" name="service_mt" id="service_mt"/></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="text" name="email_mt" id="email_mt"/></td>
                            </tr>
                            <tr>
                                <th>Téléphone</th>
                                <td><input type="text" name="telephone_mt" id="telephone_mt"/></td>
                            </tr>
                        </table>
                    </div>

                    <div class="urgentiste">
                        <h3 style="text-align:center">Autre</h3>
                        <table>
                            <tr>
                                <th>Nom</th>
                                <td><input type="text" name="nom_mu" id="nom_mu"/></td>
                            </tr>
                            <tr>
                                <th>Prénom</th>
                                <td><input type="text" name="prenom_mu" id="prenom_mu"/></td>
                            </tr>
                            <tr>
                                <th>Service</th>
                                <td><input type="text" name="service_mu" id="service_mu"/></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><input type="text" name="email_mu" id="email_mu"/></td>
                            </tr>
                            <tr>
                                <th>Téléphone</th>
                                <td><input type="text" name="telephone_mu" id="telephone_mu"/></td>
                            </tr>
                        </table>
                    </div>
            </div>
            <div class="onglet" id="onglet3">
                <div class="Bilan1">
                    <table>
                        <h3 style="text-align:center">Bilan 1ère intention en URGENCES</h3>
                        <tr>
                            <th></th>
                            <th style="text-align:center">Réalisé</th>
                        <tr>
                            <td>Scan cérébral</td>
                            <td><INPUT type="checkbox" name="ScanC" id="ScanC"value="1"/></td>
                        </tr>
                        <tr>
                            <td>AngioScan ou Echo Doppler</td>
                            <td><INPUT type="checkbox" name="AngioScan" id="AngioScan" value="1"/></td>
                        </tr>
                        <tr>
                            <td>Bilan biologique</td>
                            <td><INPUT type="checkbox" name="BilanBiologique" id="BilanBiologique" value="1"/></td>
                        </tr>
                    </table>
                </div>
                <div class="Bilan2">
                    <table>
                        <h3 style="text-align:center">Bilan 2nde intention</h3>
                        <tr>
                            <th></th>
                            <th style="text-align:center">Planifié</th>
                            <th style="text-align:center">Réalisé</th>
                        </tr>
                        <tr>
                            <td>IRM</td>
                            <td><INPUT type="checkbox" name="irmp" id="irmp" value="1"/></td>
                            <td><INPUT type="checkbox" name="irmr" id="irmr" value="1"/></td>
                        </tr>
                        <tr>
                            <td>Bilan cardiaque ETT</td>
                            <td><INPUT type="checkbox" name="ettp" id="ettp" value="1"/></td>
                            <td><INPUT type="checkbox" name="ettr" id="ettr" value="1"/></td>
                        </tr>
                        <tr>
                            <td>Consultation neurologue</td>
                            <td><INPUT type="checkbox" name="neurop" id="neurop" value="1"/></td>
                            <td><INPUT type="checkbox" name="neuror" id="neuror" value="1"/></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>Récapitulatif envoyé au médecin traitant</td>
                            <td><INPUT type="checkbox" name="recap_mt" id="recap_mt"value="1"/></td>
                        </tr>
                        <tr>
                            <td>Récapitulatif envoyé à l'urgentiste</td>
                            <td><INPUT type="checkbox" name="recap_mu" id="recap_mu" value="1"/></td>
                        </tr>   
                    </table>
                    
                            <div class="bouton1" >
                                <a href="#" id="btn_prise_rdv">Prendre un Rendez-vous</a>
                                <script src="Dossier_Patient.js"></script>
                    </div>
                            <div class="bouton1">
                                <a href="#" id="btn_recap">Téléchargez le récapitulatif</a>
                                <script src="Dossier_Patient.js"></script>
                            </div>
                    
            
            </div>
        </div>
        </div>
                </div>
        </div>
        </div>
        </div>
        
         <script src="General.js"></script>
        </form>
    </body>

</html>

     <script>

        $(document).ready(function(){

           
            //Initialisation : on cache tous les onglets puis on affiche le premier
            $('.onglet').hide();
            $('#onglet1').show();

            //Quand on clique sur un titre
            $('.title').on('click',function(){

                // On recupere le div global id = container
                var container = $(this).parent().parent();

                $('.active').removeClass('active');

                
                // On cache tous les onglets
                container.children('.onglet').hide();

                //On affiche celui correspondant à l'attribut target
                container.children('#'+$(this).attr('target')).show();
                $(this).addClass("active");
            });
         }); 
        
    </script>
