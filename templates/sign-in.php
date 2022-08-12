<?php
include_once 'db_engine/bd_mysql_pdo.php';

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/sign-in.css">
    <!-------Logo title------->
    <title>Login - Newron</title>
    <link rel="icon" href="../src/logo/logo_inverted_no_content.png" type="image/icon type">
     <!-------CSS Icons------->
   <link href="../src/icons/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
</head>

<body>
    <div class="loader"><img src="../src/logo/logo_inverted_no_content.png" alt=""></div><script src="../script/preloader.js"></script>
    <button class="return-last-page" onclick="history.go(-1)"><i class="fi fi-rr-angle-square-left"></i></button>
    <main>
        <section class="login-area">
            <div class="texto">
                <h1>Bem vindo de volta!😉</h1>
            </div>

            <div class="inputs">
                <form method="post">
                    <div id="data-input">
                        <input type="text" name="login" placeholder="Login" required>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <div class="form-buttons">
                        <input type="submit" name="entrar" value="entrar" id="entrar">
                        <div class="sign-up"><a href="sign-up.php">Cadastre-se</a></div>
                    </div>
                </form>
                <?php

                if (isset($_POST['entrar'])) {

                    $login = $_POST['login'];
                    $senha = $_POST['senha'];

                    $stmt = $conn->prepare('select * from usuarios where login      = :login 
										                            and senha      = :senha');

                    $stmt->bindValue('login', $login);
                    $stmt->bindValue('senha', ($senha));
                    $stmt->execute();

                    // Obter linha consultada
                    $conta = $stmt->fetchObject();



                    // Se a linha existe: indicar que esta logado e encaminhar para outro lugar
                    if ($conta) {

                        $_SESSION['login'] = $login;
                        $_SESSION['senha']   = $senha;
                        //$_SESSION['login'] = $_POST['login'];
                         header('Location: ../user/index.php ');
                    } else {
                        echo '<div class="alert alert-danger"> *Usuario ou senha invalida<br> </div>';
                    }
                }
                ?>

            </div>
            <div class="suporte">
                <a href="#">Suporte</a>
                <a href="sign-up.php">Esqueceu a Senha?</a>
            </div>
        </section>
    </main>
    <div class="bg-details circle1"></div>
    <div class="bg-details circle2">
        <p>Newron®</p>
    </div>
</body>

</html>