<?php
session_start();
$congrats_title = $_SESSION['TITLE'];
$weightage = $_SESSION['weightage'];
$congrats_text = $_SESSION['congrats_text'];
$congrats_fb =	$_SESSION['congrats_fb'];
$shareImg =  $_SESSION['shareImg'] ;
?>
<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="RIVERSIDE WEEKEND APARTMENTS STARTING ₹13.24 LACS - Made for Music Fanatics - Designed by Hafiz Contractor - Located on Khopoli Pali Road">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		<link rel="shortcut icon" type="image/png" href="favicon.png" />

		<meta property="og:title" content="What's Your Musical Quotient? Find out right now !! Designed by City Of Music">
		<meta property="og:image" content="https://dl.dropboxusercontent.com/u/54623720/logo-promo.jpg">
		<meta property="og:site_name" content="Musical Quotient by City of Music">
		<meta property="og:url" content="mq.cityofmusic.in">
		<meta property="og:description" content="Take this 3 minute test HONESTLY and when you’re done, your MQ score will show you what exactly plucks your strings!">
		<link rel="stylesheet" type="text/css" href="css/jquery.pagepiling.css" />
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<link rel="stylesheet" id="size-stylesheet" type="text/css" href="./css/animate.css">
<!-- 		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>		 -->
		<link rel='stylesheet' href='./css/font-awesome.min.css'/>
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- <link rel="stylesheet" type="text/css" href="popup-style.css"> -->
		<!-- <link rel="stylesheet" type="text/css" href="question/css/style.css"> -->
		<link rel="stylesheet" type="text/css" href="style.css">
		

		<script src="./js/jquery-2.1.0.min.js"></script>
		
		<script type="text/javascript" id="size-script" src="js/jquery.pagepiling.js"></script>
		
<!-- 		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script> -->
		<script src="./js/bootstrap.min.js"></script>
		<!-- <script src="./js/blocs.min.js"></script> -->
		<script src="./js/jqBootstrapValidation.js"></script>
		<script src="js/jquery.magnific-popup.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66668958-1', 'auto');
  ga('send', 'pageview');

</script>

		<title>What's Your Musical Quotient? Find out right now !! Designed by City Of Music</title>
		<style type="text/css">
			.ch-grid {
				margin: 20px 0 0 0;
				padding: 0;
				list-style: none;
				display: block;
				text-align: center;
				width: 100%;
			}

			.ch-grid:after,
			.ch-item:before {
				content: '';
			    display: table;
			}

			.ch-grid:after {
				clear: both;
			}

			.ch-grid li {
				width: 220px;
				height: 220px;
				display: inline-block;
				margin: 20px;
			}
			.ch-item {
				width: 100%;
				height: 100%;
				border-radius: 50%;
				position: relative;
				cursor: default;
				perspective: 900px;
			}
			.ch-info{
				position: absolute;
				width: 100%;
				height: 100%;
				transform-style: preserve-3d;
			}
			.ch-info > div {
				display: block;
				position: absolute;
				width: 100%;
				height: 100%;
				border-radius: 50%;
				background-position: center center;
				transition: all 0.4s linear;
				transform-origin: 50% 0%;
			}
			/*.ch-info .ch-info-front {
				box-shadow: inset 0 0 0 16px rgba(0,0,0,0.3);
			}*/
			.ch-info .ch-info-back {
				transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
				background: #000;
				opacity: 0;
			}
			.ch-info h3 {
				color: #fff;
				text-transform: uppercase;
				letter-spacing: 2px;
				font-size: 24px;
				margin: 0 15px;
				padding: 60px 0 0 0;
				height: 110px;
				font-family: 'Open Sans', Arial, sans-serif;
				text-shadow: 
					0 0 1px #fff, 
					0 1px 2px rgba(0,0,0,0.3);
			}

			.ch-info p {
				color: #fff;
				padding: 10px 5px;
				font-style: italic;
				margin: 0 30px;
				font-size: 12px;
				border-top: 1px solid rgba(255,255,255,0.5);
			}

			.ch-info p a {
				display: block;
				color: rgba(255,255,255,0.7);
				font-style: normal;
				font-weight: 700;
				text-transform: uppercase;
				font-size: 12px;
				letter-spacing: 1px;
				padding-top: 4px;
				font-family: 'Open Sans', Arial, sans-serif;
			}

			.ch-info p a:hover {
				color: rgba(255,242,34, 0.8);
			}
			.ch-item:hover .ch-info-front {
				transform: translate3d(0,280px,0) rotate3d(1,0,0,-90deg);
				opacity: 0;
			}
			.ch-item:hover .ch-info-back {
				transform: rotate3d(1,0,0,0deg);
				opacity: 1;
			}
		</style>
	</head>
	<body>
