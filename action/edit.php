<?php require_once "../includes/header.php"; 
 require_once "../crud/conexao.php"; 

        if (isset($_GET['id_pessoa'])):
                    
            $id_pessoa = mysqli_escape_string($connect, $_GET['id_pessoa']);
                        
            $sql = "SELECT * FROM pessoa WHERE (id_pessoa = '$id_pessoa')"; 
            $resultado = mysqli_query( $connect, $sql);
            $dados = mysqli_fetch_assoc($resultado);
        endif;

?>

        <h2>Editar Cadastro</h2>
        <form action="../crud/update.php" method="POST">
        <input type="hidden" name="id_pessoa" value="<?php echo $dados ["id_pessoa"]; ?>">
            <fieldset>
                <Legend><strong> Dados Pessoais: </strong></Legend> <p> </p>

                <label> Nome Completo: </label>                 
                <input type="text" name="nome" placeholder="Informe seu Nome Completo:" id="nome" value="<?php echo $dados ["nome"]; ?>">   <br>

                <label> Celular: </label> 
                <input type="tel" name="tel" placeholder="Informe seu Celular:"  id="tel" onkeypress="$(this).mask('(00) 0000-00009')" value="<?php echo $dados ["tel"]; ?>">   <br>
                
                <label> email: </label>    
                <input type="email" name="email" placeholder="Informe seu Email:" id="email" value="<?php echo $dados ["email"]; ?>">   <br>
             
                <label> Nascionalidade: </label> 
                <input type="text" name="nasc" placeholder="Informe Nascionalidade:" id="nasc" value="<?php echo $dados ["nasc"]; ?>">   <br>
               
                <label> Estado Civil: </label> 
                <input type="text" name="ec" placeholder="Informe Estado Civil:" id="ec" value="<?php echo $dados ["ec"]; ?>">   <br>
               
                <label for="age"> Idade: </label> 
                <input type="number" name="age" min="1" max="99" placeholder="Idade:" id="age" value="<?php echo $dados ["age"]; ?>">   <br>
               
                <label> Area: </label> 
                <select name="area" id="area" value="<?php echo $dados ["area"]; ?>">>
                    <option value="Administra????o, neg??cios e servi??os">Administra????o, neg??cios e servi??os</option>
                    <option value="Artes e Design">Artes e Design</option>
                    <option value="Ci??ncias Biol??gicas e da Terra">Ci??ncias Biol??gicas e da Terra</option>
                    <option value="Ci??ncias Exatas e Tecnologia">Ci??ncias Exatas e Tecnologia</option>
                    <option value="Ci??ncias Sociais e Humanas">Ci??ncias Sociais e Humanas</option>
                    <option value="Comunica????o e Informa????o">Comunica????o e Informa????o</option>
                    <option value="Engenharia e Produ????o">Engenharia e Produ????o</option>
                    <option value="Sa??de e Bem-Estar">Sa??de e Bem-Estar</option>
                    <option value="Outras">Outras</option>
                </select>  <br>
          
                <label> Cidade: </label> 
                <input type="text" name="andress" placeholder="Informe sua Cidade:" id="andress" value="<?php echo $dados ["andress"]; ?>">   <br>
                
            </fieldset>
            <fieldset>
                <Legend><strong> Dados Profissionais: </strong></Legend> <p> </p>
                <label> Forma????o: </label>
                <textarea type="text" name="formacao" placeholder="FORMA????O: " id="formacao" required class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"> <?php echo $dados ["formacao"]; ?> </textarea> <br>
                
                <label> Conhecimentos Complementares: </label> 
                <textarea type="text" name="cnc" placeholder="CONHECIMENTOS COMPLEMENTARES: " id="cnc" required class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"> <?php echo $dados ["cnc"]; ?> </textarea> <br>
               
                <label> Experi??ncias Profissionais: </label> 
                <textarea type="text" name="expe" placeholder="EXPERI??NCIAS PROFISSIONAIS: " id="expe" required class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"> <?php echo $dados ["expe"]; ?> </textarea> <br>
              
                <label> Objetivo: </label> 
                <textarea type="text" name="obj" placeholder="OBJETIVO: " id="obj" required class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"> <?php echo $dados ["obj"]; ?> </textarea> <br>
            </fieldset> 

            
            <button type="submit" class="btn btn-info" name="btn-editar">Atualizar</button>
        </form>


<?php require_once "../includes/footer.php"; ?>        
