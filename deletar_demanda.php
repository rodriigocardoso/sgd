<?php

include 'conecta_mysql.inc';

$cod_demanda = $_GET['cod_demanda'];

$db->query("DELETE FROM demanda, aquisicao, financeiro, licitacao, gestao, contrato USING demanda
INNER JOIN aquisicao on demanda.cod_demanda = aquisicao.cod_demanda_fk 
INNER JOIN financeiro on demanda.cod_financeiro_fk = financeiro.cod_financeiro
INNER JOIN projeto on demanda.cod_projeto_fk = projeto.cod_projeto
INNER JOIN contrato on demanda.cod_demanda = contrato.cod_demanda_fk
INNER JOIN licitacao on aquisicao.cod_aquisicao = licitacao.cod_aquisicao_fk
INNER JOIN gestao on demanda.cod_gestao_fk = gestao.cod_gestao
INNER JOIN area on demanda.cod_area_fk = area.cod_area
INNER JOIN diretoria on area.cod_diretoria_fk = diretoria.cod_diretoria
 WHERE demanda.cod_demanda = '$cod_demanda'");


    echo '<meta http-equiv="refresh" content="0;URL=listar_demandas_secex.php" />';


?>


