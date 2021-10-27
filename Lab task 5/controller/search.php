<?php

require_once 'model/model.php';

if (isset($_POST['search'])) {
	
    try {
    	
    	$allSearchedProducts = searchProduct($_POST['name']);
    	require_once 'searchedResult.php';

    } catch (Exception $e) {
    	echo $e->getMessage();
    }
}