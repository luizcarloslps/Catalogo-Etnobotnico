

  <!-- Botão para cadastrar uma nova planta -->
  <button type="button" class="btn btn-success " style="height:40px" data-toggle="modal" data-target="#myModal">
    Nova Planta
  </button>
  <br><br>
<div >
  <h3>Lista de plantas cadastradas</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Imagem</th> 
        <th class="text-center">Nome vulgar</th>
        <th class="text-center">Nome Botânico</th>
        <th class="text-center">Nome da categoria</th>
        <th class="text-center">Local de Coleta</th>
        <th class="text-center">Parte Usada</th>
        <th class="text-center">Indicação terapeutica</th>
        <th class="text-center" colspan="2">Ação</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from product, category WHERE product.category_id=category.category_id";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["product_image"]?>'></td>
      <td><?=$row["product_name"]?></td>
      <td><?=$row["product_name_bot"]?></td> 
      <td><?=$row["category_name"]?></td> 
      <td><?=$row["loc_collect"]?></td> 
      <td><?=$row["parte"]?></td> 
      <td><button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['product_id'];?>">Visualizar</button></td>           
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['product_id']?>')">Editar</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['product_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cadastro de nova planta</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" id="p_name" placeholder="Nome Vulgar" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="p_name_vulgar" placeholder="Nome Botânico" required>
            </div>
            <div class="form-group">
                   <div class="form-group">
                <select class="form-control" id="p_part" >
                <option disabled selected>Parte utilizada:</option>
                <?php
                  $sql="SELECT * from part";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['part_id']."'>".$row['part_name'] ."</option>";
                    }
                  }
                ?>
              </select>

            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="p_local" placeholder="Local de coleta" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="p_entrevs" placeholder="Nome do entrevistado" required>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="p_idade" placeholder="Idade do entrevistado" required>
            </div>
            <div class="form-group">
              <textarea type="text" class="form-control" rows="3" id="p_desc" placeholder="Indicação terapeutica" required></textarea>
            </div>
            <div class="form-group">
              <select class="form-control" id="category" >
                <option disabled selected>Selecionar categoria</option>
                <?php

                  $sql="SELECT * from category";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['category_id']."'>".$row['category_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
              <div>
            <label for="file">Escolha uma imagem:</label>
            <input type="file" id="file" value="">
         </div>


            </div><br><br><br>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="upload">Cadastrar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>

</div>        <!-- Consulta para trazer somente a indicação terapeutica -->
              <?php $result_desc = "SELECT * FROM product"; $resultado_desc = mysqli_query($conn, $result_desc);?>
							<?php while($rows_desc = $resultado_desc-> fetch_assoc()){ ?>
								<!-- Inicio Modal Visualizar Indicaão -->
								<div class="modal fade" id="myModal<?php echo $rows_desc['product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_desc['product_name']; ?></h4>
											</div>
											<div class="modal-body">
												<h5><?php echo "Indicação terapeutica de: "; ?><?$rows_desc['product_name']; ?></h5>
												<p><?php echo $rows_desc['product_desc']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
							<?php } ?>
						