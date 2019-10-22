<?php 


$utilisateurs = array(  array('mariedieng34@gmail.com','mariedieng34@gmail.com','marie'),
array('pendabbalde@gmail.com','pendabbalde@gmail.com','penda'),
array('bniass@gmail.com','bniass@gmail.com','Baye'),

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

            else{
                ?><script type="text/javascript">alert("Identifiant incorrecte"); window.location = "gestionrv.php";</script><?php
            }
        }
                
    }


      ?>  