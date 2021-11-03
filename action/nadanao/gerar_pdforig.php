<?php 
 include_once ("../crud/conexao.php"); 
 if (isset($_GET['id_pessoa'])):
						
	$id_pessoa = mysqli_escape_string($connect, $_GET['id_pessoa']); 


 $html="<table>";
 $html.="</table>";
 $html.="<table width='100%' border='1' cellspacing='0' cellpadding='1'>";
 $html.="<thead>";
 $html.="<tr>";
 $html.="<th>Produto</th>";
		$html.="<th>Sabor</font></th>";
		$html.="<th>Tamanho</font></th>";
		$html.="<th>Quantidade</font></th>";
 $html.="</tr>";
 $html.="</head>";
 $html.="<tbody>";


                

	

	
$sql = "SELECT * FROM pessoa WHERE (id_pessoa = $id_pessoa)";
endif;
$resultado = mysqli_query($connect, $sql);
 while($dados = mysqli_fetch_assoc($resultado)){
	 $html.="<tr>";
	 $html.="<td>$dados[id_pessoa]</td>";
	 $html.="<td>$dados[nome]</td>";
	 $html.="<td>$dados[email]</td>";
	 $html.="<td>$dados[tel]</td>";
	 $html.="</tr>";
	 
 }		
	

$html .= "</tbody>
                </table>";

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("../dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Celke - Relatório de Transações</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>