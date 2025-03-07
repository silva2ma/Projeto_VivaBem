<?php
        $con=mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd"); // o usuario e a senha do banco e o nome do banco de dados
        if(mysqli_connect_errno()){
            exit("Erro ao conectar-se ao banco de dados: ".mysqli_connect_error());
        }

       $recebe_email = $_POST['email'];
        $comando= "select * from tab where login='$recebe_email'";//seleciona o dado da tabela e executa a função
        $resulta = mysqli_query($con,$comando);
       
        
        
        if($r = mysqli_fetch_array($resulta)){
            
            session_start(); 
            $_SESSION['email'] = $recebe_email;
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
                title: 'Email Verificado com Sucesso!',
                text: 'Mensagem Enviada!, color:white',
                text: 'Você será redirecionado para realizar a nova senha!',
                icon: 'success',
                iconColor:'white',
                color: 'white',
                timer: 3000, // Duração do SweetAlert em milissegundos
                showConfirmButton: false // Não exibe o botão de confirmação
            });

            // Recarrega a página após o SweetAlert desaparecer
            setTimeout(() => {
                location.href = 'https://vivabem.serv00.net/HTML/redefinicaoSenha.html';
            }, 3500); // Tempo para recarregar dps do sweet alert
    </script>
</body>
</html>
";
        }
        else{
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
                title: 'Email Inválido!',
                text: 'Mensagem Enviada!, color:white',
                text: 'Digite Novamente o Email!',
                icon: 'error',
                iconColor:'white',
                color: 'white',
                timer: 3000, // Duração do SweetAlert em milissegundos
                showConfirmButton: false // Não exibe o botão de confirmação
            });

            // Recarrega a página após o SweetAlert desaparecer
            setTimeout(() => {
                location.href = 'https://vivabem.serv00.net/HTML/verificaemail.html';
            }, 3500); // Tempo para recarregar dps do sweet alert
    </script>
</body>
</html>
";
        }
        $close = mysqli_close($con);
       
        
?>