<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $product = $_POST['product'];
        $part= $_POST['part'];
        $qty = $_POST['qty'];

         $insert = mysqli_query($conn,"INSERT INTO product_part_variation
         (product_id,part_id,quantity_in_stock) VALUES ('$product','$part','$qty')");
 
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