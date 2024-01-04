<?php
session_start();
include "connection/conectar.php";
   if(isset($_POST['enviar'])){
      if(isset($_POST['idobra']) || isset($_POST['nome']) || isset($_POST['autor']) || isset($_POST['email_autor']) || isset($_POST['nickname']) || isset($_POST['link']) || isset($_POST['dataCriacao']) || isset($_POST['dataPedido']) || isset($_POST['tipo'])){
         $nome = $_POST['nome'];
         $autor = $_POST['autor'];
         $email_autor = $_POST['email_autor'];
         $nickname = $_POST['nickname'];
         $link = $_POST['link'];
         $dataCriacao = $_POST['dataCriacao'];
         $dataPedido = $_POST['dataPedido'];
         $tipo = $_POST['tipo'];
         $idobra = $_POST['idobra'];
         $checarCadastro = mysqli_query($conectar,"SELECT * FROM OBRA WHERE ID_OBRA='$idobra';");
         $checarAutor = mysqli_query($conectar,"SELECT * FROM AUTOR WHERE EMAIL = '$email_autor';");
         echo $_SESSION['email'];
         echo $_SESSION['idobra'];
         echo $nome;
         echo $autor;
         echo "olaaa".$idobra;

               if(mysqli_num_rows($checarAutor) != 0){
                  mysqli_query($conectar, "UPDATE AUTOR SET NOME='$autor', EMAIL = '$email_autor', NICKNAME='$nickname' WHERE EMAIL='$email_autor';");
               }else{
                  mysqli_query($conectar, "INSERT INTO AUTOR (NOME, EMAIL, NICKNAME) VALUES ('$autor','$email_autor','$nickname')");
               }
               $pesquisarAutor = mysqli_query($conectar, "SELECT ID_AUTOR FROM AUTOR WHERE NICKNAME='$nickname'");
               while($encontrarid=mysqli_fetch_array($pesquisarAutor)){
                  $idautor=$encontrarid[0];
               }
               mysqli_query($conectar, "UPDATE OBRA SET DESCRICAO = '$nome', FOTO = '$link', DATA_REQUERIDA = '$dataPedido', DATA_CRIACAO = '$dataCriacao', ID_TIPOOBRA = '$tipo', ID_AUTOR = '$idautor' WHERE ID_OBRA = '$idobra';");
               echo "<script>alert('Obra atualizada!');</script>";
               
      }else{
         echo "<script>alert('Preencha todos os campos!');</script>";   
      }
   }
?>