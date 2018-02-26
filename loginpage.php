<?php
include_once("checkUserLoginStatus.php");
if($user_ok) {
    header("location: $siteAddress/profile.php?u=$log_username");
    exit();
}
?>
<?php
// Ajax calls this EMAIL CHECK code to execute
// if(isset($_POST["emailcheck"])){
// 	$email = $_POST['emailcheck'];
// 	$sql = "SELECT id FROM login_info WHERE email='$email' LIMIT 1";
//     $query = mysqli_query($connect_db, $sql);
//     $email_check = mysqli_num_rows($query);
    
//     if ($email_check < 1) {
// 	    exit();
//     } else {
// 	    echo '<strong style="color:#F00;">' . $email . ' is taken</strong>';
// 	    exit();
//     }
// }

// if(isset($_POST["unamecheck"])){
// 	$uname = $_POST['unamecheck'];

// $sql = "SELECT id FROM login_info WHERE userName='$uname' LIMIT 1";
// $query = mysqli_query($connect_db, $sql);
// $uname_check = mysqli_num_rows($query);

// if($uname_check < 1)
// {
//   exit();
// }else {
//   echo '<strong style="color:#F00;">' . $uname . ' is taken</strong>';
//   exit();
//  }
// } 
?>
<?php
// Ajax calls this REGISTRATION code to execute
if(isset($_POST["uname"])){
	
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES
	// $uname = preg_replace('#[^a-z0-9@.-_]#i', '', $_POST['uname']);
	$uname = mysqli_real_escape_string($connect_db, $_POST['uname']);
    $passw = $_POST['passw'];
    
    if($uname == "" || $passw == ""){
        echo "The form submission is missing values.";
        echo trim(ob_get_clean());
		exit();
	}

	// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	// -------------------------------------------
	$sql = "SELECT id, userName, password, email FROM smc_login WHERE userName='$uname' OR email='$uname' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
    $sql_num_rows = mysqli_num_rows($query);

    if($sql_num_rows>0) {
        $row = mysqli_fetch_row($query);
        $db_pass_str = substr($row[2], 20, 32);
    } else {
		echo "Incorrect Username / E mail";
        echo trim(ob_get_clean());
        exit();
	}

    $p_comp = md5(md5($passw));

    if($p_comp == $db_pass_str) {

		$userid = $row[0];
		$username = $row[1];
		$email = $row[3];
		$_SESSION['id'] = $userid;
		$_SESSION['username'] = $username;
		// $_SESSION['password'] = $row[2];
		$_SESSION['email'] = $email;
		
		
		setcookie("id", $userid, strtotime( '+30 days' ), "/", "", "", TRUE);
		setcookie("username", $username, strtotime( '+30 days' ), "/", "", "", TRUE);
		// setcookie("pass", $row[2], strtotime( '+30 days' ), "/", "", "", TRUE);
		setcookie("email", $email, strtotime( '+30 days' ), "/", "", "", TRUE);
		
		
		// UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
		$sql = "UPDATE smc_login SET ip='$ip', loginDateTime=now() WHERE userName='$username' LIMIT 1";
		$query = mysqli_query($connect_db, $sql);
		//header("location: $site_address/DCentMASS_master/user/$usertype/$username");
		echo "login_success|$username";
		exit();
    } else {
        echo "Incorrect password.";
        echo trim(ob_get_clean());
        exit();
    }
  
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
    
</head>
 <body class="sab-sell-form-body1">
  <!--navbar-->
  <?php include_once "header.php"; ?>

      <!--login-->
      <div class="container-fluid">
		<div class="row">
    	 <div class="col-md-4">
    	 </div>
    	 <div class="col-md-4" id="sab-login1">
    	 <center><h2>Login Here</h2></center>
   			
 	 <form name="loginform" id="loginform" onSubmit="return false;" >
  	<div class="form-group sab-form-group1">
  		<label for="username"></label>
    	<input id="username" type="text" onFocus="emptyElement('status')" class="form-control" placeholder="Please Enter User name" >
	</div>

   <div class="form-group sab-form-group1">
   	<label for="password"></label>
    <input class="form-control" placeholder="Enter password" id="pass" type="password" onFocus="emptyElement('status')"  >
    </div>

   

    <button class="btn btn-danger btn-lg  text-white btn-block sab-btn1" id="loginbtn" onClick="login()"> Login </button>
    <center><a href="#"><p class="sab-bottom-text1" style=" ">forgot your password?</p></a></center>
     <center><a href="sellform.php"><p class="sab-bottom-text1">Create an account</p></a></center>
  </form>
</div>
     <div class="col-md-4">
     </div>

  <div class="alert alert-danger" role="alert" id="status" style="display:none; width:300px;"></div>

</div>
</div>
<br><br>
<!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
</body>
  


					   
 								   
 

<!-- scripts -->
<?php include_once("script.php"); ?>

  <script>
  

    function emptyElement(x){
	_(x).innerHTML = "";
	var status = _("status");
	status.style.display = "none";
}



function login(){
    var uname = _("username").value;
	var passw = _("pass").value;
	
    var status = _("status");
	
	_("username").style.border = "1px solid #ccc";

	_("pass").style.border = "1px solid #ccc";
    
	if (uname == "") {
		_("username").style.border = "2px solid #f60";
	}
    if (passw == "") {
		_("pass").style.border = "2px solid #f60";
	}
	

	if( uname == "" || passw == ""){
		status.innerHTML = "Fill out all of the form data";
		status.style.display = "block";
	} else {
		_("loginbtn").style.display = "none";
		status.innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "loginpage.php");
        ajax.onreadystatechange = function() {			
	        if(ajaxReturn(ajax) == true) {
				var split_response = ajax.responseText.split("|");
				
	            if(split_response[0] != "login_success"){
					status.innerHTML = ajax.responseText;
					status.style.display = "block";
					_("loginbtn").style.display = "block";
				} else {
					// alert("Successfully Loged In.");
					// window.location = "login.php";
					window.location = "<?php echo $siteAddress ?>/profile.php?u="+split_response[1];

					
					//_("signupform").innerHTML = "OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> in a moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.";
				}
	        }
        }
        ajax.send("uname="+uname+"&passw="+passw);
	}
}
    </script>
</body>
</html>