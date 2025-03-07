<?php
// Conexão com o banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

// Verifica se a conexão foi estabelecida
if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Obtém os dados do formulário
$nomex = $_POST["nomes"];
$loginx = $_POST["usuario"];
$senhax = $_POST["senha"];

// Criptografa a senha com MD5
$senhaCriptografada = md5($senhax);

// Usando prepared statements para prevenir SQL injection
$stmt = $con->prepare("UPDATE tab SET senha=?, nome=? WHERE login=?");
$stmt->bind_param("sss", $senhaCriptografada, $nomex, $loginx); // 'sss' indica que todos os três parâmetros são strings

// Executa a declaração
if ($stmt->execute()) {
    session_start();
    $_SESSION['usuario'] = $loginx;
    $_SESSION['nome'] = $nomex;
$dados = array("status" => "ok");
    // Mensagem de sucesso com redirecionamento
  
} else {
    // Mensagem de erro
    $dados = array("status" => "erro");
}

// Fecha a declaração e a conexão
$stmt->close();
mysqli_close($con);
  echo json_encode($dados);
?>