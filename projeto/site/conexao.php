<?php
  
  // Conexão com o banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

// Verifica a conexão
if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}
  ?>