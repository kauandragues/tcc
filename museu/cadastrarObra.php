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
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_section_2">
               <div class="row-login">
                  <div class="colunas">
                     <div class="mail_section_1">
                        <h1 class="contact_taital">Cadastro de Obra</h1>
                        <form action="" method="POST">
                        <input type="text" class="mail_text" placeholder="Nome" name="nome" required>
                        <input type="text" class="mail_text" placeholder="Autor" name="autor" required>
                        <input type="text" class="mail_text" placeholder="E-mail do Autor" required name="email_autor">
                        <input type="text" class="mail_text" placeholder="Nickname do Autor" name="nickname" required>
                        <input type="text" class="mail_text" placeholder="Link" name="link" required>
                        <h8>Data de Criação:</h8>
                        <input type="date" class="mail_text" name="dataCriacao" required style="margin-top: -3px;"><br>
                        <h8>Data de Pedido:</h8>
                        <input type="date" class="mail_text" name="dataPedido" style="margin-top: -3px;" required><br>
                        <h8>Tipo:</h8><br>
                           <input type="radio" id="pintura" name="tipo" value="1">
                           <label for="pintura">Pintura</label>
                           <input type="radio" id="escultura" name="tipo" value="2">
                           <label for="escultura">Escultura</label><br>
                           <input type="radio" id="desenho" name="tipo" value="3">
                           <label for="desenho">Desenho</label>
                           <input type="radio" id="fotografia" name="tipo" value="4">
                           <label for="fotografia">Fotografia</label>
                        <div class="send_bt"><input type="submit" value="CADASTRAR" name="enviar"></div>
                        </form>
                     </div>
                  </div>
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
<?php
	include "connection/conectar.php";
   if(isset($_POST['enviar'])){
      if(isset($_POST['nome']) || isset($_POST['autor']) || isset($_POST['email_autor']) || isset($_POST['nickname']) || isset($_POST['link']) || isset($_POST['dataCriacao']) || isset($_POST['dataPedido']) || isset($_POST['tipo'])){
         $nome=$_POST['nome'];
         $autor=$_POST['autor'];
         $email_autor=$_POST['email_autor'];
         $nickname=$_POST['nickname'];
         $autor=$_POST['autor'];
         $link=$_POST['link'];
         $dataCriacao=$_POST['dataCriacao'];
         $dataPedido=$_POST['dataPedido'];
         $tipo=$_POST['tipo'];
         $checarCadastro = mysqli_query($conectar,"select * from OBRA where DESCRICAO='$nome'");
         $checarAutor = mysqli_query($conectar,"SELECT * FROM AUTOR WHERE EMAIL = '$email_autor'");
         
         if(mysqli_num_rows($checarCadastro) == 0){
               if(mysqli_num_rows($checarAutor) == 0){
                  mysqli_query($conectar, "INSERT INTO AUTOR (NOME, EMAIL, NICKNAME) VALUES ('$autor','$email_autor','$nickname')");
               }
               $pesquisarAutor = mysqli_query($conectar, "SELECT ID_AUTOR FROM AUTOR WHERE NICKNAME='$nickname'");
               while($encontrarid=mysqli_fetch_array($pesquisarAutor)){
                  $idautor=$encontrarid[0];
               }
               mysqli_query($conectar, "INSERT INTO OBRA (DESCRICAO, FOTO, DATA_REQUERIDA, DATA_CRIACAO, ID_TIPOOBRA, ID_AUTOR) 
               VALUES ('$nome','$link','$dataPedido','$dataCriacao','$tipo','$idautor');");
               echo "<script>alert('Obra cadastrada!');</script>";
            }else{
            echo "<script>alert('Obra já cadastrado!');</script>";
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