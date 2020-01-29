<?php

require_once "conexao.php";

if(isset($_POST ["btnEnviar"])):
	$nome = mysqli_escape_string($conexao, $_POST["inputName"]);
	$cidade = mysqli_escape_string($conexao, $_POST["inputCitt"]);
	$estado = mysqli_escape_string($conexao, $_POST["inpuEstado"]);
    $coment = mysqli_escape_string($conexao, $_POST["comment"]);
    $email = mysqli_escape_string($conexao, $_POST["inputEmail"]);	

	$sql = "INSERT INTO internautas (cidade, descricao, email, estado, nome) VALUES ('$nome', '$cpf', '$cnh', '$nascimento', '$email', '$telefone', '$usuario', '$senha')";
	if(mysqli_query($conexao, $sql)):
		header('Location: index.php?sucesso');
	else:
		header('Location: index.php?erro');
	endif;	
endif;