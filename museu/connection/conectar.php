<?php
    $conectar=mysqli_connect('localhost', 'root', '', 'info3a2023');
	if(!$conectar){
		echo "Não está sendo permitida a conexão com o dataset da aplicação. Um dos motivos pode ser a queda da rede. ";
	}
	//18.230.6.129
?>