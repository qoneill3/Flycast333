<?php
/**
 * Template Name: River Index
 *
 * 
 *
 * @package Flycast
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<section class="river-index-hero">
			<!-- <p class="discover">DISCOVER MORE</p>
			<hr class="vertical"> -->
			<img class="wow fadeIn river-header-img" src="/wp-content/uploads/2019/09/river-index@2x.png" data-wow-duration="3s" alt="" />
			<p class="big-title wow fadeInRight">FORECASTS</p>
			<div class="mobile-overlay"></div>
			<!-- <div class="container-fluid">
				<div class="row justify-content-center">
					<h1 class="small wow fadeInRight">WE ARE</h1>
				</div>
				<div class="row justify-content-center">
					<h1 class="big wow fadeInRight">FLYCAST</h1>
				</div>
			</div> -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md about-hero-p">
						<h1 class="wow fadeInDown">COLORADO RIVERS</h1>
						<hr class="wow fadeInRight">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nulla quos deleniti iste.</p>
						<!-- <img class="arrow" src="/wp-content/uploads/2019/06/down-arrow.svg" alt=""> -->
					</div>
				</div>
			</div>
		</section>

		<section class="river-slider">
			<div class="container-fluid">
				<div class="row wow fadeInLeft">
					<h2>RIVERS</h2>
				</div>
			</div>
			<div class="river-gallery-wrap">
				<div class="river-item">
					<?php 
							$r_1 = get_field('river_1');
							$r_1_img = $r_1['image'];
							$r_1_n = $r_1['name'];
						?>
						<img src="<?php echo $r_1_img ?>" alt="colorado river" />
						<h3><?php echo $r_1_n ?></h3>
				</div>
				<div class="river-item">
					<?php 
							$r_2 = get_field('river_2');
							$r_2_img = $r_2['image'];
							$r_2_n = $r_2['name'];
						?>
						<img src="<?php echo $r_2_img ?>" alt="colorado river" />
						<h3><?php echo $r_2_n ?></h3>
				</div>
				<div class="river-item">
					<?php 
							$r_3 = get_field('river_3');
							$r_3_img = $r_3['image'];
							$r_3_n = $r_3['name'];
						?>
						<img src="<?php echo $r_3_img ?>" alt="colorado river" />
						<h3><?php echo $r_3_n ?></h3>
				</div>
				<div class="river-item">
					<?php 
							$r_4 = get_field('river_4');
							$r_4_img = $r_4['image'];
							$r_4_n = $r_4['name'];
						?>
						<img src="<?php echo $r_4_img ?>" alt="colorado river" />
						<h3><?php echo $r_4_n ?></h3>
				</div>
				<div class="river-item">
					<?php 
							$r_5 = get_field('river_5');
							$r_5_img = $r_5['image'];
							$r_5_n = $r_5['name'];
						?>
						<img src="<?php echo $r_5_img ?>" alt="colorado river" />
						<h3><?php echo $r_5_n ?></h3>
				</div>
				<div class="river-item">
					<?php 
							$r_6 = get_field('river_6');
							$r_6_img = $r_6['image'];
							$r_6_n = $r_6['name'];
						?>
						<img src="<?php echo $r_6_img ?>" alt="colorado river" />
						<h3><?php echo $r_6_n ?></h3>
				</div>
			</div>
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>