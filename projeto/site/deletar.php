<?php
session_start();
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['usuario'])) {
    $loginx = $_SESSION['usuario'];

    // Verifica se a exclusão foi confirmada
    if (isset($_GET['confirmar']) && $_GET['confirmar'] == '1') {
        // Usando prepared statements para segurança
        $stmt = $con->prepare("DELETE FROM tab WHERE login = ?");
        $stmt->bind_param("s", $loginx);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: https://vivabem.serv00.net/");
            exit();
        } else {
            echo "Erro: Nenhum registro foi deletado ou o login não foi encontrado.";
        }

        $stmt->close();
    } else {
        // Exibe o alerta de confirmação
        echo "<!DOCTYPE html>
<html lang='en'>
<head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script></head>
<body>
    <style>
        .swal2-popup {
            background-color: transparent;
        }
    </style>
    <script>
        Swal.fire({
            title: 'Deseja realmente sair?',
            text: 'Você será desconectado.',
            icon: 'warning',
            iconColor: 'red',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, sair!',
            cancelButtonText: 'Cancelar',
            color: '#722277',
            background: 'white',
            customClass: {
                popup: 'swal2-popup-custom'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // Redireciona para o mesmo script com a confirmação
                window.location.href = window.location.href + '?confirmar=1';
            } else if (result.isDismissed) {
                // Se o usuário cancelar, redireciona para a página de privacidade
                window.location.href = 'https://vivabem.serv00.net/HTML/Privacidade.php';
            }
        });
    </script>
</body>
</html>";
    }
} else {
    echo "Erro: Usuário não foi especificado na sessão.";
}

mysqli_close($con);
?>
