<?php
$con=mysqli_connect("mysql7.serv00.com","m10725_roxo","Roxo@2024","m10725_bd");  // o usuario e a senha do banco e o nome do banco de dados
  
  if($con->connect_error)
  {
    echo "Falha na conexão com o banco de dados";
  }

$login = $_POST['login'];

// Buscando a imagem do banco de dados
$sql = "SELECT img_app FROM tab WHERE login = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param('s', $login);
$stmt->execute();
$stmt->bind_result($imagem);
$stmt->fetch();

if ($imagem) {
    // Codificando a imagem para base64
    $imagem_base64 = base64_encode($imagem);
    echo json_encode(array("imagem" => $imagem_base64));
} else {
    echo json_encode(array("status" => "error"));
}
?>