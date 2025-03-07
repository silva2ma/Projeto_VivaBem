 <?php 
   
   session_start();
   
   ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../IMAGENS/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../CSS/Doeaqui.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <title> VivaBem | Doe Aqui</title>

  </head>
  <body style="    background-color: #ffffff ;  font-family:  'Gill Sans MT';">
    <body> <!-- Inicio do corpo da página -->
      
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
 
    
<style>
  .fundo {
    position: relative; /* Permite que a sobreposição seja posicionada em relação a este contêiner */
    width: 100%;
    max-height: 790px; /* Altura máxima da imagem */
    overflow: hidden; /* Para evitar que o conteúdo exceda o contêiner */
  }
  
  .img-fluid {
    width: 100%;
    height: auto;
    /* Ajusta a imagem para cobrir o contêiner sem distorcer */
  }
  
  .sobreposicao {
    position: absolute; /* Permite que o texto seja posicionado sobre a imagem */
    top: 50%; /* Centraliza verticalmente */
    left: 10px; /* Ajusta a distância do texto da borda esquerda da imagem */
    transform: translateY(-50%); /* Ajusta a posição para centralizar verticalmente */
    color: #ffffff; /* Cor do texto */
    font-size: 5vw; /* Tamanho do texto responsivo */
    text-align: left;
    padding: 10px;
    border-radius: 5px;
    max-width: 900px; /* Limita a largura do texto para melhor aparência */
    box-sizing: border-box; /* Inclui o padding no cálculo da largura */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para melhorar a legibilidade */
  }
  
  </style>
  
  
    <div class="fundo">
    <img class="img-fluid" src="../IMAGENS/doacao1.jpg" alt="">
    <div class="sobreposicao">
      Doe Aqui
    </div>
  </div>
  
    
    <!-- breadcrumbs
      Em tradução livre, breadcrumbs significa migalhas de pão. 
      Em âmbito digital, é o sistema de navegação por categorias existente dentro de um site. 
      O que facilita a navegação do usuário e indica o caminho que percorre dentro de sua estrutura.
      “navegação estrutural”
     -->

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
    font-size: 20px; text-align: left; margin-left: 20px;
    margin: 1.3em;
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
     <nav> <br>
      <ol>
        <li>
          <a href="https://satellasof.com">Home</a>
        </li>
        <li>
          Doe Aqui
        </li>
      </ol>
    </nav>
  <br>
      
<br><br><br><br>


<section class="advertisemnet-Section" id="advertisemnet">
  <div class="container">
     <div class="row no-gutters">
      <div class="col-lg-5 col-md-9 col-sm-12 img-section wow fadeInLeft text-center" data-wow-delay="900ms">
       <img src="../IMAGENS/9.png" style="width: 90%;" alt="img">
      </div>
      <div class="col-lg-5 col-md-9 col-sm-9 text-section wow fadeInRight text-center" data-wow-delay="400ms">
       <h2 class="heading" style="color: #000000;"> <strong> A importância da doação </strong> </h2>
       <p style="font-size: 23px;
      @media(min-width: 425px) {
       p {
        font-size: 25px;
       }
      } text-align: justify;">A doação é uma forma poderosa de transformar vidas e fortalecer comunidades, especialmente quando se trata de projetos voltados para idosos.
         À medida que a população envelhece, é essencial criar iniciativas que promovam o bem-estar, a inclusão e a dignidade dessa faixa etária. Aqui estão algumas razões pelas quais a doação é vital para essas atividades.</p>
       <div class="center-btn">
     
       </div>
      </div>
     </div>
  </div>
  </section>

<br><br>

