<?php

include_once("checkUserLoginStatus.php");
if(!$user_ok) {
    header("location: $siteAddress/loginpage.php");
    exit();
}




if(isset($_FILES['filefield']['tmp_name'])){

	

    $name=$_FILES['filefield']['name'];
    $name = preg_replace('#[ ]#i', '_', $name);
    $title = $_POST["title"];
    $imgcategory =$_POST["imgcategory"];
    $description = $_POST["description"];



if ($_FILES['filefield']['tmp_name'] != "") {
//  $newname = "give_some_unique_name.jpg";
 $query = "INSERT INTO images(name,userName,imageCategory,description,image,date_time) values('$title','$log_username','$imgcategory','$description','upload/$name',now())";

 mysqli_query($connect_db,$query) or die(mysqli_error($connect_db));
 move_uploaded_file($_FILES['filefield']['tmp_name'], "upload/$name");
 header("location: $siteAddress/thank-you.php");
 
}
exit();
}

?>
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

    <br><br>
<div class="container-fluid m-0 p-0" >
<br>
<h1 class= "text-center">Upload Your Image</h1><br>
<div class="row">

<div class="col-md-2"></div>
<div class="col-md-8 container card" style="background-image: url('images/upload.jpeg'); width:100%;height:auto;">
	
	
		<br>
				<div class="title">
					<h3 class="text-center">Please Fill In The Details Below</h3>
					<hr>


<form class="text-center" method="post" action="u-upload.php" enctype='multipart/form-data' onsubmit="return checkCheckBox(this)">

<label>Enter Image Name </label><br>
 <input id="title" type="text" name="title" size="30" value="" class="w-50 stsf-b" ><br><br>


<label>Write Image Description</label><br>
<input id="description" type="text" name="description" size="70"  ><br><br>




<label>Select Image Category</label><br>
<select name="imgcategory" id="imgcategory" class="w-50 stsf-b" >
<option value="Education">Education</option>
<option value="Technology">Technology</option>
<option value="Architecture">Architecture</option>
<option value="Nature">Nature</option>
<option value="Interior">Interior</option>
<option value="Adventure">Adventure</option>
<option value="Monuments">Monuments</option>
<option value="Photgraphy">Photgraphy</option>
</select><br><br>
  
<label>Write additional tags</label><br>
  <input type="text" name="imageName" value="" class="w-50 stsf-b" placeholder="Write tags here..." ><br><br>

<label class="btn btn-info " for="upload-file-selector">



<label>Select Image To Upload</label>
 <input type='file'  id="filefield" name='filefield' class="form-control"/>
</label><br>
<br>
    You can upload photos that are .JPEG, .JPG, or .PNG.<br>Max file size 25mb        <br>
	

     <!--  <label><input type="checkbox" value="">&nbsp I Agree <a href="#">Terms and Conditions</a></label><br><br>
 -->

<b>By submitting, I agree that all info entered was done accurately & truthfully.</b><br />
<input type="checkbox" value="0" name="agree"/>I Agree <a href="#">Terms and Conditions</a> 



<br>


<a href="<?php echo $siteAddress ?>/thank-you.php"><button>submit</button></a>

<!-- <input type='submit' value='Save name' name='but_upload' id="submitbtn" ></a>
 -->    
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
  <script>
 function checkCheckBox(f){
if (f.agree.checked == false )
{
alert('Please check the box to continue.');
return false;
}else
return true;
}
</script>
  
</body>
</html>