<!-- Main container -->
<!-- Main container -->
		<div id="pagepiling">
			<div class="section bg-fluid">
				<div class="container first-fold">
					<div class="row">
						<div class="col-sm-12 header">
							<div class="row">
								<div class="col-sm-12 mar15 mar-min fadeIn animDelay02 animated noanimated">
									<h4 class="text-center hero-bloc-text tc-white bk">
										WHAT'S YOUR
									</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-offset-3 col-xs-6 col-sm-offset-4 col-sm-4 mar15 fadeIn animDelay02 animated noanimated">
									<a href="index.html"><img src="img/MQ-logo.png" class="img-responsive logo"></a>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-offset-4 col-sm-4 col-xs-offset-1 col-xs-10 text-center white1">
									<h3 class="title demi tc-white">Thanks For Sharing!</h3>
									<h4 class="md tc-white">You have won a free ride to City of Music, leave your contact number below in one of the forms…..<br><br> In the meanwhile scroll down below to explore City of Music here</h4>
								</div>
							</div>
							<div class="text-center mar15 fadeIn animated noanimated mob">
								<h3 class="text-center mg-lg hero-bloc-text-sub tc-white md" style="text-transform:uppercase;font-size:20px;">Know More about City of Music</h3>
								<a class="#page2" style="color:white;"><span class="fa fa-chevron-down"></span></a>
							</div>
							<div class="text-center mar15 fadeIn animated noanimated desk">
								<h3 class="text-center mg-lg hero-bloc-text-sub tc-white md" style="text-transform:uppercase;font-size:20px;">Know More about City of Music</h3>
							</div>
							<!-- <div class="row desk">
								<div class="col-sm-12 mar15 fadeIn animated noanimated"> -->
									<a id="scroll-hero" class="blocs-hero-btn-dwn" rel="relativeanchor" href="#page2"><span class="fa fa-chevron-down"></span></a>	
								<!-- </div>
							</div> -->
						</div>
					</div>
				</div>			
			</div>
			<div class="section bg-jetty-background">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<h1 class="mg-md tc-turquoise-blue bk fadeIn animDelay02 animated noanimated title text-center1">
								RIVERSIDE WEEKEND APARTMENTS <br>STARTING &#x20B9;13.24 LACS
							</h1>
							<!-- <h1 class="mg-md tc-turquoise-blue bk fadeIn animDelay02 animated noanimated">
								WHAT IS THE CITY OF MUSIC ?
							</h1>-->
							<!-- <p class="md fadeIn animDelay02 animated noanimated">
								Without music, life would be a mistake. Don't you agree? Music speaks what cannot be expressed, soothes the mind and gives it rest. Can you think of anything else that provides you such great comfort? Yes, it's your home. We have set out to give you the perfect harmony of these soothing blessings - The City of Music, where your home is created keeping the music lover in mind.
							</p> -->
							<h2 class="mg-md tc-white tc-turquoise-blue md fadeIn animDelay02 animated noanimated martop text-center1">
								Designed by Hafiz Contractor
							</h2>
							<h2 class="mg-md tc-white tc-turquoise-blue md fadeIn animDelay02 animated noanimated text-center1">
								Located on Khopoli Pali Road
							</h2>
							<div class="row">
								<div class="col-xs-8 col-sm-4">
									<h3 class="mg-md tc-white tc-turquoise-blue md fadeIn animDelay02 animated noanimated small">
										Drive there now
									</h3>
								</div>
								<div class="col-xs-3 col-sm-2 fadeIn animDelay02 animated noanimated">
									<a target="_blank" href="https://www.google.co.in/maps/dir/''/City+of+Music,+-Pali,+State+Highway+92,+Maharashtra/@18.6298355,73.2490742,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x3be8055a6a55f105:0xe3a9d7eeeb110453!2m2!1d73.2840937!2d18.6297574"><img src="img/gmaps.png" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-3 form fadeIn animDelay02 animated noanimated">
							<form id="form_1" method="post" action="question/thankyou.php" >
								<div><h2 class=" tc-turquoise-blue bk text-center">Interested?</h2></div>
								<div class="form-group">
									<input id="name" name="name" class="form-control"  placeholder="Name"required />
								</div>
								<div class="form-group">
									<input id="email" name="email" class="form-control" type="email" placeholder="Email" required />
								</div>
								<div class="form-group">
									<input id="phone" name="phone" class="form-control" type="phone" placeholder="Phone Number" required />
								</div>
			<!-- 					<div class="form-group">
									<label>
										Message
									</label><textarea id="message" class="form-control" rows="4" cols="50" required></textarea>
								</div> --> 
								<button class="bloc-button btn btn-lg btn-block btn-turquoise-blue" type="submit" style="font-family:'demi';">
									REQUEST CALL BACK
								</button>
							</form>
							<div>
								<h3 class=" tc-turquoise-blue bk text-center">OR</h3>
							</div>
							<button class="bloc-button btn btn-lg btn-block btn-turquoise-blue pointer" style="font-family:'demi';">
									<a href="tel:+918898087507" class="demi" style="font-size:15px;text-decoration:none;color: white;">CALL US ON 8898087507</a>
							</button>
						</div>
					</div>
				</div>
				<!-- <div class="container fill-bloc-bottom-edge desk bounce animDelay02 animated noanimated">
					<div class="row">
						<div class="col-sm-12"> -->
							<a id="scroll-hero" class="blocs-hero-btn-dwn"  href="#page3" rel="relativeanchor"><span class="fa fa-chevron-down"></span></a>
						<!-- </div>
					</div>
				</div> -->
			</div>
			<div class="section bg-concert">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-12 text-center mob fadeIn animDelay02 animated noanimated">
							<h1 class="mg-md text-right tc-turquoise-blue bk">
								MUSICAL AMENITIES
							</h1>
							<!-- <p class="text-right md font-md fadeIn animDelay02 animated noanimated tc-white">
								City of Music is the perfect blend of modern architecture and world-class amenities. For the music fanatics, City of Music is the place to be. Find yourself amazed by the sheer imaginativeness of your surroundings whether it is the musical fountains or the open air concert area. The essence of life at City of Music is a coming together of music, nature and your passion. The freedom you feel as you explore the expanse of the property spread out before you, is where it all begins. 
							</p> -->
						</div>
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 fadeIn animDelay02 animated noanimated">
							<div class="row">
								<div class="col-xs-4 col-sm-4">
									<img src="img/c.png" class="img-responsive img-circle" />
									<h4 class="mg-md tc-white text-center md">
										IN HOUSE RECORDING STUDIO
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/b.png" class="img-responsive img-circle" />
									<h4 class="mg-md tc-white text-center md">
										SWIMMING POOL WITH UNDERWATER SPEAKERS
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/2nd.png" class="img-responsive img-circle" />
									<h4 class="mg-md tc-white text-center md">
										OPEN AIR CONCERT
									</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4">
									<img src="img/a.png" class="img-responsive img-circle" />
									<h4 class="mg-md tc-white text-center md">
										INSTRUMENTS & PRACTICE ROOM
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/1st.png" class="img-responsive img-circle" />
									<h4 class="mg-md tc-white text-center md">
										MUSICAL FOUNTAIN
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/4th.png" class="img-responsive img-circle" />
									<h4 class="mg-md tc-white text-center md">
										MUSICAL CHILDREN'S PLAY AREA
									</h4>
								</div>
							</div>
						</div>
						<div class="mob">
							<div class="col-sm-6 col-xs-12 text-center mob fadeIn animDelay02 animated noanimated">
								<h2 class="mg-md text-right tc-white tc-turquoise-blue md text-center1 fadeIn animDelay02 animated noanimated">
									All this and more at &#x20B9;13.24 Lakhs
								</h2>
								
								<div class="row">
									<div class="col-xs-offset-1 col-xs-10">
										<a href="popup-musical.html" class="btn btn-lg btn-turquoise-blue fadeIn animDelay02 animated noanimated ajax-popup-link" style="font-family:demi;font-size:30px;">VIEW GALLERY</a>
									</div>
								</div>
								<div class="row padtop-sm">
									<div class="col-xs-offset-2 col-xs-8">
										<a href="#form" class="btn btn-lg btn-turquoise-blue fadeIn animDelay02 animated noanimated" style="font-family:demi;font-size:30px;">CONTACT US</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 desk">
							<h1 class="mg-md text-right tc-turquoise-blue bk fadeIn animDelay02 animated noanimated text-center1">
								MUSICAL AMENITIES
							</h1>
							<p class="text-right md font-md fadeIn animDelay02 animated noanimated tc-white">
								City of Music is the perfect blend of modern architecture and world-class amenities. For the music fanatics, City of Music is the place to be. Find yourself amazed by the sheer imaginativeness of your surroundings whether it is the musical fountains or the open air concert area. The essence of life at City of Music is a coming together of music, nature and your passion. The freedom you feel as you explore the expanse of the property spread out before you, is where it all begins. 
							</p>
							<h2 class="mg-md text-right tc-white tc-turquoise-blue md fadeIn animDelay02 animated noanimated text-center1">
								All this and more at &#x20B9;13.24 Lakhs
							</h2>
							<div class="row">
								<a href="popup-musical.html" class="btn btn-lg btn-turquoise-blue pull-right fadeIn animDelay02 animated noanimated ajax-popup-link" style="font-family:demi;font-size:30px;">VIEW GALLERY</a>
							</div>
							<div class="row padtop-sm">
									<a href="#page6" class="btn btn-lg btn-turquoise-blue pull-right fadeIn animDelay02 animated noanimated" style="font-family:demi;font-size:30px;">CONTACT US</a>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="container fill-bloc-bottom-edge desk">
					<div class="row">
						<div class="col-sm-12 bounce animDelay02 animated noanimated"> -->
							<a id="scroll-hero" class="blocs-hero-btn-dwn" href="#page4" rel="relativeanchor"><span class="fa fa-chevron-down"></span></a>
						<!-- </div>
					</div>
				</div> -->
			</div>

			<div class="section bg-Club-house">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-xs-12 text-center1 fadeIn animDelay02 animated noanimated">
							<h1 class="mg-md tc-turquoise-blue bk text-left">
								OTHER AMENITIES
							</h1>
							<p class="md font-md text-left fadeIn animDelay02 animated noanimated tc-white desk">
								At Ciy of Music, you step inside your dream home. Every inch at City of Music has been designed to ensure the it reeks of class – be it the world-class amenities or the opulent villas and apartments. City of Music strives to provide a beautiful setting for your music passion. 
							</p>
							<h2 class="mg-md tc-white tc-turquoise-blue md text-left fadeIn animDelay02 animated noanimated text-center1 desk">
								All this and more at &#x20B9;13.24 Lakhs
							</h2>
							<div class="row desk">
								<div class="col-sm-6">
									<a href="popup-other.html" class="btn btn-lg btn-turquoise-blue fadeIn animDelay02 animated noanimated ajax-popup-link" style="font-family:demi;font-size:30px;">VIEW GALLERY</a>
								</div>
							</div>
							<div class="row padtop-sm desk">
								<div class="col-sm-6">
									<a href="#page6" class="btn btn-lg btn-turquoise-blue fadeIn animDelay02 animated noanimated"  style="font-family:demi;font-size:30px;">CONTACT US</a>
								</div>
							</div>
						</div>
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 fadeIn animDelay02 animated noanimated mob">
							<div class="row">
								<div class="col-xs-4 col-sm-4">
									<img src="img/d.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										GYMNASIUM WITH STEAM & SAUNA
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/e.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										JOGGING TRACK
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/f.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										JETTY WITH VIEWING DECK
									</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4">
									<img src="img/g.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										CONFERENCE BANQUET HALL
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/h.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										INDOOR & OUTDOOR GAMES
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/i.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										MUSIC ZONES & SITTING AREAS
									</h4>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 text-center1 fadeIn animDelay02 animated noanimated mob">
							<h2 class="mg-md tc-white tc-turquoise-blue md text-left fadeIn animDelay02 animated noanimated text-center1">
								All this and more at &#x20B9;13.24 Lakhs
							</h2>
							<div class="row mob">
								<div class="col-xs-offset-1 col-xs-10">
									<a href="popup-other.html" class="btn btn-lg btn-turquoise-blue fadeIn animDelay02 animated noanimated ajax-popup-link" style="font-family:demi;font-size:30px;">VIEW GALLERY</a>
								</div>
							</div>
							<div class="row padtop-sm">
								<div class="col-xs-offset-2 col-xs-8">
									<a href="#form" class="btn btn-lg btn-turquoise-blue fadeIn animDelay02 animated noanimated mob text-center"  style="font-family:demi;font-size:30px; padding-left: 0px; padding-right:0px;">CONTACT US</a>
								</div>
							</div>
						</div>
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 fadeIn animDelay02 animated noanimated desk">
							<div class="row">
								<div class="col-xs-4 col-sm-4">
									<img src="img/d.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										GYMNASIUM WITH STEAM & SAUNA
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/e.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										JOGGING TRACK
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/f.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										JETTY WITH VIEWING DECK
									</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-sm-4">
									<img src="img/g.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										CONFERENCE/ BANQUET HALL
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/h.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										INDOOR & OUTDOOR GAMES
									</h4>
								</div>
								<div class="col-xs-4 col-sm-4">
									<img src="img/i.png" class="img-responsive img-circle" />
									<h4 class="mg-md text-center tc-white md">
										MUSIC ZONES & SITTING AREAS
									</h4>
								</div>
							</div>
						</div>
					
					</div>
				</div>
				<!-- <div class="container fill-bloc-bottom-edge desk">
					<div class="row">
						<div class="col-sm-12 bounce animDelay02 animated noanimated"> -->
							<a id="scroll-hero" class="blocs-hero-btn-dwn"  href="#page5" rel="relativeanchor"><span class="fa fa-chevron-down"></span></a>
