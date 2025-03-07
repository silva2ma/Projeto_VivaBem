<?php
$con=mysqli_connect("mysql7.serv00.com","m10725_roxo","Roxo@2024","m10725_bd");  // o usuario e a senha do banco e o nome do banco de dados
 

$comando= "select * from funcionario";
$resulta = mysqli_query($con,$comando);
 $dados=array();
while($r = mysqli_fetch_array($resulta)){
 $dados[]=array("id"=>$r[0],"nome"=>$r[1],"cargo"=>$r[2],"salario"=>$r[3]);
}
$close = mysqli_close($con);
echo json_encode($dados);
?>