<?php
include_once 'db_engine/bd_mysql_pdo.php';
session_start();
if (!isset($_SESSION['login']) && (!isset($_SESSION['senha']))) {
   header('Location: ../templates/index.php');
}

$stmt1 = $conn->prepare('select * from usuarios where login = :login');

$stmt1->bindValue('login', $_SESSION['login']);
$stmt1->execute();

$user = $stmt1->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre Nós - Newron</title>
   <!-------CSS------->
   <link rel="stylesheet" href="../style/about-us.css">
   <!-------Logo Icon------->
   <link rel="icon" href="../src/logo/logo_inverted_no_content.png" type="image/icon type">
   <!-------CSS Icons------->
   <link href="../src/icons/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
   <link href="../src/icons/uicons-brands/css/uicons-brands.css" rel="stylesheet">
   <!-----Vue Framework----->
   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
   <div class="loader"></div>
   <script src="../script/preloader.js"></script>
   <!-------Top-Return------->
   <span id="top-return" style="position:absolute;"></span>
   <!-------Navbar------->
   <section class="navbar">
      <section class="navbar-top">
         <div class="nav-components">
            <div class="nav-left">
               <div class="nav-logo">
                  <a href="index.php"><img src="../src/logo/logo-no-details.png" alt="logo"></a>
               </div>
               <div class="nav-links">
                  <a href="about-us.php">{{navbar_title_1}}</a>
                  <span class="navtop-line"></span>
                  <a href="partners.php">{{navbar_title_2}}</a>
                  <span class="navtop-line"></span>
                  <ul>{{navbar_dropdown_title_1}}
                     <li><a href="forum.php">Fórum</a></li>
                  </ul>
               </div>
            </div>
            <div class="nav-right">
               <input type="search" name="navbar-search" list="pages" v-bind:id="class_of_navbar_search_field" v-model="value_of_navbar_search_field" v-on:keyup.enter="anything()">
               <datalist id="pages">
                  <option value="Student life"></option>
                  <option value="Sobre Nós"></option>
                  <option value="Teste vocacional"></option>
                  <option value="FAQ"></option>
                  <option value="Políticas de privacidade e inclusão"></option>
                  <option value="Página inicial"></option>
               </datalist>
               <i v-bind:class="search_icon" @click="show_search_field()"></i>
               <div class="ver-line"></div>
               <div class="nav-user" @click="onclick_dropdow()">
                  <p> Bem vindo! <?php echo $user->nome; ?></p>
                  <div v-bind:class="class_of_dropdow_user">
                     <a href="db_engine/bd_mysql_destroy_pdo.php">Sair <i class="fi fi-rr-sign-in-alt"></i></a>
                  </div>
               </div>
               
            </div>
         </div>
         <div class="nav-components-mobile">
            <div class="nav-left">
               <div class="nav-logo">
                  <a href="index.php"><img src="../src/logo/logo-no-details.png" alt="logo"></a>
               </div>
            </div>
            <div class="nav-mobile-right">
               <i class="fi fi-rr-menu-burger" @click="open_mobile_menu()" v-if="mobile_menu_switch==false"></i>
               <i class="fi fi-rr-cross" @click="close_mobile_menu()" v-else></i>
            </div>
         </div>
      </section>
      <section class="navbar-mobile" v-if="mobile_menu_switch==true">
         <aside class="mobile-menu">
            <div class="exit-button" @click="mobile_menu_switch=false"><i class="fi fi-rr-cross-circle"></i></div>
            <div class="profile-settings">
               <a class="button-close-session" href="db_engine/bd_mysql_destroy_pdo.php">Desconectar<i class="fi  fi-rr-sign-in-alt"></i></a>
            </div>

            <div class="nav-user">
               <p>Bem vindo <?php echo $user->nome; ?></p>
            </div>
            <hr>
            <div class="search">
               <a href=""><i class="fi fi-rr-search" @click=""></i>&nbsp;&nbsp;Pesquisar</a>
            </div>
            <hr>
            <div class="nav-links">
               <a href="about-us.php">{{navbar_title_1}}</a>
               <a href="partners.php">{{navbar_title_2}}</a>
               <ul>{{navbar_dropdown_title_1}}<i class="fi fi-rr-angle-small-down"></i>
                  <li><a href="not-ready.php">Fórum</a></li>
               </ul>
            </div>
         </aside>
      </section>
   </section>
   <script src="../components/navbar_off_template.js"></script>
    
   <!-----Header----->
    <header>
        <div class="header-text">
            <h1 class="selected">Newron</h1>
            <h1>Descubra novos Caminhos</h1>
            <h1>Trilhe seu Caminho Profissional</h1>
        </div>
        <img src="../src/logo/logo_inverted_no_content.png" alt="Logo do Site">
    </header>
   
   <main>
      <!-- <section class="sobre">
         <h1>Missão</h1>
         <p>A Missão da Newron é guiar jovens e pessoas que querem trilhar um caminho profissional com uma maior organização,
            junto da plataforma Student Life que os facilita a entender o que são necessarias para seguir sua carreira desejada,
            com uma trilha de ensinos feita para cada tipo de carreira dentro do mercado de trabalho, e até mesmo para trabalhar
            como um free lancer de alguma área, o Student Life ajuda você a focar no que é mais importante na carreira escolhida.</p>

         <h1>Visão</h1>

         <p>A Newron não pode ficar estagnada, a plataforma tem o objetivo de se extender para o Brasil inteiro, mas o objetivo principal é que todos tenham acesso a pagina, sem custos para aqueles que querem melhorar em seu âmbito profissional.
            A plataforma deve se expandir pelo mundo, ajudando o maximo de jovens e adultos de forma gratuita para o usuário final.
         </p>

         <h1>Valores</h1>

         <p>Essa é uma plataforma que se empenha em seu Planejamento e Acessibilidade,
            se manter livre de custos para o usuario final enquanto oferecemos um bom planejamento de carreira é nosso primeiro e mais importante objetivo da Newron.</p>
      </section> -->
      <section>
      <h3>Nós reimaginamos a forma como o mundo se move para melhor</h3>
      <p> 
         Movimento é o que nós alimentamos. É nosso sangue vivo. Corre em nossas veias. É o que nos tira da cama todas as manhãs. Isso nos leva a reimaginar constantemente como podemos nos mover melhor. Para você. Por todos os lugares que você quer ir. Por todas as coisas que você quer ter. Por todas as maneiras que você quer ganhar. Em todo o mundo. Em tempo real. Na incrível velocidade de agora.
      </p>
      </section>
      <section>
         <h2>Uma mensagem do nosso lime</h2>
      </section>
      
      <section class="advantages">
         <h4 class="title">Um pouco sobre a Newron</h4>
         <div class="advantages-cards">
            <div>
               <img src="../src/images/cards/target.png" alt="">
               <div>
                  <h4><strong>Missão</strong></h4>
                  <p>Direcionar as pessoas nas decisões dos estudos e na carreira.</p>
               </div>
            </div>
            <div>
               <img src="../src/images/cards/web-design.png" alt="">
               <div>
                  <h4><strong>Visão</strong></h4>
                  <p>Tornar-se a plataforma de orientação profissional mais reconhecida do Brasil</p>
               </div>
            </div>
            <div>
               <img src="../src/images/cards/chart.png" alt="">
               <div>
                  <h4><strong>Valores</strong></h4>
                  <p>Planejamento, Acessibilidade,<br>Criatividade e Confiança</p>
               </div>
            </div>
         </div>
      </section>
   </main>

   <!-------Footer------->
   <footer></footer>
   <script src="../components/footer.js"></script>
   <!-------End Footer------->
</body>

</html>