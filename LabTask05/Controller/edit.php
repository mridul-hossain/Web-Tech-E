<?php
require_once '../productModel.php';

if(isset($_POST['editProduct'])){
	$data['Name'] = $_POST['name'];
	$data['Selling_Price'] = $_POST['sprice'];
	$data['Buying_Price'] = $_POST['bprice'];
	
	if(isset($_POST['display']))
	{
		$data['Displayable'] = $_POST['display'];
	}
	else{
		$data['Displayable'] = "No";
	}

	if(editProduct($data))
	{
		header('Location: ../display.php');
	}
}
else{
	echo "Please try again!";
}
?>