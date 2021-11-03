<?php
                 $nome = $_POST['nome'];
                 $tel = $_POST['tel'];
                 $email = $_POST['email'];
                 $nasc = $_POST['nasc'];
				 $ec = $_POST['ec'];
				 $age = $_POST['age'];
				 $andress = $_POST['andress'];
				 $formacao = $_POST['formacao'];
				 $cnc = $_POST['cnc'];
				 $expe = $_POST['expe'];
				 $obj = $_POST['obj'];

//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once("../dompdf/autoload.inc.php");

//Criando a Instancia
$dompdf = new DOMPDF();

// Carrega seu HTML
$dompdf->load_html('
						<style>
						body{
							border-style:double;
							border-radius: 10px;
							border-color: blue;
							background-color: white
						}
						h1, p{
							color: black;
							text-align: center;
						}
						h2{
							color: black;
							text-align: left;
							padding: 8px;
						} 
						li{
							color: black;
							text-align: left;
							padding: 8px;
							margin-left: 22px;
						}
					</style>




	<h1>' . $nome . '</h1>
	<p>' . $tel . '</p>
	<p>' . $email . '</p>
	<p>' . $nasc . ', ' . $ec . ', '. $age . ' anos' . '</p>
	<p>' . '  ' . $andress . '</p>
	<hr>  

	<h2> FORMAÇÃO: </h2>
		<li>' . 
			$formacao 
		.'</li>

	<h2> CONHECIMENTOS COMPLEMENTARES </h2>
	<li>' . 
		$cnc 
	.'</li>

	<h2> EXPERIÊNCIAS PROFISISONAIS: </h2>
	<li>' . 
		$expe 
	.'</li>

	<h2> OBJETIVO: </h2>
	<li>' . 
		$obj 
	.'</li>






');

//Renderizar o html
$dompdf->render();

//Exibibir a página
$dompdf->stream(
	"curriculo_".$nome .".pdf", 
	array(
		"Attachment" => false //Para realizar o download somente alterar para true
	)
);
?>