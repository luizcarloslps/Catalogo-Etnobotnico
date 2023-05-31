<?php
   
    // Database connection
    include_once('config/db.php');

    global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;

    if(isset($_POST['login'])) {
        $email_signin        = $_POST['email_signin'];
        $password_signin     = $_POST['password_signin'];

        // clean data 
        $user_email = filter_var($email_signin, FILTER_SANITIZE_EMAIL);
        $pswd = mysqli_real_escape_string($connection, $password_signin);

        // Query if email exists in db
        $sql = "SELECT * From usuarios WHERE email = '{$email_signin}' ";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);

        // If query fails, show the reason 
        if(!$query){
           die("ERRO DE CONSULTA: " . mysqli_error($connection));
        }

        if(!empty($email_signin) && !empty($password_signin)){
            if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $pswd)) {
                $wrongPwdErr = '<div class="alert alert-danger">
                        Password should be between 6 to 20 charcters long, contains atleast one special chacter, lowercase, uppercase and a digit.
                    </div>';
            }
            // Check if email exist
            if($rowCount <= 0) {
                $accountNotExistErr = '<div class="alert alert-danger">
                        Esse usuário não existe.
                    </div>';
            } else {
                // Fetch user data and store in php session
                while($row = mysqli_fetch_array($query)) {
                    $id         = $row['id'];
                    $nome       = $row['nome'];
                    $tipo       = $row['tipo'];
                    $sala       = $row['sala'];
                    $idade      = $row['idade'];
                    $email      = $row['email'];
                    $usuario    = $row['usuario'];
                    $pass_word  = $row['senha'];
                    $token      = $row['token'];
                    $is_active  = $row['is_active'];

/*                     $id            = $row['id'];
                    $firstname     = $row['firstname'];
                    $lastname      = $row['lastname'];
                    $email         = $row['email'];
                    $mobilenumber   = $row['mobilenumber'];
                    $pass_word     = $row['password'];
                    $token         = $row['token'];
                    $is_active     = $row['is_active']; */
                }

                // Verify password
                $senha = password_verify($password_signin, $pass_word);

                // Allow only verified user
                if($is_active == '1') {
                    if($email_signin == $email && $password_signin == $senha) {
                       header("Location:../admin_panel/index.php");
                       
                        $_SESSION['id'] = $id;
                        $_SESSION['nome'] = $nome;
                        $_SESSION['tipo'] = $tipo;
                        $_SESSION['sala'] = $sala;
                        $_SESSION['idade'] = $idade;
                        $_SESSION['email'] = $email;
                        $_SESSION['usuario'] = $usuario;
                        $_SESSION['senha'] = $senha;
                        $_SESSION['token'] = $token;

                    } else {
                        $emailPwdErr = '<div class="alert alert-danger">
                                Email ou senha incorreto.
                            </div>';
                    }
                } else {
                    $verificationRequiredErr = '<div class="alert alert-danger">
                            Verificação de conta pendente.
                        </div>';
                }

            }

        } else {
            if(empty($email_signin)){
                $email_empty_err = "<div class='alert alert-danger email_alert'>
                            Email não informado
                    </div>";
            }
            
            if(empty($password_signin)){
                $pass_empty_err = "<div class='alert alert-danger email_alert'>
                            Senha não informada
                        </div>";
            }            
        }

    }

?>    