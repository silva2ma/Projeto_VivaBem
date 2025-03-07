<?php
// Conectar ao banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error()); // Verifica a conexão
}

// Inicia a sessão
session_start();

// Verificar se o usuário está logado
if (isset($_SESSION["usuario"])) {
    $loginx = $_SESSION["usuario"]; // Obtém o login do usuário da sessão

    // Verifica se a imagem foi enviada via POST
    if (isset($_POST["fotox"])) {
        $fotox = $_POST["fotox"]; // A imagem em Base64 recebida via POST
        
        // Prepara a consulta SQL para atualizar a imagem do usuário
        $comando = "UPDATE tab SET img_app = ? WHERE login = ?";
        $stmt = mysqli_prepare($con, $comando);
        
        // Vincula os parâmetros: "s" para string (Base64 da imagem e o login)
        mysqli_stmt_bind_param($stmt, "ss", $fotox, $loginx);
        
        // Executa a declaração preparada
        mysqli_stmt_execute($stmt);
        
        // Verifica quantas linhas foram afetadas pela execução do comando
        $quant = mysqli_stmt_affected_rows($stmt);
        
        // Verifica se a atualização foi bem-sucedida
        if ($quant > 0) {
            $dados = array("status" => "ok");
        } else {
            $dados = array("status" => "erro", "message" => "Não foi possível atualizar a imagem.");
        }

        mysqli_stmt_close($stmt); // Fecha a declaração preparada
    } else {
        $dados = array("status" => "erro", "message" => "Imagem não recebida.");
    }
} else {
    $dados = array("status" => "não_autenticado", "message" => "Usuário não autenticado.");
}

// Fecha a conexão com o banco de dados
mysqli_close($con);

// Retorna o status como JSON
echo json_encode($dados);
?>
