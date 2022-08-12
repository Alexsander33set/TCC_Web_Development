footer = new Vue({
   name:'footer',
   el: 'footer',
   data() {
      return {
         footer_link_instagram: 'https://www.instagram.com/newronn_',
         footer_link_linkedin: 'https://www.linkedin.com/in/newron-suporte-b71759243/#experience',
         footer_support_email:'support@newron.com',
         footer_support_email_link:'mailto:support@newron.com',
      }
   },
   methods: {
      
   },
   template:
`
<footer>
      
<section class="footer-components">
   <div class="footer-content">
      <div class="footer-left">
         <h3 class="title-m">Empresa</h3>
         <a class="par-m" href="about-us.php">Quem Somos</a>
         <a class="par-m" href="policies.php">Políticas de Privacidade e Inclusão</a>
      </div>
      <div class="footer-center">
         <h3 class="title-m">Colaboradores</h3>
         <a class="par-m" href="#">Trabalhe Conosco!</a>
         <div class="footer-colaboradores">
            <img src="../src/logo/partners/fb-logo-white.png" alt="">
            <img src="../src/logo/partners/ibm-logo-white.png" alt="">
         </div>
      </div>
      <div class="footer-right">
         <h3 class="title-m">Suporte</h3>
         <p class="par-m">E-mail:
            <a v-bind:href="footer_support_email_link">{{footer_support_email}}</a>
         </p>
         <a class="par-m" href="faq.html">Perguntas Frequentes</a>

      </div>
   </div>
   <div class="footer-media">
      <a v-bind:href="footer_link_instagram"><i class="fi fi-brands-instagram"></i></a>
      <a v-bind:href="footer_link_linkedin"><i
            class="fi fi-brands-linkedin"></i></a>
   </div>
   <div class="footer-line"></div>
   <div class="end">
      <p class="par-m">Encontre seu caminho com</p>
      <!--#top-return--><a href="#top-return"><img src="../src/logo/logo.png" alt="logo"></a>
      <p class="par-m">Newron</p>
   </div>
</section>

</footer>
`
})