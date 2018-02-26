<?php

require_once("checkUserLoginStatus.php");
if(!$user_ok) {
    header("location: $siteAddress/loginpage.php");
    exit();
}

//profile dp diplay
if($user_ok)
{
    
$sql="SELECT url FROM  profile where userName='$log_username'";
$var=mysqli_query($connect_db,$sql);
$imageArray = "";
$rows=mysqli_fetch_array($var);
      
    $image_path = $rows['url'];    
    $imageArray .= "<img src=".$image_path." height=100>";

}

if(isset($_FILES['filefield']['tmp_name'])){
  

    $name=$_FILES['filefield']['name'];
    $name = preg_replace('#[ ]#i', '_', $name);

  $sql = "SELECT id FROM profile WHERE  userName='$log_username' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
  $l_check = mysqli_num_rows($query);
   if ($l_check > 0){ 
        $sql="update profile set url='profileimg/$name' , lastUpload=now() where userName='$log_username'";
        $query = mysqli_query($connect_db, $sql);
        $uid = mysqli_insert_id($connect_db);
        // echo "You Have Already Liked This Image.";
        // echo trim(ob_get_clean());
     }  else if ($_FILES['filefield']['tmp_name'] != "") {
        //  $newname = "give_some_unique_name.jpg";
    $query = "INSERT INTO profile(url,userName,lastUpload) values('profileimg/$name','$log_username',now())";
    mysqli_query($connect_db,$query) or die(mysqli_error($connect_db));
    move_uploaded_file($_FILES['filefield']['tmp_name'], "profileimg/$name");
       header("location: $siteAddress");
    }
   // exit();
  }

//end 
$imageList = "";
if(isset($_GET['u'])) {
    
   $username=$log_username;
  $username = $_GET['u'];

   $isOwner = false;
   if($log_username == $username) {
    $isOwner = true;
   } else {
    $isOwner = false;
   }




   //WRITE SOME CODE
   $sql = "SELECT userName FROM smc_login WHERE userName='$username'";
   $query = mysqli_query($connect_db, $sql);
   $sql_num_rows = mysqli_num_rows($query);


    // CHECK WHETHER USER EXIST IN OUR DATABASE OR NOT, IF NOT EXIT.
    //CODE


   // Init imagelist here
    // -----------------
    if(isset($_GET['filter']) && $_GET['filter']=="uploaded") {
        // 1)WRITE IMAGE FETCH QUERY HERE
        $select_path="SELECT * FROM images WHERE userName='$username'";
        $var=mysqli_query($connect_db,$select_path);
        
        // 2)STORE IMAGES IN A VARIABLE USING LOOP
        $imageList = "";
        while($row=mysqli_fetch_array($var))
        {
                $image_name=$row["name"];
                $image_path=$row["image"];  
                $image_id = $row["id"];
                $imageList .= "<img src=".$image_path." height=100><br>";
        }

    } else if(isset($_GET['filter']) && $_GET['filter']=="downloaded") {

        $select_path = "SELECT images.image FROM images JOIN download ON images.id=download.imageId WHERE download.userName='$log_username'";

        $var=mysqli_query($connect_db,$select_path);
        $sql_num_rows = mysqli_num_rows($var);

        if($sql_num_rows>0) {

            echo "Working";
        }
        $imageList = "";
        while($row=mysqli_fetch_array($var))
        {
                // $image_name=$row["name"];
                $image_path=$row["image"];  
                // $image_id = $row["imageId"];
                $imageList .= "<img src=".$image_path." height=100>";
        }


    } else if(isset($_GET['filter']) && $_GET['filter']=="purchase") {
        $select_path="SELECT * FROM buy WHERE userName='$username' ";

        $var=mysqli_query($connect_db,$select_path);
        
        $imageList = "";
        while($row=mysqli_fetch_array($var))
        {
                $image_name=$row["name"];
                $image_path=$row["image"];  
                $image_id = $row["id"];
                $imageList .= "<img src=".$image_path." height=100>";
        }

    } else {
        // exit();
        // Select images from 'images' table


        $select_path="SELECT * FROM images  WHERE userName='$username' ";

        $var = mysqli_query($connect_db,$select_path);
        
        $imageList = "";
        while($row=mysqli_fetch_array($var))
        {
                $image_name=$row["name"];
                $image_path=$row["image"];  
                $image_id = $row["id"];
                $imageList .= "<img src=".$image_path." height=100>";
        }

        // Select images from 'download' table;
        // $select_path = "SELECT images.image FROM images JOIN download ON images.id=download.imageId WHERE download.userName='$log_username'
        // ";
        

        // $var=mysqli_query($connect_db,$select_path);
        // $sql_num_rows = mysqli_num_rows($var);

        // if($sql_num_rows>0) {

        //     echo "Working";
        // }
        // $imageList = "";
        // while($row=mysqli_fetch_array($var))
        // {
        //         // $image_name=$row["name"];
        //         $image_path=$row["image"];  
        //         // $image_id = $row["imageId"];
        //         $imageList .= "<img src=".$image_path." height=100>";
        // }

        // Select images from 'buy' table;




    }


} else {
    echo "Invalid GET variable";
    exit();
}



?>
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
    <style type="text/css">


* {
    box-sizing: border-box;
}

.row {
    margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
/*.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}*/
</style>
    <body>
    <!--navbar-->
    <?php include_once "header.php"; ?>
    <!--end of navbar-->
    <br>
    <br>
    <br>
    <br>
       <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">


            <form action="" method="POST"  enctype='multipart/form-data'>
 
   
<input type='file'  id="filefield" name='filefield' class="form-control"  />

<input type="submit" value="Upload" name="but_upload" id="submitbtn" ><br><br>

<div class="display-downloaded-images">
<?php echo $imageArray; ?>
</div>    
</form>    
<!-- 
 -->       <!--  <center><img  class="img-fluid"  src="images/men.jpg" style="border-radius:50%;width:150px;height:150px;"></center> -->
          </div>
       </div>
        <center><h4 align="center"><?php if ($user_ok){
          echo $log_username;
        } ?></h4>
      
        <a href="#"><i class="fa fa-facebook-f fa-2x" style="padding-right: 5px;"></i></a>
          
       <a href=""> <i class="fa fa-twitter fa-2x" style="padding-right: 5px;"></i></a>
    
       <a href=""> <i class="fa fa-instagram fa-2x"></i></center><br></a>
        <hr width="700px;" color="green">

<a href="u-upload.php">upload images</a>

 <p>Upload Your Profile Picture</p>
<?php
    if($isOwner) {
        echo '<input type="file"  id="filef" accept="image/*"><br><br>'; 
         }
?>
<?php
    if($isOwner) {
      
        echo '<a href="$siteAddress/profile.php?u='.$username.'"><button>Show all category Images</button></a>';
        echo '<a href="$siteAddress/profile.php?u='.$username.'&filter=downloaded"><button>Show downloaded Images</button></a>';
        echo '<a href="$siteAddress/profile.php?u='.$username.'&filter=purchase"><button>Show Purchased Images</button></a>';
         }
?>

    

<a href="<?php echo $siteAddress ?>/profile.php?u=<?php echo $username; ?>&filter=uploaded"><button>Show Uploaded Images</button></a>
<br><br>
<a href="logout.php"><input type="button" id="logout" value="LogOut"/></a>


<!-- TODO: REMOVE ONCLICK EVENTS -->
<!-- <div class="display-uploaded-images">dd</div> -->

<div class="display-uploaded-images">
 
    <?php echo $imageList; ?>


</div>


<!-- scripts -->
<?php include_once("script.php"); ?>
<script>

  </script>
</body>
</html>