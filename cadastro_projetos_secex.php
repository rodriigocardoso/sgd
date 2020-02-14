<?php
/* inicia a sessão */
	session_start();


include 'conecta_mysql.inc';


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
                <a class="navbar-brand" href="Secex.php"><img src="images/logo_principal.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index_Secex.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index_Secex.php"> <i class="menu-icon fa fa-dashboard"></i>Principal </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    
					
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-share-square-o"></i>Gerenciar Projetos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href="cadastro_projetos_secex.php">Cadastrar Projetos</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_projetos_secex.php">Listar Projetos</a></li>
                        </ul>
                    </li>
                         <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gerenciar Demandas</a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-bars"></i><a href="cadastro_demanda_secex.php">Cadastrar Demandas</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_demandas_secex.php">Listar Demandas da SECEX</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_demandas_geral_secex.php">Listar Demandas Geral</a></li>
                            
                             </ul>
                    </li>
					
					    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gerenciar Usuários</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href="cadastro_usuario.php">Cadastrar Usuário</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_usuarios.php">Listar Usuários</a></li>
                        </ul>
                    </li>
					
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Relatórios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_financeiro_secex.php">Relatório Financeiro</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_fase_secex.php">Relatório Fase</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_tipo_secex.php">Relatório Tipo</a></li>
                        </ul>
                    </li>
					
					 <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Gerar Gráficos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-spinner"></i><a href="grafico_fase_secex.php">Fases das Demandas</a></li>
                            <li><i class="menu-icon fa fa-file-word-o"></i><a href="grafico_tipo_secex.php">Tipo de Demandas</a></li>
							<li><i class="menu-icon fa fa-puzzle-piece"></i><a href="grafico_status_secex.php">Demandas Iniciadas</a></li>
                        </ul>
                    </li>
                    
                     
                        
                         <li class="active">
                        <a href="importar_arquivo.php"> <i class="menu-icon fa fa-exchange"></i>Importar Arquivo </a>
                    </li>
                        
                    </li>
                    
                       <li class="active">
                        <a href="sair.php"> <i class="menu-icon fa fa-power-off"></i>Sair</a>
                    </li>
					
					   
                   

              

                 
                
            </div><!-- /.navbar-collapse -->
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

<div class="row">
                    <div class="col-lg-6">
                        

                    </div>
                    <!--/.col-->

                    <div class="col-lg-6">
                        
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Cadastro de Projeto</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="insere_projeto.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                              
                                                                <div class="col-12 col-md-9">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Diretoria:</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Diretoria" class="form-control"><small class="form-text text-muted"></small></div>
                                                            </div>
                                                            
                                                            
<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Ano:</label></div>
<div class="col-12 col-md-9"><input type="text" placeholder="Ano do Projeto" class="form-control" value="<?php echo date('Y'); ?>" class="form-control" id="ano" name="ano" style="padding:8px; width: 100%; " readonly ><small class="help-block form-text"></small></div>
                                                            </div>
                                                            
                                                            
                                                            
<div class="row form-group">
<div class="col col-md-3"><label for="text" class=" form-control-label">Nome do Projeto:</label></div>
<div class="col-12 col-md-9"><input type="text" id="nome" name="nome" placeholder="Informe o Nome do Projeto" class="form-control"><small class="help-block form-text"></small></div>
</div>
                                                            
                                                        
                                                       

                                                    </div>
                                                    <div class="card-footer">
<button name="submit" type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Cadastrar
                                                        </button>
                                                        
                                                    </div>
                                                     </form>
                                                </div>
                                                <div class="card">
                                                    
                                            </div>

                                           
                                                
                                            </div>

                                            

                                            

                                            
                                        </div><!-- .animated -->

            
    </div><!-- /#right-panel -->

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

