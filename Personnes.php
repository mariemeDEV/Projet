<!Doctype html>
<html>
<h4>ADMIN</h4><br>
        <a href="UsersSessions.php"><button type="submut">DECONNECT</button></a>
    
    <head>
    <style>
        .lignes{
        border:2px solid black;
        border-collapse:collapse;
        width:80px;
        }
        .lignesTop{
        background-color:orange;
        }
        .colonnes{
        border:2px solid black;
        border-collapse:collapse;
        }
    </style>

    </head>
    <body>

        <?php
    $personnes=array(
        "personne1"=>array('Id'=>'E001','Nom'=>'Fall','Prenom'=>'Adama','Age'=>'24'),
        "personne2"=>array('Id'=>'E002','Nom'=>'Faye','Prenom'=>'Awa','Age'=>'26'),
        "personne3"=>array('Id'=>'E003','Nom'=>'Ndiaye','Prenom'=>'Ibrahima','Age'=>'20'),
    );

//Instructions éxecutées lors de la récéption de la methode POST provenant du formulaire de modification
    extract($_POST);
    if(isset($modifier)){        
        echo("<center><p style='color:blue'>Votre modification a étè effectuée avec succés</p></center>");
        for($i=1;$i<4;$i++){
            //$tableau_assoc["Nom"]['n'.($i+1)]
//On fait la modification pour l'enregistrement d'un Id donné
            if($personnes["personne".$i]['Id']==$id){
                $personnes["personne".$i]['Nom']=$nom;
                $personnes["personne".$i]['Prenom']=$prenom;
                $personnes["personne".$i]['Age']=$age;
            }
        }
        
    }

    function afficherInformations($personnes){
        
    //Recupération des instances de personnes
    echo("<center>");
    echo("<h1 style='text-decoration:underline;color:gray'>INFORMATIONS PERSONNES</h1>");
    echo("<table border:'1' style='border-collapse:collapse'>");
    echo("<tr class='lignesTop'><td>Identifiant</td><td>Nom</td><td>Prenom</td><td>Age</td></tr>");

    foreach ($personnes as $val1){
//Recupération de tous les identifiants
    $Ids = ($val1['Id']);
//Recupération de tous les noms
    $noms = ($val1['Nom']);
//Recupération de tous les prénoms
    $prenoms = ($val1['Prenom']);
//Recupération de tous les ages
    $ages = ($val1['Age']);
        echo("<tr class='lignes'>");
//Recupération des informations pour chaque instance
            foreach ($val1 as $val2){
                echo("<td class='colonnes'>$val2</td>");
            }
                echo("<td><a href='formulaire.php?Id=$Ids&amp;prenom=$prenoms&amp;nom=$noms&amp;age=$ages&amp'>Modifier</a></td>");
                echo("</tr>");
        }
    echo("</form>"); 
    echo("</table>");
    echo("</center>");

}
    
        afficherInformations($personnes);

    ?>


    </body>
</html>


