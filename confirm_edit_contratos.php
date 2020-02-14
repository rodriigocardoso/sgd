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
$tipo   	    = $_POST['tipo'];
$contratada	    = $_POST['contratada'];
$num_contrato  	= $_POST['num_contrato'];
$vencimento  	= $_POST['vencimento'];
$dt_assinatura	= $_POST['dt_assinatura'];
$fase		    = $_POST['fase_demanda'];

if ($vencimento==''){
    $d='0000-00-00';
} else {
    $d=$vencimento;
}


if ($dt_assinatura==''){
    $a='0000-00-00';
} else {
    $a=$dt_assinatura;
}



$sql = "UPDATE demanda INNER JOIN contrato on contrato.cod_demanda_fk = demanda.cod_demanda INNER JOIN aquisicao on demanda.cod_demanda = aquisicao.cod_demanda_fk  SET  num_processo = '$processo', tipo = '$tipo', contratada='$contratada', num_contrato='$num_contrato', vencimento = '$d', dt_assinatura = '$a', fase_demanda='$fase' WHERE demanda.cod_demanda = '$cod_demanda'" or die(mysql_error());
 
$db->query($sql);

if ($db->query($sql) === TRUE) { 

echo '<div class="alert alert-success" role="alert">
  Salvo com sucesso!
</div>';
echo '<meta http-equiv="refresh" content="0.5;URL=listar_demandas_contratos.php" />';
}else {
	echo "Erro: " . $sql . "<br>" . $db->error;
}
}

?>

</body>
</html>