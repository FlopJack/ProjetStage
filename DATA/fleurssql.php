<?php

 function GetFLeurs(){

    
        include "cnx.php";
        $req = "SELECT  idFleurs,Nom,'description',quantite,photo  FROM fleurs  ";
        $stm=$bdd->prepare($req);
        $stm->execute();
        $result= $stm->fetchAll();
        return $result;



}


?>