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
    <title>Perguntas Frequentes - Newron</title>
    <!-------CSS------->
    <link rel="stylesheet" href="../style/policies.css ">
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


    <main>
        <section class="paper">
            <h1>
                <center>Política de Privacidade e Inclusão</center>
            </h1>

            <p>A Newron respeita a privacidade dos usuários e deseja que todos entendam como
                coletamos, usamos e compartilhamos os dados dos usuários. Esta Política de
                Privacidade abrange nossas práticas de coleta de dados e descreve os direitos do
                usuário em relação aos dados pessoais. <br><br><br>
                <span>1. Tipos de dados coletados</span><br><br>
                Coletamos determinados dados diretamente dos usuários, tais como informações
                inseridas por você, dados sobre seu consumo do conteúdo e dados provenientes
                de plataformas de terceiros com as quais o usuário se conecta com a Newron.
                Coletamos também alguns dados automaticamente, tais como informações sobre
                seu dispositivo e com quais partes dos nossos Serviços você interage ou utiliza.
                Podemos coletar diferentes dados sobre o usuário, ou por ele fornecidos, de
                acordo com a forma como o usuário utiliza os Serviços. Veja a seguir alguns
                exemplos para ajudá-lo a entender melhor os dados que coletamos.
                Quando o usuário cria uma conta e usa os Serviços, inclusive por meio de uma
                plataforma de terceiros, coletamos todos os dados fornecidos diretamente, entre
                eles: dados da conta, dados do perfil, conteúdo compartilhado, dados de conteúdo
                educacional, comunicação e suporte dados geográficos aproximados.<br><br>
                <span>2. Finalidade dos dados dos usuários</span><br><br>
                Usamos os dados do usuário para fins tais como fornecer nossos Serviços, nos
                comunicarmos com o usuário, solucionar problemas, proteger contra fraude e
                abuso, melhorar e atualizar nossos Serviços, analisar como as pessoas usam
                nossos Serviços, veicular publicidade personalizada, conforme exigido por lei ou
                necessário para a segurança e a integridade. Os dados são retidos pelo tempo
                necessário para atender aos fins para que foram coletados.
                Os dados colhidos quando o usuário utiliza os Serviços são usados para fornecer e
                administrar os Serviços, inclusive para facilitar a participação em conteúdo
                educacional, emitir certificados de conclusão, exibir conteúdo personalizado e
                facilitar a comunicação com outros usuários; processar solicitações e pedidos de
                conteúdo educacional feitos pelo usuário, produtos, serviços específicos,
                informações ou recursos; gerenciar sua conta e as preferências da conta e
                personalizar sua experiência; facilitar a operação técnica dos Serviços, inclusive
                solução de problemas, proteção dos Serviços e prevenção de fraudes e abuso.<br><br>
                <span>3. Com quem são compartilhados os dados dos usuários</span><br><br>
                Compartilhamos alguns dados sobre o usuário com os instrutores, outros alunos e
                às empresas que colaboram com a Newron. Poderemos também compartilhar os
                dados do usuário, conforme necessário, para fins de segurança, conformidade
                legal ou como parte de uma reestruturação corporativa. Por fim, podemos
                compartilhar dados de outras formas, se forem agregados ou não identificados, ou
                se obtivermos consentimento do usuário.<br><br>
                <span>4. Segurança</span>
                <br><br>
                Usamos segurança adequada com base no tipo e na confidencialidade dos dados
                que estão sendo armazenados. Como em qualquer sistema com acesso à Internet,
                há sempre o risco de acesso não autorizado. Por isso, é importante que o usuário
                proteja a senha ou entre em contato conosco em caso de suspeita de acesso não
                autorizado à sua conta.<br>
                A Newron adota medidas de segurança adequadas para proteger-se contra acesso
                não autorizado, alteração, divulgação ou destruição dos dados pessoais do usuário
                por nós coletados e armazenados. Essas medidas variam com base no tipo e na
                confidencialidade dos dados. Infelizmente, no entanto, nenhum sistema pode ser
                100% protegido. Por isso, não podemos garantir que as comunicações entre o
                usuário e a Newron, os Serviços ou qualquer informação fornecida à Newron em
                relação aos dados por nós coletados por meio dos Serviços estejam livres de
                acesso não autorizado por terceiros. A senha do usuário é uma parte importante
                do nosso sistema de segurança, e é responsabilidade do usuário protegê-la. Não
                compartilhe a senha com terceiros. Em caso de suspeita de violação da senha ou
                conta, altere-a imediatamente e entre em contato com o nosso suporte para sanar
                a situação.<br><br>
                <span>5. Direitos dos usuários</span><br><br>
                O usuário poderá atualizar ou encerrar sua conta dentro dos nossos Serviços e
                também entrar em contato conosco para esclarecer dúvidas quanto a direitos
                individuais sobre seus dados pessoais. Pais que acreditem que tenhamos coletado
                acidentalmente dados pessoais sobre seus filhos menores de idade devem entrar
                em contato conosco para obter ajuda sobre como excluir essas informações.
                Para solicitar acesso, corrigir ou excluir dados pessoais, nos envie um e-mail
                para <a href="mailto:support@newron.com.br">support@newron.com.br</a>, guarde até 5 dias para obter uma resposta. Pode
                ser necessário confirmar a identidade do usuário antes de implementar a
                solicitação.<br><br>
                <span>6. Modificações nesta política de privacidade</span><br><br>
                De tempos em tempos, poderemos atualizar esta Política de Privacidade. Em caso
                de alterações significativas, notificaremos o usuário no próprio site. Incluiremos
                também um resumo das principais alterações. Salvo indicação em contrário, as
                modificações entrarão em vigor no dia em que forem publicadas.
                Conforme permitido pela lei aplicável, ao continuar a usar os Serviços após a data
                de vigência de qualquer alteração, o acesso e/ou uso, por parte do usuário, serão
                considerados uma aceitação da Política de Privacidade revisada (e concordância
                em seguir e vincular-se a ela). A Política de Privacidade revista substitui todas as
                Políticas de Privacidade anteriores.
                Em caso de dúvidas, esclarecimentos ou conflitos em relação à nossa Política de
                Privacidade, entre em contato pelo endereço de e-mail support@newron.com.br
                Ao usar os Serviços, o usuário concorda com os termos desta Política de
                Privacidade. Não use os Serviços caso não concorde com esta Política de
                Privacidade ou qualquer outro acordo que reja o uso dos Serviços por parte do
                usuário.<br><br>

                Esta Política de Privacidade foi atualizada pela última vez em 20 de Junho de
                2022.<br><br><br>

            <h4>Nosso compromisso com a inclusão</h4><br>

            Acreditamos que o aprendizado deve estar disponível para qualquer pessoa. Por
            isso, a acessibilidade é um assunto importante para nós. Nossas equipes estão
            sempre trabalhando para melhorar a acessibilidade dos nossos serviços de
            diversas maneiras. Veja alguns exemplos de como estamos criando uma Newron
            mais acessível: <br>
            Diretrizes de acessibilidade: nós nos esforçamos para seguir diretrizes de
            acessibilidade para pessoas com deficiência visual.<br>
            Atualizações de design: a acessibilidade é um princípio fundamental no nosso
            sistema interno de design. Nossos projetistas trabalham ao máximo para fazer
            atualizações no design periodicamente.<br>
            Pesquisa contínua: pesquisamos frequentemente sobre acessibilidade para
            auditar nossos serviços e oferecer recomendações para melhorar a
            acessibilidade a qualquer pessoa.</p>
        </section>
    </main>

    <!-------Footer------->
    <footer></footer>
    <script src="../components/footer.js"></script>
    <!-------End Footer------->



</body>

</html>