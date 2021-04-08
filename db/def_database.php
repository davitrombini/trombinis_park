<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
      die("MySQL Error: " . $conn->connect_error);
    } 
   
    $conn->select_db("trombinis_park");


    /* get the name of the current default database */
    //$result = $conn->query("SELECT DATABASE()");
    //$row = $result->fetch_row();
    //printf("Default database is %s.\n", $row[0]);
?> 
