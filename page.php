<?php
//phpinfo();
session_start(); 
//var_dump($_SESSION['tableau']);
$tab_session = $_SESSION['tableau'];

require('model.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Formulaire</title>
</head>
<body>

        <h1>Formulairsssssscescdse</h1>

        <form action="page2.php" method="get">
            Nom: <input type="text" name="nom"><br>
            Prenom: <input type="text" name="prenom"><br>
            Sexe <input type="radio" name="sexe" id="inlineRadio1" value="m"> homme
                 <input type="radio" name="sexe" id="inlineRadio2" value="f"> femme
                    <br>                                
            <input type="submit">
        </form>

<?php

/*
$tableau = array(
    array("nom"=>"lesmond","prenom"=>"elkana","sexe"=>"h" ),
    array("nom"=>"lesmond","prenom"=>"leslie","sexe"=>"f")

);

echo "<h1>debut de l'affichage tab session</h1>";
affichage($tab_session);
echo "<h1> fin de l'affichage tab session</h1>";



echo "<h1>afficher les resultats de la fonction1</h1>";

ajout($_GET['nom'],$_GET['prenom'],$_GET['sexe']);

echo "<h1>Ajout d'element dans le tableau</h1>";
affichage($tableau2);
*/
?>



</body>
</html>



