<?php
/**
 * Template Name: About
 *
 * 
 *
 * @package Flycast
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<section class="about-hero">
			<p class="discover">DISCOVER MORE</p>
			<hr class="vertical">
			<img class="wow fadeIn about-header-img" src="/wp-content/uploads/2019/09/Flycast-USA-Denver-Colorado-22.jpg" alt="" />
			<div class="mobile-overlay"></div>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<h1 class="small wow fadeInRight">WE ARE</h1>
				</div>
				<div class="row justify-content-center">
					<h1 class="big wow fadeInRight">FLYCAST</h1>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 about-hero-p">
						<hr class="wow fadeInRight">
						<?php $header_p = get_field('header_paragraph'); ?>
						<p><?php echo $header_p ?></p>
						<img class="arrow" src="/wp-content/uploads/2019/06/down-arrow.svg" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="about-intro">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 content">
						<?php 
							$intro_title = get_field('intro_title');
							$intro_p = get_field('intro_paragraph');
						?>
						<h2><?php echo $intro_title ?></h2>
						<hr>
						<p><?php echo $intro_p ?></p>
						<div class="btn-wrap01">
							<a class="cta" href="#">LEARN MORE</a>
						</div>
					</div>
					<div>
						<img class="intro-img wow fadeInUp" src="/wp-content/uploads/2019/09/FlycastUSA-Denver-Colorado-5.jpg" alt="" />
					</div>
					<div>
						<p class="watch">WATCH VIDEO</p>
						<img class="intro-video" src="/wp-content/uploads/2019/06/FlycastUSA-Denver-Colorado-3.jpg" alt="Fly Fishing" />
						<div class="video-overlay">
							<img class="play" src="/wp-content/uploads/2019/06/icons8-play-64.png" alt="" />
						</div>
					</div>
				</di4v>
			</div>
		</section>

		<section class="team-section">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<h2>MEET THE TEAM</h2>

				</div>
				<div class="row justify-content-center"><hr></div>
			</div>
			<div class="slick-gallery-wrap">
				<div class=" gallery-item" id="slide00">
					<?php
						$m_1 = get_field('member_1');
						$m_1_img = $m_1['image'];
						$m_1_n = $m_1['name'];
						?>
					<img src="<?php echo $m_1_img ?>" alt="" />
					<h3><?php echo $m_1_n ?></h3>
					
				</div>
				<div class=" gallery-item" id="slide01">
					<?php
						$m_2 = get_field('member_2');
						$m_2_img = $m_2['image'];
						$m_2_n = $m_2['name'];
						?>
					<img src="<?php echo $m_2_img ?>" alt="" />
					<h3><?php echo $m_2_n ?></h3>
				</div>
				<div class=" gallery-item" id="slide02">
					<?php
						$m_3 = get_field('member_3');
						$m_3_img = $m_3['image'];
						$m_3_n = $m_3['name'];
						?>
					<img src="<?php echo $m_3_img ?>" alt="" />
					<h3><?php echo $m_3_n ?></h3>
				</div>
				<div class=" gallery-item" id="slide03">
					<?php
						$m_4 = get_field('member_4');
						$m_4_img = $m_4['image'];
						$m_4_n = $m_4['name'];
						?>
					<img src="<?php echo $m_4_img ?>" alt="" />
					<h3><?php echo $m_4_n ?></h3>
					
				</div>
				<div class=" gallery-item" id="slide04">
					<?php
						$m_5 = get_field('member_5');
						$m_5_img = $m_5['image'];
						$m_5_n = $m_5['name'];
						?>
					<img src="<?php echo $m_5_img ?>" alt="" />
					<h3><?php echo $m_5_n ?></h3>
				</div>
				<div class=" gallery-item" id="slide05">
					<?php
						$m_6 = get_field('member_6');
						$m_6_img = $m_6['image'];
						$m_6_n = $m_6['name'];
						?>
					<img src="<?php echo $m_6_img ?>" alt="" />
					<h3><?php echo $m_6_n ?></h3>
				</div>
				<div class=" gallery-item" id="slide06">
					<?php
						$m_7 = get_field('member_7');
						$m_7_img = $m_7['image'];
						$m_7_n = $m_7['name'];
						?>
					<img src="<?php echo $m_7_img ?>" alt="" />
					<h3><?php echo $m_7_n ?></h3>
					
				</div>
				<div class=" gallery-item" id="slide07">
					<?php
						$m_8 = get_field('member_8');
						$m_8_img = $m_8['image'];
						$m_8_n = $m_8['name'];
						?>
					<img src="<?php echo $m_8_img ?>" alt="" />
					<h3><?php echo $m_8_n ?></h3>
				</div>
			</div>
		</section>

		<section class="about-services">
			<div class="container-fluid">
				<div class="row">
					<div class="about-black-box01 wow fadeInUp"></div>
					<img class="left-image wow fadeInLeft" src="/wp-content/uploads/2019/06/FlycastUSA-Denver-Colorado-20.jpg" alt="" />
					<div class="col-lg-5 content-right wow fadeInUp">
						<h2>FLYCASTS</h2>
						<p>Brooklyn sartorial heirloom, meh hoodie pabst leggings godard. Gluten-free try-hard truffaut keytar, put a bird on it pork belly authentic subway tile aesthetic sustainable art party literally tumeric helvetica viral. Fashion axe street art you probably haven't heard of them literally tote bag ramps hella vice.</p>
						<div class="btn-wrap01">
							<a class="cta" href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row row02">
					<div class="col-lg-5 content-left wow fadeInUp">
						<h2>EXCURSIONS</h2>
						<p>Brooklyn sartorial heirloom, meh hoodie pabst leggings godard. Gluten-free try-hard truffaut keytar, put a bird on it pork belly authentic subway tile aesthetic sustainable art party literally tumeric helvetica viral. Fashion axe street art you probably haven't heard of them literally tote bag ramps hella vice.</p>
						<div class="btn-wrap02">
							<a class="cta" href="#">LEARN MORE</a>
						</div>
					</div>
					<img class="right-image wow fadeInRight" src="/wp-content/uploads/2019/09/FlycastUSA-Denver-Colorado-1.jpg" alt="" />
					<div class="about-black-box02 wow fadeInUp"></div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row row03 justify-content-center">
					<div class="col-md-5 glossary wow fadeInUp">
						<h3>GLOSSARY</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste inventore enim dicta aliquam ad minus atque facilis, eveniet veniam, ex perferendis quos saepe nostrum quidem fugit, earum illum error dolorum.</p>
						<div class="glossary-btn-wrap">
							<a class="cta" href="#">VIEW ALL</a>
						</div>
					</div>
					<div class="col-md-5 resources wow fadeInUp">
						<h3>RESOURCES</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste inventore enim dicta aliquam ad minus atque facilis, eveniet veniam, ex perferendis quos saepe nostrum quidem fugit, earum illum error dolorum.</p>
						<div class="resources-btn-wrap">
							<a class="cta" href="#">VIEW ALL</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="blog-section" id="about-blog-section">
			<div class="blog row justify-content-center">
				<h2 class="wow fadeIn">THE BLOG</h2>
			</div>
			<div class="row justify-content-center">
							<div class="red-bg-about"></div>
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

