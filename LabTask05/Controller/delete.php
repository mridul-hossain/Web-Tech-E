<?php

require_once '../productModel.php';


if(isset($_POST['deleteProduct']))
{
	deleteProduct($_POST['name']);
	header('Location: ../display.php');
}

?>