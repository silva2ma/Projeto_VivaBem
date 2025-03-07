<?php
$con=mysqli_connect("mysql7.serv00.com","m10725_roxo","Roxo@2024","m10725_bd");  // o usuario e a senha do banco e o nome do banco de dados
 

$comando= "select * from tab";
$resulta = mysqli_query($con,$comando);
 $dados=array();
while($r = mysqli_fetch_array($resulta)){
 $dados[]=array("cod"=>$r[0],"nome"=>$r[1],"login"=>$r[2],"senha"=>$r[3],"datanasc"=>$r[4]);
}
$close = mysqli_close($con);
echo json_encode($dados);
?>