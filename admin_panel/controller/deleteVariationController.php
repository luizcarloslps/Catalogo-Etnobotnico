<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM product_part_variation where variation_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Deletado com sucesso";
    }
    else{
        echo"Não é possível deletar";
    }
    
?>