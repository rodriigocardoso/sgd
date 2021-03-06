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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria<a class="navbar-brand" href="index_Finaneiro.php"><img src="images/logo_principal.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index_Financeiro.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index_Financeiro.php"> <i class="menu-icon fa fa-dashboard"></i>Principal </a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    
					
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-share-square-o"></i>Gerenciar Projetos</a>
                        <ul class="sub-menu children dropdown-menu">
                            
                            <li><i class="fa fa-table"></i><a href="listar_projetos_financeiro.php">Listar Projetos</a></li>
                        </ul>
                    </li>
                         <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gerenciar Demandas</a>
                        <ul class="sub-menu children dropdown-menu">
						
                            <li><i class="fa fa-table"></i><a href="listar_demandas_financeiro.php">Listar Demandas do Financeiro</a></li>
                            <li><i class="fa fa-table"></i><a href="listar_demandas_geral_financeiro.php">Listar Demandas Geral</a></li>
                            
                             </ul>
                    </li>
					
					
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Relatórios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_financeiro_financeiro.php">Relatório Financeiro</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_fase_financeiro.php">Relatório Fase</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="relatorio_tipo_financeiro.php">Relatório Tipo</a></li>
                        </ul>
                    </li>
					
					 <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Gerar Gráficos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-spinner"></i><a href="grafico_fase_financeiro.php">Fases das Demandas</a></li>
                            <li><i class="menu-icon fa fa-file-word-o"></i><a href="grafico_tipo_financeiro.php">Tipo de Demandas</a></li>
							<li><i class="menu-icon fa fa-puzzle-piece"></i><a href="grafico_status_financeiro.php">Demandas Iniciadas</a></li>
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



            <div> <br><br><br><br><br><br>
			<center>
                <form action="pesquisa_financeiro.php" method="POST" autocomplete="off" >
<div>
<input type="text" size="35" maxlength="256" name="pesquisar" placeholder="BUSCAR DEMANDA"  position="absolute" autocomplete="off" style="padding:6px; border-radius: 25px; text-align: center">
</div>				
<input type="submit" value="Pesquisar" name="enviar" style=" border-radius: 25px; text-align: center"><br>

					  </form>
                    <footer class="twt-footer">
                        
                        
                    </footer>
                </section>
            </div>
		
		<center>
   <div class="">
                        <div class="card float-center">
                           
                            <div class="card-body">
							
<?php

$pesquisar = $_POST['pesquisar'];


	if (empty ($pesquisar)){
	    //echo "<center>Digite algo!"."</center>";
	}
	
    else {

$qr_demanda = $db->query("SELECT * FROM demanda INNER JOIN aquisicao on demanda.cod_demanda = aquisicao.cod_demanda_fk INNER JOIN projeto on demanda.cod_projeto_fk = projeto.cod_projeto INNER JOIN area on demanda.cod_area_fk = area.cod_area INNER JOIN diretoria on area.cod_diretoria_fk = diretoria.cod_diretoria INNER JOIN financeiro on demanda.cod_financeiro_fk=financeiro.cod_financeiro WHERE demanda.objeto LIKE '%$pesquisar%'");

$count =  mysqli_num_rows ($qr_demanda);

}


if (empty ($pesquisar)){
echo "<center>Digite Algo!"."</center>";
}

elseif ($count == 0){
echo "<center>Registro não encontrado! <br> Para cadastrar uma Nova Demanda entre em contato com área responsável.</a>"."</center>";
}
else { ?>
									<table class="table table-bordered">
                                    <thead>
                                        <tr>
												
												<th scope="col" >Diretoria</th>
                                            	<th scope="col">Área</th>
												<th scope="col">Objeto</th>
												<th scope="col">Número do Processo</th>
												<th scope="col" >Cod_PI</th>
												<th scope="col">Valor Empenhado</th>
												<th scope="col" >Valor Contratado</th>
												<th scope="col" >Tipo de Despesa</th>
												<th scope="col">Fase</th>
												<th scope="col">Alterar</th>
												<th scope="col" >Completo</th>
	
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
									
									<?php while($linhas = $qr_demanda->fetch_assoc()){ ?>
<tr>									
<td><?php echo $linhas['sigla_diretoria'] ?></td>                                     
<td><?php echo $linhas['nome_area'] ?></td>	
<td><?php echo $linhas['objeto'] ?></td>	
<td><?php echo $linhas['num_processo']?></td>	
<td><?php echo $linhas['cod_pi']?></td>	
<td>R$ <?php  echo  number_format($linhas['valor_empenhado'], 2, ',', '.') ?> </td>	
<td>R$ <?php  echo  number_format($linhas['valor_contratado'], 2, ',', '.') ?> </td>
<td><?php echo $linhas['natureza'] ?></td>	
<td><?php echo $linhas['fase_demanda']?></td>	
<td><a class="nav-link" href=editar_financeiro.php?cod_demanda=<?php echo $linhas['cod_demanda'] ?>"><i class="fa fa-edit"></i> Editar</a></td>
<td><a class="nav-link" href=completo_financeiro.php?cod_demanda=<?php echo $linhas['cod_demanda'] ?>"><i class="fa fa-clone"></i> Completo</a></td>



<?php } }?>
</tr>
</tbody>
</table>
                            </div>
                        </div>
                    </div>

           </center> 
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