<div class="container p-5">

<h4>Edit Variation Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from part Where part_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $sID=$row1["part_id"]
?>
<form id="update-Items" onsubmit="updateVariations()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="v_id" value="<?=$row1['part_id']?>" hidden>
    </div>
    <div class="form-group">
        <label>Editar Parte da planta</label>
        <select id="part" >
        <?php

        $sql="SELECT * from part where part_id=$pID";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo"<option selected value='".$row['part_id']."'>".$row['part_name'] ."</option>";
        }
        }
        ?>
        <?php

            $sql="SELECT * from part where part_id!=$pID";
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
        <label>Parte</label>
        <select id="part" >
        <?php

            $sql="SELECT * from part where part_id=$sID";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo"<option selected value='".$row['part_id']."'>".$row['part_name'] ."</option>";
            }
            }
        ?>
        <?php

            $sql="SELECT * from part where part_id!=$sID";
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
      <button type="submit" style="height:40px" class="btn btn-primary">Atualizar</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>