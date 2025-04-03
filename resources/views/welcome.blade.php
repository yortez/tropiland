<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Star Hotels Helps you Discover The Perfect Balance
	Of Hospitality, Luxury And
	Comfort.">
	<title>Star Hotels</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./resources/views/assets/css/global-header.css">
	<link rel="stylesheet" href="./resources/views/assets/css/global-footer.css">
	<link rel="stylesheet" href="./resources/views/assets/css/accesibility.css">
	<link rel="stylesheet" href="./resources/views/assets/css/index.css">
	<link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon">
</head>
<body class="scroll-bar">
	<div id="loader">
		<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
			<path fill="#d4af37" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
				<animateTransform
					attributeName="transform"
					attributeType="XML"
					type="rotate"
					dur="1s"
					from="0 50 50"
					to="360 50 50"
					repeatCount="indefinite" />
		</path>
		</svg>
	</div>
   <header>
      <div class="header-container">
         <nav class="header-nav-bar">
				<div class="header-nav-logo">
					<a href="index.html">
						<img src="https://res.cloudinary.com/joshuafolorunsho/image/upload/v1591615159/star_hotels_logo.png"
							alt="star hotels logo">
					</a>
				</div>
				<ul class="header-nav-lists">
						<li class="header-nav-list">
							<a class="header-nav-link header-active" href="index.html">Home</a>
						</li>
						<li class="header-nav-list"><a class="header-nav-link"
								href="rooms-and-suites.html">Rooms and Suites</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="facilities.html">Facilities</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="contact-page.html">Contact Us</a></li>
						<li class="header-nav-list"><a class="header-btn header-btn-custom" href="https://timbu.com/search?query=hotel">BOOK NOW</a></li>
					</ul>

            <div class="header-hamburger-icon">
               <div class="header-hamburger-line-1"></div>
               <div class="header-hamburger-line-2"></div>
               <div class="header-hamburger-line-3"></div>
            </div>
         </nav>
      </div>

      </div>
	</header>

	<div class="jumbotron-container">
		<div class="jumbotron-left">
			<h2 class="jumbotron-header">Discover the perfect balance <br> of hospitality, luxury and <br>comfort.</h2>
			<p>We are focused on providing clients with the highest level<br>
					of comfort and excellent affordable rates</p>
					<a href="https://timbu.com/search?query=hotel" class="btn btn-fill btn-large">Book Now</a>
		</div>
		<div class="jumbotron-right">
			<form action="" class="jumbotron-form">
				<!-- Put the form here -->
					<h3>Scared you can't afford it?</h3><br>
					<p>Don't worry, our hotel offers the best<br> affordable rates you can ever find.</p>
					<label class="hide" for="arrival">arrival date</label>
					<input type="text" id="arrival" name="arrival_date" placeholder="Arrival Date" onfocus="(this.type='date')" ><br>
					<label class="hide" for="departure">departure date</label>
					<input type="text"  id="departure" name="departure_date" placeholder="Departure Date" onfocus="(this.type='date')" ><br>
					<label class="hide" for="guests">how many guests</label>
					<input type="text" id="guests" name="guests" placeholder="Guests"><br>
					<label class="hide" for="children">children</label>
					<input type="text" id="children" name="children" placeholder="Children"><br>
					<button type="button" class="rates">CHECK RATES</button>
			</form>
		</div>
	</div>

	<!-- Enjoy your stay in our hotel -->
	<div class="enjoy-container">
		<div class="enjoy-header">
			<h2 class="enjoy-heading">Enjoy your stay <br>at our hotel</h2>
			<hr class="horizontal">
			<p>We are more than being a hotel because we are able<br> to combine the quality standard of a hotel with the<br> advantages of an apartment.</p>
		</div>
	<div class="enjoy-services">
		<div class="first-col">
			<div class="upper">
					<span>
						<img src="./assets/img/clock.svg" alt="clock icon" class="enjoy__clock-icon">
					</span>
					<h3>24 hours Room Service</h3>
					<p>You have access to 24-hours a day room service at our hotel.</p>
			</div>
			<div class="lower">
				<span>
					<img src="./assets/img/database.svg" alt="fitness icon" class="enjoy__fitness-icon">
				</span>
				<h3>Fitness and Spa</h3>
				<p>Access to fitness and Spa is part of our hotel package when you make a booking.</p>
			</div>

		</div>
		<div class="sec-col">
				<div class="upper">
					<span>
						<img src="./assets/img/coffee.svg" alt="coffee icon" class="enjoy__coffee-icon">
					</span>
						<h3>Restaurant and Bars</h3>
					<p>You have access to the world state of art restaurants and bars at our hotel</p>
				</div>
				<div class="lower">
					<span>
						<img src="./assets/img/wifi.svg" alt="wifi icon" class="enjoy__wifi-icon">
					</span>
						<h3>Free Wi-Fi Access</h3>
						<p>You have access to 24-hours free Wi-Fi services irrespective of any room.</p>
				</div>
		</div>
		<div class="third-col cont">
			<img src="./assets/img/ant-design_play-circle-filled.svg" alt="video play icon" class="enjoy__play-icon">
			<img src="./assets/img/video link.webp" alt="women in swimming pool" class="third-col-video">
		</div>
	</div>

	</div>
	<section class="special-offers">
		<!-- Top Text -->
		<div class="page-header-container">

		  <h2 class="page-header">Simplicity is the ultimate <br>Watchword</h2>


            </div>
			<div class="row center-lg">
				<div class="col image-col right-marg">
					<img src="assets/img/hotel-1.webp" alt="room-image" class="small-image">
					<img src="assets/img/hotel-2.webp" alt="room-image" class="small-image">
					<img src="assets/img/hotel-3.webp" alt="room-image" class="small-image img-hide">
					<div class="side-by-side-container">
						<div class="large-image-container">
							<img src="assets/img/hotel-4-large.webp" alt="room-image-large" class="large-image">
						</div>
						<section class="stacked-image-container">
						  <div><img src="assets/img/hotel-5.webp" alt="room-image" class="small-image"></div>
						  <div><img src="assets/img/hotel-6.webp" alt="room-image" class="small-image"></div>
						</section>
					</div>
				</div>
				<div class="col">
					<p class="offers-sub-title">
							The fact that we are run by hospitality professionals<br>and equipped with the world best interior designers <br> is why our rooms and suites are second to none in <br>the universe
					</p>
					<ul class="offers-list">
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">Standard Room</p>
							</div>
						</li>
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">Executive Room</p>
							</div>
						</li>
						<li>
							<div>
								<img src="assets/img/check-square.svg" alt="tick" class="list-icon">
								<p class="list-text">King Suite</p>
							</div>
						</li>
					</ul>
					<a href="https://timbu.com/search?query=hotel" class="btn btn-fill btn-large centered">Book Now</a>
				</div>
			</div>
		</section>

	<!-- Client Reviews -->
	<div class="review-container">
		<div class="review-header">
			<h2 class="review-title">
				Client Reviews
			</h2>
			<hr class="horizontal">
			<p class="">We are very proud of the services we offer to our customers.<br>Read every word from our happy customers.</p>
		</div>
		<div class="cards-container">
				<div class="card">
					<img src="./assets/img/customer1.webp" alt="" class="card-avi">
					<h2 class="card-title">
							Mark Essien
					</h2>
					<h3 class="card-subtitle">
						Lagos, Nigeria.
					</h3>
					<p class="card-desc">Words can't explain the kind of treatment I received from the management of star hotels. They are the best in the country.</p>
				</div>
				<div class="card">
					<img src="./assets/img/customer2.webp" alt="" class="card-avi">
					<h2 class="card-title">
							Seyi Onifade
					</h2>
					<h3 class="card-subtitle">
							Lagos, Nigeria.
					</h3>
					<p class="card-desc">Star hotels makes you feel the best room quality that makes you feel the comfort of a home.</p>
				</div>
				<div class="card">
					<img
						src="./assets/img/customer3.webp"
						alt=""
						class="card-avi">
					<h2 class="card-title">
						Fayemi David
					</h2>
					<h3 class="card-subtitle">
						Lagos, Nigeria.
					</h3>
					<p class="card-desc">My Family and I are very happy when we lodge into star hotels. They are by far the best in the universe.</p>
				</div>


			</div>
	</div>
	<footer class="footer">
		<div class="footer-container">
			<nav class="footer-nav">
				<div class="footer-description">
					<h3 class="footer-description-title">Star Hotels</h3>
					<p>Hospitality and Comfort are our watchwords</p>
				</div>
				<div class="footer-contact-us">
					<h3 class="footer-description-title">Contact Us</h3>
					<p class="footer-description-detail">
						<img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">

						<span>23, Fola Osibo, Lekki Phase 1</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number">
						<span>
					 08185956620</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
						<span>support@starhotels.com</span> </p>
				</div>
				<div class="footer-follow-us">
					<h3 class="footer-description-title">Follow Us</h3>
					<ul class="footer-follow-us-lists">
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/facebook.svg" alt="star hotels facebook page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/twitter.svg" alt="star hotels twitter page">
							</a>
						</li>
						<li class="follow-us-list">
							<a href="">
								<img src="./assets/img/instagram.svg" alt="star hotels instagram page">
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</footer>
	<script defer async>
		(() => {
			const loader = document.getElementById('loader');
			const scrollBar = document.getElementsByClassName('scroll-bar')[0];
			window.addEventListener('load', () => {
				loader.classList.add('none');
				scrollBar.classList.remove('scroll-bar')
			});
		})();
	</script>
	<script  defer async src="assets/js/toggleHamburger.js"></script>
</body>
</html>
