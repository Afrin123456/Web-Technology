<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
</head>
<body>

	<table border="1">

		<thead>
			<tr>
			<th>Name</th>
			<th>Profit</th>
			<th colspan="2"></th>
		</tr>
		</thead>

		<tbody>
			<?php foreach ($allSearchedProducts as $i => $product): ?>
			<?php if($product['display']=='Yes'){ ?>
			<tr>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a></td>
				<td><a href="deleteProduct.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		<?php endforeach; ?>
		</tbody>

	</table>

</body>
</html>