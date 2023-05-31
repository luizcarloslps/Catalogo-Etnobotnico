<?php
    include_once "../config/dbconnect.php";
	$product_desc = "SELECT * FROM product";
	$resultado_cursos = mysqli_query($conn, $product_desc);

    while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>

		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h3>Detalhes de: <?php echo $rows_cursos['product_name']; ?></h3>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nome do Curso</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td><?php echo $rows_cursos['product_id']; ?></td>
									<td><?php echo $rows_cursos['product_desc']; ?></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_cursos['product_id']; ?>">Visualizar</button>
										<button type="button" class="btn btn-xs btn-warning">Editar</button>
										<button type="button" class="btn btn-xs btn-danger">Apagar</button>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $rows_cursos['product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_cursos['product_name']; ?></h4>
											</div>
											<div class="modal-body">
												<p><?php echo $rows_cursos['product_id']; ?></p>
												<p><?php echo $rows_cursos['product_name']; ?></p>
												<p><?php echo $rows_cursos['product_desc']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>