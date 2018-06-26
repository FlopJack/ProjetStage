


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
  <script type="text/javascript" src="srcFleurs.js"></script>
 
 
 
 

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">GAEC Engoulevents</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
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
     
        <input class="form-control col-3  " id="srcId" 
         placeholder="Search" onkeyup="SearchBar()">
      
    </div>


  </nav>
  <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="card-deck">
     <?php
     include '../METIER/displaying.php' ;
     echo Display();
     ?>
    </div>
</div>
<script>

  $(document).ready(function(){
    var panier=[,];
    var code_html="OK!!";
   $(document).on("click","button",function(){
       
var btnId=this.id;
var btnName= this.value; 
var slcVal=$("select[id="+btnId+"]").val();


panier.push({Name:this.value, Quantite:slcVal});


var serializePanier=JSON.stringify(panier);

$.ajax({
    url:"Panier.php",
    type:'POST',
    datatype:"json",
    data:serializePanier,
   
    success : function(code_html, statut){
        console.log(serializePanier);
        console.log(statut);
        
    },
    error : function(resultat, statut, erreur){
        console.log("La requête n'a pas aboutie...");
        console.log(resultat);
        console.log(statut);
        console.log(erreur);
    
    }
    });



    });
});    
   </script>
</body>

</html>


