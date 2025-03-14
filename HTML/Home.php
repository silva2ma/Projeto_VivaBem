<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="../IMAGENS/logo.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>VivaBem | Home</title>
</head>
<body style="    background-color: #ffffff ;   font-family:  'Gill Sans MT'; ">

 <!-- Inicio do corpo da página -->
  
    <style>
*{
  margin: 0;
  padding: 0;
  font-family: 'Gill Sans MT'; ;
  box-sizing:  border-box;
}
hero{
  width: 100%;
  min-height: 100vh;
  background: #ecaeff;
  color: rgb(255, 255, 255);
}
nav{
  background: linear-gradient(#e5def7  40%, #ffffff 100%);
  position: absolute;
  width: 100%;
  padding: 10px 10%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  
}
.user-pic{
width: 40px;
border-radius:20px 20px;
cursor: pointer;
margin-left: 30px;}

nav ul{
  width: 100%;
  text-align: right;
}
 nav ul li{
  display: inline-block;
  list-style: none;
  margin: 10px 20px;
  padding: 8px 20px;
 }

nav ul li a{
  color: #000000;
  text-decoration: none;
  
 }

 .sub-menu-wrap{
  position: absolute;
  top: 100%;
  right: 10%;
  width: 320px;
  max-height: 0px;
  overflow: hidden;
  transition: max-height 0.5s;
    }

    .sub-menu-wrap.open-menu{
      max-height: 400px;
    }


.sub-menu{
   background:  #722277 ;
  padding: 20px;
  margin: 10px; 
}
.user-info{
  display: flex;
  align-items: center;
}
.user-info h3{
  font-weight: 500;
color: white;}
  .user-info img{
    width: 60px;
    border-radius: 50%;
    margin-right: 15px ;
  }
  .sub-menu hr{
    border: 0;
    height: 1px;
    width: 100%;
    background: #ffffff;
    margin: 15px 0 10px;
  }

  .sub-menu-link{
    color: #ffffff;
    margin: 12px 0;
    text-decoration: none;
    align-items: center;
    display: flex;
  }
  
  .sub-menu-link p{
    width: 100%;
  }
  .sub-menu-link img{
    width: 40px;
    background: #ffffff;
    border-radius: 50%;
    padding: 9px;
    margin-right: 15px;
  }

  .sub-menu-link span{
    font-size: 22px;
    transition: transform 0.5s ;
  }
  .sub-menu-link:hover span{
    transform: translateX(5px);
  }

  .sub-menu-link:hover p{
    font-weight: 600;
  }
  .offcanvas-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 15px; /* Ajuste conforme necessário */
}

.navbar-nav {
    text-align: center; /* Centraliza o texto dos links */
}
</style>
  
    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
  </body> <!-- Fim do corpo da página -->

      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <div class="header__logo">
            <!-- LOGO SITE -->

  <center>     <img src="../IMAGENS/logo.png" alt="logo" style="border-radius: 100%; height: 100px; right: 100px ; " > </center> 
        </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      
          <style>
  .nav-item{ font-size: 19px; padding: 8px 20px; }

 .nav-link{ color: rgb(0, 0, 0); font-weight: 500; position: relative;}
 
 .nav-link:hover, .nav-link.active{color: black;}
 
 @media(min-width:991px){ .nav-link::before{content: "";
 position: absolute; bottom: 0;left:50%;transform: translateX(-50%);width: 0;height: 2px;background-color: rgb(75, 5, 141);
 visibility: hidden;transition: 0.3s ease-in-out ;
 }
 .nav-link:hover::before, .nav-link.active::before  {visibility: visible ;width: 100%;}}

 
</style>
          
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-2">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#not">Notícias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#doe">Doe Aqui</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#projetos">Projetos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#sobre">Sobre Nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#">APP</a>
                </li>
                <?php
// Conexão com o banco de dados
$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");
if (!$con) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Inicia a sessão para obter o email do usuário logado
session_start();
$email = $_SESSION['usuario'];

// Busca os dados do usuário no banco
$comando = "SELECT * FROM tab WHERE login = '$email'";
$resulta = mysqli_query($con, $comando);

// Verifica se o resultado retornou algum dado
if ($resulta && mysqli_num_rows($resulta) > 0) {
    $array = mysqli_fetch_array($resulta);
    // Pega o nome da imagem do banco
    $img = $array["img"];

    // Atualiza a variável de sessão com o nome da imagem (opcional)
    $_SESSION['img'] = $img;
} else {
    // Define uma imagem padrão caso não encontre o usuário
    $img = "perfil (1).png";
}
?>
             
<li class="nav-item">
    <img src="https://vivabem.serv00.net/projeto/site/img_users/<?php echo htmlspecialchars($img); ?>" 
         style="width: 65px; height: 65px; position: absolute; top: 20px; right: 80px; border-radius: 100%; object-fit: cover; border: 2px solid #722277;"  
         class="user-pic"  
         onclick="toggleMenu()">
</li>
               
                        <div class="sub-menu-wrap" id="subMenu" style="border-radius:19%; position: absolute; left:75%;">
          <div class="sub-menu">
            <div class="user-info">
              <img style="height: 80px; width: 90px; border: 2px ; border-radius: 50%; object-fit: cover; " 
              src="https://vivabem.serv00.net/projeto/site/img_users/<?php  echo htmlspecialchars($img); ?>" alt="">
                <p style="color: white;"><?php
                 
                    $nome = $_SESSION["nome"];
                    echo "Olá " . $nome;?> </p>
               
            </div>
            <hr>

            <a  href="https://vivabem.serv00.net/HTML/perfil.php" class="sub-menu-link">
              <img src="../IMAGENS/profile.png">
              <p style="color: white;">Editar perfil</p>
              <span>></span>
            </a>

            <a href="https://vivabem.serv00.net/HTML/Privacidade.php" class="sub-menu-link">
              <img src="../IMAGENS/privacy.png">
              <p style="color: white;">Privacidade</p>
              <span>></span>
            </a>

            <a href= "https://vivabem.serv00.net/HTML/Suporte.html" class="sub-menu-link">
              <img src="../IMAGENS/support.png">
              <p style="color: white;">Suporte</p>
              <span>></span>
            </a>
            <hr>
           <a href="#" class="sub-menu-link" onclick="confirmLogout(event)">
    <img src="../IMAGENS/logout.png">
    <p style="color: white;">Sair</p>
    <span>></span>
