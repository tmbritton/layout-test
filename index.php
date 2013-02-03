<?php include('includes/header.php'); ?>
	<body>
		<nav class="sitetop">
			<ul class="clearfix">
				<li><a href="#">Store</a></li>
				<li><a href="#">Mac</a></li>
				<li><a href="#">iPod</a></li>
				<li><a href="#">iPhone</a></li>
				<li><a href="#">iTunes</a></li>
				<li><a href="#">Support</a></li>
			</ul>
		</nav>
     <div class="wrap">
			<header>
				<h1>Example Store</h1>
				<form method="POST" class="search">
					<input type="text" name="searchtext">
					<input type="submit" value="Search">
				</form>
				<div class="clearfix"></div>
				<nav class="sectionnav">
					<ul class="clearfix">
						<li><a href="#">Store</a></li>
						<li><a href="#">Mac</a></li>
						<li><a href="#">iPod</a></li>
						<li><a href="#">iPhone</a></li>
						<li><a href="#">iPad</a></li>
						<li><a href="#">iTunes</a></li>
						<li><a href="#">Support</a></li>
					</ul>
				</nav>
			</header>

			<section class="main">
				<article class="featured">
					<h1>Featured Products</h1>
					<div class="clearfix">
						<img src="img/large/ipod.jpg" alt="iPod Nano" width="268" height="268" />
						<h2>iPod Nano</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum aliquet felis, a facilisis tortor elementum quis. Proin congue, erat vitae sodales fringilla, ipsum dolor interdum eros, sit amet dapibus magna lorem eget orci. Sed nunc quam, posuere eu faucibus eget, egestas vitae augue. Cras tempor congue suscipit. Sed eget cursus eros. Phasellus pharetra mi eu eros cursus pharetra vel id erat. Aenean gravida sem non magna luctus et malesuada libero auctor. Curabitur accumsan libero in purus cursus tristique egestas justo tristique. Nunc rhoncus volutpat arcu sit amet ultricies.</p>
					</div>
				</article>

				<article class="trio">
					<h1>Featured Products</h1>
					<ul class="clearfix">
						<li>
							<img src="img/large/macbook.jpg" alt="MacBook Pro" />
							<a href="#">[Sample Product] MacBook Pro</a>
							<p class="price">$1,999.00</p>			
							<span class="stars three"></span>	
							<button class="add">Add To Cart</button>
						</li>
						<li>
							<img src="img/large/bag.jpg" alt="Crumpler Considerable Embarrassment Bag" />
							<a href="#">[Sample Product] Crumpler Considerable Embarrassment Bag</a>
							<p class="price">$89.95</p>
							<span class="stars four"></span>
							<button class="add">Choose Options</button>
						</li>
						<!--Why not nth child? Because we're supporting ie7-->
						<li class="third">
							<img src="img/large/ipod.jpg" alt="iPod Nano" />
							<a href="#">[Sample Product] iPod Nano</a>
							<p class="price">$149.00</p>
							<span class="stars three"></span>
							<button class="add">Choose Options</button>
						</li>
					</ul>
				</article>
			</section>	

			<section class="sidebar">
				<article class="categories">
					<h1>Categories</h1>
					<ul>
						<li><a href="#">iPhone</a></li>
						<li><a href="#">iPhone 3G</a></li>
						<li><a href="#">iPhone 3GS</a></li>
						<li><a href="#">iPhone 4</a></li>
					</ul>
				</article>

				<article class="recent">
					<h1>Recent Products</h1>
					<ul>
						<li class="clearfix">
							<img src="img/thumbs/macbook.jpg" alt="Macbook Pro" />
							<p>Macbook Pro<br /><span class="price">$1,999.00</span></p>
						</li>
						<li class="clearfix">
							<img src="img/thumbs/ipod.jpg" alt="iPod Nano" />
							<p>iPod Nano<br /><span class="price">$149.00</span></p>
						</li>
						<li class="clearfix">
							<img src="img/thumbs/bag.jpg" alt="Crumpler Considerable Embarrassment Bag" />
							<p>Crumpler Considerable Embarrasment Bag<br /><span class="price">$89.95</span></p>
						</li>
					</ul>
				</article>
			</section>
		</div><!--wrap-->

<?php include('includes/footer.php'); ?>
