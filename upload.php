<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <?php include_once "styles.php"; ?>
   
    
<!-- WRITE MAIN CONTENT HERE -->
  <body>
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->
<br>
<br>
<!-- START OF SECTION -->
<section id="showcase" class="py-5">
  <div class="primary-overlay text-white ">
   <div class="container">
     <div class="row">
     <div class="col-md-12 text-center ">
      <h1 class="display-5 mt-5 pt-5 py-1 sab-h1">
            Become a Part of us...
      </h1>

      <p class="sab-top-text">Upload your photos and get discovered by millions of people.</p>
</div>
 </div>
   </div>
  </div>
</section><!-- END OF SECTION -->
<!-- START OF CONTAINER -->
  <div class="container">
  <div class="row">
    <div class="col-md-12 text-center mt-5">
      <h1>How it Works</h1>
      <p class="sab-howitworks">Do you have amazing pictures that you want to share with the community? Then click on the button to upload them . They will be released under the CC0 license. You will help people to get access to beautiful photos that they can use freely.</p><br>
      <!-- <a class="btn btn-lg bg-danger text-white" href="loginpage2.php">Get Started </a> -->


<?php if(!$user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="loginpage.php"> Get Started &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>


<?php if($user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="smc.php"> Get Started &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>




      
    </div>
  </div>
  </div><!-- END OF CONTAINER -->

<!-- START OF CONTAINER FLUID -->
 <center><div class="container-fluid mt-5"  >
  

<div class="jumbotron pt-3 sab-jumbotron" >

  <div class="row">
    <div class="col-md-1">
    </div>
      
      <div class="col-md-5">
     <img src="images/art1.jpg" height="300px" width="400px;"  >
  </div>
  <div class="col-md-5"> 
    <h2 class="text-left">Showcase Your Work</h2>
    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  </div>
  <div class="col-md-1">
  </div>  
</div>

<div class="row">
    <div class="col-md-1">
    </div>
      
      <div class="col-md-5">
     <img src="images/album4.png" height="300px" width="400px;"  >
  </div>
  <div class="col-md-5"> 
    <h2 class="text-left">Need a album of your Photos?</h2>
    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<?php if(!$user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="loginpage.php">Ready? &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>


<?php if($user_ok){
                echo' <a class="btn btn-lg bg-danger text-white"  href="album-upload.php">Ready? &nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>'; 

}?>


  </div>
  <div class="col-md-1">
  </div>  
</div>

</div>

</div></center><!-- END OF CONTAINER FLUID -->


  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>