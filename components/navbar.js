navbar = new Vue({
   name:'navbar',
   el: '.navbar',
   data() {
         return {
            navbar_title_1: 'Sobre Nós',
            navbar_title_2: 'Parceiros',
            navbar_dropdown_title_1: 'Comunidade',
            navbar_dropdown_1_subtitle: 'Fórum',
            search_icon:'fi fi-rr-search',
   
            mobile_menu_switch: false,
            user_online:true,
            class_of_navbar_search_field:'navbar-search-field',
            value_of_navbar_search_field:null,
            class_of_dropdow_user:'dropdow-user-closed',
         }
   },
   methods: {
      open_mobile_menu(){
         this.mobile_menu_switch=true
         /*Add class switch to soft fade in out*/
      },
      close_mobile_menu(){
         this.mobile_menu_switch=false
         /*Add class switch to soft fade in out*/
      },
      show_search_field(){
         
         if(this.class_of_navbar_search_field=='navbar-search-field' || this.class_of_navbar_search_field=='navbar-search-field--closed'){
            this.class_of_navbar_search_field=('navbar-search-field--active')
            this.search_icon=('fi fi-rr-cross')
         }
         else
         {
            this.class_of_navbar_search_field=('navbar-search-field--closed')
            this.search_icon=('fi fi-rr-search')
         }
      },
      onclick_dropdow(){
         if (this.class_of_dropdow_user=='dropdow-user-closed'){
            this.class_of_dropdow_user='dropdow-user-actived'
         }
         else{
            this.class_of_dropdow_user='dropdow-user-closed'
         }
      },
      anything(){
         console.log(this.value_of_navbar_search_field);
         
         if
         (
            this.value_of_navbar_search_field == 'Student life' 
            ||
            this.value_of_navbar_search_field == 'student'
            ||
            this.value_of_navbar_search_field == 'stud'
            ||
            this.value_of_navbar_search_field == 'Vida do estudante'
         )
         {window.location = "student-life.php"}
         else if
         (
            this.value_of_navbar_search_field == 'Sobre nós'
            ||
            this.value_of_navbar_search_field == 'About us'
         )
         {window.location = "about-us.php"}
         else if
         (
            this.value_of_navbar_search_field == 'Teste vocacional'
            ||
            this.value_of_navbar_search_field == 'Vocational test'
         )
         {window.location = "index.php"}
         else if
         (
            this.value_of_navbar_search_field == 'FAQ'
            ||
            this.value_of_navbar_search_field == 'Perguntas frequentes'
         )
         {window.location = "faq.php"}
         else if
         (
            this.value_of_navbar_search_field == 'Políticas de privacidade e inclusão'
            ||
            this.value_of_navbar_search_field == 'Policies'
         )
         {window.location = "policies.php"}
         else if
         (
            this.value_of_navbar_search_field == 'Página inicial'
            ||
            this.value_of_navbar_search_field == 'Homepage'
         )
         {window.location = "index.php"}
      }
   },
   template:
`
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
               <div class="nav-user">
               <a href="sign-in.php" class="login">Entrar</a>
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
               <a href="sign-in.php" style="color:#f5f5f5;">Entrar</a>
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

`
})

