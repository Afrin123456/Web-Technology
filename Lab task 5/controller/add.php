<?php 
require_once ('../model/model.php');

$tableName = 'product';

if(isset($_POST['submit'])) {
	$data['Name'] = $_POST['name'];
	$data['BuyingPrice'] = $_POST['bprice'];
	$data['SellingPrice'] = $_POST['sprice'];
	if(empty($_POST['display'])){
		$data['display'] = "No";
	}
	else{
		$data['display'] = $_POST['display'];
	}

  if (addProduct($tableName, $data)) {

  	$msg ='<p>Product Added Successflly.</p><br>';
  	header('Location: ../displayProduct.php?msg='.$msg.'');

  }
} 
else {
	echo "You are not allowed to enter here";
}

?>