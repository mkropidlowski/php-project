<?php 

    session_start();
    
 
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


   

    <?php

        require_once('db.php');

        if(isset($_POST['proceed']))
        {
        
            
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $zipCode = $_POST['zipCode'];
            $country = $_POST['country'];

            if(empty($fullname) || empty($address) || empty($city) || empty($zipCode) || empty($country))
            {
                header('Location: payMethod.php?error=EmptyFields');
                exit();
                
            } else {
               

                $productID = $_SESSION['productID'];    
                $query = "INSERT INTO customer (fullname,address,city,zipCode,country,idProduct) VALUES ('$fullname','$address','$city','$zipCode','$country','$productID')";
                $queryCall = mysqli_query($mysqli,$query);
                $sqla = mysqli_query($mysqli,"UPDATE product SET quantity = quantity - 1 WHERE id IN (".implode(',',$_SESSION['cart']).")");												
                    
                    unset($_SESSION['cart']);
                    header('location: proceedSucess.php?&orderSucces');
                
            }     
        }




        if(isset($_POST['proceedCreditCard']))
        {
        
            
            $fullnameCredit = $_POST['fullnameCredit'];
            $cardNumber = $_POST['cardNumber'];
            $expMonth = $_POST['expMonth'];
            $expYear = $_POST['expYear'];
            $cvc = $_POST['cvc'];
            $addressCredit = $_POST['addressCredit'];
            $cityCredit = $_POST['cityCredit'];
            $zipCodeCredit = $_POST['zipCodeCredit'];
            $countryCredit = $_POST['countryCredit'];

            if(empty($fullnameCredit) || empty($cardNumber) ||  empty($expMonth) || empty($expYear) || empty($cvc) || empty($addressCredit) || empty($cityCredit) || empty($zipCodeCredit) || empty($countryCredit))
            {
                header('Location: payMethod.php?error=EmptyFieldsCredit');
                exit();
                
            } else {
                $productID = $_SESSION['productID'];
                $query = "INSERT INTO creditcard (fullnameCredit,cardNumber,expMonth,expYear,cvc,addressCredit,cityCredit,zipCodeCredit,countryCredit,idProduct) VALUES ('$fullnameCredit','$cardNumber','$expMonth','$expYear','$cvc','$addressCredit','$cityCredit','$zipCodeCredit','$countryCredit','$productID')";
                $queryCall = mysqli_query($mysqli,$query);
                $sqla = mysqli_query($mysqli,"UPDATE product SET quantity = quantity - 1 WHERE id IN (".implode(',',$_SESSION['cart']).")");												
                    
                    unset($_SESSION['cart']);
                    header('location: proceedSucess.php?&orderSuccesCredit');
                
            }     
        }

?>

        <div class="summary">
             <h1>Zamówienie przyjęte.</h1>
             <a href="index.php" class="btn btn-success">SHOP</a></td>


        </div>

    



</body>
</html>