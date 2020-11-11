<?php

require_once '../productModel.php';

if(isset($_POST['submit'])){
	$data = $_POST['search'];
	searchProduct($data);
}

?>