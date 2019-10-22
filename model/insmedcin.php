<?php
if (isset($_POST['envoyer'])) {
$servername = "localhost";
$username ="root";
$password = "";
$bbd="gestion_rendezvous";
$nom_medecin= trim($_POST['nom_medecin']);
$id= $_POST['id'];
$prenom_medecin= trim($_POST['prenom_medecin']);
$mail_medecin= trim($_POST['mail_medecin']);
$tel_medecin= trim($_POST['tel_medecin']);
$user_medecin= trim($_POST['user_medecin']);
$password_medecin= sha1($_POST['password_medecin']);



try {
  $conn = new PDO("mysql:host=$servername;dbname=$bbd", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO medcin (id_medecin, id,nom_medecin,prenom_medecin,mail_medecin,tel_medecin,user_medecin,password_medecin)
    VALUES (NULL, '$nom_medecin','$id','$nom_medecin','$nom_medecin','$prenom_medecin','$mail_medecin','$tel_medecin','$user_medecin','$password_medecin')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";

    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

    }