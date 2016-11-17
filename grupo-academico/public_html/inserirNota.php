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
         
         if ($nota == null){
             echo "Nenhuma nota foi adicionada. <br> <br>";
              
        } 
         else {
              $sql = mysql_query("INSERT INTO inserenota (identifica,nota,id_grupo) VALUES ('$identifica','$nota','$id_grupo') ");
              echo "Notas armazenadas com sucesso";
             
                 
        }    

      echo "Notas Encontradas: <br>";
      $sql = mysql_query("SELECT * FROM inserenota WHERE id_grupo = '$id_grupo' ") or die( mysql_error($conexao));
      while($aux = mysql_fetch_assoc($sql)) { 
        
         echo "Nome:".$aux["identifica"]."<br>";
         echo "Nota:".$aux["nota"]."<br>";
         echo "ID da Nota:".$aux["id_nota"]."<br>";
         echo "<br>";


       }
    
 ?>

