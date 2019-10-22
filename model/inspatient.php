<?php
if (isset($_POST['envoyer'])) {
$servername = "localhost";
$username ="root";
$password = "";
$bbd="gestion_rendezvous";
$nom_patient= trim($_POST['nom_patient']);
$prenom_patient= trim($_POST['prenom_patient']);
$mail_patient= trim($_POST['mail_patient']);
$tel_patient= trim($_POST['tel_patient']);


try {
  $conn = new PDO("mysql:host=$servername;dbname=$bbd", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO patient (id_patient,nom_patient,prenom_patient,mail_patient,tel_patient)
    VALUES (NULL, '$nom_patient','$prenom_patient','$mail_patient','$tel_patient')";
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