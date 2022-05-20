<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="patient_information_system";
    
    // Create Connection
    $conn = new mysqli($host, $username, $password, $database);
    
    // Check Connection
    if($conn->connect_error){
      echo $conn->connect_error;
    }


?>
