<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
  include "conexao.php";
  $texto = $_POST['texto'];

if(isset($_POST['enviar_arquivo']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="assets/arquivos/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO upload(arquivo,tipo,tamanho,descricao) VALUES('$final_file','$file_type','$new_size','$texto')";
  mysql_query($sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='Grupo.php';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
  <?php
 }
}
?>