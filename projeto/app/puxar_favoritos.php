<?php
$con=mysqli_connect("mysql7.serv00.com","m10725_roxo","Roxo@2024","m10725_bd");

if($con->connect_error) {
    echo json_encode(array("erro" => "Falha na conexão com o banco de dados"));
    exit();
}

$email = $_POST['login'];

$sql = "SELECT fav_app FROM tab WHERE login = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(array("fav_app" => $row['fav_app']));
} else {
    echo json_encode(array("erro" => "Usuário não encontrado"));
}

$stmt->close();
$con->close();
?>
