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
$projeto	    = $_POST['nome'];
$objeto		    = $_POST['objeto'];
$regional	    = $_POST['regional'];
$valor_solicitado 	= preg_replace("/[^0-9,]+/i","",$_POST["valor_solicitado"]); 
$valor_solicitado=str_replace(",",".",$valor_solicitado);
$valor_aprovado 	= preg_replace("/[^0-9,]+/i","",$_POST["valor_aprovado"]); 
$valor_aprovado =str_replace(",",".",$valor_aprovado);
$fase           = $_POST['fase_demanda'];


$sql = "UPDATE demanda INNER JOIN area on demanda.cod_area_fk = area.cod_area INNER JOIN projeto on demanda.cod_projeto_fk = projeto.cod_projeto INNER JOIN diretoria on area.cod_diretoria_fk = diretoria.cod_diretoria INNER JOIN aquisicao on demanda.cod_demanda = aquisicao.cod_demanda_fk SET nome='$projeto', objeto ='$objeto', regional='$regional', valor_solicitado='$valor_solicitado', valor_aprovado  = '$valor_aprovado', fase_demanda='$fase' WHERE demanda.cod_demanda = '$cod_demanda'" or die(mysql_error());
 
$db->query($sql);


if ($db->query($sql) === TRUE) { 

echo '<div class="alert alert-success" role="alert">
  Salvo com sucesso!
</div>';
echo '<meta http-equiv="refresh" content="0.5;URL=listar_demandas_secex.php" />';
}else {
	echo "Erro: " . $sql . "<br>" . $db->error;
}
}

?>

</body>
</html>