</a>

<script>
    function confirmLogout(event) {
        event.preventDefault(); // Impede a navegação padrão do link
        
        // Usando SweetAlert para a confirmação
        Swal.fire({
            title: 'Deseja realmente sair?',
            text: 'Você será desconectado.',
            icon: 'warning',
            iconColor:'red',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, sair!',
            cancelButtonText: 'Cancelar',
            // Mudando a cor do texto
            color: '#722277', // Cor do texto
            background: 'white', // Fundo do alert
            // Personalizando o estilo do popup
            customClass: {
                popup: 'swal2-popup-custom' // Classe personalizada para aplicar estilos adicionais
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // Se o usuário confirmar, redireciona para a página de logout
                window.location.href = 'https://vivabem.serv00.net/'; // Substitua "URL_DO_LOGOUT" pela URL real
            }
        });
    }
</script>



          </div>
        </div>
                
              </ul>
              
            </div>
          </div>
          
          <div class="d-flex">
           
          </div>
        </div>
      </nav>

   
    <script>
    let subMenu = document.getElementById("subMenu");
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
    }
      
    
      
   </script>

      
<br><br><br><br>
<!-- gif <img  id="carrinho"  src="../IMAGENS/bubble-gum-blue-piggy-bank-with-bitcoin-coin.gif"> --> 

<div class=" mb-xl-7 mb-5">
  <style>
     :root{
    --red:#722277;
    --white:#fff;
    --dark:#1e1c2a;
}
body{
    color: var(--dark);
    background: var(--white);
}
.navigation{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 40px;
    box-shadow: 0 0.1rem 0.5rem #ccc;
    width: 100%;
    background: var(--white);
    transition: all 0.5s;
    position: fixed;
}
.navigation .logo{
    color: var(--red);
    font-size: 1.7rem;
    font-weight: 600;
}
.logo span{
    color: var(--dark);
}
.navigation ul{
    display: flex;
    align-items: center;
    gap: 5rem;
}
.navigation ul li a{
    color: var(--dark);
    font-size: 17px;
    font-weight: 500;
    transition: all 0.5s;
}
.navigation ul li a:hover{
    color: var(--red);
}
.navigation i{
    cursor: pointer;
    font-size: 1.5rem;
}
.menu{
    cursor: pointer;
    display: none;
}
.menu .bar{
    display: block;
    width: 28px;
    height: 3px;
    border-radius: 3px;
    background: var(--dark);
    margin: 5px auto;
    transition: all 0.3s;
}
.menu .bar:nth-child(1),
.menu .bar:nth-child(3){
    background: var(--red);
}
.home{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0px 10%;
}
.home-text{
    max-width: 37rem;
}
.home-text .text-h4{
    font-size: 1.5rem;
    color: var(--red);
    margin-bottom: 1rem;
}
.home-text .text-h1{
    font-size: 4rem;
    margin-bottom: 1rem;
    line-height: 4rem;
}
.home-text p{
    margin-bottom: 4rem;
}
.home-btn{
    padding: 15px 45px;
    background: var(--red);
    color: var(--white);
    border-radius: 10px;
    font-weight: 700;
    transition: all 0.5s;
    border-radius: 20px;
}
.home-btn:hover{
    background: #290952;
    color: white;
}
.home-img img{
    width: 100%;
}
@media (max-width:785px) {
    .navigation{
        padding: 18px 20px;
    }
    .menu{
        display: block;
    }
    .menu.ativo .bar:nth-child(1){
      transform:  translateY(8px) rotate(45deg);
    }
    .menu.ativo .bar:nth-child(2) {
        opacity: 0;
    }
    .menu.ativo .bar:nth-child(3){
        transform: translateY(-8px) rotate(-45deg);
    }
    .nav-menu{
        position: fixed;
        right: -100%;
        top: 70px;
        width: 100%;
        height: 100%;
        flex-direction: column;
        background: var(--white);
        gap: -10px;
        transition: 0.3s;
    }
    .nav-menu.ativo{
        right: 0;
    }
    .nav-item{
        margin: 16px 0;
    }
    /*main*/
    .home{
        padding: 100px 2%;
        flex-direction: column;
        text-align: center;
        overflow: hidden;
        gap: 5rem;
    }
    .home .text-h4{
        font-size: 15px;
    }
    .home .text-h1{
        font-size: 2.5rem;
        line-height: 3rem;
    }
    .home p{
        font-size: 15px;
    }
    .home-img{
        width: 125%;
    }
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    list-style: none;
    text-decoration: none;
}
    </style>
 
  
</head>
<body>
  
  <main>
  <section class="home">
      <div class="home-text">
          <h4 class="text-h4">Bem-vindo ao</h4>
          <h1 class="text-h1" style="font-size: 100px; font-weight: bold;">VivaBem</h1> <br>
         <span style="font-size: 21px; color: #000; text-align: justify;">Espaço online dedicado ao entretenimento dos idosos, visando conectar indivíduos dispostos 
          a doar seu tempo e habilidades sem fins lucrativos ou projetos que buscam apoio voluntário</span> 
          <br><br><strong style="font-size: 19px;">Faça a diferença e clique abaixo para mais informações</strong> <br><br><br>
          <a href="../HTML/voluntario (1).html" class="home-btn">Seja Voluntário</a>
      </div>
      <div class="home-img">
            <img src="../IMAGENS/sobre nós-Photoroom.png" alt="">
      </div>
  </section>
</main>
  
  <div style="text-align: center;">
  <audio autoplay="autoplay" controls="controls" style="width: 70%; margin: 1em; ">
    <source src="https://vivabem.serv00.net/AUDIOS/home.mp3" type="audio/mp3" />
    seu navegador não suporta HTML5
    </audio>
</div>
  
