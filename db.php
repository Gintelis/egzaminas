<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'duomenis';
    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn){        
              die('Prisijungimas nepavyko:'. mysqli_connect_error());  
  }
    else echo "prisijungta";
?>