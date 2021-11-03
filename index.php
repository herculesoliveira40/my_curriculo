<?php require_once "./includes/header.php"; ?>

<?php require_once "./crud/conexao.php"; ?>
<link rel="stylesheet" href="./css/bootstrap-4.1.3/css/bootstrap.min.css">
<script src="./js/jquery-3.6.0.min.js"></script>      
<script src="./css/bootstrap-4.1.3/js/bootstrap.min.js"></script>

  <div class="row">
    <div class="col-8" style="margin-top: 2%;">
    <table border="5" class=" table-hover">
          <thead> 
            <tr>
              <th> ID:  </th>
              <th> Nome:  </th> 
              <th> Celular: </th>
              <!-- <th> email: </th> -->
              <th> Idade: </th>
              <th> Area: </th>
              <th> Formação: </th>
              <th> Conhecimentos Complementares: </th>
              <th> Experiências Profissionais: </th>
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
            <td> - </td>
        </tr>
<?php
        endif;
?>
          
      </table>


      <a class="btn  btn-success" href="http://localhost/my_curriculo/action/cadastrar.php">Adicionar Cadastro</a> 
    </div>

    <div class="col-4" style="background-color: #0d62b3cc;" >
      
    <h1>Login</h1>

        <div class="container">
          <form class="">
            <div class="form-group">
              <label for="exampleDropdownFormEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword1">Password</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="dropdownCheck">
              <label class="form-check-label" for="dropdownCheck">
                Remember me
              </label>
            </div>
            <a class="btn btn-success" href="http://localhost/my_curriculo/action/arearestrita.php">Sign in</a>
          </form>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/my_curriculo/action/cadastrar.php">New around here? Sign up</a>
          <a class="dropdown-item" href="#">Forgot password?</a>
        </div>     
    </div>
  </div>
  </div>
<?php require_once "./includes/footer.php"; ?>
