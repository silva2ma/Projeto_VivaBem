<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    die(json_encode(["status" => "error", "message" => "Usuário não está logado."]));
}

// Conexão com o banco de dados
$con=mysqli_connect("mysql7.serv00.com","m10725_roxo","Roxo@2024","m10725_bd"); // o usuario e a senha do banco e o nome do banco de dados

if (!$con) {
    die(json_encode(["status" => "error", "message" => "Erro de conexão: " . mysqli_connect_error()]));
}

// Verifica se foi enviada uma solicitação POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria = $_POST['categoria']; // Recebe a categoria enviada pelo AJAX
    $usuario = $_SESSION['usuario']; // Obtém o usuário da sessão
    $favoritado = $_POST['favoritado'] === 'true'; // Verifica se o botão foi clicado para favoritar

    // Atualiza o status do favorito na tabela
    if ($favoritado) {
        // Se o favorito for marcado, atualiza a tabela
        $sql = "UPDATE tab SET favorito=? WHERE login=?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $categoria, $usuario);
    } else {
        // Se o favorito for desmarcado, atualiza a tabela para NULL
        $sql = "UPDATE tab SET favorito=NULL WHERE login=?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, 's', $usuario);
    }

    // Executa a consulta
    if (mysqli_stmt_execute($stmt)) {
        // Retorna resposta em JSON
        $message = $favoritado ? "Projeto favoritado com sucesso!" : "Projeto desfavoritado com sucesso!";
        echo json_encode(["status" => "success", "message" => $message]);
    } else {
        echo json_encode(["status" => "error", "message" => "Erro ao atualizar: " . mysqli_error($con)]);
    }
    mysqli_stmt_close($stmt);
}

// Fecha a conexão
mysqli_close($con);
?>
