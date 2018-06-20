<?php

 function GetFLeurs(){

    
        include "cnx.php";
        $req = "SELECT  idFleurs,Nom,Description,quantite,photo  FROM fleurs  ";
        $stm=$bdd->prepare($req);
        $stm->execute();
        $result= $stm->fetchAll();
        return $result;



}


function GetFLeursName(){

    
        include "cnx.php";
        $req = "SELECT  Nom FROM fleurs ORDER BY RAND () LIMIT 1  ";
        $stm=$bdd->prepare($req);
        $stm->execute();
        $result= $stm->fetch();
        return $result;



}

?>