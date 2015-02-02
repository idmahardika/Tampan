<?php
/* Paste This File to 
wp-content/plugins/paid-memberships-pro/adminpages/
*/
$servername = "localhost";
$username = "YOURDBUSERNAME";
$password = "YOURDBPASS";
$dbname = "YOUTDBNAME";
//Anyway, this is hardcode. Can you make it as WP function?
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_REQUEST['ola']))
	{
		$ola	= $_REQUEST['ola'];
		$uid	= $_REQUEST['uid'];
$sql = "UPDATE wp_pmpro_memberships_users SET status='$ola' WHERE user_id ='$uid'";

if (mysqli_query($conn, $sql)) {
	//i'm too lazy call WP reference, so please change the domain with your
	header("Location: http://kriuq.com/wp-admin/admin.php?l=&page=pmpro-memberslist");
die();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
