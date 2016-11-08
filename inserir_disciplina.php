<?php
	session_start();
	include ("conexao.php");
      //  $disci=['inserir_texto'];
	$name = $_POST['adiciona_disciplina'];	
	$sql = "INSERT INTO `disciplina` (`id_disciplina`, `nome_disciplina`) VALUES (NULL, '$name')";
	echo $sql;
	unset($_SESSION['msg']);
	if (mysql_query($sql)) {
    	$_SESSION['msg'] = "Disciplina inserida com sucesso!";
	} else {
    	$_SESSION['msg'] = "ERRO! Falha ao inserir!";
	}
	header("Location: insere_disciplina.php");
?>