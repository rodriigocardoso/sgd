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
$fase		    = $_POST['fase_demanda'];
$vlr_realizado 	= preg_replace("/[^0-9,]+/i","",$_POST["vlr_realizado"]); 
$vlr_realizado=str_replace(",",".",$vlr_realizado);
$vlr_necessario 	= preg_replace("/[^0-9,]+/i","",$_POST["vlr_necessario"]); 
$vlr_necessario=str_replace(",",".",$vlr_necessario);
$parcelas	    = $_POST['parcelas'];

if ($vlr_realizado ==''){
    $p=0;
} else { 
    $p = $vlr_realizado;

}

if ($vlr_necessario ==''){
    $y=0;
} else { $y = $vlr_necessario;

}

$sql = "UPDATE demanda INNER JOIN contrato on contrato.cod_demanda_fk = demanda.cod_demanda INNER JOIN gestao on demanda.cod_gestao_fk = gestao.cod_gestao SET  contratada='$contratada', num_contrato='$num_contrato', fase_demanda='$fase', vlr_realizado = '$p', vlr_necessario='$y', parcelas='$parcelas' WHERE demanda.cod_demanda = '$cod_demanda'" or die(mysql_error());
 
$db->query($sql);

if ($db->query($sql) === TRUE) { 

echo '<div class="alert alert-success" role="alert">
  Salvo com sucesso!
</div>';
echo '<meta http-equiv="refresh" content="0.5;URL=listar_demandas_gestao.php" />';
}else {
	echo "Erro: " . $sql . "<br>" . $db->error;
}
}

?>

</body>
</html>