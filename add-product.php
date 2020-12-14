<?php
	session_start();

	if(!in_array($_GET['id'], $_SESSION['cart'])){
		array_push($_SESSION['cart'], $_GET['id']);
		
	}
	else{
		
	}
	header('location: index.php');
?>