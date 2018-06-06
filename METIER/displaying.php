<?php



function Display(){
    include '../DATA/fleurssql.php';

  $result= GetFleurs();

  

foreach ($result as $key) {
    # code...

echo 

    '<div class="card text-white bg-primary mb-3 cardId" style="max-width: 20rem;">'

        .'<div class="card-header cardHead" id='.$key['Nom'].' >'.$key['Nom'].'</div>'

        .'<div class="card-body">'

         .'<h4 class="card-title">'.$key['Description'].'</h4>'.
         
          '<img style="height: 200px; width: 100%; display: block;" src='.$key['photo'].'/>'.
          

          '<select class="form-control" id="exampleSelect1">';

          for ($i=1; $i <$key['quantite'] ; $i++) 
          { 
           echo '<option>'.$i.'</option>';
         
           }

         echo '</select>'
    
          
        .'</div>'
      .'</div>'
    ;



}

}

?>
