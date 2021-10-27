<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/display.php';
$tableName = 'product';
$product = fetchProduct($tableName, $_GET['id']);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE PRODUCT</title>

	<style>
	fieldset{
		width:50%;
	}
	
	</style>
</head>
<body>

<fieldset>
	<legend><b>DELETE PRODUCT</b></legend><br>
	<form action="controller/delete.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
	Name: <?php echo $product['Name']; ?> <br> <br>
	Buying Price: <?php echo $product['BuyingPrice']; ?> <br> <br>
	Selling Price: <?php echo $product['SellingPrice']; ?> <br> <br>
	Displayable: <?php echo $product['display']; ?><hr>
	<input type="submit" name="submit" value="Delete">
</form>
</fieldset>


</body>
</html>
<?php }
else{
	echo "Error accessing the page.";
} ?>