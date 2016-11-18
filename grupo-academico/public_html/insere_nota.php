<!DOCTYPE html>
<html lang="en">
		
        <?php

        $host = "localhost";
        $user = "root";
        $pass = "";
        $banco = "cadastro";
        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
        mysql_select_db($banco) or die(mysql_error());
   
 
        session_start();
         
        if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['pass']) == true)) {
	  unset($_SESSION['user']);
	  unset($_SESSION['pass']);
	  header('location:entraGrupo.html');	
        }
?>
	
<head>
	<meta charset="utf-8">
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

	<!-- Inicio da NavBar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<!-- logo do site -->
                <a class="navbar-brand" href="index.html"><img src="assets/img-fonts/logo.png" alt="Progressus HTML5 template"></a>
               <!-- logo do site -->
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.html">Página Inicial</a></li>
					<li><a href="criaGrupo.html">Criar Grupo</a></li>
                                        <li><a href="Grupo.php">Bem vindo ao grupo: <?php echo $_SESSION['user']; ?> </a></li>
                                        <li><a href="logout.php">Sair</a></li>
				
					
				</ul>
			</div>
		</div>
	</div> 
	<!-- Fim da NavBar -->
    
    
    
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			<h1>Inserir Nota de Aula</h1>
             <br><br>
		</div>
	</div>	<!-- /container -->
	
<!-- /Inicio do Formulario para Digitar notas  -->
 <form name="inserenota" class="form-horizontal" method="post" action="inserirNota.php">
<fieldset>


<!-- Identificação do aluno-->
<div class="form-group">
  <label class="col-md-4 control-label" for="texto_opcional">Identifique-se</label>  
  <div class="col-md-2">
  <input id="texto_opcional" name="texto_opcional" type="text" placeholder="Seu nome" class="form-control input-md">
    
  </div>
</div>
<!-- Identificação do aluno-->
<!-- Texto do Aluno-->
<div class="form-group">
  <label class="col-md-4 control-label" for="insere_nota">Digite o texto :</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="insere_nota" name="insere_nota">Digite o texto aqui.</textarea>
  </div>
</div>
<!-- Texto do Aluno-->
<br>
<!-- Botão Inserir-->
<div class="form-group">
  <label class="col-md-4 control-label" for="inserir_texto"></label>
  <div class="col-md-4">
    <button id="inserir_texto" name="inserir_texto" class="btn btn-primary">Inserir</button>
  </div>
</div>
<!-- Botão Inserir-->
</fieldset>
</form>
<!-- /Inicio do Formulario para Digitar notas  -->  
 <hr>
  <br>  <br>  <br>  <br>  <br>  <br>
   
<!-- Inicio do Rodapé -->
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Página Inicial</a> | 
								<a href="about.html">Criar Grupo</a> |
								<a href="sidebar-right.html">Entrar no grupo</a> |
								
							</p>
						</div>
					</div>
</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
<!-- Fim do Rodapé -->
	</footer>	
		

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>
