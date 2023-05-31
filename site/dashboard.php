<?php include('config/db.php');
include('header.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Consulta de usuários cadastrados</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="/scripts/snippet-javascript-console.min.js?v=1"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Catálogo Etnobotânico</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/PI2/index.php">Portal</a>
                </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="site/index.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Painel
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">                           
                        <div class="menu-item dropdown-item" data-open="#listausuarios">Lista de Usuários</div>
                        <div class="menu-item dropdown-item" data-open="#buscausuarios">Busca de Usuários</div>
                        <div class="menu-item dropdown-item" data-open="#catalogo">Catálogo</div>
                        </div>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/PI2/site/buscas_clientes.php">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/PI2/site/signup.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-danger btn-block" href="logout.php">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 25rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Bem Vindo!  </h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['nome']; ?></h6>
                    <p class="card-text">Perfil de usuário: <?php echo $_SESSION['tipo']; ?></p>
                    <p class="card-text">Endereço de email: <?php echo $_SESSION['email']; ?></p>
                    <p class="card-text">Sua idade: <?php echo $_SESSION['idade']; ?></p>
                </div>
            </div>
        </div>


    </div>

<div id="master">
  <div class="seccao" id="todos">
    TODOS OS JOGOS APARECEM AQUI
  </div>
  <div class="seccao" id="listausuarios" >
    <?php
    include('listar_clientes.php');
    ?>
  </div>
  <div class="seccao" id="buscausuarios">
  <?php
    include('busca_clientes.php');
    ?>
  </div>
  <div class="seccao" id="proximos">
    TODOS OS JOGOS PROXIMOS APARECEM AQUI
  </div>
</div>
    <script type="text/javascript">
        $('.seccao:gt(0)').hide(); // para começar vamos esconder todas as seccoes excepto a primeira 
$('.menu-item').on('click', function() { // quando clicamos num item do menu
  $('.seccao').hide(); // escondemos todas
  var seccao = $(this).data('open'); // aqui vamos obter o id da seccao a aparecer ex: '#todos'
  $(seccao).show(); // e finalmente mostramos a seccao que tem o mesmo id do atributo data-open do item em que clicamos
});
    </script>


<?php include('footer.php');?>