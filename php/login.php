<?php

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $senha = md5($senha);
	
	$servername = "localhost";
	$dbname = "newron";
	$username = "root";
	$password = "";
	// Create connection
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	
	mysqli_query($conn, "INSERT INTO cadastro (login,senha) VALUES ('$login','$senha')");

	mysqli_close($conn);
	?>