<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
include "conexao.php";

session_start();
         
      if((!isset ($_SESSION['grupo']) == true) and (!isset ($_SESSION['senha']) == true)) {
	  unset($_SESSION['grupo']);
	  unset($_SESSION['senha']);
	  header('location:entraGrupo.php');	
        }

     $logado = $_SESSION['grupo'];
     $pega_curso = $_SESSION['curso'];
     $curso = mysql_query("SELECT curso FROM grupo WHERE grupo = '$logado' ") or die(mysql_error());


?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="ISO-8859-1">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Bem vindo ao Grupo </title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<!-- Menu superior -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<!-- logo do site -->
                <a class="navbar-brand" href="index.php"><img src="assets/img-fonts/logo.png" alt="Progressus HTML5 template"></a>
                
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
			<!-- 		<li class="active"><a href="#">PÃ¡gina Inicial</a></li>
					<li><a href="criaGrupo.php">Criar Grupo</a></li> -->  
              <!--      <li><a href="entraGrupo.html">Entrar no Grupo</a></li>      -->             
					  <li><a href="Grupo.php"> Bem vindo ao grupo: <?php echo $_SESSION['grupo']; ?> </a></li>
                    <li><a class="btn" href="logout.php"> Sair</a></li> 
				</ul>
			</div><
		</div>
	</div> 
<!-- /.menu superior -->
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		
		<div class="row">
			<h1> <?php echo mysql_result($curso, 0); ?>  | <?php echo $_SESSION['grupo']; ?> </h1> 
			 <?php echo $pega_curso;?>

		</div>
	</div>	<!-- /container -->
	
    <!-- /Inicio do Formulario -->
    
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>     </legend>




<!-- Select Basic -->
<div class="form-group">
 
 <label class="col-md-4 control-label" for="selectbasic">Adicionar Disciplina :</label>

 <div class="col-md-2">
  <a href="insere_disciplina.php" class="btn btn-xs btn-default">Adicionar</a>
  
  
  </div>
  
</div>
 <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Selecionar Disciplina :</label>
                    <div class="col-md-2">
                     <select id="selectbasic" name="selectbasic" class="form-control">  
                 <?php
                   $idGrupo = mysql_query("SELECT codigo FROM grupo WHERE grupo = '$logado' ") or die(mysql_error());
                  $id_grupo = mysql_result($idGrupo, 0);
                  $sql = mysql_query("SELECT * FROM disciplina WHERE grupo_codigo = '$id_grupo' ");
                           
                   while($aux = mysql_fetch_assoc($sql)) {
					?>
                    <option value="<?php echo $aux['disciplina'] ?>"><?php echo $aux['disciplina'] ?></option>
                      <?php  
                         }   
                         ?>
                        
                        <!--//    <option value="1">Desenvolvimento web</option>-->
                            <!--<option value="2">Sistemas Operacionais</option>-->
                        </select>
                    </div>
                </div>


  <div class="form-group">
  <label class="col-md-4 control-label" for="nota_aula"></label>
       <div class="container">
  <a href="insere_nota.php" class="btn btn-primary"><i class="icon-trash"></i>Inserir Nota </a> 
   <a href="insere_arquivo.php" class="btn btn-primary"><i class="icon-trash"></i>Carregar arquivo </a> 
   
   <a href="marca_evento.php" class="btn btn-primary"><i class="icon-trash"></i>Marcar Evento</a> 
  
  </div>
</div>
  
  


</fieldset>
</form>
 <hr>
  <br>  
    <div class="container">

    <?php
//------------------------------INSERE ARQUIVO---------------------------
 //$sql="SELECT * FROM upload";
 //$result_set=mysql_query($sql);

     $idGrupo = mysql_query("SELECT codigo FROM grupo WHERE grupo = '$logado' ") or die(mysql_error());
     $id_grupo = mysql_result($idGrupo, 0);
     $sql = mysql_query("SELECT * FROM upload WHERE grupo_codigo = '$id_grupo' ");


	while($aux = mysql_fetch_assoc($sql)) {
  ?>
        <tr>
        <b>Nome:</b><td> <?php echo $aux['arquivo'] ?></td>
        <br>
        <b>Descricao:</b> <td> <?php echo $aux['descricao'] ?>  </td> 
       
        <br>
        <td><a href="assets/arquivos/<?php echo $aux['arquivo'] ?>" target="_blank">Acessar Arquivo</a></td>
        </tr>
        
        <hr width="75%">
        <?php
	}
	 //------------------------------INSERE ARQUIVO---------------------------
	?>
		
