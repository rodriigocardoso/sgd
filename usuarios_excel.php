<?php
    //declaramos uma variavel para monstarmos a tabela
    
    $dadosXls  = "";
    $dadosXls .= "  <table border='1' meta charset='utf-8'>";
    $dadosXls .= "          <tr>";
    $dadosXls .= "          <th>Cod_usuário</th>";
    $dadosXls .= "          <th>Matricula</th>";
    $dadosXls .= "          <th>Nome</th>";
    $dadosXls .= "          <th>Login</th>";
    $dadosXls .= "          <th>Senha</th>";
    $dadosXls .= "          <th>E-mail</th>";
    $dadosXls .= "          <th>Status</th>";
    $dadosXls .= "          <th>Perfil</th>";
    
    $dadosXls .= "      </tr>";
    //incluimos nossa conexão
    include 'conecta_mysql.inc';
    //instanciamos
  
    //mandamos nossa query para nosso método dentro de conexao dando um return $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = $db->query("SELECT * FROM usuario INNER JOIN perfil on usuario.cod_perfil_fk = perfil.cod_perfil");
    //varremos o array com o foreach para pegar os dados
    foreach($result as $res){
        $dadosXls .= "      <tr>";
        $dadosXls .= "          <td>".$res['cod_usuario']."</td>";
        $dadosXls .= "          <td>".$res['matricula']."</td>";
        $dadosXls .= "          <td>".$res['nome']."</td>";
        $dadosXls .= "          <td>".$res['login']."</td>";
        $dadosXls .= "          <td>".$res['senha']."</td>";
        $dadosXls .= "          <td>".$res['email']."</td>";
        $dadosXls .= "          <td>".$res['status']."</td>";
        $dadosXls .= "          <td>".$res['nome_perfil']."</td>";
        
        $dadosXls .= "      </tr>";
    }
    $dadosXls .= "  </table>";
 
    // Definimos o nome do arquivo que será exportado  
    $arquivo = "Lista_usuários.xls";  
    // Configurações header para forçar o download  
    header('Content-Language= pt-br');
    header('Content-type: text/html; charset=ISO-8859-1');
    header('Content-Type: application/excel');
    header('Content-Disposition: attachment;filename="'.$arquivo.'"');
    header('Cache-Control: max-age=0');
    // Se for o IE9, isso talvez seja necessário
    header('Cache-Control: max-age=1');
       
    // Envia o conteúdo do arquivo  
    echo $dadosXls;  
    exit;
?>
