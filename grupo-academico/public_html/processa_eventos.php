<?php
    include("conexao.php");
    $data = $_POST['data'];
    $tipo_evento= $_POST['tipo_evento'];
    $detalhes = $_POST['detalhes_evento'];
   
   
    $query = "INSERT INTO evento (evento_data,evento_tipo,evento_detalhes) VALUES ('$data','$tipo_evento','$detalhes')";
    mysql_query($query) or die (mysql_error());
   
    mysql_close();
   
    header("location:Grupo.php")
?>