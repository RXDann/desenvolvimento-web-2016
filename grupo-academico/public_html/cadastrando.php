<!DOCTYPE html>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao =@mysql_connect($host,$user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
        <title>Cadastrando</title>
    </head>


    <?php
	$grupo = filter_input(INPUT_POST, 'grupo');
    $curso = filter_input(INPUT_POST, 'curso');
    $senha = filter_input(INPUT_POST, 'senha');
    $confirmasenha = filter_input(INPUT_POST, 'confirmasenha');
	if ($grupo == null || $curso == null || $senha == null || $confirmasenha == null ){
	   echo "<center><h1>Preencha todos os campos adequadamente!</h1></center>";   
	}
	else{
	   if ($senha == $confirmasenha){
	      $sql = mysql_query("INSERT INTO grupo (grupo,curso,senha,confirmasenha) VALUES ('$grupo','$curso','$senha','$confirmasenha') ");
          echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";
	      header("Location: entraGrupo.html");  
	   }
	   else{
          echo "<center><h1>As senhas não coincidem!</h1></center>";
	   }
	}
    ?>


</html>
