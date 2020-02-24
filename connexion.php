<?php
session_start();

$bdd = new PDO("mysql:host=localhost:3308;dbname=pauhem;", "root", "");

    if(isset($_POST['user']) AND isset($_POST['mdp'])){

            $user = ($_POST['user']);
            $mdp = ($_POST['mdp']);

            $req = $bdd->query("SELECT * FROM admin WHERE login = '$user' AND mdp = '$mdp'");
            while ($log=$req->fetch())
            {
                $_SESSION['utilisateur'] = $user;
                header("location:index.php");
            }
        }
        if(!empty($_SESSION['utilisateur'])){
            header("location:index.php");
        }

?>

<!doctype html>
<html lang="fr">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/mdb.css">
<link rel="stylesheet" href="css/mdb.lite.css">
<title>Connexion</title>

<style>

.centrer{
    position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
}


</style>



</head>

<body class="bg-info">


<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
<!--Content-->
<div class="modal-content">

<!--Header-->
<div class="modal-header">
<img src="logo.jpg" alt="avatar"
class="rounded-circle img-responsive">
</div>
<!--Body-->
<div class="modal-body text-center mb-1">

<h5 class="mt-1 mb-2">PauHem</h5>

<form action="" method="post">
<div class="md-form ml-0 mr-0">
<input type="text" type="text" id="form29" name="user" class="form-control form-control-sm validate ml-0" placeholder="Identifiant">
<input type="password" type="text" id="form29" name="mdp" class="form-control form-control-sm validate ml-0" placeholder="Mot de passe">


</div>

<div class="text-center mt-4">
<button type="submit" name="" class="btn btn-cyan mt-1">Login <i class="fas fa-sign-in ml-1"></i></button>
</div>
</form>
</div>

</div>
<!--/.Content-->
</div>
</div>
<!--Modal: Login with Avatar Form-->

<div class="centrer text-center">
<a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar">Connexion</a>
</div>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
</body>

</html> 