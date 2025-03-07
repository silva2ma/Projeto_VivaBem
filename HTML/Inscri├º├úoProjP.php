<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="../IMAGENS/logo.png" type="image/x-icon">
    <title>VivaBem | Inscrição - Participante</title>
</head>

<style>
  .container{
    background-color: #fff;
    border-radius: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    position: relative;
    overflow: hidden;
    width: 100%;
    max-width: 600px; /* Reduzido de 770px para 600px */
    min-height: 400px; /* Reduzido de 480px para 400px */
    margin: 20px;
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
.container button {
    border-color: #333;
    color: #512da8;
    font-size: 15px;
    padding: 10px 0; /* Ajuste o padding para ser mais responsivo */
    border: 1px solid transparent;
    border-radius: 8px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 10px;
    cursor: pointer;
    width: 40%; /* Faz o botão ocupar toda a largura */
}

@media (max-width: 768px) {
    .container button {
        padding: 10px 0; /* Ajuste no padding dos botões */
        font-size: 14px; /* Ajuste no tamanho da fonte dos botões */
    }
}

@media (max-width: 480px) {
    .container button {
        font-size: 12px; /* Tamanho da fonte menor em telas muito pequenas */
    }
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
  


   .form-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .form-row div {
        flex: 1;
        margin-right: 10px;
    }

    .form-row div:last-child {
        margin-right: 0;}

        .form-check {
    transform: scale(0.8); /* Reduz o tamanho do checkbox */
    margin-right: 5px; /* Espaço entre o checkbox e o rótulo */
}


select {
            background-color: #eee;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 8px;
            width: 100%;
            margin: 8px 0;
            outline: none;
        }

        .form-check {
            transform: scale(0.8);
            margin-right: 5px;
        }
</style>

<body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; background-color: #c9d6ff;
background: linear-gradient(to right, #e2e2e2, #c9d6ff); align-items: center;    display: flex;
    justify-content: center; /* Alinha horizontalmente no centro */
    align-items: center; /* Alinha verticalmente no centro */
    min-height: 100vh; /* Garante que o corpo ocupe toda a altura da tela */
    margin: 0; /* Remove margens padrão do body */">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <div class="container">
        <button type="button" onclick="window.history.back();" style="left: -90px; border: none; background: transparent; cursor: pointer; top: 15px; position: absolute;">
        <i class="fas fa-arrow-left"> </i>
    </button>
    
    <div class="form signupform">
        <form action="https://vivabem.serv00.net/projeto/site/inscricaoP.php" method="POST"> <br>
            <h1>Inscrição - Projeto Participante</h1>
            <img style="width: 45%;" src="../IMAGENS/7.png">
            <br>
          <div class="form-row">
            <div>
                <input type="text" id="nome" name="nome"  placeholder="Nome"  required>
            </div>
            <div>
                <input type="text" id="sobrenome" name="sobrenome"  placeholder="Sobrenome">
            </div>
        </div>
                <input type="email" placeholder="E-mail" name="email">
                <input type="date" placeholder="Data Nascimento" name="datanasc">
                <select id="idades" name="idade">
                    <option value="">Selecione sua idade</option>
                    <option value="18">18-24</option>
                    <option value="25">25-40</option>
                    <option value="41">41-64</option>
                    <option value="65">+65</option>
    </select>
                <input type="tel" maxlength="15" onkeyup="handlePhone(event)"  placeholder="Telefone" name="tel">

                <select  name="projeto">
                    <option value="">Selecione 1 atividade</option>
                    <option>Entre laços - Bailes da Terceira Idade</option>
                    <option>Entre laços - Rodas de Conversa</option>
                    <option>Entre laços - Tarde de Jogos</option>
                    <option>Entre laços - Palestras e workshops</option>
                    <option>Conecte-se - Assistência Tecnológica</option>
                    <option>Energize+ - Caminhadas Matinais e Dicas de Exercíci</option>
    </select>  
<button class="signupBtn" type="submit" class="entrar">Enviar</button>  <br>      
        </form>  
              </div>
              <script>
                const handlePhone = (event) => {
  let input = event.target
  input.value = phoneMask(input.value)
}

const phoneMask = (value) => {
  if (!value) return ""
  value = value.replace(/\D/g,'')
  value = value.replace(/(\d{2})(\d)/,"($1) $2")
  value = value.replace(/(\d)(\d{4})$/,"$1-$2")
  return value
}
              </script>

</body>
</html>