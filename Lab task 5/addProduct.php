<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
	<style>
	fieldset{
		width:50%;
	}
	
	</style>
</head>
<body>
	<form action="controller/add.php" method="post" enctype="multipart/form-data">
<fieldset>
	<legend><b>ADD PRODUCT</b></legend>
	Name:<br>
	<input type="text" name="name"> <br>
	Buying Price:<br>
	<input type="text" name="bprice"> <br>
	Selling Price:<br>
	<input type="text" name="sprice"> <br>
	<hr>
	<input type="checkbox" name="display" value="Yes">
	<label for="display">Display</label><hr>
	<input type="submit" name="submit" value="Save">
</form>
</fieldset>
</body>
</html>