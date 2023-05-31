<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['customerDelete'];
    $query="DELETE FROM usuarios where id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Usuário deletado com sucesso";
    }
    else{
        echo"Não é possível deletar o usuário";
    }
    
?>