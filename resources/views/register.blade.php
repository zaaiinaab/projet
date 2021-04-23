  
@extends('layouts.app')
@section('register')

<nav class="breadcrumb" aria-label="breadcrumbs">
    <div class="container-bg"> 
     
     
     <h1>Create Account</h1>
     <a href="home" title="Back to the frontpage">Home</a>
   
     <span aria-hidden="true" class="breadcrumb__sep">&#47;</span>
     <span>Create Account</span>
     
   
     
    </div>  
   </nav>
   
   
   
      
       
     <main class=" main-content  ">  
     
       <div class="dt-sc-hr-invisible-large"></div> 
     
       
       
       
       
     <div class="wrapper"> 
       <div class="grid-uniform">
         <div class="grid__item">  
           
           <div class="container-bg">
             
             <div class="user-account">
     <div class="grid__item small--text-center">
       <div class="register-form">
         
         <form method="post" action="https://boom-theme.myshopify.com/account" id="create_customer" accept-charset="UTF-8"><input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />
   
         
   
         <label for="FirstName" class="label--hidden">First Name</label>
         <input type="text" name="customer[first_name]" id="FirstName" placeholder="First Name"  autocapitalize="words" autofocus>
   
         <label for="LastName" class="label--hidden">Last Name</label>
         <input type="text" name="customer[last_name]" id="LastName" placeholder="Last Name"  autocapitalize="words">
   
         <label for="Email" class="label--hidden">Email</label>
         <input type="email" name="customer[email]" id="Email" placeholder="Email"  autocorrect="off" autocapitalize="off">
   
         <label for="CreatePassword" class="label--hidden">Password</label>
         <input type="password" name="customer[password]" id="CreatePassword" placeholder="Password" >
   
         <p>
           <input type="submit" value="Create" class="btn">
         </p>
         <a href="home">Return to Store</a>
   
         </form>
   
       </div>
     </div>
   </div>
             
           </div>  
           
         </div>
       </div> 
     </div>
     
     <div class="dt-sc-hr-invisible-large"></div>
         
     </main>  
     
       @endsection