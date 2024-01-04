<?php
ob_start();
include "connection/conectar.php";
session_start();
         $idobra = $_POST['idobra'];
         $email = $_SESSION['email'];
         mysqli_query($conectar,"insert into FAVORITO (FK_USUARIO, FK_OBRA) values ('$email','$idobra');");
         header("Location:acervoLogado.php");
?>