<?php

 function GetFLeurs(){

    
        include "cnx.php";
        $req = "SELECT  idFleurs,Nom,Description,quantite,photo  FROM fleurs  ";
        $stm=$bdd->prepare($req);
        $stm->execute();
        $result= $stm->fetchAll();
        return $result;



}


?>