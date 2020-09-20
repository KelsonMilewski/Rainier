        <div class="navbar">
			<img src="images/text-logo.png" alt="Rainier Terrariums" class="nav-text-logo">
			<img src="images/logo.png" alt="Rainier Terrariums" class="nav-logo">

			<nav class="expand-navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li class="nav-dropdown">
						<a href="store.php" class="nav-dropdown-btn">store</a>
						<ul class="nav-dropdown-content">
							<li><a href="store.php">All</a></li>
							<li><a href="terrariums.php">Terrariums</a></li> 
							<li><a href="materials.php">Materials</a></li>
							<li><a href="plants.php">Plants</a></li>
							<li><a href="critters.php">Critters</a></li>
						</ul>
					</li>
					<li><a href="PlantCare.php">Plant Care</a></li>
					<li><a href="CritterCare.php">Critter Care</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</nav>
			<nav class="collapse-navbar">
				<img src="images/dropdown.png" alt="Pages" onclick="showHideNav()" class="dropdown-btn">
			</nav>
		</div>
		<ul class="dropdown" id="dropdown">
			<li><a href="index.php">Home</a></li>
			<li onclick="showHideSubNav()" style="cursor: pointer"><a>store</a></li>
			<li style="text-align: center;"><a href="PlantCare.php">Plant<br/>Care</a></li>
			<li style="text-align: center;"><a href="CritterCare.php">Critter<br/>Care</a></li>
	  		<li style="text-align: center;"><a href="contact.php">Contact<br/>Us</a></li>
		</ul>
		<ul class="sub-dropdown" id="sub-dropdown">
			<li><a href="store.php">All</a></li>
			<li><a href="terrariums.php">Terrariums</a></li>
			<li><a href="materials.php">Materials</a></li>
			<li><a href="plants.php">Plants</a></li>
			<li><a href="critters.php">Critters</a></li>
		</ul>