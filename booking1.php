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
			max-height: 130px;
		}

		.content {
			padding: 20px;
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

		.icon-bar {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-flex-basis: 70px;
			-ms-flex-preferred-size: 70px;
			flex-basis: 70px;
			min-height: 70px;
			max-height: 75px;
			position: fixed;
			width: 100vw;
			left: 0;
  bottom: 0;
		}

		html, body, div, span, object,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

html {
  line-height: 1;
}



		
ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

/* Colors */
/* ---------------------------------------- */
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  text-align: center;
  font-family: 'Lato', 'sans-serif';
  font-weight: 400;
}

a {
  text-decoration: none;
}

.info-text {
  text-align: left;
  width: 100%;
}

header, form {
  padding: 4em 10%;
}

.form-group {
  margin-bottom: 20px;
}

h2.heading {
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 300;
  text-align: left;
  color: #506982;
  border-bottom: 1px solid #506982;
  padding-bottom: 3px;
  margin-bottom: 20px;
}

.controls {
  text-align: left;
  position: relative;
}
.controls input[type="text"],
.controls input[type="email"],
.controls input[type="number"],
.controls input[type="date"],
.controls input[type="tel"],
.controls textarea,
.controls button,
.controls select {
  padding: 12px;
  font-size: 14px;
  border: 1px solid #c6c6c6;
  width: 100%;
  margin-bottom: 18px;
  color: #888;
  font-family: 'Lato', 'sans-serif';
  font-size: 16px;
  font-weight: 300;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.controls input[type="text"]:focus, .controls input[type="text"]:hover,
.controls input[type="email"]:focus,
.controls input[type="email"]:hover,
.controls input[type="number"]:focus,
.controls input[type="number"]:hover,
.controls input[type="date"]:focus,
.controls input[type="date"]:hover,
.controls input[type="tel"]:focus,
.controls input[type="tel"]:hover,
.controls textarea:focus,
.controls textarea:hover,
.controls button:focus,
.controls button:hover,
.controls select:focus,
.controls select:hover {
  outline: none;
  border-color: #9FB1C1;
}
.controls input[type="text"]:focus + label, .controls input[type="text"]:hover + label,
.controls input[type="email"]:focus + label,
.controls input[type="email"]:hover + label,
.controls input[type="number"]:focus + label,
.controls input[type="number"]:hover + label,
.controls input[type="date"]:focus + label,
.controls input[type="date"]:hover + label,
.controls input[type="tel"]:focus + label,
.controls input[type="tel"]:hover + label,
.controls textarea:focus + label,
.controls textarea:hover + label,
.controls button:focus + label,
.controls button:hover + label,
.controls select:focus + label,
.controls select:hover + label {
  color: #bdcc00;
  cursor: text;
}
.controls .fa-sort {
  position: absolute;
  right: 10px;
  top: 17px;
  color: #999;
}
.controls select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}
.controls label {
  position: absolute;
  left: 8px;
  top: 12px;
  width: 60%;
  color: #999;
  font-size: 16px;
  display: inline-block;
  padding: 4px 10px;
  font-weight: 400;
  background-color: rgba(255, 255, 255, 0);
  -moz-transition: color 0.3s, top 0.3s, background-color 0.8s;
  -o-transition: color 0.3s, top 0.3s, background-color 0.8s;
  -webkit-transition: color 0.3s, top 0.3s, background-color 0.8s;
  transition: color 0.3s, top 0.3s, background-color 0.8s;
  background-color: white;
}
.controls label.active {
  top: -11px;
  color: #555;
  background-color: white;
  width: auto;
}
.controls textarea {
  resize: none;
  height: 200px;
}

button {
  cursor: pointer;
  background-color: #1b3d4d;
  border: none;
  color: #fff;
  padding: 12px 0;
  float: right;
  height:50px;
  width:100px;
  font-size:20px;
}
button:hover {
  background-color: #224c60;
}

.clear:after {
  content: "";
  display: table;
  clear: both;
}

.grid {
  background: white;
}
.grid:after {
  /* Or @extend clearfix */
  content: "";
  display: table;
  clear: both;
}

[class*='col-'] {
  float: left;
  padding-right: 10px;
}
.grid [class*='col-']:last-of-type {
  padding-right: 0;
}

.col-2-3 {
  width: 66.66%;
}

.col-1-3 {
  width: 33.33%;
}

.col-1-2 {
  width: 50%;
}

.col-1-4 {
  width: 25%;
}

@media (max-width: 760px) {
  .col-1-4-sm, .col-1-3, .col-2-3 {
    width: 100%;
  }

  [class*='col-'] {
    padding-right: 0px;
  }
}
.col-1-8 {
  width: 12.5%;
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

			<form action="inputbook.php" method="POST">
				<!--  General -->
				<div class="form-group">
					<h2 class="heading">Booking & contact</h2>
					<div class="controls">
						<input type="text" id="name" class="floatLabel" name="name" required>
						<label for="name">Name</label>
					</div>
					<div class="controls">
						<input type="email" id="email" class="floatLabel" name="email" required>
						<label for="email">Email</label>
					</div>
					<div class="controls">
						<input type="tel" id="phone" class="floatLabel" name="phone" pattern="[0-9]{11,14}" required>
						<label for="phone">Phone</label>
					</div>

					<div class="form-group">
						<h2 class="heading">Details</h2>
						<div class="grid">

							<div class="col-1-4 col-1-4-sm">
								<div class="controls">
									<input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
									<label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Date</label>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="col-1-3 col-1-3-sm">
								<div class="controls">
									<i class="fa fa-sort"></i>
									<select class="floatLabel" name="people">
										<option value="blank"></option>
										<option value="1">1</option>
										<option value="2" selected>2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
									<label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
								</div>
							</div>

							<div>
								<button type="submit">Book</button>
							</div>
						</div> <!-- /.form-group -->
			</form>

		</div>

		<div class="icon-bar">
			<a href="mobile.php">
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
			(function($){
	function floatLabel(inputType){
		$(inputType).each(function(){
			var $this = $(this);
			// on focus add cladd active to label
			$this.focus(function(){
				$this.next().addClass("active");
			});
			//on blur check field and remove class if needed
			$this.blur(function(){
				if($this.val() === '' || $this.val() === 'blank'){
					$this.next().removeClass();
				}
			});
		});
	}
	// just add a class of "floatLabel to the input field!"
	floatLabel(".floatLabel");
})(jQuery);

	</script>
</body>

</html>