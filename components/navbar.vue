<template>
    <div class="nav-components">
         <div class="nav-mobile">
            <button id="nav_mobile_menu">
               <i class="fi fi-rr-menu-burger"></i>
               <i class="fi fi-rr-cross"></i>
            </button>
            <ul class="mobile-menu-total hide">
               <li class="mobile-menu">
                  <a href="../about_us.html">Sobre nós</a>
               </li>
               <li class="mobile-menu"><a href="off-focus/connections.html">Parceiros</a></li>
               <li class="mobile-menu">Comunidade
                  <ul class="mobile-submenu">
                     <li><a href="error-pages/not-ready.html">Fórum</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="nav-left">
            <div class="nav-logo">
               <a href="../html/index.html"><img src="../assets/logo/logo-no-details.png" alt="logo"></a>
            </div>
            <ul class="menu-area">
               <li class="menu">
                  <a href="off-focus/about_us.html">Sobre nós</a>
               </li>
               <li class="menu"><a href="off-focus/connections.html">Parceiros</a>a</li>
               <li class="menu">Comunidade
                  <ul class="submenu">
                     <li><a href="error-pages/not-ready.html">Fórum</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="nav-right">
            <div class="nav-user">
               <i class="fi fi-rr-search"></i>
               <div class="ver-line"></div>
               <a href="../html/login.html" class="login">Entrar</a>
            </div>
         </div>
      </div>
</template>

<script>
    export default {
        name:'Navbar'
}
</script>