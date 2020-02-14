<?php

include 'conecta_mysql.inc';

$matricula	= $_POST['matricula'];
$nome		= $_POST['nome'];
$diretoria	= $_POST['diretoria'];
$area		= $_POST['area'];
$login		= $_POST['login'];
$senha		= $_POST['senha'];
$email		= $_POST['email'];
$status		= $_POST['status'];
$perfil		= $_POST['perfil'];

$perf = "SELECT * FROM perfil WHERE nome_perfil = '$perfil' ";
$perf = $db->query($perf);
$per = $perf->fetch_assoc();
$p = $per ['cod_perfil'];

$area1 = "SELECT * FROM area WHERE nome_area = '$area' ";
$area1 = $db->query($area1);
$a = $area1->fetch_assoc();
$areas = $a ['cod_area'];


$query1 = "INSERT INTO usuario (cod_usuario, matricula, nome, login, senha, email, status, cod_perfil_fk) VALUES (null,'$matricula','$nome','$login', SHA1('$senha'),'$email', '$status', '$p')";





$sql = "SELECT MAX(cod_usuario) as cod_usuario FROM usuario";
$sql = $db->query($sql);
$row2 = $sql->fetch_assoc();


$ult_usuario = $row2['cod_usuario'] + 1;

$query3 = "INSERT INTO unid_usuario (cod_unid_usuario, cod_usuario_fk, cod_area_fk) VALUES (null, '$ult_usuario', '$areas')";



if ($db->query($query1) and  $db->query($query3) === TRUE) {
	echo "Usuario incluido com sucesso!";
	echo '<meta http-equiv="refresh" content="0;URL=cadastro_usuario.php" />';
	
} else {
	echo "Erro: " . $query1 . "<br>" . $db->error;
}

$db->close();

?> 