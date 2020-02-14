<?php

include 'conecta_mysql.inc';

$cod_usuario = $_GET['cod_usuario'];

$qr_usuario = $db->query("SELECT cod_usuario, status FROM usuario WHERE cod_usuario = '$cod_usuario'")->fetch_assoc();


$cod_usuario = $qr_usuario['cod_usuario'];
$status		= $qr_usuario['status'];

if ($status == ATIVO){
    $sql = "UPDATE usuario SET status='INATIVO' WHERE cod_usuario = '$cod_usuario'" or die(mysql_error());
    
    $db->query($sql);
    
    echo '<meta http-equiv="refresh" content="0;URL=listar_usuarios.php" />';
}

else {
    $sql = "UPDATE usuario SET status='ATIVO' WHERE cod_usuario = '$cod_usuario'" or die(mysql_error());
    
    $db->query($sql);
    
    echo '<meta http-equiv="refresh" content="0;URL=listar_usuarios.php" />';
}



?>

