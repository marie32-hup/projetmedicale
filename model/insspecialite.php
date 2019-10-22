<?php
if (isset($_POST['envoyer'])) {
$servername = "localhost";
$username ="root";
$password = "";
$bbd="gestion_rendezvous";
$nom_specialite= trim($_POST['nom_specialite']);


try {
  $conn = new PDO("mysql:host=$servername;dbname=$bbd", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO myspecialite (id_specialite, nom_specialite)
    VALUES (NULL, '$nom_specialite')";
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