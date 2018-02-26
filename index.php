

<?php
include_once("checkUserLoginStatus.php");

?>
<?php



if(isset($_POST["elem"])){
    // if(isset($_SESSION["userName"])){
    //         $userName = $_SESSION["userName"];
    // }else {
    //     echo "6578";
    // }
    $userName = "$log_username";
    $elem = $_POST['elem'];
  // -------------------------------------------
  $sql = "SELECT id FROM like_dislike WHERE imageId='$elem' AND userName='$userName' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
  $l_check = mysqli_num_rows($query);
   if ($l_check > 0){
        $sql = "DELETE FROM `like_dislike` WHERE imageId='$elem' AND userName='$userName' ";
        $query = mysqli_query($connect_db, $sql);

    $uid = mysqli_insert_id($connect_db);
        // echo "You Have Already Liked This Image.";
        // echo trim(ob_get_clean());
    exit();
  } 
       
    $sql = "INSERT INTO `like_dislike` (`imageId`,`userName`,`date_time`) VALUES ('$elem','$userName',now())";
    $query = mysqli_query($connect_db, $sql);
    $uid = mysqli_insert_id($connect_db);



    echo "like_success";
    echo trim(ob_get_clean());
    exit();
  }

    // <-------------to store downloaded images entry in databse------------>
    if(isset($_POST["downloadImage"])){
        // if(isset($_SESSION["userName"])){
        //         $userName = $_SESSION["userName"];
        // }else {
        //     echo "6578";
        // }
        $userName = "$log_username";
        $elem = $_POST['downloadImage'];
        // -------------------------------------------
        //$sql = "SELECT id FROM like_dislike WHERE imageId='$elem' AND userName='$userName' LIMIT 1";
        // $query = mysqli_query($connect_db, $sql);
        // $l_check = mysqli_num_rows($query);
        //  if ($l_check > 0){
        //     $sql = "DELETE FROM `like_dislike` WHERE imageId='$elem' AND userName='$userName' ";
        //     $query = mysqli_query($connect_db, $sql);
    
        // $uid = mysqli_insert_id($connect_db);
        //     // echo "You Have Already Liked This Image.";
        //     // echo trim(ob_get_clean());
        //     exit();
         
           
            $sql = "INSERT INTO `download` (`imageId`,`userName`,`date_time`) VALUES ('$elem','$userName',now())";
            $query = mysqli_query($connect_db, $sql);
            $uid = mysqli_insert_id($connect_db);
    
            echo "download_success";
            echo trim(ob_get_clean());
            exit();
        }


    //  <------- by default below code display only uploded images -- need to sho oly recently uploaded----->
         $imageList = "";
        $select_path="SELECT * FROM images ORDER BY date_time DESC LIMIT 12";

        $var = mysqli_query($connect_db,$select_path);
        
        $imageList = "";
        while($row=mysqli_fetch_array($var))
        {
                $image_name=$row["name"];
                $image_path=$row["image"];  
                $image_id = $row["id"];
                $imageList .= '<div class="hovereffect">
        <img class="img-responsive" src="'.$image_path.'"  style="width: 240px;">
            <div class="overlay">
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart" onclick="like_event(\''.$image_id.'\')" id="$image_id"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-download" onclick="download_event(\''.$image_id.'\')" id="$image_id" id="download" href="'.$image_path.'" download="'.$image_path.'"></span>
                    </a>
                </p>  
            </div>
    </div>';




                }
// <--------below code displays recently uploded images---------->

if(isset($_GET['filter']) &&  $_GET['filter']=="recentuplod") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
   $select_path="SELECT * FROM images ORDER BY date_time DESC LIMIT 12";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
                $imageList .= '<div class="hovereffect">
        <img class="img-responsive" src="'.$image_path.'"  style="width: 240px;">
            <div class="overlay">
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart" onclick="like_event(\''.$image_id.'\')" id="$image_id"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-download" onclick="download_event(\''.$image_id.'\')" id="$image_id" id="download" href="'.$image_path.'" download="'.$image_path.'"></span>
                    </a>
                </p>  
            </div>
    </div>';
    }

}


// <--------below code displays most  liked images---------->
if(isset($_GET['filter']) && $_GET['filter']=="liked")
{
    $select_path = "SELECT images.image FROM images JOIN like_dislike ON images.id=like_dislike.imageId WHERE imageId>= 3";

    $var=mysqli_query($connect_db,$select_path);
    $sql_num_rows = mysqli_num_rows($var);

    if($sql_num_rows>0) {

      
    }
    echo "fineHere";
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            // $image_name=$row["name"];
            $image_path=$row["image"];  
            // $image_id = $row["imageId"];
              $imageList .= '<div class="hovereffect">
        <img class="img-responsive" src="'.$image_path.'"  style="width: 240px;">
            <div class="overlay">
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart" onclick="like_event(\''.$image_id.'\')" id="$image_id"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-download" onclick="download_event(\''.$image_id.'\')" id="$image_id" id="download" href="'.$image_path.'" download="'.$image_path.'"></span>
                    </a>
                </p>  
            </div>
    </div>';
    }
}

