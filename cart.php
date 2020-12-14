<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="pl">
		<head>
			<meta charset="utf-8">	
			<link href="style.css" rel="stylesheet" type="text/css">
			<!-- BOOTSTRAP -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			<link href="https://fonts.googleapis.com/css?family=Poppins:300&display=swap" rel="stylesheet">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Cart</title>
		</head>

<body>

				<div class="navigation">		
					<div class="logo"><h1>IT Shop</h1></div>
					<div class="menu">
						<table>
						<tr>
							<td><a href="index.php" class="menu-item link">SHOP</a></td>   
							<td><a href="cart.php" class="btn btn-info btn-lg btnCount"><span class="glyphicon glyphicon-shopping-cart">Cart<span class="badge"><?php echo "( ".count($_SESSION['cart'])." )"; ?></span></span></a></td>						
						</tr>  
						</table>
					</div>
				</div>

			<div class="shopping-cart-container">
				<div class="cont">	
					<div class="product-cart-finall">				
						<table class="product-list-table">
						
						<?php

							$sum = 0;
							if(!empty($_SESSION['cart'])){
						
							$conn = new mysqli('localhost', 'root', '', 'device');
					
							$sql = mysqli_query($conn,"SELECT * FROM product WHERE id IN (".implode(',',$_SESSION['cart']).")");												
								while($row = mysqli_fetch_array($sql)){
									?>
									<tr class="product-total-table">																		
										<td><?php echo $row['name']; ?></td>
										<td><b><?php echo $row['price']; ?> $</b></td>																
									</tr>
									
									<?php			

									$item = array(
										'id' => $row['id'],
										'name' => $row['name'],
										'price' => $row['price']
									);	
																						
										 $_SESSION['suma'] = $item;												
										foreach ($_SESSION['suma'] as &$item){
											$sum += $row['price']/3;
										};	

										foreach ($_SESSION['suma'] as &$item){
											$idtest = $row['id'];
										};	
										$_SESSION['productID'] = $idtest;
									
										
								}	
													
							} else	{
								?>							
								<tr>
									<td>Your shopping cart is empty.</td>
								</tr>
								<?php } ?>
						</table>

							<div class="cart-option-btn">
								<a href="clear-cart.php" class="btn btn-light">Clear cart</a>
								<a href="index.php" class="btn btn-primary">Back to shopping</a>								
							</div>
						
							
					</div>

					<div class="product-count">
						<div class="price-total">
						
						<?php  
						
						if(isset($_POST['btn']))
						{
							
							$inputDiscount = array($_POST['discount-value']);
							$discount = 15;
							$tab = array("kod","test1","pray4cos");
								
							$checkTable = in_array($_POST['discount-value'], $tab);

							if ($checkTable == $inputDiscount)
							{
								$wynik = ($sum / 100) * $discount;
								$newPrice = $sum - $wynik;
								$_SESSION['diss'] = $newPrice;
								echo "Total: ".$_SESSION['diss']." $";  
								   
								$_SESSION['finalPrice'] = $newPrice;
								
							} else 
							{
								
							}
		
						}
						else {
							echo "<span>Total: </span><span>". $sum ." $";
							$_SESSION['finalPriceToPay'] = $sum;
							$_SESSION['emptyCartCheck'] = $sum;
							
						}
								
						function emptyCart()
						{
							if($_SESSION['emptyCartCheck'] === 0)
							{
							echo '<br><b>'.'Your shooping cart is empty!</b>';
							} else {
								header("Location:payMethod.php");
							}
						}

						if(isset($_GET['empty']))
						{
							emptyCart();
						}
						?>			 
						 </span><br>
							<a href="cart.php?empty=true" class="btn btn-danger" id="continueStyle">Continue</a>
						
						</div>

						</div>
					</div>
				</div>	
			</div>		

			<footer>

				<div class="xx">

					<div class="footer-block-frs">
					<img src="img/location.png" class="footer-img">
						<h5>San Francisco - Adress - 18 California Steet 1100.</h5>
					</div>

					<div class="footer-block-sec">
						<img src="img/email.png" class="footer-img">
						<h5>hello@mycoolside.com</h5> 
					</div>
					
					<div class="footer-block-thrd">
						<img src="img/calll.png" class="footer-img">
						<h5>+1 (555) 343 12345</h5>
					</div>

					<div class="social-media-icon">

					<img src="img/facebook.png">
					<img src="img/twitter.png">
					<img src="img/instagram.png">
					<img src="img/linkedin.png">
					<img src="img/github.png">

					<h1>Created by Michał Kropidłowski 2020.</h1>
					<h1>mkropidlowsky@gmail.com</h1>

					</div>

					</div>

				</footer>


</body>
</html>