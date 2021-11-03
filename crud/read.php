<?php require_once "../includes/header.php"; ?>
<?php require_once("./conexao.php"); ?>


<?php
      // limpeza de dados do form
function clear($input) {
    global $connect;
    //sql
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}
      
      if (isset($_POST['btn-search'])):
                 $nome = clear($_POST['nome']);

                 $sql  = "SELECT * FROM cadastro.pessoa WHERE nome LIKE ('%$nome%')"; 
                        // // executa a query
            //   $dados = mysqli_query( $conn, $query) or die(mysqli_error());
                 $resultado = mysqli_query( $connect, $sql) or die("Informe Somente numeros");
?>
    
    <h2> Buscar por Nome </h2>    
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
            <th> Conhecimentos Complementares: </th>
            <th> Experiências Profissionais: </th>
          </tr>
        </thead>  
        <?php
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
            <td> <?php echo $dados ["cnc"] ?> </td>
            <td> <?php echo $dados ["expe"] ?> </td>
            <td> <a href="http://localhost/my_curriculo/action/gerar_pdf_cadastro.php?id_pessoa=<?php echo $dados ["id_pessoa"]; ?>" name="btn-visualizar" class="btn btn-info"> Visualizar </a> </td>
          </tr>
        </tbody>
<?php    
            }
          endwhile;
        endif; 
?>                     
    
    </table>
    
    
<?php require_once "../includes/footer.php"; ?>   