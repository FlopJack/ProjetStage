<?php



function Display(){
    include '../DATA/fleurssql.php';

  $result= GetFleurs();

  

foreach ($result as $key) {
    # code...
}
echo 
'<div class="bs-component">'.
    '<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">'
        .'<div class="card-header">Header</div>'
        .'<div class="card-body">'
         .' <h4 class="card-title">' .$key['Nom']. '</h4>'.
          '<img style="height: 200px; width: 100%; display: block;" src="../sueur.jpg"/>'.
        '</div>'
      .'</div>'
    .'</div>';





}

?>
