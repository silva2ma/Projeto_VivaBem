<?php
session_start();
include "conexao.php"; // Certifique-se de que a conexão com o banco está correta.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém o email do usuário da sessão
    $email = $_SESSION['usuario'];

    // Verifica se o arquivo foi enviado
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $arquivo = $_FILES['imagem'];
        $nomeArquivo = $arquivo['name'];
        $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

        // Valida a extensão do arquivo
        $extPermitidas = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($extensao, $extPermitidas)) {
            echo "Tipo de arquivo não permitido.";
            exit;
        }

        // Define o novo nome do arquivo
        $novoNome = $email . '.' . $extensao;
        $diretorio = "img_users/";

        // Verifica se o diretório existe, caso contrário cria-o
        if (!is_dir($diretorio)) {
            mkdir($diretorio, 0755, true);
        }

        // Move o arquivo para o diretório
        if (move_uploaded_file($arquivo['tmp_name'], $diretorio . $novoNome)) {
            // Atualiza o banco de dados
            $comando = "UPDATE tab SET img='$novoNome' WHERE login='$email'";
            mysqli_query($con, $comando);

            // Redireciona para a página de perfil
            header("Location: https://vivabem.serv00.net/HTML/perfil.php");
            exit;
        } else {
            echo "Erro ao salvar o arquivo.";
        }
    } else {
        echo "Nenhum arquivo foi enviado.";
    }
} else {
    echo "Método inválido.";
}
?>
