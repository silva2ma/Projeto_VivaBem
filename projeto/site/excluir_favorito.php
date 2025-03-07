<?php
session_start(); // Certifique-se de que a sessão está iniciada

$con = mysqli_connect("mysql7.serv00.com", "m10725_roxo", "Roxo@2024", "m10725_bd");
if (!$con) {
    die("Erro ao conectar!! <br>");
}

// Prepara a query para excluir o favorito
$sql = "UPDATE tab SET favorito = NULL WHERE login = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $_SESSION['usuario']);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo json_encode(array("status" => "success", "message" => "Favorito excluído com sucesso."));
} else {
    echo json_encode(array("status" => "error", "message" => "Erro ao excluir favorito ou nenhum favorito encontrado."));
}

$stmt->close();
$con->close();
?>
