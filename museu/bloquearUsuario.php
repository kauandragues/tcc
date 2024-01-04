<?php
ob_start();
include "connection/conectar.php";
session_start();
         $email = $_POST['email'];
         mysqli_query($conectar,"UPDATE USUARIO SET BLOQUEADO = '1' WHERE EMAIL_USUARIO = '$email';");
         header("Location:gerenciarUsuario.php");
?>

