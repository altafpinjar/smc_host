<?php 
/*
Author name: Maktum;

*/

global $siteAddress;
$siteAddress = "https://sellmyclicks.com/";

$connect_db = mysqli_connect("localhost","sellmycl_user","seaGate123!@#","sellmycl_db");

if(mysqli_connect_errno()) {
	// echo mysqli_connect_errno();
	exit();
} else {
	// echo "Successful Connection.";
}



$user_ok = "";
$siteName = "sellmyclick";





// //mysqli_close($connect_db);
// $mysqli_que = new mysqli("localhost", "root", "", "dcentmass");
// if (mysqli_connect_error())
// {
//     //echo mysqli_connect_error(); 
//     exit();
// }


?>