<br><br>
<!-- NOTICIAS -->  
<style>
        .text-center {
            text-align: center;
            margin-bottom: 2rem; /* Ajuste o espaçamento conforme necessário */
        }

        .text-uppercase {
            text-transform: uppercase;
        }
        .ls-md {
            letter-spacing: 0.1em; /* Espaçamento das letras */
        }

        .fw-semibold {
            font-weight: 600; /* Peso da fonte */
        }

        .card {
            margin-bottom: 1.5rem; /* Espaçamento entre os cartões */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Sombra para destaque */
            border: none; /* Remove a borda padrão dos cartões */
            border-radius: 8px; /* Adiciona borda arredondada aos cartões */
        }

        .card-img-top {
            border-bottom: 1px solid #ddd; /* Linha de separação abaixo da imagem */
        }

        .card-title {
            font-size: 0.9rem; /* Tamanho da fonte da data */
            color: #777; /* Cor da data */
        }

        .card-text {
            font-size: 1rem; /* Tamanho da fonte do texto do cartão */
        }
        .row-centered {
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Permite que os cartões se movam para a próxima linha se não houver espaço suficiente */
        }

        @media (max-width: 576px) {
            .card {
                width: 100%; /* Faz com que o cartão ocupe toda a largura disponível */
            }

            .btn {
                font-size: 0.9rem; /* Ajusta o tamanho da fonte em telas menores */
                padding: 8px 16px; /* Ajusta o padding do botão em telas menores */
            }
        }
    </style>
</head>
<body>

      <div class="container mt-5">
        <!-- Título e descrição -->
        <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
            <small class="text-uppercase ls-md" style="color: #ae61b3;"  id="not">NOTÍCIAS SOBRE A POPULAÇÃO IDOSA</small> 
            <h2 class="my-3" style="font-weight: bold;">Últimos Destaques</h2>
        </div>

        <!-- Cards de notícias -->
        <div class="row row-centered">
            <div class="col-12 col-md-4 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 100%; max-width: 400px;">
                    <img class="card-img-top" src="../IMAGENS/SeniorsWalkingOutsidewithDog (1).jpg" alt="Card image">
                    <div class="card-body">
                        <p class="card-title">24/03/2023</p>
                        <h5 class="card-text"><strong>Saúde e andar:</strong> estudo mostra que caminhadas podem prevenir o Alzheimer</h5>
                      <br>  <a class="home-btn" 
                        href="https://veja.abril.com.br/saude/estudo-mostra-que-caminhadas-podem-prevenir-o-alzheimer/" 
                        target="_blank">Veja mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 100%; max-width: 400px;">
                    <img class="card-img-top" src="../IMAGENS/EXERCICIOS (1).png" alt="Card image">
                    <div class="card-body">
                        <p class="card-title">04/06/2024</p>
                        <h5 class="card-text">Conheça os benefícios de treinos de resistência para os idosos</h5> <BR>
                        <a class="home-btn" 
                 href="https://veja.abril.com.br/saude/conheca-os-beneficios-de-treinos-de-resistencia-para-os-idosos/"
                           target="_blank" class="btn">Veja mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 100%; max-width: 400px;">
                    <img class="card-img-top" src="../IMAGENS/saude-terceira-idade-20080403-00.webp" alt="Card image">
                    <div class="card-body">
                        <p class="card-title">30/06/2022</p>
                        <h5 class="card-text">Envelhecer é preciso e inevitável, mas de forma saudável e consciente</h5> <br>
                <a class="home-btn"  href="https://veja.abril.com.br/coluna/coluna-claudio-lottenberg/envelhecer-e-preciso-e-inevitavel-mas-de-forma-saudavel-e-consciente/" 
                           target="_blank" class="btn">Veja mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<br>
<br> 
<br>
<br>
<br>
<br>

