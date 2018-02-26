
<?php
include_once("checkUserLoginStatus.php");

?>


<!doctype html>
<html lang="en">
  <head>
    <title>editorial</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
	<link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
</style>
	
  </head>
  <body>
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->
    
<!-- Mobile bar ends here -->
  <br><br>
  <div class="container-fluid m-0 p-0 ">
                                          
										      <!--cover-->
     <div  class="stse-cover" >
	   <img src = "images/edit-cover-2.jpeg"  class="img-fluid w-100 stse-img">
	         <div class="bg-dark stse-ov"></div>
	
	<span class="text-center text-white stse-ov-text">
      <h1>Photo Retouching Services</h1>

            One of the most trusted names in online photo editing & retouching services since 2007.<br> No headaches. No hassle.
                 <br><br> 

<?php if(!$user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="loginpage.php"> Get Started &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>


<?php if($user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="e-upload.php"> Get Started &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>


  </div><br>
 
                                                <!--photo retouching
 <div class="container-fluid">
 <center><h1> Photo Retouching Services</h1></center>
 <div class="row" >
            <!--left col
 <div class="col-md" ></div>
           <!--middle col--> <!--
 <div class="col-md-4">
 
  <div class="c" >
  <img src="images/edit-before-1.jpeg" alt="before" class="im img-fluid">
  <div class="overlay">
    <img src="images/edit-after-1.jpeg" alt="after" class="t im">
	</div>
</div>
 
 </div>
 
 
 <div class="col-md-4 text-justify">A photograph is the physical capturing
of a moment – and you can never have
that moment again. That means that
sometimes, a photograph will appear
from a day that is very special to you,
such as a wedding, or a graduation, that
you cannot go back and do again . . . and
the photograph really does not do you or
your loved ones justice.
It can be very upsetting when this
happens, especially when you thought
that the photographs were going to look
</div>


</div>

 <div class="col-md"></div>
 
 </div>
 </div>-->

 <div class="container-fluid">
 <center><h1> Photo Retouching</h1></center><br>
 <div class="row" >
 
 <div class="col-md"></div>
 
 <div class="col-md-4">
 
  <div class="c" >
  <img src="images/edit-before-1.jpeg" alt="before" class="im img-fluid">
  <div class="overlay">
    <img src="images/edit-after-1.jpeg" alt="After" class="t im">
	</div>
</div>
 
 </div>

 
 
 <div class="col-md-4 text-justify">SellMyClick provides professional photo
editing services to photographers and
photography studios around the globe.
How can we help your photography
business?
With 7 years of experience in photo
retouching, we guarantee premium
quality of finished photos, quick delivery
and reasonable prices.
Our photo retouching rates start at €7 per
photo.
There are no minimum order
requirements for our photo editing
services.
Average turnaround times.</div>


 <div class="col-md"></div>
 
 </div>
 </div>


 
 <br>
 <div class="row">
   <div class = "col-md-2"></div>
   <div class = "col-md-4 pl-4">
   <h4>Our retouching services include:</h4>
    <ul>
<li>Spots, blemishes, wrinkles, eye bags, and braces removal.</li>
<li>Natural skin retouching without blurring and losing skin texture.</li>
<li>Stray hairs removal.</li>
<li>Teeth whitening and fixing.</li>
<li>Double chin removal; facial reshaping.</li>
<li>Make-up correction.</li>
</ul>
</div>

<div class = "col-md-4">
<h4>Why choose SellMyClick?</h4>
<ul>
<li>We have the retouching expertise needed to make images look their best.</li>
<li>Quick turnaround time and your privacy guaranteed.</li>
<li>Premium quality at a fair price.</li>
</ul> <br><br>




<?php if(!$user_ok){
                echo' <a class= "btn bg-primary btn-sm btn-block text-white rounded " href="loginpage.php"> Try Now</a>'; 

}?>


<?php if($user_ok){
                echo' <a class= "btn bg-primary btn-sm btn-block text-white rounded " href="e-upload.php"> Try Now</a>'; 

}?>


</div>

 <div class = "col-md-2"></div>
 </div>
 
 
 
 
                                                  <!--photo editing services-->
												  
<div class="container-fluid my-4">
 <center><h1> Photo Editing Services for Photographers</h1></center><br>
 <div class="row" >
 
 <div class="col-md"></div>
 
 
 
 
 <div class="col-md-4 text-justify">SellMyClick provides professional photo
editing services to photographers and
photography studios around the globe.
How can we help your photography
business?
With 7 years of experience in photo
retouching, we guarantee premium
quality of finished photos, quick delivery
and reasonable prices.
Our photo retouching rates start at €7 per
photo.
There are no minimum order
requirements for our photo editing
services.
Average turnaround times.</div>

<div class="col-md-4">
 
  <div class="c" >
  <img src="images/edit-before-2.jpeg" alt="before" class="im img-fluid">
  <div class="overlay">
    <img src="images/edit-after-2.jpeg" alt="After" class="t im">
	</div>
</div>
 
 </div>

 <div class="col-md"></div>
 
 </div>
 </div>


 
 <br>
 <div class="row">
   <div class = "col-md-2"></div>
   

<div class = "col-md-4 ">
<h4>Why choose SellMyClick?</h4>
<ul>
<li>We have the retouching expertise needed to make images look their best.</li>
<li>Quick turnaround time and your privacy guaranteed.</li>
<li>Premium quality at a fair price.</li>
</ul><br>
<?php if(!$user_ok){
                echo' <a class= "btn bg-primary btn-sm btn-block text-white rounded " href="loginpage.php"> Try Now</a>'; 

}?>


<?php if($user_ok){
                echo' <a class= "btn bg-primary btn-sm btn-block text-white rounded " href="e-upload.php"> Try Now</a>'; 

}?>

</div>

<div class = "col-md-4 ">
   <h4>Our retouching services include:</h4>
    <ul>
<li>Spots, blemishes, wrinkles, eye bags, and braces removal.</li>
<li>Natural skin retouching without blurring and losing skin texture.</li>
<li>Stray hairs removal.</li>
<li>Teeth whitening and fixing.</li>
<li>Double chin removal; facial reshaping.</li>
<li>Make-up correction.</li>
</ul>
<br>

</div>

 <div class = "col-md-2"></div>
 </div>												  
 
</div>

  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>