<?php
     
     $idGrupo = mysql_query("SELECT codigo FROM grupo WHERE grupo = '$logado' ") or die(mysql_error());
     $id_grupo = mysql_result($idGrupo, 0);
     $sql = mysql_query("SELECT * FROM inserenota WHERE id_grupo = '$id_grupo' ");

    $tabela = '<table border="1" width=80% height=20%>';//abre table
    $tabela .='<thead>';//abre cabeçalho
    $tabela .= '<tr>';//abre uma linha
    $tabela .= '<th><h4>Autor</h4></th>'; // colunas do cabeçalho
    $tabela .= '<th><h4><center>Nota</center></h4></th>';
    $tabela .= '</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho
    $tabela .='<tbody>';//abre corpo da tabela
    while($aux = mysql_fetch_assoc($sql)) {         
    $tabela .= '<tr>'; // abre uma linha
    $tabela .= '<td>'.$aux["identifica"].'</td>'; // coluna identifica
    $tabela .= '<td>'.$aux["nota"].'</td>'; //coluna nota
    $tabela .= '</tr>'; // fecha linha
    }
    $tabela .='</tbody>'; //fecha corpo
    $tabela .= '</table>';//fecha tabela

    echo $tabela; // imprime


?>
   
   
   
   
   
   
       </div>
   
   
  </center>
  <div id="apDiv1"></div>
<br>
   
     <!-- /Inicio do corpo das mensagens do formulario -->
  

<div id="mural">
 <center> <h3>Mural de Eventos </h3> </center>
<?php

   include("conexao.php");    
   $idGrupo = mysql_query("SELECT codigo FROM grupo WHERE grupo = '$logado' ") or die(mysql_error());
   $id_grupo = mysql_result($idGrupo, 0);


   $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
    //seleciona todos os itens da tabela
    $cmd = "SELECT * FROM evento WHERE grupo_codigo = '$id_grupo' ";
    $produtos = mysql_query($cmd);
   //conta o total de itens
    $total = mysql_num_rows($produtos);
    //seta a quantidade de itens por pÃ¡gina, neste caso, 2 itens
    $registros = 2;
   //calcula o nÃºmero de pÃ¡ginas arredondando o resultado para cima
    $numPaginas = ceil($total/$registros);
    //variavel para calcular o inÃ­cio da visualizaÃ§Ã£o com base na pÃ¡gina atual
    $inicio = ($registros*$pagina)-$registros;
   //seleciona os itens por pÃ¡gina
    $cmd = "select * from evento WHERE grupo_codigo = '$id_grupo' ORDER BY codigo DESC limit $inicio,$registros";
    $produtos = mysql_query($cmd);
    $total = mysql_num_rows($produtos);
  //exibe os produtos selecionados
    while ($produto = mysql_fetch_array($produtos)) {
       echo "<center>";
					echo "**** Grupo AcadÃªmico ****";
					echo "<br/>";
					echo "**** Novo Evento ****";
					echo "<br/>";
					echo "Data: ";
					echo date('d/m/Y',strtotime($produto['date']));
                    echo "<br/>";
					echo "Evento: ";
                    echo $produto["tipo"];
                    echo "<br/>";     
					echo "Disciplina:";   
					echo "<br/>";         
                    echo "Detalhes: <b>".$produto["descricao"]."</b>";
					echo "<hr> </hr>";         
					echo "</center>";    
    }
 
    //exibe a paginaÃ§Ã£o
    for($i = 1; $i < $numPaginas + 1; $i++) {
        echo "<a href='Grupo.php?pagina=$i'>".$i."</a> ";
    }
   
   
             
              /*  $query = "SELECT * FROM evento ORDER BY codigo ";
                $resultado = mysql_query($query) or die(mysql_error());
                while ($row = mysql_fetch_array($resultado)) {
				echo "<center>";
					echo "**** Grupo AcadÃªmico ****";
					echo "<br/>";
					echo "**** Novo Evento ****";
					echo "<br/>";
					echo "Data: ";
					echo date('d/m/Y',strtotime($row['evento_data']));
                    echo "<br/>";
					echo "Evento: ";
                    echo $row["evento_tipo"];
                    echo "<br/>";               
                    echo "Detalhes: <b>".$row["evento_detalhes"]."</b>";
					echo "<hr> </hr>";         
					echo "</center>";                
                }
                mysql_close();
*/


 ?>
</div>

    <!-- /Fim do corpo das mensagens do formulario --> 
 
    <!-- /Fim do formulario -->
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Pagina Inicial</a> | 
								<a href="criaGrupo.php">Criar Grupo</a> |
								<a href="entraGrupo.php">Entrar no grupo</a> |
								
							</p>
						</div>
					</div>
</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
     <style type="text/css">
	#mural{
		width:350px; /*Horizontal*/
		height:480px; /*Vertical*/
		border:solid 1px;
		border-radius:20px;
		background:#FFDAB9;
		margin-bottom:20px;
		margin-left:1500px;
		margin-top:-400px;
		
	
	}

	</style>
</body>
</html>
</html>
