<?php
session_start(); 
$tableau = array();
//initialisation de la variable tableau
$_SESSION['tableau']= $tableau;

//var_dump($_SESSION['tableau']);
?>

<!DOCTYPE html>
<html> 
<head>
<title>Page Title</title>
</head>
<body>
<h1>Bienvenue sur la page accueil</h1>
<form name="" action="page.php" method="get">
<input type="submit" value="accueil">
</form>

</body>

</html>