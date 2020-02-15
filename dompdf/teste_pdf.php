<?php

// chamando os arquivos necessários do DOMPdf
require_once 'lib/html5lib/Parser.php';
require_once 'lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'lib/php-svg-lib/src/autoload.php';
require_once 'src/Autoloader.php';



// definindo os namespaces
Dompdf\Autoloader::register();
use Dompdf\Dompdf;


// inicializando o objeto Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml("<h1>Olá Mundo!</h1><p>Esse é o meu primeiro PDF!</p>");


ob_start();

require __DIR__ . "../../list_usuarios.php";
$dompdf->loadHtml(ob_get_clean());

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();
$dompdf->stream("page.pdf", array("Attachment" => 0)); 


?>