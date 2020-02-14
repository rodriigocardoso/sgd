<?php
/* inicia a sessão */
	session_start();


include 'conecta_mysql.inc';

$qr_demanda = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'AUTORIZAÇÃO DIREX' ");
$count = mysqli_num_rows ($qr_demanda);

$qr_demanda2 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'AUTORIZAÇÃO CONSAD' ");
$count2 = mysqli_num_rows ($qr_demanda2);

$qr_demanda3 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'PESQUISA DE MERCADO' ");
$count3 = mysqli_num_rows ($qr_demanda3);

$qr_demanda4 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'PARECER TÉCNICO' ");
$count4 = mysqli_num_rows ($qr_demanda4);

$qr_demanda5 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'DISPONIBILIDADE ORÇAMENTÁRIA' ");
$count5 = mysqli_num_rows ($qr_demanda5);

$qr_demanda6 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ELABORAÇÃO DE EDITAL' ");
$count6 = mysqli_num_rows ($qr_demanda6);

$qr_demanda7 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ELABORAÇÃO DE MINUTA DE CONTRATO' ");
$count7 = mysqli_num_rows ($qr_demanda7);

$qr_demanda8 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'VISTO JURIDICO' ");
$count8 = mysqli_num_rows ($qr_demanda8);

$qr_demanda9 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'PUBLICAÇÃO DA LICITAÇÃO' ");
$count9 = mysqli_num_rows ($qr_demanda9);

$qr_demanda10 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'PREGÃO' ");
$count10 = mysqli_num_rows ($qr_demanda10);

$qr_demanda11 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ANÁLISE DA PROPOSTA' ");
$count11 = mysqli_num_rows ($qr_demanda11);

$qr_demanda12 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'RECURSO' ");
$count12 = mysqli_num_rows ($qr_demanda12);

$qr_demanda13 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ADJUDICAÇÃO / HOMOLOGAÇÃO / PUBLICAÇÃO' ");
$count13 = mysqli_num_rows ($qr_demanda13);

$qr_demanda14 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'RECEBIMENTO DA PROPOSTA ORIGINAL' ");
$count14 = mysqli_num_rows ($qr_demanda14);

$qr_demanda15 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'EMPENHO' ");
$count15 = mysqli_num_rows ($qr_demanda15);

$qr_demanda16 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ELABORAÇÃO DE CONTRATO' ");
$count16 = mysqli_num_rows ($qr_demanda16);

$qr_demanda17 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'VISTOS DO JURÍDICO' ");
$count17 = mysqli_num_rows ($qr_demanda17);

$qr_demanda18 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ASSINATURA CONTRATADA' ");
$count18 = mysqli_num_rows ($qr_demanda18);

$qr_demanda19 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'DECRETO 7689' ");
$count19 = mysqli_num_rows ($qr_demanda19);

$qr_demanda20 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ASSINATURA EBC' ");
$count20 = mysqli_num_rows ($qr_demanda20);

$qr_demanda21 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'CONTRATADO' ");
$count21 = mysqli_num_rows ($qr_demanda21);

$qr_demanda22 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'GESTÂO' ");
$count22 = mysqli_num_rows ($qr_demanda22);

$qr_demanda23 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'CORREÇÕES DO DEMANDAMENTE' ");
$count23 = mysqli_num_rows ($qr_demanda23);

$qr_demanda24 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'AUTORIZAÇÃO DA FASE EXTERNA' ");
$count24 = mysqli_num_rows ($qr_demanda24);

$qr_demanda25 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ORDENADOR DE DESPESAS' ");
$count25 = mysqli_num_rows ($qr_demanda25);

$qr_demanda26 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'INSTRUÇÃO DO PROCESSO' ");
$count26 = mysqli_num_rows ($qr_demanda26);

$qr_demanda27 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'FINANCEIRO' ");
$count27 = mysqli_num_rows ($qr_demanda27);

$qr_demanda28 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'PAGO' ");
$count28 = mysqli_num_rows ($qr_demanda28);

