<?php 

require_once'/opt/lampp/htdocs/projetmedicale/wiews/connexion.php';
// On récupère tout le contenu de la table jeux_video

$utilisateurs = array( 
array( $utilisateurs['user_secretaire'] ,$utilisateurs['user_secretaire'] , $utilisateurs['password_secretaire'])
);
    if( isset($_POST['envoyer'])) {
        
        
        $login = htmlspecialchars($_POST['user_admin']);
        $mdp = htmlspecialchars($_POST['password_admin']);
        for($i=0;$i<count($utilisateurs);$i++){
            if($utilisateurs[$i][0]==$login){
                for($j=1;$j<count($utilisateurs[$i]);$j++){
                    if($utilisateurs[$i][$j]==$mdp){
                        header('location:admin.php');
                    }
                    
                }
            }

            elseif ($utilisateurs['user_secretaire']== $login) {
                header('location:espacesecretaire.php');
               }

            else{
                ?><script type="text/javascript">alert("Identifiant incorrecte"); window.location = "gestionrv.php";</script><?php
            }
        }
                
    }


      ?>  