<!-- 						</div>
					</div>
				</div> -->
			</div>

			<div class="section bg-musical-getaway">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="row text-center">
								<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-12">
									<h1 class="tc-turquoise-blue bk fadeIn animDelay02 animated noanimated">YOUR CHOICE OF A MUSICAL GETAWAY HOME</h1>
								</div>
							</div>
							<!-- <div class="row">
								<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-12 fadeIn animDelay02 animated noanimated" id="slickslider">
									<div class="col-sm-4">
										<div class="panel">
											<div class="panel-heading pad0">
												<img src="img/slice16.jpg" class="img-responsive">
											</div>
											<div class="panel-body">
												<div>
													<p class="md tc-black" style="font-size:20px;">STUDIO</p>
												</div>
												<div>
													<p class="bk tc-black" style="font-size:16px;">415 sq. ft. Built Up Saleable Area</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="panel">
											<div class="panel-heading pad0">
												<img src="img/slice17.jpg" class="img-responsive">
											</div>
											<div class="panel-body">
												<div>
													<p class="md tc-black" style="font-size:20px;">1BHK</p>
												</div>
												<div>
													<p class="bk tc-black" style="font-size:16px;">580/585 sq. ft. Built Up Saleable Area</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="panel">
											<div class="panel-heading pad0">
												<img src="img/slice18.jpg" class="img-responsive">
											</div>
											<div class="panel-body">
												<div>
													<p class="md tc-black" style="font-size:20px;">1BHK SPACIOUS</p>
												</div>
												<div>
													<p class="bk tc-black" style="font-size:16px;">670 sq. ft. Built Up Saleable Area</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="panel">
											<div class="panel-heading pad0">
												<img src="img/slice19.jpg" class="img-responsive">
											</div>
											<div class="panel-body">
												<div>
													<p class="md tc-black" style="font-size:20px;">1BHK SPACIOUS</p>
												</div>
												<div>
													<p class="bk tc-black" style="font-size:16px;">655/680 sq. ft. Built Up Saleable Area</p>
												</div>
											</div>
										</div>
									</div> -->
								</div>
								<div class="row">
									<div class="col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
										<section class="main desk">	
											<ul class="ch-grid">
												<li>
													<div class="ch-item col-xs-4">				
														<div class="ch-info">
															<div class="ch-info-front ch-img-1">
																<a class="ajax-popup-link" href="popup-studio.html"><img src="img/studio.png" class="img-responsive flats"></a>
															</div>
															<a class="ajax-popup-link" href="popup-studio.html">
																<div class="ch-info-back">
																	<h3>Studio</h3>
																	<p>415 sq.ft. <a class="ajax-popup-link" href="popup-studio.html">View Floor plans</a></p>
																</div>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="ch-item">				
														<div class="ch-info">
															<div class="ch-info-front ch-img-1">
																<a class="ajax-popup-link" href="popup-1bhk.html"><img src="img/1bhk.png" class="img-responsive flats"></a>
															</div>
															<a class="ajax-popup-link" href="popup-1bhk.html">
																<div class="ch-info-back">
																	<h3>1BHK</h3>
																	<p>580 sq.ft. <a class="ajax-popup-link" href="popup-1bhk.html">View Floor plans</a></p>
																</div>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="ch-item">				
														<div class="ch-info">
															<div class="ch-info-front ch-img-1">
																<a class="ajax-popup-link" href="popup-1bhk-spac.html"><img src="img/1bhk-spac.png" class="img-responsive flats"></a>
															</div>
															<a class="ajax-popup-link" href="popup-1bhk-spac.html">
																<div class="ch-info-back">
																	<h3>1BHK Spacious</h3>
																	<p>655 sq.ft. <a class="ajax-popup-link" href="popup-1bhk-spac.html">View Floor plans</a></p>
																</div>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="ch-item">				
														<div class="ch-info">
															<div class="ch-info-front ch-img-1">
																<a class="ajax-popup-link" href="popup-2bhk.html"><img src="img/2bhk.png" class="img-responsive flats"></a>
															</div>
															<a class="ajax-popup-link" href="popup-2bhk.html">
																<div class="ch-info-back">
																	<h3>2BHK</h3>
																	<p>830 sq.ft. <a class="ajax-popup-link" href="popup-2bhk.html">View Floor plans</a></p>
																</div>
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="ch-item">				
														<div class="ch-info">
															<div class="ch-info-front ch-img-1">
																<a class="ajax-popup-link" href="popup-3bhk.html"><img src="img/3bhk.png" class="img-responsive flats"></a>
															</div>
															<a class="ajax-popup-link" href="popup-3bhk.html">
																<div class="ch-info-back">
																	<h3>3BHK</h3>
																	<p>1070 sq.ft. <a class="ajax-popup-link" href="popup-3bhk.html">View Floor plans</a></p>
																</div>
															</a>
														</div>
													</div>
												</li>
											</ul>
										</section>
										<div class="row mob">
											<div class="col-sm-offset-0 col-sm-4 col-xs-offset-0 col-xs-4 text-center">
												<a class="ajax-popup-link" href="popup-studio.html">
													<img src="img/studio.png" class="img-responsive flats">
												</a>
											</div>
											<div class="col-sm-offset-0 col-sm-4 col-xs-5 col-xs-offset-0 col-xs-4">
												<a class="ajax-popup-link" href="popup-1bhk.html">
													<img src="img/1bhk.png" class="img-responsive flats">
												</a>
											</div>
											<div class="col-sm-offset-0 col-sm-4 col-xs-5 col-xs-offset-0 col-xs-4">
												<a class="ajax-popup-link" href="popup-1bhk-spac.html">
													<img src="img/1bhk-spac.png" class="img-responsive flats">
												</a>
											</div>
										</div>
										<div class="row mob">
											<div class="col-sm-offset-2 col-sm-4 col-xs-offset-2 col-xs-4">
												<a class="ajax-popup-link" href="popup-2bhk.html">
													<img src="img/2bhk.png" class="img-responsive flats">
												</a>
											</div>
											<div class="col-sm-offset-0 col-sm-4 col-xs-5 col-xs-offset-0 col-xs-4">
												<a class="ajax-popup-link" href="popup-3bhk.html">
													<img src="img/3bhk.png" class="img-responsive flats">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- <div class="container fill-bloc-bottom-edge desk">
					<div class="row">
						<div class="col-sm-12 bounce animDelay02 animated noanimated"> -->
							<a id="scroll-hero" class="blocs-hero-btn-dwn"  href="#page6" rel="relativeanchor"><span class="fa fa-chevron-down"></span></a>
						<!-- </div>
					</div>
				</div> -->
			</div>

			<div class="section bg-Elevation1">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 text-center1">
							<h1 class="mg-md tc-turquoise-blue bk text-left fadeIn animDelay02 animated noanimated">
								5 REASONS TO INVEST WITH CITY OF MUSIC
							</h1>
							<div id="myCarousel" class="carousel slide fadeIn animDelay02 animated noanimated" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators desk">
								    <li data-target="#myCarousel" data-slide-to="0" class="active md">1</li>
								    <li data-target="#myCarousel" data-slide-to="1" class="md">2</li>
								    <li data-target="#myCarousel" data-slide-to="2" class="md">3</li>
								    <li data-target="#myCarousel" data-slide-to="3" class="md">4</li>
								    <li data-target="#myCarousel" data-slide-to="4" class="md">5</li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
								    <div class="item active">
								    	<div class="row">
								    		<div class="col-sm-offset-1 col-sm-3 col-xs-offset-4 col-xs-4">
								      			<img src="img/imagica.png" class="img-responsive">
							      			</div>
							      			<div class="col-sm-8 desk">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">Close to Adlabs Imagica</h3>
							      			</div>
								      	</div>
								      	<div class="row mob">
								      		<div class="col-xs-offset-1 col-xs-10">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">Close to Adlabs Imagica</h3>
							      			</div>
								      	</div>
								    </div>
									<div class="item">
								    	<div class="row">
								    		<div class="col-sm-offset-1 col-sm-3 col-xs-offset-4 col-xs-4">
								      			<img src="img/distance.png" class="img-responsive">
							      			</div>
							      			<div class="col-sm-8 desk">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">90mins drive from Mumbai</h3>
							      			</div>
								      	</div>
								      	<div class="row mob">
								      		<div class="col-xs-offset-1 col-xs-10 mob">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">90mins drive from Mumbai</h3>
							      			</div>
								      	</div>
								    </div>
								    <div class="item">
								    	<div class="row">
								    		<div class="col-sm-offset-1 col-sm-3 col-xs-offset-4 col-xs-4">
								      			<img src="img/airport.png" class="img-responsive">
							      			</div>
							      			<div class="col-sm-8 desk">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">New Airport coming up nearby</h3>
							      			</div>
								      	</div>
								      	<div class="row mob">
								      		<div class="col-xs-offset-1 col-xs-10 mob">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">New Airport coming up nearby</h3>
							      			</div>
								      	</div>
								    </div>
								    <div class="item">
								    	<div class="row">
								    		<div class="col-sm-offset-1 col-sm-3 col-xs-offset-4 col-xs-4">
								      			<img src="img/highway.png" class="img-responsive">
							      			</div>
							      			<div class="col-sm-8 desk">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">4 lane highway touching Khopoli</h3>
							      			</div>
								      	</div>
								      	<div class="row mob">
								      		<div class="col-xs-offset-1 col-xs-10 mob">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">4 lane highway touching Khopoli</h3>
							      			</div>
								      	</div>
								    </div>
								    <div class="item">
								    	<div class="row">
								    		<div class="col-sm-offset-1 col-sm-3 col-xs-offset-4 col-xs-4">
								      			<img src="img/smart.png" class="img-responsive">
							      			</div>
							      			<div class="col-sm-8 desk">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">Maharashtra's first Smart city coming up in Khalapur</p>
							      			</div>
								      	</div>
								      	<div class="row mob">
								      		<div class="col-xs-offset-1 col-xs-10 mob">
								      			<h3 class="md text-left tc-white fadeIn animDelay02 animated noanimated">Maharashtra's first Smart city coming up in Khalapur</p>
							      			</div>
								      	</div>
								    </div>
								  </div>

								  <!-- <!-- Left and right controls 
								  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a> -->
							</div>
							<h1 class="mg-md tc-turquoise-blue bk text-left fadeIn animDelay02 animated noanimated text-center1 padtop-lg">
								WANT TO LEARN MORE?
							</h1>
							<!-- <h2 class="mg-md tc-turquoise-blue md text-left fadeIn animDelay02 animated noanimated">
								Do Your Research
							</h2>
							<p class="md text-left tc-white fadeIn animDelay02 animated noanimated">
								You want to learn more before you reach to us? Perfectly fine. Take a deep dive into our brochure and learn exactly how Music and the City will amalgamate to create the best place for music aficionados. Our contact details are right here if case you need help.
							</p> -->
							<a href="brochure.pdf" id="downloadbrouchure" class="btn btn-lg btn-turquoise-blue fadeIn animDelay02 animated noanimated" style="font-family: 'demi';font-size:26px;">DOWNLOAD BROCHURE</a>
							
						</div>
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-3 form fadeIn animDelay02 animated noanimated desk">
							<form id="form_2" method="post" action="question/thankyou.php">
								<div><h2 class=" tc-turquoise-blue bk text-center">Interested?</h2></div>
								<div class="form-group">
									<input id="name" name="name" class="form-control"  placeholder="Name"required />
								</div>
								<div class="form-group">
									<input id="email" name="email" class="form-control" type="email" placeholder="Email" required />
								</div>
								<div class="form-group">
									<input id="phone" name="phone" class="form-control" type="phone" placeholder="Phone Number" required />
								</div>
			<!-- 					<div class="form-group">
									<label>
										Message
									</label><textarea id="message" class="form-control" rows="4" cols="50" required></textarea>
								</div> --> 
								<button class="bloc-button btn btn-lg btn-block btn-turquoise-blue" type="submit" style="font-family:'demi';">
									REQUEST CALL BACK
								</button>
							</form>
							<div>
								<h3 class=" tc-turquoise-blue bk text-center">OR</h3>
							</div>
							<button class="bloc-button btn btn-lg btn-block btn-turquoise-blue pointer demi">
									<a href="tel:+918898087507" class="demi" style="font-size:15px;text-decoration:none;color: white;">CALL US ON 8898087507</a>
							</button>
						</div>
					</div>
				</div>
				<!-- <div class="container fill-bloc-bottom-edge desk">
					<div class="row">
						<div class="col-sm-12 bounce animDelay02 animated noanimated"> -->
							<a id="scroll-hero" class="blocs-hero-btn-dwn" href="#page7" rel="relativeanchor"><span class="fa fa-chevron-down"></span></a>
						<!-- </div>
					</div>
				</div> -->
			</div>
			
			<div class="section bg-Elevation2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 text-center1 fadeIn animDelay02 animated noanimated">
									<h2 class="mg-md tc-turquoise-blue bk">
										ABOUT CITY OF MUSIC
									</h2>
									<p class="text-left md tc-white  text-center1">
										City Of Music is India's first music inspired township, developed by Nirvana Realty & presented by Disha Direct. City Of Music is meticulously designed by the legendary Architect Hafeez Contractor and endorsed by Sarod Maestro Ustad Amjad Ali Khan and renowned playback singers Shaan and Sunidhi Chauhan. Packed with amenities such as Music Themed Clubhouse, Open Air Concert Area, Musical Fountains, Recording Studio, Music Academy, every moment spent at City of Music will feel magical.
									</p>
								</div>
								<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 text-center1 fadeIn animDelay02 animated noanimated">
									<h2 class="mg-md text-right tc-turquoise-blue bk  text-center1">
										ABOUT NIRVANA REALTY
									</h2>
									<p class="text-right md tc-white  text-center1">
										Headed by father-son duo, Pravin Agarwal and Punit Agarwal, Nirvana Realty have made constructing eco friendly and green second homes their speciality. A point of reference is Wollywood, their Bollywood inspired township in Wada, which guarantees inhabitants a film themed lifestyle. Apart from their latest endeavour, City Of Music on Khopoli Pali Road, Nirvana Realty have several high profile projects under their belt in locales like Malshej Ghat and Lonavla.
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="container fill-bloc-bottom-edge desk">
						<div class="row">
							<div class="col-sm-12 bounce animDelay02 animated noanimated"-->
								<a id="scroll-hero" class="blocs-hero-btn-dwn"  href="#page8" rel="relativeanchor"><span class="fa fa-chevron-down"></span></a>
							<!--/div>
						</div>
					</div> -->
				</div>
				<!-- <div class="container fill-bloc-bottom-edge desk">
					<div class="row ">
						<div class="col-sm-12">
							<p class="text-center tc-white md">Designed & developed by <a href="www.aandb.xyz" class="tc-white md">A&B</a></p>
						</div>
					</div>
				</div> -->
			</div>
			
			
			<div class="section bg-contact">
				<div class="container">
					<div class="row">
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-5 fadeIn animDelay02 animated noanimated desk">
							<h2 class="mg-md text-left tc-turquoise-blue bk  text-center1">
								CONTACT US
							</h2>
							<h3 class="mg-md text-left tc-turquoise-blue md text-center1">
								MARKETED BY DISHA DIRECT
							</h3>
							<p class="text-left md tc-white  text-center1">
								301/2/3, Orion Business Park, <br>Next to Wonder Mall, <br>Kapurbawdi, Ghodbunder Road, <br>Thane (W) - 400 610 <br>
								Phone:- +91 99876 84725
							</p>
							<br>
							<h3 class="mg-md text-left tc-turquoise-blue md text-center1">
								DEVELOPED BY NIRVANA REALTY
							</h3>
							<p class="text-left md tc-white  text-center1">
								B/50 ,Deluxe house, <br>
								Off New Link Road, <br>
								Andheri West, <br>
								Mumbai 400 053. <br>
							</p>
						</div>
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-4 form fadeIn animDelay02 animated noanimated" id="form">
							<form id="form_2" method="post" action="question/thankyou.php">
								<div><h2 class=" tc-turquoise-blue bk text-center">Interested?</h2></div>
								<div class="form-group">
									<input id="name" name="name" class="form-control"  placeholder="Name"required />
								</div>
								<div class="form-group">
									<input id="email" name="email" class="form-control" type="email" placeholder="Email" required />
								</div>
								<div class="form-group">
									<input id="phone" name="phone" class="form-control" type="phone" placeholder="Phone Number" required />
								</div>
			<!-- 					<div class="form-group">
									<label>
										Message
									</label><textarea id="message" class="form-control" rows="4" cols="50" required></textarea>
								</div> --> 
								<button class="bloc-button btn btn-lg btn-block btn-turquoise-blue demi"  style="font-family:'demi';" type="submit">
									REQUEST CALL BACK
								</button>
							</form>
							<div>
								<h3 class=" tc-turquoise-blue bk text-center">OR</h3>
							</div>
							<button class="bloc-button btn btn-lg btn-block btn-turquoise-blue pointer" style="font-family:'demi';">
									<a href="tel:+918898087507" class="demi" style="font-size:15px;text-decoration:none;color: white;">CALL US ON 8898087507</a>
							</button>
						</div>
					</div>				
				</div>
			</div>
		</div>	
	<!-- Main container END -->
