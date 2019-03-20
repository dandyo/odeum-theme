<?php
/**
 *
 * Template Name: Home
 *
 */
get_header(); ?>
	<header class="home-banner">
		<a href="#" class="home-banner-logo"><img src="<?php bloginfo('template_url'); ?>/assets/images/Logo-white.svg" alt=""></a>

		<div>
			<h1>It’s all happening at ODEUM</h1>
			<p>15 Sydney Street Muswellbrook NSW 2333  <br>(02) 6543 2011</p>
			<a href="" class="btn btn-book">Book a Table</a>
		</div>
	</header>
	<section class="section">
		<div class="container">
			<div class="section-title">
				<h2>What's On</h2>
			</div>
			<div class="news-carousel-wrap">
			<?php
			$query = new WP_Query( 'posts_per_page=5' );

		    if ($query->have_posts()) { ?>
		    	<div class="news-carousel">
		    <?php
		    	while ( $query->have_posts() ) : $query->the_post();
			?>
				<div class="news-carousel-item">
					<div class="news-carousel-item-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
						
					</div>
					<div class="news-carousel-item-content">
						<h3><?php the_title(); ?></h3>
						<span class="news-carousel-item-date">Saturday, 29 April, 2018</span>
						<div class="news-carousel-item-excerpt"><?php the_excerpt(); ?></div>
						<div class="news-carousel-item-cat"><span></span> Entertainment</div>
					</div>
				</div>
				<div class="news-carousel-item">
					<div class="news-carousel-item-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
						
					</div>
					<div class="news-carousel-item-content">
						<h3><?php the_title(); ?></h3>
						<span class="news-carousel-item-date">Saturday, 29 April, 2018</span>
						<div class="news-carousel-item-excerpt"><?php the_excerpt(); ?></div>
						<div class="news-carousel-item-cat"><span></span> Entertainment</div>
					</div>
				</div>
			<?php endwhile; ?>
				</div>
			<?php } wp_reset_query(); ?>
			</div>
		</div>
	</section>
	<section class="section section--with-bg section-dining section--full-height section--center-content">
		<div class="container">
			<div class="section-title">
				<h2>Dining</h2>
			</div>
			<div class="section-content">
				Lorem ipsum dolor sit amet, consettuer adipiscing elit ommodo ligula eget dolo ndit vel, luctus pulvinar, hendrerit id, lorem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula egetorem ipsum dolor sit amet, consectetuer adipiscing elit. 
			</div>
			<div class="text-center">
				<a href="#" class="btn btn-download"><span>Dinner Menu</span></a> 
				<a href="#" class="btn btn-download"><span>Lunch Menu</span></a>
			</div>

			<a href="#" class="btn btn-book">Book Now</a>
		</div>
	</section>

	<section class="section section-funtions section--no-pad section--divided">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					
				</div>
				<div class="col col--with-overlay col--text">
					<div class="col-content">						
						<div class="section-title section-title--align-left"><h2>Functions</h2></div>

						<p>Muswellbrook is the heart of the Upper Hunter coal-mining industry and the Ron Adams Room is the perfect place for work seminars and training days.</p>
						<p>This function room at Muswellbrook Workers Club offers a more intimate venue for closed door meetings, private conferences and functions.</p>
						<p>Our expert and professional staff will deliver everything you need for a short stay or a longer booking over several days or weeks.</p>
						<p>Business seminars and social banquets are particularly popular and are the reason why Muswellbrook Workers is the first choice for functions in the Hunter Valley.</p>
						<p><a href="#" class="btn btn-download"><span>Download functions package</span></a></p>
						<a href="#" class="btn btn-book">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--full-height section--no-pad section--divided">
		<div class="container-fluid">
			<div class="row">
				<div class="col col--with-overlay col--with-bg col--text col--text-align-bottom" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/2-col-image-entertainment);">
					<div class="col-content">						
						<div class="section-title section-title--align-left section-title--with-divider">
							<h2>Entertainment</h2>
						</div>
						<p>Weekly live music, psum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					</div>
				</div>
				<div class="col col--with-overlay col--with-bg col--text col--text-align-bottom" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/2-col-image-game.jpg);">
					<div class="col-content">						
						<div class="section-title section-title--align-left section-title--with-divider">
							<h2>TAB & Keno / Gaming</h2>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.empus, tellus eget cond llam quis ante. Etiam sit amet orci eget eros fa</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--with-bg section-welcome section--full-height">
		<div class="container">
			<div class="section-title section-title--with-top-divider">
				<h2>Welcome to ODEUM</h2>
			</div>
			<div class="section-content">
				<p>ODEUM is the friendly club where members, their families and guests can relax and unwind in the heart of the Upper Hunter. Muswellbrook is a vibrant community with vast viticulture, agriculture and coal mining activities. ODEUM caters to them all.</p>
				<p>ODEUM is home to the best live entertainment in the Upper Hunter. Great local bands mix it with many of the top musicians on the east coast of Australia which makes for a great night out at Muswellbrook Workers. Sensational solo artists and dazzling duets play live in the club while the best big bands blast it out.</p>
			</div>
			<div class="row">
				<div class="col">
					<div>
						<img src="<?php bloginfo('template_url'); ?>/assets/images/clock-gold.svg" alt="Trading Hours">
						<h3>Trading Hours</h3>
						<p>Monday – Saturday 10.00am – 12.00am Sunday 10.00am – 10pm</p>
					</div>
				</div>
				<div class="col">
					<div>
						<img src="<?php bloginfo('template_url'); ?>/assets/images/map-gold.svg" alt="Getting Here">
						<h3>Getting Here</h3>
						<p>15 Sydney Street Muswellbrook NSW 2333</p>
						<p><a href="#">Get Directions</a></p>
					</div>
				</div>
				<div class="col">
					<div>
						<img src="<?php bloginfo('template_url'); ?>/assets/images/bus-gold.png" alt="Courtesy Bus">
						<h3>Courtesy Bus</h3>
						<p>The courtesy bus operates from Monday to Sunday, 7 days a week, one trip in the morning for bingo at 10.15am Monday-Friday, then the bus runs from 4pm until close every day. and is just a phone call away. So ring the club now on 6543 2011 to book a seat.</p>
						<p><a href="#">Show less</a></p>
					</div>
				</div>
			</div>
		</div>
		<span class="frame frame--tl"></span>
		<span class="frame frame--tr"></span>
		<span class="frame frame--br"></span>
		<span class="frame frame--bl"></span>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-title section-title--with-top-divider">
				<h2>Promotion</h2>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/assets/images/Whats-on-feature.jpg" alt="">
		</div>
	</section>

	<section class="section section-member section--with-bg">
		<div class="container">
			<div class="row">
				<div class="col col-12 col-sm-4">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/member-card.jpg" alt="">
				</div>
				<div class="col col-12 col-sm-8">
					<h3>Enjoy the benefits of being a member</h3>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis </p>
					<a href="#" class="btn btn-primary">Become a member</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-member">
		<div class="container-fluid">
			<div class="row">
				<div class="col col-12">
					
				</div>
			</div>
		</div>
	</section>
<?php get_footer();