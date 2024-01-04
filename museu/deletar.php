<?php
ob_start();
include "connection/conectar.php";
session_start();
         $idobra = $_POST['idobra'];
         mysqli_query($conectar,"DELETE FROM OBRA WHERE ID_OBRA = '$idobra';");
         header("Location:acervoAdmin.php");
?>