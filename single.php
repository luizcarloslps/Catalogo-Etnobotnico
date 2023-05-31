<?php 
    include_once "header.php";
	include_once "./admin_panel/config/dboffsession.php";
	$id = $_GET['id'];
	$result = "SELECT * FROM product WHERE product_id='$id'";
	$resultado = mysqli_query($conn, $result);
	$row = mysqli_fetch_assoc($resultado);
?>
        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i> Página da planta: <?php echo $row['product_name']?></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $row['product_name']?></li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <span class="color-green"><a href="category.html" title="">Parte usada: <?php echo $row['parte']?></a></span>
                                <h3></h3>
                                <section class="section wb">
                            <div>
                            <img width="534" height="468" src='admin_panel<?=$row["product_image"]?>' alt="" class="img-fluid"><img>
                            </div><!-- end media -->
                            <div class="blog-content">
                                <?php
                            echo "<h6> Nome da Planta:</h6> <span>".$row['product_name']."</span>";
	                        echo "<h6> Nome botânico:</h6> <span>".$row['product_name_bot']."</span><br>";
	                        echo "<h6> Local coletado::</h6> <span>".$row['loc_collect']."</span><br>";
	                        echo "<h6> Cidadão Colaborador:</h6> <span>".$row['nome_collab'].", ".$row['idade_collab']." Anos.</span><br>";
	                        echo "<h6> Indicação Terapeutica:</h6> <span>".$row['product_desc']."</span><br>";
                            echo "<h6> Parte utilizada:</h6> <span>".$row['parte']."</span><br>";
                            $data = $row['uploaded_date'];
                            $date = new DateTime($data);
                            echo "<h6> Data das informações:</h6><span>".$date->format('Y-m-d')."</span><br>";?>
                                </div><!-- end pp -->
                            </div><!-- end content -->
                        </div><!-- end link-widget -->
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>


<?php include('footer.php');?>