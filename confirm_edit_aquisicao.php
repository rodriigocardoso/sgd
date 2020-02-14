<html>
    
    <head>
        
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head
    
    <body>


<?php 

include 'conecta_mysql.inc';

if(isset($_POST['cod_demanda'])){
$cod_demanda	= $_POST['cod_demanda'];
$diretoria	    = $_POST['sigla_diretoria'];
$area	        = $_POST['nome_area'];
$objeto		    = $_POST['objeto'];
$processo       = $_POST['num_processo'];
$iniciado	    = $_POST['iniciado'];
$recebido	    = $_POST['dt_recebimento'];
$tipo        	= $_POST['tipo'];
$fase		    = $_POST['fase_demanda'];

//$date = DateTime::createFromFormat('d/m/Y', $recebido);
//$novo_recebido = $date->format('Ymd');

if ($recebido==''){
    $r='0000-00-00';
} else {
    $r= $recebido;
}

$sql = "UPDATE demanda INNER JOIN aquisicao on aquisicao.cod_demanda_fk = demanda.cod_demanda  SET num_processo='$processo', iniciado='$iniciado', dt_recebimento='$r', tipo='$tipo', fase_demanda='$fase' WHERE demanda.cod_demanda = '$cod_demanda'" or die(mysql_error());
 
$db->query($sql);

if ($db->query($sql) === TRUE) { 

echo '<div class="alert alert-success" role="alert">
  Salvo com sucesso!
</div>';
echo '<meta http-equiv="refresh" content="0.5;URL=listar_demandas_aquisicao.php" />';
}else {
	echo "Erro: " . $sql . "<br>" . $db->error;
}
}

?>

</body>
</html>