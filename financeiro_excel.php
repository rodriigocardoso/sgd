<?php
    //declaramos uma variavel para monstarmos a tabela
   
	 $dadosXls  = "";
	 $dadosXls .= "  <table border='1' meta charset='utf-8'>";
	 $dadosXls .= "          <tr>";
	 $dadosXls .= "<th>Diretoria</th>";
	 $dadosXls .= "<th>Área</th>";
	 $dadosXls .= "<th>Objeto</th>";
	 $dadosXls .= "<th>Número do Processo</th>";
	 $dadosXls .= "<th>Cod_PI</th>";
	 $dadosXls .= "<th>Valor Empenhado</th>";
	 $dadosXls .= "<th>Valor Contratado</th>";
	 $dadosXls .= "<th>Natureza</th>";
	 $dadosXls .= "<th>Fase</th>";
	 $dadosXls .= "      </tr>";
	
	
	
    //incluimos nossa conexão
    include 'conecta_mysql.inc';
    //instanciamos
  
    //mandamos nossa query para nosso método dentro de conexao dando um return $stmt->fetchAll(PDO::FETCH_ASSOC);
	
    $result = $db->query("SELECT * FROM demanda INNER JOIN aquisicao on demanda.cod_demanda = aquisicao.cod_demanda_fk 
	INNER JOIN projeto on demanda.cod_projeto_fk = projeto.cod_projeto INNER JOIN area on demanda.cod_area_fk = area.cod_area 
	INNER JOIN diretoria on area.cod_diretoria_fk = diretoria.cod_diretoria INNER JOIN financeiro on demanda.cod_financeiro_fk = financeiro.cod_financeiro ") ;

    
	//varremos o array com o foreach para pegar os dados
    foreach($result as $res){
	$dadosXls .= "      <tr>";
	$dadosXls .= " <td>".$res['sigla_diretoria']."</td>";
	$dadosXls .= " <td>".$res['nome_area']."</td>";
	$dadosXls .= " <td>".$res['objeto']."</td>";
	$dadosXls .= " <td>".$res['num_processo']."</td>";
	$dadosXls .= " <td>".$res['cod_pi']."</td>";
	$dadosXls .= " <td>".$res ['valor_empenhado']."</td>";
	$dadosXls .= " <td>".$res['valor_contratado']."</td>";
	$dadosXls .= " <td>".$res['natureza']."</td>";
	$dadosXls .= " <td>".$res['fase_demanda']."</td>";
	$dadosXls .= "      </tr>";
	}
    $dadosXls .= "  </table>";
	
	
	
 
    // Definimos o nome do arquivo que será exportado  
    $arquivo = "Listar_financeiro.xls";  
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
