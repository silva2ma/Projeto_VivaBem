<?php
session_start();

$loginx = $_POST["usuario"] ?? '';
$senhax = $_POST["senha"] ?? '';

// Usar prepared statements para prevenir SQL injection
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Criptografa a senha usando MD5
$senhax_hash = md5($senhax);

// Preparar a consulta para login do usuário
$stmt = $con->prepare("SELECT * FROM voluntario WHERE email=? AND senha=?");
$stmt->bind_param("ss", $loginx, $senhax_hash);
$stmt->execute();
$result = $stmt->get_result();

// Verificação de acesso para um usuário específico
if ($loginx === 'tccetelg2024@gmail.com' && $senhax === 'VivaADM!') {
    header("Location: https://vivabem.serv00.net/projeto/site/pag_adm.php");
    exit();
} elseif ($result->num_rows > 0) {
    $r = $result->fetch_assoc();
    $_SESSION['usuario'] = $loginx; // Armazenando o nome de usuário em vez de um número estático

    echo "<script>alert('Login Ok! Bem Vindo(a)');</script>";
    header("Location: https://vivabem.serv00.net/HTML/ProjetosVoluntario.html");
    exit(); // Garantir que nenhum código adicional seja executado após o redirecionamento
} else {
    echo "<script>
            alert('Erro: Cadastro incompleto! Tente novamente!');
            window.location.href = 'https://vivabem.serv00.net/HTML/voluntario%20(1).html';
          </script>";
}

$stmt->close();
$con->close(); // Fechar a conexão com o banco de dados
?>
