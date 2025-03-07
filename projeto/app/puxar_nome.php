<?php
  
  $con=mysqli_connect("mysql7.serv00.com","m10725_roxo","Roxo@2024","m10725_bd");  // o usuario e a senha do banco e o nome do banco de dados
  
  if($con->connect_error)
  {
    echo "Falha na conexão com o banco de dados";
  }
  
  $email=$_POST['login'];
  
  $sql="SELECT nome FROM tab WHERE login= ?";
  $stmt = $con->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if($result->num_rows > 0)
  {
    $row = $result->fetch_assoc();
    echo json_encode(array("nome" => $row['nome']));
  }
  else{
    echo json_encode(array("erro " => "Usuario não encontrado"));
    }
  
  $stmt->close();
  $con->close();
  ?>