<section class="py-xl-9 py-5 bg-light"  style="   
background: linear-gradient(#e5def7 40%, #fff 100%);"style="   
background: linear-gradient(#e5def7 40%, #fff 100%);">
  <div class="container">
     <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
           <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
            <small class="text-uppercase ls-md fw" style="color: #ae61b3;">MISSÃO</small>
              <p class="text-dark text-center" style="text-align: justify; font-size: 50px; font-weight: bold;">Nosso projeto ajuda e transforma</h2>
              <p class="mb-0 text-body" style="font-size: 23px;">
              <strong> Projeto desenvolvido para um envelhecimento ativo </strong> <br> <br> Criado em SBC, São Paulo, em ETEC Lauro Gomes,
              o nosso propósito é ressignificar o envelhecimento, promovendo protagonismo, saúde e bem-estar, defesa aos direitos, visibilidade e intergeracionalidade.
            </p>
           </div>
        </div>
     </div>
</section>


<br><br><br><br><br><br><br>

<!-- SOBRE NÓS -->
<style>
  body {
      margin: 0;
      font-family: Arial, sans-serif;
  }

  .nozes {
      display: flex;
      flex-direction: row; /* Imagem à direita */
      align-items: center;
      max-width: 100%;
      padding: 20px;
      box-sizing: border-box;
  }

  .texto {
      flex: 1;
      padding: 5px;
     /* Cor de fundo do texto */
      border-radius: 5px;
      margin-right: 20px; /* Espaço entre o texto e a imagem */
  }

  .imagem {
      max-width: 50%;
      height: auto; /* Mantém a proporção da imagem */
      border-radius: 5px; /* Opcional: adiciona bordas arredondadas à imagem */
  }

  @media (max-width: 768px) {
      .nozes {
          flex-direction: column; /* Empilha o texto e a imagem verticalmente em telas menores */
          align-items: center;
      }

      .texto {
          margin-right: 0; /* Remove o espaço à direita em telas menores */
          margin-bottom: 20px; /* Espaço entre o texto e a imagem em telas menores */
      }

      .imagem {
          max-width: 90%; /* Ajusta a largura máxima da imagem em telas menores */
      }
  }
</style>
</head>
<body>
<div class="nozes">
  <div class="texto">
    <small class="text-uppercase ls-md fw" style="color: #ae61b3; " id="sobre">QUEM SOMOS</small>
      <h1 style="font-weight: bold;">Sobre nós</h1>
      <p class="mb-0 text-body" style="font-size: 23px; text-align: justify;">
        Bem-vindo(a) ao <strong> VivaBem </strong>,<br> Somos um projeto dedicado á integração dos idosos por meio de plataformas digitais, website e aplicativo mobile,
         de forma que promova entretenimento a comunidade.  <br>
        <BR>Ao lado está a equipe líder desta iniciativa : <br> 
          <i class="latin" style="font-size: 19px;"> <strong> - Alexandre Fonseca,  Juliana Ortega, Julia Silva, Marcella Rodrigues, Miguel Fabiani </strong></i>
      </p>  <br>
                   <a class="home-btn"  
              href="../HTML/Sobrenos.html">Veja mais</a>
  </div>
  <img src="../IMAGENS/foto_grupo.png" alt="Imagem" class="imagem">
</div>

</body>
    <div class="container">
    
<br>
<div class="container" >
    <div class="heading">
         <div class="b" style=" text-align: center;; box-shadow: black; " >

                   <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto "  >
             <br>
             <br>
             <br>
             <h1 style="Font-weight: 900;
                font-size: 35px;
                color: #330b53;
                text-align: justify;
                border-top: 0.1px solid #330b53;;
 margin-bottom: 28px;  "><br> </h1>
<!-- projetos -->

<div class="row">
  <div class="col-lg-8 offset-lg-2 col-12">
     <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
      <small class="text-uppercase ls-md fw" style="color: #ae61b3;">PORTIFÓLIO</small>
        <h2 class="my-3" style="font-weight: bold;" id="projetos">Nossos Projetos</h2>
        <p class="mb-0 text-body">
          Conheça abaixo os nossos projetos <br>
        </p>
     </div>
  </div>
</div>

<!DOCTYPE html>
<html lang="en">

<head>
   <met charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reaponsive CSS Cards</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">

</head>
<style>
  
 .blog-slider {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fff;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 400px;
  transition: all 0.3s;
}
@media screen and (max-width: 992px) {
  .blog-slider {
    max-width: 680px;
    height: 400px;
 }
}
@media screen and (max-width: 768px) {
  .blog-slider {
    min-height: 500px;
    height: auto;
    margin: 180px auto;
 }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .blog-slider {
    height: 350px;
 }
}
.blog-slider__item {
  display: flex;
  align-items: center;
}
@media screen and (max-width: 768px) {
  .blog-slider__item {
    flex-direction: column;
 }
}
.blog-slider__item.swiper-slide-active .blog-slider__img img {
  opacity: 1;
  transition-delay: 0.3s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > * {
  opacity: 1;
  transform: none;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
  transition-delay: 0.3s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
  transition-delay: 0.4s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
  transition-delay: 0.5s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
  transition-delay: 0.6s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
  transition-delay: 0.7s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
  transition-delay: 0.8s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
  transition-delay: 0.9s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
  transition-delay: 1s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
  transition-delay: 1.1s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
  transition-delay: 1.2s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
  transition-delay: 1.3s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
  transition-delay: 1.4s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
  transition-delay: 1.5s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
  transition-delay: 1.6s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
  transition-delay: 1.7s;
}
.blog-slider__img {
  width: 300px;
  flex-shrink: 0;
  height: 300px;
  background-image: linear-gradient(45deg, #722277 0%, #290952 100%);
  box-shadow: 0px 8px 8px rgba(179, 88, 182, 0.4);
  border-radius: 20px;
  transform: translateX(-80px);
  overflow: hidden;
}
.blog-slider__img:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 20px;
  opacity: 0.8;
}
.blog-slider__img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  opacity: 0;
  border-radius: 20px;
  transition: all 0.3s;
}
@media screen and (max-width: 768px) {
  .blog-slider__img {
    transform: translateY(-50%);
    width: 90%;
 }
}
@media screen and (max-width: 576px) {
  .blog-slider__img {
    width: 95%;
 }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .blog-slider__img {
    height: 270px;
 }
}
.blog-slider__content {
  padding-right: 25px;
}
@media screen and (max-width: 768px) {
  .blog-slider__content {
    margin-top: -80px;
    text-align: center;
    padding: 0 30px;
 }
}
@media screen and (max-width: 576px) {
  .blog-slider__content {
    padding: 0;
 }
}
.blog-slider__content > * {
  opacity: 0;
  transform: translateY(25px);
  transition: all 0.4s;
}
.blog-slider__code {
  color: #7b7992;
  margin-bottom: 15px;
  display: block;
  font-weight: 500;
}
.blog-slider__title {
  font-size: 24px;
  font-weight: 700;
  color: #0d0925;
  margin-bottom: 20px;
}
.blog-slider__text {
  color: #4e4a67;
  margin-bottom: 30px;
  line-height: 1.5em;
}
.blog-slider__button {
  display: inline-flex;
  background-image: linear-gradient(45deg, #722277 0%, #290952 100%);
  padding: 15px 35px;
  border-radius: 15px;
  color: #fff;
  box-shadow: 0px 14px 60px rgba(179, 88, 182, 0.4);
  text-decoration: none;
  font-weight: 1000;
  justify-content: center;
  text-align: center;
  letter-spacing: 1px;
}
@media screen and (max-width: 576px) {
  .blog-slider__button {
    width: 100%;
 }
}



.blog-slider .swiper-container-horizontal > .swiper-pagination-bullets, .blog-slider .swiper-pagination-custom, .blog-slider .swiper-pagination-fraction {
  bottom: 10px;
  left: 0;
  width: 100%;
}
.blog-slider__pagination {
  position: absolute;
  z-index: 21;
  right: 20px;
  width: 11px !important;
  text-align: center;
  left: auto !important;
  top: 50%;
  bottom: auto !important;
  transform: translateY(-50%);
}
@media screen and (max-width: 768px) {
  .blog-slider__pagination {
    transform: translateX(-50%);
    left: 50% !important;
    top: 205px;
    width: 100% !important;
    display: flex;
    justify-content: center;
    align-items: center;
 }
}
.blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 8px 0;
}
@media screen and (max-width: 768px) {
  .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 0 5px;
 }
}
.blog-slider__pagination .swiper-pagination-bullet {
  width: 11px;
  height: 11px;
  display: block;
  border-radius: 10px;
  background: #062744;
  opacity: 0.2;
  transition: all 0.3s;
}
.blog-slider__pagination .swiper-pagination-bullet-active {
  opacity: 1;
  background: #722277 ;
  height: 30px;
  box-shadow: 0px 14px 60px rgba(179, 88, 182, 0.4);
}
@media screen and (max-width: 768px) {
  .blog-slider__pagination .swiper-pagination-bullet-active {
    height: 11px;
    width: 30px;
 }
}

</style>
<body>
  
<div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">

    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="../IMAGENS/encontro2.jpg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">ENCONTROS</span>
        <div class="blog-slider__title">Entre laços</div>
        <div class="blog-slider__text"> 
          "Entre laços" é uma iniciativa a fim de promover, além de interação social, o desenvolvimento cognitivo. 
       <br>   Ao participarem dessas atividades, os idosos têm a chance de continuar se desenvolvendo,
           conhecer novas pessoas e desfrutar de experiências enriquecedoras.
          <br>  Sejam em tardes de jogos, workshops ou bailes, 
          o importante é celebrar a vida e a capacidade contínua de aprender, se divertir e criar memórias inesquecíveis. </div>
                <a class="home-btn"  href="../HTML/Projetos.html">Veja mais</a>
      </div>
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="../IMAGENS/tec1.jpg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">ASSISTÊNCIA</span>
        <div class="blog-slider__title">Conecte-se</div>
        <div class="blog-slider__text"> "Conecte-se" visa proporcionar assistência tecnológica a idosos, 
          facilitando a integração digital e promovendo a inclusão no mundo digital. A iniciativa oferece suporte personalizado para que os participantes possam aprender a utilizar dispositivos como smartphones,
          tablets e computadores, além de explorar ferramentas e aplicativos que facilitam a comunicação e o acesso à informação.</div>
            <a class="home-btn"  href="../HTML/Projetos.html">Veja mais</a>
      </div>
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="../IMAGENS/exercicio1.jpg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">SAÚDE E BEM-ESTAR</span>
        <div class="blog-slider__title">Energize+</div>
        <div class="blog-slider__text">"Energize+" foi criado para promover o bem-estar e a saúde de idosos por meio de uma abordagem
           integrada e holística. Iniciativa que combina três pilares fundamentais: atividades físicas, acompanhamento médico
            e caminhadas matinais. Assim, visa proporcionar uma vida mais ativa e saudável para os idosos, promovendo a autonomia e a qualidade de vida.</div>
              <a class="home-btn"  href="../HTML/Projetos.html" >Veja mais</a>
      </div>
    </div>
    
  </div>
  <div class="blog-slider__pagination"></div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script>var swiper = new Swiper('.blog-slider', {
  spaceBetween: 30,
  effect: 'fade',
  loop: true,
  mousewheel: {
    invert: false,
  },
  // autoHeight: true,
  pagination: {
    el: '.blog-slider__pagination',
    clickable: true,
  }
});</script>
</body>
</html>


<br><br>
<h2 class="mb-0 mt-3" style="font-weight: bold;" href="#funcao">Funções </h2>   
<style>
.image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

/* Estilo para cada imagem */
.image-wrapper {
    position: relative;
    width: 30vw;
    height: 30vw;
    max-width: 300px;
    max-height: 290px;
    margin: 20px;
    border-radius: 10%;
    overflow: hidden;
}

.image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Estilo para a sobreposição de texto */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Fundo semi-transparente */
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 1; /* Texto visível o tempo todo */
    text-align: center;
    padding: 10px;
    box-sizing: border-box;
}

