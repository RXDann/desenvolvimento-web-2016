<?php
include "conexao.php";

$data = $_POST["data"];
$tipo_evento =  $_POST["tipo_evento"];
$disciplina = $_POST["disciplina"];
$detalhes_evento = $_POST["detalhes_evento"];



$stmt = $pdo->prepare('INSERT INTO evento VALUES(:evento_data)');
 $stmt->execute(array(
    ':evento_data' => $data
  ));
echo "$data<br>";
echo "$tipo_evento<br>";
echo "$disciplina<br>";
echo "$detalhes_evento<br>";



?>