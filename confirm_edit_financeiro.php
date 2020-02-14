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
$cod_pi 	    = $_POST['cod_pi'];
$empenhado 	= preg_replace("/[^0-9,]+/i","",$_POST["valor_empenhado"]); 
$empenhado=str_replace(",",".",$empenhado);
$contratado 	= preg_replace("/[^0-9,]+/i","",$_POST["valor_contratado"]); 
$contratado=str_replace(",",".",$contratado);
$natureza        = $_POST['natureza'];

if ($empenhado ==''){
    $p=0;
} else { $p = $empenhado;

}

if ($contratado ==''){
    $y=0;
} else { $y = $contratado;

}


$sql = "UPDATE financeiro INNER JOIN demanda on financeiro.cod_financeiro = demanda.cod_financeiro_fk SET cod_pi = '$cod_pi', valor_empenhado = '$p', valor_contratado = '$y', natureza = '$natureza' WHERE demanda.cod_demanda = '$cod_demanda'" or die(mysql_error());
 
$db->query($sql);

if ($db->query($sql) === TRUE) { 

echo '<div class="alert alert-success" role="alert">
  Salvo com sucesso!
</div>';
echo '<meta http-equiv="refresh" content="0.5;URL=listar_demandas_financeiro.php" />';
}else {
	echo "Erro: " . $sql . "<br>" . $db->error;
}
}

?>

</body>
</html>