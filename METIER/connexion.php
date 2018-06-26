
<?php
include '../DATA/cnx.php';


  $query=$bdd->prepare('SELECT idn, mdp  FROM identifiant WHERE idn = ? AND mdp = ?');
       
        $query->execute(array($_POST['txtname'],$_POST['txtmdp']));
        $data=$query->fetch();

        if($data['idn'] == $_POST['txtname'] && $data['mdp'] == $_POST['txtmdp'])
        {
            echo 'Vous êtes connecté, redirection...';
       
            
                header("refresh:0;url=../VIEW/Back.php");  
            exit();
            }
        else
        {
        if($data['idn'] != $_POST['txtname'])
        {
            echo 'Mauvais pseudo ou mdp';
            header("refresh:2;url=../VIEW/Connexion.html");
        }
    }
 ?>
