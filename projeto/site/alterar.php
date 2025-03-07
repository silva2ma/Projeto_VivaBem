<?php
// Conexão com o banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

// Verifica se a conexão foi estabelecida
if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Obtém os dados do formulário
$nomex = $_POST["nomes"];
$loginx = $_POST["usuario"];
$senhax = $_POST["senha"];
$senha2 = $_POST["senha2"];

// Verifica se as senhas são iguais
if ($senhax !== $senha2) {
    echo "<script>
            alert('As senhas não coincidem! Tente novamente.');
            window.location.href = 'https://vivabem.serv00.net/HTML/perfil.php';
          </script>";
    exit();
}

// Criptografa a senha com MD5
$senhaCriptografada = md5($senhax);

// Usando prepared statements para prevenir SQL injection
$stmt = $con->prepare("UPDATE tab SET senha=?, nome=? WHERE login=?");
$stmt->bind_param("sss", $senhaCriptografada, $nomex, $loginx); // 'sss' indica que todos os três parâmetros são strings

// Executa a declaração
if ($stmt->execute()) {
    session_start();
    $_SESSION['usuario'] = $loginx;
    $_SESSION['nome'] = $nomex;

    // Mensagem de sucesso com redirecionamento
    echo "<script>
            alert('Dados alterados com sucesso!');
            window.location.href = 'https://vivabem.serv00.net/HTML/perfil.php';          
          </script>";
} else {
    // Mensagem de erro
    echo "<script>
            alert('Dados não alterados! Tente novamente.');
            window.location.href = 'https://vivabem.serv00.net/HTML/perfil.php';
          </script>";
}

// Fecha a declaração e a conexão
$stmt->close();
mysqli_close($con);
?>
