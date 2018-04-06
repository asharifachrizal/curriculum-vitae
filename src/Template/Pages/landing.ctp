<?php
$this->layout = false;
?>  

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Nunito:300,400,600,700" rel="stylesheet" type="text/css" />
	<?php
        echo $this->Html->css([
            '../canvas/css/bootstrap.css',
            '../canvas/style.css',
            '../canvas/css/dark.css',
            '../canvas/css/font-icons.css',
            '../canvas/one-page/css/et-line.css',
            '../canvas/css/animate.css',
            '../canvas/css/magnific-popup.css',

            '../canvas/css/responsive.css',
        ]);
    ?>

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Modern Blog Demo Specific Stylesheet -->
    <?php
        echo $this->Html->css([
            '../canvas/demos/modern-blog/modern-blog.css',
            '../canvas/demos/modern-blog/css/fonts.css',
            '../canvas/css/colors.php?color=dc3545',
        ]);
    ?>
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>Modern Blog Demo | Canvas</title>

	<style>

	</style>

</head>

<body class="stretched overlay-menu">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header clearfix static-sticky">

			<div id="header-wrap">

				<div class="container-fluid clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-mobile-logo="<?php echo $this->Url->image('../canvas/images/logo.png') ?>"><?php echo $this->Html->image('../canvas/images/logo-dark.png') ?></a>
						<a href="index.html" class="retina-logo" data-mobile-logo="<?php echo $this->Url->image('../canvas/images/logo@2x.png') ?>"><?php echo $this->Html->image('../canvas/images/logo@2x.png') ?></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="clearfix">
						<ul>
							<li class="current"><a href="#"><div>Home</div></a></li>
							<li><a href="#"><div>Articles</div></a></li>
							<li><a href="#"><div>Events</div></a></li>
							<li><a href="#"><div>Videos</div></a></li>
							<li><a href="#"><div>Contact</div></a></li>
						</ul>

						<a href="#" id="overlay-menu-close" class="d-none d-lg-block"><i class="icon-line-cross"></i></a>

					</nav><!-- #primary-menu end -->
				</div>
			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element clearfix" style="height: 100% !important;">
			<div class="fslider full-screen force-full-screen" data-speed="1800" data-pause="5000" data-animation="fade" data-arrows="true" data-pagi="false">
				<div class="flexslider full-screen force-full-screen">
					<div class="slider-wrap force-full-screen">
						<!-- Slide 1 -->
						<div class="slide center full-screen force-full-screen" style="background: url(<?php echo $this->Url->image('../canvas/demos/modern-blog/images/slider/1.jpg') ?>) center center; background-size: cover;">
							<div class="flex-caption dark d-block">
								<h3 class="mb-2 h1"><a href="#" class="text-white">Thing That Make You Love</a></h3>
								<p class="h5">Credibly synthesize seamless</p>
							</div>
						</div>
						<!-- Slide 2 -->
						<div class="slide center full-screen force-full-screen" style="background: url(<?php echo $this->Url->image('../canvas/demos/modern-blog/images/slider/2.jpg') ?>) center center; background-size: cover;">
							<div class="flex-caption dark d-block">
								<h3 class="mb-2 h1"><a href="#" class="text-white">The Ultimate Guide To Fashion</a></h3>
								<p class="h5">Monotonectally foster cross</p>
							</div>
						</div>
						<!-- Slide 3 -->
						<div class="slide center full-screen force-full-screen" style="background: url(<?php echo $this->Url->image('../canvas/demos/modern-blog/images/slider/3.jpg') ?>) center center; background-size: cover;">
							<div class="flex-caption dark d-block">
								<h3 class="mb-2 h1"><a href="#" class="text-white">Learn How We Made Fashion</a></h3>
								<p class="h5">Intrinsicly embrace scalable</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!-- #Slider end -->

		<!-- Content
		============================================= -->
		<section id="content" class="bg-light">

			<div class="content-wrap pt-lg-0 pt-xl-0 pb-0">

				<div class="container clearfix">

					<div class="heading-block nobottomborder center pt-4 mb-3">
						<h3>Articles</h3>
					</div>

					<!-- Posts
					============================================= -->
					<div class="row grid-container infinity-wrapper clearfix">

						<!-- ARTICLE NO. 1 -->
						<div class="col-md-6 p-3">
							<div class="entry mb-1 clearfix">
								<div class="entry-image mb-3">
									<a href="demos/modern-blog/images/items/lightbox/1.jpg" data-lightbox="image" style="background: url(<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/1.jpg') ?>) no-repeat center center; background-size: cover; height: 278px;"></a>
								</div>
								<div class="entry-title">
									<h3><a href="#">How To Make More travel By Doing Less</a></h3>
								</div>
								<div class="entry-content">
									<p>Distinctively unleash e-business testing procedures vis-a-vis future-proof leadership. Energistically synthesize leveraged e-business whereas proactive.</p>
								</div>
								<ul class="entry-meta nohover clearfix">
									<li class="fleft"><i class="icon-calendar2"></i> 10th Feb 2014</li>
									<li class="fright">MockUp</li>
								</ul>
								<ul class="entry-meta hover clearfix">
									<li class="fleft ls1"><a href="#">View More &rarr;</a></li>
								</ul>
							</div>
						</div>

						<!-- ARTICLE NO. 2 -->
						<div class="col-md-6 p-3">
							<div class="entry mb-1 clearfix">
								<div class="entry-user">
									<?php echo $this->Html->image('../canvas/demos/modern-blog/images/user/semicolonweb-logo.png') ?>
									<h4>SemiColoWeb Tech.<span>Themeforest.net</span></h4>
								</div>
								<div class="entry-image mb-3">
									<a href="demos/modern-blog/images/items/lightbox/2.jpg" data-lightbox="image" style="background: url('<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/2.jpg') ?>') no-repeat center center; background-size: cover; height: 190px;">
									</a>
								</div>
								<div class="entry-title">
									<h3><a href="#">This is a Standard post with a Preview Image</a></h3>
								</div>
								<div class="entry-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim.</p>
								</div>
								<ul class="entry-meta nohover clearfix">
									<li class="fleft"><i class="icon-calendar2"></i> 10th Feb 2014</li>
									<li class="fright">Article</li>
								</ul>
								<ul class="entry-meta hover clearfix">
									<li class="fleft ls1"><a href="#">View More &rarr;</a></li>
								</ul>
							</div>
						</div>

						<!-- ARTICLE NO. 3 -->
						<div class="col-md-6 p-3">
							<div class="entry mb-1 clearfix">
								<div class="entry-image mb-3">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/P3Huse9K6Xs" allowfullscreen style="border: 0;"></iframe>
								</div>
								<div class="entry-title">
									<h3><a href="#">This is a Standard post with a Youtube Video</a></h3>
								</div>
								<div class="entry-content">
									<p>Distinctively unleash e-business testing procedures vis-a-vis future-proof leadership. Energistically synthesize leveraged e-business whereas proactive. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
								</div>
								<ul class="entry-meta nohover clearfix">
									<li class="fleft"><i class="icon-calendar2"></i> 10th Feb 2014</li>
									<li class="fright">Vimeo</li>
								</ul>
								<ul class="entry-meta hover clearfix">
									<li class="fleft ls1"><a href="#">View More &rarr;</a></li>
								</ul>
							</div>
						</div>

						<!-- ARTICLE NO. 4 -->
						<div class="col-md-6 p-3">
							<div class="entry mb-1 clearfix">
								<div class="entry-image mb-3">
									<a href="#">
										<video poster="<?php echo $this->Url->image('../canvas/images/videos/explore-poster.jpg') ?>" preload="auto" loop autoplay muted style="display: block; width: 100%;">
											<source src='<?php echo $this->Url->image('../canvas/images/videos/explore.mp4') ?>' type='video/mp4' />
										</video>
									</a>
								</div>
								<div class="entry-title">
									<h3><a href="#">This is a Standard post with a HTML5 Video</a></h3>
								</div>
								<div class="entry-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur.</p>
								</div>
								<ul class="entry-meta nohover clearfix">
									<li class="fleft"><i class="icon-calendar2"></i> 10th Feb 2014</li>
									<li class="fright">Vimeo</li>
								</ul>
								<ul class="entry-meta hover clearfix">
									<li class="fleft ls1"><a href="#">View More &rarr;</a></li>
								</ul>
							</div>
						</div>

						<!-- ARTICLE NO. 5 -->
						<div class="col-md-6 p-3">
							<div class="entry mb-1 clearfix">
								<div class="entry-user pb-2 border-bottom">
									<?php echo $this->Html->image('../canvas/demos/modern-blog/images/user/semicolonweb-logo.png') ?>
									<h4>SemiColoWeb Tech.<span>Themeforest.net</span></h4>
								</div>
								<div class="entry-title pt-2">
									<h3><a href="#">This is a Standard post with Author Name</a></h3>
								</div>
								<div class="entry-image mb-3">
									<a href="# data-lightbox="image" style="background: url('<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/3.jpg') ?>') no-repeat center bottom; background-size: cover; height: 210px;">
									</a>
								</div>
								<div class="entry-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit ratione, voluptatem.</p>
								</div>
								<ul class="entry-meta nohover clearfix">
									<li class="fleft"><i class="icon-calendar2"></i> 10th Feb 2014</li>
									<li class="fright">Nature</li>
								</ul>
								<ul class="entry-meta hover clearfix">
									<li class="fleft ls1"><a href="#">View More &rarr;</a></li>
								</ul>
							</div>
						</div>

						<!-- ARTICLE NO. 6 -->
						<div class="col-md-6 p-3">
							<div class="entry mb-1 clearfix">
								<div class="entry-image mb-3">
									<div class="fslider" data-arrows="false" data-lightbox="gallery">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="#" data-lightbox="gallery-item" style="background: url('<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/4-1.jpg') ?>') no-repeat center bottom; background-size: cover; height: 278px;"></a></div>
												<div class="slide"><a href="#" data-lightbox="gallery-item" style="background: url('<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/4-2.jpg') ?>') no-repeat center bottom; background-size: cover; height: 278px;"></a></div>
												<div class="slide"><a href="#" data-lightbox="gallery-item" style="background: url('<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/4-3.jpg') ?>') no-repeat center bottom; background-size: cover; height: 278px;"></a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="entry-title">
									<h3><a href="#">This is a Standard post with Gallery Image</a></h3>
								</div>
								<div class="entry-content">
									<p>Magni velit facilis donec quasi quidem error animi, rutrum sequi mi officia possimus fames, corporis culpa minim mollis tempora fuga, sed ipsam fugiat dictumst, nascetur aptent inceptos taciti. Natoque. Praesentium.</p>
								</div>
								<ul class="entry-meta nohover clearfix">
									<li class="fleft"><i class="icon-calendar2"></i> 10th Feb 2014</li>
									<li class="fright">Travel</li>
								</ul>
								<ul class="entry-meta hover clearfix">
									<li class="fleft ls1"><a href="#">View More &rarr;</a></li>
								</ul>
							</div>
						</div>

						<!-- ARTICLE NO. 7 -->
						<div class="col-md-6 p-3">
							<div class="entry mb-1 dark clearfix" style="background: url('<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/5.jpg') ?>') no-repeat center bottom; background-size: cover; height: 525px;">
								<div class="entry-title pt-3">
									<h3><a href="#" class="text-light">Standard Full Image</a></h3>
								</div>
								<div class="entry-content">
									<p class="t300">Magni velit facilis donec quasi quidem error animi, rutrum sequi mi officia.</p>
								</div>
								<div style="position: absolute; left: 0; bottom: 0; width: 100%;">
									<ul class="entry-meta nohover clearfix">
										<li class="fleft"><i class="icon-calendar2"></i> 10th Feb 2014</li>
										<li class="fright">Tools</li>
									</ul>
									<ul class="entry-meta hover clearfix">
										<li class="fleft ls1"><a href="#">View More &rarr;</a></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- ARTICLE NO. 8 -->
						<div class="col-md-6 p-3">
							<div class="entry mb-1 clearfix">
								<div class="entry-user">
									<?php echo $this->HTML->image('../canvas/demos/modern-blog/images/user/3.jpg') ?>
									<h4>Annie Spratt.<span>Apple Inc.</span></h4>
								</div>
								<div class="entry-title">
									<h3><a href="#">This is a Standard post with Image/Author</a></h3>
								</div>
								<div class="entry-image" style="padding-left: 20px; padding-right: 20px;">
									<a href="demos/modern-blog/images/items/lightbox/8.jpg" data-lightbox="image" style="background: url('<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/8.jpg') ?>') no-repeat center bottom; background-size: cover; height: 160px;">
									</a>
								</div>
								<ul class="entry-meta nohover clearfix">
									<li class="fleft"><i class="icon-calendar2"></i> 10th Feb 2014</li>
									<li class="fright">Food</li>
								</ul>
								<ul class="entry-meta hover clearfix">
									<li class="fleft ls1"><a href="#">View More &rarr;</a></li>
								</ul>
							</div>
						</div>

						<!-- ARTICLE NO. 9 -->
						<div class="col-md-6 p-3">
							<div class="entry mb-1 clearfix">
								<div class="entry-title pt-3">
									<h3><a href="#">This is a Standard post with Gallery Thumbs</a></h3>
								</div>
								<div class="entry-image masonry-thumbs" data-big="2" data-lightbox="gallery">
									<a href="#" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/9-1.jpg') ?>" alt="Gallery Thumb 1"></a>
									<a href="#" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/9-2.jpg') ?>" alt="Gallery Thumb 2"></a>
									<a href="#" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/9-3.jpg') ?>" alt="Gallery Thumb 3"></a>
									<a href="#" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/9-4.jpg') ?>" alt="Gallery Thumb 4"></a>
									<a href="#" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/9-5.jpg') ?>" alt="Gallery Thumb 5"></a>
									<a href="#" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/9-6.jpg') ?>" alt="Gallery Thumb 6"></a>
									<a href="#" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/9-7.jpg') ?>" alt="Gallery Thumb 7"></a>
									<a href="#" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/9-8.jpg') ?>" alt="Gallery Thumb 9"></a>
									<a href="#" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/items/9-9.jpg') ?>" alt="Gallery Thumb 10"></a>
								</div>
								<div class="entry-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit ratione, voluptatem. Luctus montes. Voluptatem dolorem parturient, egestas lacus nemo tempus reiciendis! Nihil provident. Nibh placeat</p>
								</div>
								<ul class="entry-meta nohover clearfix">
									<li class="fleft"><i class="icon-calendar2"></i> 10th Feb 2014</li>
									<li class="fright">Food</li>
								</ul>
								<ul class="entry-meta hover clearfix">
									<li class="fleft ls1"><a href="#">View More &rarr;</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Infinity Scroll Loader
					============================================= -->
					<div class="text-center">
						<div class="page-load-status hovering-load-status">
							<div class="css3-spinner infinite-scroll-request">
								<div class="css3-spinner-ball-pulse-sync">
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="alert alert-warning center infinite-scroll-last mx-auto" style="max-width: 20rem;">End of content</div>
							<div class="alert alert-warning center infinite-scroll-error mx-auto" style="max-width: 20rem;">No more pages to load</div>
						</div>
					</div>
					<div class="center d-none">
						<a href="demos/modern-blog/demo-modern-blog-2.html" class="load-next-posts"></a>
					</div>

				</div>

				<div class="section bg-white pt-4 pb-0 topmargin-sm nobottommargin">
					<div class="container">
						<div class="heading-block d-flex justify-content-center center nobottomborder mb-4">
							<img src="<?php echo $this->Url->image('../canvas/demos/modern-blog/images/instagram.png') ?>" class="align-self-center" alt="" height="28"><h3 class="ml-2 capitalize ls0 align-self-center">Instagram Feed</h3>
						</div>
					</div>
					<div class="instagram-button position-relative">
						<div id="instagram-photos" class="instagram-photos masonry-thumbs grid-6" data-user="5834720953" data-count="12" data-type="user"></div>
						<a href="#" class="button bg-white button-light button-rounded text-dark nomargin clearfix">Follow us on Instagram</a>
					</div>
				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-dark dark">

				<div class="container clearfix">

					<div class="col_half text-muted">
						Copyrights &copy; 2018 All Rights Reserved by Canvas Inc.<br>
					</div>

					<div class="col_half col_last">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-rounded si-colored si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-rounded si-colored si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-rounded si-colored si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-rounded si-colored si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-rounded si-colored si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-rounded si-colored si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
    <?php
        echo $this->Html->script([
            '../canvas/js/jquery.js',
            '../canvas/js/plugins.js',
        ]);
    ?>

	<!-- Footer Scripts
	============================================= -->
    <?php
        echo $this->Html->script([
            '../canvas/js/functions.js',
        ]);
    ?>

	<!-- ADD-ONS JS FILES -->
	<script>

		// Infinity Scroll
		jQuery(window).on( 'load', function(){

			var $container = $('.infinity-wrapper');

			$container.infiniteScroll({
				path: '.load-next-posts',
				history: false,
				status: '.page-load-status',
			});

			$container.on( 'load.infiniteScroll', function( event, response, path ) {
				var $items = $( response ).find('.infinity-loader');
				// append items after images loaded
				$items.imagesLoaded( function() {
					$container.append( $items );
					$container.isotope( 'insert', $items );
					setTimeout( function(){
						SEMICOLON.initialize.resizeVideos();
						SEMICOLON.initialize.lightbox();
						SEMICOLON.widget.loadFlexSlider();
					}, 1000 );
				});
			});

		});

	</script>

</body>
</html>