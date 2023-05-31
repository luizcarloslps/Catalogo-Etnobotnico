<div class="container p-5">

<h4>Editar Usuário</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from usuarios Where id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $pID=$row1["id"];
?>
<form id="update-Items" onsubmit="updateCustomer()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="id" value="<?=$row1['id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="nome" class="form-control" id="nome" value="<?=$row1['nome']?>">
    </div>
    <div class="form-group">
    <label>Tipo:</label>
              <select id="tipo" >
                <option disabled selected>Selecionar...</option>
                <option value="1">Administrador</option>
                <option value="2">Aluno</option>
              </select>
    <div class="form-group">
      <label for="desc">Sala: (Ex.: 4EF1 "QUARTO ANO FUNDAMENTAL UM")</label>
      <input type="text" class="form-control" id="sala" value="<?=$row1['sala']?>">
    </div>  
    <div class="form-group">
      <label for="idade">Idade:</label>
      <input type="idade" class="form-control" id="idade" value="<?=$row1['idade']?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="<?=$row1['email']?>">
    </div>
    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" />
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Atualizar</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>