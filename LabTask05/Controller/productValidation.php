<?php
require_once '../productModel.php';

if(isset($_POST['saveProduct'])){
	$data['name'] = $_POST['name'];
	$data['sprice'] = $_POST['sprice'];
	$data['bprice'] = $_POST['bprice'];
	
	if(isset($_POST['display']))
	{
		$data['d'] = $_POST['display'];
	}
	else{
		$data['d'] = "No";
	}

	if(addProduct($data))
	{
		echo "Product successfully saved!";
	}
}
else{
	echo "Please try again!";
}
?>