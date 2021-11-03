<?php include_once "../includes/header.php"; 
 include_once "../crud/conexao.php"; ?>   


<?php      
function clear($input) {
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}
$id_pessoa = clear($_GET['id_pessoa']);

if (!empty($id_pessoa)):
    $sql = "DELETE FROM pessoa WHERE id_pessoa = '$id_pessoa' ";
    if(mysqli_query($connect, $sql)):
        header("Location: ../index.php?sucesso");
    else:
        header("Location: ../index.php?falha");
    endif;
endif;

?>


<?php require_once "../includes/footer.php"; ?>