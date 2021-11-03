<?php 
  require_once "../crud/conexao.php"; 
 if (isset($_GET['id_pessoa'])):
						
	$id_pessoa = mysqli_escape_string($connect, $_GET['id_pessoa']); 
	$sql = "SELECT * FROM pessoa WHERE (id_pessoa = $id_pessoa)";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_assoc($resultado);
		
endif;
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




	<h1>' . $dados['nome'] . '</h1>
	<p>' . $dados['tel'] . '</p>
	<p>' . $dados['email'] . '</p>
	<p>' . $dados['nasc'] . ', ' . $dados['ec'] . ', '. $dados['age'] . ' anos' . '</p>
	<p>' . '  ' . $dados['andress'] . '</p>
	<hr>  

	<h2> FORMAÇÃO: </h2>
		<li>' . 
		$dados['formacao'] 
		.'</li>

	<h2> CONHECIMENTOS COMPLEMENTARES </h2>
	<li>' . 
	$dados['cnc'] 
	.'</li>

	<h2> EXPERIÊNCIAS PROFISISONAIS: </h2>
	<li>' . 
	$dados['expe'] 
	.'</li>

	<h2> OBJETIVO: </h2>
	<li>' . 
	$dados['obj'] 
	.'</li>






');

//Renderizar o html
$dompdf->render();

//Exibibir a página
$dompdf->stream(
	"curriculo_". $dados['nome'] .".pdf", 
	array(
		"Attachment" => false //Para realizar o download somente alterar para true
	)
);
?>