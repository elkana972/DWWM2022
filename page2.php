<?php
session_start(); 
//var_dump($_SESSION['tableau']);
$tab_session = $_SESSION['tableau'];

require('model.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Affichage du Foxxrmulairesssssss</h1>

<?php
//la fonction isset permet de vérifier que la variable existe
if(isset($_GET['nom']) && isset($_GET['prenom']) &&  isset($_GET['sexe']))
{
  $n = $_GET['nom'];
  $p = $_GET['prenom'];
  $s = $_GET['sexe'];
  $nouvelle_tab = creer_tableau($n,$p,$s);
  $_SESSION['tableau']=ajouter_element($tab_session,$nouvelle_tab);
  $tab_session=$_SESSION['tableau'];
  
}

afficher_tableau($tab_session);
   


?>



<form name="" action="page.php" method="get">
<input type="submit" value="retour">
</form>

</body>
</html>