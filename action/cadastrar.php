<?php require_once "../includes/header.php"; ?>

<?php require_once "../crud/conexao.php"; ?>
        <h2>Criar Cadastro</h2>
        <form action="../crud/create.php" method="POST"> 
            <fieldset>
                <Legend><strong> Dados Pessoais: </strong></Legend> <p> </p>

                <label> Nome Completo: </label>                 
                <input type="text" name="nome" placeholder="Informe seu Nome Completo:" id="nome" required>   <br>

                <label> Celular: </label> 
                <input type="tel" name="tel" placeholder="Informe seu Celular:"  id="tel" onkeypress="$(this).mask('(00) 0000-00009')" >   <br>
                
                <label> email: </label>    
                <input type="email" name="email" placeholder="Informe seu Email:" id="email" >   <br>
                
                <label> Nascionalidade: </label> 
                <input type="text" name="nasc" placeholder="Informe Nascionalidade:" >   <br>
               
                <label> Estado Civil: </label> 
                <input type="text" name="ec" placeholder="Informe Estado Civil:" >   <br>
               
                <label for="age"> Idade: </label> 
                <input type="number" name="age" min="1" max="99" placeholder="Idade:" >   <br>
             
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
                </select> <br>
              
                <label> Cidade: </label> 
                <input type="text" name="andress" placeholder="Informe sua Cidade:" >  <br>

            </fieldset>   

            <fieldset>
                <Legend><strong> Dados Profissionais: </strong></Legend> <p> </p>
                <label> Formação: </label>
                <textarea type="text" name="formacao" placeholder="FORMAÇÃO: " class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"></textarea>   <br>
                <label> Conhecimentos Complementares: </label> 
                <textarea type="text" name="cnc" placeholder="CONHECIMENTOS COMPLEMENTARES: " class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"></textarea>   <br>
                <label> Experiências Profissionais: </label> 
                <textarea type="text" name="expe" placeholder="EXPERIÊNCIAS PROFISISONAIS: " class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"></textarea>   <br>
                <label> Objetivo: </label> 
                <textarea type="text" name="obj" placeholder="OBJETIVO: " class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"></textarea>     <br>
            </fieldset> 

            <button type="submit" name="btn-cadastrar" class="btn btn-info" >Cadastrar</button>

        </form>


<?php require_once "../includes/footer.php"; ?>        