$qr_demanda29 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'PREGÃO SUSPENSO' ");
$count29 = mysqli_num_rows ($qr_demanda29);

$qr_demanda30 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'PAGAMENTO' ");
$count30 = mysqli_num_rows ($qr_demanda30);

$qr_demanda31 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'REVISÃO DE TR/PB' ");
$count31 = mysqli_num_rows ($qr_demanda31);

$qr_demanda32 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ANÁLISE GT' ");
$count32 = mysqli_num_rows ($qr_demanda32);

$qr_demanda33 = $db->query("SELECT * FROM demanda WHERE fase_demanda LIKE 'ANÁLISE CANCELADA POR ORDEM SUPERIOR' ");
$count33 = mysqli_num_rows ($qr_demanda33);


?><?php 

include 'conecta_mysql.inc';

$qr_iniciado = $db->query("SELECT * FROM aquisicao WHERE iniciado LIKE 'Sim' ");
$count = mysqli_num_rows ($qr_iniciado);

$qr_iniciado2 = $db->query("SELECT * FROM aquisicao WHERE iniciado LIKE 'Não' ");
$count2 = mysqli_num_rows ($qr_iniciado2);

?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Gerenciamento de Demandas</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
               <a class="navbar-brand" href="index_<?php echo $_SESSION['nome_perfil'] ?>.php"><img src="images/logo_principal.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index_<?php echo $_SESSION['nome_perfil'] ?>.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index_<?php echo $_SESSION['nome_perfil'] ?>.php"> <i class="menu-icon fa fa-dashboard"></i>Principal </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    
					
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-share-square-o"></i>Gerenciar Projetos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href="cadastro_projetos.php">Cadastrar Projetos</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_projetos.php">Listar Projetos</a></li>
                        </ul>
                    </li>
                          <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gerenciar Demandas</a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-bars"></i><a href="cadastro_demanda.php">Cadastrar Demandas</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_demandas_diretoria.php">Listar Demandas da Diretoria</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_demandas_geral.php">Listar Demandas Geral</a></li>
                            
                             </ul>
                    </li>
					
					   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Relatórios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_financeiro.php">Relatório Financeiro</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_fase.php">Relatório Fase</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_tipo.php">Relatório Tipo</a></li>
                        </ul>
                    </li>
					
					 <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Gerar Gráficos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-spinner"></i><a href="grafico_fase.php">Fases das Demandas</a></li>
                            <li><i class="menu-icon fa fa-file-word-o"></i><a href="grafico_tipo.php">Tipo de Demandas</a></li>
							<li><i class="menu-icon fa fa-puzzle-piece"></i><a href="grafico_status.php">Demandas Iniciadas</a></li>
                        </ul>
                    </li>
					
					 <li class="active">
                        <a href="sair.php"> <i class="menu-icon fa fa-power-off"></i>Sair</a>
                        
                    </li>
                   
              

                 
                
           <!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    
                      
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                            <?php
        if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
        }else{
		echo '<script type="text/javascript">window.location = "login.html"</script>';

    	}

?>
                            <img class="user-avatar rounded-circle" src="images/adm.jpg" alt="User Avatar">
                        </a>

                       <div class="user-menu dropdown-menu">
 <a class="nav-link" href="#"><i class="fa fa-user"></i><?php echo  $_SESSION['sigla_diretoria']; ?></a>

                           

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Perfil - <?php echo  $_SESSION['nome_perfil']; ?></a>

                            <a class="nav-link" href="sair.php"><i class="fa fa-power-off"></i> Sair</a>
                        </div>
                    </div>

                    <div class="" id="">
                       
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



            
			<center>
               
<div class="container-fluid">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Demandas Iniciadas',   <?php echo $count ?>],
          ['Demandas Não iniciadas',    <?php echo $count2 ?>]
         
          
        ]);

        var options = {
          title: 'Status das Demandas',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
 
    <div id="piechart_3d" style="width: 800px; height: 400px;"></div>

</div>				

                    <footer class="twt-footer">
                        
                        
                    </footer>
              
      
		


            
    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
