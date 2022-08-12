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
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Área do Estudante - Newron</title>

   <script src="//code.jivosite.com/widget/k0JA17ibZ8" async></script>

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
   <!-------Loader------->
   <div class="loader"></div>
   <script src="../script/preloader.js"></script>
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

   <div class="header-areas">
      <button><a href="#sl-1">Artes e Design</a></button>
      <button><a href="#sl-2">Ciências Exatas e Informática</a></button>
      <button><a href="#sl-3">Ciências Biológicas e da Terra</a></button>
      <button><a href="#sl-4">Ciências Sociais e Humanas</a></button>
      <button><a href="#sl-5">Comunicação e Informação</a></button>
      <button><a href="#sl-6">Saúde e Bem-Estar</a></button>
      <!--------Links-of-areas-------->
      <div class="header-links" id="sl-1">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Artes Visuais</h3>
            <a href="">Avaliação</a>
            <a href="">Curadoria</a>
            <a href="">Escultura</a>
            <a href="">Ensino</a>
            <a href="">Eventos</a>
            <a href="">Galerias de Arte</a>
            <a href="">Gravura</a>
            <a href="">Multimídia</a>
            <a href="">Pintura e Desenho</a>
            <a href="">Restauração</a>
         </div>

         <div>
            <h3>Design</h3>
            <a href="#" onclick="show_animator()">Animação</a>
            <a href="">Desenho Industrial</a>
            <a href="">Design Digital</a>
            <a href="">Design de Embalagens</a>
            <a href="">Design Gráfico</a>
            <a href="">Design de Joias</a>
            <a href="">Gestão de Produto</a>
            <a href="">Programação Visual</a>
            <a href="">Projeto e Produto</a>
         </div>

         <div>
            <h3>Design de Games </h3>
            <a href="">Áudio</a>
            <a href="">Design de Games</a>
            <a href="">Ilustração</a>
            <a href="">Modelagem em 2D e 3D</a>
            <a href="">Programação</a>
            <a href="">Vinhetas</a>
         </div>

         <div>
            <h3>Fotografia</h3>
            <a href="">Fotojornalismo</a>
            <a href="">Estúdio</a>
            <a href="">Decoração</a>
            <a href="">Restauração e Conservação</a>
            <a href="">Institucional</a>
            <a href="">Fotografa Autoral</a>
         </div>
         <div>
            <h3>Moda</h3>
            <a href="">Consultoria</a>
            <a href="">Coordenação</a>
            <a href="">Design/Estilismo</a>
            <a href="">Fotografia</a>
            <a href="">Gerencialmente</a>
            <a href="">Modelagem</a>
            <a href="">Produção</a>
            <a href="">Negócios</a>



         </div>
         <div>
            <h3>Dança</h3>
            <a href="">Bailado</a>
            <a href="">Coreografa</a>
            <a href="">Direção</a>
            <a href="">Ensino</a>
            <a href="">Expressão Corporal</a>
            <a href="">Produção</a>
         </div>
      </div>
      <div class="header-links" id="sl-2">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Desenvolvedor <p>Front-End</p>
            </h3>
            <a href="">Plataformas</a>
            <a href="">Dispositivos Móveis</a>
            <a href="#" onclick="show_dev_web()">Websites</a>
            <a href="">Softwares</a>
         </div>
         <div>
            <h3>Desenvolvedor <p>Back-End</p>
            </h3>
            <a href="">Banco de Dados</a>
            <a href="">Segurança da Informação</a>
            <a href="">Análise de Dados</a>
            <a href="">Frameworks</a>
         </div>
         <div>
            <h3>Estatística</h3>
            <a href="">Bioestatística</a>
            <a href="">Computação</a>
            <a href="">Indústria</a>
            <a href="">Pesquisa</a>
            <a href="">Recursos Humanos</a>
         </div>
         <div>
            <h3>Química</h3>
            <a href="">Ensino</a>
            <a href="">Química Ambiental</a>
            <a href="">Gestão de Qualidade</a>
            <a href="">Química Forense</a>
            <a href="">Química de Alimentos</a>
         </div>
         <div>
            <h3>Matemática</h3>
            <a href="">Análise Numérica</a>
            <a href="">Ensino</a>
            <a href="">Modelagem</a>
            <a href="">Matemática Empresarial</a>
            <a href="">Matemática Computacional</a>
         </div>
      </div>
      <div class="header-links" id="sl-3">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Agroecologia</h3>
            <a href="">Administração</a>
            <a href="">Comércio</a>
            <a href="">Solos</a>
            <a href="">Consultoria</a>
            <a href="">Produção</a>
            <a href="">Certificação</a>
         </div>
         <div>
            <h3>Biotecnologia</h3>
            <a href="">Agronegócios</a>
            <a href="">Indústria</a>
            <a href="">Meio Ambiente</a>
            <a href="">Saúde</a>
         </div>
         <div>
            <h3>Ciências Biológicas</h3>
            <a href="">Bioinformática</a>
            <a href="">Biologia de Organismo Aquáticos</a>
            <a href="">Biologia Forense</a>
            <a href="">Microbiologia</a>
            <a href="">Zoologia</a>
            <a href="">Meio Ambiente</a>
         </div>
         <div>
            <h3>Geologia</h3>
            <a href="">Geofísica</a>
            <a href="">Geologia Ambiental</a>
            <a href="">Geologia do Petróleo</a>
            <a href="">Hidrogeologia</a>
            <a href="">Paleontologia</a>
            <a href="">Mineralogia</a>
         </div>
         <div>
            <h3>Medicina Veterinária</h3>
            <a href="">Clínica e Cirurgia de Animais de Pequeno Porte</a>
            <a href="">Centros de Pesquisa</a>
            <a href="">Indústria e Produtos para Animais</a>
            <a href="">Conservação de Espécies</a>
            <a href="">Perícia Técnica</a>
            <a href="">Saúde Pública Veterinária</a>
         </div>
      </div>
      <div class="header-links" id="sl-4">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Relações Internacionais</h3>
            <a href="">Analista Internacional</a>
            <a href="">Ensino</a>
            <a href="">Comércio Exterior</a>
            <a href="">Agências Governamentais</a>
            <a href="">Diplomacia</a>

         </div>
         <div>
            <h3>Direito</h3>
            <a href="">Arbitragem Internacional</a>
            <a href="">Direito Civil</a>
            <a href="">Direito Ambiental</a>
            <a href="">Direito do Consumidor </a>
            <a href="">Advocacia Pública</a>
            <a href="">Delegacia de Polícia</a>
            <a href="">Ministério Público</a>

         </div>
         <div>
            <h3>Pedagogia</h3>
            <a href="">Administração Escolar</a>
            <a href="">Ensino</a>
            <a href="">Coordenação Pedagógica</a>
            <a href="">Educação Especial</a>
            <a href="">Pedagogia Hospitalar</a>
            <a href="">Produção de Livros</a>
         </div>

         <div>
            <h3>Ciência do Consumo</h3>
            <a href="">Pesquisa</a>
            <a href="">Gestão</a>
            <a href="">Orientação</a>
         </div>
      </div>
      <div class="header-links" id="sl-5">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Cinema e Audiovisual</h3>
            <a href="">Captação de Som</a>
            <a href="">Roteiro</a>
            <a href="">Direção da Arte</a>
            <a href="#" onclick="show_fotografia()">Fotografia</a>
            <a href="">Sonorização</a>

         </div>
         <div>
            <h3>Jornalismo</h3>
            <a href="">Comunicação Digital Multimídia</a>
            <a href="">Comunicação Empresarial</a>
            <a href="">Edição</a>
            <a href="">Fotojornalismo</a>
            <a href="">Reportagem</a>
         </div>
         <div>
            <h3>Publicidade e Propaganda</h3>
            <a href="">Atendimento</a>
            <a href="">Criação</a>
            <a href="">Gerência de Produto</a>
            <a href="">Marketing</a>
            <a href="">Mídia</a>
            <a href="">Pesquisa</a>
            <a href="">Produção de Vendas</a>
         </div>

         <div>
            <h3>Arquivologia</h3>
            <a href="">Conservação e Restauração</a>
            <a href="">Consultoria</a>
            <a href="">Documentação Eletrônica</a>
            <a href="">Gestão de Conteúdo</a>
         </div>
      </div>
      <div class="header-links" id="sl-6">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Biomedicina</h3>
            <a href="">Acupuntura</a>
            <a href="">Análise Ambiental</a>
            <a href="">Bioinformática</a>
            <a href="">Biologia Molecular</a>
            <a href="">Citologia</a>
            <a href="">Docência e Pesquisa</a>
            <a href="">Embriologia</a>
            <a href="">Saúde Pública</a>
            <a href="">Patologia</a>
         </div>
         <div>
            <h3>Educação Física</h3>
            <a href="">Condicionamento Físico</a>
            <a href="">Ensino</a>
            <a href="">Grupos Especiais</a>
            <a href="">Performance</a>
            <a href="">Recreação</a>
            <a href="">Turismo Ecológico</a>
         </div>
         <div>
            <h3>Enfermagem</h3>
            <a href="">Enfermagem Estética</a>
            <a href="">Enfermagem Forense</a>
            <a href="">Enfermagem Geral</a>
            <a href="">Enfermagem Obstétrica</a>
            <a href="">Enfermagem Offshore</a>
            <a href="">Enfermagem Pediátrica</a>
            <a href="">Gestão de Qualidade</a>
            <a href="">Pesquisa Clínica</a>
         </div>
         <div>
            <h3>Nutrição</h3>
            <a href="">Administração</a>
            <a href="">Catering</a>
            <a href="">Controle Nutricional</a>
            <a href="">Nutrição Esportiva</a>
            <a href="">Docência e Pesquisa
               <a href="">Saúde Coletiva</a>
         </div>
         <div>
            <h3>Odontologia</h3>
            <a href="">Clínica Geral</a>
            <a href="">Dentística Restauradora</a>
            <a href="">Implantodontia</a>
            <a href="">Ortodontia</a>
            <a href="">Prótese Dentária</a>
            <a href="">Radiologia</a>
            <a href="">Periodontia</a>
         </div>
      </div>
   </div>


   <section class="student-life" id="sl-default">
      <h3>Expanda seu conhecimento explorando novos assuntos no Student Life.</h3>
      <br>
      <p> Aqui você consegue visualizar os temas, os tipos de atuação e características de cada área profissional. No
         Student Life
         você será direcionado a tomar as melhores decisões para o seu futuro e de acordo com seus gostos e
         perspectivas.<br></p>


      <p style="margin:auto; text-align:center;">Escolha sua trilha acima <i class="fi fi-rr-caret-up"></i></p>
   </section>

   <section class="student-life hide" id="sl-dev-web">
      <h2> Desenvolvedor Web</h2>
      <p style="margin:auto; text-align:center;">Em qual nível você está?</p>
      <div class="progress-bar">

         <input type="radio" name="hide" class="beg">
         <input type="radio" name="hide" class="int">
         <input type="radio" name="hide" class="pro">

         <button class="circle nv1-circle" onclick="beginner()"></button>
         <div class="bar n1-bar"></div>
         <button class="circle nv2-circle" onclick="intermediate()"></button>
         <div class="bar n2-bar"></div>
         <button class="circle nv3-circle" onclick="profissional()"></button>
      </div>
      </div>

      <div class="sl-card" id="beginner">
         <img src="../src/logo/shiba/shiba_1.png" alt="">
         <div class="text">
            <h3>Iniciante</h3>
            <p>
               <li>Lógica da Programação</li>
               <li>HTML/CSS</li>
               <li>Introdução ao Python</li>
               <li>Inglês</li>

            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <div class="sl-card" id="intermediate">
         <img src="../src/logo/shiba/shiba_2.png" alt="">
         <div class="text">
            <h3>Desenvolvedor Intermediário</h3>
            <p>
               <li>Foque em aprender uma Linguagem e o Domínio</li>
               <li>Banco de Dados - PHP/MySQL</li>
               <li>Bibliotecas</li>
               <li>Inglês </li>
            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <div class="sl-card" id="profissional">
         <img src="../src/logo/shiba/shiba_3.png" alt="">
         <div class="text">
            <h3>Programador Avançado</h3>
            <p>
               <li>Especialização em uma Linguagem</li>
               <li>Linguagens diversas</li>
               <li>Networking</li>
               <li>Ajude a Comunidade</li>
            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <section>
         <br><br>
         Atualmente todas as médias e grandes empresas possuem um website para divulgar, compartilhar e se relacionar com seus clientes. E com isso, cada vez mais necessitam de profissionais que consigam criar e desenvolver websites com a cara da marca. <br><br><br>

         <h3>Mas afinal, o que é um Website e o que um Desenvolvedor Web faz?</h3>
         A tradução de Web do inglês é rede, e o nome dado à Rede Mundial de Computadores é www (World Wide Web). Site significa lugar, então Website é um lugar na rede. Porém, para encontrar um site, é preciso um domínio, que nada mais é que um endereço online. Como exemplo, nosso domínio é newron.com.br . Se você já tem uma ideia de nome para seu site, faça uma pesquisa o quanto antes e adiante a compra de domínio para garantir o seu nome de negócio online. <br><br>

         <h3 style='font-weight:400;'>Existem vários tipos de website:</h3>
         <strong>Sites:</strong> sites institucionais, afiliados e pessoais com formato de portfólio. Os sites são essenciais para a presença online de qualquer negócio.
         <br><strong>Blog:</strong> blog de viagens, blog de receitas, blog de games ou blog pessoal. Você pode criar um blog sobre o assunto que quiser.
         <br><strong>Loja Virtual:</strong> também conhecidos como e-commerce. Venda o que quiser 24 horas por dia.<br><br><br>

         <h3>E quanto ao Desenvolvedor Web?</h3>
         Também chamado de Web Developer ou Programador, este tem duas áreas de atuação: front-end e back-end. 
         Ele é responsável por toda a estrutura de um site. Ele planeja, constrói e dá manutenção para tudo que roda em uma plataforma web. Este profissional também precisa garantir que tudo funcione de acordo com o esperado.<br><br>
         <h3 style='font-weight:400;'>Segue uma breve explicação das áreas Back-end e Front-end:</h3>
         <strong> Back-end:</strong> responsável pelo servidor que hospeda o seu site, garantindo que os dados enviados para o navegador estejam corretos. Deve seguir as boas práticas de segurança de dados. Costuma dominar as linguagens SQL, MySQL e PostgreSQL.<br>
         <strong>Front-end:</strong> cuida de toda a parte que você pode ver em um site. Sua maior preocupação é a experiência que o usuário tem ao fazer um acesso, cuidando desde o layout até pequenos detalhes de menus e rodapés. Costuma trabalhar com as linguagens HTML, CSS e JavaScript.<br><br>
         Há também o profissional que consegue trabalhar nas duas áreas front-end e back-end, que é chamado de <strong>Desenvolvedor Web Full Stack</strong>. Este, atua em todas as etapas de um sistema, do servidor ao banco de dados, além de também se envolver na parte de desenvolvimento mobile, já que essa área está cada vez mais presente nas empresas.<br><br>
         Cursos que capacitam você a trabalhar como Desenvolvedor Web são Análise de Sistemas, Ciência da Computação ou similares.

      </section>
   </section>

   <section class="student-life hide" id="sl-anim">
      <h2> Animação</h2>
      <p style="margin:auto; text-align:center;">Em qual nível você está?</p>
      <div class="progress-bar">

         <input type="radio" name="hide" class="beg">
         <input type="radio" name="hide" class="int">
         <input type="radio" name="hide" class="pro">

         <button class="circle nv1-circle" onclick="beginner_animator()"></button>
         <div class="bar n1-bar"></div>
         <button class="circle nv2-circle" onclick="intermediate_animator()"></button>
         <div class="bar n2-bar"></div>
         <button class="circle nv3-circle" onclick="profissional_animator()"></button>
      </div>
      <div class="sl-card" id="beginner_animator">
         <img src="../src/logo/shiba/shiba_1.png" alt="">
         <div class="text">
            <h3>Animador Iniciante</h3>
            <p>
               <li>Técnica de desenho volumétrico</li>
               <li>Técnica animação pose a pose ou direta</li>
               <li>Dominío dos softwares da área(Sugestões: Adobe Animate/Toon Boom)</li>

            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <div class="sl-card" id="intermediate_animator">
         <img src="../src/logo/shiba/shiba_2.png" alt=""><!-- alt= texto para cego ou leitor de textos ------- wind + shitf + del = alto identar -->
         <div class="text">
            <h3>Animador Intermediário</h3>
            <p> 
               <!-- Este é um comentário, lembrar de não fecha ↓ as abertos -->
               <li>Pratique exercícios simples (Ex: caminhada)</li>
               <li>Técnica de sobreposição e continuidade da ação</li>
               <li>Técnica de temporização</li>
               <li>Técnica de apelo </li>
            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <div class="sl-card" id="profissional_animator">
         <img src="../src/logo/shiba/shiba_3.png" alt="">
         <div class="text">
            <h3>Animador Avançado</h3>
            <p>
               <li>Monte seu portifólio</li>
               <li>Aprimore seus conhecimentos (sugestões: estágio/curso/divulgação)</li>
               <li>Contribua para Comunidade </li>

               <li>Networking: contrua redes e contatos</li>
            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <section>
         <br>
         <br>
         <h2>CONHEÇA OS PRINCÍPIOS DA ANIMAÇÃO</h2>
         <br>
          <div>
            <h3>1. Comprimir e Esticar (Squash and Stretch)</h3>
            Sem dúvida, este é o conceito mais importante. Qualquer figura viva demonstra mudanças consideráveis na sua forma ao se deslocar durante uma ação.
            O rosto de um personagem ganha mais vida quando as formas dos olhos, bochechas e lábios mudam de forma, com a utilização do “Squash & Stretch” ( comprime e estica ).
            Ao se usar o “Squash & Stretch”, é importante sempre manter o volume da forma.
            <br><img src="../src/student-life/student-life-animation/squash.png">
            <br>
            <h3>2. Antecipação (Anticipation)</h3>
            Quando as pessoas estão assistindo a um desenho, elas não entenderão o que está ocorrendo se não houver uma sequência de ações que levem claramente de uma atividade a outra. As pessoas devem ser preparadas para o próximo movimento e esperá-lo antes que este ocorra. Deve ocorrer uma antecipação. Como na vida real, poucos movimentos ocorrem sem antecipação. Sem ela, os movimentos não teriam força. Pense em um tenista, jogador de basebol, basquete ou futebol, todos antecipam o movimento em direção oposta antes de dar a tacada, o chute, etc.
            <br>
            <br>
            <h3>3. Encenação (Staging)</h3>
            Este princípio está baseado em apresentar uma ação de forma que fique claro visualmente para o espectador.
            Uma ação tem bom “Staging” quando a expressão é bem vista, o movimento é claro e visível.
            Quando você está fazendo o “Staging” de uma ação deve ter cuidado para não usar um ângulo que atrapalhe o que você quer mostrar.
            Uma boa forma de conseguir um bom “staging” é através do uso de silhueta.
            <br>
            <br>
            <h3>4. Animação Direta e Pose a Pose (Straight Ahead Action and Pose to Pose)</h3>
            Há dois métodos para animar uma cena, o “direto” (straight ahead) e o “pose a pose”.
            No método “direto” o animador desenha um movimento após o outro até o final da cena. Neste caso, a animação sai mais espontânea e a cena parece menos mecânica. Desta forma o animador não planeja exatamente como vai ser o decorrer da cena e vai inventando à medida em que progride. Este método geralmente é usado em cenas de ação, onde muitas vezes ocorrem movimentos rápidos e inesperados, embora seja preciso cuidado para que o personagem não fique fora da perspectiva ou checagem do cenário.
            <br>
            <br>
            <h3>5. Continuidade e Sobreposição da Ação (Overlapping Action and Follow Through)</h3>
            Quando um personagem entrava andando em cena e de repente parava completamente, a ação parecia dura e não era convincente. Foi encontrada então uma forma em que, basicamente, as partes não parassem de se movimentar todas ao mesmo tempo.
            É o principio do “Follow Through” (movimento sequencial).
            Se o personagem tem elementos como orelhas grandes, cauda ou casaco, estas partes continuam a se mover mesmo após a figura ter parado.
            O movimento de cada elemento terá um tempo diferente de acordo com seu peso e características.
            <br>
            <br>
            <h3>6. Aceleração e Desaceleração (Slow In and Slow Out)</h3>
            Uma vez que o animador desenhava cuidadosamente seus extremos, pensando no tempo decorrente da ação como um todo, precisava indicar ao intervalador como seriam feitos os intervalos. Usava então uma “chave de intervalação”.
            Uma vez que o animador desenhava cuidadosamente seus extremos, pensando no tempo decorrente da ação como um todo, precisava indicar ao intervalador como seriam feitos os intervalos. Usava então uma “chave de intervalação”.
            Através de indicações na “chave” o movimento se desenhava ao longo da animação.
            Colocando os intervalos perto dos extremos se consegue um resultado interessante, com o personagem indo rapidamente de uma pose à outra.


         </div>

      </section>
   </section>

   <section class="student-life hide" id="sl-photo">
      <h2> Fotografia</h2>
      <p style="margin:auto; text-align:center;">Em qual nível você está?</p>
      <div class="progress-bar">

         <input type="radio" name="hide" class="beg">
         <input type="radio" name="hide" class="int">
         <input type="radio" name="hide" class="pro">

         <button class="circle nv1-circle" onclick="beginner_photo()"></button>
         <div class="bar n1-bar"></div>
         <button class="circle nv2-circle" onclick="intermediate_photo()"></button>
         <div class="bar n2-bar"></div>
         <button class="circle nv3-circle" onclick="profissional_photo()"></button>
      </div>
      </div>

      <div class="sl-card" id="beginner_photo">
         <img src="../src/logo/shiba/shiba_1.png" alt="">
         <div class="text">
            <h3>Animador Iniciante</h3>
            <p>
               <li>Defina seus traços</li>
               <li>Técnica de Comprimir e esticar</li>
               <li>Técnica de Antecipação</li>
               <li>Técnica de Encenação</li>

            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <div class="sl-card" id="intermediate_photo">
         <img src="../src/logo/shiba/shiba_2.png" alt="">
         <div class="text">
            <h3>Animador Intermediário</h3>
            <p>
               <li>Técnica de Animação direta e pose a pose</li>
               <li>Técnica de Continuidade e sobreposição da ação</li>
               <li>Técnica Aceleração e desaceleração</li>
               <li>Técnica Movimento em arco </li>
            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <div class="sl-card" id="profissional_photo">
         <img src="../src/logo/shiba/shiba_3.png" alt="">
         <div class="text">
            <h3>Animador Avançado</h3>
            <p>
               <li>Técnica de Ação Secundária</li>
               <li>Princípio Temporização</li>
               <li>Princípio Exagero</li>
               <li>Técnica Desenho volumétrico</li>
               <li>Trabalhar Apelo — Design Atraente</li>
            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <section>
         <!-- O conteúdo feito aqui será exposto mesmo pós clicar nas seleções iniciante, intermediário ou profissional -->
      </section>
   </section>

   <!-------Footer------->
   <footer></footer>
   <script src="../components/footer.js"></script>
   <!-------End Footer------->

   <script src="../script/student-life.js">
   </script>
   <div class="mouse"></div>
</body>

</html>