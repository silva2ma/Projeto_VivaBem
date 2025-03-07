<?php
// Conectar ao banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error()); // Verifica a conexão
}

// Inicia a sessão
session_start();

// Obtém o login do usuário da sessão
if (isset($_SESSION["usuario"])) {
    $loginx = $_SESSION["usuario"]; // Obtém o login do usuário logado

    // Consulta para buscar a imagem
    $comando = "SELECT img_app FROM tab WHERE login = ?";
    $stmt = mysqli_prepare($con, $comando);
    mysqli_stmt_bind_param($stmt, "s", $loginx); // "s" indica que é uma string
    mysqli_stmt_execute($stmt); // Executa a consulta

    // Obtém o resultado
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $img_app = $row['img_app']; // A imagem armazenada em Base64 no banco de dados

    // Verifica se a imagem existe e retorna ela
    if ($img_app) {
        $dados = array("status" => "ok", "imagem" => $img_app);
    } else {
        $dados = array("status" => "erro", "imagem" => null);
    }

    mysqli_stmt_close($stmt); // Fecha a declaração
} else {
    $dados = array("status" => "não_autenticado"); // Se não houver usuário na sessão
}

// Fecha a conexão com o banco de dados
mysqli_close($con);

// Retorna os dados como JSON
echo json_encode($dados);
?>
