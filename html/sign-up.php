<?php

$login = $_POST["login"];
$senha = $_POST["senha"];

$servername = "localhost";
$dbname = "newron";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("Nao foi possivel conectar");



//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário

$sql = "INSERT INTO cadastro (login,senha) VALUES ('$login', '$senha')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

