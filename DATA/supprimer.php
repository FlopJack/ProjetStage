<?php

include 'cnx.php';
 
$name =$_POST['txtName'];
$desc = $_POST['txtDesc'];
$quantite = $_POST['txtQt'];
$photo = $_POST['txtphoto'];
$id=$_POST['txtId'];
 

 
    $req = $bdd->prepare('DELETE FROM fleurs WHERE id="'.$id.'"' );
    $req->execute();



?>