<?php 
include '../DATA/cnx.php';
 
$name =$_POST['txtName'];
$desc = $_POST['txtDesc'];
$quantite = $_POST['txtQt'];
$photo = $_POST['txtphoto'];

 

 
    $req = $bdd->prepare('INSERT INTO fleurs (Nom,Description,Quantite,photo) VALUES(:name,:desc,:quantite,:photo)');
    $req->execute(array(':name'=>$name,':desc'=>$desc,':quantite'=>$quantite,':photo'=>$photo));
    header("refresh:5;url=../VIEW/index.php");
echo 'Vous êtes inscris!';

?>