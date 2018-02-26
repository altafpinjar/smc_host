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
  <body >
    <!--navbar-->
    <?php include_once "header.php"; ?>
    <!--end of navbar-->
   <br>
  <br>
  <br>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3" >
          <div class="jumbotron descimg" style="height: 400px;">
      <h6 class="text-center">Uploaded By: Maktum Husen</h6>
  
        <form class="jumbodesc">
    <div class="radio">
      <label><input type="radio" name="optradio">size:1920 x 1280</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">size:1024 x 512</label>
    </div>
    <div class="radio disabled">
      <label><input type="radio" name="optradio">size:640 x 426</label>
    </div>
  </form>
<center><button type="button" class="btn btn-outline-success">Download</button>
  <br><br>
    <button type="button" class="btn btn-outline-success" ><i class="fa fa-heart" aria-hidden="true" ></i></button>
     <button type="button" class="btn btn-outline-success"><i class="fa fa-share-alt-square" aria-hidden="true"></i></button>
    </center>

  </div>
    </div>
    <div class="col-lg-9 imgdec">
    <center><img src="images/new/2.jpeg"></center>
  </div>
      
</div>


<br>

<center> <h3>Similar Photos</h3></center><br>

<div class="row imgsize">

  <div class="col-lg-2">
      <img src="images/new/11.jpeg" >
    </div>
    <div class="col-lg-2">
    <img src="images/new/2.jpeg" >
  </div>
   <div class="col-lg-2">
    <img src="images/new/3.jpeg">
  </div>
   <div class="col-lg-2">
    <img src="images/new/2.jpeg">
  </div>
   <div class="col-lg-2">
    <img src="images/new/14.jpeg">
  </div>
   <div class="col-lg-2">
    <img src="images/new/2.jpeg"> 
  </div>
</div><br>
<div class="row imgsize">

  <div class="col-lg-2">
      <img src="images/new/6.jpeg" >
    </div>
    <div class="col-lg-2">
    <img src="images/new/5.jpeg">
  </div>
   <div class="col-lg-2">
    <img src="images/new/7.jpeg">
  </div>
   <div class="col-lg-2">
    <img src="images/new/8.jpeg">
  </div>
   <div class="col-lg-2">
    <img src="images/new/9.jpeg">
  </div>
   <div class="col-lg-2">
    <img src="images/new/10.jpeg"> 
  </div>
</div>
</div>
<hr color="gray">


<!--footer-->

<?php include_once "footer.php"; ?>
<!-- end of footer-->    
     <?php include_once "script.php"; ?>
  </body>
</html>