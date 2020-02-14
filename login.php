<?php

	include 'conecta_mysql.inc';


	if(isset($_POST['login']) && isset($_POST['senha'])){
		$login 		= $_POST['login'];
		$senha 		= $_POST['senha'];
		
		$senha = sha1($senha);

		$get = mysqli_query($db,"SELECT * FROM usuario WHERE status = 'ativo' AND login = '$login' AND senha = '$senha'");
		$num = mysqli_num_rows($get);
		
		if($num == 1){
		$percorrer = mysqli_fetch_array($get);
				
				$nome = $percorrer['nome'];
				$cod_usuario = $percorrer['cod_usuario'];
				$cod_perfil = $percorrer['cod_perfil_fk'];
				
		$unid = mysqli_query($db,"SELECT * FROM unid_usuario WHERE cod_usuario_fk = '$cod_usuario'");		
		$row2 = $unid->fetch_assoc();		
        $new_unid = $row2['cod_area_fk'];
        
        $dir = mysqli_query($db,"SELECT * FROM area WHERE cod_area = '$new_unid'");		
		$row3 = $dir->fetch_assoc();		
        $new_dir = $row3['nome_area'];
        $new_area = $row3['nome_area'];
        $c_area = $row3 ['cod_diretoria_fk'];
        
        $direct = mysqli_query($db,"SELECT * FROM diretoria WHERE cod_diretoria = '$c_area'");		
		$row4 = $direct->fetch_assoc();		
        $new_direct = $row4['sigla_diretoria'];
        $new_diretoria = $row4['nome_diretoria'];
        
        $perf = mysqli_query($db,"SELECT * FROM perfil WHERE cod_perfil = '$cod_perfil'");		
		$perfils = $perf->fetch_assoc();		
        $new_perfil = $perfils['nome_perfil'];
        
				
		session_start();
				
				if($new_perfil == 'Secex'){
					$_SESSION['nome'] = $nome;
					$_SESSION['diretoria'] = $new_dir;
					$_SESSION['area'] = $new_area;
					$_SESSION['sigla_diretoria'] = $new_direct;
					$_SESSION['nome_perfil'] = $new_perfil;
					echo '<script type="text/javascript">window.location = "index_Secex.php"</script>';
		}
		
		elseif($new_perfil == 'Aquisição'){
		            $_SESSION['nome'] = $nome;
					$_SESSION['diretoria'] = $new_dir;
					$_SESSION['area'] = $new_area;
					$_SESSION['sigla_diretoria'] = $new_direct;
					$_SESSION['nome_perfil'] = $new_perfil;
					echo '<script type="text/javascript">window.location = "index_Aquisicao.php"</script>';
		    
		}
					
		elseif($new_perfil == 'Diretoria'){
		            $_SESSION['nome'] = $nome;
					$_SESSION['diretoria'] = $new_dir;
					$_SESSION['area'] = $new_area;
					$_SESSION['sigla_diretoria'] = $new_direct;
					$_SESSION['nome_perfil'] = $new_perfil;
					echo '<script type="text/javascript">window.location = "index_Diretoria.php"</script>';
		}
		elseif($new_perfil == 'Licitação'){
		            $_SESSION['nome'] = $nome;
					$_SESSION['diretoria'] = $new_dir;
					$_SESSION['area'] = $new_area;
					$_SESSION['sigla_diretoria'] = $new_direct;
					$_SESSION['nome_perfil'] = $new_perfil;
					echo '<script type="text/javascript">window.location = "index_Licitacao.php"</script>';
		}
		elseif($new_perfil == 'Gestão'){
		            $_SESSION['nome'] = $nome;
					$_SESSION['diretoria'] = $new_dir;
					$_SESSION['area'] = $new_area;
					$_SESSION['sigla_diretoria'] = $new_direct;
					$_SESSION['nome_perfil'] = $new_perfil;
					echo '<script type="text/javascript">window.location = "index_Gestao.php"</script>';
		}
		elseif($new_perfil == 'Contratos'){
		            $_SESSION['nome'] = $nome;
					$_SESSION['diretoria'] = $new_dir;
					$_SESSION['area'] = $new_area;
					$_SESSION['sigla_diretoria'] = $new_direct;
					$_SESSION['nome_perfil'] = $new_perfil;
					echo '<script type="text/javascript">window.location = "index_Contratos.php"</script>';
		}
		elseif($new_perfil == 'Financeiro'){
		            $_SESSION['nome'] = $nome;
					$_SESSION['diretoria'] = $new_dir;
					$_SESSION['area'] = $new_area;
					$_SESSION['sigla_diretoria'] = $new_direct;
					$_SESSION['nome_perfil'] = $new_perfil;
					echo '<script type="text/javascript">window.location = "index_Financeiro.php"</script>';
		}
	
}
		else{
				echo 'O Login ou Senha digitados estão errados.';
				echo '<script type="text/javascript">window.location = "login.html"</script>';
		}}


?>
		