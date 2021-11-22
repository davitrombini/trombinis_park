<?php
  $server = "localhost";
  $user = "root";
  $password = "admin";
  $database_name = "bd_trombinis_park";
  $connection = mysqli_connect($server, $user, $password, $database_name);

  if (mysqli_connect_error()) {
    echo "Problemas com a conexão com o Banco de Dados " . mysqli_connect_error();
  }
