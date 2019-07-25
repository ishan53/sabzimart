<?php  
 require('db_connect.php');

if (isset($_POST['user_name']) and isset($_POST['user_email']) and isset($_POST['user_pass']) and isset($_POST['user_mob'])){
	
// Assigning POST values to variables.
$username = $_POST['user_name'];
$useremail = $_POST['user_email'];
$userpass = $_POST['user_pass'];
$usermob = $_POST['user_mob'];
$sql = "INSERT INTO user_info (username, useremail, userpass, usermob)
values ('$username','$useremail', '$userpass', '$usermob')";
if ($connection->query($sql)){
	echo "<script type=\"text/javascript\">window.alert('Congrats! Registration Successul. Click OK to login');
window.location.href = '../databases/login.php';</script>"; 
}
else{
echo "Error: ". $sql ."
". $connection->error;
}
$connection->close();
}
?>