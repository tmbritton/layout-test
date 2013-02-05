<?php include('includes/header.php'); ?>
	<body>
<?php include('includes/sitenav.php'); ?>		
     <div class="wrap">
			<header>
				<div class="title-wrap clearfix">
				<h1>Example Store</h1>
				<form method="POST" class="search">
					<input type="text" name="searchtext" class="search">
					<input type="submit" value="Search" class="submit">
				</form>
				</div><!--title-wrap-->
				<br class="clearfix" />
<?php include('includes/sectionnav.php'); ?>
			</header>

			<section class="main">
				<article class="featured">
					<h1>Featured Products</h1>
					<div class="clearfix">
						<img src="img/large/ipod.jpg" alt="iPod Nano" width="268" height="268" />
						<h2>iPod Nano</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum aliquet felis, a facilisis tortor elementum quis. Proin congue, erat vitae sodales fringilla, ipsum dolor interdum eros, sit amet dapibus magna lorem eget orci. Sed nunc quam, posuere eu faucibus eget, egestas vitae augue. Cras tempor congue suscipit.</p>
						<p class="price">$149.00</p>
						<a class="button" href="#">Add to Cart</a>
					</div>
				</article>

				<article class="trio">
					<h1>Featured Products</h1>
					<ul class="clearfix">
						<li>
							<img src="img/large/macbook.jpg" alt="MacBook Pro" />
							<a href="#" class="title">[Sample Product] MacBook Pro</a>
							<p class="price">$1,999.00</p>			
							<div class="rating">
                <span class="five">★</span>
                <span class="four">★</span>
                <span class="three">★</span>
                <span class="two">★</span>
                <span class="one">★</span>
							</div>
							<a class="button" href="#">Add To Cart</a>
						</li>
						<li>
							<img src="img/large/bag.jpg" alt="Crumpler Considerable Embarrassment Bag" />
							<a href="#" class="title">[Sample Product] Crumpler Considerable Embarrassment Bag</a>
							<p class="price">$89.95</p>
							<div class="rating">
                <span class="five">★</span>
                <span class="four">★</span>
                <span class="three">★</span>
                <span class="two">★</span>
                <span class="one">★</span>
              </div>
							<a class="button" href="#">Choose Options</a>
						</li>
						<!--Why not nth child? Because we're supporting ie7-->
						<li class="third">
							<img src="img/large/ipod.jpg" alt="iPod Nano" />
							<a href="#" class="title">[Sample Product] iPod Nano</a>
							<p class="price">$149.00</p>
							<div class="rating">
                <span class="five">★</span>
                <span class="four">★</span>
                <span class="three">★</span>
                <span class="two">★</span>
                <span class="one">★</span>
              </div>
							<a class="button" href="#">Choose Options</a>
						</li>
					</ul>
				</article>
			</section>	

			<section class="sidebar">
<?php include('includes/sidebar.php'); ?>			
			</section>
		</div><!--wrap-->
<?php include('includes/footer.php'); ?>
