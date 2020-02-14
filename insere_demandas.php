<?php

include 'conecta_mysql.inc';


$query1 = "INSERT INTO financeiro (cod_financeiro, cod_pi, valor_empenhado, valor_contratado, natureza) VALUES (null, null, null, null, null)"; 

$query2 = "INSERT INTO gestao (cod_gestao, vlr_realizado, vlr_necessario, parcelas) VALUES (null, null, null, null)";

if ($db->query($query1) AND $db->query($query2) === TRUE) {
	echo "Demanda incluida com sucesso!";

} else {
	echo "Erro: " . $sql . "<br>" . $db->error;
}

$db->close();


?>

<?php

include 'conecta_mysql.inc';

$diretoria 		= $_POST['diretoria'];
$area 	    	= $_POST['nome_area'];
$objeto 		= $_POST['objeto'];
$projeto 		= $_POST['projeto'];
$finalidade		= $_POST['finalidade'];
$regional		= $_POST['regional'];
$situacao		= $_POST['situacao'];
$valor_solicitado 	= preg_replace("/[^0-9,]+/i","",$_POST["valor_solicitado"]); 
$valor_solicitado=str_replace(",",".",$valor_solicitado);
$valor_aprovado 	= preg_replace("/[^0-9,]+/i","",$_POST["valor_aprovado"]); 
$valor_aprovado =str_replace(",",".",$valor_aprovado);
$fase_demanda   = $_POST['fase_demanda'];


$newdiretoria= "SELECT * FROM diretoria WHERE  sigla_diretoria LIKE '$diretoria'";
$newdiretoria = $db->query($newdiretoria);
$dir = $newdiretoria->fetch_assoc();
$ult_dir = $dir['cod_diretoria'];

$newarea= "SELECT * FROM area WHERE nome_area LIKE '$area'";
$newarea = $db->query($newarea);
$ult_area = $newarea->fetch_assoc();
$area1 = $ult_area['cod_area'];



$newprojeto= "SELECT * FROM projeto WHERE  nome LIKE '$projeto'";
$newprojeto = $db->query($newprojeto);
$proj = $newprojeto->fetch_assoc();
$ult_projeto = $proj['cod_projeto'];



?>


<?php

$sql_financeiro = "SELECT MAX(cod_financeiro) as cod_financeiro FROM financeiro";
$sql_financeiro = $db->query($sql_financeiro);
$finance = $sql_financeiro->fetch_assoc();
$ult_financeiro = $finance ['cod_financeiro'];

$sql_gestao = "SELECT MAX(cod_gestao) as cod_gestao FROM gestao";
$sql_gestao = $db->query($sql_gestao);
$gestar = $sql_gestao->fetch_assoc();
$ult_gestao = $gestar ['cod_gestao'];

$sql = "INSERT INTO demanda VALUES";
$sql .= "(null,'$objeto','$finalidade','$regional', '$situacao', '$valor_solicitado', '$valor_aprovado', null, '$fase_demanda', '$ult_projeto', '$ult_gestao', '$ult_financeiro', '$area1')";

?>

<?php

$sql_demanda= "SELECT MAX(cod_demanda) as cod_demanda FROM demanda";
$sql_demanda = $db->query($sql_demanda);
$demand = $sql_demanda->fetch_assoc();
$ult_demanda = $demand ['cod_demanda'] + 1;

$sql_aquisicao= "SELECT MAX(cod_aquisicao) as cod_aquisicao FROM aquisicao";
$sql_aquisicao = $db->query($sql_aquisicao);
$aquisicao = $sql_aquisicao->fetch_assoc();
$ult_aquisicao = $aquisicao ['cod_aquisicao'] + 1;



$query3 = "INSERT INTO aquisicao (cod_aquisicao, iniciado, dt_recebimento, tipo, classificacao, cod_demanda_fk) VALUES (null, 'Não', null, null, null, '$ult_demanda')";

$query4 = "INSERT INTO contrato (cod_contrato, num_contrato, contratada, vencimento, dt_assinatura, cod_demanda_fk) VALUES (null, null, null, null, null, '$ult_demanda')";

$query5 = "INSERT INTO licitacao (cod_licitacao, num_pregao, dt_abertura, fase_licitacao, cod_aquisicao_fk) VALUES (null, null, null, null, '$ult_aquisicao')";





if ($db->query($sql) and $db->query($query3) and $db->query($query4) and $db->query($query5) === TRUE) {
	echo "Demanda incluida com sucesso!";
	echo '<meta http-equiv="refresh" content="0;URL=cadastro_demanda_diretoria.php" />';
} else {
	echo "Erro: " . $sql . "<br>" . $db->error;
}

$db->close();

?>