<!-- Google Code for Remarketing Tag -->

        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 935638599;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/935638599/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>
        <!-- AB-Facebook Pixel Code -->
			<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','https://connect.facebook.net/en_US/fbevents.js');

			fbq('init', '142719309466130');
			fbq('track', "PageView");</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=142719309466130&ev=PageView&noscript=1"
			/></noscript>
		<!-- End Facebook Pixel Code -->

	</body>

	<!-- Google Analytics -->

	<!-- Google Analytics END -->
	<!-- <script type="text/javascript">
		if (window.width >768) {
		 $('head').append('<script type="text/javascript" src="js/jquery.pagepiling.js" />');
		}
	</script> -->

	<script type="text/javascript">
		function adjustStyle(width) {
		  width = parseInt(width);
		  if (width < 768) {
		    $("#size-stylesheet").attr("href", "");
		  } else {
		    $("#size-stylesheet").attr("href", "css/animate.css");
		  }
		}

		$(function() {
		  adjustStyle($(this).width());
		  $(window).resize(function() {
		    adjustStyle($(this).width());
		  });
		});
	</script>

	<script type="text/javascript">

		$(document).ready(function() {

			/*
			* Plugin intialization
			*/
	    	$('#pagepiling').pagepiling({
	    		menu: '#menu',
	    		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6','page7','page8'],
			    sectionsColor: ['#fff','#fff','#fff','#fff','#fff','#fff','#fff'],
			    navigation: {
			    	'position': 'left',
			   		'tooltips': ['MQ', 'Intro', 'Musical Amenities', 'Other Amenities', 'Musical Getaways', 'Reasons to Invest', 'About Us', 'Contact Us']
			   	},
			    afterRender: function(){
			    	$('#pp-nav').addClass('custom');
			    },
			    afterLoad: function(anchorLink, index){
			    	if(index>1){
			    		$('#pp-nav').removeClass('custom');
			    	}else{
			    		$('#pp-nav').addClass('custom');
			    	}
			    }
			});

			/*
		    * Internal use of the demo website
		    */
		    $('#showExamples').click(function(e){
				e.stopPropagation();
				e.preventDefault();
				$('#examplesList').toggle();
			});

			$('html').click(function(){
				$('#examplesList').hide();
			});
	    });
    </script>
    <script type="text/javascript">
	$('.ajax-popup-link').magnificPopup({
  type: 'ajax'
	});
</script>
<script>
    $('#myCarousel').carousel
    ({
        interval: 3000,


        })

</script>
</html>
