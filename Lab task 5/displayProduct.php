<?php  
require_once 'controller/display.php';
$tableName = 'product';
$products = fetchAllProducts($tableName);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DISPLAY PRODUCT</title>

	<style>

    fieldset{
		width:40%; 
			}
		table{
			border:2px solid;
			margin:3px;
			padding:5px;

	</style>
</head>
<body>
<?php
if(!empty($_GET['msg']))

echo $_GET['msg'];


?>

	<fieldset>
		<legend><b>DISPLAY</b></legend><br>
		
		<table border>

		<thead>
			<tr>
			<th>Name</th>
			<th>Profit</th>
			<th colspan="2"></th>
		</tr>
		</thead>

		<tbody>
			<?php foreach ($products as $i => $product): ?>
			<?php if($product['display']=='Yes'){ ?>
			<tr>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a></td>
				<td><a href="deleteProduct.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php } 
		?>
		<?php endforeach; ?>
		</tbody>

	</table>

	</fieldset>

</body>
</html>