
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
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top headroom" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <!-- logo do site -->
                    <a class="navbar-brand" href="index.html"><img src="assets/img-fonts/logo.png" alt="Progressus HTML5 template"></a>

                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="index.html">Página Inicial</a></li>
                        <li><a href="criaGrupo.html">Criar Grupo</a></li>
                        <li><a href="entraGrupo.html">Bem vindo ao grupo  >$nomeGrupo </a></li>


                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
        <!-- /.navbar -->  
        <header id="head" class="secondary"></header>

        <!-- container -->
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">User access</li>
            </ol>

            <div class="row">
                <h1>Nome Curso | Nome Grupo </h1>


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
                        <a href="insere_disciplina.html" class="btn btn-xs btn-default">Adicionar</a>


                    </div>

                </div>
                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Selecionar Disciplina :</label>
                    <div class="col-md-2">
                     <select id="selectbasic" name="selectbasic" class="form-control">  
                    <?php
                        $sql = "SELECT * FROM `disciplina`";
                        $result = mysql_query($sql);
                        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                            echo "<option value='$row[0]'>$row[1]</option>";
                        }
                        mysql_free_result($result);
                        ?>
                        
                        <!--//    <option value="1">Desenvolvimento web</option>-->
                            <!--<option value="2">Sistemas Operacionais</option>-->
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="nota_aula"></label>
                    <div class="container">
                        <a href="insere_nota.html" class="btn btn-primary"><i class="icon-trash"></i>Inserir Nota </a> 
                        <a href="insere_arquivo.html" class="btn btn-primary"><i class="icon-trash"></i>Carregar Arquivo </a> 
                        <a href="marca_evento.php" class="btn btn-primary"><i class="icon-trash"></i>Marcar Evento</a> 
                    </div>
                </div>




            </fieldset>
        </form>

        <hr>
        <br>  <br>  <br>  <br>  <br>  <br>

        <!-- /Inicio do corpo das mensagens do formulario -->

        <style type="text/css">
            #mural{
                width:480px;
                height:400px;
                border:solid 1px;
                border-radius:20px;
                background:#FFDAB9;
                padding:10px;
                position:relative;
                width:15%;
                left:1600px;
            }
        </style>
        <div id="mural">
            <center> <h3>Mural de Eventos </h3> </center>

            ?><br/><br/>E-mail: <b>Insira aqui detalhes do evento...</b><hr> </hr>2016-11-11<br/>Prova<br/>E-mail: <b>Insira aqui detalhes do evento...</b><hr> </hr>2016-11-10<br/>Prova<br/>E-mail: <b>prova dificil</b><hr> </hr>2016-11-08<br/>Seminario<br/>E-mail: <b>seminario no dia 13</b><hr> </hr><br/><br/>E-mail: <b>aInsira aqui detalhes do evento...</b><hr> </hr>2016-11-01<br/>Projeto<br/>E-mail: <b>teste</b><hr> </hr><br/><br/>E-mail: <b>Insira aqui detalhes do evento...</b><hr> </hr>2017-02-01<br/>Prova<br/>E-mail: <b>Insira aqui detalhes do evento...wsdsadsadsadsad</b><hr> </hr>1994-10-18<br/>Seminario<br/>E-mail: <b>AniversÃ¡rio do Lucas</b><hr> </hr></div>




        <!-- /Fim do corpo das mensagens do formulario --> 

        <!-- /Fim do formulario -->
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

</footer>	


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>