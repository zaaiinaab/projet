@extends('layouts.app')
@section('cart')
     

<nav class="breadcrumb" aria-label="breadcrumbs">
    <div class="container-bg"> 
     
     
     <h1>Your Shopping Cart</h1>
     <a href="index.html" title="Back to the frontpage">Home</a>
   
     <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
     <span>Your Shopping Cart</span>
     
   
     
    </div>  
   </nav>
   
   
   
      
       
     <main class=" main-content  ">  
     
       <div class="dt-sc-hr-invisible-large"></div> 
     
       
       
       
       
     <div class="wrapper"> 
       <div class="grid-uniform">
         <div class="grid__item">  
           
           <div class="container-bg">
             
             
   
   
   
   <div class="cart_empty_msg">  
     <img src="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/empty-cart6052.png?v=2503369804438330024" alt="No Items in cart" />
     <h5>No Items in cart</h5>
     <p>Add items you want to shop</p>
     <p><a href="index.html" class='btn'>Start Shopping</a></p>
   </div>
   
   
   
   <script>
     $('.qtyplus1').on('click', function(e){
       e.preventDefault();
       var currentVal = parseInt($(this).parent().find('input[name="updates[]"]').val());
       if (!isNaN(currentVal)) {
         $(this).parent().find('input[name="updates[]"]').val(currentVal + 1);
       } else {
         $(this).parent().find('input[name="updates[]"]').val(1);
       }
     });
   
     $(".qtyminus1").on('click', function(e) {
   
       e.preventDefault();
       var currentVal = parseInt($(this).parent().find('input[name="updates[]"]').val());
       if (!isNaN(currentVal) && currentVal > 1) {
         $(this).parent().find('input[name="updates[]"]').val(currentVal - 1);
       } else {
         $(this).parent().find('input[name="updates[]"]').val(1);
       }
     });
   </script>
             
           </div>  
           
         </div>
       </div> 
     </div>
     
     <div class="dt-sc-hr-invisible-large"></div>
         
     </main>  
       
     
@endsection