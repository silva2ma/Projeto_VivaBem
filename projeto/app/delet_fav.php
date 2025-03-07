<?php
// Inicia a sessão
session_start();

// Conectar ao banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

if (!$con) {
    die(json_encode(array("status" => "erro", "message" => "Falha na conexão com o banco de dados"))); // Retorna erro de conexão
}

// Verifica se o usuário está autenticado
if (isset($_SESSION["usuario"])) {
    $loginx = $_SESSION["usuario"]; // Obtém o usuário logado da sessão

    // Prepara a consulta SQL para limpar o valor de 'fav_app' do usuário
    $comando = "UPDATE tab SET fav_app = NULL WHERE login = ?";
    if ($stmt = mysqli_prepare($con, $comando)) {
        // Associa o parâmetro à consulta
        mysqli_stmt_bind_param($stmt, "s", $loginx); // "s" para string (login)

        // Executa a consulta
        mysqli_stmt_execute($stmt);

        // Verifica quantas linhas foram afetadas
        $quant = mysqli_stmt_affected_rows($stmt);

        // Verifica se a atualização foi bem-sucedida
        if ($quant > 0) {
            $dados = array("status" => "ok");
        } else {
            $dados = array("status" => "erro", "message" => "Nenhum registro encontrado ou o valor já foi apagado.");
        }

        // Fecha a declaração
        mysqli_stmt_close($stmt);
    } else {
        $dados = array("status" => "erro", "message" => "Erro na preparação da consulta SQL.");
    }
} else {
    // Caso não esteja autenticado
    $dados = array("status" => "não_autenticado", "message" => "Usuário não autenticado.");
}

// Fecha a conexão com o banco de dados
mysqli_close($con);

// Retorna a resposta como JSON
echo json_encode($dados);
?>
