<?php 

    session_start();
    // print_r($_SESSION['cart']);
  
?>

<!DOCTYPE html>
<html lang="pl">
		<head>
              <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
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
				
					<div class="logo"><h1>Device - APP</h1></div>

				    </div>
                </div>

                <div class="payContainer">

                    <div class="containerHeight">                

                    <div class="payInterface">
                        
                        <h2 class="payNavText">Payment</h2>   
                        <h5 class="payNavText">Choose payment method below</h5>  

                                           <h4><?php echo "Final price: ".$_SESSION['finalPriceToPay']." $";?></h4>
                       
                            
                                <div class="chooseMethod">
                                           
                                            <div class="methodCard cardClick displayBilling" id="creditCard">                                  
                                                <div class="divImgSize cardClick">
                                                    <img src="img/credit-card.png"><p class="payInfo ">PAY WITH CREDIT CARD</p>
                                                </div>    
                                        
                                            </div>
                                                     
                                            
                                            <div class="methodCard cardClick displayCardForm" id="deliveryPay">
                                                <div class="divImgSize cardClick" >
                                                    <img src="img/delivery-truck.png"><p class="payInfo">CASH ON DELIVERY</p>
                                                </div>
                                                        
                                            </div>
                                           
                                    
                                    </div>
                        </div>


                                <div class="userDataContainer">

                                    <div class="billingForm">
                                        
                                            <form class="formPay" action="proceedSucess.php" method="POST" accept-charset="utf-8">
                                                <h4 class="formNav"><b>Billing Info</b></h4>
                                                    <table class="userInfoTable">
                                                        <tr><td><p>FULL NAME</p></td></tr> 
                                                        <tr><td colspan="2"><input type="text" placeholder="John Doe" class="userInput" name="fullname"></td></tr>
                                                        <tr><td><p>BILLING ADDRESS</p></td></tr>
                                                        <tr><td colspan="2"><input type="text" placeholder="Fyrtom" class="userInput" name="address"></td></tr>
                                                        <tr><td><p>CITY</p></td><td><p>ZIP CODE</p></td></tr>
                                                        <tr><td><input type="text" placeholder="Stockholm" class="userInputSmaller" name="city"></td><td><input type="text" placeholder="12804" class="userInputSmaller" name="zipCode"></td></tr>
                                                        <tr><td><p>COUNTRY</p></td></tr>
                                                        <tr><td colspan="2"><input type="text" placeholder="Sweden" class="userInput" name="country"></td></tr>

                                                        <tr><td colspan="2"><input type="submit" class="btn btn-primary proceedBtn" name="proceed" value="PROCEED"><td></tr>
                                                        
                                                    </table>
                                            </form>

                                    </div>

                                     <?php 
                                            
                                
                                     ?>

                                    

                                    <div class="creditCardInfo">
                                        
                                            <form class="formPay" action="proceedSucess.php" method="POST" accept-charset="utf-8">
                                                <h4 class="formNav"><b>Credit Card Info</b></h4>
                                                    <table class="userInfoTable">
                                                        <tr><td><p>CARDHOLDER'S NAME</p></td></tr> 
                                                        <tr><td colspan="2"><input type="text" placeholder="John Doe" class="userInput" name="fullnameCredit"></td></tr>
                                                        <tr><td><p>CARD NUMBER</p></td></tr>
                                                        <tr><td colspan="2"><input type="text" placeholder="1234-5678-1432-1573" class="userInput" name="cardNumber" id="cardNumberChar"></td></tr>
                                                        <tr><td><p>EXP MONTH</p></td><td><p>EXP YEAR</p></td></tr>
                                                        <tr><td><input type="text" placeholder="12" class="userInputSmaller" name="expMonth"></td><td><input type="text" placeholder="20" class="userInputSmaller" name="expYear"></td></tr>
                                                        <tr><td><p>CVC NUMBER</p></td></tr>
                                                        <tr><td colspan="2"><input type="text" placeholder="165" class="userInput" name="cvc"></td></tr>
                                                        <tr><td><p>BILLING ADDRESS</p></td></tr>
                                                        <tr><td colspan="2"><input type="text" placeholder="Fyrtom" class="userInput" name="addressCredit"></td></tr>
                                                        <tr><td><p>CITY</p></td><td><p>ZIP CODE</p></td></tr>
                                                        <tr><td><input type="text" placeholder="Stockholm" class="userInputSmaller" name="cityCredit"></td><td><input type="text" placeholder="12804" class="userInputSmaller" name="zipCodeCredit"></td></tr>
                                                        <tr><td><p>COUNTRY</p></td></tr>
                                                        <tr><td colspan="2"><input type="text" placeholder="Sweden" class="userInput" name="countryCredit"></td></tr>
                                                        <tr><td colspan="2"><input type="submit" class="btn btn-primary proceedBtn" name="proceedCreditCard" value="PROCEED"><td></tr>
                                                    </table>                
                                            </form>

                                    </div>

                            
                                </div>               


                                <script type="text/javascript">
                                
                                    event();

                                    const char = document.getElementById('cardNumberChar');

                                    function event() {
                                        char.event('keyup', addChar);
                                    }

                                    function addChar(e) {
                                        
                                    }



                                
                                
                                </script>


                                <div class="navigationButtons">
                                    
                                    <a href="index.php" class="btn btn-outline-secondary returnBtn">RETURN TO STORE</a>
                                    <a href="cart.php" class="btn btn-link bToCart">BACK TO CART</a>
                                    

                                </div>

                   
                    </div>
          
                   

                    
                </div>

                
                
         </div>















         <script src="paymentAction.js"></script>


</body>




</html>