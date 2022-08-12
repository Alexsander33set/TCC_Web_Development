<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum - Newron</title>

    <!-------CSS------->
    <link rel="stylesheet" href="../style/forum-please-login.css">
    <!-------Logo Icon------->
    <link rel="icon" href="../src/logo/logo_inverted_no_content.png" type="image/icon type">
    <!-------CSS Icons------->
    <link href="../src/icons/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    <link href="../src/icons/uicons-brands/css/uicons-brands.css" rel="stylesheet">
    <!-----Vue Framework----->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!----Scroll Animation--->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <div class="all-content">
        <div class="please-login">
            <div class="please-title">
                <h3>
                    Faça parte da nossa comunidade
                </h3>
            </div>
            <div class="please-mid">
                <p>
                    Para acessar este recurso, é necessário que esteja logado em sua conta.
                    Caso dúvidas, leia nossas <a href="policies.php">Políticas de privacidade.</a></p>
                <p>
                    <br> Não possua uma conta?
                    <a href="sign-up.php">Clique aqui para criar uma.</a>
                </p>
                
                
            </div>
            <div class="please-end">
                <a href="#" onclick="history.go(-1)">Voltar</a>
                <a class="please-login-link" href="sign-in.php">Entrar</a>
            </div>
        </div>
    </div>
    <!-------Navbar------->
   <div class="navbar"></div>
   <script src="../components/navbar.js"></script>
    <!-------Header------->
    <header>
        <div class="header-text">
            <h1 class="selected">Newron</h1>
            <h1>Newron</h1>
        </div>
        <img src="../src/logo/logo_inverted_no_content.png" alt="Logo do Site">
    </header>

    <main>
        <div class="title">
            <h1>Titulo dos comentarios abaixo</h1>
        </div>
        <section class="comments"> 
            <article>
                <div class="user-info">
                    <h5>
                        Lorem ipsum dolor sit amet consectetur
                    </h5>
                    <p>
                        Lorem
                    </p>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.
                    </p>
                </div>
            </article>
            <article>
                <div class="user-info">
                    <h5>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </h5>
                    <p>
                        Lorem
                    </p>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.
                    </p>
                </div>
            </article>
            <article>
                <div class="user-info">
                    <h5>
                        Lorem ipsum dolor 
                    </h5>
                    <p>
                        LoremNihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.
                    </p>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.
                    </p>
                </div>
            </article>
            <article>
                <div class="user-info">
                    <h5>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </h5>
                    <p>
                        Lorem
                    </p>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.
                    </p>
                </div>
            </article>
            <article>
                <div class="user-info">
                    <h5>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </h5>
                    <p>
                        Lorem
                    </p>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil nesciunt quis deleniti unde rerum sapiente est repudiandae aliquam maiores quisquam.
                    </p>
                </div>
            </article>
            <article>
                <form action="" method="post">
                    <div class="user-info">
                        <h5>
                            Adicionar um comentário
                        </h5>
                        <p>
                            Nome
                        </p>
                    </div>
                    <div class="comment">
                        <p>
                            <textarea name="comentarios" id="" rows="4"></textarea>
                        </p>

                        <input type="submit" name="enviar" value="Enviar">
                     </div>
                </form>
            </article>
        </section>



    </main>

    <!-------Footer------->
    <footer></footer>   

    <script src="../components/footer.js"></script>
    <!----Scroll Animation--->
    <script src="../script/index.js"></script>
</body>

</html>