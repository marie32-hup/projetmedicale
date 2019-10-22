<?php
if (isset($_POST['envoyer'])) {
$servername = "localhost";
$username ="root";
$password = "";
$bbd="gestion_rendezvous";
$nom_service= trim($_POST['nom_service']);


try {
  $conn = new PDO("mysql:host=$servername;dbname=$bbd", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO myservice (id_service, nom_service)
    VALUES (NULL, '$nom_service')";
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
