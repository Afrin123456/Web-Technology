<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once '../model/model.php';
$tableName = 'product';
//echo $_GET['id'];
if (deleteProduct($tableName, $_GET['id'])) {
    	$msg ='<p>Product Deleted Successfully.<br>';
  	header('Location: ../displayProduct.php?msg='.$msg.'');
}
else{
	echo '<p>Product is Not Deleted!!</p>';
}
 ?>
<?php }
else{
	echo "You are not allowed to enter here";
} ?>