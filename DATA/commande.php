<?php
include 'cnx.php';

$req = $bdd->prepare(' UPDATE fleurs SET  Quantite="" WHERE idFleurs=');
	$req->execute(array(':Quantite'=>$_POST['selectFleurs'],':idFleurs'=>$_POST[''] ));


