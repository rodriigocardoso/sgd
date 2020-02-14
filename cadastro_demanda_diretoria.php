<?php
/* inicia a sessão */
	session_start();


include 'conecta_mysql.inc';
$D = $_SESSION['sigla_diretoria'];
$projeto = $db->query("SELECT * FROM projeto");
$diretoria = $db->query("SELECT * FROM diretoria WHERE sigla_diretoria = '$D'")->fetch_array();
$dir = $diretoria['cod_diretoria'];
$area =    $db->query("SELECT * FROM area WHERE cod_diretoria_fk = '$dir'");

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
  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
 
  <script type="text/javascript" src="Scripts/jquery.js" ></script>
    <script type="text/javascript" src="Scripts/jquery.maskMoney.js" ></script>
    <script type="text/javascript">
        $(document).ready(function(){
              $("#valor_solicitado, #valor_aprovado").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
        });
    </script>


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
                            <li><i class="fa fa-bars"></i><a href="cadastro_projetos_diretoria.php">Cadastrar Projetos</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_projetos_diretoria.php">Listar Projetos</a></li>
                        </ul>
                    </li>
                             <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gerenciar Demandas</a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-bars"></i><a href="cadastro_demanda_diretoria.php">Cadastrar Demandas</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_demandas_diretoria.php">Listar Demandas da Diretoria</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_demandas_geral_diretoria.php">Listar Demandas Geral</a></li>
                            
                             </ul>
                    </li>
					
					   
					
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Relatórios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_financeiro_diretoria.php">Relatório Financeiro</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_fase_diretoria.php">Relatório Fase</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_tipo_diretoria.php">Relatório Tipo</a></li>
                        </ul>
                    </li>
					
					 <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Gerar Gráficos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-spinner"></i><a href="grafico_fase_diretoria.php">Fases das Demandas</a></li>
                            <li><i class="menu-icon fa fa-file-word-o"></i><a href="grafico_tipo_diretoria.php">Tipo de Demandas</a></li>
							<li><i class="menu-icon fa fa-puzzle-piece"></i><a href="grafico_status_diretoria.php">Demandas Iniciadas</a></li>
                        </ul>
                    </li>
                    
                    
					
					        <li class="active">
                        <a href="sair.php"> <i class="menu-icon fa fa-power-off"></i>Sair</a>
                    </li>
					
                        
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
                                                        <strong>Cadastro de Demandas</strong>
                                                    </div>
                                                    <div class="card-body card-block">
<form action="insere_demandas.php" method="POST" autocomplete="off" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                              
                                                                <div class="col-12 col-md-9">
                                                                    
                                                                </div>
                                                            </div>


<div class="row form-group">
<div class="col col-md-3"><label for="diretoria" class=" form-control-label">Diretoria:</label></div>
<div class="col-12 col-md-9"><input type="text" id="diretoria" name="diretoria" placeholder="Diretoria" class="form-control" value="<?php echo $_SESSION['sigla_diretoria']?>" readonly><small class="help-block form-text"></small></div>
</div>


<div class="row form-group">
<div class="col col-md-3"><label for="selectLg" class=" form-control-label">Área:</label></div>
<div class="col-12 col-md-9">
<select name="nome_area" id="nome_area" class="form-control-l form-control">
<option value="">Selecione a Área</option>
<?php while($area1 = $area->fetch_array()) { ?>
<option value="<?php echo $area1['nome_area']; ?>"><?php echo $area1['nome_area']; ?> </option>
<?php } ?>
</select>
</div>
</div>	
                                                           

<div class="row form-group">
<div class="col col-md-3"><label for="selectLg" class=" form-control-label">Projeto:</label></div>
<div class="col-12 col-md-9">
<select name="projeto" id="projeto" class="form-control-l form-control">
<option value="">Selecione o Projeto</option>
<?php while($proj = $projeto->fetch_array()) { ?>
<option value="<?php echo $proj['nome']; ?>"><?php echo $proj['nome']; ?> </option>
<?php } ?>
</select>
</div>
</div>
                                                            
<div class="row form-group">
<div class="col col-md-3"><label for="objeto" class=" form-control-label">Objeto:</label></div>
<div class="col-12 col-md-9"><textarea name="objeto" id="objeto" rows="9" placeholder="Descreva o objeto..." class="form-control"></textarea></div>
</div>


<div class="row form-group">
<div class="col col-md-3"><label for="finalidade" class=" form-control-label">Finalidade:</label></div>
<div class="col-12 col-md-9">
<select name="finalidade" id="finalidade" class="form-control">
<option value="">Selecione a Finalidade</option>
<option >Administrativo</option>
<option>Tecnologia</option>
<option>Conteúdo</option>
<option>Apoio a Produção</option>
</select>
</div>
</div>
                                                                
<div class="row form-group">
<div class="col col-md-3"><label for="regional" class=" form-control-label">Praça:</label></div>
<div class="col-12 col-md-9">
<select name="regional" id="regional" class="form-control-l form-control">
<option value="">Selecione a Praça</option>
<option>Brasília</option>
<option>São Paulo</option>
<option >Rio de Janeiro</option>
<option>Maranhão</option>
<option>Tabatinga</option>
</select>
</div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="selectLg" class=" form-control-label">Situação:</label></div>
<div class="col-12 col-md-9">
<select name="situacao" id="situacao" class="form-control-l form-control">
<option value="">Selecione a Situação</option>
<option>Nova</option>
<option>Substituição</option>
<option>Renovação</option>
</select>
 </div>
</div>
																
<div class="row form-group">
<div class="col col-md-3"><label for="text-input"class=" form-control-label">Valor Solicitado:</label></div>
<div class="col-12 col-md-9">
<input type="text" id="valor_solicitado" name="valor_solicitado" placeholder="Informe o valor solicitado para a demanda" class="form-control"><small class="help-block form-text"></small></div>
</div>
															
<div class="row form-group">

<div class="col-12 col-md-9"><input type="hidden" id="valor_aprovado" name="valor_aprovado" placeholder="Informe o valor aprovado para a demanda" class="form-control" value="0,00"><small class="help-block form-text"></small></div>
 </div>
															

<div class="row form-group">

<div class="col-12 col-md-9"><input type="hidden" id="fase_demanda" name="fase_demanda" value="CADASTRO INICIAL" class="form-control" readonly><small class="help-block form-text"></small></div>
</div>

                                                               
                                                               
                                                     
                                                  
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Cadastrar
                                                        </button>
                                                        </form>
                                                    </div>
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

