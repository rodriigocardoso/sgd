<?php

// chamando os arquivos necessários do DOMPdf
require_once 'lib/html5lib/Parser.php';
require_once 'lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'lib/php-svg-lib/src/autoload.php';
require_once 'src/Autoloader.php';



// definindo os namespaces
Dompdf\Autoloader::register();
use Dompdf\Dompdf;

$dompdf="     <script type='text/php'>";
        if ( isset($pdf) ) { 
            $font = Font_Metrics::get_font("yourfont", "normal");
            $size = 9;
            $y = $pdf->get_height() - 24;
            $x = $pdf->get_width() - 15 - Font_Metrics::get_text_width("1/1", $font, $size);
            $pdf->page_text($x, $y, "{PAGE_NUM}/{PAGE_COUNT}", $font, $size);
        } 
$dompdf.="        </script>";


// inicializando o objeto Dompdf
$dompdf = new Dompdf();



ob_start();

require __DIR__ . "../../listar_licitacao_pdf.php";
$dompdf->loadHtml(ob_get_clean());

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
$dompdf->stream("page.pdf", array("Attachment" => 0)); 


?>