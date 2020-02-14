<?php
/* inicia a sessão */
	session_start();

include 'conecta_mysql.inc';

$qr_demanda = $db->query("SELECT * FROM demanda INNER JOIN aquisicao on demanda.cod_demanda = aquisicao.cod_demanda_fk INNER JOIN projeto on demanda.cod_projeto_fk = projeto.cod_projeto INNER JOIN area on demanda.cod_area_fk = area.cod_area INNER JOIN diretoria on area.cod_diretoria_fk = diretoria.cod_diretoria INNER JOIN contrato on demanda.cod_demanda = contrato.cod_demanda_fk INNER JOIN gestao on demanda.cod_gestao_fk = gestao.cod_gestao INNER JOIN licitacao on aquisicao.cod_aquisicao = licitacao.cod_aquisicao_fk") ;
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

   

</head>

<body>
   
  
                            
                            <?php
        if(isset($_SESSION['nome'])){
        //echo $_SESSION['nome'];
        }else{
		echo '<script type="text/javascript">window.location = "login.html"</script>';

    	}

?>
                            

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
                       
                    </div>
                </div>
            </div>
           
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Lista de Demandas Licitação</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th>Diretoria</th>
                                            <th>Área</th>
                                            <th>Objeto</th>
											<th>Número do Processo</th>
                                            <th>Tipo</th>
                                            <th>Número do Pregão</th>
											<th>Abertura do Pregão</th>
											<th>Fase da Licitação</th>
											<th>Fase da Demanda</th>
										
											
                                        </tr>
                                    </thead>
                                    <tbody>
<?php while($linhas =$qr_demanda->fetch_assoc()){ ?>
<tr>
<td><?php echo $linhas['sigla_diretoria'] ?></td>
<td><?php echo $linhas['nome_area'] ?></td>
<td><?php echo $linhas['objeto'] ?></td>
<td><?php echo $linhas['num_processo'] ?></td>
<td><?php echo $linhas['tipo'] ?></td>
<td><?php echo $linhas['num_pregao'] ?></td>
<td><?php echo date('d/m/Y' , strtotime ($linhas['dt_abertura'])) ?></td>
<td><?php echo $linhas['fase_licitacao'] ?></td>
<td><?php echo $linhas['fase_demanda'] ?></td>

<?php } ?>
	</tr>
	</tbody>


                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


   
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
