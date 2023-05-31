    <?php include_once "../config/dbconnect.php"; ?>
    <?php include_once "./register.php"; ?>
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Cadastro de Usuários</h3>

                    <?php echo $success_msg; ?>
                    <?php echo $email_exist; ?>

                    <?php echo $email_verify_err; ?>
                    <?php echo $email_verify_success; ?>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" />

                        <?php echo $NameEmptyErr; ?>
                        <?php echo $_NameErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Sala</label>
                        <input type="text" class="form-control" name="sala" id="sala" />

                        <?php echo $_RoomErr; ?>
                        <?php echo $RoomEmptyErr; ?>
                    </div>

                    <div class="form-group">
                        <label>Idade</label>
                        <input type="number" class="form-control" name="idade" id="idade" />

                        <?php echo $_AgeErr; ?>
                        <?php echo $AgeEmptyErr; ?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" />

                        <?php echo $_EmailErr; ?>
                        <?php echo $EmailEmptyErr; ?>
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" />

                        <?php echo $_UserErr; ?>
                        <?php echo $UserEmptyErr; ?>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" />

                        <?php echo $_passwordErr; ?>
                        <?php echo $passwordEmptyErr; ?>
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Sign up
                    </button>
                </form>
            </div>
        </div>
    </div>