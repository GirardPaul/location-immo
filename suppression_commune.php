<?php

session_start();


if(empty($_SESSION['utilisateur']))
{
    header("location:connexion.php");
}else{

	$bdd = new PDO('mysql:host=localhost:3308;dbname=pauhem', 'root', '');
	$suppression="DELETE FROM commune WHERE id=".$_GET['listcom']." ";
	$stmt = $bdd->query($suppression);
    header("Location:liste_localisation.php");
    


}












