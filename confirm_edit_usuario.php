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

if(isset($_POST['cod_usuario'])){

$cod_usuario = $_POST['cod_usuario'];
$matricula	= $_POST['matricula'];
$nome		= $_POST['nome'];
$diretoria	= $_POST['sigla_diretoria'];
$area		= $_POST['nome_area'];
$login		= $_POST['login'];
$senha		= $_POST['senha'];
$status		= $_POST['status'];
$email		= $_POST['email'];
$perfil		= $_POST['nome_perfil'];

$perf = $db->query("SELECT * FROM perfil WHERE nome_perfil LIKE '$perfil'");
$perfis = $perf->fetch_assoc();
$ult_perf = $perfis['cod_perfil'];


     $sql = "UPDATE usuario INNER JOIN unid_usuario on usuario.cod_usuario = unid_usuario.cod_usuario_fk INNER JOIN area on unid_usuario.cod_area_fk = area.cod_area INNER JOIN diretoria on area.cod_diretoria_fk = diretoria.cod_diretoria SET cod_usuario='$cod_usuario',matricula='$matricula',nome='$nome', sigla_diretoria='$diretoria', nome_area='$area', login='$login', senha= SHA1('$senha'), email='$email', status='$status', cod_perfil_fk ='$ult_perf' WHERE cod_usuario = '$cod_usuario'" or die(mysql_error());
 
$db->query($sql);

if ($db->query($sql) === TRUE) { 

echo '<div class="alert alert-success" role="alert">
  Salvo com sucesso!
</div>';
echo '<meta http-equiv="refresh" content="0.5;URL=listar_usuarios.php" />';
}else {
	echo "Erro: " . $sql . "<br>" . $db->error;
}
}

?>

</body>
</html>