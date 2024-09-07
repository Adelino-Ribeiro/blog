<?php

    $host = 'localhost';

    $dbname = 'auth_sys';

    $user = 'root';

    $pass = '';

    $conn = new PDO("mysql:host={$host};dbname={$dbname};", $user, $pass);

    // if ($conn == true) echo "It's working fine";
    
    // else echo "Connection is wrong: err";


?>