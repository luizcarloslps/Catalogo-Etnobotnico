<?php
   session_start();
   include_once "./config/dbconnect.php";
   /* print_r($_SESSION); */
?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #f1f1f1;">
    <a class="navbar-brand ml-5" href="./index.php">
    <h6>Bem vindo(a) <?php echo ($_SESSION['nome']); ?></h6><hr>
    <h6 style="margin-top:10px;">Você está no painel administrativo do Catálogo Etnobotânico</h6>
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    <div class="user-cart">  
              
    <div class="container text-center">
        <?php
        if(isset($_SESSION['id']) and (isset($_SESSION['nome']))){
            echo "<a class='btn btn-outline-danger 'fa fa-sign-out mr-5' href='sair.php' style='text-decoration:none;' role='button' >Logout</a>";
            echo "<button type='button' class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#cadUsuarioModal' > Novo Usuário </button>";
        }else{
            echo "<div id='dados-usuario'>";
            echo "<button type='button' class='btn btn-outline-primary m-3' data-bs-toggle='modal' data-bs-target='#loginModal'>Acessar</button>";

            echo "</div>";
        }

        ?>
    <div class="modal fade" id="cadUsuarioModal" tabindex="-1" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadUsuarioModalLabel">Cadastrar novo usuário</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="cad-usuario-form">
                        <div class="mb-3">
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome completo">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="tipo" >
                                <option disabled selected>Selecionar tipo de usuário...</option>
                                <option value="1">Administrador</option>
                                <option value="2">Aluno</option>
                              </select>
                        </div>  
                            <div class="form-group">
                              <input type="text" class="form-control" id="sala" required placeholder="Sala: (Ex.: 4EF1 -> 4º Ano Fundamental 1)">
                            </div>
                        <div class="mb-3">
                            <input type="text" name="idade" class="form-control" id="idade" placeholder="Digite sua idade">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Digite o seu e-mail">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Digite um nome de usuário">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="senha" class="form-control" id="senha" autocomplete="on" placeholder="Digite a senha">
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-success bt-sm" id="cad-usuario-btn" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    </div>  
</nav>
