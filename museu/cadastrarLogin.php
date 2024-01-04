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
                        <h1 class="contact_taital">Cadastro</h1>
                        <form action="" method="POST">
                        <input type="text" class="mail_text" placeholder="Nome" name="nome" required>
                        <input type="text" class="mail_text" placeholder="Email" name="email" required>
                        <input type="password" class="mail_text" placeholder="Senha" name="senha" required>
                        <input type="password" class="mail_text" placeholder="Confirmar Senha" name="confSenha" required>
                        <h8>Data de Nascimento</h8>
                        <input type="date" class="mail_text" name="dataNascimento" style="margin-top: -3px;" required>
                        <input type="number" class="mail_text" placeholder="Telefone" name="telefone" required>
                        <input type="text" class="mail_text" placeholder="Logradouro" name="logra" required>
                        <input type="text" class="mail_text" placeholder="Bairro" name="bairro" required>
                        <input type="text" class="mail_text" placeholder="Cidade" name="cidade" required>
                        <div class="send_bt"><input type="submit" value="SALVAR" name="enviar"></div>
                        </form>
                     </div>
                  </div>
                  <p class="texto-cadastro">Já tem uma conta? <a href ="login.php">Faça login!</p>
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
   if(isset($_POST['enviar'])){
      if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['confSenha']) || isset($_POST['dataNascimento']) || isset($_POST['telefone']) || isset($_POST['logra']) || isset($_POST['bairro']) || isset($_POST['cidade'])){
         $nome=$_POST['nome'];
         $email=$_POST['email'];
         $senha=$_POST['senha'];
         $confSenha=$_POST['confSenha'];
         $telefone=$_POST['telefone'];
         $logra=$_POST['logra'];
         $bairro=$_POST['bairro'];
         $cidade=$_POST['cidade'];
         $dataNascimento=$_POST['dataNascimento'];
         $checharCadastro = mysqli_query($conectar,"select * from USUARIO where EMAIL_USUARIO='$email'");
         
         if(mysqli_num_rows($checharCadastro) == 0){
            if($senha == $confSenha){
               $inserir=mysqli_query($conectar, "insert into USUARIO (EMAIL_USUARIO, NOME, DATANASCIMENTO, TELEFONE, ENDERECO, BAIRRO, CIDADE, SENHA) 
               VALUES ('$email','$nome','$dataNascimento','$telefone','$logra','$bairro','$cidade','$senha');");
               echo "<script>alert('Usuario cadastro!');</script>";
            }else{
               echo "<script>alert('As senhas são diferentes!');</script>";
               session_destroy();
               session_unset();
            }
         }else{
            echo "<script>alert('Email já cadastrado!');</script>";
            session_destroy();
            session_unset();
         }
      }else{
         echo "<script>alert('Preencha todos os campos!');</script>";
         session_destroy();
         session_unset();
      }
   }
?>