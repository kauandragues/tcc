<?php
session_start();
if($_SESSION['email']){
   
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
               <a class="logo" href="indexLogado.php"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="indexLogado.php">Principal</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="sobreLogado.php">Sobre</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="acervoLogado.php">Acervo</a>
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
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Seja <br> bem-vindo(a) ao <br>Paulo <br> Agostinho<br>Sobrinho</h1>
                           <p class="banner_text">Inaugurado na cidade de Racatinga no interior de São Paulo, temos a intenção de conservar obras que fazem parte ativamente de nosso patrimônio cultural.</p>
                           <div class="btn_main">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-1.jpg"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Seja <br> bem-vindo(a) ao <br>Paulo <br> Agostinho<br>Sobrinho</h1>
                           <p class="banner_text">A Secretaria Municipal de Racatinga escolheu este nome em homenagem à esse grande médico que fez grandes feitos pela cidade.</p>
                           <div class="btn_main">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-3.jpg"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="banner_taital">Seja <br> bem-vindo(a) ao <br>Paulo <br> Agostinho<br>Sobrinho</h1>
                           <p class="banner_text">Sinta-se à vontade para passear pelo nosso site!</p>
                           <div class="btn_main">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="image_1"><img src="images/img-4.jpg"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            <br>
            <br>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i style="font-style: initial;">01</i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i style="font-style: initial;">02</i>
            </a>
         </div>
      </div>
      <!-- banner section end -->
      <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
            <div class="row-footer">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Acesse outras páginas</h2>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="indexLogado.php">Principal</a></li>
                        <li><a href="sobreLogado.php">Sobre</a></li>
                        <li><a href="acervoLogado.php">Acervo</a></li>
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