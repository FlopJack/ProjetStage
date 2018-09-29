<?php
function Display(){
    include '../DATA/fleurssql.php';
   
  $result= GetFleurs();

$idB=0;
$idS=0;

foreach ($result as $key) {
echo '<div class="row">';

echo '<div class="card border-success mb-3" style="max-width: 20rem ">';

    echo    '<div class="card-header cardHead" name="txtcard">'.$key['Nom'];

     echo  '<input type="hidden"  name="nomFleur" value="'.$key['Nom'].'"/>';
      
        echo '<div class="card-body">';

        echo '<h4 class="card-title">'.$key['Description'].'</h4>';
         
          echo '<img style="height: 200px; width: 100%; display: block;" src="'.$key['photo'].'" />';
          
         
         echo '<select class="form-control"  name="selectFleurs" id="'.++$idS.'">';
           
          for ($i=1; $i <$key['quantite'] ; $i++) 
          { 
           echo '<option>'.$i.'</option>';
            
           }
        
         echo '</select>';
        
        echo '<button type="button" id="'.++$idB.'"  value="'.$key['Nom'].'" class="btn btn-warning btnre">Réserver</button>';
          
        echo '</div>';
        echo '</div>';
        
   
      echo '</div>'  ;
      
      echo '</div>';



}

}


function ShowBack(){
  include '../DATA/fleurssql.php';
 include '../DATA/cnx.php';
   
  $result= GetFleurs();

foreach($result as $key){
 
echo '<div class="container-fluid text-center">';
echo '<form action="..\DATA\supprimer.php" method="post">';
echo '<h1>Supprimer un élément</h1>';
echo '<p>Nom de la fleur </p>';
echo '<input type="hidden" name="txtId" value="'.$key['idFleurs'].'">';
echo '<input type="text" name="txtName" value="'.$key['Nom'].'">';
echo '<p>Description</p>';
echo '<input type="text" id="desc" name="txtDesc" value="'.$key['Description'].'">';
echo '<p>Quantité</p>';
echo '<input type="number" id="quantite" name="txtQt" value="'.$key['quantite'].'">';
echo '<p>Photo</p>';
echo '<input type="text" id="photo" name="txtphoto" value="'.$key['photo'].'">';
echo'<p>&nbsp;</p>';
echo '<input type="submit" text="Supprimer">';
echo '</form>';
echo '</div>';
}

}

?>



