<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM part where part_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Deletado com sucesso";
    }
    else{
        echo"Não é possivel deletar";
    }
    
?>