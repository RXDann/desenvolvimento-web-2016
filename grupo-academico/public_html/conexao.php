<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
/* $host = "localhost";
 $usuario="root";
 $senha = "";
 $banco = "portalacademico";

 //$conexao = mysql_connect($host,$usuario,$senha);
 //$bd = mysql_select_db($banco);
   
  // if(isset($_GET["codigo"])){ // Verificar se existe o codigo
  // $codigo=$_GET["codigo"];
   //$consulta = mysql_query("SELECT * FROM marcar_evento  WHERE codigo=$codigo");
   // echo mysql_num_rows($consulta);
 // }
  //
  try{
  $pdo = new PDO("mysql:host=localhost;dbname=portalacademico","$usuario","$senha");
  echo "Conexao efetuada com sucesso!";
  }catch(PDOException $e){
	     echo $e->getMessage();
  }
  
 // $buscarusuario=$pdo->query("SELECT * FROM grupo WHERE codigo='1'");
 // 
 // $buscasegura=$pdo->prepare("SELECT *FROM grupo Where codigo=? AND"); // evitar a injecao do SQL
  //echo $buscarusuario->rowCount();
  
  */
  

    $server ="localhost";
    $user="root";
    $password="";
    $dbname="portalacademico";
    mysql_connect($server,$user,$password) or die(mysql_error());
    mysql_select_db($dbname) or die(mysql_error());
?>

?>