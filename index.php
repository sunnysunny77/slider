<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="JS sliders">
    <meta name="keywords" content="JS sliders">
    <meta name="author" content="D.C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sliders </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<header class="container-fluid d-flex flex-column justify-content-end justify-content-sm-center align-items-start flex-wrap">

	<h1 class="d-flex align-items-end px-4 pb-3 pe-md-5 m-0"> 
		
		Sliders
		<i class="fa-brands fa-android ps-3"></i>  

	</h1>

</header>

<nav class="container-fluid navbar navbar-expand-sm slider_8-navigation navigation border-bottom p-0">

	<div class="row m-0 p-0">

		<button class="col-auto navbar-toggler px-4 pb-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<div>
				<div class="slider_8-bar1"></div>
				<div class="slider_8-bar2"></div>
				<div class="slider_8-bar3"></div>
			</div>
		</button>

		<div class="col-12 collapse navbar-collapse pb-3 pb-sm-0" id="navbarNav">

			<ul class="navbar-nav">

				<li class="nav-item">

					<a class="nav-link active p-3" aria-current="page" href="#">SLIDER 8</a>

				</li>
		
			</ul>

		</div>

	</div>

</nav>

<main>

	<div class="container-xl g-0">

		<h2 class="text-center my-5"> Slider 1 </h2>

		<div class="slider_1-outer position-relative">

			<button class="c-custom-1 position-absolute slider_1-button slider-next slider-next-md d-none d-md-flex d-xl-none"><i class="fa-solid fa-arrow-right"></i></button>

			<button class="c-custom-1 position-absolute slider_1-button slider-next slider-next-lg d-none d-xl-flex"><i class="fa-solid fa-arrow-right"></i></button>

			<div class="slider-container slider_1-row row d-flex align-items-start justify-content-center justify-content-sm-between position-relative g-0">
				
				<?php

					$index = 1;

					while ($index < 5) {

						?>

							<div class="slider-item slider_1-item">

								<div class="slider_1-item-padding slider-padding">

									<div class="slider-body slider_1-item-body position-relative">

										<h3 class="slider_1-item-heading mb-1">

											Lorem ipsum 

										</h3>

										<b class="slider_1-item-bold d-block mb-3"> Integer id suscipit </b>

										<p class="slider_1-item-content mb-0">
											
											<?php echo str_repeat("Quisque in tellus lorem. Donec at elementum est. Integer id suscipit felis.", $index * 1.5); ?>

										</p>

										<button class="c-custom-1 position-absolute slider_1-button slider-next d-md-none"><i class="fa-solid fa-arrow-right"></i></button>

									</div>

								</div>
								
							</div>

						<?php

						$index++;

					}

				?>

			</div>

		</div>

	</div>

	<hr id="slider_2-top" class="my-5">

	<h2 class="text-center my-5"> Slider 2 </h2>

	<div class="container g-0">

		<div class="slider_2-container position-relative timeline-container">

			<?php

			$index = 1;
			$count = -1;
			$color_array = array("color-1", "color-2", "color-3", "color-4");

			while ($index < 5) {

				$direction = $index % 2 === 1 ? "flex-row" : "flex-row-reverse";
				$justify_even = $index % 2 === 1 ? "justify-content-md-start" : "justify-content-md-end";
				$justify_odd = $index % 2 === 1 ? "justify-content-md-end" : "justify-content-md-start";
				$justify_even = $index % 2 === 1 ? "justify-content-md-start" : "justify-content-md-end";
				$display = "d-none";
				$date_line_md = "";

				if ($index === 1) {

					$date_line_md = "slider_2-date-line-md";
					$display = "d-flex";
				}

				$count++;

				if ($count === count($color_array)) {

					$count = 0;
				}

			?>

				<div class="slider_2-item timeline-item <?php echo $display; ?> g-0">

					<div class="slider_2-padding row justify-content-center justify-content-md-between <?php echo $direction; ?> g-0">

						<div class="col-12 col-sm-8 col-md-5">

							<div class="row h-100 align-items-md-center <?php echo $justify_even; ?> g-0">

								<div class="col-12 col-md-11">
							
									<img class="slider_2-image <?php echo $pad_image; ?>" src="https://placehold.co/400x400/EEE/31343C"  alt="Placehold">

								</div>

							</div>

						</div>
				
						<div class="slider_2-date-line col-12 col-md-1 <?php echo $date_line_md; ?> position-relative d-flex justify-content-center align-items-md-center py-5 py-md-0">

							<div class="slider_2-date position-relative">

								<div class="slider_2-date-text d-flex align-items-center justify-content-center my-5 py-2 py-md-3 mx-auto">
									<?php echo $index . "000"?>
								</div>

							</div>

						</div>

						<div class="col-11 col-md-5 pt-md-5">

							<div class="row justify-content-center <?php echo $justify_odd; ?> g-0">

								<div class="slider_2-heading-container col-11 col-sm-10 col-md-12 col-lg-11 d-flex justify-content-start mb-4">

									<h3 class="lider_2-heading mw-lg-355 text-center text-lg-start border <?php echo $color_array[$count] ?> p-2 mb-3">

										Donec dui quam, et pellentesque

									</h3>	

								</div>

								<div class="slider_2-content col-12 col-md-11 text-center text-md-start">
								
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies lectus augue, ut commodo mi sagittis ut. Morbi tellus nunc, facilisis eu mi sed, ullamcorper congue tellus. In quam ex, accumsan ut varius ut, vestibulum nec nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tortor est, commodo vel quam eget, placerat viverra arcu. Nam eu laoreet lorem. Aliquam facilisis elementum risus, ut suscipit massa finibus et. Curabitur rutrum sapien eget fermentum dignissim. Curabitur pulvinar arcu urna, at rutrum urna molestie vel. Cras hendrerit sit amet ipsum in dignissim. Nam aliquam, purus a vulputate tempus, mauris ante auctor turpis, condimentum semper augue eros sit amet tellus. Maecenas augue lorem, condimentum sed viverra eget, pulvinar eget augue. Sed a metus eros. Donec vel felis et magna porta mollis. Maecenas vehicula quam sit amet ligula euismod, et pretium lacus dignissim.

								</div>

							</div>

						</div>

					</div>

				</div>

			<?php

			$index++;

			};

			?>

			<div class="slider_2-button-container position-absolute d-flex justify-content-center pt-5 pt-md-0">

				<button class="c-custom-1 timeline-button"><i class="fa-solid fa-arrow-down"></i></button>

			</div>

		</div>

	</div>

	<hr class="my-5">

	<h2 class="text-center my-5"> Slider 3 </h2>

	<div class="containe g-0">

		<div class="slider_3-border-img">

			<div class="slider_3-background" role="img" aria-label="email notifications">

			<div class="slider_3-shrink-container shrink-container">

				<div class="slider_3-container slider-container">

					<button aria-label="open-left" class="slider_3-button-next open-left"></button>
					<a href="mailto:user@gmail.com" rel="noreferrer" target="_blank" class="slider_3-a image-1"><span class='hidden'>dolor sit amet</span></a>
					<a href="mailto:user@gmail.com" rel="noreferrer" target="_blank" class="slider_3-a image-fill-right"><span class='hidden'>dolor sit amet</span></a>
					<div class="slider_3-inner inner"></div>
					<a href="tel:0419-777-066" rel="noreferrer" target="_blank" class="slider_3-a image-2"><span class='hidden'>dolor sit</span></a>
					<a href="tel:0419-777-066" rel="noreferrer" target="_blank" class="slider_3-a image-fill-left"><span class='hidden'>dolor sit</span></a>
					<button aria-label="open-right" class="slider_3-button-next open-right"></button>

					<div class="static-count d-none">

						<img class="slider_3-img" src="https://placehold.co/150x150/3708090/708090" alt="mail" />

						<div>

							<a href="mailto:user@gmail.com" rel="noreferrer" target="_blank">dolor sit amet</a>

						</div>

					</div>

					<div class="static-count d-none">

						<img class="slider_3-img" src="https://placehold.co/150x150/FFC0CB/31343C" alt="telephone" />

						<div>

							<a href="tel:0419-777-066" rel="noreferrer" target="_blank">dolor sit</a>

						</div>

					</div>

					<div class="static-count  d-none">

						<img class="slider_3-img" src="https://placehold.co/150x150/EEE/31343C" alt="LinkedIn" />

						<div>

							<a href="https://www.linkedin.com/in/david-smith-572b10259/" rel="noreferrer" target="_blank">dolor</a>

						</div>

					</div>

				</div>

				<div class="slider_3-percentage percentage">

					<div class="percentage-change"></div>

				</div>


				<div class="d-flex p-2">

					<button class="c-custom-1 slider_3-button-toggle button-toggle"><i class="fa-solid fa-computer-mouse"></i></i></button>

				</div>
					
				</div>

			</div>

		</div>

	</div>

	<hr class="my-5">

	<h2 class="text-center my-5"> Slider 4 </h2>

	<div class="container g-0">

		<div class="slider_4-height-container height-container row d-flex flex-column flex-lg-row align-items-center align-items-lg-start justify-content-lg-around g-0">

			<p class="col-11 col-lg-6 d-flex h-100 align-items-lg-center m-0">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
			eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
			ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
			aliquip ex ea commodo consequat. Duis aute irure dolor in
			reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
			pariatur.
			<br/>
			<br/>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
			eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
			ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
			aliquip ex ea commodo consequat. Duis aute irure dolor in
			reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
			pariatur.
			<br/>
			<br/>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
			eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
			ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
			aliquip ex ea commodo consequat. Duis aute irure dolor in
			reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
			pariatur.
			</p>

			<div class="col-12 col-lg-4 slider_4-figure-container pt-5 pt-lg-0">

				<a class="slider_4-figure figure-one scroll d-lg-has-height w-100 d-flex justify-content-center mb-sm-5 mb-lg-0" href="#">

					<img src="https://placehold.co/440x293/B0C4DE/31343C"  alt="Placehold"/>

					<p class="d-flex justify-content-center align-items-end text-center m-0 px-3 pb-3">
						dolor sit lorem ipsum amet.
					</p>

				</a>

				<a class="slider_4-figure figure-two scroll d-lg-0-height w-100 d-flex justify-content-center" href="#">

					<img src="https://placehold.co/440x293/31343C/B0C4DE"  alt="Placehold"/>
					
					<p class="d-flex justify-content-center align-items-end text-center m-0 px-3 pb-3">
						dolor sit lorem ipsum amet.
					</p>

				</a>

			</div>

		</div>

	</div>

	<hr class="my-5">

	<h2 class="text-center my-5"> Slider 5 </h2>

	<div class="container g-0">

		<div class="slider_5-container d-flex flex-wrap justify-content-center">

			<div class="slider_5-list-container">
				
				<div class="slider_5-scroll scroll-listener">

					<ul class="slider_5-list">

						<li>

							Scroll preview

							<img src="https://placehold.co/100x100/31343C/B0C4DE"  alt="Placehold"/>

							<ol>

								<li class="slider_5-scroll-preview scroll-preview">
									<h3><a target="lorem" href="https://google.com/"> Lorem ipsum dolor </a></h3>
									Lorem ipsum
									<br />
									<br />
									<br />
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
									ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
									aliquip ex ea commodo consequat. Duis aute irure dolor in
									reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
									pariatur.
									<br />
								</li>

								<li class="slider_5-scroll-preview scroll-preview">
									<h3><a target="dolor" href="https://google.com/"> Lorem ipsum dolor </a></h3>
									Eiusmod tempor 
									<br />
									<br />
									<br />
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
									ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
									aliquip ex ea commodo consequat. Duis aute irure dolor in
									reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
									pariatur.
									<br />
								</li>

							</ol>

						</li>

					</ul>
					
				</div>

			</div>

			<div class="slider_5-site-container site-container">

				<div id="site-1" class="slider_5-site site-img d-has-display">

					<img src="https://placehold.co/400x400/B0C4DE/31343C" alt="Placehold"/>

				</div>

				<div id="site-2" class="slider_5-site site-img">

					<a target="lorem" href="https://google.com/">
							lorem commodo 
					</a>

					<img src="https://placehold.co/400x400/3708090/708090" alt="Placehold"/>

				</div>

				<div id="site-3" class="slider_5-site site-img">

					<a target="dolor" href="https://google.com/">
						ex ea commodo 
					</a>

					<img src="https://placehold.co/400x400/31343C/B0C4DE" alt="Placehold" />

				</div>

				<button aria-label="close" class="slider_5-close slider-close">X</button>

			</div>

		</div>

	</div>

	<section class="container-fluid row g-0">

		<hr class="my-5">

		<h2 class="text-center my-5"> Slider 6 </h2>

		<p class="col-11 col-lg-8 col-xl-6 text-center mx-auto mb-5">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at bibendum felis. In convallis
			odio velit, et porttitor sem accumsan sed. Aliquam ultrices quam nec purus dictum vehicula.
			Mauris suscipit et sem vel auctor. Duis dapibus arcu sem, a porttitor massa vulputate sed.
		</p>

		<div class="slider_6-container col-12 col-md-10 col-xl-8 row pb-md-5 g-0">

			<div class="col-md-10 d-none d-md-flex row justify-content-between mb-md-3 ms-md-5 g-0">

				<button class="col-6 col-sm-3 slider_6-button-group button-group" id="paragraphone">Dolore</button>

				<button class="col-6 col-sm-3 slider_6-button-group button-group" id="paragraphtwo">Fugiat</button>

				<button class="col-6 col-sm-3 slider_6-button-group button-group" id="paragraphthree">Occaecat</button>

				<button class="col-6 col-sm-3 slider_6-button-group button-group" id="paragraphfour">Excepteur </button>

			</div>

			<div class="slider_6-action-container col-12 col-md-11 row g-0">

				<div class="slider_6-strip col-3"></div>

				<img class="col-9" src="https://placehold.co/950x574/B0C4DE/31343C" alt="Placeholder">

				<aside class="slider_6-action-aside action-aside">

					<h3 class="m-md-0">Dolore<i class="fa-solid fa-paperclip"></i></h3>

					<p class="m-md-0">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at bibendum felis. In convallis
						odio velit, et porttitor sem accumsan sed. Aliquam ultrices quam nec purus dictum vehicula.
						Mauris suscipit et sem vel auctor. Duis dapibus arcu sem, a porttitor massa vulputate sed.
					</p>

				</aside>

				<aside class="slider_6-action-aside action-aside">

					<h3 class="m-md-0">Fugiat<i class="fa-solid fa-phone"></i></h3>

					<p class="m-md-0">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at bibendum felis. In convallis
						odio velit, et porttitor sem accumsan sed. Aliquam ultrices quam nec purus dictum vehicula.
						Mauris suscipit et sem vel auctor. Duis dapibus arcu sem, a porttitor massa vulputate sed.
					</p>

				</aside>

				<aside class="slider_6-action-aside action-aside">

					<h3 class="m-md-0">Occaecat<i class="fa-solid fa-envelope"></i></h3>

					<p class="m-md-0">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at bibendum felis. In convallis
						odio velit, et porttitor sem accumsan sed. Aliquam ultrices quam nec purus dictum vehicula.
						Mauris suscipit et sem vel auctor. Duis dapibus arcu sem, a porttitor massa vulputate sed.
					</p>

				</aside>

				<aside class="slider_6-action-aside action-aside">

					<h3 class="m-md-0">Excepteur<i class="fa-solid fa-circle-user"></i></h3>

					<p class="m-md-0">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at bibendum felis. In convallis
						odio velit, et porttitor sem accumsan sed. Aliquam ultrices quam nec purus dictum vehicula.
						Mauris suscipit et sem vel auctor. Duis dapibus arcu sem, a porttitor masssed.
					</p>

				</aside>

			</div>

		</div>

	</section>

	<hr class="my-5">

	<h2 class="text-center my-5"> Slider 7 </h2>

	<div class="overflow-hidden">

		<div id="overlay_body-one" class="slider_7-overlay_body slider_7-overlay-body-one row align-items-center justify-content-center">

			<img class="col-12 col-md-6" src="https://placehold.co/950x574/B0C4DE/31343C" alt="Placeholder">

			<div class="col-12 d-flex align-items-center justify-content-center">

				<button id="overlay_close-one" class="c-custom-1 overlay_close overlay-close"><i class="fa-solid fa-computer-mouse"></i></button>

			</div>

		</div>

	</div>

	<div class="container d-flex justify-content-center pb-5">

		<button id="overlay_open-one" class="c-custom-1 overlay_open overlay-open"><i class="fa-solid fa-computer-mouse"></i></button>

	</div>

</main>

<footer class="d-flex flex-wrap justify-content-center align-items-center pb-5">

	<hr class="w-100 mb-5">

	<p class="m-0"><i class="fa-regular fa-copyright pe-3"></i></p>

</footer>

<script src="./js/bootstrap.min.js"></script>
<script src="./js/fontawsome.min.js"></script>
<script src="./js/utillites.js"></script>
<script src="./js/slider_8.js"></script>
<script src="./js/slider_7.js"></script>
<script src="./js/slider_6.js"></script>
<script src="./js/slider_5.js"></script>
<script src="./js/slider_4.js"></script>
<script src="./js/slider_3.js"></script>
<script src="./js/slider_2.js"></script>
<script src="./js/slider_1.js"></script>
<script src="./js/app.js"></script>
</body>

</html>