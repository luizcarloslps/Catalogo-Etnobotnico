<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $part = $_POST['part'];
       
         $insert = mysqli_query($conn,"INSERT INTO part
         (part_name)   VALUES ('$part')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?part=error");
         }
         else
         {
             echo "Salvo com sucesso.";
             header("Location: ../index.php?part=success");
         }
     
    }
        
?>