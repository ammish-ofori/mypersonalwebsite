<?php

if($_POST["submit"]) {
    $recipient="kelechiudoagwu@gmail.com";
    $subject="Potential Client";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Kelechi Udoagwu - Communications and Business Development</title>
	<meta name="robots" content="index, follow">
	<meta name="language" content="English">
	<meta name="description" content="Kelechi Udoagwu has passion for communications and business development. Niche is African startups - Meltwater Ghana">
	<meta name="keywords" content="kelechi udoagwu, meltwater ghana contact, eit meltwater ghana, business development meltwater ghana kelechi udoagwu, business dev mest ghana interswitch">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <META property="og:title" content="Kelechi Udoagwu" />
  <META property="og:type" content="Website" />
  <META property="og:url" content="https://kelechiudoagwu.com/" />
  <META property="og:image" content="images/kelechi_udoagwu.png" />
  <META property="og:site_name" content="Kelechi Udoagwu - Communications and Business Development" />
	<!-- styles -->
	<link href='http://fonts.googleapis.com/css?family=Raleway|Dancing+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script src="assets/js/googleanalytics.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">Communicate with Impact</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#services" class="smoothScroll">Services</a></li>
                    <!-- <li><a href="blog.html" target="_blank">Blog</a></li> -->
                    <li><a href="#about" class="smoothScroll">About</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
            </div>
    </nav>
    <div class="thanks wow shake">
    		<?=$thankYou ?>

    </div>
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-7 text-center wow lightSpeedIn">
				<br><br><br><br><br><br><br><br><br><br>
				<h1 id="header-h1">KELECHI UDOAGWU</h1>
				<h2 id="header-h2">Communications and Business Development</h2>
				
			</div><br><br>
			<div class="col-md-3"><img src="images/kelechi_udoagwu_meltwater_communications.png" class="web-image wow pulse"></div>
			<div class="col-md-2"></div>
		</div><br>
	</div>
</div>
	
	<div id="services">
	<div id="serve">
		<div class="container"><br><br>
			<h2 class="other-h3"><strong> Services </strong></h2><br>
			<div class="row">
				<div class="col-md-6">
					<div class="s-column">
						<p><i class="fa fa-pencil-square-o"></i> &nbsp Business Communications</p>
						<p><i class="fa fa-pencil-square-o"></i> &nbsp Business Development</p>
						<p><i class="fa fa-pencil-square-o"></i> &nbsp Public Relations</p>
						
				</div>
				</div>
				<div class="col-md-6">
					<div class="s-column">
						<p><i class="fa fa-pencil-square-o"></i> &nbsp Web Content Writing</p>
						<p><i class="fa fa-pencil-square-o"></i> &nbsp Freelance SEO Writing</p>
						<p><i class="fa fa-pencil-square-o"></i> &nbsp Targeted Blog Writing</p>		
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-xs-12">
					<h2 class="other-h3"><strong> Portfolio Excerpt </strong></h2><br>
					<div class="gr row">
						<div class="gc col-md-3  wow fadeInLeft">
							<a href="http://blog.kudobuzz.com/2015/05/13/practicable-seo-tips-for-e-commerce-store-owners/" target="_blank"><img src="images/portfolio3-kelechi-udoagwu.jpg" class="client-logo"></a>
						</div>
						<div class="gc col-md-3 wow fadeInDown">
							<a href="http://allwomenstalk.com/u/559ea7d21c96a790378b456b" target="_blank"><img src="images/portfolio4-kelechi-udoagwu.jpg" class="client-logo"></a>
						</div>
						<div class="gc col-md-3 wow fadeInUp">
							<a href="http://www.ssbbw-magazine.com/ssbbw-fashion.php" target="_blank"><img src="images/portfolio-kelechi-udoagwu-writing.jpg" class="client-logo"></a>
						</div>
						<div class="gc col-md-3 wow fadeInRight">
							<a href="http://blog.kudobuzz.com/2015/05/27/why-social-proof-is-important-for-your-e-commerce-business/" target="_blank"><img src="images/portfolio1-kelechi-udoagwu-writing.jpg" class="client-logo"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<div id="about">
		<div id="features-wrapper">
		<div class="container">
				<div class="row"><br><br>
				<!-- 	<div class="col-md-4">
						<div class="subscribe">
	        <h4><strong>Receive Short, Witty Weekly Posts From My Business Journal:<br><br><span class="mp"> Millenial Professionals</span></strong></h4><br>
        <form role="form">
								<div class="form-group">
									<div class="form_title" for="name">Email Address:</div><br>
									<input type="text" class="form-control">
								</div>
							</form>
							<button class="btn">Send</button>    
      </div>	
					</div> -->
					<div class="col-md-12 padded">
						<p>Hello! I am Kelechi Udoagwu, a communications/ content and business development zealot.</p>
						<p>I am presently on scholarship at the premier startup institution in Africa - <a href="http://meltwater.org" target="_blank"><span class="readmore">Meltwater School/Incubator </span></a>(MEST).</p>
						<p>With my experience and extensive knowledge of the growing start-up scene in West Africa and the world, I'm a sucker for new business challenges. </p>
						<p>As a side hustle, I write and manage web copy for businesses.</p>
						
						<p>You can view more of my web content<a href="https://www.kelechiudoagwu.contently.com" target="_blank"><span class="readmore"> portfolio</span></a>, download my <a href="https://www.visualcv.com/kelechi_udoagwu" target="_blank"><span class="readmore">resum&eacute</span></a> or <a href="#contact"><span class="readmore">contact me </span></a>here or via <a href="#copyright" class="smoothScroll"><span class="readmore">social media</span></a>.</p>	
					</div>
				</div>
				</div>
				<!-- <h2 class="other-h3"><strong>Clients </strong></h2><br> -->
				<div class="row client">				
					<div class="col-md-2 col-xs-6">
	   					<a class="client-image" href="http://meltwater.org/author/kelechi-udoagwu/" target="_blank"><img class="client-logo" src="images/mest-logo-kelechi-udoagwu.jpg"></a>
	   				</div>
					<div class="col-md-2 col-xs-6">
						<a class="client-image" href="http://www.kudobuzz.com" target="_blank"><img class="client-logo" src="images/kudobuzz-logo-kelechi-udoagwu.jpg"></a>
					</div>
					<div class="col-md-2 col-xs-6">
	   					<a class="client-image" href="http://glance.tips/user/7i26167u" target="_blank"><img class="client-logo" src="images/kelechi-udoagwu-glance-logo.png"></a>
	   				</div>
					<div class="col-md-2 col-xs-6">
	   					<a class="client-image" href="http://www.ssbbw-magazine.com/ssbbw-fashion.php" target="_blank"><img class="client-logo" src="images/ssbbw-logo.jpg"></a>
	   				</div>
	   				<div class="col-md-2 col-xs-6">
	   					<a class="client-image" href="http://www.hackifi.com" target="_blank"><img class="client-logo" src="images/hackifi-logo-kelechi-udoagwu.png
	   					"></a>
	   				</div>
	   					<div class="col-md-2 col-xs-6">
	   					<a class="client-image" href="http://collectivefaith.com/blog/144/don-039-t-be-too-hard-on-yourself-by-kelechi-udoagwu/#gs.775422748aaf45949d00b777f28a7f78" target="_blank"><img class="client-logo" src="images/faithwriters-logo-kelechi-udoagwu.jpg"></a>
	   				</div>
				</div><br><br>
		</div>
</div>

	<div id="contact">
		<div class ="container-fluid">
		<h2 class="other-h3"><strong>Contact me and get a reply within 24 hours</strong></h2><br>
    <div class = "row serve"><br><br>
      <div class="col-xs-12 col-lg-10 col-lg-offset-1 bodytext">
           <div class = "container-fluid">

    <form method="post" action="index.php">
    	<div class="form-group">
       <br><div><label>Name:</label>
       <input name="sender" type="text" class="form-control" placeholder="What's your full name, please"></div>

        <br><div><label>Email address:</label>
        <input name="senderEmail" type="text" class="form-control" placeholder="Enter your active email so I can get back to you!"></div>

        <br><div><label>Inquiry :</label>
        <textarea rows="8" cols="104" name="message" class="form-control" placeholder="A short (and detailed) description of your inquiry/ need"></textarea></div>

        <br><input type="submit" name="submit" class="btn">
     </div>
    </form><br>
<!-- <form role="form">
								<div class="form-group">
									<div for="name">Name</div>
									<input type="text" class="form-control" placeholder="What's your full name, please">
								</div>
							</form>
							<form role="form">
								<div class="form-group">
									<div for="name">Email Address</div>
									<input type="text" class="form-control" placeholder="Enter your active email so I can get back to you!">
								</div>
								</form>
								<form role="form">
								<div class="form-group">
									<div for="name">Company Website or Facebook Page</div>
									<input type="text" class="form-control" placeholder="Or any useful link to confirm that you are a real potential client">
								</div>
								</form>
								<form role="form">
									<div class="form-group">
										<div for="name">Inquiry</div>
										<textarea rows="8" cols="104"  class="form-control" placeholder="A short (and detailed) description of your inquiry/ need"></textarea>
									</div>
								</form>
								<button class="btn">Send</button>
							</div>					
						</div>
					</div> -->


<div class="row">
<center> 
<!-- <h3 class="other-h3">My Social Network:</h3>  -->
 <a class="social-icons" href="https://linkedin.com/in/kelechiudoagwu" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
 <a class="social-icons" href="https://www.facebook.com/mskelechi.udoagwu" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
 <a class="social-icons" href="https://twitter.com/Kay_Bellybutton" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
  <a class="social-icons" href="https://plus.google.com/u/1/+KelechiUdoagwu" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a><br>
  </center></div><br>
</div>
</div>
</div>
</div>
</div>

<div class="copyright row">
				<p class="text-center">Copyright &copy; 2015. All rights reserved. Kelechi Udoagwu.</p>
</div>



	<!-- scripts -->		
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow84.js"></script>

</body>
</html>



