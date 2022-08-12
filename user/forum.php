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
    <title>Fórum - Newron</title>

    <!-------CSS------->
    <link rel="stylesheet" href="../style/forum.css">
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
               <a href="">Editar Perfil<i class="fi fi-rr-edit"></i></a>
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
        <div class="title">
            <h1>Fórum</h1>
        </div>
        <section class="comments">
        <?php				  
				  $stmt1 = $conn->prepare('select * from forum');
                  $stmt1->execute();	
                  while($forum = $stmt1->fetch(PDO::FETCH_OBJ)){  			  
				  ?>           
            <article>
                <div class="user-info">
                    <h5>
                        <?php
                        echo $forum->nome;
                        ?>
                    </h5>
                    <p>
                        <?php
                        echo $forum->data_post;
                        ?>
                    </p>
                </div>
                <div class="comment">
                    <p>
                        <?php
                        echo $forum->comentarios;
                        ?>
                    </p>
                </div>
            </article>
            <?php
                }
            ?>
            <article>
                <form action="" method="post">
                    <div class="user-info">
                        <h5>
                            Adicionar um comentário
                        </h5>
                        <p>
                            <!-- Teste DB - 
                            <?php
                            echo $user->nome;
                            ?> -->
                        </p>
                    </div>
                    <div class="comment">
                        <p>
                            <textarea name="comentarios" id="" rows="4"></textarea>
                        </p>

                        <input type="submit" name="enviar" value="Enviar">
                     </div>
                     <?php

                        if (isset($_POST['enviar'])) {
                                $stmt = $conn->prepare('insert into forum(id_user, nome, comentarios)
                                                                      values(:id_user, :nome, :comentarios)');
                                $stmt->bindValue('id_user',  $user->id_user);
                                $stmt->bindValue('nome', $user->nome);
                                $stmt->bindValue('comentarios', $_POST['comentarios']);                             
                             
                          if ($stmt->execute()) {
                                 echo '<div class="alert alert-success">Mensagem incluida com sucesso</div>';

                         }else{
                                 echo '<div class="alert alert-danger">Erro no envio da mensagem</div>';
                             }
                    }
                        ?>


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