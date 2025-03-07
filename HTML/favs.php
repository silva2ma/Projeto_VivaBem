<?php
session_start(); // Inicia a sessão
// Verifica se o usuário está logado, caso contrário, redireciona
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); // Redireciona para a página de login se não estiver logado
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="../IMAGENS/logo.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>VivaBem | Favoritados</title>
  
  <!-- Adiciona SweetAlert -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</head>
<body style="background-color: #ffffff; font-family: 'Gill Sans MT'; margin: 2em;">

 <h1 style="font-size: 12vh;">Meus favoritos</h1>
 <h5 style="color: rgb(21, 7, 112); margin: 0.3em;">Projetos favoritados</h5>

 <style>
    :root {
        --cor-principal: #290952;
        --cor-secundaria: rgb(179, 156, 243);
        --cor-cinza: #000000;
    }

    nav {
        width: 100%;
    }

    nav ol {
        list-style-type: none;
        padding: 0;
        text-align: center;
        font-size: 20px;
        text-align: left;
        margin-left: 20px;
    }

    nav ol li {
        display: inline;
    }

    nav ol li::after {
        content: '/';
        margin-right: 10px;
        font-size:.8em;
        color: var(--cor-cinza);
    }

    nav ol li:last-child::after {
        content: '';
        color: var(--cor-cinza);
    }

    nav ol li a {
        color: var(--cor-principal);
        text-decoration: none;
        margin-right: 10px;
    }

    nav ol li a:hover {
        color: var(--cor-secundaria);
        text-decoration: underline;
    }
</style>

<nav>
    <br>
    <ol>
        <li>
            <a href="../HTML/Home.php">Home</a>
        </li>
        <li>
            <a href="../HTML/perfil.php"> Meu perfil</a>
        </li>
        <li>
            Favoritos
        </li>
    </ol>
</nav>
<br>

<div class="col-md">
    <div class="card p-3" style="border-width: 6px; border-style: solid;
    border-image: linear-gradient(45deg, #32357a, #e9e6ff) 1;
    padding: 10px; border-radius: 15px; background-color: white;">
    <br>
    <?php
        $con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");
        if (!$con) {
            die("Erro ao conectar!! <br>");
        }

        $sql = "SELECT favorito FROM tab WHERE login = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $_SESSION['usuario']);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo $row['favorito'];
        } else {
            echo json_encode(array("erro" => "Usuário não encontrado"));
        }

        $stmt->close();
        $con->close();
    ?>
    <hr>
    <button class="btn btn-danger" onclick="excluirFavorito()">Excluir Favorito</button>
    </div>
</div>

<script>
function excluirFavorito() {
    // Confirmação do SweetAlert antes de excluir
    Swal.fire({
        title: 'Você tem certeza?',
        text: "Você não poderá recuperar este favorito!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sim, excluir!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Faz uma chamada AJAX para o script de exclusão
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "https://vivabem.serv00.net/projeto/site/excluir_favorito.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.status === "success") {
                        Swal.fire(
                            'Excluído!',
                            response.message,
                            'success'
                        ).then(() => {
                            // Redireciona ou atualiza a página
                            location.reload(); // Recarrega a página para atualizar o conteúdo
                        });
                    } else {
                        Swal.fire(
                            'Erro!',
                            response.message,
                            'error'
                        );
                    }
                }
            };
            xhr.send(); // Envia a requisição
        }
    });
}
</script>

</body>
</html>
