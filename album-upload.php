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
<div class="container-fluid m-0 p-0" style="background-color: gray;">
<br>
<h1 class= "text-center">Upload Your Image</h1><br>
<div class="row">

<div class="col-md-2"></div>
<div class="col-md-8 container card">
	
	
		<br>
				<div class="title">
					<h3 class="text-center">Please Fill In The Details Below</h3>
					<hr>
<form class="text-center" action="thank-you.php">

	
   Album Name<br>
<input type="text" name="imageName" value="" class="w-50 stsf-b"  ><br><br>

  select catergory of album<br>
  <select name="imageCategory" class="w-50 stsf-b">
    
    <option value="Marraige">Marraige</option>
    <option value="Birthday">Birthday</option>
    <option value="Engagement">Engagement</option>
	<option value="Aniversry">Aniversry</option>
	<option value="College function">College function</option>
	<option value="Send up party">Send up party</option>
	<option value="Get together">Get together</option>
	<option value="Party meetings">Party meetings</option>
  <option value="others">others</option>
  </select><br>	<br><br>
  <input type="text" name="imageName" value="" class="w-50 stsf-b" placeholder="Write tags here..." ><br><br>
  
  Album Description<br>
  <textarea rows="4" cols="50" name="comment" form="usrform"  class="w-50 stsf-b">
</textarea><br><br>
<div class="row">
  <div class="col-lg-4">
    <div class="radio" >
   <h4> <label><input type="radio" value="" name="optradio">Family photos</label></h4>
  <img src="images/album1.png" style="width: 100%">
</div>
</div>
<div class="col-lg-4">
  <div class="radio" >
  <h4> <label><input type="radio" value="" name="optradio">Official photos</label></h4>
  <img src="images/album2.png" style="width: 100%">
</div>
</div>
<div class="col-lg-4">
  <div class="radio" >
  <h4> <label><input type="radio" value="" name="optradio">Friends photos</label></h4>
  <img src="images/album3.png" style="width: 100%">
</div>
</div>
</div><br>
<div class="row">
  <div class="col-lg-4">
    <div class="radio" >
    <h4> <label><input type="radio" value="" name="optradio">Party photos</label></h4>
  <img src="images/album4.png" style="width: 100%">
</div>
</div>
<div class="col-lg-4">
  <div class="radio" >
  <h4> <label><input type="radio" value="" name="optradio">Wedding  photos</label></h4>
  <img src="images/album5.png" style="width: 100%">
</div>
</div>
<div class="col-lg-4">
  <div class="radio" > 
  <h4> <label><input type="radio" value="" name="optradio">Aniversry photos</label></h4>
  <img src="images/album6.png" style="width: 100%">
</div>
</div>
</div><br>
<div class="row">
  <div class="col-lg-4">
    <div class="radio" >
    <h4> <label><input type="radio" value="" name="optradio">Send-up party photos</label></h4>
  <img src="images/album7.png" style="width: 100%">
</div>
</div>
<div class="col-lg-4">
  <div class="radio" >
  <h4> <label><input type="radio" value="" name="optradio">Get together photos</label></h4>
  <img src="images/album8.png" style="width: 100%">
</div>
</div>
<div class="col-lg-4">
  <div class="radio" >
  <h4> <label><input type="radio" value="" name="optradio">Party meetings photos</label></h4>
  <img src="images/album9.png" style="width: 100%">
</div>
</div>
</div><br>
<div class="row">
  <div class="col-lg-4">
    <div class="radio" >
    <h4> <label><input type="radio" value="" name="optradio">Birthday photos</label></h4>
  <img src="images/album10.png" style="width: 100%">
</div>
</div>
<div class="col-lg-4">
  <div class="radio" >
  <h4> <label><input type="radio" value="" name="optradio">Engagement photos</label></h4>
  <img src="images/album11.png" style="width: 100%">
</div>
</div>
<div class="col-lg-4">
  <div class="radio" >
  <h4> <label><input type="radio" value="" name="optradio">Other photos</label></h4>
  <img src="images/album14.png" style="width: 100%">
</div>
</div>
</div>


<h6>upload more than 20 images to make good look of your album.</h6><br>  
     <label class="btn btn-info " for="upload-file-selector">
              

<input id="fileupload" type="file" multiple="multiple" /></label><br>
<br>
    You can upload photos that are .JPEG, .JPG, or .PNG.<br>Max file size 25mb        <br>
	

      <label><input type="checkbox" value="">&nbsp I Agree <a href="#">Terms and Conditions</a></label><br><br>
<input type ="submit" class="btn-danger w-50" >

<br><br>
   
     </form> 
	 
	 </div>
	 </div>
<div class="col-md-2"></div>	
	
	
</div>	<br>
</div>	
<br><br>


	

  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>