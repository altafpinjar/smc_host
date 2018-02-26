<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
</head>  


<body style="background-color: #fff;">
  <!--navbar-->
  <?php include_once "header.php"; ?>
  
    
<!-- WRITE MAIN CONTENT HERE --> 

<section id="showcase" class="py-4">
   <div class="primary-overlay text-white ">
   <!--  START OF CONTAINER-1 -->
    <div class="container">
    <div class="row">
    <div class="col-md-12 text-center">
    <h1 class="display-5 mt-5 pt-5 sab-main-text">
            Earn Money Doing What You Love..

    </h1>
    <p class="lead sab-main-text">SMC is a global marketplace for artists and creators to sell royalty-free images.<br> We want to see the world through your eyes.</p>
   <?php if(!$user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="loginpage.php"> Get Started &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>


<?php if($user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="s-upload.php"> Get Started &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>
    </div>
    </div>
    </div><!-- END OF CONTAINER-1 -->
    </div>

</section><!-- END OF SECTION -->
  <!--  START OF CONTAINER-2 -->
<div class="container-fluid mt-4">
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8 ">
    <center><h1>Sell images online and make money with your photos.</h1></center>
    <center> <h3>Spread your creativity all over the world...</h3></center>

    <center><img src="images/globe_PNG9.png" width="250px" height="100px;" class="img-fluid" ></center> 
    <p class="text-justify  ">When you upload your images or videos to Fotolia you are showcasing your work to millions of buyers around the world, 24/7. Thanks to Fotolia’s reseller network, your creations are promoted by hundreds of partners, giving even more visibility to your portfolio (whether directly or through print-on-demand activities).</p>

    <p class="text-justify">Thanks to huge daily sales volumes and royalties of up to 63% of the sales price, Fotolia has in a few years become the European leader in the Microstock industry. There are no registration or portfolio management fees and you could potentially earn thousands of dollars every month. <br>
    </p>
   </div>
    
     </div>
   </div>
  <!-- END OF CONTAINER-2 -->

<div class="text-center  p-4"> <h1 class=" text-black">Sell Your Image</h1>
<h3 class="text-black">Just click on bellow Sign in button to sell your image</h3><br>
  <?php if(!$user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="loginpage.php">Try nows &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>


<?php if($user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="u-upload.php"> Try now &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>
  </div>


<!--  START OF CONTAINER-3 -->
   <div class="container-fluid mt-4 p-4" >
   <div class="row">
   <div class="col-md-2">
   </div>
   <div class="col-md p-0 m-0 ">
<div class="card sab-card" style="">
   <center> <img src="images/interface.png" width="70" height="70"></center>
    <div class="card-body">
     <center> <h4 class="card-title">Simple Interface</h4></center>
       <center><p>Easily manage your products within the Shopify admin. Upload your own images or use our free stock photos, add new products etc.</p>
      </center>
    </div>
</div>
   </div>
  
  <div class="col-md p-0 m-0 ">
    <div class="card sab-card">
   <center><img src="images/repair_service-512.png" width="70" height="70"></center>
    <div class="card-body">
     <center> <h4 class="card-title">business tools</h4></center>  
      <center><p>Keep track of the status on all orders. Analyze your order history to build better customer relations and target your marketing campaign.</p>
      </center>
    </div>
  </div>

  </div>
  
  <div class="col-md p-0 m-0">
    <div class="card sab-card">
   <center><img src="images/support.png" width="70" height="70"></center>
    <div class="card-body">
     <center> <h4 class="card-title">Support</h4></center>
       <center><p>We're here to help, 24 hours a day, 7 days a week. You can email or call our dedicated support team if you have any issues.</p>
      </center>
    </div>
  </div>
  </div>


   <div class="col-md-2">
   </div>
</div>

</div><!-- END OF CONTAINER-3 -->
<div class="text-center bg-info p-4"> <h2 class="display-4 text-white sab-main-text ">Ready?</h2>
 <h4> Signing up is fast. Contributing is fun. And turning your creativity into cash, well, it just makes sense..</h4><br>
    <a class="btn btn-lg  bg-danger text-white sab-main-text" href="Sellform.php">Create an account</a>
  </div>
 <!--footer--> 

  <!--footer-->

  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>





  
