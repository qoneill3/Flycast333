<?php
/**
 * Template Name: River
 *
 * 
 *
 * @package Flycast
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="river-hero">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<?php $river_name = get_field('river_name'); ?>
							<h1><?php echo $river_name ?></h1>
							<a href="#"><h2>River Index</h2></a>
						</div>
						<?php $lg_img = get_field('large_image'); ?>
						<img class="river-img" src="<?php echo $lg_img ?>" alt="Colorado Fly Fishing">
						<?php $sm_img = get_field('small_image'); ?>
						<img class="river-img01" src="<?php echo $sm_img ?>" alt="River Reports" />
					</div>
				</div>
			</div>

			<section class="river-overview">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<h2>WEEKLY OVERVIEW</h2>
					</div>
					<div class="row justify-content-center">
						<img class="grey-star" src="/wp-content/uploads/2019/06/grey-star.svg" alt="" />
						<img class="grey-star" src="/wp-content/uploads/2019/06/grey-star.svg" alt="" />
						<img class="grey-star" src="/wp-content/uploads/2019/06/grey-star.svg" alt="" />
						<img class="grey-star" src="/wp-content/uploads/2019/06/grey-star.svg" alt="" />
						<img class="grey-star" src="/wp-content/uploads/2019/06/grey-star.svg" alt="" />
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5 overview">
							<?php $week_of = get_field('week_of'); ?>
							<h3><?php echo $week_of ?></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam adipisci cupiditate explicabo, iusto aliquam, eum beatae, animi fuga nesciunt, sunt distinctio. Fuga earum est soluta commodi officiis error repellendus. Aliquam ut illo beatae reiciendis dolorem officiis dolore ipsum laudantium veniam quae, doloremque temporibus iste corrupti. Ullam, quaerat inventore architecto, dignissimos placeat quisquam iusto enim ipsa mollitia eos libero beatae. Fugit.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam adipisci cupiditate explicabo, iusto aliquam, eum beatae, animi fuga nesciunt, sunt distinctio. Fuga earum est soluta commodi officiis error repellendus. Aliquam ut illo beatae reiciendis dolorem officiis dolore ipsum laudantium veniam quae, doloremque temporibus iste corrupti. Ullam, quaerat inventore architecto, dignissimos placeat quisquam iusto enim ipsa mollitia eos libero beatae. Fugit.</p>
							<p>Need flies for your trip? FlyCast has collaborated with our friends at Anglers All ​to package a dozen flies that are hot on the Williams Fork right now - Click here for hand selected flies​​​</p>
						</div>
						<div class="col-md chart">
							<img class="overview-img" src="/wp-content/uploads/2019/06/FlycastUSA-Denver-Colorado-1.jpg" alt="" />
							<h3>IDEAL DAYS TO FISH</h3>
							<p>Monday and Tuesday</p>
							<h3>GO TO FLIES</h3>
							<ul>
								<li><p>Surface - Parachute Adams (#20-24), Elk Hair Caddis (#16-18), Griffiths Gnat (#22-24) and Amy's Ant (#10).</p></li>
								<li><p>Subsurface - Psycho Prince Nymph (#18-20), Pheasant Tails (#18-20), RS2's (#20-22), JuJu baetis (#20-22), WD 40 (#20-22), Black Beauties (#20-22), Top Secret Midges (#22-24), Mercury Midge (#22-24), Foam Wing Emerger (#20-22), Pat's Rubber Legs (#12-14), Electric Caddis (#16-18), Super Pupa (#16-18), San Juan Worm, Flossies </p></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

				<script type='text/javascript' src='https://darksky.net/widget/default/42.360082,-71.05888/us12/en.js?height=500&title=Full Forecast&textColor=333333&bgColor=FFFFFF&skyColor=333&fontFamily=Default&units=us&htColor=333333&ltColor=C7C7C7&displaySum=yes&displayHeader=yes'></script>

	<!-- 		<section class="river-transition">
				<img src="/wp-content/uploads/2019/06/Asset-6.png" alt="Flycast River Reports" />
			</section>
 -->
			<section class="flycasts">
				<div class="report-display">
					<div class="report-display-item">
						<h3>Monday</h3>
						<?php $monday = get_field('monday'); ?>
						<p><?php echo $monday ?></p>
						<div class="fade"></div>
					</div>
					<div class="report-display-item">
						<h3>Tuesday</h3>
						<?php $tuesday = get_field('tuesday'); ?>
						<p><?php echo $tuesday ?></p>
						<div class="fade"></div>
					</div>
					<div class="report-display-item">
						<h3>Wednesday</h3>
						<?php $wednesday = get_field('wednesday'); ?>
						<p><?php echo $wednesday ?></p>
						<div class="fade"></div>
					</div>
					<div class="report-display-item">
						<h3>Thursday</h3>
						<?php $thursday = get_field('thursday'); ?>
						<p><?php echo $thursday ?></p>
						<div class="fade"></div>
					</div>
					<div class="report-display-item">
						<h3>Friday</h3>
						<?php $friday = get_field('friday'); ?>
						<p><?php echo $friday ?></p>
						<div class="fade"></div>
					</div>
					<div class="report-display-item">
						<h3>Saturday</h3>
						<?php $saturday = get_field('saturday'); ?>
						<p><?php echo $saturday ?></p>
						<div class="fade"></div>
					</div>
					<div class="report-display-item">
						<h3>Sunday</h3>
						<?php $sunday = get_field('sunday'); ?>
						<p><?php echo $sunday ?></p>
						<div class="fade"></div>
					</div>
				</div>
				<div class="flycast-reports">
					<div class="report">
						<h3>Monday</h3>
						<p><?php echo $monday ?></p>
					</div>
					<div class="report">
						<h3>Tuesday</h3>
						<p><?php echo $tuesday ?></p>
					</div>
					<div class="report">
						<h3>Wednesday</h3>
						<p><?php echo $wednesday ?></p>
					</div>
					<div class="report">
						<h3>Thursday</h3>
						<p><?php echo $thursday ?></p>
					</div>
					<div class="report">
						<h3>Friday</h3>
						<p><?php echo $friday ?></p>
					</div>
					<div class="report">
						<h3>Saturday</h3>
						<p><?php echo $saturday ?></p>
					</div>
					<div class="report">
						<h3>Sunday</h3>
						<p><?php echo $sunday ?></p>
					</div>
				</div>
			</section>

			<section class="river-info">
				<div class="container-fluid">
					<div class="row">
						<div class="black-box-info"></div>
						<img class="info-img" src="/wp-content/uploads/2019/06/FlycastUSA-Denver-Colorado-20.jpg" alt="">
						<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12853.56738643186!2d-106.2016088693515!3d40.046112468940215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876a18cc78b085ed%3A0x6c4c6ab3a34f05cc!2sWilliams+Fork!5e1!3m2!1sen!2sus!4v1556489715815!5m2!1sen!2sus" width="450" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
						<div class="col-md-5 info-content">
							<h2>DETAILED RIVER INFO</h2>
								<h3 class="background">BACKGROUND:</h3>
									<?php $background = get_field('background'); ?>
									<p class="background-p"><?php echo $background ?></p>
								<h3>ANGLING:</h3>	
									<?php $angling = get_field('angling'); ?>
									<p><?php echo $angling ?></p>
								<h3 class="access">RIVER ACCESS:</h3>
									<?php $access = get_field('river_access'); ?>	
									<p class="access-p"><?php echo $access ?></p>
						</div>
					</div>
				</div>
			</section>

			<section class="blog-section" id="river-blog-section">
			<div class="blog row justify-content-center">
				<h2 class="wow fadeIn">THE BLOG</h2>
			</div>
			<div class="row justify-content-center">
				<div class="red-bg-river"></div>

							<?php
								// Get the 3 latest posts
								$args = array(
									'posts_per_page' => 3
								);
								$latest_posts_query = new WP_Query( $args );
								// The Loop
								if ( $latest_posts_query->have_posts() ) {
										while ( $latest_posts_query->have_posts() ) {
											$latest_posts_query->the_post();
											// Get the standard index page content ?>

											<div class="col-lg-4 blog-col wow fadeInRight">
												<?php	get_template_part( 'template-parts/content', get_post_format() ); ?>
											</div>

											<?php
										}
								}
								/* Restore original Post Data */
								wp_reset_postdata();

							?>
						</div>

						<div class="row justify-content-center">
							<div class="col-lg-5">
							<a id="big" href="#">VIEW ALL POSTS</a>
							<hr>
							</div>
						</div>
			</section>
		
	
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>