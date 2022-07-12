<?php

	$login = $_POST["login"];
	$senha = $_POST["Senha"];

	$servername = "localhost";
	$dbname = "newron";
	$username = "root";
	$password = "";
// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("Não foi possivel conectar");



//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário

	$result_login = "Select * From cadastro Where login= '$login' && senha= '$senha' LIMIT 1";
	$resultado_login = mysqli_query($conn, $result_login);
	$resultado = mysqli_fetch_assoc($resultado_login);

	if (!$resultado) {
		echo "usuário não encontrado";
	} else {
		header("location: homepage.html");
		
	}
	mysqli_close($conn);