<div >
  <h2>Todos os usuários</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nome</th>
        <th class="text-center">Tipo</th>
        <th class="text-center">Sala</th>
        <th class="text-center">Data de cadastro</th>
        <th class="text-center" colspan="2">Ação</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from usuarios";
      $result=$conn-> query($sql);
      $count=1;
            
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["nome"]?>
      <td><?=$row["tipo"]?></td>
      <td><?=$row["sala"]?></td>
      <td><?=$row["date_time"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="customerEditForm('<?=$row['id']?>')">Editar</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="customerDelete('<?=$row['id']?>')">Delete</button></td>
      </tr>
    </tr>
    <?php
            $count=$count+1;
        
        }
    }
    ?>
  </table>
    
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
      Adicionar novo usuário
    </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cadastrar novo usuário</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
 
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
 
        <div class="modal-body">
            <div class="form-group">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="form-group">
              <label>Tipo:</label>
              <select id="tipo" >
                <option disabled selected>Selecionar...</option>
                <option value="1">Administrador</option>
                <option value="2">Aluno</option>
              </select>
            </div>  
            <div class="form-group">
              <label for="name">Sala: (Ex.: 4EF1 "QUARTO ANO FUNDAMENTAL UM")</label>
              <input type="text" class="form-control" id="p_name" required>
            </div>
            <div class="modal-header">

        </div>
        <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Cadastrar</button>
            </div>
    </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>