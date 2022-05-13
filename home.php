<html>
<head>
<title>Wolfs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
    <style>
html {
	box-sizing: border-box;
	font-size: 10px;
}

*, *:before, *:after {
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
	color:  rgba(0,0,0,0.7);
}



.content {
	padding: 20px;
	background: white;
	box-shadow: 0 0 5px 0 rgba(0,0,0,0.1);
	line-height: 1.6;
	overflow-y: scroll;
	-webkit-overflow-scrolling:touch;
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

.content > * {
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
	padding: 1.5rem;
	border-left: 1px solid rgba(0,0,0,0.1);
	background: gray;
	color: rgba(0,0,0,0.5);
}

.icon-bar a:hover {
	color: #f4bcbe;
}


.icon-bar a:first-child {
	border-left: 0;
}

.app-header {
	background: rgba(0,0,0,0.7);
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
    position: fixed;
  top: 0;
  width: 100%;
  z-index: 3;
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
    height: 50px;
  margin-top: -50px;
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}

    </style>
</head>
<body>
  
<div class="app-wrap">
		<header class="app-header">
	

			<h1>ARCAA</h1>

			
		</header>

		<div class="content">

			
<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="la.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
      <?php
          $images = glob("galery/*.{jpg,png,gif}", GLOB_BRACE);
          foreach($images as $img) {
             echo "
             <div class=item>
            <img src=\"$img\" alt=New york style=width:100%;>
            </div>
             
             ";
          }
      ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
			<p>ABOUT</p>
                <p>First established in 2011, each Replay venue features high-end karaoke & lounge facilities equipped with state of the art Bose sound systems and over 150,000 songs to choose from!
</p>

 
<p>Be entertained nightly by live musicians or book a room with attentive table service for you and your friends!</p>


<p>"A FAMILY KARAOKE & ENTERTAINMENT AT ITS FINEST."</p>
<p>High-end karaoke & lounge facilities equipped with state of the art Bose sound systems and over 150,000 songs to choose from!</p>



		</div>

		<div class="icon-bar">
			<a href="#">
				<i class="fa fa-home"></i>
				<br>
				Home
			</a>
			<a href="#">
				<i class="fa fa-bell"></i>
				<br>
				Notifications
			</a>
			<a href="#">
				<i class="fa fa-envelope"></i>
				<br>
				Messages
			</a>
			<a href="#">
				<i class="fa fa-user"></i>
				<br>
				Me
			</a>
		</div>

</div>

</body>
</html>