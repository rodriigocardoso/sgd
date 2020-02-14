<?php
    //declaramos uma variavel para monstarmos a tabela
   
	 $dadosXls  = "";
	 $dadosXls .= "  <table border='1' meta charset='utf-8'>";
	 $dadosXls .= "          <tr>";
	 $dadosXls .= "<th>Cod Demanda</th>";
	 $dadosXls .= "<th>Diretoria</th>";
	 $dadosXls .= "<th>Projeto</th>";
	 $dadosXls .= "<th>Objeto</th>";
	 $dadosXls .= "<th>Finalidade</th>";
	 $dadosXls .= "<th>Regional</th>";
	 $dadosXls .= "<th>Situação</th>";
	 $dadosXls .= "<th>Valor Solicitado</th>";
	 $dadosXls .= "<th>Valor Aprovado</th>";
	 $dadosXls .= "<th>Fase</th>";
	 $dadosXls .= "      </tr>";
	
	
	
    //incluimos nossa conexão
    include 'conecta_mysql.inc';
    //instanciamos
  
    //mandamos nossa query para nosso método dentro de conexao dando um return $stmt->fetchAll(PDO::FETCH_ASSOC);
	
    $result = $db->query("SELECT * FROM demanda INNER JOIN aquisicao on demanda.cod_demanda = aquisicao.cod_demanda_fk 
	INNER JOIN projeto on demanda.cod_projeto_fk = projeto.cod_projeto INNER JOIN area on demanda.cod_area_fk = area.cod_area 
	INNER JOIN diretoria on area.cod_diretoria_fk = diretoria.cod_diretoria ") ;

    
	//varremos o array com o foreach para pegar os dados
    foreach($result as $res){
	$dadosXls .= "      <tr>";
	$dadosXls .= " <td>".$res['cod_demanda']."</td>";
	$dadosXls .= " <td>".$res['sigla_diretoria']."</td>";
	$dadosXls .= " <td>".$res['nome']."</td>";
	$dadosXls .= " <td>".$res['objeto']."</td>";
	$dadosXls .= " <td>".$res['finalidade']."</td>";
	$dadosXls .= " <td>".$res['regional']."</td>";
	$dadosXls .= " <td>".$res['situacao']."</td>";
	$dadosXls .= " <td>".$res ['valor_solicitado']."</td>";
	$dadosXls .= " <td>".$res['valor_aprovado']."</td>";
	$dadosXls .= " <td>".$res['natureza']."</td>";
	$dadosXls .= " <td>".$res['fase_demanda']."</td>";
	$dadosXls .= "      </tr>";
	}
    $dadosXls .= "  </table>";
	
	
	
 
    // Definimos o nome do arquivo que será exportado  
    $arquivo = "Listar_geral.xls";  
    // Configurações header para forçar o download  
    header('Content-Language= pt-br');
     header ('Content-type: text/html; charset=ISO-8859-1');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$arquivo.'"');
    header('Cache-Control: max-age=0');
    // Se for o IE9, isso talvez seja necessário
    header('Cache-Control: max-age=1');
       
    // Envia o conteúdo do arquivo  
    echo $dadosXls;  
    exit;
?>
