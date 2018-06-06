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

 <script>
function SearchBar()
{
var srcinput= $("#srcId").val();
var search=$('.cardId');


$(search).children('div').each(function(index,value)
{
   if(index%2===0)
  {
    
         if(value.id==srcinput){
          $(this).parent().show();
         }
         else
         {
          $(this).parent().hide();         
         }
         if(srcinput==""){

           $('.cardId').show();
         }

  
  }
  
}
);
}


</script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">GAEC</a>
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
          <a class="nav-link" href="#">Informations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.html">About</a>
        </li>
      </ul>
     
        <input class="form-control mr-sm-2" id="srcId" 
         placeholder="Search" onkeyup="SearchBar()">
      
    </div>
  </nav>


<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="card-deck">

      <?php echo include'../METIER/displaying.php' ;
      echo  Display();
      ?>
    </div>
</div>

</body>
</html>