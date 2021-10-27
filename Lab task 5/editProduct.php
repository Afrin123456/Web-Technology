<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once 'controller/display.php';
$tableName = 'product';
$product = fetchProduct($tableName, $_GET['id']);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT PRODUCT</title>

	<style>
	fieldset{
		width:50%;
	}
	
	</style>
</head>
<body>

	
	<fieldset>
		<legend><b>EDIT PRODUCT</b></legend>
		<form action="controller/edit.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
	Name:<br>
	<input type="text" name="name" value="<?php echo $product['Name']; ?>"><br> <br>
	Buying Price:<br>
	<input type="text" name="bprice" value="<?php echo $product['BuyingPrice']; ?>"><br> <br>
	Selling Price:<br>
	<input type="text" name="sprice" value="<?php echo $product['SellingPrice']; ?>"> <br><br>
	<input type="checkbox" name="display" value="Yes" <?php if($product['display']=='Yes'){echo 'checked';} ?>>
	<label for="display">Display</label><hr>
	<input type="submit" name="submit" value="Save">
    </form>
	</fieldset>

</body>
</html>
<?php }
else{
	echo "You are not allowed to enter here";
} ?>