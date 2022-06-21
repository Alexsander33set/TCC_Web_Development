
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <!-------Logo title------->
   <title>Cadastra se - Newron</title>
   <link rel="icon" href="../assets/logo/inverted-logo.png" type="image/icon type">
</head>

<body>
    <main>
        <section class="login-area">
            <div class="texto">
                <h1>Faça parte da nossa comunidade!😉</h1>
            </div>

            <div class="inputs">
                <form action="" method="post">

                    <input type="text" name="login" placeholder="Login:" required>
                    <input type="password" name="password" placeholder="Senha:" required>
                    <input type="submit" value="Entrar" id="entrar">
                    <div class="sign-up"><a href="login.html">Já possui uma conta?</a></div>

                </form>
            </div>
            <div class="suporte">
                <a href="#">Suporte</a>
                <a href="#">Políticas de privacide</a>
            </div>
        </section>
    </main>
    <div class="bg-details circle1"></div>
    <div class="bg-details circle2"><p>Newron®</p></div>

    <?php

    $login = $_POST["login"];
    $senha = $_POST["senha"];

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

    ?>

</body>

</html>