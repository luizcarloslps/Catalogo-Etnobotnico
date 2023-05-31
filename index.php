<?php include_once "header.php"; ?>
        <hr>
        <div class="col-md-12 text-center"><h3>Projeto Catálogo Etnobotânico</h3>O uso de plantas para tratar doenças do corpo é feito desde a antiguidade, um rico conhecimento
que não pode ser perdido. <br>Muito do conhecimento popular sobre tratamentos naturais de saúde
e plantas medicinais se perde devido à falta de registro. <br>No intuito de resgatar tais informações,
a escola Severino Moreira Barbosa, em Cachoeira Paulista (SP), iniciou um projeto de Préiniciação Científica para recolher informações sobre plantas medicinais utilizada por moradores
da zona rural da região. <br>
<hr>
        <div class="col-md-12 text-center"><h4>Confira abaixo as últimas plantas cadastradas:</h4></div>
            <?php
            $hostname = "localhost"; $username = "root"; $password = ""; $dbname = "garden";
            $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Não conectado.")
            ?>
    </div>
        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="left-side">
                        <div class="masonry-box post-media">                                
                            <?php
                            $sql="SELECT * from product, category WHERE product.category_id=category.category_id ORDER BY uploaded_date DESC LIMIT 0,1";
                            $result=$conn-> query($sql);
                            if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                                    $img = $row['product_image'];
                                    $part = $row['parte'];
                                    $plant = $row['product_name'];
                            ?>      
                             <img alt="" class="img-fruid" width="534" height="468" src="admin_panel<?=$img ?>">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><?php echo "<a href='single.php?id=".$row['product_id']."'>"?><?php echo ("Parte utilizada: "); echo ("$part")?></a></span>
                                        <h4><?php echo "<a href='single.php?id=".$row['product_id']."'>".$row['product_name']."</a>"; ?></h4>
                                        <?php }} ?>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->
                    <?php
                    $sql2="SELECT * from product, category WHERE product.category_id=category.category_id ORDER BY uploaded_date DESC LIMIT 1,1";
                    $result2=$conn-> query($sql2);
                    if ($result2-> num_rows > 0){
                        while ($row2=$result2-> fetch_assoc()) {
                            $img2 = $row2['product_image'];
                            $part2 = $row2['parte'];
                            $plant2 = $row2['product_name'];
                    ?> 
                    <div class="center-side">   
                        <div class="masonry-box post-media">
                        <img alt="" class="img-fruid" width="534" height="468" src="admin_panel<?=$img2 ?>">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                <div class="blog-meta">
                                        <span class="bg-aqua"><?php echo "<a href='single.php?id=".$row2['product_id']."'>"?><?php echo ("Parte utilizada: "); echo ("$part")?></a></span>
                                        <h4><?php echo "<a href='single.php?id=".$row2['product_id']."'>".$row2['product_name']."</a>"; ?></h4>
                                        <?php }} ?>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->
                    <?php
                    $sql3="SELECT * from product, category WHERE product.category_id=category.category_id ORDER BY uploaded_date DESC LIMIT 2,2";
                    $result3=$conn-> query($sql3);
                    if ($result3-> num_rows > 0){
                        while ($row3=$result3-> fetch_assoc()) {
                            $img3 = $row3['product_image'];
                            $part3 = $row3['parte'];
                            $plant3 = $row3['product_name'];
                    ?>                  
                    <div class="right-side hidden-md-down">  
                        <div class="masonry-box post-media">
                        <img alt="" class="img-fruid" width="534" height="468"  src="admin_panel<?=$img3 ?>">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                <div class="blog-meta">
                                        <span class="bg-aqua"><?php echo "<a href='single.php?id=".$row3['product_id']."'>"?><?php echo ("Parte utilizada: "); echo ("$part")?></a></span>
                                        <h4><?php echo "<a href='single.php?id=".$row3['product_id']."'>".$row3['product_name']."</a>"; ?></h4>
                                        <?php }} ?>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end right-side -->
                </div><!-- end masonry -->
            </div>
        </section>
                            <br><hr>
        <div class="col-md-12 text-center">O objetivo deste trabalho é criar uma forma de armazenar,
organizar e disponibilizar os dados coletados sobre moradores e plantas medicinais que utilizam. O Grupo de Alunos da UNIVESP do Eixo Computação, polo desta mesma cidade, em aproveitamento da disciplina do Projeto Integrador, desenvolveu este banco de dados, unindo as informações populares com informações científicas. <br>A ideia é que os dados sejam cadastrados
pelos próprios alunos, por meio de um sistema web com controle do usuário. <br>Ao final, esperase que o trabalho possa ser resumido em uma página contendo, por exemplo, imagens das plantas mais utilizadas para fins medicinais na região. <br>Espera-se que este projeto auxilie na
ampla divulgação do trabalho de pesquisa da escola.</div>
                            <hr>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="widget">
                            <div class="footer-text text-center">
                                <hr class="invis">
                                <div class="newsletter-widget text-center">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Insira seu e-mail para receber novidades">
                                        <button type="submit" class="btn btn-primary">Inscreva-se <i class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <br>
                        <div class="copyright">&copy; Eixo tecnologia da Informação - UNIVESP - Polo Cachoeira Paulista <a href="projeto.php"> PROJETO INTEGRADOR 2023.1</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/js/jquery.min.js"></script>
    <script src="src/js/index.js"></script>
 
</body>
</html>