<!DOCTYPE html>
    <html lang="pt">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> My Curriculo </title>
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1939/1939574.png" sizes="32x32" type="image/png">

        <!-- <link rel="stylesheet" href="../css/estilo.css"> -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->

        <link rel="stylesheet" href="../css/bootstrap-4.1.3/css/bootstrap.min.css">
       
        <script src="../js/jquery-3.6.0.min.js"></script>      
        <script src="../js/jquery.mask.js"></script>
        <script src="../css/bootstrap-4.1.3/js/bootstrap.min.js"></script>
    

              <!-- kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk  fixed-top -->

            <nav class="navbar navbar-light bg-dark justify-content-between">
              
               <a class="navbar-link" href="http://localhost/my_curriculo/">
                  <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="https://cdn-icons-png.flaticon.com/512/236/236830.png" width="30" height="24" class="d-inline-block align-text-top">
                  Home
               </a>
    
               <a class="nav-link " aria-current="page" href="http://localhost/my_curriculo/includes/sobre.php">Sobre</a>
              
                
                  <a class="nav-link" href="http://localhost/my_curriculo/crud/read2.php">Buscar por Area</a>
                     
               <form class="form-inline" action="./crud/read.php" method="post">
                  <input class="form-control me-2" type="search" placeholder="Buscar por Nome" aria-label="Search"  name="nome">
                  <button class="btn btn-outline-success" name ="btn-search" type="submit">Buscar</button>
               </form>
              
               <div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                  Começar
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Fazer Curriculo: </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        Escolha a opção desejada:
                        </div>
                        <div class="modal-footer">
                        <a  class="nav-link btn-info" href="http://localhost/my_curriculo/action/sem_cadastro.php">Sem Cadastro</a>
                        <a class="nav-link btn-success" aria-current="page" href="http://localhost/my_curriculo/action/cadastrar.php">Cadastrar</a>
                        </div>
                     </div>
                  </div>
                  </div>  
               </div>      
            </nav>


         <script>



         </script>   

    </head> 
    <body>  
         <div class="container-fluid">
