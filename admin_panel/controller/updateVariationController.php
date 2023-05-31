<?php
    include_once "../config/dbconnect.php";

    $v_id=$_POST['v_id'];
    $product= $_POST['product'];
    $part= $_POST['part'];
    $qty= $_POST['qty'];
   
    $updateItem = mysqli_query($conn,"UPDATE product_part_variation SET 
        product_id=$product, 
        part_id=$sipartpartze,
        quantity_in_stock=$qty 
        WHERE variation_id=$v_id");


    if($updateItem)
    {
        echo "Verdadeiro";
    }
?>