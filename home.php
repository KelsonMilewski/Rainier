<!doctype html>
<html>
	<head>
		<title>Rainier Terrariums - Plants, Terrariums, Critter Enclosures and More</title>
		<meta name="keywords" content="plants, terrariums, terrariums plants, vivarium, vivariums, bioactive terrarium, bioactive, bioactive vivarium, isopods ">
        <meta description="The place to be for plants, terrariums, critter enclosures and more...">
        <?php include 'include/home.php'; ?>
	</head>
	<body>
		<div class="navbar">
			<img src="images/text-logo.png" alt="Rainier Terrariums" class="nav-text-logo">
			<img src="images/logo.png" alt="Rainier Terrariums" class="nav-logo">

			<nav class="expand-navbar">
				<ul>
					<a href="index"><li>Home</li></a>
					<li class="nav-dropdown">
						<a href="store" class="nav-dropdown-btn">Store</a>
						<ul class="nav-dropdown-content">
							<a href="store"><li>All</li></a>
							<a href="terrariums"><li>Terrariums</li></a>
							<a href="materials"><li>Materials</li></a>
							<a href="plants"><li>Plants</li></a>
							<a href="critters"><li>Critters</li></a>
						</ul>
					</li>
					<a href="plant-care"><li>Plant Care</li></a>
					<a href="critter-care"><li>Critter Care</li></a>
				</ul>
			</nav>
			<nav class="collapse-navbar">
				<img src="images/dropdown.png" alt="Pages" onclick="showHideNav()" class="dropdown-btn">
			</nav>
		</div>
		<ul class="dropdown" id="dropdown">
			<li><a href="index">Home</a></li>
			<li onclick="showHideSubNav()" style="cursor: pointer"><a>Store</a></li>
			<li style="text-align: center;"><a href="plant-care">Plant<br/>Care</a></li>
			<li style="text-align: center;"><a href="critter-care">Critter<br/>Care</a></li>
		</ul>
		<ul class="sub-dropdown" id="sub-dropdown">
			<li><a href="store">All</a></li>
			<li><a href="terrariums">Terrariums</a></li>
			<li><a href="materials">Materials</a></li>
			<li><a href="plants">Plants</a></li>
			<li><a href="critters">Critters</a></li>
		</ul>
		<div class="title-section">
			<div class="title-box">
				<img src="images/text-logo.png" alt="Text Logo" class="text-logo">
				<h1 class="subtitle">The place to be for plants, terrariums, and little critters</h1>
			</div>
			<div class="scroll-indicator">
				<a href="#article"><img src="images/down-arrow.png" alt="Scroll Down" class="down-arrow"></a>
			</div>
		</div>
		<article id="article">
			<div class="content">
				<div id="759747374">
					<script type="text/javascript">
						try {
							window._mNHandle.queue.push(function (){
								window._mNDetails.loadTag("759747374", "728x90", "759747374");
							});
						}
						catch (error) {}
					</script>
				</div>
				<h1 style="text-align: center">Featured Products</h1>
				<table>
					<tr>
						<td class="product">
							<a href="https://amzn.to/2HQQQlW" target="_blank">
								<img src="images/kook-geometric-glass-terrarium.png" alt="kook" class="product-img">
								<div class="product-description">
									<br/>
									<p>KooK Geometric Glass Terrarium</p>
									<p>$21.95</p>
								</div>
							</a>
						</td>
						<td class="product">
							<a href="https://amzn.to/32jcngm" target="_blank">
								<img src="images/mini-ferns-for-terrariums.png" alt="mini" class="product-img">
								<div class="product-description">
									<p>Mini Ferns for Terrariums/Fairy Garden </p>
									<p>$14.99</p>
								</div>
							</a>
						</td>
						<td class="product">
							<a href="https://amzn.to/39SjsHg" target="_blank">
								<img src="images/light-up-terrarium-kit2.png" alt="5" class="product-img">
								<div class="product-description">
									<p>Succulent Plants (5 Pack), Fully Rooted in Planter Pots with Soil</p>
									<p>$17.95</p>
								</div>
							</a>
						</td>
						<td class="product">
							<a href="https://amzn.to/38UEJ39" target="_blank">
								<img src="images/mkono-3-pack-mini-glass-geometric-terrarium4.jpg" alt="led" class="product-img">
								<div class="product-description">
									<p>LED Grow Light Strips for Plants,Cholas 36W 132 LEDs</p>
									<p>$31.99 </p>
								</div>
							</a>
						</td>
					</tr>
				</table>
			</div>
		</article>
		<!--section in developement
		<div class="background-section" style="background-image: url(images/index-background.png);">
			<div class="background-section-content">
				<h1>What Are We?</h1>
				<h2>We provide a variety of products for terrariums, plants, and small critters like isopods and springtails. We also provide information on plant care and caring for small critters.</h2>
			</div>
		</div>
		-->
		<footer>
			<div class="copyright">
				<img src="images/logo.png" alt="Rainier Terrariums" class="footer-logo">
				<h3>Copyright &copy; 2020 Kelson Milewski</h3>
			</div>
			<div class="footer-social-section">
				<a href="https://discord.gg/eybXTrr" target="_blank"><img src="images/discord-logo.png" alt="Discord" class="footer-social"></a>
				<a href="https://www.instagram.com/rainier_terrariums/" target="_blank"><img src="images/instagram-logo.png" target="_blank" alt="Instagram" class="footer-social"></a>
				<a href="https://twitter.com/rterrariums" target="_blank"><img src="images/twitter-logo.png" target="_blank" alt="Twitter" class="footer-social"></a>
				<a href="https://www.facebook.com/rainier.terrariums" target="_blank"><img src="images/facebook-logo.png" target="_blank" alt="Facebook" class="footer-social"></a>
			</div>
			<div class="footer-links">
				<a href="contact.html">Contact Us</a>
			</div>
		</footer>
		<script src="script.js"></script>
	</body>
</html>