/* Estilo para o texto */
.overlay p {
    font-size: 1.2rem; /* Ajuste o tamanho da fonte conforme necessário */
    margin: 0; /* Remove a margem padrão */
}


</style>
</head>

<div class="image-container">
 <div class="image-wrapper">
     <img src="../IMAGENS/voluntario.jpg" alt="Imagem 1">
     <div class="overlay">
       <h2> <strong> Voluntário : </strong> <p style="color: white;">  Ajuda nas atividades </p>  
        <a class="btn btn-outline" id="voluntarioBtn" style="  width: 165px;
      height: 65px;
          cursor: pointer;
          color: #fff;
          font-size: 17px;
          border-radius: 15px;
          border: none;
          position: relative;
          border: 2px solid #ae61b3; 
          transition: 0.1s;" 
        href="../HTML/voluntario (1).html"> Quero ser voluntário !</a></h2> <br>
        <!-- 
        <script>
          document.getElementById('voluntarioBtn').onclick = () => {
              window.location.href = "Projetos.html?voluntario=true"; // Substitua pelo URL desejado
          };
      </script> -->
     </div>
 </div>
 <div class="image-wrapper">
     <img src="../IMAGENS/participante.jpg" alt="Imagem 2">
     <div class="overlay">
         <h2> <strong> Participante: </strong> <p style="color: white;"> Participa das atividades  </p>      <a class="btn btn-outline" style="  width: 165px;
          height: 65px;
          cursor: pointer;
          color: #fff;
          font-size: 17px;
          border-radius: 15px;
          border: none;
          position: relative;
          border: 2px solid #ae61b3; 
          transition: 0.1s;" 
          href="../HTML/Projetos.html"> Quero ser apenas Participante !</a> </h2> <br></a>
     </div>
 </div>
 
</div>
</body>
<br> <br>
<h1 style="Font-weight: 900;
font-size: 35px;
color: #330b53;
text-align: justify;
border-top: 0.1px solid #330b53;;
margin-bottom: 28px;  "><br> </h1>
<!-- projetos -->

   <div class="custom-shape-divider-bottom-1683068753">
              </div>
           </div>
         </div>
       </div>

       <div class="container" style="text-align: center;"
       id="Contato">
