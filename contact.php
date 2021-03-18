<?php


$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme dot com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>

<html lang="en"> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Alem's blog</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="https://www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	
	
	
</head>

<body class="contact-page">
	<div class="wrap-body">
		<header class="">
			<div class="logo">
				<a href="#">Alem's blog</a>
				<span>Industrial Automation Articles</span>
			</div>
			<div id="cssmenu" class="align-center">
				<ul>
					<li><a href="index.html"><span>Home</span></a></li>
					<li><a href="gallery.html"><span>Gallery</span></a></li>
					<li class="has-sub"><a href="archive.html"><span>Blog</span></a>
						<ul>
							<li class="has-sub"><a href="archive.html"><span>Recent</span></a>
								
                       		<li class="has-sub"><a href="single.html"><span>Popular</span></a>
								</li>
						</ul>
					</li>
					<li><a href="single.html"><span>About</span></a></li>
					<li class="active last"><a href="contact.html"><span>Contact</span></a></li>
				</ul>
			</div>
			<div id="owl-slide" class="owl-carousel">
				<div class="item">
					<img src="images/slide1.jpg" />
				</div>
				<div class="item">
					<img src="images/slide2.jpg" />
				</div>
				<div class="item">
					<img src="images/slide3.jpg" />
					
				</div>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<section class="content-box zerogrid">
					<div class="row wrap-box"><!--Start Box-->
						<h3 class="t-center" style="font-size: 30px;margin: 10px 0 30px">Contact Form</h3>
						<div class="embed-container maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d736.7864433574844!2d69.6466368292284!3d42.38204099869911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDIyJzU1LjQiTiA2OcKwMzgnNDkuOSJF!5e0!3m2!1sru!2skz!4v1605340871873!5m2!1sru!2skz" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
						</div>
						<div id="contact_form">
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<form name="form1" id="ff" method="post" action="contact.php">
								<label class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
										</div>
									</div>
								</label>
								<label class="row">
									<div class="wrap-col">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
									</div>
								</label>
								<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
							</form>
						</div>
					</div>
				</section>
				
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="col-1-4 col-footer-1">
						<div class="wrap-col">
						<h3 class="widget-title">About Us</h3>
							<p>Alem's Blog is an online publisher of automation-related content. We help our readers automate
								their factories and processes, solve problems and improve production efficiency
								by providing the latest industry news.</p>
						</div>
					</div>
					<div class="col-1-4 col-footer-2">
						<div class="wrap-col">
							<h3 class="widget-title">Recent Post</h3>
							<ul>
								<li><a href="blog.html">INDUSTRIAL AUTOMATION DEVELOPMENT TRENDS</a></li>
								<li><a href="blog2.html">COMPETENCE MODEL FOR INDUSTRIAL AUTOMATION</a></li>
								<li><a href="blog3.html">A REVOLUTION IS COMING: THE MAIN AREAS OF DEVELOPMENT OF INDUSTRIAL AUTOMATION</a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-4 col-footer-3">
						<div class="wrap-col">
							<h3 class="widget-title">Tag Cloud</h3>
							<a href="#">automation</a>
							<a href="#">assembly</a>
							<a href="#">system</a>
							<a href="#">electronics</a>
							<a href="#">mechanical</a>
							<a href="#">smart</a>
							<a href="#">machine</a>
							<a href="#">production</a>
							<a href="#">industry</a>
							<a href="#">equipment</a>	
							<a href="#">modern</a>
							<a href="#">robotic</a>
							<a href="#">machinery</a>
							<a href="#">digital</a>
							<a href="#">precision</a>
							<a href="#">futuristic</a>
							<a href="#">conveyer</a>
							<a href="#">software</a>
							<a href="#">manufacturing</a>
							<a href="#">automatic</a>
							<a href="#">construction</a>
							<a href="#">engineering</a>
						</div>
					</div>
					<div class="col-1-4 col-footer-4">
						<div class="wrap-col">
							<h3 class="widget-title">Gallery</h3>
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="images/11.jpg"></a>
										<a href="#"><img src="images/1.jpg"></a>
										<a href="#"><img src="images/13.jpg"></a>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="images/10.jpg"></a>
										<a href="#"><img src="images/9.jpg"></a>
										<a href="#"><img src="images/4.jpg"></a>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="images/2.jpg"></a>
										<a href="#"><img src="images/6.jpg"></a>
										<a href="#"><img src="images/5.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="zerogrid bottom-footer">
				<div class="row">
					<div class="bottom-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-vimeo"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="copyright">
				    Copyright @ - Designed by Alem</a>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>