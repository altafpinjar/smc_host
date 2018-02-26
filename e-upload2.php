<!doctype html>
<html lang="en">
  <head>
    <title>Upload image</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
  </head>
  <body>
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->

<br><br>

<div class="container" >
<br>

<div class="row">
<div class="col-md-12 container card" >	
	
		<br>
				<div class="title">
					<center><h3>Select the check boxes to choose your need...</h3></center> 
					<hr>
<form class="text-center" action="thank-you.php">

   <div class="container" >

    <div class="row">
      <div class="col-md-12">
        <div class="checkbox">
      <h4><label><input type="checkbox" value="">1.Do you need resize of your photo?</label></h4>
    </div>
  </div>
</div>
      <div class="row">
      <div class="col-md-6">
      <img src="images/art2.jpg" style="overflow: hidden; width: 100%;">
    </div>

      <div class="col-md-6">    
      <img src="images/art2.jpg" style="overflow: hidden; width: 80%;">
    </div>
      </div>
<br>
    <div class="row">
      <div class="col-md-12">
        <div class="checkbox">
      <h4> <label><input type="checkbox" value="">2.Do you need croping of perticular thing or place ?</label></h4>
    </div>
  </div>
</div>
      <div class="row">
      <div class="col-md-6">
      <img src="images/art1.jpg" style="overflow: hidden; width: 100%;">
    </div>

      <div class="col-md-6">    
      <img src="images/art11.png" style="overflow: hidden; width: 100%;">
    </div>
      </div>
<br>
          <div class="row">
      <div class="col-md-12">
        <div class="checkbox">
      <h4><label><input type="checkbox" value="">3.Do you need retouch up of ur picture ?</label></h4>
    </div>
  </div>
</div>
      <div class="row">
      <div class="col-md-6">
      <img src="images/fabienne_B.jpg" style="overflow: hidden; width: 100%;">
    </div>

      <div class="col-md-6">    
      <img src="images/fabienne.jpg" style="overflow: hidden; width: 100%;">
    </div>
      </div>
<br>
          <div class="row">
      <div class="col-md-12">
        <div class="checkbox">
      <h4><label><input type="checkbox" value="">4.Do you want to remove background of your image?</label></h4>
    </div>
  </div>
</div>
      <div class="row">
      <div class="col-md-6">
      <img src="images/pp.jpeg" style="overflow: hidden; width: 100%;">
    </div>

      <div class="col-md-6">    
      <img src="images/pexels-photo-213117.jpg" style="overflow: hidden; width: 100%;">
    </div>
      </div>

           <div class="row">
      <div class="col-md-12">
        <div class="checkbox">
      <h4><label><input type="checkbox" value="">4.Do you want gradient effect to your image?</label></h4>
    </div>
  </div>
</div>
      <div class="row">
      <div class="col-md-6">
      <img src="images/pexels-photo-168497.jpeg" style="overflow: hidden; width: 100%;">
    </div>

      <div class="col-md-6">    
      <img src="images/gradient.jpg" style="overflow: hidden; width: 100%;">
    </div>
      </div>

<h5>
      <div class="radio" >
     <label style="padding-right: 20px;"><input type="radio" value="" name="optradio">A.Red</label>
     <label style="padding-right: 20px;"><input type="radio" value="" name="optradio">B.Green</label>
      <label style="padding-right: 20px;"><input type="radio" value="" name="optradio">C.Blue</label>
      <label style="padding-right: 20px;"><input type="radio" value="" name="optradio">D.Purple</label>
      <label style="padding-right: 20px;"><input type="radio" value="" name="optradio">E.Yellow</label>
      <label style="padding-right: 20px;"><input type="radio" value="" name="optradio">F.Pink</label>
    </div>
  

</h5>

<br><br>
<form class="text-center" action="thank-you.php">
<input type="text" name="cost" value="" class="w-50 stsf-b" disabled="" placeholder="Cost of Editing: 5+5+5+5=20rs" ><br><br>
       <!--  <label class="btn btn-info " for="upload-file-selector">
              

<input id="fileupload" type="file" multiple="multiple" /></label> -->





<hr />


    You can upload photos that are .JPEG, .JPG, or .PNG.<br>Max file size 25mb       <br>
	

      <label><input type="checkbox" value="">&nbsp I Agree <a href="#">Terms and Conditions</a></label><br><br>
<input type ="submit" class="btn-danger w-50" >

<br><br>
   
     </form> 
	 
	 </div>
  </form>
	 </div>
<div class="col-md-2"></div>	
	
	
</div>	
</div>	
<br><br>

</form>
</div>






  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    

  <?php include_once "script.php"; ?>
 
  </body>
</html>