<!-- container ajuda (DOAÇÃO) -->
<section class="py-xl-9 py-5 bg-light" data-cue="fadeIn">
  <div class="container">
     <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
           <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
            <p class="lead" style="color: #7635ac; text-align: center;">
              <h1><p class="text-dark text-center" style="text-align: justify; font-size: 50px; font-weight: bold; " id="doe"> Você pode contribuir<br> </h1>
            </p> <p style="font-size: 23px;"> Colabore com o Programa e ajude a adicionar vida
              aos anos de muitas pessoas idosas. <br> Doe, você pode fazer a diferença!</p>
            <a class="home-btn"   
   
    href="../HTML/Doeaqui.php">Doe 🤍</a>
           </div>
        </div>
     </div>
  </div>
</section>
 <br><br><br><br><br><br>

<!-- FAQ -->
 <style>
* {
  padding: 0;
  margin: 0;
  border: 0;
}
*, *::before, *::after {
  box-sizing: border-box;
}

button {
  cursor: pointer;
  color: inherit;
  background-color: transparent;
}
a {
  color: inherit;
  text-decoration: none;
}

.intro {
  display: flex;
  align-items: center;
  gap: 2.5rem;
  @media (max-width: 767.98px) {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.8rem;
  }
}

/* Titulo principal */
.title {
  font-size: 40px;
  font-weight: 500;
  line-height: 127.5%;
  position: relative;
  text-transform: capitalize;
  display: inline-flex;
  font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
  padding: 0 7px;
  @media (max-width: 767.98px) {
    font-size: 36px;
  }
}

/* Titulo */
.title::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  border-radius: 0.4375rem;
}

/* Descrição */
.text {
  font-size: 20px;
  line-height: 127%; /* 23/18 */
  @media (max-width: 479.98px) {
    font-size: 16px;
  }
}

.process {
  padding: 70px 0;
  font-family: Space Grotesk;
}

@media (max-width: 767.98px) {
  .process {
    padding: 30px 0;
  }
}

.process__intro {
  margin-bottom: 80px;
}

@media (max-width: 991.98px) {
  .process__intro {
    margin-bottom: 32px;
  }
}

.process__title {
  flex-shrink: 0;
}

.process__text {
  max-width: 18.25rem;
}

.process__container {
  max-width: 1200px; /* Limite o tamanho máximo do container */
  margin: 0 auto; /* Centralize o container */
}

.accordions__list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem; /* Ajustado para menor espaçamento */
}

@media (max-width: 479.98px) {
  .accordions__list {
    gap: 1.25rem;
  }
}

/* Accordion item */
.accordions__item {
  background-color: #f3f3f3;
  border-radius: 2rem; /* Ajuste o raio do border-radius */
  overflow: hidden;
  border: 1px solid #191a23;
}

.accordions__control {
  display: flex;
  align-items: center;
  padding: 20px 30px; /* Ajustado padding */
  width: 100%;
  position: relative;
}

@media (max-width: 767.98px) {
  .accordions__control {
    padding: 15px;
  }
}

@media (max-width: 479.98px) {
  .accordions__control {
    padding: 10px; /* Ajustado para telas menores */
  }
}

.accordions__number {
  font-size: 24px; /* Ajustado tamanho do número */
  color: #4c0952;
  font-family: Space Grotesk;
  padding-right: 1rem; /* Ajustado padding-right */
  font-weight: 500;
}

@media (max-width: 767.98px) {
  .accordions__number {
    font-size: 20px;
    padding-right: 0.625rem;
  }
}

@media (max-width: 479.98px) {
  .accordions__number {
    font-size: 16px;
  }
}

.accordions__title {
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: #000;
  font-size: 18px; /* Ajustado tamanho do título */
  font-weight: 500;
  flex: 1 1 auto;
  display: flex;
  line-height: 120%;
  padding-right: 1rem; /* Ajustado padding-right */
  justify-content: flex-start;
  text-align: left;
}

@media (max-width: 767.98px) {
  .accordions__title {
    font-size: 16px;
  }
}

.accordions__icon {
  flex: 0 0 40px; /* Ajustado tamanho do ícone */
  display: flex;
  width: 40px;
  height: 40px;
  background-color: #f3f3f3;
  border: 1px solid #000000;
  border-radius: 50%;
  position: relative;
  transition: 0.5s cubic-bezier(0.65, 0.2, 0.65, 1);
}

@media (max-width: 479.98px) {
  .accordions__icon {
    flex: 0 0 30px;
    width: 30px;
    height: 30px;
  }
}

.accordions__icon::before {
  content: "";
  width: 15px; /* Ajustado largura da linha horizontal */
  height: 2px; /* Ajustado altura da linha horizontal */
  background-color: #000000;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.accordions__icon::after {
  content: "";
  width: 15px; /* Ajustado largura da linha vertical */
  height: 2px; /* Ajustado altura da linha vertical */
  background-color: #000000;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(90deg);
}

.accordions__content {
  padding: 0 30px; /* Ajustado padding */
  max-height: 0;
  overflow: hidden;
  will-change: max-height;
  transition: 0.5s cubic-bezier(0.65, 0.2, 0.65, 1);
  box-sizing: content-box;
  position: relative;
  z-index: 5;
}

@media (max-width: 767.98px) {
  .accordions__content {
    padding: 0 15px;
  }
}

@media (max-width: 479.98px) {
  .accordions__content {
    padding: 0 10px; /* Ajustado para telas menores */
  }
}

.open .accordions__content {
  padding: 20px 30px; /* Ajustado padding */
}

@media (max-width: 767.98px) {
  .open .accordions__content {
    padding: 20px 15px;
  }
}

@media (max-width: 479.98px) {
  .open .accordions__content {
    padding: 10px 10px;
  }
}

.open {
  background-color: #e5def7;
}

