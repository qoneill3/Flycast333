<?php
/**
 * Template Name: Homepage
 *
 * 
 *
 * @package Flycast
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<section class="hompage-hero">
			<div class="bg-overlay"></div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 title">
						<h1 class="hero-h1 slower">FLYCAST USA</h1>
						<h2 class="hero-h2">DYNAMIC FLY FISHING REPORTS</h2>
						<div class="btn-wrap">
							<a class="hero-cta" href="#">DAILY CAST</a>
						</div>
					</div>
				</div>	
			</div>

			<h2 class="faded-txt wow fadeInRight" data-wow-delay=".3s">RIVER</h2><br><h2 class="faded-txt-2 wow fadeInRight">FORECASTS</h2>
			<p class="scroll wow fadeIn">SCROLL</p>
			<div class="scroll-bar wow fadeIn"></div>
			<div class="red-stripe"></div>
		</section>

		<section class="homepage-intro">
			<img class="fish-svg" src="/wp-content/uploads/2019/09/fish01.svg" alt="fly fishing" />
			<div class="container-fluid">
				<div class="row justify-content-center">
					<h2>WHAT WE DO</h2>
					<br>
					<p>Brooklyn sartorial heirloom, meh hoodie pabst leggings godard. Gluten-free try-hard truffaut keytar, put a bird on it pork belly authentic subway tile aesthetic sustainable art party literally tumeric helvetica viral. Fashion axe street art you probably haven't heard of them literally tote bag ramps hella vice. Ennui gluten-free poke chartreuse drinking vinegar, raclette coloring book succulents vice lo-fi freegan seitan gastropub taxidermy.</p>
				</div>
			</div>
			<img class="fish-svg-02" src="/wp-content/uploads/2019/09/fish02.svg" alt="fishing reports" />
		</section>

		<section class="homepage-content">
			<div class="container-fluid">
				<div class="row">
					<div class="black-box wow fadeInUp"></div>
					<img class="left-img wow fadeInLeft" src="/wp-content/uploads/2019/09/FlycastUSA-Denver-Colorado-17.jpg" alt="flycast fishing reports" />
					<div class="col-md-5 content-right wow fadeInUp">
						<h2>WHO WE ARE</h2>
						<p>Brooklyn sartorial heirloom, meh hoodie pabst leggings godard. Gluten-free try-hard truffaut keytar, put a bird on it pork belly authentic subway tile aesthetic sustainable art party literally tumeric helvetica viral. Fashion axe street art you probably haven't heard of them literally tote bag ramps hella vice.</p>
						<div class="btn-wrap01">
							<a class="cta" href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row row02">
					<div class="col-md-5 wow fadeInUp content-left">
						<h2>WHY IT MATTERS</h2>
						<p>Brooklyn sartorial heirloom, meh hoodie pabst leggings godard. Gluten-free try-hard truffaut keytar, put a bird on it pork belly authentic subway tile aesthetic sustainable art party literally tumeric helvetica viral. Fashion axe street art you probably haven't heard of them literally tote bag ramps hella vice.</p>
						<div class="btn-wrap02">
							<a class="cta" href="#">LEARN MORE</a>
						</div>
					</div>
					<img class="right-img wow fadeInRight" src="/wp-content/uploads/2019/09/FlycastUSA-Denver-Colorado-20.jpg" alt="flycast fishing reports" />
					<div class="black-box02 wow fadeInUp"></div>
				</div>
			</div>
		</section>

		<section class="blog-section">
			<div class="blog row justify-content-center">
				<h2 class="wow fadeIn">THE BLOG</h2>
			</div>
			<div class="row justify-content-center">
				<div class="red-bg"></div>

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

			<section class="homepage-pullquote">
				<div class="dark-overlay"></div>
				<img class="quote" src="/wp-content/uploads/2019/06/quote.svg" alt="" />
				<p class="wow fadeInUp">FlyCast seems to do it all. These guys are avid fisherman and they live by what they preach.</p>
			</section>

			<section class="newsletter">
				<img class="river-svg" src="/wp-content/uploads/2019/09/river.svg" alt="Colorado Rivers">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<h2>SIGN UP FOR OUR NEWSLETTER</h2>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row justify-content-center">
						<input class="field" type="text" placeholder="FIRST" />
						<input class="field" type="text" placeholder="LAST" />
						<input class="field" type="email" placeholder="EMAIL" />
					</div>
					<div class="row justify-content-center">
						<div class="btn-wrap03">
							<a href="#">SUBMIT</a>
						</div>
					</div>
				</div>
			</section>

			<section class="insta">
				<div class="container-fluid">
					<div class="row">
						<h2 class="handle">@FLYCASTUSA</h2> 
					</div>	
					
					<div class="row">
						<?php echo do_shortcode(' [insta-gallery id="1"] '); ?>
					</div>
				</div>
			</section>

			
<section class="testimonials">
  <div class="row justify-content-center"> <!-- any section with full width text or nothing to right or left of text -->
    <h2 class="test-h2"> TESTIMONIALS </h2>
	</div>

      <div class="testimonials-slick">
      	<?php $t_1 = get_field('testimonial_1');
      		  $t_1_c = $t_1['content'];
      		  $t_1_a = $t_1['author'];
      		  $t_2 = get_field('testimonial_2');
      		  $t_2_c = $t_2['content'];
      		  $t_2_a = $t_2['author'];
      		  $t_3 = get_field('testimonial_3');
      		  $t_3_c = $t_3['content'];
      		  $t_3_a = $t_3['author'];
      		  $t_4 = get_field('testimonial_4');
      		  $t_4_c = $t_4['content'];
      		  $t_4_a = $t_4['author'];
      		  $t_5 = get_field('testimonial_5');
      		  $t_5_c = $t_5['content'];
      		  $t_5_a = $t_5['author'];
      		  $t_6 = get_field('testimonial_6');
      		  $t_6_c = $t_6['content'];
      		  $t_6_a = $t_6['author'];
        ?>

 

              <div class="testimonials-item">
              	
                <p>
    				<?php echo $t_1_c ?>
                </p>
                 
              </div>
              <div class="testimonials-item">
              	
                <p>
    				<?php echo $t_2_c ?>
                </p>
                 
              </div>
              <div class="testimonials-item">
              	
                <p>
    				<?php echo $t_3_c ?>
                </p>
                 
              </div>

  

      </div>


  

</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


