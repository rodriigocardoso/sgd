<?php

include 'conecta_mysql.inc';


$nome	    	= $_POST['nome'];
$ano    		= $_POST['ano'];




$sql = "INSERT INTO projeto VALUES";
$sql .= "(null,'$nome','$ano')";

if ($db->query($sql) === TRUE) {
	echo "Projeto incluido com sucesso!";
	echo '<meta http-equiv="refresh" content="0;URL=cadastro_projetos.php" />';
} else {
	echo "Erro: " . $sql . "<br>" . $db->error;
}

$db->close();