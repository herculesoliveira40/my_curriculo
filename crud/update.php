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

      
      if (isset($_POST['btn-editar'])):
                
                 $id_pessoa = mysqli_escape_string($connect, $_POST['id_pessoa']);
                 $nome = clear($_POST['nome']);
                 $tel = clear($_POST['tel']);
                 $email = clear($_POST['email']);
                 $nasc = clear($_POST['nasc']);
				 $ec = clear($_POST['ec']);
				 $age = clear($_POST['age']);
                 $area = clear($_POST['area']);
				 $andress = clear($_POST['andress']);
				 $formacao = clear($_POST['formacao']);
				 $cnc = clear($_POST['cnc']);
				 $expe = clear($_POST['expe']);
				 $obj = clear($_POST['obj']);

                 $sql = "UPDATE pessoa SET nome = '$nome', tel = '$tel', email = '$email', nasc = '$nasc', ec = '$ec', age = '$age', area = '$area', andress = '$andress', formacao = '$formacao', cnc = '$cnc', expe = '$expe', obj = '$obj' WHERE (id_pessoa = '$id_pessoa') " ;       

                 

                if(mysqli_query($connect, $sql)):
                    {     
                        header("Location: ../index.php?sucesso");
                        echo "<br>  sucesso";
                    }
                
                 else: 
                    header("Location: ../index.php?falha");
                     echo "erro ao cadastrar";

                 endif;  
            endif;                   
  
?>               

<?php require_once("../includes/footer.php"); ?>