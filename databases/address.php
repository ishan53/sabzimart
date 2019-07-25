<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:project.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/view.css">
<title>Order Details</title>
</head>
<body>

<div class="header">
	<ul>
		<li style="float:left;margin:15px;">
			<img src="../img/yep.jpg" alt="Logo">
		</li>
		<li>
			<input type="text" name="search" placeholder="Search..">
		</li>
		
		 <div class="topnav">
		 <a href="../HTML files/more.html">More</a>
		  <a href="../databases/logout.php">Log Out</a>
		  <a href="project.html">Home</a>
		  <p style="color:white;text-decoration:bold;margin-left:200px;">Hello,<?php echo "  ".htmlspecialchars($_SESSION["username"]);?></p>
  
 
  
</div><br><br>
		
	</ul>
</div>
<div class="dropdown">
  <button class="dropbtn">Citrus
  </button>
  <div class="dropdown-content">
    <a href="#">Oranges</a>
    <a href="#">Grapefruits</a>
    <a href="#">Mandarins</a>
	<a href="#">Limes</a>
  </div>
 </div>
  <div class="dropdown">
  <button class="dropbtn">Stone Fruits
  </button>
  <div class="dropdown-content">
    <a href="#">Nectarines</a>
    <a href="#">Apricots</a>
    <a href="#">Peaches</a>
	<a href="#">Plums</a>
  </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn">Tropical And Exotic
  </button>
  <div class="dropdown-content">
    <a href="#">bananas</a>
    <a href="#">Mangoes</a>
	<a href="item2.html">Carrots</a>
  </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn">Berries
  </button>
  <div class="dropdown-content">
    <a href="#">strawberries</a>
    <a href="#">raspberries</a>
    <a href="#">blueberries</a>
	<a href="#">kiwifruits</a>
	<a href="#">passionfruits</a>
  </div>
</div>
  <div class="dropdown">
  <button class="dropbtn">Leafy Green 
  </button>
  <div class="dropdown-content">
    <a href="#">Lettuce</a>
    <a href="#">Spinach</a>
    <a href="#">Silverbeet</a>
  </div>
</div>
  <div class="dropdown">
  <button class="dropbtn">Cruciferous
  </button>
  <div class="dropdown-content">
    <a href="#">Cabbage</a>
    <a href="item3.html">Cauliflower</a>
    <a href="item1.html">Broccoli</a>
  </div>
</div>
  <div class="dropdown">
  <button class="dropbtn">Marrow
  </button>
  <div class="dropdown-content">
    <a href="#">Pumpkin</a>
    <a href="#">Cucumber</a>
  </div>
</div>
  <div class="dropdown">
  <button class="dropbtn">Roots
  </button>
  <div class="dropdown-content">
    <a href="#">Potato</a>
    <a href="#">Sweet Potato</a>
  </div>
</div>
  <div class="dropdown">
  <button class="dropbtn">Allium
  </button>
  <div class="dropdown-content">
    <a href="#">Onion</a>
    <a href="#">Garlic</a>
    <a href="#">Shallot</a>
  </div>
</div>
  <div class="dropdown">
  <button class="dropbtn">Legumes
  </button>
  <div class="dropdown-content">
    <a href="#">Tofu</a>
    <a href="#">Soyabeans</a>
    <a href="#">Green Peas</a>
	<a href="#">Beans</a>
	<a href="#">Chickpeas</a>
  </div>
</div>
  <a href="#"><button class="dropbtn">All Products</button></a>


<h1>Address Details:</h1>

<div class="container">
  <form action="address after.php" method="post">
<a href="../HTML files/productid.html"><em>For Product id, click here</em></a>
  <div class="row">
      <div class="col-25">
        <label for="item">Product Id</label>
      </div>
      <div class="col-75">
        <input type="text" id="itemno" name="product_id" placeholder="Enter product id">
      </div>
    </div>
  
  <div class="row">
      <div class="col-25">
        <label for="numbers">Quantity:</label>
      </div>
      <div class="col-75">
        <input type="text" id="number" name="quantity" placeholder="Enter number or kilograms">
      </div>
    </div>
  
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="first_name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="last_name" placeholder="Your last name..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="email">Email Id:</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email_id" placeholder="abc@email.com">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="address">Local address:</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="local" placeholder="Your local address..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Street:</label>
      </div>
      <div class="col-75">
        <input type="text" id="street" name="street" placeholder="Your street name..">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="fname">Nearby landmark:</label>
      </div>
      <div class="col-75">
        <input type="text" id="landmark" name="landmark" placeholder="any nearby landmark..">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="fname">City:</label>
      </div>
      <div class="col-75">
        <input type="text" id="city" name="city" placeholder="Your city..">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="state">State:</label>
      </div>
      <div class="col-75">
        <input type="text" id="state" name="state" placeholder="Your state..">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="country">Country:</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
		<option value="india">India</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
	
    <div>
      <br><center><button type="submit"  style="width: 100px; height: 30px;background-color:tomato;color:white;">Submit</button>
    </center>
	</div>
  </form>
</div>


<div id="footer">

<ul id="l2">
<p><b>Information</b><p>
	<li id="l1"><a href="#">About us</a></li>
	<li id="l1"><a href="#">Delivery Information</a></li>
	<li id="l1"><a href="#">Vision</a></li>
	<li id="l1"><a href="#">Terms And Conditions</a></li>
</ul>
<ul id="l2">
<p><b>Customer Service</b><p>
	<li id="l1"><a href="more.html">Contact Us</a></li>
	<li id="l1"><a href="#">Returns</a></li>
	<li id="l1"><a href="#">Site Map</a></li>
</ul>
<ul id="l2">
<p><b>My Account</b><p>
	<li id="l1"><a href="#">Accounts</a></li>
	<li id="l1"><a href="#">Order History</a></li>
	<li id="l1"><a href="#">Wish List</a></li>
	<li id="l1"><a href="#">New Letter</a></li>
</ul>
<ul id="l2">
<p><b>Extras</b><p>
	<li id="l1"><a href="#">Brands</a></li>
	<li id="l1"><a href="#">Gift Vouchers</a></li>
	<li id="l1"><a href="#">Affliates</a></li>
	<li id="l1"><a href="#">Specials</a></li>
</ul>
</div>

</body>
</html>