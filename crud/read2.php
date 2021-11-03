<?php require_once "../includes/header.php"; ?>
<?php require_once("./conexao.php"); ?>

            <?php

             $area = filter_input(INPUT_GET,"area");

             ?>
            <form action="<?php echo $_SERVER['PHP_SELF']?>"> 
            <fieldset>
                <h2> Buscar por Area: </h2> 
                <label> Area: </label> 
                <select name="area" id="area">
                    <option value="Administração, negócios e serviços">Administração, negócios e serviços</option>
                    <option value="Artes e Design">Artes e Design</option>
                    <option value="Ciências Biológicas e da Terra">Ciências Biológicas e da Terra</option>
                    <option value="Ciências Exatas e Tecnologia">Ciências Exatas e Tecnologia</option>
                    <option value="Ciências Sociais e Humanas">Ciências Sociais e Humanas</option>
                    <option value="Comunicação e Informação">Comunicação e Informação</option>
                    <option value="Engenharia e Produção">Engenharia e Produção</option>
                    <option value="Saúde e Bem-Estar">Saúde e Bem-Estar</option>
                    <option value="Outras">Outras</option>
                </select>                <input type="submit" value="Buscar"/>
            </fieldset>  
            </form>

<?php          
             
             $sql = "SELECT * FROM cadastro.pessoa WHERE area LIKE ('%$area%')"; 
                  // // executa a query
              //   $dados = mysqli_query( $conn, $query) or die(mysqli_error());
             $resultado = mysqli_query( $connect, $sql) or die("Informe Somente numeros");
?>

    
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
          
?>                     

    </table>


<?php require_once "../includes/footer.php"; ?>