//<--------below code dispays top uploded images--->
// writecode



// <----- below code is to display education category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="education") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Education'";
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

}

// <----- below code is to display interior category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="interior") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Interior'";
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

}
// <----- below code is to display architecture category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="architec") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Architecture'";
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

}
// <----- below code is to display adventure category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="adventure") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Adventure'";
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

}
// <----- below code is to display nature category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="nature") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Nature'";
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

}
// <----- below code is to display technology  category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="tech") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Technology'";
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

}
// <----- below code is to display monuments category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="monuments") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Monuments'";
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

}
// <----- below code is to display photography category uploads--->
if(isset($_GET['filter']) && $_GET['filter']=="photography") {
    
    // 1)WRITE IMAGE FETCH QUERY HERE
    $select_path="SELECT * FROM images  WHERE imageCategory='Photgraphy'";
    $var=mysqli_query($connect_db,$select_path);
    
    // 2)STORE IMAGES IN A VARIABLE USING LOOP
    $imageList = "";
    while($row=mysqli_fetch_array($var))
    {
            $image_name=$row["name"];
            $image_path=$row["image"];  
            $image_id = $row["id"];
            $imageList .= '<img src="'.$image_path.'" height=100><br>';
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>SMC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
      <link rel="stylesheet" href="css/animate.css">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
    <style type="text/css">
      .hovereffect {
    margin-left: 20px;
    margin-top: 20px;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
}
.hovereffect .overlay {
    width: 100%;
    position: absolute;
    overflow: hidden;
    left: 0;
  top: auto;
  bottom: 0;
  padding: 0em;
  height: 2em;
  background: #79FAC4;
  color: #3c4a50;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
  

}

.hovereffect img {
    display: block;
    position: relative;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

.hovereffect:hover img {
-webkit-transform: translate3d(0,-10%,0);
  transform: translate3d(0,-10%,0);
}


.hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
  color: #fff;
  border: 0px solid #fff;
  margin: 20px 0 0 0;
  background-color: transparent;
}
.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}


.hovereffect p.icon-links a {
  float: center;
  color: #3c4a50;
  font-size: 1.1em;
}

.hovereffect:hover p.icon-links a:hover,
.hovereffect:hover p.icon-links a:focus {
  color: #252d31;
}

.hovereffect h2,
.hovereffect p.icon-links a {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(0,200%,0);
  transform: translate3d(0,200%,0);
  visibility: visible;
}

.hovereffect p.icon-links a span:before {
  display: inline-block;
  padding: 8px 20px;
  speak: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


.hovereffect:hover .overlay,
.hovereffect:hover h2,
.hovereffect:hover p.icon-links a {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect:hover h2 {
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}

.hovereffect:hover p.icon-links a:nth-child(3) {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

.hovereffect:hover p.icon-links a:nth-child(2) {
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}

.hovereffect:hover p.icon-links a:first-child {
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}

    </style>

  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">

  <!--navbar-->

  <?php include_once "header.php";?>
  <!--end of navbar-->


<div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/sumaiya/snap.png" alt="First slide" style="height: 100%">
                 
        </div> <!-- close carousel-item 1 -->
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <img class="d-block w-100" src="images/sumaiya/edit.png" alt="Second slide">
         
        </div> <!-- close carousel-item 2 -->
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <img class="d-block w-100" src="images/sumaiya/earn.png" alt="Third slide">
       
        </div> <!-- close carousel-item 3 -->
      </div> <!-- close carousel-inner -->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

    </div> <!-- close carousel -->


<!-- <div class="container-fluid">
  
</div> -->
<div id="section1" class="container-fluid section_1">
     <div aria-label="breadcrumb">
  <ol class="breadcrumb">
    <h5>Have a look now!</h5>&nbsp;&nbsp;
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $siteAddress ?>/index.php?&filter=recentuplod">Recent Images</a></li>
    <li class="breadcrumb-item"><a href="<?php echo $siteAddress ?>/index.php?&filter=liked">Most liked</a></li>
    <li class="breadcrumb-item"><a href="<?php echo $siteAddress ?>/index.php?&filter=topup">Top uploads</a></li>
  </ol>

  
</div>

    <div class="display-uploaded-images">
      <div class="row photos">

       <!--  <div class="col-md-2">
 -->
  <!--   <div class="hovereffect"> -->

       <?php echo $imageList; ?> 

        <!-- <img class="img-responsive" src="images/new/2.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="image2desc.php">
                        <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div>
</div>
        <div class="col-md-2">
   <div class="hovereffect">
        <img class="img-responsive" src="images/new/3.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div>
         </div>
        <div class="col-md-2">
   <div class="hovereffect">
        <img class="img-responsive" src="images/new/16.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div>
         </div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/4.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/5.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/6.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div></div>
      </div><br>
      <div class="row photos">
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/7.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-download"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/8.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/9.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                       <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/10.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                     <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/11.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div>
        <div class="col-md-2">   <div class="hovereffect">
        <img class="img-responsive" src="images/new/15.jpeg" alt="" style="width: 213px;">
            <div class="overlay">
               
                <p class="icon-links">
                    <a href="#">
                        <span class="fa fa-heart"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-share-alt fa-inverse"></span>
                    </a>
                    <a href="#">
                       <span class="fa fa-usd"></span>
                    </a>
                </p>
            </div>
    </div></div> -->
      </div>
       <a href="imagegrids.php" ><button class="btn btn-sm" role="button">view more</button></a>

    </div>
    </div>

 <div id="section4" class="container-fluid section_2">
<h5>Our Popular Categories</h5>
<div class="row popcat">
  <div class="col-md-3">
      <div class="hovereffect_s">
    <img src="images/sumaiya/Education.png">
    <div class="overlay_s">
       <h2>Education</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
  </div>
</div>
</div>


  <div class="col-md-3">
      <div class="hovereffect_s">
    <img src="images/sumaiya/technology.png">
            <div class="overlay_s">
           <h2>Technology</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
      <div class="hovereffect_s">
    <img src="images/sumaiya/architecture.png" >
            <div class="overlay_s">
           <h2>Architecture</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect_s">
    <img src="images/sumaiya/nature.png">
        <div class="overlay_s">
           <h2>NATURE</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
</div>
</div>

<br>
<div class="row popcat">
  <div class="col-md-3">
<div class="hovereffect_s">
    <img src="images/sumaiya/interior.png" >
          <div class="overlay_s">
           <h2>Interior</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
<div class="hovereffect_s">
    <img src="images/sumaiya/adventure.png" >
          <div class="overlay_s">
           <h2>Adventure</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect_s">
    <img src="images/sumaiya/monuments.png" >
        <div class="overlay_s">
           <h2>Monuments</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="hovereffect_s">
    <img src="images/sumaiya/photography.png" >
        <div class="overlay_s">
           <h2>Photography</h2>
           <a class="info" href="imagegrids.php">VIEW</a>
        </div>
    </div>
  </div>
</div>

</div>






<div id="section4" class="container section_1" style="padding-top:10px;padding-bottom:10px">
<center><h3>Our Top Contributors</h3></center><br>
<div class="row">
  <div class="col-md-3"><center><img src="images/sumaiya/APJ-Abdul-Kalam.jpg" class="rounded-circle" width="150" height="160"><h5>Lorem Ipsum </h5>

   <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    </center></div>
  <div class="col-md-3"><center><img src="images/sumaiya/APJ-Abdul-Kalam.jpg" class="rounded-circle" width="150" height="160"><h5>Lorem Ipsum </h5>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></center></div>
  <div class="col-md-3"><center><img src="images/sumaiya/APJ-Abdul-Kalam.jpg" class="rounded-circle" width="150" height="160"><h5>Lorem Ipsum</h5>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></center></div>
  <div class="col-md-3"><center><img src="images/sumaiya/APJ-Abdul-Kalam.jpg" class="rounded-circle" width="150" height="160"><h5>Lorem Ipsum </h5>
   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></center></div>
</div>
</div><br><br>

    


  <!--footer--> 
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  <script type="text/javascript">
    function like_event(elem)
  {

// _("likebtn").style.display = "none";
//   status.innerHTML = 'please wait ...';
  var ajax = ajaxObj("POST", "index.php");
  ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
          if(ajax.responseText != "like_success"){
              alert(ajax.responseText);
            //   status.style.display = "block";
            //   _("likebtn").style.display = "block";
          } else {
             _(elem).innerHTML = "";
          }
      }
  }
  
  ajax.send("elem="+elem);
}



// $(document).ready(function(){
//     $(".fa-heart").toggle(
//         function(){$(".fa-heart").css({"color": "red"});},
        
//         function(){$("fa-heart").css({"color": "green"});
//     });
// });
// <=------------download_event-->
function download_event(elem)
{
// _("likebtn").style.display = "none";
//   status.innerHTML = 'please wait ...';
  var ajax = ajaxObj("POST", "index.php");
  ajax.onreadystatechange = function() {
      if(ajaxReturn(ajax) == true) {
          if(ajax.responseText != "download _success"){
              alert(ajax.responseText);
            //   status.style.display = "block";
            //   _("likebtn").style.display = "block";
          } else {
            //  _(elem).innerHTML = "<i class=\"material-icons\" style.color=\"#000000\" >favorite</i>";
          }
      }
  }
  ajax.send("downloadImage="+elem);
}
  </script>
  </body>
</html>