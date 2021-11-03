<?php require_once "../includes/header.php"; ?>

<?php require_once "../crud/conexao.php"; ?>


    <h1>Area Administrator</h1>
    <table border="5" class=" table-hover">
        <thead>
          <tr>
            <th> ID:  </th>
            <th> Nome:  </th> 
            <th> Celular: </th>
            <th> email: </th>
            <th> Idade: </th>
            <th> Area: </th>
            <th> Formação: </th>
          </tr>
        </thead>  
        <?php
            $sql = "SELECT * FROM cadastro.pessoa";
            $resultado = mysqli_query( $connect, $sql) or die("Informe error");
            if (mysqli_num_rows($resultado) > 0):
            while ( $dados = mysqli_fetch_assoc($resultado)) :
            {      
        ?>


        <tbody>   
          <tr>    
            <td> <?php echo $dados ["id_pessoa"] ?> </td> 
            <td> <?php echo $dados ["nome"] ?> </td>
            <td> <?php echo $dados ["tel"] ?> </td>
            <td> <?php echo $dados ["email"] ?> </td>
            <td> <?php echo $dados ["age"] ?> </td>
            <td> <?php echo $dados ["area"] ?> </td>
            <td> <?php echo $dados ["formacao"] ?> </td>
          
            <td> 
              <a href="./edit.php?id_pessoa=<?php echo $dados ["id_pessoa"]; ?>" name="btn-editar" class="btn btn-primary"> Editar</a> 
            </td>    
            <td>  
              <a href="../crud/delete.php?id_pessoa=<?php echo $dados ["id_pessoa"]; ?>" name="btn-delete" class="btn btn-danger" data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a>
            </td>
            <td> 
              <a href="http://localhost/my_curriculo/action/gerar_pdf_cadastro.php?id_pessoa=<?php echo $dados ["id_pessoa"]; ?>" name="btn-editar" class="btn btn-info"> Visuallizar </a> 
            </td>
          </tr>
        </tbody>
<?php    
          }
        endwhile;
      else:
?>
        <tr>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
        </tr>
<?php
        endif;
?>
          
      </table>
    <a class="btn  btn-success" href="http://localhost/my_curriculo/action/cadastrar.php">Adicionar Cadastro</a> 
<?php require_once("../includes/footer.php"); ?>
</div>





<script type="text/javascript">
$(document).ready(function(){
	$('a[data-confirm]').click(function(ev){
		var href = $(this).attr('href');
		if(!$('#confirm-delete').length){
			$('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-danger text-white">EXCLUIR ITEM<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"> <div class="alert alert-danger">Tem certeza de que deseja excluir o item selecionado? </div></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button><a class="btn btn-danger text-white" id="dataComfirmOK">Apagar</a></div></div></div></div>');
		}
		$('#dataComfirmOK').attr('href', href);
        $('#confirm-delete').modal({show: true});
		return false;
		
	});
});

</script>

<?php require_once "../includes/footer.php"; ?>        