<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Catálogo Etnobotânico</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Header -->
    <?php include('../site/header.php'); ?>
    <!-- Login script -->
    <?php include('./controllers/login.php'); ?>
    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
            <img class="row col-xs-12 col-sm-12 col-md-12 col-lg-12" src="../images/version/garden-logo.png" alt="" width="100" height="100" />
                <br><br>
                <form action="" method="post">
                    <h3>Efetuar Login</h3>
                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email_signin" id="email_signin" />
                    </div>

                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="password_signin" id="password_signin" />
                    </div>
                    <button type="submit" name="login" id="sign_in" class="btn btn-outline-primary btn-lg btn-block">Entrar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>