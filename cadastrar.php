<?php

require_once 'conexao.php';

if(isset($_POST ["btnEnviar"])):
	$cidade = mysqli_escape_string($conexao, $_POST["inputCity"]);
	$desc = mysqli_escape_string($conexao, $_POST["desc"]);
	$email = mysqli_escape_string($conexao, $_POST["inputEmail"]);
    $estado = mysqli_escape_string($conexao, $_POST["inputState"]);
    $nome = mysqli_escape_string($conexao, $_POST["inputName"]);	

	$sql = "INSERT INTO internautas (cidade, data_da_criacao, descricao, email, estado, nome)
                                    VALUES ('$cidade', NOW(), '$desc', '$email', '$estado', '$nome')";
	if(mysqli_query($conexao, $sql)):
		header('Location: index.php?sucesso');
	else:
        header('Location: index.php?erro');
	endif;	
endif;