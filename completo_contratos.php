<?php
/* inicia a sessão */
	session_start();


include 'conecta_mysql.inc';

$cod_demanda = $_GET['cod_demanda'];

$qr_demanda = $db->query("SELECT * FROM demanda 

LEFT JOIN gestao on demanda.cod_gestao_fk = gestao.cod_gestao 
LEFT JOIN contrato on demanda.cod_demanda = contrato.cod_demanda_fk 
LEFT JOIN projeto on demanda.cod_projeto_fk = projeto.cod_projeto 
LEFT JOIN area on demanda.cod_area_fk = area.cod_area 
LEFT JOIN diretoria on area.cod_diretoria_fk = diretoria.cod_diretoria 
LEFT JOIN financeiro on demanda.cod_financeiro_fk = financeiro.cod_financeiro 
LEFT JOIN aquisicao on demanda.cod_demanda = aquisicao.cod_demanda_fk 
LEFT JOIN licitacao on aquisicao.cod_aquisicao = licitacao.cod_aquisicao_fk
WHERE demanda.cod_demanda = '$cod_demanda'")->fetch_assoc();

//$dt_recebimento = $qr_demanda['dt_recebimento'];
//$dt_abertura = $qr_demanda['dt_abertura'];

//if ($dt_recebimento == ''){
 //   $dt_recebimento = '00/00/0000';
//}

//else {
//    $dt_recebimento = $qr_demanda['dt_recebimento'];
    
//}

//if ($dt_abertura == ''){
   // $dt_abertura = "0000-00-00";
//}

//else {
  //  $dt_abertura = $qr_demanda['dt_abertura'];
    
//}

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
               <a class="navbar-brand" href="index_Contratos.php"><img src="images/logo_principal.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index_Contratos.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index_Contratos.php"> <i class="menu-icon fa fa-dashboard"></i>Principal </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    
					
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-share-square-o"></i>Gerenciar Projetos</a>
                        <ul class="sub-menu children dropdown-menu">
                           
                            <li><i class="fa fa-table"></i><a href="listar_projetos_contratos.php">Listar Projetos</a></li>
                        </ul>
                    </li>
                          <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gerenciar Demandas</a>
                        <ul class="sub-menu children dropdown-menu">
						
                            <li><i class="fa fa-table"></i><a href="listar_demandas_contratos.php">Listar Demandas de Contratos</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_demandas_geral_contratos.php">Listar Demandas Geral</a></li>
                            
                             </ul>
                    </li>
					   
					
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Relatórios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_financeiro_contratos.php">Relatório Financeiro</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_fase_contratos.php">Relatório Fase</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_tipo_contratos.php">Relatório Tipo</a></li>
                        </ul>
                    </li>
					
					 <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Gerar Gráficos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-spinner"></i><a href="grafico_fase_contratos.php">Fases das Demandas</a></li>
                            <li><i class="menu-icon fa fa-file-word-o"></i><a href="grafico_tipo_contratos.php">Tipo de Demandas</a></li>
							<li><i class="menu-icon fa fa-puzzle-piece"></i><a href="grafico_status_contratos.php">Demandas Iniciadas</a></li>
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

<div class="content mt-3">
            <div class="animated fadeIn">


            

                   <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Demanda Completa</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="cod_demanda" class=" form-control-label">Código da Demanda</label><input type="text" id="cod_demanda" name="cod_demanda" value="<?php echo $qr_demanda['cod_demanda'] ?>" placeholder="Sem atualização!" class="form-control" readonly></div>
                                
                                
                                    <div class="form-group"><label for="vat" class=" form-control-label">Objeto</label><input type="text" id="vat" value="<?php echo $qr_demanda['objeto'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                    
                                    
                                        <div class="form-group"><label for="street" class=" form-control-label">Finalidade</label><input type="text" id="street" value="<?php echo $qr_demanda['finalidade'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                            
                                               
                                                    
                                                    
                                        <div class="form-group"><label for="city" class=" form-control-label">Regional</label><input type="text" id="city" value="<?php echo $qr_demanda['regional'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                  
                                                    
                                                    
                                                    
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Situação</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['situacao'] ?>" placeholder="Sem atualização!" class="form-control" readonly></div>
                                                      
                                                    
                                                    
                                                     
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Valor Solicitado</label><input type="text" id="postal-code" value="R$ <?php  echo  number_format($qr_demanda['valor_solicitado'], 2, ',', '.') ?>"placeholder="Sem atualização!" class="form-control" readonly></div>
                                                       
                                                    
                                                      
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Valor Aprovado</label><input type="text" id="postal-code" value="R$ <?php  echo  number_format($qr_demanda['valor_aprovado'], 2, ',', '.') ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                     
                                                    
                                                     <!--INICIO FINANCEIRO-->
                                                    <div class="card-header"><strong>Financeiro</strong></div>
                                                    <div class="card-body card-block"> </div>
                                                   
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Código PI</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['cod_pi'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                    
                                                   
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Valor Empenhado</label><input type="text" id="postal-code" value="R$ <?php  echo  number_format($qr_demanda['valor_empenhado'], 2, ',', '.') ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                    
                                                    
                                                    
                                                     
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Valor Contratado</label><input type="text" id="postal-code" value="R$ <?php  echo  number_format($qr_demanda['valor_contratado'], 2, ',', '.') ?>" placeholder="Sem atualização!" class="form-control" readonly></div>
                                                        
                                                    
                                                      
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Tipo de Despesa</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['natureza'] ?>" placeholder="Sem atualização!" class="form-control" readonly></div>
                                                        
                                                    
                                                    <!--FIM FINANCEIRO-->
                                                    
                                                      <!--INICIO AQUISIÇÕES-->
                                                      
                                                      <div class="card-header"><strong>Aquisições</strong></div>
                                                       <div class="card-body card-block"> </div>
                                                      
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Número do Processo</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['num_processo'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                    
                                                      
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Fase da Demanda</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['fase_demanda'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                    
                                                      
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Demanda Iniciada</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['iniciado'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                       
                                                    
                                                   
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Data de Recebimento</label><input type="text" id="postal-code" value="<?php 
if (!empty($qr_demanda['dt_recebimento']) AND $qr_demanda['dt_recebimento'] != '0000-00-00'){
echo date('d/m/Y' , strtotime ($qr_demanda['dt_recebimento']));

} ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                    
                                                    
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Tipo</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['tipo'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                       
                                                    
                                                    
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Classificação</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['classificacao'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                    <!--FIM AQUISIÇÕES-->
                                                    
                                                    
                                                   <!--INICIO LICITAÇÕES-->
                                                    
                                                    <div class="card-header"><strong>Licitação</strong></div>
                                                       <div class="card-body card-block"> </div>
                                                       
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Número do Pregão</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['num_pregao'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                        
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Data de Abertura do Pregão</label><input type="text" id="postal-code" value="<?php 
if (!empty($qr_demanda['dt_abertura']) AND $qr_demanda['dt_abertura'] != '0000-00-00'){
echo date('d/m/Y' , strtotime ($qr_demanda['dt_abertura']));

} ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Fase da Licitação</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['fase_licitacao'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                        <!--FIM LICITAÇÕES-->
                                                        
                                                        <!--INICIO CONTRATOS-->
                                                         
                                                         <div class="card-header"><strong>Contratos e Parcerias</strong></div>
                                                        <div class="card-body card-block"> </div>
                                                        
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Número do Contrato</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['num_contrato'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Contratada</label><input type="text" id="postal-code" value="<?php echo $qr_demanda['contratada'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Vencimento do Contrato</label><input type="text" id="postal-code" value="<?php 
if (!empty($qr_demanda['vencimento']) AND $qr_demanda['vencimento'] != '0000-00-00'){
echo date('d/m/Y' , strtotime ($qr_demanda['vencimento']));

} ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                        
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Data da Assinatua do Contrato</label><input type="text" id="postal-code" value="<?php 
if (!empty($qr_demanda['dt_assinatura']) AND $qr_demanda['dt_assinatura'] != '0000-00-00'){
echo date('d/m/Y' , strtotime ($qr_demanda['dt_assinatura']));

} ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                        
                                                         <!--FIM CONTRATOS-->
                                                         
                                                          <!--INICIO GESTÃO-->
                                                        
                                                         <div class="card-header"><strong>Gestão de Contratos e Parcerias</strong></div>
                                                        <div class="card-body card-block"> </div>
                                                                                                                <div class="form-group"><label for="postal-code" class=" form-control-label">Valor Realizado</label><input type="text" id="postal-code" value="R$ <?php  echo  number_format($qr_demanda['vlr_realizado'], 2, ',', '.') ?>" placeholder="Sem atualização!" class="form-control" readonly></div>
                                                                                                                
                                                    
                                                                                                                <div class="form-group"><label for="postal-code" class=" form-control-label">Valor Necessário</label><input type="text" id="postal-code" value="R$ <?php  echo  number_format($qr_demanda['vlr_necessario'], 2, ',', '.') ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                    
                                                    <div class="form-group"><label for="country" class=" form-control-label">Parcelas</label><input type="text" id="country" value="<?php echo $qr_demanda['parcelas'] ?>" placeholder="Sem atualização!" class="form-control"  readonly></div>
                                                    
                                                    <!--FIM GESTÃO-->
                                                    
                                                </div>
                                            </div>

                                            
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                <!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>




