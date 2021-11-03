<?php require_once "header.php"; ?>

<?php require_once "./crud/conexao.php"; ?>



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
      <td> <a href="./action/edit.php?id_pessoa=<?php echo $dados ["id_pessoa"]; ?>" name="btn-editar" class="btn btn-primary"> Editar</a> </td>
      
      <td>  
        <form action="./crud/delete.php" method="post">
            <input type="hidden" name="id_pessoa" value="<?php echo $dados['id_pessoa'] ?>">
            <button type="submit" name="btn-delete" class="btn btn-danger">Delete</button>
        </form>
       </td>
    </tbody>
    <?php    
        }
      endwhile;
        
    ?>                     

</table>


<?php require_once("./footer.php"); ?>
