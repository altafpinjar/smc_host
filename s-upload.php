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
  <body style="background-color:white;">
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->


  <br><br>
<div class="container-fluid m-0 p-0" >
<br>
<h1 class= "text-center">Upload Your Image to $ELL</h1><br>
<div class="row">

<div class="col-md-2"></div>
<div class="col-md-8 container card" style="background-image:url('images/upload.jpeg'); width:100%;height:auto;">
	
	
		<br>
				<div class="title">
					<h3 class="text-center">Please Fill In The Details Below</h3>
					<hr>
<form class="text-center" action="thank-you.php">

	
   Image Name<br>
<input type="text" name="imageName" value="" class="w-50 stsf-b"  ><br><br>

Image Catergory<br>
  <select name="imageCategory" class="w-50 stsf-b">
    
    <option value="education">Education</option>
    <option value="technology">Technology</option>
    <option value="architecture">Architecture</option>
	<option value="nature">Nature</option>
	<option value="interior">Interior</option>
	<option value="Adventure">Adventure</option>
	<option value="Monuments">Monuments</option>
	<option value="Photography">Photography</option>
  <option value="Photography">Others</option>
  </select><br>	<br><br>
  <input type="text" name="imageName" value="" class="w-50 stsf-b" placeholder="Write tags here..." ><br><br>
  Image Description<br>
  <textarea rows="4" cols="50" name="comment" form="usrform"  class="w-50 stsf-b">
</textarea><br><br>

Image Selling Price in Indian Rupees <br>
<input type="text" name="imageName" value="ex: 500" class="w-50 stsf-b" ><br><br>

        <label class="btn btn-info " for="upload-file-selector">
            <input id="upload-file-selector "   type="file">    </label><br>
<br>
    You can upload photos that are .JPEG, .JPG, or .PNG.<br>Max file size 25mb       <br>
	

      <label><input type="checkbox" value="">&nbsp I Agree <a href="#">Terms and Conditions</a></label><br><br>
<input type ="submit" class="btn-danger w-50" >

<br><br>
   
     </form> 
	 
	 </div>
	 </div>
<div class="col-md-2"></div>	
	
	
</div>	
</div>	
<br><br>



	

  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>