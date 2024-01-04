<?php 
  ob_start();
  if(!isset($_SESSION['email'])){
	  session_start();
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
               <a class="logo" href="index.php"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Principal</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="acervo.php">Acervo</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                     </li>
                  </ul>
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_section_2">
               <div class="row-login">
                  <div class="colunas">
                     <div class="mail_section_1">
                        <h1 class="contact_taital">Login</h1>
                        <form action="" method="POST">
                        <input type="text" class="mail_text" placeholder="Email" name="email">
                        <input type="password" class="mail_text" placeholder="Senha" name="senha">
                        <div class="send_bt"><input type="submit" value="ENTRAR"></div>
                        </form>
                     </div>
                  </div>
                  <p class="texto-cadastro">Não possui um login? <a href ="cadastrarLogin.php">Cadastre-se!</p>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
            <div class="row-footer">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Acesse outras páginas</h2>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.php">Principal</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li><a href="acervo.php">Acervo</a></li>
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
<?php
	include "connection/conectar.php";
	if(isset($_POST['email'])){
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$login = mysqli_query($conectar,"SELECT * FROM USUARIO WHERE EMAIL_USUARIO ='$email' && SENHA ='$senha' && (BLOQUEADO != '1' || BLOQUEADO is NULL);");
		if(mysqli_num_rows($login) > 0){
         if($email == "admin" && $senha == "12345"){
            $_SESSION['email'] = $email;
            header("Location:indexAdmin.php");
         }else{
		  $_SESSION['email'] = $email;
		  header("Location:indexLogado.php");
         }
		}
		else{
			echo "<script>alert('Email e senha incorretos ou usuário bloqueado!');</script>";
			session_destroy();
			session_unset();
		}
	}
?>