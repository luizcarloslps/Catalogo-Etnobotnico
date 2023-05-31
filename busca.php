<?php
	//Incluir a conexão com banco de dados
	include_once "./admin_panel/config/dbconnect.php";
	
	//Recuperar o valor da palavra
	$planta = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$planta = "SELECT * FROM product WHERE product_name LIKE '%$planta%'";
	$resultado_planta = mysqli_query($conn, $planta);
	
	if(mysqli_num_rows($resultado_planta) <= 0){
		echo "Desculpe, ainda não temos esta planta cadastrada...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_planta)){
			echo "<li><a href='single.php?id=".$rows['product_id']."'>".$rows['product_name']."</a></li>";
		}
	}
?>