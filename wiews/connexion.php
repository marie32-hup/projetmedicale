<?php
 
 $servername = "localhost";
 $username ="root";
 $password = "";
 $bbd="gestion_rendezvous";
 
 try {
     $conn = new PDO("mysql:host=$servername;dbname=$bbd", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "";
     }
 catch(PDOException $e)
     {
     echo "Connection failed: " . $e->getMessage();
     }
 ?> 