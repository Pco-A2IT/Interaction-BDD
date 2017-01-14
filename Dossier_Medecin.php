<!DOCTYPE html>
<html>
    <head>
        <title>Nouveau Médecin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="CSS.css" />
    </head>
    
    <body>
        !--<form action="AjoutBDD_DossierMedecin.php" id="FormulaireCreaMedecin" method="post">
    <div class="gris">
            <div  class="gris2">
                             
            <div id="menu1" class="carreGris";>
                <img class="icone_calendrier" src="recapitulatif.png"/>
            </div>
            
            <div id="menu2" class="carreGris";>
                <h4>Services</h4>
                <img class="icone_hopital" src="hopital.PNG"/>
            </div>
                
            <div id="menu3" class="carreGris";>
                <h4>Patients</h4>    
                <img class="icone_patient" src="icone_bonhomme.png"/>
            </div> 
            <div id="menu4" class="carreGris" style="background-color:#1270B3";>
                <h4>Médecins</h4>    
                <img class="icone_patient" src="icone_bonhomme.png"/>
            </div> 
            
            <script src="General.js"></script>
    <div class="titre";   style="border-radius: 5px;">
        <h1 class="titreGauche">Nouveau Médecin</h1>
        <div class="myButton">
            <input type="submit" value="Valider"/>
        </div>
    </div>
    <div class="blanc";   style="border-radius: 5px;">
            <div class="section4">
            <div class="div1">
             <img src='medecin.png' align='left' alt='sorry' width="60px" heigh="60px"><h1 style="color:grey">.... ....</h1><br>
            </div>
         <div id="container">
            <div class="onglet" id="onglet1">
                <div class="infos1_patient">
                    <table>
                        <tr>
                          <tr>
                            <th>N° ADELI :</th>
                            <td><input type="text" placeholder="(ex: 1234567)" name="num_adeli_m" id="num_adeli_m"/></td>
                        </tr>
                        <tr>
                            <th>Civilité :</th>
                            <td><form>
                                    <select name="civilite_m" id="civilite_p" size="1">
                                        <option>M</option>
                                        <option>Mme</option>
                                    </select>
                                </form></td>
                        </tr>
                        <tr>
                            <th>Nom :</th>
                            <td><input type="text" placeholder="(ex: Dupont)" name="nom_m" id=""/></td>
                        </tr>
                        <tr>
                            <th>Prénom :</th>
                            <td><input type="text" placeholder="(ex: Lucas)" name="prenom_m" id=""/></td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td><input type="text" placeholder="(ex: adresse@example.com)" name="email_m" id=""/></td>
                        </tr>
                    </table>
                </div>
                <div class="infos2_patient" id="table_medecin">
                    <table>
                        <tr>
                            <th>Service - Centre :</th>
                            <td><form>
                                    <select name="service_m" id="civilite_p" size="1">
                                        <option>Service Cardiologie - UNV Lyon</option>
                                        <option>Service Neurologie - UNV Lyon</option>
                                    </select>
                                </form></td>
                        </tr>
                        <tr>
                            <th>Téléphone :</th>
                            <td><input type="text" placeholder="(ex: 0786413073)" name="telephone_m" id="adresse_p"/></td>
                        </tr>
                        <tr>
                            <th>Adresse :</th>
                            <td><input type="text" placeholder="(ex: 10, rue du tonkin)" name="adresse_m" id="adresse_p"/></td>
                        </tr>
                        <tr>
                            <th>Ville :</th>
                            <td><input type="text" placeholder="(ex: Lyon)" name="ville_m" id="ville_p"/></td>
                        </tr>
                        <tr>
                            <th>Code postal :</th>
                            <td><input type="text" placeholder="(ex: 69100)" name="codePostal_m" id="codePostal_p"/></td>
                        </tr>
                </table>
                </div>
            </div>
            
         
         </div>
            
            </div>
        </div>
        </div>
                </div>
        
         <script src="General.js"></script>
       !-- </form>--
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
