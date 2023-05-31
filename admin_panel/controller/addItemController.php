<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {       
        $ProductName = $_POST['p_name'];
        $ProductNameVulgar= $_POST['p_name_vulgar'];
        $ProductPart= $_POST['p_part'];
        $LocalCollect= $_POST['p_local'];
        $CollabName= $_POST['p_entrevs'];
        $CollabIdade= $_POST['p_idade'];
        $desc= $_POST['p_desc'];
        $category = $_POST['category'];
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
        
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);
        
         $insert = mysqli_query($conn,"INSERT INTO product
         (product_name,product_name_bot,loc_collect,nome_collab,idade_collab,product_desc,product_image,parte,category_id) 
         VALUES ('$ProductName', '$ProductNameVulgar', '$LocalCollect', '$CollabName', '$CollabIdade', '$desc', '$image',, '$ProductPart','$category')");
 
                if(!$insert)
                {
                    echo mysqli_error($conn);
                }
                else
                {
                    echo "Salvo com sucesso.";
                    header("Location: ../index.php?part=success");
                }
     
    }
        
?>