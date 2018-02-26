<?php
session_start();
include_once("php_includes/db_connect.php");
// Files that inculde this file at the very top would NOT require 
// connection to database or session_start(), be careful.
// Initialize some vars
$user_ok = false;
$log_id = "";
$log_username = "";
$log_password = "";

$user_ok = "";
$siteName = "sellmyclick";
// User Verify function
function evalLoggedUser($connect_db, $id,$u){
	$sql = "SELECT id FROM smc_login WHERE id='$id' AND userName='$u' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
    $numrows = mysqli_num_rows($query);
	if($numrows > 0){
		return true;
	} else {
		return false;
	}
}
// FIXME: This is very important for security reasons
// Use bcrypt method to have 'remember me' option.
if(isset($_SESSION["id"]) && isset($_SESSION["username"]) && isset($_SESSION["email"])) {
	$log_id = preg_replace('#[^0-9]#', '', $_SESSION['id']);
	$log_username = preg_replace('#[^a-zA-Z0-9_-]#i', '', $_SESSION['username']);
	$log_email = mysqli_real_escape_string($connect_db, $_SESSION['email']);

	
	// Verify the user
	$user_ok = evalLoggedUser($connect_db,$log_id,$log_username);
} else if(isset($_COOKIE["id"]) && isset($_COOKIE["username"]) && isset($_COOKIE["email"])){
	$log_id = preg_replace('#[^0-9]#', '', $_COOKIE['id']);
    $log_username = preg_replace('#[^a-zA-Z0-9_-]#i', '', $_COOKIE['username']);
	$log_email = mysqli_real_escape_string($connect_db, $_COOKIE['email']);
	// Verify the user
	$user_ok = evalLoggedUser($connect_db,$log_id,$log_username);	
	if($user_ok == true){
		// Update their loginDateTime field
		$sql = "UPDATE smc_login SET loginDateTime=now() WHERE id='$log_id' LIMIT 1";
		$query = mysqli_query($connect_db, $sql);
		
		$_SESSION['id'] = $log_id;
		$_SESSION['username'] = $log_username;
		$_SESSION['email'] = $log_email;
	}
}
?>