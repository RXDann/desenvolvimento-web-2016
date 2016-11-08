
<!DOCTYPE html>
<html lang="en">
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
<?php
include ("conexao.php");
?>
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
                    <li><a href="entraGrupo.html">Bem vindo ao grupo  >$nomeGrupo </a></li>
				
					
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
			<h1>Adicionar Disciplina</h1>
             <br><br>
		</div>
	</div>	<!-- /container -->
	

<form class="form-horizontal" method="POST" action="inserir_disciplina.php">
<fieldset>

<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="adiciona_disciplina">Digite a disciplina: </label>  
  <div class="col-md-4">
  <input id="adiciona_disciplina" name="adiciona_disciplina" type="text" placeholder="Adicionar a disciplina" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="inserir_texto"></label>
  <div class="col-md-4">
      <button type="submit" id="inserir_texto" name="inserir_texto" class="btn btn-primary">Inserir</button>
  </div>
</div>
<!-- Botão Inserir-->
</fieldset>
</form>

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