<?php
function Display(){
    include '../DATA/fleurssql.php';
   
  $result= GetFleurs();

$idB=0;
$idS=0;

foreach ($result as $key) {

echo '<div class="card text-white bg-primary mb-3 cardId " style="max-width: 20rem ">';

    echo    '<div class="card-header cardHead" name="txtcard">'.$key['Nom'];

     echo  '<input type="hidden" name="nomFleur" value="'.$key['Nom'].'"/>';
      
        echo '<div class="card-body">';

        echo '<h4 class="card-title">'.$key['Description'].'</h4>';
         
          echo '<img style="height: 200px; width: 100%; display: block;" />';
          
         
         echo '<select class="form-control"  name="selectFleurs" id="'.++$idS.'">';
           
          for ($i=1; $i <$key['quantite'] ; $i++) 
          { 
           echo '<option>'.$i.'</option>';
            
           }
        
         echo '</select>';
        
        echo '<button type="button" id="'.++$idB.'"  value="'.$key['Nom'].'" class="btn btn-warning btnre">Réserver</button>';
          
        echo '</div>';
        echo '</div>';
        
   
      echo '</div>'
    
    ;



}

}

?>
