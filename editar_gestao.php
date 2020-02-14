<?php
/* inicia a sessão */
	session_start();


include 'conecta_mysql.inc';

$cod_demanda = $_GET['cod_demanda'];

$qr_demanda = $db->query("SELECT demanda.cod_demanda, 
area.nome_area,
diretoria.sigla_diretoria,
demanda.objeto, 
demanda.num_processo, 
aquisicao.tipo, 
contrato.contratada, 
contrato.num_contrato, 
gestao.vlr_realizado, 
gestao.vlr_necessario, 
gestao.parcelas, 
demanda.fase_demanda 
FROM demanda LEFT JOIN gestao on demanda.cod_gestao_fk = gestao.cod_gestao LEFT JOIN contrato on demanda.cod_demanda = contrato.cod_demanda_fk LEFT JOIN area on demanda.cod_area_fk = area.cod_area LEFT JOIN diretoria on area.cod_diretoria_fk = diretoria.cod_diretoria LEFT JOIN aquisicao on demanda.cod_demanda = aquisicao.cod_demanda_fk WHERE demanda.cod_demanda = '$cod_demanda'")->fetch_assoc();

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
     <script type="text/javascript" src="Scripts/jquery.js" ></script>
    <script type="text/javascript" src="Scripts/jquery.maskMoney.js" ></script>
    <script type="text/javascript">
        $(document).ready(function(){
              $("#vlr_realizado, #vlr_necessario").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
        });
    </script>
</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria<a class="navbar-brand" href="index_Gestao.php"><img src="images/logo_principal.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index_Gestao.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index_Gestao.php"> <i class="menu-icon fa fa-dashboard"></i>Principal </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    
					
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-share-square-o"></i>Gerenciar Projetos</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                            <li><i class="fa fa-table"></i><a href="listar_projetos_gestao.php">Listar Projetos</a></li>
                        </ul>
                    </li>
                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gerenciar Demandas</a>
                        <ul class="sub-menu children dropdown-menu">
						
                            <li><i class="fa fa-table"></i><a href="listar_demandas_gestao.php">Listar Demandas da Gestão</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_demandas_geral_gestao.php">Listar Demandas Geral</a></li>
                            
                             </ul>
                    </li>
					
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Relatórios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_financeiro_gestao.php">Relatório Financeiro</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_fase_gestao.php">Relatório Fase</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_tipo_gestao.php">Relatório Tipo</a></li>
                        </ul>
                    </li>
					
					 <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Gerar Gráficos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-spinner"></i><a href="grafico_fase_gestao.php">Fases das Demandas</a></li>
                            <li><i class="menu-icon fa fa-file-word-o"></i><a href="grafico_tipo_gestao.php">Tipo de Demandas</a></li>
							<li><i class="menu-icon fa fa-puzzle-piece"></i><a href="grafico_status_gestao.php">Demandas Iniciadas</a></li>
                        </ul>
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
                                                        <strong>Editar Demanda</strong>
                                                    </div>
                                                    <div class="card-body card-block">
<form action="confirm_edit_gestao.php" method="POST" autocomplete="off" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                              
                                                                <div class="col-12 col-md-9">
                                                                    
                                                                </div>
                                                            </div>


<div class="row form-group">

<div class="col-12 col-md-9"><input type="hidden" id="cod_demanda" name="cod_demanda" value="<?php echo $qr_demanda['cod_demanda'] ?>" class="form-control" readonly><small class="help-block form-text"></small></div>
</div>


<div class="row form-group">
<div class="col col-md-3"><label for="sigla_diretoria" class=" form-control-label">Diretoria:</label></div>
<div class="col-12 col-md-9"><input type="text" id="sigla_diretoria" name="sigla_diretoria" value="<?php echo $qr_demanda['sigla_diretoria'] ?>" class="form-control" readonly required/><small class="help-block form-text"></small></div>
</div>


		
                                                           
<div class="row form-group">
<div class="col col-md-3"><label for="nome_area" class=" form-control-label">Área:</label></div>
<div class="col-12 col-md-9"><input type="text" id="nome_area" name="nome_area" value="<?php echo $qr_demanda['nome_area'] ?>" class="form-control" readonly required/><small class="help-block form-text"></small></div>
</div>


                                                            
<div class="row form-group">
<div class="col col-md-3"><label for="objeto" class=" form-control-label">Objeto:</label></div>
<div class="col-12 col-md-9"><textarea type="text" name="objeto" id="objeto" rows="9"class="form-control" readonly> <?php echo $qr_demanda['objeto'] ?> </textarea> </div>
</div>


<div class="row form-group">
<div class="col col-md-3"><label for="num_processo" class=" form-control-label">Número do Processo:</label></div>
<div class="col-12 col-md-9"><input type="text" id="num_processo" name="num_processo" value="<?php echo $qr_demanda['num_processo'] ?>" class="form-control" required/><small class="help-block form-text"></small></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="tipo" class=" form-control-label">Tipo:</label></div>
<div class="col-12 col-md-9">
<select name="tipo" id="tipo" class="form-control-l form-control">
<option value="<?php echo $qr_demanda['tipo']; ?>" ><?php echo $qr_demanda['tipo'] ;?></option>      
<option>LICITAÇÃO</option>
<option>DISPENSA DE LICITAÇÃO</option>
<option>INEXIGIBILIDADE</option>
<option>NÃO SE APLICA</option>
<option>ADESÃO À ATA</option>
<option>REEMBOLSO</option>
<option>PARCERIAS</option>
<option>CREDENCIAMENTO</option>
<option>CESSÃO DE USO</option>
<option>LICENCIAMENTO</option>
<option>ACORDO DE COOPERAÇÃO</option>
<option>TERMO DE ADESÃO</option>
</select>
</div>
</div>
   
   
<div class="row form-group">
<div class="col col-md-3"><label for="contratada" class=" form-control-label">Contratada:</label></div>
<div class="col-12 col-md-9"><input type="text" id="contratada" name="contratada" value="<?php echo $qr_demanda['contratada'] ?>" class="form-control" required/><small class="help-block form-text"></small></div>
</div>

<div class="row form-group">
<div class="col col-md-3"><label for="num_contrato" class=" form-control-label">Número do Contrato:</label></div>
<div class="col-12 col-md-9"><input type="text" id="num_contrato" name="num_contrato" value="<?php echo $qr_demanda['num_contrato'] ?>" class="form-control" required/><small class="help-block form-text"></small></div>
</div>
   


<div class="row form-group">
<div class="col col-md-3"><label for="text-input"class=" form-control-label">Valor Realizado:</label></div>
<div class="col-12 col-md-9"><input type="moeda" id="vlr_realizado" name="vlr_realizado" value="<?php echo $qr_demanda['vlr_realizado'] ?>" class="form-control" required/><small class="help-block form-text"></small></div>
</div>

															
<div class="row form-group">
<div class="col col-md-3"><label for="text-input" class=" form-control-label">Valor Necessário:</label></div>
<div class="col-12 col-md-9"><input type="moeda" id="vlr_necessario" name="vlr_necessario" value="<?php echo $qr_demanda['vlr_necessario'] ?>" class="form-control" required/><small class="help-block form-text"></small></div>
</div>



<div class="row form-group">
<div class="col col-md-3"><label for="parcelas" class=" form-control-label">Parcelas:</label></div>
<div class="col-12 col-md-9">
<select name="parcelas" id="parcelas" class="form-control-l form-control">
<option value="<?php echo $qr_demanda['parcelas'] ?>"><?php echo $qr_demanda['parcelas'] ?></option>
<option value=""></option>
<option>1 PARCELA</option>
<option>2 PARCELAS</option>
<option>3 PARCELAS</option>
<option>4 PARCELAS</option>
<option>5 PARCELAS</option>
<option>6 PARCELAS</option>
<option>7 PARCELAS</option>
<option>8 PARCELAS</option>
<option>9 PARCELAS</option>
<option>10 PARCELAS</option>
<option>11 PARCELAS</option>
<option>12 PARCELAS</option>
</select>
</div>
</div>


<div class="row form-group">
<div class="col col-md-3"><label for="fase_demanda" class=" form-control-label">Fase da Demanda:</label></div>
<div class="col-12 col-md-9">
<select name="fase_demanda" id="fase_demanda" class="form-control-l form-control">
<option value="<?php echo $qr_demanda['fase_demanda'] ?>"><?php echo $qr_demanda['fase_demanda'] ?></option>
<option value=""></option>
<option>AUTORIZAÇÃO DIREX</option>
<option>AUTORIZAÇÃO CONSAD</option>
<option>PESQUISA DE MERCADO</option>
<option>PARECER TÉCNICO</option>
<option>DISPONIBILIDADE ORÇAMENTÁRIA</option>
<option>ELABORAÇÃO DE EDITAL</option>
<option>ELABORAÇÃO DE MINUTA DE CONTRATO</option>
<option>VISTO JURIDICO</option>
<option>PUBLICAÇÃO DA LICITAÇÃO</option>
<option>PREGÃO</option>
<option>ANÁLISE DA PROPOSTA</option>
<option>RECURSO</option>
<option>ADJUDICAÇÃO / HOMOLOGAÇÃO / PUBLICAÇÃO</option>
<option>RECEBIMENTO DA PROPOSTA ORIGINAL</option>
<option>EMPENHO</option>
<option>ELABORAÇÃO DE CONTRATO</option>
<option>VISTOS DO JURÍDICO</option>
<option>ASSINATURA CONTRATADA</option>
<option>DECRETO 7689</option>
<option>ASSINATURA EBC</option>
<option>CONTRATADO</option>
<option>GESTÂO</option>
<option>CORREÇÕES DO DEMANDAMENTE</option>
<option>AUTORIZAÇÃO DA FASE EXTERNA</option>
<option>ORDENADOR DE DESPESAS</option>
<option>INSTRUÇÃO DO PROCESSO</option>
<option>FINANCEIRO</option>
<option>PAGO</option>
<option>PREGÃO SUSPENSO</option>
<option>PAGAMENTO</option>
<option>REVISÃO DE TR/PB</option>
<option>ANÁLISE GT</option>
<option>ANÁLISE CANCELADA POR ORDEM SUPERIOR</option>
</select>
</div>
</div>


                                                    </div>
                                                    <div class="card-footer">
<button id="confirm-edit" name="confirm-edit"  type="submit" class="btn btn-primary btn-sm">
             <i class="fa fa-dot-circle-o"></i>Salvar</button>
                                                        
<a href="listar_demandas_gestao.php" onclick='return cancelar();' type="button" class="btn btn-danger btn-sm" > 
            <i class="fa fa-close"></i>Cancelar</a>
                                                           
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    
                                            </div>

                                           
                                                
                                            </div>


<script language="JavaScript"> 

   function cancelar(){ 
   // retorna true se confirmado, ou false se cancelado
   return confirm('Tem certeza que deseja sair sem salvar?');
}
  
</script>

                                            

                                            
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

