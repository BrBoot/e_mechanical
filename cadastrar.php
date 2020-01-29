<?php

session_start();

require_once 'conexao.php';

if(isset($_POST ["btnEnviar"])):
	$cidade = mysqli_escape_string($conexao, $_POST["inputCity"]);
	$desc = mysqli_escape_string($conexao, $_POST["desc"]);
	$email = mysqli_escape_string($conexao, $_POST["inputEmail"]);
    $estado = mysqli_escape_string($conexao, $_POST["inputState"]);
    $nome = mysqli_escape_string($conexao, $_POST["inputName"]);	

	$sql = "INSERT INTO internautas (cidade, data_da_criacao, descricao, estado, nome)
                                    VALUES ('$cidade', NOW(), '$desc', '$estado', '$nome')";
    if(mysqli_query($conexao, $sql)):
        $_SESSION['msg'] = "<p class='lead' style='color: green;'>Cadastrado com sucesso</p>";
		header('Location: index.php');
        else:
            $_SESSION['msg'] = "<p class='lead' style='color: red;'>Falha ao cadastrar</p>";
            header('Location: index.php');
	endif;	
endif;