.open .accordions__icon {
  transform: rotate(225deg);
}
</style>
<section class="process">
  <div class="process__container">
    <div class="process__intro intro">
      <h2 class="process__title title" style="font-weight: bold;">Perguntas Frequentes </h2>
      <small class="text-uppercase ls-md fw" style="color: #ae61b3;">CONHEÇA O QUE A VIVABEM OFERECE</small>
    </div>
    <div class="process__accordions">
      <ul class="accordions__list">
        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="false">
            <span class="accordions__number">01.</span>
            <span class="accordions__title"> O que é Idadismo?</span>
            <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
            <p> Idadismo, ou etarismo, é o preconceito e a discriminação contra indivíduos ou grupos 
      com base na sua idade. Este tipo de discriminação pode afetar tanto pessoas mais velhas
       quanto mais jovens, embora seja mais comumente direcionado contra os idosos O idadismo pode ter sérias consequências para a saúde mental e física dos indivíduos afetados, contribuindo para sentimentos de isolamento, 
       depressão e uma diminuição na qualidade de vida.</p>
          </div>
        </li>
        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="false">
            <span class="accordions__number">02.</span>
            <span class="accordions__title">Como posso ajudar um idoso a manter-se ativo e saudável?</span>
            <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
            <p>      Abrange atividade física (Exercícios Regulares), nutrição (Dieta Equilibrada), socialização (Atividades Sociais), e
        cuidados com a saúde mental (Estímulos Cognitivos). </p>
          </div>
        </li>
        <li class="accordions__item">
                    <button class="accordions__control" aria-expanded="false">
                        <span class="accordions__number">03.</span>
                        <span class="accordions__title"> Como posso facilitar a comunicação com um idoso que tem dificuldade de audição ou visão?</span>
                        <span class="accordions__icon"></span>
                    </button>
                    <div class="accordions__content text" aria-hidden="true">
                      <p> Paciência e Compreensão: Seja paciente, compreensivo e mostre empatia pelas dificuldades que o idoso enfrenta.
      Verificação de Entendimento: Verifique se a pessoa compreendeu a mensagem, pedindo para repetir ou responder.
      Tempo Adequado: Dê tempo suficiente para que a pessoa processe a informação e responda sem pressa.
      Instruções Claras e Simples: Forneça instruções claras, simples e em etapas, se necessário.
      Feedback Positivo: Reforce positivamente qualquer progresso na comunicação, encorajando a pessoa a continuar tentando.</p>  
                    </div>
                </li>

                <li class="accordions__item">
          <button class="accordions__control" aria-expanded="false">
            <span class="accordions__number">04.</span>
            <span class="accordions__title">   Quais são os sinais de alerta de problemas de mobilidade em idosos e como posso ajudá-los a manter a mobilidade? </span>
            <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
            <p> Dores e Rigidez <br>
      Dificuldade em Levantar-se<br>
      Lentidão ao Caminhar<br>
    E para ajudar: Atividade Física Adaptada; Terapias Específicas; Apoio de Dispositivos;
    Acompanhamento Regular; Programas Comunitários.</p>
          </div>
        </li>

        <li class="accordions__item">
          <button class="accordions__control" aria-expanded="false">
            <span class="accordions__number">05.</span>
            <span class="accordions__title">  Como posso planejar financeiramente 
      para o futuro cuidado de um idoso?</span>
            <span class="accordions__icon"></span>
          </button>
          <div class="accordions__content text" aria-hidden="true">
            <p> Planejamento Financeiro consiste em avaliar as necessidades de cuidado, ou seja, o nível de cuidado
      necessário, orçamento é a próxima etapa para avaliar a renda e depesas. Estabeleça um fundo de emergência específico para cobrir despesas de saúde e cuidados futuros. É importante revisar regularmente o plano financeiro e fazer ajustes conforme necessário para refletir mudanças nas necessidades
       de saúde ou nas condições financeiras do idoso. Seguindo esses passos, 
       você pode assegurar que o idoso esteja bem cuidado e financeiramente protegido. </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded',() => {
const accordions = document.querySelectorAll('.accordions__item');

accordions.forEach(el => {
    el.addEventListener('click', (e) =>{
        const self = e.currentTarget;
        const control = self.querySelector('.accordions__control');
        const content = self.querySelector('.accordions__content');

        self.classList.toggle('open');

        if(self.classList.contains('open')){
            control.setAttribute('aria-expanded', true);
            content.setAttribute('aria-hidden', false);
            content.style.maxHeight = content.scrollHeight + 'px';
        }else{
            control.setAttribute('aria-expanded', false);
            content.setAttribute('aria-hidden', true);
            content.style.maxHeight = null;
        }
    });
    });
})</script>

