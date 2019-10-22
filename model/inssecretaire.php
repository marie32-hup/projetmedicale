<?php
if (isset($_POST['envoyer'])) {
$servername = "localhost";
$username ="root";
$password = "";
$bbd="gestion_rendezvous";
$nom_secretaire= trim($_POST['nom_secretaire']);
$prenom_secretaire= trim($_POST['prenom_secretaire']);
$mail_secretaire= trim($_POST['mail_secretaire']);
$tel_secretaire= trim($_POST['tel_secretaire']);
$user_secretaire= trim($_POST['user_secretaire']);
$password_secretaire= sha1($_POST['password_secretaire']);


try {
  $conn = new PDO("mysql:host=$servername;dbname=$bbd", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO secretaire (id_secretaire,nom_secretaire,prenom_secretaire,mail_secretaire,tel_secretaire,user_secretaire,password_secretaire)
    VALUES (NULL, '$nom_secretaire','$prenom_secretaire','$mail_secretaire','$tel_secretaire','$user_secretaire','$password_secretaire')";
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
  

?> 