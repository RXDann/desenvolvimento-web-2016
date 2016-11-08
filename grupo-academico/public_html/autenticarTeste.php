<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

?>

<html>

<head>
<title></title>
<script type="text/javascript">
function loginsuccessfully(){
     setTimeout("window.location='Grupo.html'", 200);
}
function loginfailed(){
     setTimeout("window.location='entraGrupo.html'", 900);
}
</script>
</head>

<body>

<?php

 $usuario = filter_input(INPUT_POST, 'user');
 $password = filter_input(INPUT_POST, 'pass');
 $sql = mysql_query("SELECT * FROM grupo WHERE grupo = '$usuario' and senha = '$password' ") or die(mysql_error());
 $row = mysql_num_rows($sql);

 if($row > 0) {

 session_start();
 $_SESSION['user']=$usuario;
 $_SESSION['pass']=$password;
 //echo "Voce foi autenticado com sucesso! Aguarde um instante:";
 echo "<script>loginsuccessfully()</script>";

}else{

echo "<center>Nome do grupo ou senha incorretos! Aguarde um instante:</center>";
echo "<script>loginfailed()</script>";

}
?>
</body>
</html>