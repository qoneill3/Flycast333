<?php
/**
 * Template Name: Trips
 *
 * 
 *
 * @package Flycast
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<section class="trips-header">
				<div class="bg-overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8 title">
								<h1 class="hero-h1 slower">TRIPS</h1>
								<h2 class="hero-h2">ITINERARY, PLANS, TRAVEL ADVICE AND MORE</h2>
								<div class="ind-btn-wrap">
									<a class="hero-cta" href="#">CONTACT US</a>
								</div>
							</div>
						</div>	
				</div>
				<div class="red-stripe"></div>
			</section>

			<section class="trips-intro">
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
						<img class="intro-img wow fadeInUp" src="/wp-content/uploads/2019/06/FlycastUSA-Denver-Colorado-20.jpg" alt="" />
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

		<section class="trips-pullquote">
				<div class="dark-overlay"></div>
					<img class="quote" src="/wp-content/uploads/2019/06/quote.svg" alt="" />
						<p class="wow fadeInUp">FlyCast seems to do it all. These guys are avid fisherman and they live by what they preach.</p>
			</section>

		<section class="trips-01">
			<p class="large01">01</p>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md col-left">
						<div class="light-bg wow fadeInLeft" data-wow-delay=".5s"></div>
						<img class="img-left wow fadeInLeft" src="/wp-content/uploads/2019/06/Flycast-USA-Denver-Colorado-24.jpg" alt="" />
						<img  class="img-right wow slideInUp" src="/wp-content/uploads/2019/06/FlycastUSA-Denver-Colorado-16.jpg" alt="" />
					</div>
					<div class="col-md col-right wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s" data-wow-offset="10">
						<h2>Trips 010101</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae voluptates illum, quis repellat odit atque nisi a eos cumque. Cumque doloribus totam voluptate, dignissimos enim tenetur dolore eveniet. Nihil id unde, in optio modi molestias animi adipisci blanditiis dolore repellendus, dignissimos distinctio, illo tempora nemo quibusdam nulla temporibus harum a!</p>
					</div>
				</div>
			</div>
		</section>

		<section class="trips-02">
			<p class="large02">02</p>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md col-left wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s" data-wow-offset="10">
							<h2>Trips 020202</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit ex modi quibusdam voluptate assumenda sequi reprehenderit earum ut tenetur ipsum non, aut molestias dolores tempore explicabo a cumque eum veniam alias odio eius quisquam molestiae architecto deserunt. Illo laboriosam harum mollitia dignissimos sint eos illum architecto, quae, quia modi odit.</p>
						</div>
						<div class="col-md col-right">
							<img class="img-left wow fadeInUp" src="/wp-content/uploads/2019/06/Flycast-USA-Denver-Colorado-24.jpg" alt="" />
							<img  class="img-right wow fadeInRight" src="/wp-content/uploads/2019/06/FlycastUSA-Denver-Colorado-16.jpg" alt="" />
							<div class="light-bg wow fadeInRight" data-wow-delay=".5s"></div>
						</div>
					</div>
				</div>
			
		</section>

		<section class="trips-03">
			<p class="large03">03</p>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md col-left">
						<img class="img-left" src="/wp-content/uploads/2019/06/Flycast-USA-Denver-Colorado-24.jpg" alt="" />
						<img  class="img-right" src="/wp-content/uploads/2019/06/FlycastUSA-Denver-Colorado-16.jpg" alt="" />
						<div class="light-bg"></div>
					</div>
					<div class="col-md col-right">
						<h2>Trips 030303</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore doloremque optio quo nisi, vero commodi itaque, dolor alias molestiae sunt, sed quam possimus voluptatem! Voluptas accusamus ipsa molestias, magni rerum accusantium harum commodi, quas optio, adipisci id praesentium porro quod pariatur aliquam atque corporis similique dolore quo, blanditiis eius ipsam.</p>
					</div>
				</div>
			</div>
		</section>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>