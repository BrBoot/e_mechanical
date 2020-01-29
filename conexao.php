<?php
	$conexao = mysqli_connect('localhost','root','','mecanico');	
    mysqli_set_charset($conexao, "utf8");
    if($conexao){
        echo "Conectado com sucesso";
    }
	else{
        echo "Erro na conexão:";
    }
?>