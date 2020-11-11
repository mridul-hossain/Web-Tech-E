<?php 

require_once 'productModel.php';

function fetchAllProducts(){
	return showAllProducts();

}

function fetchProduct($data){
	return showProduct($data);

}

function fetchSearchedProduct($data){
	return searchProduct($data);

}

?>