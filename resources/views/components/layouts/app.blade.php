<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tropiland Hotel Portal</title>

    @vite([
        'resources/css/index.css',
         'resources/css/accesibility.css',
         'resources/css/contact-page.css',
         'resources/css/rooms-and-suites.css',
         'resources/css/global-header.css',
         'resources/css/global-footer.css',
         'resources/css/facilities.css',
         'resources/js/switchRooms.js',
         'resources/js/toggleHamburger.js',
         ])
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
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
                  <div class="brand-name">
                      <a href="/">
                        Tropiland Hotel
                      </a>
                  </div>
                  <ul class="header-nav-lists">
                          <li class="header-nav-list">
                              <a class="header-nav-link header-active" href="/">Home</a>
                          </li>
                          <li class="header-nav-list"><a class="header-nav-link"
                                  href="/rooms-and-suites">Rooms and Suites</a></li>
                          <li class="header-nav-list"><a class="header-nav-link" href="/facilities">Facilities</a></li>
                          <li class="header-nav-list"><a class="header-nav-link" href="contact-page.html">Contact Us</a></li>
                          <li class="header-nav-list"><a class="header-btn header-btn-custom" href="/book">BOOK NOW</a></li>
                          <li class="header-nav-list"><a class="header-btn nav-link" href="/login">Log in</a></li>

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
    <main>
        {{ $slot }}
    </main>

    <footer class="footer">
		<div class="footer-container">
			<nav class="footer-nav">
				<div class="footer-description">
					<h3 class="footer-description-title">Tropiland Hotel</h3>
					<p>Hospitality and Comfort are our watchwords</p>
				</div>
				<div class="footer-contact-us">
					<h3 class="footer-description-title">Contact Us</h3>
					<p class="footer-description-detail">
						<img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">

						<span>Polomolok, South Cotabato</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number">
						<span>
					 08185956620</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
						<span>support@tropilandhotel.com</span> </p>
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

    @livewireScripts
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
