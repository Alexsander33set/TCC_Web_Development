new Vue({
   el: '.navbar',
   name: 'navbar',
   data() {
      return {
         navbar_title_1: 'Sobre nós',
         navbar_title_2: 'Parceiros',
         navbar_dropdown_title_1: 'Comunidade',
         navbar_dropdown_1_subtitle: 'Fórum',
         search_icon:'fi fi-rr-search',

         mobile_menu_switch: false,
         user_name:'Entrar',
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
})