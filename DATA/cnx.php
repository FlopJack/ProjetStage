<?php 

try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=sitefleurs', 'root', '');
    
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());


}



?>