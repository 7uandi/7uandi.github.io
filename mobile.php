<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
	<script src="jquery.min.js"></script>
	<title>Wolfs</title>
	<style>
		html {
			box-sizing: border-box;
			font-size: 10px;
		}

		*,
		*:before,
		*:after {
			box-sizing: inherit;
		}

		body {
			font-family: sans-serif;
			margin: 0;
			font-size: 1.5rem;
			background-image: -webkit-linear-gradient(190deg, #f4bcbe 0%, #c5eaf7 100%);
			background-image: linear-gradient(260deg, #f4bcbe 0%, #c5eaf7 100%);
		}

		a {
			color: white;
			text-decoration: none;
		}

		a.button {
			background: rgba(0, 0, 0, 0.1);
			padding: 1rem 1.5rem;
			border-radius: 4px;
		}

		a.button:hover {
			background: white;
			padding: 1rem 1.5rem;
			border-radius: 4px;
			color: rgba(0, 0, 0, 0.7);
		}

		.app-wrap {
			max-width: 540px;
			height: 100vh;
			border: 1px solid rgba(0, 0, 0, 0.8);

			border-radius: 1px;

			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-webkit-flex-direction: column;
			-ms-flex-direction: column;
			flex-direction: column;
		}

		.app-wrap>* {
			-webkit-box-flex: 1;
			-webkit-flex: 1 1 auto;
			-ms-flex: 1 1 auto;
			flex: 1 1 auto;
		}

		.content {
			padding: 20px 20px 100px 20px;

			background: white;
			box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
			line-height: 1.6;
			overflow-y: scroll;
			-webkit-overflow-scrolling: touch;
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-webkit-flex-direction: column;
			-ms-flex-direction: column;
			flex-direction: column;
			overflow-x: hidden;
		}

		.content>* {
			-webkit-box-flex: 1;
			-webkit-flex: 1 1;
			-ms-flex: 1 1;
			flex: 1 1;
			max-width: 100%;
		}

		.straightup {
			max-height: 200px;
		}


		.icon-bar a {
			-webkit-box-flex: 1;
			-webkit-flex: 1;
			-ms-flex: 1;
			flex: 1;
			text-align: center;
			border-left: 1px solid rgba(0, 0, 0, 0.1);
			background: gray;
			color: rgba(0, 0, 0, 0.5);
			padding: 1.5rem;
		}

		.icon-bar a:hover {
			color: #f4bcbe;
		}


		.icon-bar a:first-child {
			border-left: 0;
		}

		.app-header {
			background: rgba(0, 0, 0, 0.7);
			color: #f4bcbe;
			padding: 1rem;
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: justify;
			-webkit-justify-content: space-between;
			-ms-flex-pack: justify;
			justify-content: space-between;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-ms-flex-align: center;
			align-items: center;
			text-align: center;
			max-height: 100px;
		}

		.icon-bar {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			
			-webkit-flex-basis: 70px;
			-ms-flex-preferred-size: 70px;
			flex-basis: 70px;
			min-height: 70px;
			max-height: 75px;
			max-height: 75px;
			position: fixed;
			width: 100vw;
			left: 0;
  bottom: 0;
		}




		p {
			text-align: center;
		}




		.slider-wrapper {
			overflow: hidden;
			width: 100%;
			position: relative;
			min-height: 31vh;
		}

		.slider-nav {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			text-align: center;
			margin: 0;
			padding: 1%;
			background: rgba(0, 0, 0, 0.6);
			color: #fff;
		}

		/* slider controls*/
		.control {
			position: absolute;
			top: 50%;
			width: 40px;
			height: 10px;
			
			font-size: 3rem;
			padding: 0;
			margin: 0;
			line-height: 5px;
		}

		.prev,
		.next {
			cursor: pointer;
			transition: all 0.2s ease;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			padding: 1rem;
		}

		.prev {
			left: 1.1rem;
		}

		.next {
			right: 1.1rem;
		}

		.prev:hover,
		.next:hover {
			transform: scale(1.5, 1.5);
		}

		.slider-container {
			/* 
			n variable holds number of images to make .container wide enough 
			to hold all its image children 
			that still have the same width as its parent
			*/
			display: flex;
			align-items: center;
			overflow-y: hidden;
			width: 100%;
			/* fallback */
			width: calc(var(--n)*100%);
			height: 31vw;
			min-height: 100%;
			transform: translate(calc(var(--i, 0)/var(--n)*-100% + var(--tx, 0px)));
		}

		/* transition animation for the slider */
		.smooth {
			/* f computes actual animation duration via JS */
			transition: transform calc(var(--f, 1)*.5s) ease-out;
		}

		/* images for the slider */
		img {
			width: 100%;
			/* can't take this out either as it breaks Chrome */
			width: calc(100%/var(--n));
			pointer-events: none;
		}
	</style>
</head>

<body>


	<div class="app-wrap">
		<header class="app-header">
			<a href="#" class="button">
				<i class="fa fa-arrow-left"></i>
				Back
			</a>

			<h1>Wolfs</h1>

			<a href="login.php" class="button">
				<i class="fa fa-cog"></i>
			</a>
		</header>

		<div class="content">


			<div class="slider-wrapper">
				<div class="slider-container">
					<?php
					$images = glob("galery/*.{JPG,jpg,png,gif}", GLOB_BRACE);
					foreach ($images as $img) {
						echo "            
            				<img src=\"$img\">
             				";
					}
					?>
				</div>

				<div class="slider-controls">
					<span class="control prev"></span>
					<span class="control next"></span>
				</div>
			</div>
			<!-- END slider-wrapper -->


			<p>ABOUT</p>
			<p>Casual dining with American Ambience</p>
			<p>Be entertained nightly by live musicians or book a room with attentive table service for you and your friends!</p>
			<p>"PRIVATE ROOM WITH KARAOKE & ENTERTAINMENT AT ITS FINEST."</p>
			<p>High-end karaoke & lounge facilities equipped with state of the art Bose sound systems and over 150,000 songs to choose from!</p>

		</div>

		<div class="icon-bar">
			<a href="#">
				<i class="fa fa-home"></i>
				<br>
				Home
			</a>
			<a href="booking1.php">
				<i class="fa fa-bell"></i>
				<br>
				Booking
			</a>
			<a href="https://wa.me/08119351220?text=urlencodedtext">
				<i class="fa fa-envelope"></i>
				<br>
				Messages
			</a>
			<a href="login.php">
				<i class="fa fa-user"></i>
				<br>
				Me
			</a>
		</div>
	</div>
	<script>
		//  set --n (used for calc in CSS) via JS, after getting
		// .container and the number of child images it holds:

		const _C = document.querySelector(".slider-container"),
			N = _C.children.length;

		_C.style.setProperty("--n", N);

		// detect the direction of the motion between "touchstart" (or "mousedown") event
		// and the "touched" (or "mouseup") event
		// and then update --i (current slide) accordingly
		// and move the container so that the next image in the desired direction moves into the viewport

		// on "mousedown"/"touchstart", lock x-coordiate
		// and store it into an initial coordinate variable x0:
		let x0 = null;
		let locked = false;

		function lock(e) {
			x0 = unify(e).clientX;
			// remove .smooth class
			_C.classList.toggle("smooth", !(locked = true));
		}

		// next, make the images move when the user swipes:
		// was the lock action performed aka is x0 set?
		// if so, read current x coordiante and compare it to x0
		// from the difference between these two determine what to do next

		let i = 0; // counter
		let w; //image width

		// update image width w on resive
		function size() {
			w = window.innerWidth;
		}

		function move(e) {
			if (locked) {
				// set threshold of 20% (if less, do not drag to the next image)
				// dx = number of pixels the user dragged
				let dx = unify(e).clientX - x0,
					s = Math.sign(dx),
					f = +(s * dx / w).toFixed(2);

				// Math.sign(dx) returns 1 or -1
				// depending on this, the slider goes backwards or forwards

				if ((i > 0 || s < 0) && (i < N - 1 || s > 0) && f > 0.2) {
					_C.style.setProperty("--i", (i -= s));
					f = 1 - f;
				}

				_C.style.setProperty("--tx", "0px");
				_C.style.setProperty("--f", f);
				_C.classList.toggle("smooth", !(locked = false));
				x0 = null;
			}
		}

		size();

		addEventListener("resize", size, false);

		// ===============
		// drag-animation for the slider when it reaches the end
		// ===============

		function drag(e) {
			e.preventDefault();

			if (locked) {
				_C.style.setProperty("--tx", `${Math.round(unify(e).clientX - x0)}px`);
			}
		}

		// ===============
		// prev, next
		// ===============
		let prev = document.querySelector(".prev");
		let next = document.querySelector(".next");

		prev.addEventListener("click", () => {
			if (i == 0) {
				console.log("start reached");
			} else if (i > 0) {
				// decrease i as long as it is bigger than the number of slides
				_C.style.setProperty("--i", i--);
			}
		});

		next.addEventListener("click", () => {
			if (i < N) {
				// increase i as long as it's smaller than the number of slides
				_C.style.setProperty("--i", i++);
			}
		});

		// ===============
		// slider event listeners for mouse and touch (start, move, end)
		// ===============

		_C.addEventListener("mousemove", drag, false);
		_C.addEventListener("touchmove", drag, false);

		_C.addEventListener("mousedown", lock, false);
		_C.addEventListener("touchstart", lock, false);

		_C.addEventListener("mouseup", move, false);
		_C.addEventListener("touchend", move, false);

		// override Edge swipe behaviour
		_C.addEventListener(
			"touchmove",
			e => {
				e.preventDefault();
			},
			false
		);

		// unify touch and click cases:
		function unify(e) {
			return e.changedTouches ? e.changedTouches[0] : e;
		}
	</script>
</body>

</html>