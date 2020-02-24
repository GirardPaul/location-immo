<?php

session_start();


if(empty($_SESSION['utilisateur']))
{
    header("location:connexion.php");
}else{

	$bdd = new PDO('mysql:host=localhost:3308;dbname=pauhem', 'root', '');
	$suppression="DELETE FROM client WHERE id=".$_GET['listid']." ";
	$stmt = $bdd->query($suppression);
    header("Location:index.php");
    


}












