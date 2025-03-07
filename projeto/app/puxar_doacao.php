<?php
// Conexão com o banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

// Verifica se a conexão foi bem-sucedida
if ($con->connect_error) {
    echo json_encode(array("erro" => "Falha na conexão com o banco de dados"));
    exit();
}

// Verifica se a requisição foi feita pelo método POST e se o parâmetro 'login' está presente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['login'];

    // Verifica se o email está no formato correto (opcional)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(array("erro" => "Email inválido"));
        exit();
    }

    // Prepara a consulta SQL para evitar SQL injection
    $sql = "SELECT nome, email, valor, data FROM doavalor WHERE email= ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o usuário foi encontrado
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(array("nome" => $row['nome'], "email" => $row['email'], "valor" => $row['valor'], "data" => $row['data']));
    } else {
        echo json_encode(array("erro" => "Usuário não encontrado"));
    }

    // Fecha o statement
    $stmt->close();
} else {
    // Caso o método não seja POST ou o parâmetro não esteja presente
    echo json_encode(array("erro" => "Método inválido ou parâmetro ausente"));
}

// Fecha a conexão com o banco de dados
$con->close();
?>
