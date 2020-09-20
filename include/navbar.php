		<div class="navbar">
			<img src="images/text-logo.png" alt="Rainier Terrariums" class="nav-text-logo">
			<img src="images/logo.png" alt="Rainier Terrariums" class="nav-logo">

			<nav class="expand-navbar">
				<ul>
					<a href="index.html"><li>Home</li></a>
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
			<li><a href="index.html">Home</a></li>
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