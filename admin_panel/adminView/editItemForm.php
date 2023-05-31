
<div class="container p-5">

<h4>Editar detalhes da planta</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM product WHERE product_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["category_id"];
?>

<form id="update-Items" onsubmit="updateItems()" enctype='application/x-www-form-urlencoded'>
	<div class="form-group">
      <input type="text" class="form-control" id="product_id" value="<?=$row1['product_id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Nome da planta:</label>
      <input type="text" class="form-control" id="p_name" value="<?=$row1['product_name']?>">
    </div>
    <div class="form-group">
      <label for="name">Nome botânico:</label>
      <input type="text" class="form-control" id="p_name_vulgar" value="<?=$row1['product_name_bot']?>">
    </div>
    <div class="form-group">
      <label for="price">Parte</label>
      <input type="text" class="form-control" id="p_part" value="<?=$row1['parte']?>">
    </div>
    <div class="form-group">
      <label for="name">Local da coleta:</label>
      <input type="text" class="form-control" id="p_local" value="<?=$row1['loc_collect']?>">
    </div>

    <div class="form-group">
      <label for="name">Nome do entrevistado:</label>
      <input type="text" class="form-control" id="p_entrevs" value="<?=$row1['nome_collab']?>">
    </div>
    <div class="form-group">
      <label for="name">Idade:</label>
      <input type="text" class="form-control" id="p_idade" value="<?=$row1['idade_collab']?>">
    </div>
    <div class="form-group">
      <label for="desc">Descrição da planta:</label>
      <input type="text" class="form-control" id="p_desc" value="<?=$row1['product_desc']?>">
    </div>
    <div class="form-group">
      <label>Categoria da planta:</label>
      <select id="category">
        <?php
          $sql="SELECT * from category WHERE category_id='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['category_id'] ."'>" .$row['category_name'] ."</option>";
            }
          }
        ?>
      </select>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["product_image"]?>'>
         <div>
            <label for="file">Escolha uma imagem:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['product_image']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
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