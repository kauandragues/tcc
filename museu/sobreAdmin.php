<?php
session_start();
if($_SESSION['email'] == "admin"){
}else{
   session_unset();
	session_destroy();
   header("Location:index.php");
};
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Museu Racatinga</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <a class="logo" href="indexAdmin.php"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                        <a class="nav-link" href="indexAdmin.php">Principal</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="sobreAdmin.php">Sobre</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="acervoAdmin.php">Acervo</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="cadastrarObra.php">Adicionar Obra</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="gerenciarUsuario.php">Gerenciar Usuário</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Sair</a>
                     </li>
                  </ul>
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_2"><img src="images/img-2.jpg"></div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="about_taital">Sobre os Desenvolvedores</h1>
                     <p class="about_text">Esta aplicação foi feita pelo grupo Pantera, composto por Adrielle Paiva, Grazielly Lima, Kathleen Santos e Kauã de Andrade. Ambos estão matriculados no terceiro ano do Curso de Informática Integrado ao Ensino Médio no IFSP Campus Hortolândia. A professora-orientadora é a Michele Barion.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Acesse outras páginas</h2>
                  <div class="footer_menu">
                     <ul>
                     <li><a href="indexAdmin.php">Principal</a></li>
                        <li><a href="sobreAdmin.php">Sobre</a></li>
                        <li><a href="acervoAdmin.php">Acervo</a></li>
                        <li><a href="cadastrarObra.php">Adicionar Obra</a></li>
                        <li><a href="gerenciarUsuario.php">Gerenciar Usuário</a></li>
                     </ul>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Pantera</h2>
                  <p class="lorem_text">Projeto realizado no Campus do Instituto Federal de Hortolândia. </p>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>