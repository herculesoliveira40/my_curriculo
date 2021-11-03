
<?php

use Dompdf\Dompdf;

require_once("../dompdf/autoload.inc.php");
$pdf=new Dompdf();
$html=file_get_contents("http://localhost/PHP/testedom/action/gerar_pdf.php?id_pessoa=1");
$pdf->loadHtml($html);
// Papel
// $pdf->setPaper("A7","landingpage");
//Renderizar o html
$pdf->render();

//Exibibir a página
$pdf->stream(
	"curriculo_".".pdf", 
	array(
		"Attachment" => false //Para realizar o download somente alterar para true
	)
);
?>