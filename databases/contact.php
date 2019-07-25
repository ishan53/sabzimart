<?php  
 require('db_connect.php');
if (isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['email']) and isset($_POST['country'])and isset($_POST['matter'])){
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$matter = $_POST['matter'];
	
	$sql = "INSERT INTO customer_query (fname,lname,email,co,matter)
values ('$fname','$lname', '$email', '$country','$matter')";
if ($connection->query($sql)){
echo "<script type=\"text/javascript\">window.alert('Your Querry is submitted successfuly. We will shortly get back to you. Browse Our Site');
window.location.href = '../HTML files/project.html';</script>"; 
}
else{
echo "Error: ". $sql ."
". $connection->error;
}
$connection->close();
}
?>