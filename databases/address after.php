<?php  
 require('db_connect.php');
 
 if (isset($_POST['product_id']) 
	 and isset($_POST['quantity']) 
	and isset($_POST['first_name']) and isset($_POST['last_name']) 
	and isset($_POST['email_id']) and isset($_POST['country']) 
	and isset($_POST['state']) and isset($_POST['city']) 
	and isset($_POST['street']) and isset($_POST['local']) and isset($_POST['landmark'])) 
	{
		
		$productid = $_POST['product_id'];
		$quantity = $_POST['quantity'];
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$emailid = $_POST['email_id'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$street = $_POST['street'];
		$local = $_POST['local'];
		$landmark = $_POST['landmark'];
		
		$sql = "INSERT INTO orders (pid,no,fname,lname,eid,co,st,ci,str,lo,lm)
values ('$productid','$quantity', '$firstname','$lastname','$emailid','$country','$state','$city','$street','$local','$landmark')";
if ($connection->query($sql)){
echo "<script type=\"text/javascript\">window.alert('Order Placed Successfully. Continue Shopping.');
window.location.href = '../HTML files/project.html';</script>"; 
}
else{
echo "<script type=\"text/javascript\">window.alert('Try again') ". $sql ."
". $connection->error;
}
$connection->close();
}
?>