<?php
ob_start();
include "connection/conectar.php";
session_start();
         $idobra = $_POST['idobra'];
         $email = $_SESSION['email'];
         mysqli_query($conectar,"DELETE FROM FAVORITO WHERE FK_USUARIO = '$email' && FK_OBRA = '$idobra';");
         header("Location:acervoLogado.php");
?>