<div class="container mt-3">
  <div class="mt-4 p-5  text-white rounded" style="border-width: 6px; border-style: solid;
    border-image: linear-gradient(45deg, #32357a, #e9e6ff) 1; /* Gradiente e direção */
    padding: 10px; /* Espaçamento interno */ border-radius: 15px; /* Bordas arredondadas */background-color: white; /* Cor de fundo do cartão */">
    <h1 class=" text-center" style="text-align: justify; font-size: 50px; font-weight: bold; color: #000000;">Área destinada para doação</h1> 
    <p class="mb-0 text-center" style="font-size: 25px; color: #000000;">Acreditamos que cada idoso merece amor e atenção. <br>
         Nossos projetos trazem alegria e dignidade. Portanto, com doações, financiamos atividades e cuidados especiais. <br><br>
        <strong> Junte-se a nós e faça a diferença, valorizando e respeitando nossos vovôs e vovós, 
         que merecem mais do que entretenimento ocasional!  </strong>
    </p> 
  </div>
  </div>
  



<p class="text-dark text-center" style="text-align: justify; font-size: 50px; font-weight: bold;">   </h2>
      <div class="card__container"><p class=" text-center" style="text-align: justify; font-size: 39px; font-weight: bold; color: #000000;"> Confira nossos valores e contribue para o projeto </h2>
        <div class="card cheapest"> 
          <h2 class="card__title"></h2>
                    <center> <h1 class="card__price">R$10</h1>  </center>
                   <br>  
           <a class="btn" style="color:  #330b53;; background-color: rgb(255, 255, 255);  
           border: 1px solid transparent;
           border-radius: 8px;
       " href="https://sandbox.mercadopago.com.br/checkout/v1/redirect?pref_id=1973074079-9440aa5d-20d6-4564-a907-d1c30d9faa61">Doe</a>
        </div>
        <div class="card">
          <h2 class="card__title"></h2>
        <center>  <h1 class="card__price">R$50</h1></center>
        <br>
        <a class="btn" style="color:  #330b53;; background-color: rgb(255, 255, 255);  
        border: 1px solid transparent;
        border-radius: 8px;
    " href="https://sandbox.mercadopago.com.br/checkout/v1/redirect?pref_id=1973074079-7ee79fc3-cfa1-4719-af9e-f5d387724b7c">Doe</a>
        </div>
        <div class="card">
          <h2 class="card__title"></h2>
        <center>  <h1 class="card__price">R$100</h1> </center>
        <br>
                    
                    <a class="btn" style="color:  #330b53;; background-color: rgb(255, 255, 255);  
          border: 1px solid transparent;
          border-radius: 8px;
      " href="https://sandbox.mercadopago.com.br/checkout/v1/redirect?pref_id=1973074079-02da2f6e-2d7f-4662-9932-1941d049f422">Doe</a>
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br>
      <br><h1 class=" text-center" style="text-align: justify; font-size: 50px; font-weight: bold; color: #000000;">Controle de doações</h1><br>
      <p class=" text-center" style="text-align: justify; font-weight: bold; color: #000000;">1º Semestre</p><br>
      


      <style>
        /* Estilizando a caixa que contém o gráfico */
        .chart-container {
          border: 1px solid #a3a3a3; /* Cor da borda *//* Bordas arredondadas */
          padding: 20px; /* Espaçamento interno */
          max-width: 60%; /* Largura máxima da caixa */
          margin: 0 auto; /* Centraliza a caixa na página */
          background-color: #f9f9f9; /* Cor de fundo */
        }
        canvas {
          /* Garante que o canvas ocupe 100% da largura da caixa */
          width: 100% !important;
          height: auto !important;
        }
      </style>

<div class="chart-container">
    <canvas id="myChart"></canvas>
</div>
      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
      labels: ['JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN'], // Rótulos de meses
      datasets: [
        {
          label: 'Doações de $10', // Rótulo para doações de $10
          data: [12, 19, 3, 5, 2, 3], // Dados dos meses
          borderWidth: 1, 
          backgroundColor: '#AC58FA',
        },
        {
          label: 'Doações de $50', // Rótulo para doações de $50
          data: [5, 5, 5, 5, 5, 5], // Valor 5 em todos os meses
          borderWidth: 1,
          backgroundColor: '#8000FF',
        },
        {
          label: 'Doações de $100', // Rótulo para doações de $100
          data: [5, 10, 0, 25, 0, 10], // Valor 50 em todos os meses
          borderWidth: 1,
          backgroundColor: '#4B0082',
        }
      ]
    }
    ,
    
          
          options: {
            scales: {
              y: {
                beginAtZero: true // Iniciar o eixo Y em zero
              }
            }
          }
        });

</script> <br>
<p class=" text-center" style="text-align: justify; font-weight: bold; color: #000000;">2º Semestre</p><br>
<div class="chart-container">
  <canvas id="myChart2"></canvas>
</div>

<script>
        const ctx2 = document.getElementById('myChart2');
      
        new Chart(ctx2, {
          type: 'bar',
          data: {
      labels: ['JUL', 'AGO', 'SET', 'OUT', 'NOV', 'DEZ'], // Rótulos de meses
      datasets: [
        {
          label: 'Doações de $10', // Rótulo para doações de $10
          data: [30, 9, 2, 15, 12, 13], // Dados dos meses
          borderWidth: 1, 
          backgroundColor: '#AC58FA',
        },
        {
          label: 'Doações de $50', // Rótulo para doações de $50
          data: [28, 10, 10, 5, 5, 5], // Valor 5 em todos os meses
          borderWidth: 1,
          backgroundColor: '#8000FF',
        },
        {
          label: 'Doações de $100', // Rótulo para doações de $100
          data: [0, 10, 0, 25, 0, 10], // Valor 50 em todos os meses
          borderWidth: 1,
          backgroundColor: '#4B0082',
        }
      ]
    }
    ,
    
          
          options: {
            scales: {
              y: {
                beginAtZero: true // Iniciar o eixo Y em zero
              }
            }
          }
        });
      </script>
      
      <br>
      <br>
      


      <!--
        <p style="text-align: center; font-size: 50px; font-weight: bold;">
          Por que sua doação é importante ?
          </p>
          <P>
            As doações são fundamentais para projetos sociais voltados ao bem-estar de idosos, pois garantem recursos para assistência médica, alimentação e lazer. Elas promovem apoio emocional, combatendo a solidão, e asseguram a sustentabilidade dos projetos. Além disso, ajudam a capacitar voluntários e aumentar a visibilidade dos desafios enfrentados pelos idosos. Em suma, a generosidade é vital para a dignidade e o bem-estar dessa população.
          </P>
           
      </div>
        
         </div>  -->
    
<!-- FOOTER -->
<style>
  footer {
    background-color: #e9e6ff;
    color: #000000;
    padding: 20px 0;
    width: 100%;
  }
  
  .footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 10px;
    flex-wrap: wrap;
  }
</style>

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
  

    
  </body>
</html>