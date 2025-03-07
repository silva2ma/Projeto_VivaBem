<?php
// Conexão com o banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

// Verifica a conexão
if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Obtém os dados do formulário
$nomex = $_POST["nomes"];
$sobrenome = $_POST["sobrenome"];  
$loginx = $_POST["usuario"];
$senhax = $_POST["senha"];
$datax = $_POST["datax"];
$idade = $_POST["idade"];
$tel = $_POST["telefone"];

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

// Criptografa a senha usando MD5
$senhax = md5($senhax);

// Prepara a declaração para inserção no banco
$stmt = $con->prepare("INSERT INTO voluntario(nome, sobrenome, email, senha, datanasc, idade, telefone) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nomex, $sobrenome, $loginx, $senhax, $datax, $idade, $tel);

// Executa a declaração
if ($stmt->execute()) {
    // Redireciona após o sucesso
    echo "<!DOCTYPE html>
<html lang='en'>
<head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
<body>

<style>
    .swal2-popup{
        background: linear-gradient(to right, #722277, #290952); /* Gradiente azul */
    }
</style>

    <script>
        Swal.fire({
            title: 'Cadastro feito com Sucesso!',
            text: 'Você será redirecionado ao login!',
            icon: 'success',
            iconColor: 'white',
            color: 'white',
            timer: 3000, // Duração do SweetAlert em milissegundos
            showConfirmButton: false // Não exibe o botão de confirmação
        });

        // Recarrega a página após o SweetAlert desaparecer
        setTimeout(() => {
            location.href = 'https://vivabem.serv00.net/HTML/voluntario%20(1).html';
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
        background: linear-gradient(to right, #722277, #290952); /* Gradiente azul */
    }
</style>

    <script>
        Swal.fire({
            title: 'Erro!',
            text: 'Tente Cadastrar-se Novamente!',
            icon: 'error',
            iconColor: 'white',
            color: 'white',
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
