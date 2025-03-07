<?php
    $con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");
    if (!$con)
    {
    die("Erro ao conectar!! <br>");
    }

   
$resultado = mysqli_query($con,"SELECT * FROM tab");

?>
<!DOCTYPE html>
<html>
   <head>
      <title>ADMINISTRAÇÃO</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     
     <!--link icones-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body >
      <div class="container" >
         <div class="jumbotron" style="background-image: linear-gradient(#722277,#290952); color:white;">
            <h1>Lista De Usuários</h1>
            <p> Perfis!!</p>
         </div>

         <table class="table table-bordered" style="border: 2px solid #722277;">
            <thead >
               <th style="background-image: linear-gradient(#722277,#290952); color:white;">ID</th>      
               <th style="background-image: linear-gradient(#722277,#290952); color:white;">NOME</th>      
               <th style="background-image: linear-gradient(#722277,#290952); color:white;">EMAIL</th>      
               <th style="background-image: linear-gradient(#722277,#290952); color:white;">SENHA</th> 
               <th style="background-image: linear-gradient(#722277,#290952); color:white;">DATA DE NASCIMENTO</th>    
              
            </thead>
            <?php 
                while ($linha= mysqli_fetch_array($resultado)) 
                {
                    echo "
                        <tr>
                        <td style='background-image: linear-gradient(#722277,#290952); color:white; font-weight: bold;'>".$linha['id']."</td>
                        <td style='font-weight: bold;' >".$linha['nome']."</td>                                                             
                        <td style='font-weight: bold;'>".$linha['login']."</td>
                        <td style='font-weight: bold;'>".$linha['senha']."</td>                                     
                        <td style='font-weight: bold;'>".$linha['datanasc']."<button class='bi bi-trash' style='margin-left: 55px; background-color: black; color: white;' title='Deletar'></button><button class='bi bi-pencil' style='margin-left: 15px; background-color: black; color: white; ' title='Alterar'></button></td>
                                                                                    
                         
               
                        </tr>                    
                    ";
                }
            ?>
         </table>

      </div>
     
       <script>
                
   </body>
</html>