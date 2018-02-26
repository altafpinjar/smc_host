<!--
<nav class="navbar navbar-expand-md navbar-light bg-dark" style="position: fixed; top: 0;">
    <a href="/" class="navbar-brand text-white">Sell My Click</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar5">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar5">
        <ul class="navbar-nav navbar-left" >
            <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle text-white"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 13px;" >
          Browse
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="#">Recent Uploads</a>
          <a class="dropdown-item" href="#">Popular Images</a>
          <a class="dropdown-item" href="#"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-white" href="#">Something else here</a>
        </div>
      </li>
       
    </ul>
       
    
        <form class="mx-2 my-auto d-inline w-50">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search here">
                <span class="input-group-btn">
                <button class="btn btn-outline-secondary" type="button">GO</button>
              </span>
            </div>
        </form>
        <ul class="navbar-nav newClass navbar-right" style="margin-left: 15px; font-family: 'Kavivanar', cursive; font-size: 13px;">
            <li class="nav-item" ">
              <a class="nav-link " href="#">Editorial </a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#">Upload</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link " href="#">Sell</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </div>
</nav>
-->

<?php
include_once("checkUserLoginStatus.php");

?>

<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="z-index: 40; ">
  <a href="index.php" class="navbar-brand text-white" href="#"><!-- <img src="images/click2.png"> -->$ell My Click</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="imagegrids.php">Education</a>
          <a class="dropdown-item" href="imagegrids.php">Science</a>
          <a class="dropdown-item" href="imagegrids.php">Menuments</a>
          <a class="dropdown-item" href="imagegrids.php">Technologies</a>
          <a class="dropdown-item" href="imagegrids.php">Architecture</a>
          <a class="dropdown-item" href="imagegrids.php">Nature</a>
          <a class="dropdown-item" href="imagegrids.php">Animals</a>
          <a class="dropdown-item" href="imagegrids.php">Streets</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <div class="well well-sm">
     <li class="nav-item">
              <a class="nav-link text-white " href="editing.php">Edit for Free</a>
            </li></div>
    </ul>
      <form class="mx-2 my-auto d-inline w-50">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search here">
                <span class="input-group-btn">
                <button class="btn btn-outline-secondary text-white" type="button">GO</button>
              </span>
            </div>
        </form>
    <ul class="navbar-nav newClass navbar-right">
            <li class="nav-item" ">
              <a class="nav-link " href="editorial.php">Editorial </a>
            </li>
           


                 <li class="nav-item dropdown" style="padding-left: 5px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="Upload.php">
        <i class="fa fa-upload" aria-hidden="true"></i> Upload
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="upload.php"><font color="black">Free upload</font></a>
          <a class="dropdown-item" href="sellphotos.php"><font color="black">Sell your photo</font></a>
          
        </div>
      </li>



         
          <?php
if($user_ok){

         echo '<li class="nav-item dropdown " style="padding-left: 5px;">';
        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        </a>';
        echo '<div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">';
         
 echo '<a class="dropdown-item" href="'.$siteAddress.'/profile.php?u='.$log_username.'"><font color="black">Profile</font></a>';
   
         //echo ' <a class="dropdown-item" href="profile.php"><font color="black">Profile</font></a>';
          echo '<a class="dropdown-item" href="logout.php"><font color="black">Logout</font></a>';
          echo ' </div>';
      echo '</li>';
          }
?>
       
               <?php
if(!$user_ok){
  echo '<li class="nav-item">';
              echo '<a class="nav-link" href="loginpage.php"></i>&nbsp;Login or signup</a>';
            echo '</li>';
          }
?>
    
        </ul>
  </div>
</nav>

<!--

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>

<body>
<b><nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-custom text-white">
    <a class="navbar-brand" href="#"><img src="images/a.png" width="50px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
      <div class="dropdown'>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
            <li class="nav-item">
                <div class="justify-content-md-center">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 50em;">
                     
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </li>
          </ul>
             <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="nav-menu">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="nav-menu">Features</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="nav-menu">Pricing</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="nav-menu">Disabled</span></a>
      </li>
    </ul>
    </div>
</nav>
</b>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>

-->