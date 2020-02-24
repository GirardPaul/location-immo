<?php
session_start();

if(empty($_SESSION['utilisateur']))
{
    header("location:connexion.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

<style>

*{
    font-family: 'Roboto Condensed';
    color: black;
}
.film-modif{
    color: black;
}
.film-modif:hover{
    color: black;
}
.film-suppr{
    color: black;
}
.film-suppr:hover{
    color: black;
}
.mt-10{
    margin-top: 5rem;
}
a:hover{
    text-decoration: none;
    background-color: none;
}
body{
    background-color: #707070;
}
.nav-link{
    font-family: 'Bangers', cursive;

}
strong{
    font-family: 'Bangers', cursive;
    color: white;

}
h1{
    font-family: 'Bangers', cursive;
    color: white;

}
.centrer{
    position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
}
.form-control::placeholder {
  color: black;
}
input{
    color: black;
}
i{
    color: red;
}
i:hover{
    animation: fa-spin 2s infinite linear;
}
.dropdown-menu{
    background-color: #212121 !important;
}
.btn-primary.dropdown-toggle:hover, .btn-primary.dropdown-toggle:focus{
  background-color: #212121 !important;
}
.btn-primary.dropdown-toggle{
  background-color: #212121 !important;
}
.btn-primary:hover{
  background-color: #212121 !important;
}
.btn-primary:not([disabled]):not(.disabled):active, .btn-primary:not([disabled]):not(.disabled).active, .show>.btn-primary.dropdown-toggle{
  background-color: #212121 !important;
}
.btn-primary.dropdown-toggle:hover, .btn-primary.dropdown-toggle:focus{
  background-color: #212121 !important;
}
.dropdown .dropdown-menu .dropdown-item:hover, .dropdown .dropdown-menu .dropdown-item:active, .dropup .dropdown-menu .dropdown-item:hover, .dropup .dropdown-menu .dropdown-item:active, .dropleft .dropdown-menu .dropdown-item:hover, .dropleft .dropdown-menu .dropdown-item:active, .dropright .dropdown-menu .dropdown-item:hover, .dropright .dropdown-menu .dropdown-item:active{
  background-color: #212121 !important;
}
.naplok{
    font-family: 'Bangers', cursive;
    color: white;
  
}
span{
  cursor: pointer;
}
.waves-input-wrapper{
  width: 50%;
}




</style>
    <title>Document</title>
</head>
<body >

<!--Main Navigation-->
<header class="bg-dark">

  <nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark pink scrolling-navbar">
    <a class="navbar-brand" href="index.php"><strong>PauHem</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle naplok" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Clients
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
    <button class="dropdown-item"  type="button"><a class="nav-link" href="ajout.php">Ajouter un client</a></button>
    <button class="dropdown-item" type="button"><a class="nav-link" href="liste_client.php">Liste clients</a></button>
    
  </div>
</div>
<li class="nav-item active">
        <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle naplok" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Localisation
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
  <button class="dropdown-item"  type="button"><a class="nav-link" href="commune.php">Ajouter une commune</a></button>
  <button class="dropdown-item"  type="button"><a class="nav-link" href="quartier.php">Ajouter un quartier</a></button>
    <button class="dropdown-item" type="button"><a class="nav-link" href="liste_localisation.php">Liste localisation</a></button>
    
  </div>
</div>
        </li>
        </li>
        <li class="nav-item active">
        <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle naplok" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Logement
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
  <button class="dropdown-item"  type="button"><a class="nav-link" href="ajout_type.php">Ajouter un type</a></button>
    <button class="dropdown-item"  type="button"><a class="nav-link" href="ajout_logement.php">Ajouter un logement</a></button>
    <button class="dropdown-item" type="button"><a class="nav-link" href="liste_logement.php">Liste des logements</a></button>
  </div>
</div>
        </li>
        <li class="nav-item active">
        <div class="dropdown">
  <button class="btn btn-primary btn-lg dropdown-toggle naplok" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Location
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuMenu">
    <button class="dropdown-item"  type="button"><a class="nav-link" href="ajout_location.php">Ajouter une location</a></button>
    <button class="dropdown-item" type="button"><a class="nav-link" href="liste_location.php">Liste location</a></button>
    
  </div>
</div>
        </li>
       
      </ul>

      <a href="logout.php" title="Deconnexion"><i class="fas fa-times fa-2x"></i></a>
      
  </nav>

</header>
<!--Main Navigation-->


<div class="container mt-5">
<?php




    $bdd = new PDO('mysql:host=localhost:3308;dbname=pauhem', 'root', '');




    //Liste Location

    $liste_loc="SELECT loc.id as locid, cl.nom as clnom, cl.prenom as clprenom, l.id as id, c.nom as cnom, q.nom as qnom, superficie, adresse, t.nom as tnom, loyer, charge, date_debut, date_fin
    FROM location loc
    JOIN logement l
    ON loc.id_logement = l.id
    JOIN client cl
    ON loc.id_client = cl.id
    JOIN quartier q
    ON q.id = l.id_quartier
    JOIN commune c
    ON c.id = l.id_commune
    JOIN type t
    ON l.id_type = t.id
    WHERE l.id_quartier = q.id";
    
    
    
    $req_loc = $bdd->query($liste_loc);

    echo "<form class='d-flex justify-content-center flex-column md-form' action='' method='post'>";
    echo "<h1 class='mt-10 text-center'>Liste des locations :</h1>";
    echo "<table class='table mt-5'>";
    echo "<thead>
    <tr>
    <th scope='col'>#Clients <span id='span' class='fas fa-arrow-down'></span></th>
    <th scope='col'>#Logement <span id='span1' class='fas fa-arrow-down'></span></th>
    <th scope='col'>#Date début loc <span id='span2' class='fas fa-arrow-down'></span></th>
    <th scope='col'>#Date fin loc <span id='span3' class='fas fa-arrow-down'></span></th>
      <th scope='col'>#Modification & Suppression</th>
     

     
    </tr>
    </thead>";
    echo "<tbody>";
    while ($list=$req_loc->fetch()){

        echo "<tr><td>".$list['clprenom'].' / '.$list['clnom']."</td><td>".$list['cnom'].' / '.$list['qnom'].' / '.$list['superficie'].' / '.$list['adresse'].' / '.$list['tnom'].' / '.$list['loyer'].' / '.$list['charge']."</td><td>".$list['date_debut']."</td><td>".$list['date_fin']."</td><td>"."<a class='film-modif badge badge-success' href=modification_location.php?locid=".$list['locid'].">Modifier</a>"."<a class='film-suppr badge badge-danger' href=suppression_location.php?locid=".$list['locid'].">Supprimer</a>"."</td></tr>";
            
    }
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

    echo "</form>";




    //Liste Locations par Clients

    echo "<form class='d-flex justify-content-center flex-column align-items-center md-form w-100' action='' method='post'>";
    echo "<h1 class='mt-10 text-center'>Liste des locations par client :</h1>";
    $req_client = $bdd->query("SELECT * FROM client");

echo "<select  class='w-50 custom-select' id='inputGroupSelect04' aria-label='Example select with button addon' name='client'>";
while ($list_client=$req_client->fetch()){
    echo "<option class='text-dark' value='".$list_client['id']."'>".$list_client['nom']."</option>";
}
echo "</select>";

echo "<input class='w-100 mt-1 mb-3 btn btn-dark btn-lg btn-block' type='submit' name='ajout' value='Rechercher'>";




if(isset($_POST['client'])){

    $list_cli = $bdd->query("SELECT cl.nom as clnom, cl.prenom as clprenom, l.id as id, c.nom as cnom, q.nom as qnom, superficie, adresse, t.nom as tnom, loyer, charge, date_debut, date_fin
    FROM location loc
    JOIN logement l
    ON loc.id_logement = l.id
    JOIN client cl
    ON loc.id_client = cl.id
    JOIN quartier q
    ON q.id = l.id_quartier
    JOIN commune c
    ON c.id = l.id_commune
    JOIN type t
    ON l.id_type = t.id

    WHERE loc.id_client = '".($_POST['client'])."'");


    echo "<table class='table'>";
    echo "<tbody>";
    echo "<thead>
    <tr>
      <th scope='col'>#Logement</th>
      <th scope='col'>#Date début</th>
      <th scope='col'>#Date fin</th>
    </tr>
    </thead>";


while ($list__client=$list_cli->fetch()){

    echo "<tr><td>".$list__client['cnom'].' / '.$list__client['qnom'].' / '.$list__client['superficie'].' / '.$list__client['adresse'].' / '.$list__client['tnom'].' / '.$list__client['loyer'].' / '.$list__client['charge']."</td><td>".$list__client['date_debut']."</td><td>".$list__client['date_fin']."</td></tr>";
            
}
echo "</tr>";
echo "</tbody>";
echo "</table>";
echo "</form>";


}








//Liste des locations par Type

echo "<form class='d-flex justify-content-center flex-column align-items-center md-form' action='' method='post'>";
    echo "<h1 class='mt-10 text-center'>Liste des locations par type :</h1>";
    $req_type = $bdd->query("SELECT * FROM type");

echo "<select  class='w-50 custom-select' id='inputGroupSelect04' aria-label='Example select with button addon' name='type_log'>";
while ($list_type=$req_type->fetch()){
    echo "<option class='text-dark' value='".$list_type['id']."'>".$list_type['nom']."</option>";
}
echo "</select>";

echo "<input class='w-100 mt-1 mb-3 btn btn-dark btn-lg btn-block' type='submit' name='ajout' value='Rechercher'>";




if(isset($_POST['type_log'])){

    $list_type = $bdd->query("SELECT cl.nom as clnom, cl.prenom as clprenom, l.id as id, c.nom as cnom, q.nom as qnom, superficie, adresse, t.nom as tnom, loyer, charge, date_debut, date_fin
    FROM location loc
    JOIN logement l
    ON loc.id_logement = l.id
    JOIN client cl
    ON loc.id_client = cl.id
    JOIN quartier q
    ON q.id = l.id_quartier
    JOIN commune c
    ON c.id = l.id_commune
    JOIN type t
    ON l.id_type = t.id

    WHERE l.id_type = '".($_POST['type_log'])."'");


    echo "<table class='table'>";
    echo "<tbody>";
    echo "<thead>
    <tr>
        <th scope='col'>#Clients</th>
        <th scope='col'>#Logement</th>
        <th scope='col'>#Date début</th>
        <th scope='col'>#Date fin</th>
    </tr>
    </thead>";


while ($list__type=$list_type->fetch()){

    echo "<tr><td>".$list__type['clprenom'].' / '.$list__type['clnom']."</td><td>".$list__type['cnom'].' / '.$list__type['qnom'].' / '.$list__type['superficie'].' / '.$list__type['adresse'].' / '.$list__type['tnom'].' / '.$list__type['loyer'].' / '.$list__type['charge']."</td><td>".$list__type['date_debut']."</td><td>".$list__type['date_fin']."</td></td>";
            
}
echo "</tr>";
echo "</tbody>";
echo "</table>";
echo "</form>";

}





//Liste des locations par Date



echo "<form class='d-flex justify-content-center flex-column align-items-center md-form' action='' method='post'>";

echo "<h1 class='mt-10 text-center'>Liste des locations par date :</h1>";

echo "<div class='md-form w-50'>";

echo "<input id='inputMDEx' class='form-control' style='margin-right: 5px; margin-left:5px;' type='date' name='tri_debut'>
<label class='text-white' for='inputMDEx'>Date de début :</label>";

echo "</div>";

echo "<div class='md-form mt-5 w-50'>";

echo "<input id='inputMDEx' class='form-control' style='margin-right: 5px; margin-left:5px;' type='date' name='tri_fin'>
<label class='text-white' for='inputMDEx'>Date de fin :</label>";

echo "</div>";


echo "<input class='w-100 ml-1 mt-1 mb-3 btn btn-dark btn-lg btn-block' type='submit' name='tri' value='Rechercher'>";

if(isset($_POST['tri_debut']) AND isset($_POST['tri_fin'])){

    $tri_list = $bdd->query("SELECT cl.nom as clnom, cl.prenom as clprenom, l.id as id, c.nom as cnom, q.nom as qnom, superficie, adresse, t.nom as tnom, loyer, charge, date_debut, date_fin
    FROM location loc
    JOIN logement l
    ON loc.id_logement = l.id
    JOIN client cl
    ON loc.id_client = cl.id
    JOIN quartier q
    ON q.id = l.id_quartier
    JOIN commune c
    ON c.id = l.id_commune
    JOIN type t
    ON l.id_type = t.id
    WHERE date_debut AND date_fin BETWEEN '".($_POST['tri_debut'])."' AND '".($_POST['tri_fin'])."'");

echo "<table class='table'>";
echo "<tbody>";
echo "<thead>
<tr>
<th scope='col'>#Clients</th>
<th scope='col'>#Logement</th>
<th scope='col'>#Date début</th>
<th scope='col'>#Date fin</th>
</tr>
</thead>";

while ($tri=$tri_list->fetch()){

    echo "<tr><td>".$tri['clprenom'].' / '.$tri['clnom']."</td><td>".$tri['cnom'].' / '.$tri['qnom'].' / '.$tri['superficie'].' / '.$tri['adresse'].' / '.$tri['tnom'].' / '.$tri['loyer'].' / '.$tri['charge']."</td><td>".$tri['date_debut']."</td><td>".$tri['date_fin']."</td></td>";
}
echo "</tr>";
echo "</tbody>";
echo "</table>";
echo "</form>";
}






























   








    

}








?>
<script>

let span = document.getElementById('span');
span.addEventListener('click', function(){
  span.classList.toggle('fa-arrow-up');
})

let span1 = document.getElementById('span1');
span1.addEventListener('click', function(){
  span1.classList.toggle('fa-arrow-up');
})

let span2 = document.getElementById('span2');
span2.addEventListener('click', function(){
  span2.classList.toggle('fa-arrow-up');
})

let span3 = document.getElementById('span3');
span3.addEventListener('click', function(){
  span3.classList.toggle('fa-arrow-up');
})

const compare = (ids, asc) => (row1, row2) => {
const tdValue = (row, ids) => row.children[ids].textContent;
const tri = (v1, v2) => v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
};

const tbody = document.querySelector('tbody');
const thx = document.querySelectorAll('th');
const trxb = tbody.querySelectorAll('tr');
thx.forEach(th => th.addEventListener('click', () => {
let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
classe.forEach(tr => tbody.appendChild(tr));
}));



</script>
</div>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
</body>
</html>