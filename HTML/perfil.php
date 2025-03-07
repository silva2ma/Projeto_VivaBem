<?php
  session_start();
  ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../IMAGENS/logo.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>VivaBem | Meu perfil</title>
</head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body{
    background-color: #c9d6ff;
    background: linear-gradient(to right, #e2e2e2, #c9d6ff);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100vh;
}

.container{
    background-color: #fff;
    border-radius: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    position: relative;
    overflow: hidden;
    width: 100%;
      max-width: 770px;
      min-height: 690px;
    

}

.container p{   
    font-size: 17px;
    line-height: 20px;
    letter-spacing: 0.3px;
    margin: 20px 0;
}

.container span{
    font-size: 12px;
}

.container a{
    color: #333;
    font-size: 13px;
    text-decoration: none;
    margin: 15px 0 10px;
}

.container button{
   border-color: #333;
    color: #512da8;
    font-size: 15px;
    padding: 10px 45px;
    border: 1px solid transparent;
    border-radius: 8px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 10px;
    cursor: pointer;
}

.container button.hidden{
    background-color: transparent;
    border-color: #fff;
}

.container form{
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    height: 100%;
}

.container input{
    background-color: #eee;
    border: none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 8px;
    width: 100%;
    outline: none;
}

.form-container {
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;
    transition: all 0.6s ease-in-out;
  }
  



  
  /* Toggle Animation */
.container.active .sign-in {
    transform: translateX(-100%);
}


.container.active .sign-up {
    right: 0; /* Bring the sign-up form into view from the right */
    opacity: 1;
}
  

@keyframes move{
    0%, 49.99%{
        opacity: 0;
        z-index: 1;
    }
    50%, 100%{
        opacity: 1;
        z-index: 5;
    }
}



.toggle-container{
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: all 0.6s ease-in-out;
    border-radius: 150px 0 0 100px;
    z-index: 1000;
}

.container.active .toggle-container{
    transform: translateX(-100%);
    border-radius: 0 150px 100px 0;
}

.toggle{
    background-color: #290952;
    height: 100%;
    background: linear-gradient(to right, #722277, #290952);
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: all 0.6s ease-in-out;
}

.container.active .toggle{
    transform: translateX(50%);
}

.toggle-panel{
    position: absolute;
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 30px;
    text-align: center;
    top: 0;
    transform: translateX(0);
    transition: all 0.6s ease-in-out;
}

.toggle-left{
    transform: translateX(-200%);
}

.container.active .toggle-left{
    transform: translateX(0);
}

.toggle-right{
    right: 0;
    transform: translateX(0);
}

.container.active .toggle-right{
    transform: translateX(200%);
}


.input-container {
    position: relative;
    margin-bottom: 20px;
}

.input-container input {
    width: 120%;
    padding: 10px 40px 10px 10px; /* Espaço para o ícone */
    border: none;
    border-radius: 8px;
    background-color: #eee;
    outline: none;
    font-size: 16px;
    position: relative;
    left:-21.8px;
}

.input-container i {
    position: absolute;
    right: 10px; /* Alinhado à direita */
    top: 50%;
    transform: translateY(-50%); /* Centraliza verticalmente */
    font-size: 20px;
    cursor: pointer;
}


section{
    position: relative;
    width: 400px;
    height: 60px;
}
section input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 0 20px;
    border: 0;
    outline: none;
    background: #f1f1f1;
    font-size: 18px;
    border-radius: 8px;
    box-shadow: 0 0 5px 0 #000;
}
#icon{
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    background: url('../IMAGENS/show.png');
    background-size: cover;
    width: 30px;
    height: 30px;
    cursor: pointer;
}
#icon.hide{
    background: url('../IMAGENS/hide.png');
    background-size: cover;
}
</style>


<body >

<div class="container">
  <h1></h1>
  <!-- Signup Form -->
  <div class="form-container sign-up">
    <button type="button"  onclick="window.location.href='https://vivabem.serv00.net/HTML/Home.php'"  style="left: -10px; border: none; background: transparent; cursor: pointer; position: absolute;">
        <i class="fas fa-arrow-left"> </i>
    </button>
    <form action="https://vivabem.serv00.net/projeto/site/alterar.php" method="post">
      <h1>Meu Perfil</h1>
      <h6>Editar</h6>
       <?php
    $con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");
         
    $email=$_SESSION['usuario'];
    $comando ="SELECT*FROM tab WHERE login = '$email'" ;


//Executa a inserção no banco de dados                
$resulta = mysqli_query($con,$comando);
$array = mysqli_fetch_array($resulta);
$nome=  $array["nome"];
         

     echo" <i class=' mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16'></i>

      
        <div class='input-container'>
          <input type='text' placeholder='Nome' required name='nomes' value='$nome'>
        </div>
        <div class='input-container'>
          <input type='email' placeholder='Email' required name='usuario' value='$email'>
        </div>
        <div class='input-container'>
          <input type='password' placeholder='Nova Senha' name='senha'>
        </div>
        <div class='input-container'>
          <input type='password' placeholder='Confirmar Senha' name='senha2'>" ?>
        </div>
        <button type="submit">Salvar Alterações</button>
     
      <span></span>
     

    </form>
  </div>
<?php
// Conexão com o banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");

// Inicia a sessão para obter o email do usuário logado
$email = $_SESSION['usuario'];

// Busca os dados do usuário no banco
$comando = "SELECT * FROM tab WHERE login = '$email'";
$resulta = mysqli_query($con, $comando);
$array = mysqli_fetch_array($resulta);
$img = $array["img"]; // Nome da imagem atual do usuário
?>

<!-- Formulário -->
<form action="https://vivabem.serv00.net/projeto/site/upload.php" method="POST" enctype="multipart/form-data">
    <!-- Campo oculto com o email do usuário -->
    <input type="hidden" name="usuario" value="<?php echo htmlspecialchars($email); ?>">

    <!-- Exibição da imagem e input de upload -->
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <!-- Exibe a imagem atual do usuário -->
                <img src="../projeto/site/img_users/<?php echo htmlspecialchars($img); ?>" 
                     width="220px" height="220px" alt="Imagem do usuário" 
                     style="border-radius: 50%; object-fit: cover;">

                <!-- Input para selecionar a nova imagem -->
                <input type="file" class="file-upload" name="imagem" id="imagem" 
                       style="height: 220px; width: 220px; z-index: 1; position: absolute; opacity: 0;" 
                       required>

                <!-- Botão de envio -->
                <button type="submit" 
                        style="background-color: transparent; cursor: pointer; color: rgb(209, 135, 236); position: absolute; top: 27%; left: 55%; font-size: xx-large;">
                    <i class="bi bi-send-arrow-down"></i>
                </button>
            </div>
        </div>
    </div>
</form>
</body>
</html>