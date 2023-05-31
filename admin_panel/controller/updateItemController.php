<?php
    include_once "../config/dbconnect.php";

    $product_id=$_POST['product_id'];
    $p_name= $_POST['p_name'];
    $p_vulgar= $_POST['p_name_vulgar'];
    $p_part= $_POST['p_part'];
    $p_collect= $_POST['p_local'];
    $p_collabName= $_POST['p_entrevs'];
    $p_collabIdade= $_POST['p_idade'];
    $p_desc= $_POST['p_desc'];
    $category = $_POST['category'];


    if( isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE product SET 
        product_name='$p_name', 
        product_name_bot='$p_vulgar',
        parte=$p_part,
        loc_collect='$p_collect',
        nome_collab='$p_collabName',
        idade_collab='$p_collabIdade',
        product_desc='$p_desc', 
        category_id=$category,
        product_image='$final_image' 
        WHERE product_id=$product_id");

    if($updateItem)
    {
        echo "Verdadeiro";
    }
     else
     {
         echo mysqli_error($conn);
     }
?>