<br><br><br><br><br><br>   <!-- Container (Contact Section) -->
     <div class="text-center mb-xl-7 mb-5">
       <style>
        body {
      
          background-color: #f4f4f4;
          color: #000000;
          margin: 0;
          padding: 20px;
      }

      .wrapper {
          display: flex; /* Usar Flexbox para alinhar a imagem e o contêiner lado a lado */
          justify-content: space-between; /* Deixa um espaço entre os elementos */
          align-items: center; /* Alinha verticalmente os itens no centro */
          max-width: 85%; /* Define a largura máxima do wrapper */
          margin: 0 auto; /* Centraliza o wrapper na página */
      }

      
      .image-form{
        max-width: 40%;
            margin-right: 20px;

      }
      .form-container {
          flex: 1; /* Permite que o formulário ocupe uma parte proporcional do espaço disponível */
          background-color: #fff; /* Define um fundo branco para o formulário */
          padding: 20px;
          text-align: justify;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Sombra ao redor do contêiner do formulário */
          border-radius: 8px; /* Bordas arredondadas */
                      border: 2px solid #ae61b3; 
      }

      label {
          display: block;
          margin-bottom: 8px;
          font-weight: bold;
      }

      input[type="text"],
      input[type="email"],
      input[type="tel"],
      textarea {
          width: 100%;
          padding: 10px;
          margin-bottom: 15px;
          border: 1px solid #ccc;
          border-radius: 5px;
          box-sizing: border-box;
      }

      input[type="submit"] {
          background-color: #007BFF;
          color: white;
          padding: 10px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          width: 100%;
          font-size: 16px;
      }

      input[type="submit"]:hover {
          background-color: #0056b3;
      }

      .success-message {
          background-color: #d4edda;
          color: #155724;
          padding: 10px;
          border: 1px solid #c3e6cb;
          border-radius: 5px;
          margin-top: 20px;
          display: none;
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
      
  </style>
</head>
<body>
  <div class="wrapper">
      <!-- Contêiner de Imagem -->
      <div class="image-form">
        <small class="text-uppercase ls-md fw" style="color: #ae61b3;">CONTATO</small>
         <h1 class="mb-0 mt-3" style="font-weight: bold;">Fale Conosco</h1> <br><!-- Substitua pelo caminho da sua imagem -->
<h5 style="text-align: justify;">Nossos contatos</h5>
<div class="c-midias">
  
 </div>
<p style="text-align: justify;"> <a href="link-do-perfil.com" target="_Blank"><iconify-icon class="icone-midias" icon="akar-icons:whatsapp-fill"></iconify-icon></a> 11 99999-9999</p>
<p style="text-align: justify;"> <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#0d6efd" d="M5 16.77v-13h17v13zm8.5-5.283L6 5.943v9.825h15V5.944zm0-1.176L21 4.77H6zM2 19.77V8.654h1v10.115h15.385v1zm19-15H6z"/></svg> VivaBem@gmail.com</p>

      </div>

      <!-- Contêiner do Formulário -->
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
    
    <style>
        .swal2-popup{
            background: linear-gradient(to right, #722277, #290952); /* Gradiente azul */
            
        }
    </style>

    
      <div class="form-container">
        <h5 class="mb-0 mt-3">Preencha o formulário e tire sua dúvida</h5> <br>
        <form></form>
            <div class="form-row">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text"   id="sendername" required>
                </div>
                <div>
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text"   id="to" required>
                </div>
            </div>
    
            <label for="email">E-mail:</label>
            <input type="email" id="subject"  placeholder="exemplo@.com" required>
    
            <label for="telefone">Telefone:</label>
            <input type="tel" maxlength="15" onkeyup="handlePhone(event)" id="replyto" placeholder="Telefone">
           <label for="pergunta">Mensagem:</label>
              <textarea id="message"  rows="5" required></textarea>
         
            
        
                  <button type="button" class="home-btn" onclick="sendMail();">Enviar</button>
         
               </div>
  </div>
          
<br>
  <br><br><br><br><br><br><br><br>
<!-- LINK PARA A FUNÇão DA MENSAGEM-->
<script src="https://vivabem.serv00.net/JS/enviar.js"></script>

<!-- DEPOIMENTOS -->
<style>
  .figure{
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    max-width: 300px;
    width: 100%;
    .quote-icon{
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 2rem;
    color: #ccc;
}
  }
</style>

     <div class="text-center mb-xl-7 mb-5">
      <small class="text-uppercase ls-md fw" style="color: #ae61b3;">O QUE OS NOSSOS PARTICIPANTES DIZEM</small>
        <h2 class="mb-0 mt-3" style="font-weight: bold;">Depoimentos</h2>   
     </div>

     <div class="row row-100" >
      <div class="col-md-7">
        <div class="quote-icon">
        <div class="figure"> 
        <div class="thumbnail">
          <a href="/w3images/lights.jpg"></a>
            <img src="https://vivabem.serv00.net/IMAGENS/ft_depoimento.jpg" alt="Lights" style="border-radius: 50%; width: 150px; height: 150px; width: 85px; 
             /* Ajuste o tamanho conforme necessário */
            height: 85px;  ">
            <div class="caption">
              <h3>Vó Helena</h3>
              <link rel="stylesheet" href="
https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
">
<span class="fa fa-quote-left"></span>
              <p style="margin: 1em;" class="depoimento1"> O projeto VivaBem representa uma oportunidade valiosa para mim, aos 85 anos. 
                Sempre tive uma paixão pela costura e gostaria de compartilhar esse conhecimento com outros. Além disso, aprender a usar o
                 celular me ajudaria a me conectar melhor com o mundo ao meu redor. Com o apoio do VivaBem, sinto que essas aspirações estão se tornando cada vez mais reais

              </p>
              <div class="fa fa-quote-right" id="right"></div>
            
              <style>
                .depoimento1{
                  text-align: center;
                }
              </style>
            </div>
          </a>
        </div>
        </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="quote-icon">
        <div class="figure"> 
        <div class="thumbnail">
          <a href="/w3images/lights.jpg"></a>
            <img src="../IMAGENS/perfil (1).png" alt="Lights" style="border-radius: 50%; width: 150px; height: 150px; width: 85px; 
             /* Ajuste o tamanho conforme necessário */
            height: 85px;  ">
            <div class="caption">
              <h3>João</h3>
              <link rel="stylesheet" href="
https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
">
<span class="fa fa-quote-left"></span>
              <p style="margin: 1em;" class="depoimento1">
                Sou João Silva e como voluntário no projeto VivaBem, sinto-me honrado em participar dessa experiência de ajudar idosos.
                 Cada momento que passo com eles me ensina e me dá um novo sentido à vida
              </p>
              <div class="fa fa-quote-right" id="right"></div>
            
              <style>
                .depoimento1{
                  text-align: center;
                }
              </style>
            </div>
          </a>
        </div>
        </div>
        </div>
      </div>

    </div>

<div class="container">
    <div class="pricing-header  pb-md-4 mx-auto text-center">
          <div class="conetnt">
   <br><br><br><br><br><br><br><br><br>
   <hr>
<!-- FOOTER -->
<footer>
  <div class="footer-container" >
   
    <div class="footer-section">
      <p><strong> Sobre a VivaBem </strong> <br> Plataforma online para o entretenimento da população idosa
  </div>
      <div class="footer-section">
        <p>&copy; VivaBem | 2024</p>
    </div>

      <div class="footer-section">
          <p><strong> Contato </strong> <BR> Email : VivaBem@gmail.com <br> Cel: (11) 9999-9999</p>
      </div>
  </div>
</footer>



<script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
         
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>

</head>

</body>

</html>