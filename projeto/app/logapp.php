<?php
  session_start();
$loginx = $_POST["usuario"];
$senhax = $_POST["senha"];

// Conectar ao banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

// Criptografar a senha com MD5
$senhax = md5($senhax);

// Comando SQL para buscar o usuário com login e senha correspondentes
$comando = "SELECT * FROM tab WHERE login='$loginx' AND senha='$senhax'";
$resulta = mysqli_query($con, $comando);

// Resposta padrão caso não haja correspondência
$dados = array("Email Ou Senha Incorretos!");

while ($r = mysqli_fetch_array($resulta)) {
  $_SESSION['usuario'] = $loginx;
    // Se o usuário for encontrado, atualizar a resposta
    $dados = array(
        "status" => "ok",
        "id" => $r[1],
        "login" => $r[2],
        "senha" => $r[3],
        "datanasc" => $r[4]
    );
}

// Fechar a conexão com o banco de dados
$close = mysqli_close($con);

// Retornar os dados em formato JSON
echo json_encode($dados);
?>
