const creditCard = document.querySelector('#creditCard');
const deliveryPay = document.querySelector('#deliveryPay');
const billingForm = document.querySelector('.billingForm');
const creditForm = document.querySelector('.creditCardInfo');
const proccedBtn = document.querySelector('.proceedBtn');



loadEventListener();

function loadEventListener()
{
    creditCard.addEventListener('click', changeStyleCredit);
    deliveryPay.addEventListener('click', changeStyleDelivery);
    
}

billingForm.style.display = 'none'; 
creditForm.style.display = 'none';
proccedBtn.style.display = 'none';


function changeStyleCredit(e)
{ 
     if(e.target.parentElement.parentElement.classList.contains('cardClick'))
     {     
      creditForm.style.display = 'block'; 
      proccedBtn.style.display = 'block';
      creditCard.classList.add('methodCardAction');
      e.target.parentElement.classList.add('creditActive');       
      


     } else if(creditCard.parentElement.parentElement.classList.contains('creditActive'));
     {
        billingForm.style.display = 'none'; 
        deliveryPay.classList.remove('methodCardAction');
        
     } 

}


function changeStyleDelivery(e)
{
   if(e.target.parentElement.classList.contains('cardClick'))
   {
      billingForm.style.display = 'block'; 
      proccedBtn.style.display = 'block';
      deliveryPay.classList.add('methodCardAction');
      e.target.parentElement.classList.add('creditActive');    
      
      
   } else if(creditCard.parentElement.classList.contains('creditActive'));
   {
      creditForm.style.display = 'none'; 
      creditCard.classList.remove('methodCardAction');
      
   }
}
