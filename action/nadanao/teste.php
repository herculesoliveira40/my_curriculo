<?php 
 include_once "../crud/conexao.php"; 

	if (isset($_GET['id_pessoa'])):
						
		$id_pessoa = mysqli_escape_string($connect, $_GET['id_pessoa']);                 
		// $sql = "SELECT * FROM pessoa "; 
		$sql = "SELECT * FROM pessoa WHERE (id_pessoa = $id_pessoa)";

		$resultado = mysqli_query( $connect, $sql);
		$dados = mysqli_fetch_assoc($resultado);
		
	endif;

?>
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
							padding: 1px;
						}
						h2{
							color: black;
							text-align: left;
							padding: 5px;
						} 
						li{
							color: black;
							text-align: left;
							padding: 5px;
							margin-left: 22px;
						}
					</style>





	<h1> <?php echo $dados['nome'] ; ?> </h1>
	<p> <?php echo $dados['tel'] ; ?> </p>
	<p> <?php echo $dados['email'] ; ?> </p>
	<p> <?php echo $dados['nasc'] . ", " . $dados['ec'] . ", " . $dados['age'] . "anos"; ?> </p>
	<p> <?php echo $dados['andress'] ;?> </p>
	<hr> 

	<h2> FORMAÇÃO: </h2>
		<li> 
			<?php echo $dados['formacao'] ;?>
		</li>

	<h2> CONHECIMENTOS COMPLEMENTARES </h2>
	<li> 
		<?php echo $dados['cnc'] ;?> 
	</li>

	<h2> EXPERIÊNCIAS PROFISISONAIS: </h2>
	<li>
		<?php echo $dados['expe'] ;?>
	</li>

	<h2> OBJETIVO: </h2>
	<li> 
		<?php echo $dados['obj'] ;?>
	</li>



<?php $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 

echo $link ;
?>