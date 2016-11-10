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
		<script type="text/javascript">
        function cadastroaceito(){
        setTimeout("window.location='entraGrupo.html'", 500);
        }
        function cadastroerrado(){
        setTimeout("window.location='criaGrupo.html'", 900);
        }
        </script>
    </head>


    <?php
	$grupo = filter_input(INPUT_POST, 'grupo');
    $curso = filter_input(INPUT_POST, 'curso');
    $senha = filter_input(INPUT_POST, 'senha');
    $confirmasenha = filter_input(INPUT_POST, 'confirmasenha');
	//$sql = mysql_query("SELECT * FROM grupo WHERE grupo = '$grupo' "); //or die(mysql_error());
	//$row = mysql_num_rows($sql);
	if ($grupo == null || $curso == null || $senha == null || $confirmasenha == null ){
	    echo "<center><h1>Preencha todos os campos adequadamente!</h1></center>"; 
        echo "<script>cadastroerrado()</script>";	   
	}
	else{
		if( mysql_num_rows(mysql_query("SELECT * FROM grupo WHERE grupo = '$grupo' ")) > 0 ){
	        $_SESSION['grupo'] = $grupo;
			echo "<center><h1>Crupo ja existente! Por favor tente outro!</h1></center>";
            echo "<script>cadastroerrado()</script>";
	    }else{
		    if ($senha == $confirmasenha){
	            $sql = mysql_query("INSERT INTO grupo (grupo,curso,senha,confirmasenha) VALUES ('$grupo','$curso','$senha','$confirmasenha') ");
                echo "<center><h1>Cadastro efetuado com sucesso,redirecionando:</h1></center>";
	            echo "<script>cadastroaceito()</script>";  
	        }
	        else{
                echo "<center><h1>As senhas não coincidem!</h1></center>";
				echo "<script>cadastroerrado()</script>";
	        }    
		} 
	}
    ?>


</html>
