<?php
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd"); // Conexão com o banco de dados

if (mysqli_connect_errno()) {
    exit("Erro ao conectar-se ao banco de dados: " . mysqli_connect_error());
}

session_start();
$email = $_SESSION['email'];

// Obtém as senhas do formulário
$senhax = $_POST["senha"] ?? '';
$senha2 = $_POST["senha2"] ?? '';

// Verifica se as senhas são iguais
if ($senhax === $senha2) {
    // Criptografa a nova senha usando MD5
    $senhax_hash = md5($senhax);

    // Prepara a consulta para atualizar a senha
    $comando = "UPDATE tab SET senha='$senhax_hash' WHERE login = '$email'";
    $resulta = mysqli_query($con, $comando);

    if ($resulta) {
        echo "<!DOCTYPE html>
<html lang='en'>
<head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
<body>

<style>
    .swal2-popup {
        background: linear-gradient(to right, #722277, #290952); /* Gradiente azul */
    }
</style>

    <script>
        Swal.fire({
            title: 'Senha Alterada com Sucesso!',
            text: 'Você será redirecionado ao login!',
            icon: 'success',
            iconColor: 'white',
            color: 'white',
            timer: 3000, // Duração do SweetAlert em milissegundos
            showConfirmButton: false // Não exibe o botão de confirmação
        });

        // Redireciona após o SweetAlert desaparecer
        setTimeout(() => {
            location.href = 'https://vivabem.serv00.net/HTML/cadastroLogin.html';
        }, 3500); // Tempo para recarregar depois do sweet alert
    </script>
</body>
</html>
";
    } else {
        echo "<!DOCTYPE html>
<html lang='en'>
<head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
<body>

<style>
    .swal2-popup {
        background: linear-gradient(to right, #722277, #290952); /* Gradiente azul */
    }
</style>

    <script>
        Swal.fire({
            title: 'Erro ao alterar a senha!',
            text: 'Tente novamente!',
            icon: 'error',
            iconColor: 'white',
            color: 'white',
            timer: 3000, // Duração do SweetAlert em milissegundos
            showConfirmButton: false // Não exibe o botão de confirmação
        });

        // Redireciona após o SweetAlert desaparecer
        setTimeout(() => {
            location.href = 'https://vivabem.serv00.net/HTML/redefinicaoSenha.html';
        }, 3500); // Tempo para recarregar depois do sweet alert
    </script>
</body>
</html>
";
    }
} else {
    echo "<!DOCTYPE html>
<html lang='en'>
<head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
<body>

<style>
    .swal2-popup {
        background: linear-gradient(to right, #722277, #290952); /* Gradiente azul */
    }
</style>

    <script>
        Swal.fire({
            title: 'Senhas Incompatíveis!',
            text: 'Tente Novamente!',
            icon: 'error',
            iconColor: 'white',
            color: 'white',
            timer: 3000, // Duração do SweetAlert em milissegundos
            showConfirmButton: false // Não exibe o botão de confirmação
        });

        // Redireciona após o SweetAlert desaparecer
        setTimeout(() => {
            location.href = 'https://vivabem.serv00.net/HTML/redefinicaoSenha.html';
        }, 3500); // Tempo para recarregar depois do sweet alert
    </script>
</body>
</html>
";
}

// Fecha a conexão com o banco de dados
mysqli_close($con);
?>
