<?php
include_once("checkUserLoginStatus.php");
 //include_once("php_includes/db_connect.php");
// if($user_ok == true){
//  header("location: ".$site_address);
//     exit();
// }
?><?php
// Ajax calls this EMAIL CHECK code to execute
if(isset($_POST["emailcheck"])){
  $email = $_POST['emailcheck'];
  $sql = "SELECT id FROM smc_login WHERE email='$email' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
    $email_check = mysqli_num_rows($query);
    
    if ($email_check < 1) {
      exit();
    } else {
      echo '<strong style="color:#F00;">' . $email . ' is taken</strong>';
      exit();
    }
}
if(isset($_POST["unamecheck"])){
  $uname = $_POST['unamecheck'];

$sql = "SELECT id FROM smc_login WHERE userName='$uname' LIMIT 1";
$query = mysqli_query($connect_db, $sql);
$uname_check = mysqli_num_rows($query);

if($uname_check < 1)
{
  exit();
}else {
  echo '<strong style="color:#F00;">' . $uname . ' is taken</strong>';
  exit();
 }
}      
?><?php
// Ajax calls this REGISTRATION code to execute
if(isset($_POST["uname"])){
  // CONNECT TO THE DATABASE
  
  // GATHER THE POSTED DATA INTO LOCAL VARIABLES
    $uname = preg_replace('#[^a-z0-9]#i', '', $_POST['uname']);
  $dname = preg_replace('#[^a-z0-9]#i', '', $_POST['dname']);
   $contact = preg_replace('#[^0-9]#i', '', $_POST['contact']);
    
  $emai = mysqli_real_escape_string($connect_db, $_POST['emai']);
    $pas1 = $_POST['pas1'];
  $pas2 = $_POST['pas2'];
    
  // GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
  // -------------------------------------------
  $sql = "SELECT id FROM smc_login WHERE email='$emai' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
  $e_check = mysqli_num_rows($query);
  // FORM DATA ERROR HANDLING
  if($uname == "" || $dname == "" || $contact == "" ||  $emai == "" ||  $pas1 == "" || $pas2 == ""){
    echo "The form submission is missing values.";
        exit();
  } else if ($e_check > 0){
        echo "That email address is already in use.";
        exit();
  }else if($pas1 != $pas2){
    echo "Password Not Matching";
    exit();
  } else if (strlen($uname) < 3 || strlen($uname) > 16) {
        echo "Username must be between 3 and 16 characters";
        exit();
    } else if (is_numeric($uname[0])) {
        echo 'Username cannot begin with a number';
        exit();
    } else {
  // END FORM DATA ERROR HANDLING
      // Begin Insertion of data into the database
    // Hash the password and apply your own mysterious unique salt
    $mmd5 = md5(md5($pas1));
        // include_once("php_includes/randomStringGen.php");
        function randStrGen($len){
            $result = "";
            $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
            $charArray = str_split($chars);
            for($i = 0; $i < $len; $i++){
                $randItem = array_rand($charArray);
                $result .= "".$charArray[$randItem];
            }
            return $result;
        }
       
    $p_hash = randStrGen(20)."$mmd5".randStrGen(20);
    // Add user info into the database table for the main site table
    $sql = "INSERT INTO `smc_signup` (`userName`, `displayName`,`email`) 
    VALUES ('$uname', '$dname', '$emai')";
    $query = mysqli_query($connect_db, $sql);
    $uid = mysqli_insert_id($connect_db);


    $sql = "INSERT INTO `smc_login` (`userName`, `email`,`pNumber`, `password`, `signe_up_dateTime`, `loginDateTime`, `active`, `ip`) 
    VALUES ('$uname', '$emai', '$contact','$p_hash', now(), now(), '0','$ip');";
    $query = mysqli_query($connect_db, $sql);
    $uid = mysqli_insert_id($connect_db);

    // Email the user their activation link
    // $to = "$e";
    // $from = "auto_responder@yoursitename.com";
    // $subject = 'yoursitename Account Activation';
    // $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>yoursitename Message</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="http://www.yoursitename.com"><img src="http://www.yoursitename.com/images/logo.png" width="36" height="30" alt="yoursitename" style="border:none; float:left;"></a>yoursitename Account Activation</div><div style="padding:24px; font-size:17px;">Hello '.$u.',<br><br>Click the link below to activate your account when ready:<br><br><a href="http://www.yoursitename.com/activation.php?id='.$uid.'&u='.$u.'&e='.$e.'&key='.$p_hash.'">Click here to activate your account now</a><br><br>Login after successful activation using your:<br>* E-mail Address: <b>'.$e.'</b></div></body></html>';
    // $headers = "From: $from\n";
        // $headers .= "MIME-Version: 1.0\n";
        // $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    // //mail($to, $subject, $message, $headers);
    echo "signup_success";
    echo trim(ob_get_clean());
    exit();
  }
  exit();
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
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
 </head>


<br><br><br>
<body class="sab-sell-form-body">
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->
<!-- START OF CONTAINER -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" id="sab-sell-signup">
    <h3>Join the community and start selling.</h3>
<!-- START OF FORM -->
    <form name="signupform" id="signupform" onSubmit="return false;"><i>All the fields are required.</i>

        <div class="form-group sab-form-group">
          <p class="sab-para-text">Please provide your legal name</p>
        <label for="Name"></label>
         <input id="username" type="text" onBlur="checkuname()" onFocus="emptyElement('status')" onKeyUp="restrict('username')"  class="form-control" placeholder=" Enter Username">
        
        </div>
        <span id="unamestatus" ></span>
                <div class="form-group sab-form-group">
                 
                <label for="displayname"></label>
                  <input id="displayname" type="text" onFocus="emptyElement('status')" onKeyUp="restrict('displayname')"  class="form-control" placeholder="Dispay name">
                
                </div>

                <div class="form-group sab-form-group">
                 
                <label for="phoneno"></label>
                  <input id="phoneno" type="number" onFocus="emptyElement('status')"  class="form-control" placeholder="Phone number">
                
                </div>

                 <div class="form-group sab-form-group">
        <label for="email"></label>
        <input class="form-control" placeholder="E-mail address" onBlur="checkemail()" id="email" type="text" onFocus="emptyElement('status')" onKeyUp="restrict('email')">
        </div><span id="emailstatus" ></span>

        <div class="form-group sab-form-group">
        <label for="email"></label>
        <input class="form-control" placeholder="Create password" id="pass1" type="password" onFocus="emptyElement('status')">
        </div>

         <div class="form-group sab-form-group">
        <label for="email"></label>
         <input class="form-control" placeholder="confirm password" id="pass2" type="password" onFocus="emptyElement('status')">
        </div>

       <!--  <p>Passwords must be at least 8 characters long.</p> -->
        <p><input type="checkbox" >&nbsp; I agree to the terms and conditions.</p>
<button class="btn btn-danger btn-block sab-btn" id="signupbtn" onClick="signup()">Create Account </button>

        <p>already have an account <a href="loginpage.php"><span class="text-primary">sign in</span></a></p>
     </form><br>
     <div class="alert alert-danger" role="alert" id="status">
       </div>
    </div>
    <div class="col-md-4">
    </div>

</div>
</div><!-- END OF CONTAINER -->
  <br>  
<!--footer-->


<?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>



  
   <script>
    function restrict(elem){
  var tf = _(elem);
  var rx = new RegExp;
  if(elem == "email"){
    rx = /[' "]/gi;
  } else if(elem == "username"){
    rx = /[^a-z0-9]/gi;
  }else if(elem == "displayname"){
    rx = /[^a-z0-9_.-]/gi;
    
  }
  tf.value = tf.value.replace(rx, "");
}
    function emptyElement(x){
  _(x).innerHTML = "";
  var status = _("status");
  status.style.display = "none";
}
function checkemail(){
  var u = _("email").value;
  if(u != ""){
    _("emailstatus").innerHTML = 'checking ...';
    var ajax = ajaxObj("POST", "sellform.php");
        ajax.onreadystatechange = function() {
          if(ajaxReturn(ajax) == true) {
              _("emailstatus").innerHTML = ajax.responseText;
          }
        }
        ajax.send("emailcheck="+u);
  }
}

function checkuname(){
  var t = _("username").value;
  if(t != "")
  {
    _("unamestatus").innerHtml = 'checking...';
    var ajax = ajaxObj("POST", "sellform.php");
    ajax.onreadystatechange = function()
  {
    if(ajaxReturn(ajax)== true){
      _("unamestatus").innerHTML = ajax.responseText;
    }
  }
    ajax.send("unamecheck="+t);
  }
  
}

function signup(){
  var uname = _("username").value;
    var dname = _("displayname").value;
    var contact = _("phoneno").value;

  var emai = _("email").value;
    var pas1 = _("pass1").value;
    var pas2 = _("pass2").value;
    
    var status = _("status");
  
  _("username").style.border = "1px solid #ccc";
  _("displayname").style.border = "1px solid #ccc";
   _("phoneno").style.border = "1px solid #ccc";
    
  _("email").style.border = "1px solid #ccc";

  _("pass1").style.border = "1px solid #ccc";
  _("pass2").style.border = "1px solid #ccc";

    
  if (uname == "") {
    _("username").style.border = "2px solid #f60";
  }
    if (dname == "") {
    _("displayname").style.border = "2px solid #f60";
  }
   if (contact == "") {
    _("phoneno").style.border = "2px solid #f60";
  }
  if (emai == "") {
    _("email").style.border = "2px solid #f60";
  }
  if (pas1 == "") {
    _("pass1").style.border = "2px solid #f60";
  }
    if (pas2 == "") {
    _("pass2").style.border = "2px solid #f60";
  }

  if (pas1 != pas2){
    status.innerHTML = "Password not matching please enter valid password";
    status.style.display = "block";
         exit();
     }
     if(pas1.length < 8){
         status.innerHTML ="Password lenghth must have more than eight Characters";
         status.style.display ="block";
         exit();
     }
  if(uname == "" || dname == "" || contact == "" || emai == "" || pas1 == "" || pas2 == "" ){
    status.innerHTML = "Fill out all of the form data";
    status.style.display = "block";
  } else {
    _("signupbtn").style.display = "none";
    status.innerHTML = 'please wait ...';
    var ajax = ajaxObj("POST", "sellform.php");
        ajax.onreadystatechange = function() {
          if(ajaxReturn(ajax) == true) {
              if(ajax.responseText != "signup_success"){
          status.innerHTML = ajax.responseText;
          status.style.display = "block";
          _("signupbtn").style.display = "block";
        } else {
          alert("Sign Up successful! You may Login now.");
          window.location = "loginpage.php";
        
          }
        }
      }
        ajax.send("uname="+uname+"&dname="+dname+"&contact="+contact+"&emai="+emai+"&pas1="+pas1+"&pas2="+pas2);
  
  }
}
    </script>
    
  </body>
</html>