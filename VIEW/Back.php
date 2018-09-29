<?php include '../DATA/cnx.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">GAEC Engoulevents</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
     
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Fleurs.php">Les fleurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.html">Informations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Panier.php">Panier</a>
</li>
     
      </ul>
     
    </div>
</nav>
<div class="container-fluid text-center">
<form action="..\METIER\ajout.php" method="post">
<h1>Ajouter un élément</h1>
<p>Nom de la fleur </p>
<input type="text" id="name" name="txtName">
<p>Description</p>
<input type="text" id="desc" name="txtDesc">
<p>Quantité</p>
<input type="number" id="quantite" name="txtQt">
<p>Photo</p>
<input type="text" id="photo" name="txtphoto">
<p>&nbsp;</p>
<input type="submit" text="Valider">
</form>
</div>
<p>&nbsp;</p>
<?php 
include'../METIER/displaying.php';
echo ShowBack();
?>



</body>
</html>