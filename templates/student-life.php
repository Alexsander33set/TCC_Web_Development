<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Área do Estudante - Newron</title>
   <!-------CSS------->
   <link rel="stylesheet" href="../style/student-life.css">
   <!-------Logo Icon------->
   <link rel="icon" href="../src/logo/logo_inverted_no_content.png" type="image/icon type">
   <!-------CSS Icons------->
   <link href="../src/icons/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
   <link href="../src/icons/uicons-brands/css/uicons-brands.css" rel="stylesheet">
   <!-----Vue Framework----->
   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
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
</div>
   <!-------Loader------->
   <div class="loader"></div><script src="../script/preloader.js"></script>
   <!-------Navbar------->
   <div class="navbar"></div> <script src="../components/navbar.js"></script>
   <!-----End-Navbar----->


   <header >
      <div class="header-text">
         <h1 class="selected">Newron</h1>
         <h1>Descubra novos Caminhos</h1>
         <h1>Trilhe seu Caminho Profissional</h1>
      </div>
      <img src="../src/logo/logo_inverted_no_content.png" alt="Logo do Site">
   </header>

   <div class="header-areas">
      <button><a href="#sl-1">Artes e Design</a></button>
      <button><a href="#sl-2">Ciências Exatas e Informática</a></button>
      <button><a href="#sl-3">Ciências Biológicas e da Terra</a></button>
      <button><a href="#sl-4">Ciências Sociais e Humanas</a></button>
      <button><a href="#sl-5">Comunicação e Informação</a></button>
      <button><a href="#sl-6">Saúde e Bem-Estar</a></button>
   </div>
   <section class="student-life" id="sl-dev-web">
      <h2> Desenvolvedor Web</h2>
      <p style="margin:auto; text-align:center;">Em qual nível você está?</p>
      <div class="progress-bar">
         <button class="circle nv1-circle" onclick="beginner()"></button>
         <div class="bar n1-bar"></div>
         <button class="circle nv2-circle" onclick="intermediate()"></button>
         <div class="bar n2-bar"></div>
         <button class="circle nv3-circle" onclick="profissional()"></button>
      </div>
      </div>
      </style>
   </section>
   
   

   <!-------Footer------->
   <footer></footer><script src="../components/footer.js"></script>
   <!-------End Footer------->

   <script src="../script/student-life.js">
   </script>
</body>

</html>