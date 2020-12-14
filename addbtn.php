<form method="POST" action="addbtn.php">
 <div class="input-group mb-3" id="input-discount">
    <input type="text" name="test" class="form-control" placeholder="Discount code.." aria-label="Discount code.." aria-describedby="basic-addon2">
		<div class="input-group-append">
			<button class="btn btn-primary" type="submit"  name="btn">Add</button>
		</div>
	</div>
</form>
<?php 


    if(isset($_POST['btn']))
    {
        $inputDiscount = array($_POST['discount-value']);
        

        $discount = 15;
        $tab = array("kod","test1","pray4cos");
        $sum;

        $checkTable = in_array($_POST['test'], $tab);

        if ($checkTable == $inputDiscount)
        {
            $wynik = ($sum / 100) * $discount;
            $newPrice = $sum - $wynik;
            echo "Cena: ".$newPrice;           
        } else 
        {
            echo 'Kod  rabatowy nie działa.';
        }

    }
    else {
        
    }


?>