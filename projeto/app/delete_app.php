<?php
// Conectar ao banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error()); // Verifica a conexão
}

// Inicia a sessão
session_start();

// Obtém o login do usuário da sessão, se estiver disponível
if (isset($_SESSION["usuario"])) {
    $loginx = $_SESSION["usuario"]; // Obtém o usuário logado da sessão

    // Prepare a declaração SQL para evitar SQL injection
    $comando = "DELETE FROM tab WHERE login = ?";
    $stmt = mysqli_prepare($con, $comando);
    mysqli_stmt_bind_param($stmt, "s", $loginx); // "s" indica que é uma string
    mysqli_stmt_execute($stmt); // Executa a declaração

    $quant = mysqli_stmt_affected_rows($stmt); // Verifica quantas linhas foram afetadas

    // Verifica se a exclusão foi bem-sucedida
    if ($quant > 0) {
        $dados = array("status" => "ok");
    } else {
        $dados = array("status" => "erro");
    }

    mysqli_stmt_close($stmt); // Fecha a declaração
} else {
    $dados = array("status" => "não_autenticado"); // Se não houver usuário na sessão
}

// Fecha a conexão com o banco de dados
mysqli_close($con);

// Retorna o status como JSON
echo json_encode($dados);
?>
