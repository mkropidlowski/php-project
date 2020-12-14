<?php

    require_once('db.php');       
        session_start();
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }
?>
<!DOCTYPE html>
<html lang="pl">
<head>

<meta charset="utf-8">
   
    <link href="style.css" rel="stylesheet" type="text/css">
     <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT Shop</title>

</head>
<body>

    <div class="x">
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

        <div class="slider"></div>
        <div class="content-menu">
                <table>
                    <tr>
                    <td class="contentsBox" onClick="changeSmartphone()">SMARTPHONE</td>
                    <td class="contentsBox" onClick="changeLaptops()">LAPTOP</td>
                    <td class="contentsBox" onClick="changePc()">DESKTOP PC</td>
                    </tr>  
                </table>
        </div>
    
        <div class="deviceContainer">
        <!-- SMARTPHONE BOX -->        
                    <?php
             
                        $result = mysqli_query($mysqli,"SELECT * FROM product WHERE device_type='smartphone'");
                        while($row = mysqli_fetch_assoc($result)){
                            echo '
                                <div class="productBox smartphone">

                                <div class="productImg"><img src="'.$row["img"].'"></div>
                                    <div class="productDetails">
                                    <h3>'.$row["name"].'</h3>
                                           
                                            <div class="productFeatures">
                                                <p>Camera [MPix]:<b>' .$row["camera"].'</b></p>
                                                <p>Dual SIM: <b> '.$row["dualsim"].'</b></p>
                                                <p>RAM: <b> '.$row["ram"].' GB</b></p>
                                                <p>Storage: <b> '.$row["storage"].' GB</b></p>
                                                <p>Display: <b> '.$row["display"].'"</b></p>                       
                                            </div>
                                    </div>
                                    
                                    <div class="addToCart">
                                        <h2>Cost: '.$row["price"].' $</h2>

                                        <a href="add-product.php?id='.$row["id"].'" class="btn btn-danger btnAddToCart">Add to Cart!</a>
                                       
                                    </div>
                                </div>


                            ';
                        }


                 ?>

             <!-- LAPTOPS BOX -->

             <?php
             
             $result = mysqli_query($mysqli,"SELECT * FROM product WHERE device_type='laptop'");
             while($row = mysqli_fetch_assoc($result)){
                 echo '
                     <div class="productBox laptop" style="display:none;">

                     <div class="productImg"><img src="'.$row["img"].'"></div>
                         <div class="productDetails">
                         <h3>'.$row["name"].'</h3>
                              

                                 <div class="productFeatures">
                                     <p>Graphics: <b>' .$row["graphic"].'</b></p>
                                     <p>Memory: <b> '.$row["ram"].' GB</b></p>
                                     <p>Storage: <b> '.$row["storage"].' GB</b></p>
                                     <p>Display: <b> '.$row["display"].'"</b></p>          
                                     <p>Operating System: <b> '.$row["system"].'</b></p>             
                                 </div>
                         </div>
                         
                         <div class="addToCart">
                             <h2>Cost: '.$row["price"].' $</h2>
                            
                             <a href="add-product.php?id='.$row["id"].'" class="btn btn-danger btnAddToCart">Add to Cart!</a>
                         
                             </div>
                     </div>


                 ';
             }

      ?>

                <!--PC BOX -->
                <?php
             
             $result = mysqli_query($mysqli,"SELECT * FROM product WHERE device_type='pc'");
             while($row = mysqli_fetch_assoc($result)){
                 echo '
                     <div class="productBox pcBox" style="display:none;">

                     <div class="productImg"><img src="'.$row["img"].'"></div>
                         <div class="productDetails">
                         <h3>'.$row["name"].'</h3>
                              

                                 <div class="productFeatures">
                                     <p>Graphics: <b>' .$row["graphic"].'</b></p>
                                     <p>Memory: <b> '.$row["ram"].' GB</b></p>
                                     <p>Storage: <b> '.$row["storage"].' TB HDD + SSD</b></p>
                                     <p>Procesor: <b> '.$row["procesor"].'</b></p>          
                                               
                                 </div>
                         </div>
                         
                         <div class="addToCart">
                             <h2>Cost: '.$row["price"].' $</h2>
                            
                             <a href="add-product.php?id='.$row["id"].'" class="btn btn-danger btnAddToCart">Add to Cart!</a>
                         
                             </div>
                     </div>


                 ';
             }


      ?>
              
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

    
      <script type="text/javascript">

           


        function changeSmartphone() { 
            var x = document.querySelectorAll(".laptop, .pcBox");
            var i;        
            for (i = 0; i < x.length; i++) {       
                x[i].style.display = "none";
            }
            var xSm = document.querySelectorAll(".smartphone");
            for (i = 0; i < xSm.length; i++){
                xSm[i].style.display = "block";
            }
        }
            

        function changeLaptops() {           
            var x = document.querySelectorAll(".laptop");
            var i;        
            for (i = 0; i < x.length; i++) {       
                x[i].style.display = "block";
            }
            var xLp = document.querySelectorAll(".smartphone, .pcBox");
            for (i = 0; i < xLp.length; i++){
                xLp[i].style.display = "none";
            }
            
        }

        function changePc() {
            var x = document.querySelectorAll(".pcBox");
            var i;        
            for (i = 0; i < x.length; i++) {       
                x[i].style.display = "block";
            }
            var xPc = document.querySelectorAll(".smartphone, .laptop");
            var i;        
            for (i = 0; i < xPc.length; i++) {       
                xPc[i].style.display = "none";
            }

        }

      </script>
          
    </div>

</body>


</html>