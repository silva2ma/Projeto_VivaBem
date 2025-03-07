<?php
  session_start();
  
// Conexão com o banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

// Verifica a conexão
if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Obtém os dados do formulário
$nomex = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$datax= $_POST["datanasc"];
$idade = $_POST["idade"];
$telefone= $_POST["tel"];
$projeto= $_POST["projeto"];

// Verifica a data recebida
if ($datax) {
    $dateTime = DateTime::createFromFormat('Y-m-d', $datax);
    if ($dateTime !== false) {
        $datax = $dateTime->format('Y-m-d'); // Formata corretamente para o banco
    } else {
        die("Formato de data inválido"); // Mensagem de erro
    }
} else {
    die("A data não pode estar vazia");
}

// Prepara a declaração para inserção no banco
$stmt = $con->prepare("INSERT INTO inscVolunt(nome, sobrenome, email, datanasc, idade, telefone, projeto) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nomex, $sobrenome, $email, $datax, $idade, $telefone, $projeto);

// Executa a declaração
if ($stmt->execute()) {
    // Redireciona após o sucesso
    echo "<!DOCTYPE html>
<html lang='en'>
<head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
<body>

<style>
    .swal2-popup{
        background-color: white;
    }
</style>

    <script>
        Swal.fire({
            text: 'Inscrito Com Sucesso!',
            color: '#722277',
            timer: 3000, // Duração do SweetAlert em milissegundos
            showConfirmButton: false // Não exibe o botão de confirmação
        });

        // Recarrega a página após o SweetAlert desaparecer
        setTimeout(() => {
            location.href = 'https://vivabem.serv00.net/HTML/Home.php';
        }, 3500); // Tempo para recarregar depois do sweet alert
    </script>
</body>
</html>";
} else {
    // Retorna um erro em caso de falha
    echo "<!DOCTYPE html>
<html lang='en'>
<head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
<body>

<style>
    .swal2-popup{
       background-color: white;
    }
</style>

    <script>
        Swal.fire({
            text: 'Tente Novamente!',
            color: '#722277',
            timer: 3000, // Duração do SweetAlert em milissegundos
            showConfirmButton: false // Não exibe o botão de confirmação
        });

        // Recarrega a página após o SweetAlert desaparecer
        setTimeout(() => {
            location.reload();
        }, 3500); // Tempo para recarregar depois do sweet alert
    </script>
</body>
</html>";
}

// Fecha as conexões
$stmt->close();
$con->close();
?>
