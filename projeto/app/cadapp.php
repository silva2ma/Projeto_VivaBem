<?php
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd"); // Dados do banco

// Verifica se os dados foram recebidos
$nomex = $_POST["nomes"];
$loginx = $_POST["usuario"];
$senhax = $_POST["senha"];
$datax = $_POST["datax"];

// Criptografar a senha com MD5
$senhax = md5($senhax);

// Verificar e formatar a data
if ($datax) {
    $dateTime = DateTime::createFromFormat('Y-m-d', $datax);
    if ($dateTime !== false) {
        $datax = $dateTime->format('Y-m-d'); // Formata corretamente para o banco
    } else {
        die("Formato de data inválido");
    }
} else {
    die("A data não pode estar vazia");
}

// Carregar a imagem padrão como BLOB
$imgPath = 'http://vivabem.serv00.net/IMAGENS/perfil%20(1).png';  // Substitua pelo caminho da imagem padrão
$imgData = file_get_contents($imgPath);

// Prepara a consulta SQL com prepared statement para evitar injeção SQL
$comando = $con->prepare("INSERT INTO tab (nome, login, senha, datanasc, img_app) VALUES (?, ?, ?, ?, ?)");
$comando->bind_param("sssss", $nomex, $loginx, $senhax, $datax, $imgData);

// Executa a consulta e verifica o sucesso
if ($comando->execute()) {
    $dados = array("status" => "ok");
} else {
    $dados = array("status" => "erro");
}

// Fecha a conexão com o banco de dados
$comando->close();
$con->close();

echo json_encode($dados);
?>
