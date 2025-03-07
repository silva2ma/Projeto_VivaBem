<?php
// Conectar ao banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Inicia a sessão
session_start();

// Verifica se o usuário está autenticado
if (isset($_SESSION["usuario"])) {
    $loginx = $_SESSION["usuario"];   // Login do usuário autenticado
    $encontros = "Encontros que Transformam"; // Valor dos encontros a ser atualizado

    // Prepara a declaração SQL para atualizar fav_app para o login atual
    $comando = "UPDATE tab SET fav_app = ? WHERE login = ?";
    $stmt = mysqli_prepare($con, $comando);
    mysqli_stmt_bind_param($stmt, "ss", $encontros, $loginx); // Atualiza fav_app com encontros onde login é igual ao usuário
    mysqli_stmt_execute($stmt);

    $quant = mysqli_stmt_affected_rows($stmt);

    // Verifica se a atualização foi bem-sucedida
    if ($quant > 0) {
        $dados = array("status" => "ok");
    } else {
        $dados = array("status" => "erro");
    }

    mysqli_stmt_close($stmt);
} else {
    $dados = array("status" => "não_autenticado"); // Se o usuário não estiver autenticado
}

mysqli_close($con);

// Retorna o status como JSON
echo json_encode($dados);
?>
