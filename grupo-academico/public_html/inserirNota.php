<html>

<head>

<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
        <title>Notas</title>
	<script type="text/javascript">
        function insere(){
        setTimeout("window.location='insere_nota.php'", 1200);
        }       
        </script>

</head>

<body>
<?php
       session_start();
         
        if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['pass']) == true)) {
	  unset($_SESSION['user']);
	  unset($_SESSION['pass']);
	  header('location:entraGrupo.html');	
        }

        $host = "localhost";
        $user = "root";
        $pass = "";
        $banco = "cadastro";
        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
        mysql_select_db($banco) or die(mysql_error());

        $logado = $_SESSION['user'];
        $idGrupo = mysql_query("SELECT id FROM grupo WHERE grupo = '$logado' ") or die(mysql_error());
        $id_grupo = mysql_result($idGrupo, 0);
	
        $identifica = filter_input(INPUT_POST, 'texto_opcional');
        $nota = filter_input(INPUT_POST, 'insere_nota');  
         
         if ($nota == null || $identifica == null){
             echo "<center><h3>Nenhuma nota foi adicionada. <br> Preencha todos os campos. </h3></center>";             
             echo "<script>insere()</script>";  
        } 
         else {
              $sql = mysql_query("INSERT INTO inserenota (identifica,nota,id_grupo) VALUES ('$identifica','$nota','$id_grupo') ");
              echo "<center><h3>Nota armazenada com sucesso.</h3></center>";
              echo "<script>insere()</script>";                             
        }    

 ?>
</body>
</html>


