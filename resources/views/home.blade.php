@extends('layouts.layout')

@section('content')

    	<!--- Slider -->

	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" class="active" data-slide-to="0"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="width-height-100" src="http://new.amberballoons.com/img/AmberBalloons_top1.jpg">
				<div class="amber-text-img">
					<img class="amber-width" src="http://new.amberballoons.com/img/amber_title.png">
				</div>

			</div>
			<div class="carousel-item">
				<img class="width-height-100" src="http://new.amberballoons.com/img/AmberBalloons_top1.jpg">
				<div class="carousel-caption">

					<h1 class="dispaly-2">
						Title
					</h1>
					<button type="button" class="btn btn-outline-light btn-lg">
						Get started
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img class="width-height-100" src="http://new.amberballoons.com/img/AmberBalloons_top1.jpg">
			</div>


			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#slides" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#slides" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>

		</div>

	</div>



	<!-- Side navigation -->

	<div id="side-navigation" class="sidenav sidenav-icons text-center left-slide">
		<a class="lang-elem" href="#">
			<span class="show-elem">&nbsp;EN&nbsp;|&nbsp;RU&nbsp;|&nbsp;LV&nbsp;</span>
			<i class="fas fa-at"></i>
		</a>
		<a class="tel-elem" href="#">
			<span class="show-elem">+371&nbsp;22&nbsp;411&nbsp;211&nbsp;</span><i class="fab fa-whatsapp"></i>
		</a>
		<a class="mail-elem" href="mailto:fly@amberballoons.com">
			<span class="show-elem">fly@amberballoons.com&nbsp;</span>
			<i class="far fa-envelope"></i>
		</a>
		<a class="chat-elem" href="#">
			<span class="show-elem">CHAT&nbsp;</span>
			<i class="far fa-comment"></i>
		</a>
		<a class="map-elem" href="/launchsites">
			<span class="show-elem">LAUNCH SITES&nbsp;</span>
			<i class="fas fa-map-marker-alt"></i>
		</a>

	</div>

	

	<script>

		$(document).ready(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 850) {
					$('#side-navigation').fadeOut( 1000 );
				}
				else {
					$('#side-navigation').fadeIn();
				}
			});
		});

	</script>

	<!--- Welcome Section -->

	<div class="container">
		<div class="padding row welcome text-center">
			<div class="col-12">
				<h1 class="text-orange">Choose your experience</h1>
			</div>
		</div>
	</div>

	<!---Arrow Section

	<div class="container">
		<div class="padding row welcome text-center">
			<div class="col-md-6">
				<img src="img/arrow.png" />
			</div>
		</div>
	</div>  -->
	

	<!--- Cards 4 -->

	<div class="container padding">
		<div class="row padding">
			<div class="col-md-3 col-sm-6">
				<div class="card bg-plum no-border zoom">
					<img class="card-img-top image" src="http://new.amberballoons.com/img/pexels-photo-1396763.png">
					<div class="card-body text-center">
						<h5 class="card-title">Birthday gift packages<h5>
								<a href="#" class="btn btn-outline-secondary">Get on board</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="card bg-red no-border zoom">
					<img class="card-img-top image" src="http://new.amberballoons.com/img/pexels-photo-1396761.png">
					<div class="card-body text-center">
						<h5 class="card-title">Celebration gift packages<h5>
								<a href="#" class="btn btn-outline-secondary">Get on board</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="card bg-orange no-border zoom">
					<img class="card-img-top image" src="http://new.amberballoons.com/img/pexels-photo-1396763.png">
					<div class="card-body text-center">
						<h5 class="card-title">Luxury gift packages<h5>
								<a href="#" class="btn btn-outline-secondary">Get on board</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="card bg-orange-dark no-border zoom">
					<img class="card-img-top image" src="http://new.amberballoons.com/img/pexels-photo-1396761.png">
					<div class="card-body text-center">
						<h5 class="card-title">Romantic gift packages<h5>
								<a href="#" class="btn btn-outline-secondary">Get on board</a>
					</div>
				</div>
			</div>
			<hr>
		</div>
	</div>



	<!--- Info Section with horizontal slider -->
	<div class="container-fluid gradient-bg">
		<div class="container-1400">

			<div class="row info-section-text">
				<div class="col-lg-7 bg-grey py-5">
					<h2>Know before flight</h2>
					<div id="carouselContent" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">

							<div class="carousel-item active center-div">
								<div class="margin-slider-text">
									<p class="header-text">When we fly</p>
									<p>Our flights are scheduled for the early morning and early evening, seven days a week from March - October.</p>
									<p>During October we fly once a day due to the limited daylight hours.</p>
								</div>
							</div>
							<div class="carousel-item center-div">
								<div class="margin-slider-text">
									<p class="header-text">When we fly</p>
									<p>Our flights are scheduled for the early morning and early evening, seven days a week from March - October.</p>
									<p>During October we fly once a day due to the limited daylight hours.</p>
								</div>
							</div>


						</div>
						<a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>

					</div>
				</div>

				<div class="col-lg-5 bg-blue text-center py-5">
					<span style="font-size:9rem;"><i class="far fa-smile"></i></span>
					<h2>Safety</h2>
					<p>The safety of our passengers is top priority: that's why we only start in favorable weather conditions!</p>
				</div>
			</div>

		</div>
	</div>

	<!--- Welcome Section -->

	<div class="container">
		<div class="padding row welcome text-center">
			<div class="col-12 about-latvia">
				<h1 class="text-green">Look to ze green latvia from a birds eye view</h1>
				<p>Text text randm text long long random text text random long text.</p>
			</div>
		</div>
	</div>

	<!--- Fixed background   -->
	<figure>
		<div class="fixed-wrap">
			<div id="fixed">
			</div>
		</div>
	</figure>

	<!--- Instafeed Section -->

	<div class="container">
		<div class="padding row welcome text-center">
			<div class="col-12">
				<h1 class="text-orange">Fallow balloons on instagram</h1>
			</div>
		</div>
	</div>

	<div class="container-fluid p-0">
		<div class="row no-gutters" id="instafeed">
		</div>
    </div>
    
    <?php
        function isMobileDevice() {
            return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        }
	?>
	<script>
		var isMobile = <?php echo isMobileDevice() ?>;
	
	</script>


	<script src="http://new.amberballoons.com/js/instafeed.min.js"></script>
	<script src="http://new.amberballoons.com/js/custom.js"></script>


	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span><i class="fas fa-arrow-up"></i></span></a>

	<script src="http://new.amberballoons.com/js/scripts.js"></script>
	

@endsection
