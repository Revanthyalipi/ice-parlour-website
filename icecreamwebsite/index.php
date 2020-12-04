<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script>
		function sub(){
			confirm("Thanks for Subscribing Us");
		}
	</script>
</head>
<body>
	<div id="page">
		<div id="sidebar"><img id="logo" src="images/logo.gif" width="171" height="239" alt=""></a>
			<h2>FLAVOR OF THE DAY</h2>
			<ul>
				<li>
					<a href="flavors.html"><img src="images/strawberry-delight.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Strawberry Delight</a></h3>
				</li>
			</ul>
			<h2>POPULAR FLAVORS</h2>
			<ul>
				<li>
					<a href="flavors.html"><img src="images/tropical-mango.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Tropical Mango</a></h3>
				</li>
				<li>
					<a href="flavors.html"><img src="images/rich-chocolate.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Rich Chocolate</a></h3>
				</li>
				<li>
					<a href="flavors.html"><img src="images/sour-rasberry.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Sour Rasberry</a></h3>
				</li>
			</ul>
		</div>
		<div id="content"> 
			<!-- start of header -->
			<div id="header">
				<ul class="navigation">
					<li>
						<a href="about.html">About Us</a>
					</li>
					<li>
						<a href="flavors.html">Flavors</a>
					</li>
					<li>
						<a href="dessert.html">Dessert Recipes</a>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
					<li>
						<a href="index.php?logout='1'" style="color: red;">Logout</a> 
					</li>	
				</ul>
			</div>
			<!-- end of header --> 
			<!-- start of class content -->
			<div class="content"> 
				<!-- start of slider-->
				<div class="slider">
					<ul>
						<li>
							<a href="flavors.html"><img src="images/fruit-toppings.gif" width="680" height="200" alt="Frosty Sweet" title="Frosty Sweet"></a>
						</li>
					</ul>
					<div class="footer">
						<ul>
							<li>
								<a href="flavors.html"><img src="images/button-slider1.gif" width="24" height="24" alt="Frosty Sweet" title="Frosty Sweet"></a>
							</li>
							<li>
								<a href="flavors.html"><img src="images/button-slider2.gif" width="24" height="24" alt="Frosty Sweet" title="Frosty Sweet"></a>
							</li>
							<li>
								<a href="flavors.html"><img src="images/button-slider3.gif" width="24" height="24" alt="Frosty Sweet" title="Frosty Sweet"></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end of slider --> 
				<!-- start of featured-->
				<div class="featured">
					<ul>
						<li>
							<a href="flavors.html"><img src="images/free-ice-cream-sampling.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.html">Free Ice Cream Sampling</a></h2>
						</li>
						<li>
							<a href="flavors.html"><img src="images/ice-cream-for-occasions.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.html">Ice Cream For Every Occasion</a></h2>
						</li>
						<li>
							<a href="flavors.html"><img src="images/fat-free-ice-cream.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.html">Fat Free Ice Cream</a></h2>
						</li>
						<li>
							<a href="flavors.html"><img src="images/ice-cream-recipes.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.html">Ice Cream Recipes</a></h2>
						</li>
					</ul>
				</div>
				<!-- end of featured--> 
				<!-- start of section-->
				<div class="section">
					<div class="about">
						<h2>What makes us different?</a></h2>
						<p>Our Family owned ice cream shop doesn't just serve ice cream, frozen yogurt and milkshakes. We use liquid nitrogen to rapidly freeze your delicious dessert right in front of you at -320 below zero. Flavor combinations are endless. We also have sugar-free, dairy-free, and vegan and low carb options for all flavors. We have the coolest parties in town! Celebrate with your private party here and make your own ice cream. Check out our website and stop in today!</p>
					</div>
					<div class="connect"><a href="index.html"><img src="images/sign-board.gif" width="234" height="222" alt=""></a>
						<h2>NEWSLETTER SIGNUP</h2>
						<span>Get the latest news and updates!</span>
						<form>
							<input type="text" id="email" value="Enter your e-mail here..." onblur="this.value=!this.value?'Enter your e-mail here...':this.value;" onfocus="this.select()" onclick="this.value='';">
							<input type="submit" onclick="sub()" value="">
						</form>
					</div>
				</div>
				<!-- end of section--> 
				<!-- start of article comment-->
				<div class="section">
					<h2>Sweet words from our clients</h2>
					<div class="comment">
						<p>
							"Life is like an ice-cream cone, you have to lick it one day at a time."
						</p>
						<span>Charles M. Schulz</span></div>
				</div>
				<!-- end of article comment--> 
			</div>
			<!-- end of class content -->
			<div id="footer">
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About Us</a>
					</li>
					<li>
						<a href="flavors.html">Flavors</a>
					</li>
					<li>
						<a href="dessert.html">Dessert Recipes</a>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
				<span>&copy;2018 <a href="index.php">Frost Sweets Gourmet Ice Cream</a> All Rights Reserved</span>
			
			</div>
		</div>
		<!-- end of ID content--> 
	</div>
</body>
</html>