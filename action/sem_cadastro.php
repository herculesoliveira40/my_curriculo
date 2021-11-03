<?php require_once "../includes/header.php"; ?>


        <form action="gerar_pdf_sem_cadastro.php" method="POST"> 
            <fieldset>
                <Legend><strong> Dados Pessoais: </strong></Legend> <p> </p>
               
                <label> Nome Completo: </label> 
                <input type="text" name="nome" placeholder="Informe seu Nome Completo:" required>   <br>
               
                <label> Celular: </label> 
                <input type="tel" name="tel" placeholder="Informe seu Celular:"  id="tel" onkeypress="$(this).mask('(00) 0000-00009')">   <br>
               
                <label> email: </label> 
                <input type="email" name="email" placeholder="Informe seu Email:" required>   <br>

                <label> Nascionalidade: </label> 
                <input type="text" name="nasc" placeholder="Informe Nascionalidade:" required>   <br>
              
                <label> Estado Civil: </label> 
                <input type="text" name="ec" placeholder="Informe Estado Civil:" required>   <br>
             
                <label for="age"> Idade: </label> 
                <input type="number" name="age" min="1" max="99" placeholder="Idade:" required>   <br>
             
                <label> Cidade: </label> 
                <input type="text" name="andress" placeholder="Informe sua Cidade:" required>  <br>  
            

            </fieldset>
            <fieldset>
                <Legend><strong> Dados Profissionais: </strong></Legend> <p> </p>
            
                <label> Formação: </label> 
                <textarea type="text" name="formacao" placeholder="FORMAÇÃO: " required class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"></textarea>   <br>
             
                <label> Conhecimentos Complementares: </label> 
                <textarea type="text" name="cnc" placeholder="CONHECIMENTOS COMPLEMENTARES: " required class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"></textarea>   <br>
             
                <label> Experiências Profissionais: </label> 
                <textarea type="text" name="expe" placeholder="EXPERIÊNCIAS PROFISSIONAIS: " required class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"></textarea>   <br>
              
                <label> Objetivo: </label> 
                <textarea type="text" name="obj" placeholder="OBJETIVO: " required class="wpcf7-form-control wpcf7-textarea form-control pad form-control-lg"></textarea>    <br> 
            </fieldset>                        



            <button type="submit" class="btn btn-info" name="enviar">Enviar</button>
        </form>




