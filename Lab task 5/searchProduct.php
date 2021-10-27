<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>

	<fieldset>
		<legend><b>SEARCH</b></legend><br>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <input type="text" name="name" value="<?php if (!empty($_POST['name'])) {echo $_POST['name'];} ?>" required/>
      <input type="submit" name="search" value="Search By Name"/>
    </form><br>
<?php require_once 'controller/search.php'; ?>
	</fieldset>

</body>
</html>