<?php require_once "../header.php"; ?>

<?php require_once "../crud/conexao.php"; ?>



<table border="5">
    <thead>
      <th> ID:  </th>
      <th> Nome:  </th> 
      <th> Celular: </th>
      <th> email: </th>
    </thead>  
    <?php
        $resultado = mysqli_query( $connect, $sql) or die("Informe error");
        while ( $dados = mysqli_fetch_assoc($resultado)) :
        {      
    ?>


    <tbody>      
      <td> <?php echo $dados ["id_pessoa"] ?> </td> 
      <td> <?php echo $dados ["nome"] ?> </td>
      <td> <?php echo $dados ["tel"] ?> </td>
      <td> <?php echo $dados ["email"] ?> </td>
      <td> <a href="./action/edit.php?id_pessoa=<?php echo $dados ["id_pessoa"]; ?>" name="btn-editar"> Editar</a> </td>
      
      <td><a href="#modal<?php echo $dados['id_pessoa'] ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

<!-- Modal Structure -->
<div id="modal<?php echo $dados['id_pessoa'] ?>" class="modal">
    <div class="modal-content">
        <h4>Hey!</h4>
        <p>Are you sure you want to delete this client?</p>
    </div>
    <div class="modal-footer">
        <form action="./crud/delete.php" method="post">
            <!-- Buttons inside modal -->
            <input type="hidden" name="id_pessoa" value="<?php echo $dados['id_pessoa'] ?>">
            <button type="submit" name="btn-delete" class="btn red">Delete</button>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
        </form>
    </div>
</div>





    </tbody>
    <?php    
        }
      endwhile;
        
    ?>                     

</table>
 

<!-- <?php //  mysqli_free_result($dados); ?> -->


<?php include_once ("./footer.php"); ?>
